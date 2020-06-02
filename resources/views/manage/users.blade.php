@extends('layouts.app')

@section('content')
    <table>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">is Admin</th>

            </tr>
            </thead>
            <tbody>
            @foreach($users as $a )
                <tr>
                    <td>{{$a->id}}</td>
                    <td>{{$a->name}}</td>
                    <td>{{$a->email}}</td>
                    <td>{{$a->isAdmin}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
@endsection