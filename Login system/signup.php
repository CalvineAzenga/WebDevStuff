<?php
require "header.php";
 ?>
<main>
  <h1>Sign Up</h1>
<form class="" action="includes/signup.inc.php" method="post">
  <input type="text" name="uid" placeholder="Username">
    <input type="email" name="mail" placeholder="E-mail">
      <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat password">
        <button type="submit" name="signup-submit">Signup</button>
</form>
</main>
 <?php
require "footer.php";
  ?>
