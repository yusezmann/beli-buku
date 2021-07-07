@extends('layouts.global')

@section('title') Create Category @endsection

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

<div class="col-md-8">
    <form
    enctype="multipart/form-data"
    class="bg-white shadow-sm p-3"
    action="{{route('categories.store')}}"
    method="POST">

        @csrf

        <label>Category name</label><br>
        <input
        type="text"
        class="form-control {{$errors->first('name') ? "is-invalid" : ""}}"
        value="{{old('name')}}"
        name="name">
        <div class="invalid-feedback">
        {{$errors->first('name')}}
        </div>
        <br>

        <label>Category image</label>
        <input
        type="file"
        class="form-control {{$errors->first('image') ? "is-invalid" : ""}}"
        name="image">
        <div class="invalid-feedback">
        {{$errors->first('image')}}
        </div>

        <br>

        <input
        type="submit"
        class="btn btn-primary"
        value="Save">

    </form>
</div>

@endsection
