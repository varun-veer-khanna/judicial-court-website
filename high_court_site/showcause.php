<?php include("adminheader.php") ?>
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
      
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th width="10%">Date</th>
            <th width="10%">Case Type</th>
            <th width="10%">Main/Supplementary</th>
            <th width="5%">Full Detail</th>
            </tr>
        </thead>
        
        <tbody>
        	<?php
			$r=mysql_query("select * from addcause")or die(mysql_error());
				while($s=mysql_fetch_array($r)){
				?>
			<tr>
			<th width="10%"><?php echo $s['date'] ?></th>
            <th width="10%"><?php echo $s['ctype'] ?></th>
			<th width="10%"><?php echo $s['main1'] ?></th>
            <th width="5%"><a href="<?php echo $s['pdf'] ?>">
            <img src="images/images/icon_pdf.png" /></a></th>
            </tr>
				<?php
                }
			?> 
        </tbody>
        </table>
        
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<?php include("footer.php") ?>