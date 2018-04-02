<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif; background: #eee url(../images/demo/backgrounds/job-sites.png);}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.imgcontainer {
    text-align: center;
    width: 100px;height: 100px;
        margin: 10px auto 30px;
        border-radius: 100%;
       /* border: 2px solid #aaa; */
        background-size: cover;
}

img.avatar {
   /* width: 40%;
    border-radius: 50%;
    */
    text-align: center;
    width: 100px;height: 100px;
        margin: 15px auto 30px;
        border-radius: 100%;
        border: 2px solid #aaa;
        background-size: cover;

}

.login-container {
    position: relative;
        width: 300px;
        margin: 80px auto;
        padding: 20px 40px 40px;
        text-align: center;
        background: #fff;
        border: 1px solid #ccc;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<title>Pages | Login</title>
<body>
 <nav class="navbar navbar-inverse" id="insidenav">
  <div class="container-fluid">
    <div class="navbar-header">
         <h1><a class="navbar-brand" href="index_dbms.php" id="head">Job Portal</a>
        </h1>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#"> Sign Up </a></li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="login.php">
    <span class="glyphicon glyphicon-user"></span> Login <span class="caret"></span></a>
        
      </li>
      </ul>
  </div>
</nav>
<form action="/action_page.php">
  <div class="imgcontainer">
    <img src="../images/demo/backgrounds/login_sym.png" alt="Avatar" class="avatar">
  </div>

  <div class="login-container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
              <?php
                if(isset($_SESSION['registerCompleted'])) {
                    ?>
                <div>
                    <p class="text-center">You have registered successfully !</p>
                </div>
                <?php
                    unset($_SESSION['registerCompleted']); }
                    ?>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
