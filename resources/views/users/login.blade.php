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
          <div class="face face-top">
            <div class="content">
              <h2>Subscribe</h2>
              <small>Enter your email so we can send you the latest updates!</small>
              <form onsubmit="event.preventDefault()">
                <div class="field-wrapper">
                  <input type="text" name="email" placeholder="email">
                  <label>e-mail</label>
                </div>
                <div class="field-wrapper">
                  <input type="submit" onclick="showThankYou()">
                </div>
              </form>
            </div>
          </div>
          <div class="face face-front">
            <div class="content">
              <h2>Login in</h2>
              <form onsubmit="event.preventDefault()">
                <div class="field-wrapper">
                  <input type="text" name="username" placeholder="username">
                  <label>username</label>
                </div>
                <div class="field-wrapper">
                  <input type="password" name="password" placeholder="password" autocomplete="new-password">
                  <label>password</label>
                </div>
                <div class="field-wrapper">
                  <input type="submit" onclick="showThankYou()">
                </div>
                <span class="psw" onclick="showForgotPassword()">Forgot Password?   </span>
                <span class="signup" onclick="showSignup()">Not a user?  Register</span>
              </form>
            </div>
          </div>
          <div class="face face-back">
            <div class="content">
              <h2>Forgot your password?</h2>
              <small>Enter your email so we can send you a reset link for your password</small>
              <form onsubmit="event.preventDefault()">
                <div class="field-wrapper">
                  <input type="text" name="email" placeholder="email">
                  <label>e-mail</label>
                </div>
                <div class="field-wrapper">
                  <input type="submit" onclick="showThankYou()">
                </div>
              </form>
            </div>
          </div>
          <div class="face face-right">
            <div class="content">
              <h2>Sign up</h2>
              <form onsubmit="event.preventDefault()">
                <div class="field-wrapper">
                  <input type="text" name="email" placeholder="email">
                  <label>e-mail</label>
                </div>
                <div class="field-wrapper">
                  <input type="password" name="password" placeholder="password" autocomplete="new-password">
                  <label>password</label>
                </div>
                <div class="field-wrapper">
                  <input type="password" name="password2" placeholder="password" autocomplete="new-password">
                  <label>re-enter password</label>
                </div>
                <div class="field-wrapper">
                  <input type="submit" onclick="showThankYou()">
                </div>
                <span class="singin" onclick="showLogin()">Already a user?  login in</span>
              </form>
            </div>
          </div>
          <div class="face face-left">
            <div class="content">
              <h2>Contact us</h2>
              <form onsubmit="event.preventDefault()">
                <div class="field-wrapper">
                  <input type="text" name="name" placeholder="name">
                  <label>Name</label>
                </div>
                <div class="field-wrapper">
                  <input type="text" name="email" placeholder="email">
                  <label>e-mail</label>
                </div>
                <div class="field-wrapper">
                  <textarea placeholder="your message"></textarea>
                  <label>your message</label>
                </div>
                <div class="field-wrapper">
                  <input type="submit" onclick="showThankYou()">
                </div>
              </form>
            </div>
          </div>
          <div class="face face-bottom">
            <div class="content">
              <div class="thank-you-msg">
                Thank you!
              </div>
            </div>
          </div>
        </div>
      </div>

      <script>
        let prism = document.querySelector(".rec-prism");

        function showSignup(){
        prism.style.transform = "translateZ(-100px) rotateY( -90deg)";
        }
        function showLogin(){
        prism.style.transform = "translateZ(-100px)";
        }
        function showForgotPassword(){
        prism.style.transform = "translateZ(-100px) rotateY( -180deg)";
        }

        function showThankYou(){
        prism.style.transform = "translateZ(-100px) rotateX( 90deg)";
        }
      </script>
</body>
</html>