<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class BlogController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //asign Roles
            // $user = User::find(Auth::id());
            // $user->assignRole(['admin']);
            // $user->syncRoles(['admin']);


        // Assign role permission
            // $role = Role::findByName('admin');
            // $role->syncPermissions(['blog.edit','blog.view']);

        $user = User::find(Auth::id());
        if(!$user->can('blog.view')){
            abort(403, 'sorry! Access Denied');
        }

        $blog = Blog::all();

        return view('pages.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::find(Auth::id());
        if(!$user->can('blog.create')){
            abort(403, 'sorry! Access Denied');
        }
        return view('pages.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find(Auth::id());
        if(!$user->can('blog.create')){
            abort(403, 'sorry! Access Denied');
        }

        $request->validate([
            'title' => 'required|min:5|string',
            'description' => 'required|min:10|string',
        ]);

        try {
            Blog::create([
                'user_id' => Auth::id(),
                'title' => $request->title,
                'description' =>$request->description,
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'successfully save the blog post');
            return redirect()->back();
        } catch(Exception $e){
            session()->flash('type', 'danger');
            session()->flash('message', 'Opps! Something Wrong!');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find(Auth::id());
        if(!$user->can('blog.edit')){
            abort(403, 'sorry! Access Denied for Edit');
        }

        $blog = Blog::find($id);
        return view('pages.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $blog)
    {
        $user = User::find(Auth::id());
        if(!$user->can('blog.edit')){
            abort(403, 'sorry! Access Denied for Edit');
        }

        $request->validate([
            'title' => 'required|min:5|string',
            'description' => 'required|min:10|string',
        ]);

        try {
           $post = Blog::where('id', $blog)->first();

                $post->user_id     = Auth::id();
                $post->title       = $request->title;
                $post->description = $request->description;
                $post->update();

            session()->flash('type', 'success');
            session()->flash('message', 'successfully save the blog post');
            return redirect()->route('blog.index');
        } catch(Exception $e){
            session()->flash('type', 'danger');
            session()->flash('message', 'Opps! Something Wrong!');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find(Auth::id());
        if(!$user->can('blog.delete')){
            abort(403, 'sorry! Access Denied');
        }

        Blog::find($id)->delete();

        session()->flash('type', 'Success');
        session()->flash('message', 'Blog Post Delete Successfully');
        return redirect()->back();
    }
}
