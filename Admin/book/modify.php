<!DOCTYPE html>


<?php
include('../../config.php');
$select = "select * from b_cat;";
$cat_select = mysqli_query($conn,$select);
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php



if(isset($_GET['edit_id']))
{
	
	?>
    
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h1 align="center">Book Category</h1>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3 align="center">Update book</h3>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   <form id="demo-form2"  method="post" name="submit" data-parsley-validate class="form-horizontal form-label-left" novalidate action="" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Book_title">Book Title<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Book_title" name="b_title" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Book_Author">Book Author<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="E_mail" name="b_author" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                                     
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Book_title">Book Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Book_title" name="b_Descp" required class="form-control col-md-7 col-xs-12" style="height:300px;">
                        </div>
                      </div>
                      
                      
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Book_title">Book Cover <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="b_cover" required >
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Book_title">Book PDF File: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="b_pdf" required >
                        </div>
                      </div>
                      
                      
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Book Category <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="cat_id" class="dropdown-toggle">
                         <option value="1">Select Catogary</option>
                          <?php
                         
						 while($row = mysqli_fetch_array($cat_select))
						 {
						  ?>
                          
                          	
                          	<option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                          <?php
						 }
						  ?>
                          </select>
                        </div>
                      </div>
                         
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" name="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>

                    </form>         </div>
              </div>
            </div>
                  
                </div>
                
    </div>
    
    <?php
	
	
	
	if(isset($_POST['submit']))
{
	$name =$_POST['b_title'];

	$b_author =$_POST['b_author'];
	$b_description=$_POST['b_Descp'];	
	$cover=$_FILES['b_cover'];
	$pdf=$_FILES['b_pdf'];
	$id=$_POST['cat_id']; 

	

		
$img=array("jpg","jpeg","png","gif");
$b_pdf = array("pdf");


	$ext=strtolower(end(explode(".",$cover['name'])));
	$pdf_ext=strtolower(end(explode(".",$pdf['name'])));
	
		if(in_array($ext,$img) && in_array($pdf_ext,$b_pdf))
		{
			$newname= rand(123456789,999999999)."_".rand(1234567,9999999)."_".rand(1234,9999)."_n.".$ext;
			$b_newname= rand(123456789,999999999)."_".rand(1234567,9999999)."_".rand(1234,9999)."_n.".$pdf_ext;
			
			$path = "../../BookCover/".$newname;
			$b_path = "../../Books_PDF/".$b_newname;
				
			
			
			
			
			$upl = move_uploaded_file($cover['tmp_name'],$path);
			$b_upl = move_uploaded_file($pdf['tmp_name'],$b_path);
			
			if($upl && $b_upl)
			{
				$i_query= "update `books` set `title` ='".$name."' , `description` = '".$b_description."', `img`='".$path."', `b_pdf` ='".$b_path."', `author`='".$b_author."', `b_cat_id`=".$id." where id = ".$_GET['edit_id']." ";
				$result = mysqli_query($conn,$i_query);
				$count = mysqli_affected_rows($conn);
				
				if($count == 1)
				{
					echo '<script>alert("Record update"); </script>';
					header('Location: AdminIndex.php?p_id=2');
					exit;
				}
					
				else
				{
					echo '<script>alert("not Updated"); </script>';
						
}
}

}
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}



































else if(isset($_GET['del_id']))
{
	
	$modify_query = "delete from books where id = '".$_GET['del_id']."';";
	
	$result = mysqli_query($conn,$modify_query);
	
	$count = mysqli_affected_rows($conn);	
						
	if($count==1)
	{
		echo '<script>alert("Record Deleted Successfuly");</script>';
		echo '<script>  window.location.assign("../AdminIndex.php?p_id=2");</script>';
	}
	else
	{
		echo '<script>alert("Record Deletion Failed");</script>';
		echo '<script>  window.location.assign("../AdminIndex.php?p_id=2");</script>';	
	}
}

?>

</body>
</html>