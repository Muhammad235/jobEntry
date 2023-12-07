<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
    <div class="wrapper">
        <div class="rec-prism">
          <div class="face face-front">
            <div class="content">
              <h2>Login</h2>
              <form action="" method="POST">
                @csrf
                <div class="field-wrapper">
                  <input type="text" name="email" placeholder="email" value="{{old('email')}}">
                  <label>email</label>
                </div>
                  @error('email')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
                <div class="field-wrapper">
                  <input type="password" name="password" placeholder="password" autocomplete="new-password" value="{{old('password')}}">
                  <label>password</label>
                </div>
                @error('password')
                <small class="text-danger">{{$message}}</small>
                @enderror
                <div class="field-wrapper">
                  <input type="submit" name="login">
                </div>
                <span class="psw" onclick="showForgotPassword()">Forgot Password?   </span>
                <span class="signup" onclick="showSignup()">Not a user?  Sign up</span>
              </form>
            </div>
          </div>
          <div class="face face-back">
            <div class="content">
              <h2>Forgot your password?</h2>
              <small>Enter your email so we can send you a reset link for your password</small>
              <form >
                <div class="field-wrapper">
                  <input type="text" name="email" placeholder="email">
                  <label>email</label>
                </div>
                <div class="field-wrapper">
                  <input type="submit" >
                </div>
              </form>
            </div>
          </div>

          <div class="face face-right">
            <div class="content">
              <h2>Sign up</h2>
              <form action="/register" method="POST">
                @csrf
                <div class="field-wrapper">
                  <input type="text" name="email" placeholder="email" value="{{old('email')}}">
                  <label>email</label>
                  @error('email')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="field-wrapper">
                  <input type="password" name="password" placeholder="password" autocomplete="new-password" value="{{old('password')}}">
                  <label>password</label>
                </div>
                @error('password')
                <small class="text-danger">{{$message}}</small>
                @enderror
                <div class="field-wrapper">
                  <input type="password" name="confirmPassword" placeholder="password" autocomplete="new-password" {{old('confirmPassword')}}>
                  <label>re-enter password</label>
                </div>
                @error('confirmPassword')
                <small class="text-danger">{{$message}}</small>
                @enderror
                <div class="field-wrapper">
                  <input type="submit" name="signup">
                </div>
                <span class="singin" onclick="showLogin()">Already a user?  login</span>
              </form>
            </div>
          </div>
        </div>
      </div>

<script src="{{asset('js/login.js')}}"></script>
</body>
</html>