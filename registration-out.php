<!DOCTYPE html>
<head>
<meta name = "language" content = "Greek"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Music Organ Experts - Εγγεγραμμένος Χρήστης</title>
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
	<div class="col-lg-2 col-md-2 col-sm-1 col-xs-12"><!-- empty column --></div>

	<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
		<h2>Εγγεγραμμένος Χρήστης</h2>
		<!-- PHP Code-->
		<?php 
		$db='musicshop';
		$db_host='db46.grserver.gr';
		$dbuser='MusicShopUser';
		$dbpass='Us3rMus1cSh0pK0d';
		$RegResults = "";
		//Σύνδεση με Βάση Δεδομένων 
		$dbc = @mysqli_connect ($db_host, $dbuser,$dbpass,$db) OR die ('Η σύνδεση στη Βάση Δεδομένων δεν είναι εφικτή. ' . mysqli_connect_error() );
		if ($dbc) {$RegResults+="Η σύνδεση με τη Βάση Δεδομένων $db ήταν επιτυχής. <br>";}
			$check=1;
		if(isset($_POST['login']))  
		{  
			$first_name=$_POST["first_name"];  
			$last_name=$_POST["last_name"];
			$age=$_POST["age"];	
			$address=$_POST["address"];
			$pass1=$_POST["pass1"];	
			$pass2=$_POST["pass2"];	
			$phone=$_POST["phone"];
			$email=$_POST["email"];
			$captcha=$_POST["captcha"];
		}
			
			if (empty($captcha)){
				$RegResults=$RegResults."Δεν καταχωρήσατε το πεδίο captcha.<br>";
				$check=0;
				}
			
		if ($captcha!="Et43"){
			$RegResults=$RegResults."Πρέπει να αποδείξετε ότι δεν είσαστε bot.<br>";
			$check=0;
			} else {
			$RegResults=$RegResults."Αποδείξατε ότι δεν είσαστε bot.<br>"; 
			}
				
			if (empty($first_name)){
				$RegResults=$RegResults."Δεν καταχωρήσατε το πεδίο first name.<br>";
				$check=0;
				} else {
				$first_name_final=mysqli_real_escape_string($dbc,trim($first_name));
				}	
				
			if (empty($last_name)){
				$$RegResults=$RegResults."Δεν καταχωρήσατε το πεδίο last name.<br>";
				$check=0;
				} else {
				$last_name_final=mysqli_real_escape_string($dbc,trim($last_name));
				}
				
			if (empty($age)){
				$RegResults=$RegResults."Δεν καταχωρήσατε το πεδίο age.<br>";
				$check=0;
			}

			if (empty($address)){
				$RegResults=$RegResults."Δεν καταχωρήσατε το πεδίο pass1.<br>";
				$check=0;
				} else {
				$address_final=mysqli_real_escape_string($dbc,trim($address));
				}
			
			
			if (empty($pass1)){
				$RegResults=$RegResults."Δεν καταχωρήσατε το πεδίο pass1.<br>";
				$check=0;
				}

			if (empty($pass2)){
				$RegResults=$RegResults."Δεν καταχωρήσατε το πεδίο pass2.<br>";
				$check=0;
				}

			if ($pass1==$pass2) {
				$RegResults=$RegResults."Ο κωδικοί που δώσατε ταυτοποήθηκαν με επιτυχία.<br>";

				$pass=$pass1;
				$pass_final=SHA1(mysqli_real_escape_string($dbc,trim($pass)));
				}	else {
				$RegResults=$RegResults."Οι κωδικοί που δώσατε δεν ταιριάζουν. Παρακαλώ συμπληρώστε σωστά τους κωδικούς.<br>";
				$check=0;
				}

			if (empty($phone)){
				$RegResults=$RegResults."Δεν καταχωρήσατε το πεδίο phone.<br>";
				$check=0;
				}	else {
					$phone_final=mysqli_real_escape_string($dbc,trim($phone));
				}

			if (empty($email)){
				$RegResults=$RegResults."Δεν καταχωρήσατε το πεδίο phone.<br>";
				$check=0;
				}	else {
					$email_final=mysqli_real_escape_string($dbc,trim($email));
				}

			if ($check==1) {
				$RegResults=$RegResults."Τα απαραίτητα πεδία συμπληρώθηκαν και είναι έτοιμα να καταχωρηθούν στη ΒΔ για να ολοκληρωθεί η εγγραφή.<br>";
				// Mysql query
				$q = "INSERT INTO customer (first_name,last_name,customer_age,address,pass,phone,email) VALUES ('$first_name_final','$last_name_final',$age,'$address_final','$pass_final','$phone_final','$email_final')";
				$r = mysqli_query ($dbc, $q);
				if ($r) {
					$RegResults=$RegResults."Η εγγραφή ολοκληρώθηκε με επιτυχία.<br><b>Για την σύνδεση σας στο σύστημα</b> θα χρησιμοποιείτε το παρακάτω αναγραφώμενο <b>ID</b> και τον <b>κωδικό πρόσβασης</b> τον οποίον ορίσατε.<br>";
				} else {
					$RegResults=$RegResults."Error: " . $q . "<br>" . mysqli_error($dbc);
				}
				$num =mysqli_affected_rows($dbc);
				$RegResults=$RegResults."Καταχωρήθηκαν $num γραμμές.";
				mysqli_close($dbc);
			}
	  ?>
	  <!-- End of PHP code -->
		<div class="panel panel-default"> <!-- Data form -->
			 <div class="panel-body">  
			 <div class="panel panel-default"><?php echo $RegResults;?>	</div>
			 <div class="panel panel-default"><!-- Show customer data -->
				<div class="table-responsive">
	 
					<table class="table table-bordered table-hover table-striped" >  
						<thead>  
						<tr>  
							<th>Id</th>  
							<th>first name</th>  
							<th>last name</th>  
							<th>age</th>  
							<th>adress</th>  
							<th>Phone</th> 
							<th>Email</th> 
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
								if ($dbc) {$RegResults+="Η σύνδεση με τη Βάση Δεδομένων $db ήταν επιτυχής. <br>";}
								
								$q = "SELECT * FROM customer where email='$email' and pass=sha1($pass)";	//Διατύπωση ερωτήματος	
								$r = @mysqli_query ($dbc, $q); 
							
									 while ($row = mysqli_fetch_array($r)) { 
										echo "<tr>
											<td>" .$row[0] . "</td>
											<td>" .$row[1] . "</td>
											<td>" .$row[2] . "</td>
											<td>" .$row[3] . "</td>
											<td>" .$row[4] . "</td>
											<td>" .$row[6] . "</td>
											<td>" .$row[7] . "</td>
									 </tr>"; }
								
							mysqli_close($dbc);
							?>
						</tbody>
					</table>
			</div>
			<form role="form" method="post" action="registration-in.php">  
				<fieldset>  
					<input class="btn btn-lg btn-success btn-block" type="submit" value="Προς φόρμα εγγραφής" name="login" >  
				</fieldset>  
			</form>  
			</div>
			</div><!-- End of Data form -->
		</div>
	</div>
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