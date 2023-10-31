<?php require_once "controllerUserData.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
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



    <div id="login-right">
      <div class="card col-md-8">
        <div class="card-body">
<div class="form-group">

                <form action="forgot-password.php" method="POST" autocomplete="">
                    <p class="text-center"><h3>Enter your email address<h3></p>

<?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" >
                    </div>
                    <div class="form-group">
                        <input class="form-control button"  style="background-color: #77C4FE;"  type="submit"  name="check-email" value="Continue">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <center><body style="background:url(main.png);background-repeat:no-repeat;background-size:cover;"a link="red" vlink="red"></center>

</body>
</html>
