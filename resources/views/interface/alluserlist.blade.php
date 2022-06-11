@extends('layout.mainadmin')
@section('content')
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Type</th>
    </tr>
    @foreach($users as $us)
        <tr>
            <td>{{$us->id}}</td>
            <td><a href="{{route('interface.alluserdetails',['id'=>$us->id])}}">{{$us->name}}</td>
            <td>{{$us->type}}</td>
        </tr>
    @endforeach
</table>
@endsection