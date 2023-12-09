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
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
<div class="wrapper">
    <h1>Hello Again!</h1>
    <p>Welcome back you've <br> been missed!</p>

    <form action="/login" method="POST">
      @csrf
      <input type="text" placeholder="Email ID" name="email" value="{{old('email')}}">
      @error('email')
      <p class="error">{{$message}}</p>
      @enderror
      <input type="password" placeholder="Password" name="password" value="{{old('password')}}">  
      @error('password')
      <p class="error">{{$message}}</p>
      @enderror
      <p class="recover">
        <a href="resetpassword.html">Recover Password</a>
      </p>
      <button>Log in</button>
    </form>
   
    <p class="or">
      ----- or continue with -----
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-github"></i>
    </div>
    <div class="not-member">
      Not a member? <a href="/register">Sign up</a>
    </div>
  </div>
</body>
</html>