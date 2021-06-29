@extends('layouts.app', ['title' => 'Edit Blog Post'])

@push('css')
@endpush

@section('content')
<div class="row justify-content-center">
    <div class="col-sm-8">
        <section class="card">
            <header class="card-header font-weight-bold">
                Update Blog
            </header>
            <div class="card-body">
                @if(session('message'))
                <div class="alert alert-{{ session('type')}}">
                    {{ session('message') }}
                </div>

                @endif
                <form action="{{route('blog.update', $blog->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="from-row mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{$blog->title}}">
                    </div>
                    <div class="from-row mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ $blog->description }}</textarea>
                    </div>
                    <div class="from-row">
                        <button class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>

@endsection

@push('js')
@endpush
