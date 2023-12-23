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
            <th>Search By Caveat Number</th>
            </tr>
        </thead>
      </table>
      <form action="" method="post">
      <table border="2" height="350" cellspacing="10">
      	<tr>
        	<th width="30%">Diary No</th>
            <th><input type="text" required="required" name="t1" class="textdata" /></th>
        </tr>    <tr>
        	<th>Party Name</th>
            <th><input type="text" required="required" name="t2" class="textdata"/></th>
        </tr>    <tr>
        	<th>Advocate Name</th>
            <th><input type="text" required="required" name="t3" class="textdata"/></th>
        </tr>    <tr>
        	<th>status</th>
            <th><select name='t4' required="required" class="textdata" style="width:450px;" >
                    <option value =''>-STATUS-</option>
                    <option value ="Objection">Objection</option>
                    <option value ="cancelled">Cancalled</option>
                    <option value ="matched">Matched</option>
                    <option value ="acceped">Accepted</option>
                    </select></th>
        </tr>    
        <tr>
        <th align="center" colspan="2">
        <input type="submit" value="Search Case" style="padding:5px"/></th></tr>
      </table>
      </form>
      <?php
	  if(isset($_POST['t1'])){
		  $a=$_POST['t1'];
		  $b=$_POST['t2'];
		  $c=$_POST['t3'];
		  $d=$_POST['t4'];
	$r=mysql_query("select * from addcase where caseno='$a' and pname='$b' 
	and partyadv='$c' and status='$d'")or die(mysql_error());
	if(mysql_num_rows($r)>0){ 
		?>
        	
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th colspan="5">List of Registered Cases For Matching Criteria</th>
            </tr>
           <tr>
           	<th>Diary No</th>
            <th>Petitioner Name</th>
            <th>Respondent Name</th>
            <th>Advocate Name</th>
            <th>Date</th>
            <th>District</th>
            <th>Status</th>
            <th>HC Case No.</th>
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
            <th><?php echo $s['date'] ?></th>
            <th><?php echo $s['state'] ?></th>
            <th><?php echo $s['id'] ?></th>
            <th><?php echo $s['status'] ?></th>
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