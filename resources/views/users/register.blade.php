<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
   <!-- Font Awesome Cdn Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Document</title>
    <link rel="stylesheet" href="{{('css/login.css')}}">
</head>
<body>
<div class="wrapper">

    <h1>Hello</h1>
    <p>Nice having you here</p>

    <form action="/users" method="POST">
        @csrf
      <input type="text" placeholder="Name" name="name" value="{{old('fullname')}}">
      @error('name')
          <p class="error">{{$message}}</p>
      @enderror
      <input type="text" placeholder="Email ID" name="email" value="{{old('email')}}">
      @error('email')
      <p class="error">{{$message}}</p>
      @enderror
      <input type="password" placeholder="Password" name="password" value="{{old('password')}}">
      @error('password')
      <p class="error">{{$message}}</p>
      @enderror
      <input type="password" placeholder="Repeat Password" name="password_confirmation" value="{{old('password_confirmation')}}">
      @error('password_confirmation')
      <p class="error">{{$message}}</p>
      @enderror
      <p class="recover">
        <a href="resetpassword.html">Recover Password</a>
      </p>
      <button name="submit">Sign up</button>
    </form>

    <p class="or">
      ----- or continue with -----
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-github"></i>
    </div>
    <div class="not-member">
      Already a member? <a href="/login">Login here</a>
    </div>
  </div>
</body>
</html>