<?php
if(!(isset($_SESSION))){
session_start();
}
if(!(isset($_SESSION['admin']))){
	header("location:home.php");
}
include_once("connect2.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>High Court of Punjab and Haryana</title>
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>

<script src="jquery.js"></script>
<script src="slider.js"></script>
<script>
	$("#slider").cycle({
		fx:'fade',
		next:'#next',
		prev:'#prev'
		
	});
</script>
<style>
	#hero{
		height:400px;
		width:100%
		position:relative;
		margin:50px auto;
	}
	#next{
		height:50px;
		width:50px;
		background-color:rgba(183,0,3, .3);
		line-height:50px;
		text-align:center;
		right:0;
		position:absolute;
		top:380px;
		z-index:99;
		opacity:.3;	
		cursor:pointer;
	}
	#prev{
		height:50px;
		width:50px;
		background-color:rgba(183,0,3, .3);
		line-height:50px;
		text-align:center;
		left:0;
		position:absolute;
		top:380px;
		z-index:99;
		opacity:.3;	
		cursor:pointer;
	}
	#slider{
		height:400px;
		width:100%;
		position:absolute;
		overflow:hidden;
	}
	#hero:hover #next{
		opacity:1;
	}
	#hero:hover #prev{
		opacity:1;
	}
</style>
<!-- liteAccordion is Homepage Only -->
<link rel="stylesheet" href="layout/scripts/liteaccordion-v2.2/css/liteaccordion.css" type="text/css" />
</head>
<body id="top">
<div id="maintop" onclick="gallery2()"></div>
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      
    </div>
    
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
    <li class="active"><a href="admin.php">Homepage</a></li>
      <li><a href="">Case Detail</a>
      	<ul>
          <li><a href="addcase.php">Add case</a></li>
          <li><a href="editcase.php">Show All Cases</a></li>
		 <li><a href="addcause.php">Add Causelist</a></li>
		 <li><a href="showcause.php">Show All Causelists</a></li>
        </ul>
      </li>
       <li><a href="#">Hon'ble Judges</a>
        <ul>
          <li><a href="justice.php">Chief Justice & Judges</a></li>
          <li><a href="jjustice2.php">Former Chief Justice</a></li>
          <li><a href="cjustice.php">Former Judges</a></li>
        </ul>
      </li>
      <li><a href="addgallery.php">Gallery</a></li>
      <li><a href="news.php">add news</a></li>
      <li class="last"><a href="logout.php">Logout</a></li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
