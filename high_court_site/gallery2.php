<?php include_once("header.php") ?>
<style>

#next3 {
  background-color: rgb(3, 39, 75);
  cursor: pointer;
  display: none;
  height: 50px;
  line-height: 50px;
  opacity: 0.9;
  position: fixed;
  right: 31.4%;
  text-align: center;
  top: 46%;
  width: 50px;
  z-index: 2147483647;
}
	#prev3 {
  background-color: rgb(3, 39, 75);
  cursor: pointer;
  display: none;
  height: 50px;
  left: 31.4%;
  line-height: 50px;
  opacity: 0.9;
  position: fixed;
  text-align: center;
  top: 45%;
  width: 50px;
  z-index: 2147483647;
}
</style>
<script src="jquery.js"></script>
<script>
	$(document).ready(function(e) {
        $(".img").click(function(){
			var id=$(this).attr("id");
			var src=$(this).attr("src");
			$("#image").attr("src",src);
			$("#maintop").show();
			$("#next3").show();
			$("#prev3").show();
			$("#image2").fadeIn(1000);
			var last=$(".img:last").attr("id");
			$("#next3").click(function(){
				if(id==last){ 
					id=1;
					var src=$("#"+id).attr("src");
					$("#image").attr("src",src);
				}
				else{
					id=eval(id)+1;
					var src=$("#"+id).attr("src");
					$("#image").attr("src",src);
				}
			})
			$("#prev3").click(function(){
				if(id==1){ 
					id=last;
					var src=$("#"+id).attr("src");
					$("#image").attr("src",src);
				}
				else{
				id=eval(id)-1;
				var src=$("#"+id).attr("src");
				$("#image").attr("src",src);
				}
			})
		})
		$("#maintop").click(function(){
			$("#maintop").hide();
			$("#next3").hide();
			$("#prev3").hide();
			$("#image2").fadeOut();
		})
    });
</script>
<div id="image2">
	<img src="" id="image" height="100%" width="100%" />
</div>


<?php

		$a1=$_REQUEST['a'];
		?>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="content">
      <h1 style="color:#000;">Photo Gallery > <?php echo $a1 ?></h1>
      <div id="prev3">Prev</div>
      <div id="next3">Next</div>
      
    	<?php
				$picid=1;
		$r=mysql_query("select * from gallery where name='$a1'");
		while($s=mysql_fetch_array($r)){
		?>  
   	<div class="box">
    	   <div class="image">
           <img src="<?php echo $s['images'] ?>" 
           height="100%" width="100%" 
           id="<?php echo $picid ?>" class="img" /></div>
      </div>  
     <?php
	 	$picid++;
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