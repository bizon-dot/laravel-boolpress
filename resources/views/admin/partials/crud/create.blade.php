@extends('admin.layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-12">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value = "{{ old('title') }}" id="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="description">Description</label>

                <textarea class="form-control" id="description" name="content">
                    {{ old('content') }}
                </textarea>
            </div>
            <div class="form-group">
                <label for="type">Author</label>
                <input type="text" name="author" class="form-control" value = "{{ old('author') }}" id="author" placeholder="Enter author">
            </div>
            <div class="form-group">
                <label for="series">Slug</label>
                <input type="text" name="slug" class="form-control" value = "{{ old('slug') }}" id="slug" placeholder="Enter slug">
            </div>
         
            <div class="row">
                <div class="col-12 d-flex p-2 justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection