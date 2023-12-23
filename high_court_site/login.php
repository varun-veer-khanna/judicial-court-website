<?php 
ob_start();
include("header.php") ?>
<style>
.clear.firstlist a {
  background: none repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
  margin: 5px 5px 25px 10px;
}
</style>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div class="fl_left">
        <div id="hpage_quicklinks">
        <form action="" method="post" name="l"
        onsubmit="return login()">
          <table border="2" height="300" 
          width="300" cellspacing="10" 
          style="text-align:center !important; color:#000;">
          	<tr>
            	<th colspan="2">Login Box</th>
            </tr>
            <tr>
            	<th width="50%">Login-Id</th>
                <th><input type="text" name="t1" style="padding:6px;width:180px;" /></th>
            </tr>
            <tr>
            	<th>Password</th>
                <th><input type="password" name="t2" style="padding:6px;width:180px;" /></th>
            </tr>
            <tr>
            	<th colspan="2"><input type="submit" value="login" style="width:120px;" /></th>
            </tr>
            </table>             
            </form>
            <?php
			if(isset($_POST['t1'])){
				$a=$_POST['t1'];
				$b=$_POST['t2'];
				$r=mysql_query("select * from login where email='$a' and pwd='$b'")or die(mysql_error());
				if(mysql_num_rows($r)>0){
					$_SESSION['admin']=$a;
					header("location:admin.php");
				}
				else{
					echo"<script> alert('Username And Password is not match')</script>";
				}
			}
				?>
        </div>
        
      </div>
      <!-- ############### -->
      <div class="fl_right">
        <div id="hpage_specials" class="clear">
          <h2 class="title">History</h2>
          <p class="latestnews" style="text-align:justify;">The High Court of Punjab and Haryana, is a 
          common institution for the States of Punjab, Haryana and the 
          Union territory of Chandigarh. Located in the capital 
          city of Chandigarh in the foot hills of Shivalik Range, 
          it was designed by the famous French Architect 
          Le Corbusier and thus boasts of being an architectural marvel. 
          The Court Complex, due to it's architectural brilliance,
           is thronged by students of Architecture from all over
           the world for the study of its design and facets.
           It is also a popular tourist destination for 
          people visiting Chandigarh. A museum, with a beautiful 
          display of artifacts, rare documents and depictions 
          showcasing how the High Court Building came into being, is also a 
          part of the Punjab and Haryana High Court building premises.</p>
        </div>
        </div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<?php include("footer.php") ?>