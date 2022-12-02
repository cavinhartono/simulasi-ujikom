<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/auth.css')}}" />
  <title>Auth your a Accounts | Furnitur</title>
</head>

<body>
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
          <input type="text" placeholder="Email" name="email" value="{{ Session::get('email') }}">
          <input type="password" placeholder="Password" name="password" value="{{ Session::get('password') }}">
          <input type="submit" value="Sign In" name="submit">
          <a href="#" class="forget">Forget Password</a>
        </form>
      </div>
      <div class="form signup">
        <form action="/auth/register" method="POST">
          @csrf
          <h3>Sign Up</h3>
          <input type="text" placeholder="Name" name="name">
          <input type="text" placeholder="Email" name="email">
          <input type="password" placeholder="Password" name="password">
          <input type="password" placeholder="Confirm Password" name="password">
          <input type="submit" value="Register" name="submit">
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
</body>

</html>