<?php
if(isset($_POST['submit']))
{
	$file = $_POST['file'];
	print_r($file);
	$filename = $_FILES['file']['name'];
}