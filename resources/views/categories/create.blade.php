@extends('layouts.global')

@section('title') Create Category @endsection

@section('content')

   <div class="col-md-8">
       

        <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data" class="bg-white shadow-sm p-3">
            @csrf
        
            <label for="name">Category Name</label>
            <input type="text" name="name" id="name" class="form-control"/><br>
            <label for="image">Category Image</label>
            <input type="file" name="image" id="image" class="form-group"/><br>
            <input type="submit" class="btn btn-primary" value="Save">
        </form>
        
   </div>
@endsection