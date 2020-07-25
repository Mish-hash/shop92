@extends('adminlte::page')

@section('title', 'Add category')

@section('content_header')
    <h1>Add category</h1>
@stop

@section('content')

    @include('admin._messages')

    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
        @include('admin.category._form')
    </form>
@stop

@section('js')
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace('description', options);
    </script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>
@endsection