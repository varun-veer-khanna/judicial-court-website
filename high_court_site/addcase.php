<?php include("adminheader.php") ?>
<!-- ####################################################################################################### -->
<?php include_once("adminsidebar.php") ?>      <!-- ############### -->
      <div class="fl_right">
      <h2 class="title">ADD CASE</h2>
        	<form action="" method="post" 
            name="f2" onsubmit="return bookval()" 
            enctype="multipart/form-data">
            <table border="5" clclass="table" height="700">
            	<tr>
                	<th>Case Title</th>
                	<th><input type="text" required="required" name="t1" placeholder="CASE TITLE" class="text"></th>
                </tr>    
                <tr>
                	<th>FIR NO</th>
                	<th><input type="text"required="required" name="t2" placeholder="FIR NO" class="text"></th>
                </tr>    
                <tr>
                	<th>LAC NO</th>
                	<th><input type="text" required="required" name="t3" placeholder="LAC NO" class="text"></th>
                </tr>    
                <tr>
                	<th>FROM DATE</th>
                	<th><input type="text" required="required" name="t12" placeholder="FROM DATE" class="text"></th>
                </tr>    
                <tr>
                	<th>TO DATE</th>
                	<th><input type="text" required="required" name="t13" placeholder="TO DATE" class="text"></th>
                </tr>    
                <tr>
                	<th>COMPLAINT NO</th>
                	<th><input type="text" name="t4" required="required" placeholder="COMPLAINT NO" class="text"></th>
                </tr>    
                <tr>
                	<th width="30%">PARTY NAME</th>
                	<th><input type="text" name="t5" required="required" placeholder="PARTY NAME" class="text"></th>
                </tr>
                <tr>
                	<th>ADVOCATE NAME</th>
                	<th><input type="text" name="t6" required="required" placeholder="ADVOCATE NAME" class="text"></th>
                </tr>    
            	<tr>
                	<th>PETITIONER/REAPONDENT</th>
                	<th><input type="text" name="t7" required="required" placeholder="PETITIONER/REAPONDENT" class="text"></th>
                </tr>
                	    
            	<tr>
                	<th>PETITIONER ADVOCATE NAME</th>
                	<th><input type="text" name="t8" required="required" placeholder="PETITIONER ADVOCATE NAME" class="text"></th>
                </tr>
                <tr>
                	<th>CASE TYPE</th>
                	<th><select name='t9' class="text" required="required">
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
                </tr>    
            	<tr>
                	<th>CASE YEAR</th>
                	<th><select name="t10" required="required" class="text">
                    		<option value="">-CASE YEAR-</option>
                            <?php 
								for($i=2016;$i>=1990;$i--){
									echo"<option value=".$i.">".$i."</option>";
								}
							?>
                            </select>
                            </th>
                </tr>
                <tr>
                	<th>DISTRICT NAME</th>
                	<th><select name='t11' required="required" class="text" >
                    <option value =''>-DISTRICT NAME-</option>
                    <option value ="AMBALA">AMBALA</option>
                    <option value ="AMRITSAR">AMRITSAR</option>
                    <option value ="BARNALA">BARNALA</option>
                    <option value ="BATHINDA">BATHINDA</option>
                    <option value ="BHIWANI">BHIWANI</option>
                    <option value ="FARIDABAD">FARIDABAD</option>
                    </select>
                    </th>
                </tr>  
                <tr>
                	<th>DESCRIPTION</th>
                    <th><textarea name="t14" required="required" class="text"></textarea></th>
                    </tr>  
                <tr>
                	<th>Upload PDF</th>
                    <th><input type="file" required="required" name="t15" class="text"/></th>
                    </tr> 
                       <tr>
                	<th>STATUS</th>
                	<th>
					<select name='t16' required="required" class="text" >
                    <option value =''>-STATUS-</option>
                    <option value ="Pending">Pending</option>
                    <option value ="Register">Register</option>
                    <option value ="Objection">Objection</option>
                    <option value ="cancelled">Cancalled</option>
                    <option value ="matched">Matched</option>
                    <option value ="acceped">Accepted</option>
                    </select></th>
                </tr>  
				<tr>
                	<th>Bench No</th>
                	<th><input type="text" required="required" name="t17" class="text" />
                    </th>
                </tr>  
                <tr>
                	<th>Main/Supplementary</th>
                	<th>
					<select name='t19' required="required" class="text" >
                    <option value =''>-STATUS-</option>
                    <option value ="Main">Main</option>
                    <option value ="Supplementary">Supplementary</option>
                    </select>
                    </th>
                </tr>  
                <tr>
                	<th>Select Judge</th>
                	<th>
                    	<select name="t18" required="required">
<option value =''>-Select-</option>
<?php
	$r=mysql_query("select * from judge")or die(mysql_error());
	while($s=mysql_fetch_array($r)){
		echo"<option value=".$s['code'].">".$s['name']."</option>";
	}
?>
</select>
                    </th>
                </tr> 
                <tr>
                	<th colspan="2">
                    <input type="submit" class="text2" value="ADD CASE"></th>
                </tr>
            
                </table>	
    	</form>
        <?php
		if(isset($_POST['t1'])){
			$a=$_POST['t1'];
			$b=$_POST['t2'];
			$c=$_POST['t3'];
			$d=$_POST['t4'];
			$e=$_POST['t5'];
			$f=$_POST['t6'];
			$g=$_POST['t7'];
			$h=$_POST['t8'];
			$i=$_POST['t9'];
			$j=$_POST['t10'];
			$k=$_POST['t11'];
			$l=$_POST['t12'];
			$m=$_POST['t13'];
			$status=$_POST['t16'];
			$coatno=$_POST['t17'];
			$judge=$_POST['t18'];
			$main1=$_POST['t19'];
			$desc=$_POST['t14'];
			$cno=rand(100,10000);
			$name=$_FILES['t15']['name'];
			$location=$_FILES['t15']['tmp_name'];
			$name=str_replace(" ","_",$name);
			if(file_exists("casefile")){}
			else{ mkdir("casefile"); }
			move_uploaded_file($location,"casefile/".$name);
			$path="casefile/".$name;
			include_once("connect2.php");
			mysql_query("insert into addcase values('','$a','$b','$c',
			'$d','$e','$f','$g','$h','$i','$j','$k',
			'$desc','$cno','$l','$m','$path','$status','$coatno','$judge','$main1')");
			echo"<script> alert('NEW CASE INSERTED')</script>";
		}
		?>
<style>
 h3 {
	  style="font-size:18px !important;"
	 }
.text {
  padding: 6px;
  width: 96%;
  text-align:center;
}
.text2 {
  padding: 6px;
  width: 20%;
  text-align:center;
  margin:0px auto;
  left:0px;
  right:0px;
  display:block;
}
</style>	
        </div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<?php include("footer.php") ?>