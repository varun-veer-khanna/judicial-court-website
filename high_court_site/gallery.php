<?php include_once("header.php") ?>
<style>
p{
	text-align:justify;
}
.box {
  background: #999 none repeat scroll 0 0;
  float: left;
  height: 200px;
  margin: 10px 10px 0 0;
  width: 195px;
  border:1px solid;
  position:relative;
}
.text {
  background: yellow none repeat scroll 0 0;
  font-size: 18px;
  line-height: 30px;
  margin-top: 70%;
  position: absolute;
  text-align: left;
  text-transform: capitalize;
  display:block;
  width: 90%;
}
.image {
  height: 100%;
  width: 100%;
}
</style>

<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="content">
      <h1 style="color:#000;">Court: Photo Gallery</h1>
    	  <?php 
		  $r=mysql_query("select distinct(name) from gallery");
		  while($s=mysql_fetch_array($r)){
			  $name=$s['name'];
			  $r1=mysql_query("select * from gallery where 
			  name='$name'");
			  if($s1=mysql_fetch_array($r1)){
			  	$image=$s1['logo'];
				$id=$s1['id'];
			  }
			?>
   			<div class="box">
    	   <div class="text"><a href="gallery2.php?a=<?php echo $name ?>">
		   <?php echo $s['name'] ?></a></div>
   		   <div class="image">
           <a href="gallery2.php?a=<?php echo $name ?>">
		   <img src="<?php echo $image ?>" height="100%" width="100%" /></a></div>
      </div>
      <?php
		  }
		  ?>
   	</div>
    <?php include_once("sidebar.php") ?>
    <!-- ####################################################################################################### -->
    <div class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<?php include_once("footer.php") ?>