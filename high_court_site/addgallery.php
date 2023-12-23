<?php include("adminheader.php") ?>
<!-- ####################################################################################################### -->
<?php include_once("adminsidebar.php") ?>      <!-- ############### -->
      <div class="fl_right">
      <h2 class="title">Latest Gallery Image's</h2>
        	<script>
	  	function val(){
			var a=document.f2.t1.value;
			flag=true;
			if(a==""){
				alert("Gallery Name is blank");
				flag=false;
			}
				
			return flag;	
		}
	  </script>
      <form action="image_insert.php" method="post" 
      name="f2" onsubmit="return val()" enctype="multipart/form-data">
            <table border="5" clclass="table" height="300">
            	<tr>
                	<th><h3>Name of Gallery</h3></th>
                	<th><input type="text" name="t1" 
                    placeholder="Gallery Name" class="text"></th>
                </tr>    
            	<tr>
                	<th><h3>Gallery Image</h3></th>
                	<th>
                    <input type="file" required="required" class="text" name="t2"></th>
                </tr>
            	<tr>
                	<th><h3>Insert Image's</h3></th>
                	<th><input type="file" class="text" required="required" name="t3[]" multiple="multiple"></th>
                </tr>
                <tr>
                	<th colspan="2">
                    <input type="submit" class="text2" value="ADD GALLERY">
                </tr>
                </table>	
    	</form>
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