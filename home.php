<?php
session_start();
if( empty($_SESSION["gold_email"])){
	echo "error! you are not logged in.";
	echo "<br><a href=\"signin.php\">Sign In</a>";
}
else{

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>
  html { scroll-behavior: smooth; } </style>
   <style>
  body {
 background-image: url("images/trainer-bg.jpg");
}
  
  </style>
  <body>
  
  <!-- NAVBAR STARTS -->
   <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GoldGym</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
       
      </ul>
      <form class="d-flex" role="search">
        
        <a href="logout.php" class="btn btn-primary me-2" type="submit">Logout</a>
      </form>
    </div>
  </div>
</nav>
<!-- NAVBAR ENDS -->
<br><br><br><br>
</center>
   <div class="card mx-auto" style="width: 18rem;">
  <img src="images/userpic.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hello <?php echo $_SESSION["gold_username"]; ?></h5>
    <p class="card-text">This is your membership card.</p>
	<p class="card-text">Thanks for joining.</p>
    
  </div>
</div>
</center>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<?php
}
?>