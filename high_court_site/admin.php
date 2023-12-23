<?php include("adminheader.php") ?>
<!-- ####################################################################################################### -->
<?php include_once("adminsidebar.php") ?>      
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