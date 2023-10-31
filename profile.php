<?php include 'db_connect.php' ?>
<?php include 'topbar.php' ?>
<?php include 'header.php' ?>
<?php include 'navbar.php' ?>
<?php session_start(); ?>

<style>
#profileo
{
    
    margin-left: auto;
    margin-right: auto;
    text-align: center; 
    top: 300px; 
    position: relative;
    align-items: center;
    
}
#profils
{

    margin-left: auto;
    margin-right: auto;
    
    top: 20px; 
    position: relative;
    align-items: center;

}

</style>

<div form action='upload.php' method='POST' enctype='multipart/form-data' id='profileo'>
	<input type='file' name='file' id='profils' >
	<button type='submit' name='submit' >UPLOAD</button>
</form>
</div>