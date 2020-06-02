@extends('layouts.app')

@section('content')
    <section class="container">
    <h1> To see all the data</h1>
    <a href="{{url('adminarticles')}}">Articles</a>
    <br>
    <a href="{{url('adminusers')}}">users</a>
    <br>
    <a href="{{url('admincomments')}}">comments</a>
    <br>
    <h1>If you want to delete an article / comment or a user !</h1>
    <form method="post" action="delete">
        {{csrf_field()}}
        <label for="id" class="col-form-label"> Insert the ID you want to delete</label>
        <input type="text" class="input-group" name="id" >
        <label for="type" class="col-form-label"> Insert the type you want to delete</label>
        <input type="text" class="input-group" name="type" >
        <button type="submit">Submit</button>
    </form>
    <h1> If you want to add an admin</h1>
    <form method="post" action="addadmin">
        {{csrf_field()}}
        <label for="id" class="col-form-label"> the user with this id will become an admin</label>
        <input type="text" class="input-group" name="id" >
        <button type="submit">Submit</button>
    </form>
    <h1>If you want to remove an admin</h1>
    <form method="post" action="removeadmin">
        {{csrf_field()}}
        <label for="id" class="col-form-label"> the user with this id will no longer be an admin</label>
        <input type="text" class="input-group" name="id" >
        <button type="submit">Submit</button>
    </form>
        <br>
        <h1>If you want to add an <a href="{{url('/zidarticle')}}">Article</a></h1>
    </section>
@endsection