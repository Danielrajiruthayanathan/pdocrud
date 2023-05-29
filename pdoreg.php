<!DOCTYPE html>
<?php  session_start();?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration form </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js">
    <link rel="stylesheet" href="style.css">
   </head>
<body>
  <div class="wrapper">

  <?php if(isset($_SESSION['message'])) :?>
  <h5 class="alert alert-success "><?= $_SESSION['message'];?></h5>
  <?php endif; ?>
    <h2>Registration</h2>
    <form action="pdoins.php" method="post" enctype="multipart/form-data">
      <div class="input-box">
        <input type="text" name="name" placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <input type="text" name="email" placeholder="Enter your email" required>
      </div>
    
<div class="input-box">
  <input type="text" name="phone" placeholder="Enter your phone number" required>
</div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" required>
      </div>
      <div class="input-box">
        <input type="textarea" name="addr" placeholder="Enter your addres" required>
      </div>
      
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit"  name="submit" value="Register Now" >
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.html">Login now</a></h3>
      </div>
    </form>
  </div>

</body>
</html>