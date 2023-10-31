<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('./db_connect.php');
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <center><body style="background:url(main.png);background-repeat:no-repeat;background-size:cover;"a link="red" vlink="red"></center>


<?php include('./header.php'); ?>
<?php
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

</head>
<style>
	body{
		width: 100%;
	    height: calc(100%);
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
		z-index: 1;
    top: 20
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

div.heading{
top: 10px;

overflow: visible;
white-space: nowrap;
text-align: left;
font-family: hacked;
height: 5%;
background-attachment: fixed;
border-radius: 20px;
font-size: 20px;
background-color: white;
color: white;
z-index: 2;
}





div.headingnextline {


  top: 10px;
  overflow: visible;
  white-space: nowrap;
  font-family: Erbos Draco Micro NBP;
 text-align: center;

  font-style: normal;
  font-weight: normal;
  font-size: 18px;
  box-sizing: border-box;


  display: inline-block;

background-attachment: fixed;
line-height: 2.0;
z-index: 5;
  color:  #e4e5e4;
  background-color:  #4d5198;

}





.headingnextline:hover{
  color:#ff0000 ;
  background-color:whitesmoke;
  top: 40px;
  animation-duration: 2s;
}



</style>

<body>








  </div>

  <main id="main" class=" bg-dark">
  		<div id="login-left">
  		</div>


  		<div id="login-right">
  			<div class="card col-md-8">
  				<div class="card-body">
  					<form id="login-form" >
  						<div class="form-group">
                <h2 class="text-center">Login Form</h2>
                <p class="text-center">Login with your username and password.</p><br><hr>
                <label for="username" class="control-label">Username</label>
                <input type="text" id="username" name="username" placeholder="username" class="form-control">
              </div>
              <div class="form-group">
                <label for="password" class="control-label">Password</label>
                <input type="password" id="password" name="password" placeholder="********"class="form-control">
              </div>

              <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div><br>
              <center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
<br>
                                  <strong><div class="link login-link text-center"> New to Retro?&nbsp<a href="signup-user.php">Signup now</a></div></strong>



  					</form>
  				</div>
  			</div>
  		</div>


  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>
</html>




