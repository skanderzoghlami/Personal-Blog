@extends('layouts.app')

@section('content')
    <table>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">comment</th>
                <th scope="col">owner</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $a )
                <tr>
                    <td>{{$a->id}}</td>
                    <td>{{$a->comment}}</td>
                    <td>{{$a->owner}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
@endsection