<!DOCTYPE html>
<head>
<meta name = "language" content = "Greek"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Music Organ Experts - Λογαριασμός Χρήστη</title>
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
<nav class="navbar navbar-default c1">
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
</nav>
<a href="cart.html" class="btn btn-info pull-right" role="button">Καλάθι</a>
<img src="images/shopping-cart-8.png" class="img-responsive pull-right img2" alt="Responsive image">
</div>
</div>
</div>
 <!-- Header ends -->

<!-- main content  -->
<!--------------- User info --------------------->
<div class="container-fluid">
	<div class="row">
	<h3>Στοιχεία χρήστη</h3>
		<div class=" col-lg-2 col-md-1 col-sm-1 col-xs-12"><!-- emty column --></div>
		<div class=" col-lg-8 col-md-10 col-sm-10 col-xs-12">
			<div class="table">  
			<h1 align="center">Είσαστε ο παρακάτω χρήστης</h1>    
			<div class="table-responsive table-condensed">  
				<table class="table table-bordered table-hover table-striped" >  
					<thead>  		  
						<tr>  
							<th>Κωδικός</th>  
							<th>Όνομα</th>  
							<th>Επώνυμο</th>  
							<th>Ηλικία</th>
							<th>Διεύθυνση</th>
							<th>Τηλέφωνο</th>
							<th>E-Mail</th>
						</tr>  
					</thead>  
					<tbody>
						<?php 
						$db='musicshop';
						$db_host='db46.grserver.gr';
						$dbuser='MusicShopUser';
						$dbpass='Us3rMus1cSh0pK0d';
						$RegResults = "";
						//Σύνδεση με Βάση Δεδομένων 
						$dbc = @mysqli_connect ($db_host, $dbuser,$dbpass,$db) OR die ('Η σύνδεση στη Βάση Δεδομένων δεν είναι εφικτή. ' . mysqli_connect_error() );
						/*if ($dbc) {echo "Η σύνδεση με τη Βάση Δεδομένων $db ήταν επιτυχής<br>";}*/
						if(isset($_POST['login']))  
						{  
						  $id=$_POST["customer_id"]; 
						  $password1=$_POST["pass"];  
						} 
						$check=0;
				/*echo "<br />DEBUG: ID='".$id."' - Pass='".$password1."'";*/
						$q = "SELECT * FROM customer where customer_id=$id  and pass=sha1($password1)  ";	//Διατύπωση ερωτήματος	
						$r = @mysqli_query ($dbc, $q); 
						$numr = mysqli_num_rows($r);//Εκχώρηση στη μεταβλητή $numr του αριθμού των εγγραφών που επηρεάστηκαν από το query.
						if ($numr > 0) { // αν υπάρχουν εγγραφές...
						$check=1;
						while ($row = mysqli_fetch_array($r)) { 
							echo "<tr>
							<td>" .$row[0] . "</td>
							<td>" .$row[1] . "</td>
							<td>" .$row[2] . "</td>
							<td>" .$row[3] . "</td>
							<td>" .$row[4] . "</td>
							<td>" .$row[6] . "</td>
							<td>" .$row[7] . "</td>
							</tr>"; 
							}
						}
						 myslqi_close($dbc);
					    ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
		<div class=" col-lg-2 col-md-1 col-sm-1 col-xs-12"><!-- emty column --></div>
	</div>
</div>

<!--------------- User buttons--------------------->
<div class="container-fluid">
	<div class="row">
		<div class=" col-lg-2 col-md-2 col-sm-1 col-xs-12"><!-- emty column --></div>
		<div class=" col-lg-8 col-md-8 col-sm-10 col-xs-12">
			<p><button type="button" class="btn btn-default"> Όνομα Χρήστη & Κωδικός</button></p>
			<p><button type="button" class="btn btn-default"> Προσωπικές Πληροφορίες</button></p>
			<p><button type="button" class="btn btn-default"> Πληρωμή</button></p>
		</div>
		<div class=" col-lg-2 col-md-2 col-sm-1 col-xs-12"><!-- emty column --></div>
	</div>
</div>

<!-- Footer starts-->
<div class="container-fluid footer1">
	<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12 hf-bg-color">
		<p class="mycite">
			Copyright (c) Music Organ Experts
		</p>
		<br>
		<br>
	</div>
	</div>
</div>
<!-- Footer  ends-->
</body>
</html>