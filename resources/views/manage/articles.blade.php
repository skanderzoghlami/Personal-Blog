@extends('layouts.app')

@section('content')
        <table>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">user id</th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $a )
                <tr>
                    <td>{{$a->id}}</td>
                    <td>{{$a->title}}</td>
                    <td>{{$a->user_id}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
@endsection