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
            <th>
Search Cases By Impugned Order Details</th>
            </tr>
        </thead>
      </table>
      <form action="" method="post">
      <table border="2" height="200" cellspacing="10">
      	<tr>
                	<th>Impugned Order District</th>
                	<th><select name='t1' required="required" class="textdata" style="width:450px;" >
                    <option value =''>-DISTRICT NAME-</option>
                    <option value ="AMBALA">AMBALA</option>
                    <option value ="AMRITSAR">AMRITSAR</option>
                    <option value ="BARNALA">BARNALA</option>
                    <option value ="BATHINDA">BATHINDA</option>
                    <option value ="BHIWANI">BHIWANI</option>
                    <option value ="FARIDABAD">FARIDABAD</option>
                    </select>
                    </th>
                </tr>      <tr>
        	<tr>
        	<th>Impugned Order Date(DD/MM/YYYY)</th>
            <th><input type="date" required="required" placeholder="DD/MM/YYYY" name="t3" class="textdata" />
            </th>
        </tr>  
        <tr>
        <th align="center" colspan="2">
        <input type="submit" value="Search Case" style="padding:5px;" /></th></tr>
      </table>
      </form>
      <?php
	  if(isset($_POST['t1'])){
		  $a=$_POST['t1'];
		  $c=$_POST['t3'];
	$r=mysql_query("select * from addcase where state='$a' and date='$c'")or die(mysql_error());
	if(mysql_num_rows($r)>0){ 
		?>
        	
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th colspan="8">
            List of Cases Registered in 
            District <?php echo $a ?>  and  order  dated : <?php echo $c ?>
           </th>
            </tr>
           <tr>
           	<th>Case No</th>
            <th>Petitioner Name</th>
            <th>Respondent Name</th>
            <th>Advocate Name</th>
            <th>Status</th>
            <th>Final/IO</th>
            <th>Authority</th>
           </tr>  
        </thead>
        <?php
		while($s=mysql_fetch_array($r)){ 
	  ?>
        <tbody>
        	<tr>
            <th><?php echo $s['caseno'] ?> </th>
            <th><?php echo $s['pname'] ?></th>
            <th><?php echo $s['othername'] ?></th>
            <th><?php echo $s['partyadv'] ?></th>
            <th><?php echo $s['status'] ?></th>
            <th><?php echo $s['final'] ?></th>
            <th><a  target="_blank" href="<?php echo $s['pdf'] ?>">
            <img src="images/images/icon_pdf.png" /></a></th>
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