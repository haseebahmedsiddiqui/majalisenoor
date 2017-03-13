<!DOCTYPE html>
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

include('../../config.php');

if(isset($_GET['edit_id']))
{
	
	?>
    
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h1>Book Category</h1>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Update Category</h3>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="" method="get" >
						<input type="hidden" name="edit_id" value="<?php echo $_GET['edit_id'];?>"/>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Book_cat">Category Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Book_cat" name="cat_name" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                     
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button type="submit" name="submit" class="btn btn-success" value="submit">Update</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

                  
                </div>
                
    </div>
    
    <?php
	
	if(isset($_GET['submit']))
	{
		$modify_query = "update book_catagory set cat_name = '".$_GET['cat_name']."' where cat_id='".$_GET['edit_id']."';";
		
		$result = mysqli_query($conn,$modify_query);
	
		$count = mysqli_affected_rows($conn);	
							
		if($count==1)
		{
			echo '<script>alert("Record Updation Successfull");</script>';
			echo '<script>  window.location.assign("../AdminIndex.php?p_id=1");</script>';
		}
		else
		{
			echo '<script>alert("Record Updation Failed");</script>';
			echo '<script>  window.location.assign("../AdminIndex.php?p_id=1");</script>';	
		}
		
	}	
	
	
	
}
else if(isset($_GET['del_id']))
{
	
	$modify_query = "delete from book_catagory where cat_id = '".$_GET['del_id']."';";
	
	$result = mysqli_query($conn,$modify_query);
	
	$count = mysqli_affected_rows($conn);	
						
	if($count==1)
	{
		echo '<script>alert("Record Deleted Successfuly");</script>';
		echo '<script>  window.location.assign("../AdminIndex.php?p_id=1");</script>';
	}
	else
	{
		echo '<script>alert("Record Deletion Failed");</script>';
		echo '<script>  window.location.assign("../AdminIndex.php?p_id=1");</script>';	
	}
}

?>

</body>
</html>