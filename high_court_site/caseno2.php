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
            <th>Search For Judgments By Case Number</th>
            </tr>
        </thead>
      </table>
      <form action="" method="post">
      <table border="2" height="200" cellspacing="10">
      	<tr>
        	<th width="30%">Case No</th>
            <th><input type="text" required="required" placeholder="case no" name="t1" class="textdata"/></th>
        </tr>    <tr>
        	<th>Case Type</th>
            <th><select name='t2' required="required" class="textdata" style="width:450px;">
                    <option value =''>-CASE TYPE-</option>
                    <option value='CWP' >CWP</option>
                    <option value='CRM-M' >CRM-M</option>
                    <option value='CR' >CR</option>
                    <option value='RSA' >RSA</option>
                    <option value='CRR' >CRR</option>
                    <option value='CRA-S' >CRA-S</option>
                    <option value='FAO' >FAO</option>
                    <option value='CM' >CM</option>
                    <option value='CRM' >CRM</option>
                    <option value =ARB>ARB</option>
                    <option value =CA>CA</option>
                    <option value =CACP>CACP</option>
                    <option value =CAPP>CAPP</option>
                    <option value =CCEC>CCEC</option>
                    <option value =CCES>CCES</option>
                    <option value =CEA>CEA</option>
                    <option value =CEC>CEC</option>
                    <option value =CEGC>CEGC</option>
                    <option value =CESR>CESR</option>
                    <option value =CLAIM>CLAIM</option>
                    <option value =CMA>CMA</option>
                    <option value =CMM>CMM</option>
                    <option value =CO>CO</option>
                    <option value =COA>COA</option>
                    <option value =COCP>COCP</option>
                    <option value =CP>CP</option>
                    <option value =CRA>CRA</option>
                    <option value =CRA-AD>CRA-AD</option>
                    <option value =CRA-AS>CRA-AS</option>
                    <option value =CRA-D>CRA-D</option>
                    <option value =CRACP>CRACP</option>
                    <option value =CREF>CREF</option>
                    <option value =CRM-A>CRM-A</option>
                    <option value =CRM-W>CRM-W</option>
                    <option value =CROCP>CROCP</option>
                    <option value =CRR(F)>CRR(F)</option>
                    <option value =CRREF>CRREF</option>
                    <option value =CRWP>CRWP</option>
                    <option value =CS>CS</option>
                    <option value =CS-OS>CS-OS</option>
                    <option value =CUSAP>CUSAP</option>
                    <option value =DP>DP</option>
                    <option value =EA>EA</option>
                    <option value =EDC>EDC</option>
                    <option value =EDREF>EDREF</option>
                    <option value =EFA>EFA</option>
                    <option value =EP>EP</option>
                    <option value =ESA>ESA</option><option value =FAO(FC)>FAO(FC)</option><option value =FAO-C>FAO-C</option><option value =FAO-M>FAO-M</option><option value =GCR>GCR</option><option value =GSTR>GSTR</option><option value =GTA>GTA</option><option value =GTC>GTC</option><option value =GTR>GTR</option><option value =GVATR>GVATR</option><option value =INCOMP>INCOMP</option><option value =INTTA>INTTA</option><option value =IOIN>IOIN</option><option value =ITA>ITA</option><option value =ITC>ITC</option><option value =ITR>ITR</option><option value =LPA>LPA</option><option value =LR>LR</option><option value =MATRF>MATRF</option><option value =MRC>MRC</option><option value =O&M>O&M</option><option value =OLR>OLR</option><option value =PBT>PBT</option><option value =PVR>PVR</option><option value =RA>RA</option><option value =RA-CA>RA-CA</option><option value =RA-CP>RA-CP</option><option value =RA-CR>RA-CR</option><option value =RA-CW>RA-CW</option><option value =RA-LP>RA-LP</option><option value =RA-RF>RA-RF</option><option value =RA-RS>RA-RS</option><option value =RCRWP>RCRWP</option><option value =RFA>RFA</option><option value =RP>RP</option><option value =SA>SA</option><option value =SAO>SAO</option><option value =SDR>SDR</option><option value =STA>STA</option><option value =STC>STC</option><option value =STR>STR</option><option value =TA>TA</option><option value =TC>TC</option><option value =TCRM>TCRM</option><option value =UVA>UVA</option><option value =UVR>UVR</option><option value =VATAP>VATAP</option><option value =VATCASE>VATCASE</option><option value =VATREF>VATREF</option><option value =WTA>WTA</option><option value =WTC>WTC</option><option value =WTR>WTR</option><option value =XOBJ>XOBJ</option><option value =XOBJC>XOBJC</option><option value =XOBJL>XOBJL</option><option value =XOBJR>XOBJR</option><option value =XOBJS>XOBJS</option></select></th>
                </th>
        </tr>    <tr>
        	<th>Case Year</th>
            <th><select name="t3" class="textdata" style="width:450px;">
                    		<option value="">-CASE YEAR-</option>
                            <?php 
								for($i=2016;$i>=1990;$i--){
									echo"<option value=".$i.">".$i."</option>";
								}
							?>
                            </select></th>
        </tr>  
        <tr>
        <th align="center" colspan="2">
        <input type="submit" value="Search Case" style="padding:5px;" /></th></tr>
      </table>
      </form>
      <?php
	  if(isset($_POST['t1'])){
		  $a=$_POST['t1'];
		  $b=$_POST['t2'];
		  $c=$_POST['t3'];
	$r=mysql_query("select * from addcase where caseno='$a' 
	and ctype='$b' and cyear='$c'")or die(mysql_error());
	if(mysql_num_rows($r)>0){ 
		?>
        	
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th colspan="5">Judgment Details For Case:<?php echo $b ?>  
            -<?php echo $a ?> 
            -<?php echo $c ?> </th>
            </tr>
           <tr>
           	<th>Case No</th>
            <th>Petitioner Name</th>
            <th>Respondent Name</th>
            <th>Judgment </th>
            <th>PDF</th>
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
            <th><?php echo $s['desc'] ?></th>
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