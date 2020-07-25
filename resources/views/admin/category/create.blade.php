@extends('adminlte::page')

@section('title', 'Add category')

@section('content_header')
    <h1>Add category</h1>
@stop

@section('content')

    @include('admin._messages')

    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control">
        </div>
        <div class="form-group">
            <label for="file">Image</label>
            <input type="file" name="file" id="file" class="form-control">
        </div>
        <button class="btn btn-primary">Save</button>
    </form>
@stop