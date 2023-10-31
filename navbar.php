
<style>
	.collapse a{
		text-indent:10px;
	}
	nav#sidebar{
		background-color: black;
		margin: 0px;
		top: 9.9%;
		width: 20.4%;

	}




	#logo{
		height: 10%;
		float: center;
top: -10px;
position:relative;



	display: block;
   margin-left: auto;
   margin-right: auto;
   width: 22%;


	}




#sidebar{
	height: 30%;
	padding: 10px;
	float: top;
width: 210px;
padding-top: 10px;
background-color:#D2D2D2;
margin-left:initial;
left: -100%;
top: 10px;
margin: 0;

}



    #content {
    float: left;
    width: 670px;
    padding-top: 20px;
		top: 10px;
    }
</style>
<link rel="stylesheet" href="./style.css">

<nav id="sidebar" style="  background:url(second.png);background-repeat:no-repeat;background-size:cover;"a link="red" vlink="red"></center>
	<img src="logo.png" alt="logo" id="logo">

		<div class="sidebar-list">

				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=categories" class="nav-item nav-categories"><span class='icon-field'><i class="fa fa-tags"></i></span> Sub-Retros</a>
				<a href="index.php?page=topics" class="nav-item nav-topics"><span class='icon-field'><i class="fa fa-comment"></i></span> Discussion</a>
				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
			<?php endif; ?>

		</div>

</nav>
<script>
	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
