@extends('layout.main')
@section('content')
        <h1>LOGIN</h1>
        <form method="post" action="">
        {{@csrf_field()}}
        
        Email: <input type="text" name="email" placeholder="Enter Email" value="{{old('email')}}"><br>
        @error('email')
            {{$message}} <br>
        @enderror
        Password: <input type="password" name="password" ><br>
        @error('password')
            {{$message}}<br>
        @enderror
        Type: <input type="radio" id="type" name="type" value="User">
        <label for="type">User</label>
        <input type="radio" id="type" name="type" value="Admin">
        <label for="type">Admin</label><br><br>
        @error('type')
            {{$message}}<br>
        @enderror
        <input type="submit" value="Login">
        </form>
@endsection