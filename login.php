<?php 
include 'loginscript.php';
include "header.php" ;
?>
<br><br><br>

<div class="panel panel-primary" style="width:40%;margin:0 auto;box-shadow: 10px 10px 5px grey;">
  <div class="panel-heading" style="text-align:center;background-color: #232f3e;" ><h2>Admin Login</h2></div>
  <div class="panel-body">
  <br>
<div class="container" style="width:50%;" >

    
               <form action ="" method = "post">

    <div class="form-group" >
      <label for="usr">Name:</label>
   
	   <input type="text" class="form-control" id="usr" name="username">

    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password">
    </div>
	
	
 	<tr>
      <td>&nbsp;</td>
      <td><input class="btn btn-primary" name="submit" type="submit" onclick="return validate();" value="Login" class="button1" style="background-color:#232f3e;" ></td>
    </tr>
  </form>

<br><br>


</div>
</div>
<div class="panel-footer"></div>
</div>
<script type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>


<br><br><br>

<?php include "footer.php" ?>