@extends('adminlte::page')

@section('title', 'Edit category')

@section('content_header')
    <h1>Edit category</h1>
@stop

@section('content')

    @include('admin._messages')

    <form action="{{route('category.update', ['category'=>$category->id])}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.category._form')
    </form>
@stop