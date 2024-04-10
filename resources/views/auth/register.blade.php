@extends('layout.app')

@section('title', 'Register')

@section('content')

<div class="row">
    <div class="col-md-4"></div>

    <div class="card col-md-4">
        <div class="card-body">
            <h1 class="text-center">Register</h1>

            @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{session()->get('error_message')}}
            </div>
            @endif

            <form action="{{url('register')}}" method="POST" class="form-control">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" id="name">
                    @if($errors->has('name'))
                        <span class ="text-danger">{{$errors ->first('name')}}</span>
                    @endif
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email">
                    @if($errors->has('email'))
                        <span class ="text-danger">{{$errors ->first('email')}}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                    @if($errors->has('password'))
                        <span class ="text-danger">{{$errors ->first('password')}}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                    <p>Sudah punya akun ? <a href ="{{url('login')}}">Login</p>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection