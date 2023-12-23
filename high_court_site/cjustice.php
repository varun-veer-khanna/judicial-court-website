<?php include("adminheader.php") ?>
<!-- ####################################################################################################### -->
<?php include_once("adminsidebar.php") ?>      <!-- ############### -->
      <div class="fl_right">
      <h2 class="title">ADD Hon'ble Former Judges</h2>
        	<form action="" method="post" name="f2" onsubmit="return bookval()" enctype="multipart/form-data">
            <table border="5" clclass="table" height="300">
            	<tr>
                	<th width="40%"><h3>Name Of Hon'ble Judges</h3></th>
                	<th><input type="text" required="required" name="t1" placeholder="Name Of Hon'ble Judges" class="text"></th>
                </tr>    
            	<tr>
                	<th><h3>from</h3></th>
                	<th><input type="date" required="required" name="t2" placeholder="DD/MM/YYYY" class="text"></th>
                </tr>
            	<tr>
                	<th><h3>to</h3></th>
                	<th><input type="date" required="required" class="text" name="t3" placeholder="DD/MM/YYYY"></th>
                </tr>
            	<tr>
                	<th><h3>Remarks</h3></th>
                	<th><textarea class="text" name="t4" required="required"></textarea></th>
                </tr>
                <tr>
                	<th colspan="2">
                    <input type="submit" class="text2" value="ADD NEWS"></th>
                </tr>
                </table>	
    	</form>
        <?php
		if(isset($_POST['t1'])){
			$a=$_POST['t1'];
			$b=$_POST['t2'];
			$c=$_POST['t3'];
			$d=$_POST['t4'];
			include_once("connect2.php");
			mysql_query("insert into cjustice values('','$a','$b','$c','$d')");
			echo"<script> alert('Honble Former Judges details inserted')</script>";
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