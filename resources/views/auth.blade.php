@extends('layouts.master')

@push('title')
Login
@endpush

@push('style')
<link rel="stylesheet" href="{{ asset('assets/css/auth.css')}}" />
@endpush

@section('contents')
<div class="container">
  <div class="blueBg">
    <div class="box signin">
      <h2>Already Have an Account</h2>
      <button class="signinBtn">Sign In</button>
    </div>
    <div class="box signup">
      <h2>Don't Have an Account</h2>
      <button class="signupBtn">Sign Up</button>
    </div>
  </div>
  <div class="formBx">
    <div class="form signinForm">
      <form action="/auth/login" method="POST">
        @csrf
        <h3>Sign In</h3>
        <input type="text" placeholder="Username" name="email" value="{{ Session::get('email') }}">
        <input type="password" placeholder="Password" name="password">
        <input type="submit" value="Sign In">
        <a href="#" class="forget">Forget Password</a>
      </form>
    </div>
    <div class="form signup">
      <form action="/auth/register" method="POST">
        @csrf
        <h3>Sign Up</h3>
        <input type="text" placeholder="Name" name="username">
        <input type="text" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="password">
        <input type="password" placeholder="Confirm Password" name="password">
        <input type="submit" value="Register">
      </form>
    </div>
  </div>
</div>

<script>
  const signinBtn = document.querySelector('.signinBtn');
  const signupBtn = document.querySelector('.signupBtn');
  const body = document.querySelector('body');
  const formBx = document.querySelector('.formBx');

  signupBtn.onclick = function() {
    body.classList.add('aktif');
    formBx.classList.add('aktif');
  }

  signinBtn.onclick = function() {
    body.classList.remove('aktif');
    formBx.classList.remove('aktif');
  }
</script>
@endsection