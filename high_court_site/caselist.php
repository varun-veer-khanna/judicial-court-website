<?php include_once("header.php") ?>
<style>
p{
	text-align:justify;
}
</style>

<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="content">
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th>Search Daily Causelist in PDF</th>
            </tr>
        </thead>
      </table>
      <form action="" method="post">
      <table border="2" height="200" cellspacing="10">
      	<tr>
        	<th width="30%">Case Date</th>
            <th><input type="text" required="required"  name="t1" class="textdata"/></th>
        </tr>    <tr>
        	<th>Case Type</th>
            <th><select name='t2' required="required" class="textdata" style="width:450px;">
                   <option value =''>-LIST TYPE-</option>
                    <option value='Complete List' >Complete List</option>
                    <option value='Urgent' >Urgent</option>
                    <option value='Ordinary' >Ordinary</option>
                    <option value='Takenup' >Takenup</option>
                    <option value='Regular' >Regular</option>
                    <option value='Special-DB' >Special-DB</option>
                    <option value='Liquidation(Ordinary)' >Liquidation(Ordinary)</option>
                    <option value='Samadhan' >Samadhan</option>
                    <option value='Mediation' >Mediation</option>
                    <option value ='Pre Lok-Adalat'>Pre Lok-Adalat</option>
                    <option value ='Lok-Adalat'>Lok-Adalat</option>
                    <option value ='Election'>Election</option>
                    <option value ='Liquidation(Urgent)'>Liquidation(Urgent)</option>
                    <option value ='Objections'>Objections</option>
                    <option value ='CL Notes'>CL Notes</option>
                    <option value ='Fix Today'>Fix Today</option>
                    <option value ='Miscellaneous'>Miscellaneous</option></th>
                </th>
				</tr>
			<tr>
				<th>
				Select :
				</th>
				<td>
				<input type="radio" name="t3" value="Main" checked> Main
  <input type="radio" name="t3" value="Supplementary"> Supplementary<br>
				
				</td>
        </tr>
		   
        <tr>
        <th align="center" colspan="2">
        <input type="submit" value="Search Causelist" style="padding:5px;" /></th></tr>
      </table>
      </form>
      <?php
	  if(isset($_POST['t1'])){
		  $a=$_POST['t1'];
		  $b=$_POST['t2'];
		  $c=$_POST['t3'];
	$r=mysql_query("select * from addcause where ctype='$b' and main1='$c' and date='$a'")or die(mysql_error());
	if(mysql_num_rows($r)>0){ 
		?>
        	
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th colspan="5">Daily Cause Lists :<?php echo $a ?>  
            </th>
            </tr>
           <tr>
           	<th>Case Date</th>
            <th>Case Type</th>
            <th>Main/Supplementary</th>
            <th>View Cause List</th>

           </tr>  
        </thead>
        <?php
		while($s=mysql_fetch_array($r)){ 
	  ?>
        <tbody>
		
        	<tr>
            <th><?php echo $s['date'] ?> </th>
            <th><?php echo $s['ctype'] ?></th>
            <th><?php echo $s['main1'] ?></th>
            <th><a  target="_blank" href="<?php echo $s['pdf'] ?>">
            <img src="images/images/icon_pdf.png" /></th>
            </tr>
		
        </tbody>
      </table>
      <?php
	  }
		}
		
	else{
	  	echo "No data found"; 
	  }
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