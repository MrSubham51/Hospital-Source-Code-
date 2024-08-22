<html>
<head>
<title>Login</title>
<style>
body{
    margin:0;
    padding:0;
    background:url(put images.jpg);
    background-size:cover;
    background-osition: center;
    frontfamily: sand-serif;
    }
    .login-box{
        width:320px;
        height:400px;
        background:rgba(5,6,7,0.8);
        color: #fff;
        top: 50%;
        left: 50%;
        position: absolute;
        transform: translate (-50%,-50%);
        box-sizing: border-box;
        padding: 70px 30px;
    }
    .avatar {
        width:100px;
        height:100px;
        border-radius:50%;
        position: absolute;
        top: -50px;
        left: calc(50% -50%)
        }
        h1{
            margin:0;
            padding:0 0 20px;
            text-algin: center;
            font-size:22px;
            
            }
   .login-box p{
       margin:0;
       padding:0;
       font-weight: bold;
   }
   .login-box input {
       width: 80%;
       margin-bottom: 20px;
   }
   .login-box input[type=""text"],input [type="password"]{
       border: none;
       border-bottom:1px solid#fff;
       background: transparent;
       outline: none;
       height: 40px;
       color:#fff;
       font-size:16px;
   }
   .login-box input[type="submit"]{
       border:none;
       outline: none;
       height: 40px;
       background: #1c8adb;
       color: #fff;
       font-size: 18px;
       border-radius: 20px;
   };
   .login-box input[type="submit"]: hover{
       cursor:pointer;
       background: #39dc79;
       color: #000;
   }
   .login-box a{
       text-decoration: none;
       font-size: 14px;
       color: #fff;
   }
   .login-box a:hover{
       color: #39dc79;
   }
   </style>
   </head>
   <body>
   <div class="login-box">
   <imgsrc="avatar.png" class="avatar">
   <h1>Login</h1>
   <form action="loginserver.php" method="post">
   <p>Login ID</p>
   <input type="text" name="Login ID" placeholder="Enter your login ID" required>
   <p>Password</p>
   <input type="text" name="password" placeholder="Enter your password" required>
   <input type="submit" name="submit" value="login">
   
   <a href="#">Forget Password</a>
   <br>
   <br>
   <a href="register.php">New Registration</a>
   </form>
   </div>
   </body>
   </html>   
   
   
   
   
   
   
   