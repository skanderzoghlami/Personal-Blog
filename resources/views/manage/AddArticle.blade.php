@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="zidarticle" method="POST"  enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group">
                <label for="usr">title:</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="usr">body:</label>
                <textarea rows="4" cols="50"  name="body" class="form-control">
	      </textarea>
            </div>

            </br>
            <div class="form-group" >
                <label class="custom-file">
                    <input type="file" name="photo" class="custom-file-input">
                    <span class="custom-file-control"></span>
                </label>
            </div>
            <input type="submit" value="add new" class="btn btn-primary"/>
        </form>
    </div>

@endsection