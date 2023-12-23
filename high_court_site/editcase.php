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
            <th width="5%">Sno.</th>
            <th width="10%">Case Title</th>
            <th width="10%">Fir No</th>
            <th width="10%">Lac No</th>
            <th width="10%">Complate No</th>
            <th width="10%">Party Name</th>
            <th width="10%">Petitioner Name</th>
            <th width="10%">Advocate Name</th>
            <th width="10%">Case Year</th>
            <th width="10%">Case Type</th>
            <th width="10%">Full Detail</th>
            </tr>
        </thead>
        
        <tbody>
        	<?php
			$r=mysql_query("select * from addcase")or die(mysql_error());
				while($s=mysql_fetch_array($r)){
				?>
			<tr>
            <th width="5%"><?php echo $s['id'] ?></th>
            <th width="10%"><?php echo $s['ctitle'] ?></th>
            <th width="10%"><?php echo $s['firno'] ?></th>
            <th width="10%"><?php echo $s['lacno'] ?></th>
            <th width="10%"><?php echo $s['cmpno'] ?></th>
            <th width="10%"><?php echo $s['pname'] ?></th>
            <th width="10%"><?php echo $s['othername'] ?></th>
            <th width="10%"><?php echo $s['partyadv'] ?></th>
            <th width="10%"><?php echo $s['cyear'] ?></th>
            <th width="10%"><?php echo $s['ctype'] ?></th>
            <th width="10%"><a href="<?php echo $s['pdf'] ?>">
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