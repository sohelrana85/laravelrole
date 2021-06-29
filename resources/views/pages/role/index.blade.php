@extends('layouts.app', ['title' => 'Role'])

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
            <header class="card-header">
                Dynamic Table
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="card-body">
                <div class="adv-table">
                    <table class="display table table-bordered table-striped" id="dynamic-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Guard Name</th>
                                <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr class="gradeX">
                                <td>{{$role->id}}</td>
                                <td>{{$role->name}}</td>
                                <td>{{$role->guard_name}}</td>
                                <td></td>
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
