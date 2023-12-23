<?php include("adminheader.php") ?>
<!-- ####################################################################################################### -->
<?php include_once("adminsidebar.php") ?>      <!-- ############### -->
      <div class="fl_right">
      <h2 class="title">Hon'ble Former Chief Justices</h2>
            <form action="" method="post" 
            name="f2" onsubmit="return val()" enctype="multipart/form-data">
            <table border="5" clclass="table" height="300">
            	<tr>
                	<th width="40%"><h3>Name Of Chief Justices</h3></th>
                	<th><input type="text" required="required" name="t1" placeholder="Name Of Chief Justices" class="text"></th>
                </tr>    
            	<tr>
                	<th><h3>from</h3></th>
                	<th><input type="date" required="required" name="t2" placeholder="DD/MM/YYYY" class="text"></th>
                </tr>
            	<tr>
                	<th><h3>to</h3></th>
                	<th><input type="date" required="required" class="text" name="t3" placeholder="DD/MM/YYYY"> </th>
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
			$c=$_POST['t3'];
			include_once("connect2.php");
			mysql_query("insert into justice2 values('','$a','$b','$c')");
			echo"<script> alert('Honble Former Chief Justices details inserted')</script>";
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