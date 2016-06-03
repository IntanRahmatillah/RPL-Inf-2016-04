<html>
	<head>
		<title>form</title>
		<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css" />
		<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

        		<link rel="stylesheet" href="css/style.css">
		
		
	
	</head>
	
	<body>
	<div>
	
		
		<div class="container">
		 <div class="registrasi-form">
			 <h1>Registrasi Member</h1>
			 <div class="form-group ">
			   <input type="text" class="form-control" placeholder="Nama" id="UserName">
			   <i class="fa fa-user"></i>
			 <div class="form-group ">
			   <input type="text" class="form-control" placeholder="Email" id="email">
			   <i class="fa fa-envelope"></i>
			 <div class="form-group log-status">
			   <input type="password" class="form-control" placeholder="Password" id="Passwod">
			   <i class="fa fa-lock"></i>
			 </div>
			  <span class="alert">Invalid Credentials</span>
			  <button type="button" class="log-btn" >Create Account</button>
			 <br></br>
			 

   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
		

		
		<?php
		if(isset($_POST["nim_mhs"])){
			require_once 'koneksiData.php';
			
			$nama = $_POST ['nama_mhs'];
			$nim = $_POST['nim_mhs'];
			$tl = $_POST['ttl_mhs'];
			$email = $_POST['email_mhs'];
			$pass = md5($_POST['pass_mhs']);
			
			$sql = "INSERT INTO pengguna VALUES ('$nama', '$nim', '$tl', '$email', '$pass')";
			
			if($db->query($sql)){
				echo 'Data Berhasil Disimpan';
				header ('location:form_login.php');
			}else{
				echo 'Error : ' .$db->error;
			}
			
		}
		
		?>
	
	</body>
</html>