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
                <span class="signup">Not a user? <a href="/register"> Sign up</a></span>
              </form>
            </div>
          </div>
        </div>
      </div>
</body>
</html>