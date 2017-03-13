<?php
include('../config.php');

if(isset($_POST['submit']))
{
	$cat_name = $_POST['cat_name'];
							
	$Insert_query = "insert into b_cat (cat_name) values ('".$cat_name."');";
	$result=mysqli_query($conn,$Insert_query);
	$count = mysqli_affected_rows($conn);
							
	if($count==1)
	{
		echo '<script>alert("New Catagory Inserted")</script>';
		header('Location: AdminIndex.php?p_id=1');
		exit;
	}
	else
	{
		echo '<script>alert("Record Insertion Failed")</script>';	
	}
	
}


$read_data = "select * from b_cat;";
$content_result = mysqli_query($conn,$read_data);

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
                    <h3>Create new category</h3>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="" method="post" >
						<input type="hidden" name="p_id" value="1"/>
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
                          <button type="button" class="btn btn-primary">Cancel</button>
                          <button type="submit" name="submit" value="submit" class="btn btn-success">Insert</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

                  
                </div>

		
		<div>
            <table width="500px" border="3">
                <thead>
                    <tr align="center">
                        <td>Id</td>
                        <td>Category Name</td>
                        <td>Modify</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <tbody>
<?php 
					while($tbl_row = mysqli_fetch_array($content_result))
					{
?>
                    <tr align="center">
                        <td><?php echo $tbl_row[0];?></td>
                        <td><?php echo $tbl_row[1];?></td>
                        <td><a href="../Admin/catagory/modify.php?edit_id=<?php echo $tbl_row[0]; ?>" >Edit</a></td>
                        <td><a href="../Admin/catagory/modify.php?del_id=<?php echo $tbl_row[0]; ?>" >Delete</a></td>
                    </tr>
<?php
					}
?>
                </tbody>>
            </table>
        </div>


</div>
