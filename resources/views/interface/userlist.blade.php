@extends('layout.main1')
@section('content')
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
    </tr>
    @foreach($users as $us)
        <tr>
            <td>{{$us->id}}</td>
            <td><a href="{{route('interface.userdetails',['id'=>$us->id])}}">{{$us->name}}</td>
            
        </tr>
    @endforeach
</table>
@endsection