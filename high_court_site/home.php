<?php include("header.php") ?>
<style>
.clear.firstlist a {
  background: none repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
  margin: 5px 5px 25px 10px;
}
</style>
<div class="wrapper row3">
<div id="hero">
    	<div id="next">&rang;</div>
        <div id="prev">&lang;</div>
        <div id="slider">
        	<img src="images/images/1.jpg" width="100%" height="400" />
        	<img src="images/images/2.jpg"  width="100%" height="400"/>
        	<img src="images/images/3.jpg"  width="100%" height="400"/>
        </div>
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div class="fl_left">
        <div id="hpage_quicklinks">
          <ul class="clear firstlist">
            <li><a href="https://india.gov.in/" target="_blank"><img src="images/images/c_charter.png" /></a></li>
            <li><a href="http://ecourts.gov.in/services/" target="_blank"><img src="images/images/data_grid.png" /></a></li>
            <li><a href="http://highcourtchd.gov.in/citizen_charter_final.pdf" target="_blank"><img src="images/images/gov_logo2.png" /></a></li>
            <li><a href="http://highcourtchd.gov.in/?trs=location" target="_blank"><img src="images/images/map.png" /></a></li>
            <li><a href="http://www.supremecourtofindia.nic.in/" target="_blank"><img src="images/images/supreme-court-india.png" /></a></li>
            <li><a href="http://highcourtchd.gov.in/?trs=museum" target="_blank"><img src="images/images/museum.png" /></a></li>
         </ul>
        </div>
        <h2 class="title">Filing Search</h2>
        <div id="hpage_quicklinks">
          <ul class="clear">
            <li><a href="diaryno.php">Diary No.</a></li>
            <li><a href="caveat.php">Caveat No.</a></li>
         </ul>
        </div>
        <h2 class="title">Case Search</h2>
        <div id="hpage_quicklinks">
          <ul class="clear">
            <li><a href="caseno.php">Case No.</a></li>
            <li><a href="firno.php">FIR No.</a></li>
            <li><a href="cmpno.php">Complaint No.</a></li>
            <li><a href="lacno.php">LAC/LR No.</a></li>
            <li><a href="lower.php">Lower Court</a></li>
            <li><a href="order.php">Impugned Order</a></li>
         </ul>
        </div>
        <h2 class="title">Judgment Search</h2>
        <div id="hpage_quicklinks">
          <ul class="clear">
            <li><a href="caseno2.php">Case No.</a></li>
            <li><a href="judge.php">Judge Wise</a></li>
         </ul>
        </div>
        <h2 class="title">Cause List</h2>
        <div id="hpage_quicklinks">
          <ul class="clear">
            <li><a href="caselist.php">Cause List(PDF)</a></li>
         </ul>
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
      <h2 class="title">Latest News</h2>
        <div id="hpage_latestnews">
        	<marquee direction="up" scrollamount="3" height="335" onmouseover="stop()" onmouseout="start()"> 
            <ul>
            <?php 
			$r=mysql_query("select * from news ORDER BY id DESC")or die(mysql_error);			
            if(mysql_num_rows($r)>0){
				while($s=mysql_fetch_array($r)){
					?>
                    <li>
                	<h3 style="text-transform:uppercase; font-size:16px !important;"><?php echo $s['title'] ?>(<?php echo $s['date'] ?>)</h3>
 			<p><?php echo $s['news'] ?></p><hr/>
				</li>
                    <?php
				}
			}
			else{
				echo"No data";
			}
			?>
            
            </ul>
            </marquee>    
        </div>
        </div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<?php include("footer.php") ?>