
<?php

$select = "select * from b_cat;";
$cat_select = mysqli_query($conn,$select);

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
			
			$path = "../BookCover/".$newname;
			$b_path = "../Books_PDF/".$b_newname;
				
			
			
			
			
			$upl = move_uploaded_file($cover['tmp_name'],$path);
			$b_upl = move_uploaded_file($pdf['tmp_name'],$b_path);
			
			if($upl && $b_upl)
			{
				$i_query= "INSERT INTO `books`(`title`, `description`, `img`, `b_pdf`, `author`, `b_cat_id`) VALUES ('".$name."','".$b_description."','".$path."','".$b_path."','".$b_author."',".$id.") ";
				$result = mysqli_query($conn,$i_query);
				$count = mysqli_affected_rows($conn);
				
				if($count == 1)
				{
					echo '<script>alert("Record inserted"); </script>';
					header('Location: AdminIndex.php?p_id=2');
					exit;
				}
					
				else
				{
					echo '<script>alert("not inserted"); </script>';
						
}
}

}
}



$dataa = "select * from books;";
$content_result = mysqli_query($conn,$dataa);

?>




<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h1>Books</h1>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Insert new book</h3>
                    
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
                          <button type="submit" name="submit" class="btn btn-success">Insert New Book</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

                  
                </div>


              </div>
              
              
              
              
              
              <div>
            <table width="900px" border="3">
                <thead>
                    <tr align="center">
                        <td>Books ID</td>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Cover</td>
                        <td>PDF File</td>
                        <td>Author</td>
                        <td>Catagory ID</td>                        
                        <td>Edit</td>
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
                         <td><?php echo $tbl_row[2];?></td>
                          <td><img src="<?php echo $tbl_row[3];?>" height="100px" width="100px" alt="Cover image" /></td>
                           <td> <embed src="<?php echo $tbl_row[4];?>" width="100px" height="100px" /></td>
                            <td><?php echo $tbl_row[5];?></td>
                         <td><?php echo $tbl_row[6];?></td>                              
                        <td><a href="../Admin/book/modify.php?edit_id=<?php echo $tbl_row[0]; ?>" >Edit</a></td>
                        <td><a href="../Admin/book/modify.php?del_id=<?php echo $tbl_row[0]; ?>" >Delete</a></td>
                    </tr>
<?php
					}
?>
                </tbody>>
            </table>
        </div>