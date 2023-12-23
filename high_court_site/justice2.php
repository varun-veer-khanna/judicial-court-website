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
      <h1 style="color:#000;">Hon'ble Former Chief Justices</h1>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th width="5%">Sno.</th>
            <th width="55%">Hon'ble Former Chief Justices</th>
            <th width="20%">From</th>
            <th width="20%">to</th>
            </tr>
        </thead>
        <tbody>
          <?php
		  $r=mysql_query("select * from justice2")or die(mysql_error());
		  if(mysql_num_rows($r)>0){
		  		while($s=mysql_fetch_array($r)){
				?>
            <tr class="light">
            <td><?php echo $s['id'] ?></td>
            <td><?php echo $s['name'] ?></td>
            <td><?php echo $s['from'] ?></td>
            <td><?php echo $s['to'] ?></td>
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