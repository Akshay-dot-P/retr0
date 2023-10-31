<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Simple Forms/Discussion System</title>
  <center><body style="background:url(main.png);background-repeat:no-repeat;background-size:cover;"a link="red" vlink="red"></center>


<?php include('./header.php'); ?>

</head>
<style>
	body{
		width: 100%;
	    height: calc(100%);
	    /*background: #007bff;*/
	}
	main#main{
		width:100%;
		height: calc(100%);
		background:white;
	}
	#login-right{
		position: absolute;
		right:30%;
		width:40%;
		height: calc(100%);
		display: flex;
		align-items: center;
	}
	#login-left{
		position: absolute;
		left:0;
		width:100%;
		height: calc(100%);
		display: flex;
		align-items: center;
		background: url(assets/uploads/<?php echo $_SESSION['system']['cover_img'] ?>);
	    background-repeat: no-repeat;
	    background-size: cover;
	}
	#login-right .card{
		margin: auto;
		z-index: 1
	}
	.logo {
    margin: auto;
    font-size: 8rem;
    background: yellow;
    padding: .7em 0.7em;
    border-radius: 50% 50%;
    z-index: 10;
}
div#login-right::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: calc(100%);
    height: calc(100%);
}

</style>

<body>

<form action="inc/signup.inc.php" method="post">
  <main id="main" class=" bg-dark">
  		<div id="login-left">
  		</div>

  		<div id="login-right">
  			<div class="card col-md-8">
  				<div class="card-body">


            <h2 class="text-center">Register Form</h2>
            <p class="text-center">Regitser using email.</p><br><HR>

  	

  <form action='upload.php' method='POST' enctype='multipart/form-data'>
  <input type='file' name='file'>
  <button type='submit' name='submit' >UPLOAD</button>
</form>



    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="form-control" value="<?php echo isset($meta['name']) ? $meta['name']: '' ?>" required>
    </div>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" class="form-control" value="<?php echo isset($meta['username']) ? $meta['username']: '' ?>" required  autocomplete="off">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" class="form-control" value="" autocomplete="off">
      <?php if(isset($meta['id'])): ?>
      <small><i>Leave this blank if you dont want to change the password.</i></small>
    <?php endif; ?>
    </div>
    <?php if(isset($meta['type']) && $meta['type'] == 3): ?>
      <input type="hidden" name="type" value="3">
    <?php else: ?>
    <?php if(!isset($_GET['mtype'])): ?>
    <div class="form-group">
      <label for="type">User Type</label>
      <select name="type" id="type" class="custom-select">
        <option value="2" <?php echo isset($meta['type']) && $meta['type'] == 2 ? 'selected': '' ?>>Staff</option>
        <option value="1" <?php echo isset($meta['type']) && $meta['type'] == 1 ? 'selected': '' ?>>Admin</option>
      </select>
    </div>
    <?php endif; ?>
    <?php endif; ?>




              <center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Register</button></center>

                                <br>
                                  <strong><div class="link login-link text-center">Already registered? <a href="user-login.php">Login now</a></div></strong>



  					</form>
  				</div>
  			</div>
  		</div>


  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>


  
</html>
