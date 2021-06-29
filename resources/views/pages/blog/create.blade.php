@extends('layouts.app', ['title' => 'Create Blog Post'])

@push('css')
@endpush

@section('content')
<div class="row justify-content-center">
    <div class="col-sm-8">
        <section class="card">
            <header class="card-header font-weight-bold">
                Create Blog
            </header>
            <div class="card-body">
                @if(session('message'))
                <div class="alert alert-{{ session('type')}}">
                    {{ session('message') }}
                </div>

                @endif
                <form action="{{route('blog.store')}}" method="POST">
                    @csrf
                    <div class="from-row mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="from-row mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
                    </div>
                    <div class="from-row">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>

@endsection

@push('js')
@endpush
