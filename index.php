<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>


<!--Metas!-->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!--Links Boostrap and main css-->

  <title>UbySpace</title>
      <style class="anchorjs"></style>
      <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"> 
    <link rel="stylesheet" type="text/css" href="css/ubycss.css">
    <link rel="shortcut icon" type="png" href="icono.png">

<!-- Basic Js and Boostrap Js -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  </head>

  <body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">UbySpace</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">


          <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">CCP</a></li>
            <li><a href="#">CSM</a></li>
            <li><a href="#">Upcoming Updates</a></li>
            <li><a href="#">SISI NEWS</a></li>
            <li><a href="#">Null Life</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Third party Software</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">EULA UPdates</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">

      <li data-toggle="modal"><a href=""> <?php if(isset($_SESSION['user'])){ 

$name = $_SESSION['user'];

        echo $name; } ?> </a></li>

  <?php 
       if(isset($_SESSION['user'])){

       echo '<li data-toggle="modal" data-target="#Logoff"><a href="logout.php">Log Out</a></li>  '; // Log Off

      } else {

      

      echo '<li data-toggle="modal" data-target="#Login"><a href="#">Log in</a></li>';// Log In

      echo '<li><a href="signuppage.php">Sign up</a></li> ';//  Sign up
    }
      ?>

   
        <li><a href="#">Help</a></li>
        <li></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Account Managament</a></li>
            <li><a href="#">Forum</a></li>
            <li><a href="#">ZKillMails</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Planetary Interaction</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <div class="jumbotron">
      <div class="container">
        <h1>Citadeles are under construction!</h1>
        <p>CCP's team are working hard in this proyect.</p>
        <a href="#">Read more</a>
      </div>
    </div> 

<hr>

<div class="row">
  <div class="news" >
    <h2>Next Update!</h2>
  </div>
</div>

<hr>

    <div class="learn-more">
	    <div class="container">
		    <div class="row">
          <div class="col-md-8 col-md-4">
            <h3>Eve Online!</h3>
		      	<p>is a massively multiplayer online game set 23,000 years in the future. As an elite pilot of one of the four controlling races, you will explore, build, and dominate across a universe of over 7,000 star systems.</p>
		      	<p>Learn how to travel in <a href="#">Eve Online </a></p>
		      </div>

        </div>
      </div><!-- /.container-->
    </div>

<hr>



<div class="row">
	<div class="news" >
		<h2>News</h2>
	</div>
</div>
<hr>


<!-- NEWS! -->

<!-- 1 -->

<div class="container">
  <div class="row">

<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <a href="und.html" title="null" target="_blank">
      <p><img src="imagen/0.jpg" class="img-responsive" alt="Cinque Terre" /></p>
      </a>
    <div class="caption">
        <a href="#">Citadeles are under construction</a>
    </div>
  </div>
</div>

<!-- 2 -->

<div class="col-sm-6 col-md-4">
 <div class="thumbnail">
    <a href="#" title="null" target="_blank">
      <p><img src="imagen/4.jpg" class="img-responsive" alt="Cinque Terre"/></p>
    </a>
    <div class="caption">
        <a href="#">Amarr empire is preparing their forces</a>
      </div>
    </div>
  </div>

<!-- 3 -->

 <div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <a href="#" title="null" target="_blank">
      <img src="imagen/2.jpg" class="img-responsive" alt="Cinque Terre" />
    </a>
       <div class="caption">
        <a href="#">Empress Jamyl Sarum death confirmed</a>
      </div>
    </div>
  </div>
</div> <!-- /row -->

<!-- 4 -->

<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a class="blocknews" href="#" title="null" target="_blank">
        <img src="imagen/10.png" class="img-responsive" alt="Cinque Terre" width="370" height="250"/>
      </a>
     <div class="caption">
        <a href="#">Begins exploitation planets</a>
    </div>
  </div>
</div>

<!-- 5 -->

 <div class="col-sm-6 col-md-4">
   <div class="thumbnail">
      <a class="blocknews" href="#" title="null" target="_blank">
        <img src="imagen/5.jpg" class="img-responsive" alt="Cinque Terre" width="370" height="250"/>
      </a>
    <div class="caption">
        <a href="#">Riot in trade hubs</a>
     </div> 
  </div>
