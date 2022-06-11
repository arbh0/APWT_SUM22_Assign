@extends('layout.main1')
@section('content')
<br>
<table border="1">
    <tr><th>Id</th><td>{{$us->id}}</td> </tr>
    <tr><th>Name</th><td>{{$us->name}}</td></tr>
    <tr><th>Email</th><td>{{$us->email}}</td></tr>
    <tr><th>Added Time</th><td>{{$us->created_at}}</td></tr>
</table>
@endsection