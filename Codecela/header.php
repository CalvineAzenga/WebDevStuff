<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CodeSela</title>
  <link rel="icon" href="icons/codesela1.png" type="image/x-icon" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="stylez.css">
  <script src="jquery/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../CodeSela"> <img src="icons/codesela.png" alt="codesela.png"> </a>
      <!-- <a class="navbar-brand" style="font-size: 21px;font-weight: bold;font-family: algerian;" href="index.php" id="text">C<span style="color:green;height:30px;"> <i class="fa fa-code"></i> </span>deSela</a> -->
    </div>
    <div class="container collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Clients<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Register/Login</a></li>
            <li><a href="#">Subscribe to Newsetter</a></li>
            <li><a href="#">Become a Seller</a></li>
            <li><a href="#">Leave a Complaint</a></li>
            <li><a href="#">Donate</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Projects<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Python Projects</a></li>
            <li><a href="#">Java Projects</a></li>
            <li><a href="#">C/C++ Projects</a></li>
            <li><a href="#">Game Dev</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Other Projects</a></li>
          </ul>
        </li>
        <li><a href="mycv.php" id="text">About Me</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#modalSignUp"><span class="glyphicon glyphicon-user" style="margin:4px;"></span>Register</a></li>
        <li style="margin-right:20px;"><a href="#" data-toggle="modal" data-target="#modalLogin"><span class="glyphicon glyphicon-log-in" style="margin:4px;"></span> Login</a></li>
      </ul>
      <form class="navbar-form navbar-left" action="">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search Projects">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
    </form>
    </div>
  </nav>
  <!-- Modal Login -->
<div id="modalLogin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="background-color: #031321;color:grey;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <form action="action_page.php">
            <div class="container" style="width:100%;overflow:auto;">
                <p>Enter your details to Sign In</p>
                <hr>
                <label for="email"><b>Email</b></label>
                <input class="text" type="text" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <hr>

                <p>Forgot password? <a href="#">Reset</a>.</p>
                <button type="submit" class="registerbtn">Sign In</button>
            </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal Registration -->
<div id="modalSignUp" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="background-color: #031321;color:grey;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registration</h4>
      </div>
      <div class="modal-body">
        <form action="action_page.php">
            <div class="container" style="width:100%;overflow:auto;">
                <p>Fill in the details to create an account</p>
                <hr>
                <label for="name"><b>Full Name</b></label>
                <input class="text" type="text" placeholder="Enter Full name" name="email" required>

                <label for="email"><b>Email</b></label>
                <input class="text" type="text" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                <hr>

                <p>By signing up you agree to our <a href="#">Terms & Privacy</a>.</p>
                <button type="submit" class="registerbtn">Sign Up</button>
            </div>

            <div class="container signin" style="width:100%;overflow:auto;background-color: #031321;color:white;">
                <p>Already have an account? <a href="#">Sign in</a>.</p>
            </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</body>
</html>
