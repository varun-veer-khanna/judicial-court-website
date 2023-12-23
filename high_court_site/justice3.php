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
      <h1 style="color:#000;">Hon'ble Former Judges</h1>
      <table>
        <thead>
          <tr>
            <th width="30%">Name Of The Hon'ble Judges</th>
            <th colspan="2" width="30">Period</th>
            <th width="40">Remarks</th>
            </tr>
            <tr>
            <th>&nbsp;</th>
            <th>From</th>
            <th>to</th>
            <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
          <?php
		  $r=mysql_query("select * from cjustice")or die(mysql_error());
		  if(mysql_num_rows($r)>0){
		  		while($s=mysql_fetch_array($r)){
				?>
            <tr class="light">
            <td><?php echo $s['name'] ?></td>
            <td><?php echo $s['form'] ?></td>
            <td><?php echo $s['to'] ?></td>
            <td><?php echo $s['remarks'] ?></td>
            </tr>  
                <?php
				}
		  }
		  else{
		  	echo "No data";
		  }
          ?>
        </tbody>
      </table>
      </div>
    <?php include_once("sidebar.php") ?>
    <!-- ####################################################################################################### -->
    <div class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<?php include_once("footer.php") ?>