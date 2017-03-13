<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" enctype="multipart/form-data">
 <label for="pic"></label>
      <input type="file" name="pic" id="pic"  />
      <input type="submit" name="btn2" id="btn2" value="Add Book">
</form>
<?php
//include('config.php');
if(isset($_POST['btn2'])){
$img=array("jpg","jpeg","png","gif");

	$ext=strtolower(end(explode(".",$_FILES['pic']['name'])));
	
		if(in_array($ext,$img))
		{
			$newname=rand(123456789,999999999)."_".rand(1234567,9999999)."_".rand(1234,9999)."_n.".$ext;
			
			$path="BookStore/BookCover/".$newname;
			$upl=move_uploaded_file($_FILES['pic']['tmp_name'],$path);	
			
			echo $path;
		}
		
	/*	if($upl){
			$sql = mysql_query("Update  student  set Std_img = '$path' where std_id = 2");
			echo $sql;
			if($sql){
				echo "inserted";
				} 
				
				else{
					echo mysql_error();} 
			
			}*/
		

}
?>
 
      
</body>
</html>