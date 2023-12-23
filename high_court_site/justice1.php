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
      <h1 style="color:#000;">Hon'ble Judges</h1>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th width="5%">Sno.</th>
            <th width="75%">Hon'ble Judges</th>
            <th width="10%">Court Room</th>
            <th width="10%">Assets</th>
            </tr>
        </thead>
        <tbody>
          <?php
		  $r=mysql_query("select * from justice")or die(mysql_error());
		  if(mysql_num_rows($r)>0){
		  		while($s=mysql_fetch_array($r)){
				?>
            <tr class="light">
            <td><?php echo $s['id'] ?></td>
            <td><?php echo $s['name'] ?></td>
            <td><?php echo $s['cno'] ?></td>
            <td><a  target="_blank" href="<?php echo $s['assets'] ?>">
            <img src="images/images/icon_pdf.png" /></td>
            </a>
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