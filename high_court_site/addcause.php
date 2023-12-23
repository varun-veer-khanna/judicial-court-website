<?php include("adminheader.php") ?>
<!-- ####################################################################################################### -->
<?php include_once("adminsidebar.php") ?>      <!-- ############### -->
      <div class="fl_right">
      <h2 class="title">ADD CAUSELIST</h2>
        	<form action="" method="post" 
            name="f2" onsubmit="return bookval()" 
            enctype="multipart/form-data">
            <table border="5" clclass="table" height="700">
            	<tr>
                	<th>DATE</th>
                	<th><input type="text" required="required" name="t12" placeholder="DATE" class="text"></th>
                </tr>    
                                
                <tr>
                	<th>LIST TYPE</th>
                	<th><select name='t9' class="text" required="required">
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
                    <option value ='Miscellaneous'>Miscellaneous</option>
                    </select></th>
                </tr>    
            	
                  
                
                <tr>
                	<th>Upload PDF</th>
                    <th><input type="file" required="required" name="t15" class="text"/></th>
                    </tr>  
                <tr>
                	<th>Main/Supplementary</th>
                	<th>
					<select name='t19' required="required" class="text" >
                    <option value =''>-CHOOSE-</option>
                    <option value ="Main">Main</option>
                    <option value ="Supplementary">Supplementary</option>
                    </select>
                    </th>
                </tr>  
                
                <tr>
                	<th colspan="2">
                    <input type="submit" class="text2" value="ADD CAUSELIST"></th>
                </tr>
            
                </table>	
    	</form>
        <?php
		if(isset($_POST['t12'])){
		
			
			
			
			$i=$_POST['t9'];
			$l=$_POST['t12'];
			
			
			
			$main1=$_POST['t19'];
	
			
			$name=$_FILES['t15']['name'];
			$location=$_FILES['t15']['tmp_name'];
			$name=str_replace(" ","_",$name);
			if(file_exists("causefile")){}
			else{ mkdir("causefile"); }
			move_uploaded_file($location,"causefile/".$name);
			$path="causefile/".$name;
			include_once("connect2.php");
			mysql_query("insert into addcause values('$i','$path','$main1',
			'$l')");
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