</div>

<!-- 6 -->

<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <a class="blocknews" href="#" title="null" target="_blank">
      <img src="imagen/1.jpg" class="img-responsive" alt="Cinque Terre" width="370" height="250"/>
    </a>
      <div class="caption">
        <a href="#">The trade between regions</a>
      </div>   
    </div>
  </div>
</div><!-- /row -->

<!-- 7 -->

<div class="row"> 

<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
      <a class="blocknews" href="#" title="null" target="_blank">
      <img src="imagen/7.jpg" class="img-responsive" alt="Cinque Terre" width="370" height="250"/>
      </a> 
    <div class="caption">
        <a href="#">First battle on the ground</a>
    </div>
  </div>
</div>

<!-- 8 -->

<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <a class="blocknews" href="#" title="null" target="_blank">
      <img src="imagen/8.jpg" class="img-responsive" alt="Cinque Terre" width="370" height="250"/>
    </a>
      <div class="caption">
        <a href="#">The rise of a new species</a>
      </div>
    </div>
  </div>

<!-- 9 -->

     <div class="col-sm-6 col-md-4">
 <div class="thumbnail">
    <a class="blocknews" href="#" title="null" target="_blank">
      <img src="imagen/9.jpg" class="img-responsive" alt="Cinque Terre" width="370" height="250"/>

        </a>
        <div class="caption">
          <a href="#">Remains of collapsed Eve Gatee</a>
        </div>
      </div>
    </div>
  </div><!-- /row -->
</div><!-- /.container-->

    <hr>

<div>
 <div class="bottom-w">
    <div class="row">
      <div class="container">
          <div class="col-md-8">
            <p>site design / logo © 2015 UbySpace Inc <a href="#">Get in touch with us</a> </p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div> <!-- -->
</div><!-- -->

<!-- Login Model -->
<form method="post" action="validar.php">
  <div id="Login" class="modal fade" role="dialog" >
   <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-body"  >

         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

        <h1 class="text-center">Login</h1>
    




  <form class="form col-md-12 center-block">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="username" class="form-control input-lg" placeholder="Email" name= "user" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control input-lg" placeholder="Password" name="pw" required>
  </div>

  <div class="form-group">


                    <button class="btn btn-primary btn-lg btn-block" name= "login">Sign In</button>
              <span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>
          </div>

             <label>
             <input type="checkbox"> remember me
            </label>

          </form>
        

              <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
      </div>  
      </div>
</div>
    </div>
  </div>
  </div>
</form>


<!-- Sign up Model -->

    <form method="post" action="signup.php" class="form col-md-12 center-block">
<div id="Signup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
  <div class="modal-body" >
  
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        <h1 class="text-center">Sign up</h1>






 
<form class="form col-md-12 center-block">
<div class="form-group">
         <label  id="basic-addon1">Username</label>
        <input type="text" class="form-control input-lg" name="user" autocomplete="off" placeholder="Password" required>
        </div>

        <div class="form-group">
         <label  id="basic-addon1">Password</label>
        <input type="password" class="form-control input-lg" name="pw" autocomplete="off" placeholder="Password" required>
       </div>

        <div class="form-group">
         <label  id="basic-addon1">Confirm Password</label>
        <input type="password" class="form-control input-lg" name="cpw" autocomplete="off" placeholder="Password" required>
        </div>

        <div class="form-group">
         <label  id="basic-addon1">Email</label>
        <input type="email" class="form-control input-lg" name="email" autocomplete="off"  placeholder="Password" required>.

        </div>

<div class="form-group">

             <label>
             <input type="checkbox" required> Option one is this and that&mdash;be sure to include why it's great
            </label>

   <button class="btn btn-primary btn-lg btn-block" name= "submitreg">Sign up</button>
   </div>
                <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
      </div>  
      </div>
      
    </form>
  </div>
</div>
</div>
</div>
</div>
</form>

  </body>
</html>