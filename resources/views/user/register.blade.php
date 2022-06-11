@extends('layout.main')
@section('content')
        <h1>REGISTRATION</h1>
        <form method="post" action="">
        {{@csrf_field()}}
        
        Name: <input type="text" name="name" placeholder="Enter Name" value="{{old('name')}}"><br>
        @error('name')
            {{$message}}<br>
        @enderror
        Email: <input type="name" name="email" placeholder="Enter Email" value="{{old('email')}}"><br>
        @error('email')
            {{$message}} <br>
        @enderror
        Password: <input type="password" name="password" ><br>
        @error('password')
            {{$message}}<br>
        @enderror
        Confirm Password: <input type="password" name="conf_password"><br>
        @error('conf_password')
            {{$message}}<br>
        @enderror
        Type: <input type="radio" id="type" name="type" value="User">
        <label for="type">User</label>
        <input type="radio" id="type" name="type" value="Admin">
        <label for="type">Admin</label><br><br>
        @error('type')
            {{$message}}<br>
        @enderror
        <input type="reset">
        <input type="submit" value="Register">
    </form>
@endsection