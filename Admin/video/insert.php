
<?php

$select = "select * from book_catagory;";
$cat_select = mysqli_query($conn,$select);

if(isset($_POST['submit']))
{
	$name =$_POST['b_title'];
	$b_price =$_POST['Book_Price'];
	$b_author =$_POST['b_author'];
	$b_description=$_POST['b_Descp'];	
	$cover=$_FILES['b_cover'];
	$id=$_POST['cat_id']; 

	

		
$img=array("jpg","jpeg","png","gif");

	$ext=strtolower(end(explode(".",$cover['name'])));
	
		if(in_array($ext,$img))
		{
			$newname= rand(123456789,999999999)."_".rand(1234567,9999999)."_".rand(1234,9999)."_n.".$ext;
			
			$path = "../BookCover/".$newname;
				
			
			if(!file_exists($path))
			{
				mkdir("../BookCover/");
				closedir();
			}
			
			
			$upl = move_uploaded_file($cover['tmp_name'],$path);
			
			if($upl)
			{
			
$result = mysqli_query($conn,"Call Book_Insertion('$name','$b_author','$b_price','$b_description','$path','$id');");
				$count = mysqli_affected_rows($conn);
				
				if($count == 1)
				{
					echo '<script>alert("Record inserted"); </script>';
				}
					
				else
				{
					echo '<script>alert("not inserted"); </script>';
						
}
}

}
}



$dataa = "select * from book;";
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
                        <label for="Book_Price" class="control-label col-md-3 col-sm-3 col-xs-12">Book Price</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Book_Price" class="form-control col-md-7 col-xs-12" type="text" name="Book_Price" > 
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
            <table width="500px" border="3">
                <thead>
                    <tr align="center">
                        <td>Title</td>
                        <td>Author</td>
                        <td>Price</td>
                        <td>Description</td>
                        <td>Cover</td>
                        <td>Catagory ID</td>
                    </tr>
                </thead>
                <tbody>
<?php 
					while($tbl_row = mysqli_fetch_array($dataa))
					{
?>
                    <tr align="center">
                        <td><?php echo $tbl_row[0];?></td>
                        <td><?php echo $tbl_row[1];?></td>
                         <td><?php echo $tbl_row[2];?></td>
                          <td><?php echo $tbl_row[3];?></td>
                           <td><?php echo $tbl_row[4];?></td>
                            <td><?php echo $tbl_row[5];?></td>
                             <td><?php echo $tbl_row[6];?></td>
                              <td>Edit</td>
                              <td>Del</td>
                            
                        <td><a href="../Admin/book/modify.php?edit_id=<?php echo $tbl_row[0]; ?>" >Edit</a></td>
                        <td><a href="../Admin/book/modify.php?del_id=<?php echo $tbl_row[0]; ?>" >Delete</a></td>
                    </tr>
<?php
					}
?>
                </tbody>>
            </table>
        </div>