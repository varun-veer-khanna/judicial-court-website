<?php include("adminheader.php") ?>
<!-- ####################################################################################################### -->
<?php include_once("adminsidebar.php") ?>      <!-- ############### -->
      <div class="fl_right">
      <h2 class="title">ADD NEWS</h2>
      <script>
	  	function val(){
			var a=document.f2.t1.value;
			var b=document.f2.t2.value;
			var c=document.f2.t3.value;
			flag=true;
			if(a=="" && b=="" && c==""){
				alert("full form is blank");
				flag=false;
			}
			else{
				if(a==""){
					alert("title is blank");
					flag=false;
				}
				if(b==""){
					alert("Place is blank");
					flag=false;
				}
				if(c==""){
					alert("News is blank");
					flag=false;
				}
			}
			return flag;	
		}
	  </script>
        	<form action="" 
            method="post" name="f2" 
            onsubmit="return val()" enctype="multipart/form-data">
            <table border="5" clclass="table" height="300">
            	<tr>
                	<th><h3>Title</h3></th>
                	<th><input type="text" name="t1" placeholder="Title" class="text"></th>
                </tr>    
            	<tr>
                	<th><h3>Place </h3></th>
                	<th><input type="text" name="t2" placeholder="Place" class="text"></th>
                </tr>
            	<tr>
                	<th><h3>News</h3></th>
                	<th><textarea class="text" name="t3"></textarea></th>
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
			date_default_timezone_set("asia/calcutta");
			$date=date("d/m/y");
			include_once("connect2.php");
			mysql_query("insert into news values('','$a','$b','$date','$c')");
			echo"<script> alert('News is inserted')</script>";
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