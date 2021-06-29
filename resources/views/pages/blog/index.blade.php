@extends('layouts.app', ['title' => 'Blog List'])

@push('css')
<!--dynamic table-->
<link href="{{asset('materials')}}/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
<link href="{{asset('materials')}}/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('materials')}}/assets/data-tables/DT_bootstrap.css" />
@endpush

@section('content')
<div class="row">
    <div class="col-sm-12">
        <section class="card">
            <header class="card-header font-weight-bold">
                Blog List
            </header>
            <div class="card-body">
                <div class="adv-table">
                    <table class="display table table-bordered table-striped" id="dynamic-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($blog as $blog)
                            <tr class="gradeX">
                                <td>{{$blog->id}}</td>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->description}}</td>
                                <td>
                                    @can('blog.edit')
                                    <form action="{{ route('blog.edit', $blog->id)}}" method="GET">
                                        @csrf
                                        <button class="btn btn-sm btn-info">Edit</button>
                                    </form>
                                    @endcan
                                    @can('blog.delete')
                                    <form action="{{ route('blog.destroy', $blog->id)}}" method="POST">
                                        @csrf
                                        @method('Delete')
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection

@push('js')
<script type="text/javascript" language="javascript" src="{{asset('materials')}}/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="{{asset('materials')}}/assets/data-tables/DT_bootstrap.js"></script>
<script src="{{asset('materials')}}/js/respond.min.js"></script>
<!--dynamic table initialization -->
<script src="{{asset('materials')}}/js/dynamic_table_init.js"></script>
@endpush
