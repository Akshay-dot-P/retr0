<?php include('db_connect.php');?>



<style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
}

.navbar-custom {
    background-color: black;
}






 #profile{

	background-image: url(box1.png);
	width: auto;
	float: left;
	background-repeat: no-repeat;
	position: static;
	background-size: 80% 100% ;
	padding: 10px 20px;
color: black;
object-fit: cover;
}




</style>




<nav class="navbar navbar-light fixed-top bg-primary text-white " style="padding:0;min-height: 3.5rem">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">

  		</div>

			<link rel="stylesheet" type="text/css" href="sidestyle.css">
			<div class="header"></div>
			  <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
			  <label for="openSidebarMenu" class="sidebarIconToggle">
			    <div class="spinner diagonal part-1"></div>
			    <div class="spinner horizontal"></div>
			    <div class="spinner diagonal part-2"></div>
			  </label>
			  <div id="sidebarMenu">
			    <ul class="sidebarMenuInner">
						<li><h1>ABOUT</h1></li>
			      <li>Akshay P <span>Web Developer</span></li>
			      <li><a href="https://github.com/Akshay-pwho" target="_blank">Github</a></li>
			      <li><a href="https://instagram.com/_akshay__p" target="_blank">Instagram</a></li>
			      <li><a href="https://twitter.com/plavookac" target="_blank">Twitter</a></li>
			      <li><a href="https://www.youtube.com/channel/UCDfZM0IK6RBgud8HYGFXAJg" target="_blank">YouTube</a></li>



			    </ul>
			  </div>

      <div class="col-md-4 float-left text-white">








        <large style="font-family:helvetica;font-size: 26px;padding:10px 6px;background-color:#007bff;  color:  #e4e5e4; position: relative; z-index: 9;
"><b>&nbsp Re</b></large>

      </div>

      <div class="col-md-4 float-left">

        <form id="manage-search">
            <input type="text" placeholder="Search here" id="find" class="form-control" value="<?php echo isset($_GET['keyword'])? $_GET['keyword'] :'' ?>">
        </form>
			</div>










			<div class="float-left" >
				<div class=" dropdown mr-4">
						<!--<a href="#" class="text-white dropdown-toggle"  id="account_settings " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">		&nbsp	&nbsp	&nbsp	&nbsp &nbsp <?php echo  "hot" ?> </a>

							<div class="dropdown-menu" aria-labelledby="account_settings" style="left: 3.5em;">
								<a class="dropdown-item" href="#" id=""> r/technology</a>
								<a class="dropdown-item" href="#">r/sports</a>
								<a class="dropdown-item" href="#">
								<?php //echo "r/politics "?></a>

							</div>
				</div>
			</div>





-->

			&nbsp&nbsp
			&nbsp&nbsp
			&nbsp&nbsp
			&nbsp&nbsp
			&nbsp&nbsp
			&nbsp&nbsp




		<div class="float-right" id="profile">

			<div class=" dropdown mr-4">


				&nbsp<div class="float-left">
				<img src= "user.png"
				class="rounded-square"

							 style="width: 30px; height:25px; top:-5px;position:absolute;
"/>

				</div>


					&nbsp&nbsp<a href="#" class="text-white dropdown-toggle"  id="box" id="account_settings box" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><?php echo $_SESSION['login_name'] ?> </a><br>

						<div class="dropdown-menu" aria-labelledby="account_settings" style=" left: -3.8em; width: auto;position: absolute; top: 50px; ">
							<a class="dropdown-item" href="javascript:void(0)" id="manage_my_account"><i class="fa fa-cog" ></i> Manage Account</a>
							<a class="dropdown-item" href="ajax.php?action=logout" id="logout"><i class="fa fa-power-off"></i> Logout</a>
							
						</div>
			</div>
		</div>
	</div>



</nav>














<script>
  $('#manage_my_account').click(function(){
    uni_modal("Manage Account","manage_user.php?id=<?php echo $_SESSION['login_id'] ?>&mtype=own")
  })
  $('#find').keypress(function(e){
    if(e.which == 13){
      $('#manage-search').submit()
    }
  })
  $('#manage-search').submit(function(e){
    e.preventDefault()
    location.href = "index.php?page=search&keyword="+$('#find').val()
  })
</script>
