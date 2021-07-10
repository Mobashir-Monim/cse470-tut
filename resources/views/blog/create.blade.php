@extends('layouts.app')

@section('content')
    <form action="/store" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12 my-3">
                <input type="text" name="title" class="form-control" placeholder="Blog Title">
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-12 my-3">
                <textarea name="body" class="form-control" cols="30" rows="10" placeholder="Type the contents of the blog here"></textarea>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-12 my-3">
                <select name="category" class="form-control">
                    <option value="">Select a category</option>
                    <option value="Category 1">Category 1</option>
                    <option value="Category 2">Category 2</option>
                    <option value="Category 3">Category 3</option>
                    <option value="Category 4">Category 4</option>
                    <option value="Category 5">Category 5</option>
                </select>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-12 my-3">
                <button class="btn btn-dark w-100">Save</button>
            </div>
        </div>
    </form>
@endsection