<?php
		 
		  mysql_connect("localhost" , "root" , "") or die("connect failed" .mysql_error());	
          mysql_select_db("android") or die (mysql_error());

?>
<form action="upload.php" method="post" enctype="multipart/form-data">

  <input name="a[]" type="file"  multiple/>
  <input type="submit" value="Send files" />
  
</form>
<?php


foreach($_FILES["a"]["tmp_name"] as $key => $tmp_name){

$temp = $_FILES["a"]["tmp_name"][$key];
$name = $_FILES["a"]["name"][$key];

$target = "uploads/".$name;
move_uploaded_file($temp,$target);


$q = "INSERT  INTO  languages(images) VALUES ('$target')" ;
			if($r = mysql_query($q)  or die("connect failed" .mysql_error())){
			echo "uploaded";
		 }

	}
	
?>