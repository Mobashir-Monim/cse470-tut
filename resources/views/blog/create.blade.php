@extends('layouts.app')

@section('content')
    <form action="/store" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="input-group blog-input-group">
                    <input type="text" name="title" class="form-control blog-input-group w-75" placeholder="Blog Title">
                    <select name="category" class="form-control blog-input-group">
                        <option value="">Select a category</option>
                        <option value="Category 1">Category 1</option>
                        <option value="Category 2">Category 2</option>
                        <option value="Category 3">Category 3</option>
                        <option value="Category 4">Category 4</option>
                        <option value="Category 5">Category 5</option>
                    </select>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-12">
                <textarea name="body" class="form-control blog-body" cols="30" rows="10" placeholder="Type the contents of the blog here"></textarea>
                <button class="btn btn-dark w-100 btn-save"><i class="fas fa-save fa-3x"></i></button>
            </div>
        </div>
    </form>
@endsection