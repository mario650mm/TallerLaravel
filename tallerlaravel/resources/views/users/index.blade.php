@extends('app)
@section('content')
    <table class="table table-striped">
        <tr>
            <th>Nombres</th>
            <th>Correo</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach
    </table>
    {!! $users->render() !!}
@endsection




