<!DOCTYPE html>
<head>
<meta name = "language" content = "Greek"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Music Organ Experts - Εγγραφή Χρήστη</title>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mstyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
 <!-- Header Starts -->
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hf-bg-color">
   <img src="images/logo.png" class="img-responsive img1" alt="Responsive image">
    <div class="input-group c2 centered">
   <input type="text" class="form-control">
   <span class="input-group-btn">
        <button class="btn btn-default" type="button">search</button>
   </span>
</div>
<br>

<nav class="navbar navbar-default c1"> <!-- Navigation ends -->
  <div class="container-fluid">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" >
        <span class="sr-only">Toggle Navigation Bar </span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
   </button>
      <a class="navbar-brand" href="index.html">M.O.E</a>
    </div>
        <div class="collapse navbar-collapse" id="navbar1">
      <ul class="nav navbar-nav">
      <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Προϊόντα<span class="caret"></span></a>
      <ul class="dropdown-menu">
            <li ><a href="pneusta.html" >Πνευστά</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="krousta.html">Κρουστά</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="exorda.html">Έγχορδα</a></li>
          </ul>
        </li>
		<li><a href="account.html">Λογαριασμός</a></li>
		<li><a href="terms.html">Όροι Χρήσης</a></li>
      </ul>
    </div><!-- navbar-collapse -->
  </div><!-- container-fluid -->
</nav><!-- Navigation ends -->

<a href="cart.html" class="btn btn-info pull-right" role="button">Καλάθι</a>
<img src="images/shopping-cart-8.png" class="img-responsive pull-right img2" alt="Responsive image">
</div>
</div>
</div>
 <!-- Header ends -->
 

<!-- main content  -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h2>Φόρμα Εγγραφής Χρήστη</h2>
			<cite>Παρακαλώ καταχωρήστε όλα τα στοιχεία</cite>
			<div class="panel panel-default"> <!-- Registration form -->
				 <div class="panel-body">  
									<form role="form" method="post" action="registration-out.php">  
										<fieldset>  
											  <div class="form-group"  >  
												<input class="form-control" placeholder="Όνομα" name="first_name" type="text" >  
											</div>  
											
											<div class="form-group"  >  
												<input class="form-control" placeholder="Επώνυμο" name="last_name" type="text" >  
											</div>  
											
											<div class="form-group"  >  
												<input class="form-control" placeholder="Ηλικία" name="age" type="number" >  
											</div>  
											
											<div class="form-group"  >  
												<input class="form-control" placeholder="Διεύθυνση" name="address" type="text" >  
											</div> 
											
											<div class="form-group">  
												<input class="form-control" placeholder="Κωδικός" name="pass1" type="password"  >  
											</div> 
										  <div class="form-group">  
												<input class="form-control" placeholder="Επαλήθευση κωδικού" name="pass2" type="password"  >  
											</div>  							
											
											<div class="form-group"  >  
												<input class="form-control" placeholder="Τηλέφωνο" name="phone" type="text" >  
											</div> 
											
											
											<div class="form-group"  >  
												<input class="form-control" placeholder="email" name="email" type="email" >  
											</div> 
											
											
											<div class="form-group"  >  
												<img src="images/captcha.png" class="img-responsive  img2" alt="Responsive image">
												<input class="form-control" placeholder="Πληκτρολογήστε τους χαρακτήρες της παραπάνω εικόνας" name="captcha" type="text" >  
											</div>
											
											
												<input class="btn btn-lg btn-success btn-block" type="submit" value="Εγγραφή" name="login" >  
										</fieldset>  
									</form>  
								</div> 
			</div><!-- End of registratin form -->

		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
	</div>
</div>
<!-- Footer starts-->
<div class="container-fluid footer1">
	<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12 hf-bg-color">
		<p class="mycite">Copyright (c) Music Organ Experts</p>
		<br>
		<br>
	</div>
	</div>
</div>
<!-- Footer  ends-->
</body>
</html>