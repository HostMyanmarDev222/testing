@extends('layout')
 
@section('content')

    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            
        </tr>
        @endforeach
    </table>
    {{$users->links()}}
      
@endsection