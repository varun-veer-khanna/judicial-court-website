<?php include("adminheader.php") ?>
<!-- ####################################################################################################### -->
<?php include_once("adminsidebar.php") ?>      <!-- ############### -->
      <div class="fl_right">
      <h2 class="title">Hon'ble Judges</h2>
      <script>
	  	function val(){
			var a=document.f2.t1.value;
			var b=document.f2.t2.value;
			flag=true;
			if(a==""){
				alert("Hon'ble Judges is blank");
				flag=false;
			}
			if(b==""){
				alert("Court Room is blank");
				flag=false;
			}
				
			return flag;	
		}
		</script>
        	<form action="" method="post" 
            name="f2" onsubmit="return val()" enctype="multipart/form-data">
            <table border="5" clclass="table" height="300">
            	<tr>
                	<th width="40%"><h3>Name Of Hon'ble Judges</h3></th>
                	<th><input type="text" name="t1" placeholder="Hon'ble Judges" class="text"></th>
                </tr>    
            	<tr>
                	<th><h3>Court Room</h3></th>
                	<th><input type="text" name="t2" placeholder="Court Room" class="text"></th>
                </tr>
            	<tr>
                	<th><h3>Assests</h3></th>
                	<th><input type="file" class="text" name="t3" required="required"></th>
                </tr>
            	<tr>
                	<th colspan="2">
                    <input type="submit" class="text2" value="ADD"></th>
                </tr>
                </table>	
    	</form>
        <?php
		if(isset($_POST['t1'])){
			$a=$_POST['t1'];
			$b=$_POST['t2'];
			$c=$_FILES['t3']['name'];
			$c1=$_FILES['t3']['tmp_name'];
			$c=str_replace(" ","_",$c);
			if(file_exists("judges")){}
			else{ mkdir("judges"); }
			move_uploaded_file($c1,"judges/".$c);
			$path="judges/".$c;
			include_once("connect2.php");
			mysql_query("insert into justice values('','$a','$b','$path')");
			echo"<script> alert('Chief Justice/Judges details inserted')</script>";
		}
		?>
<style>
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