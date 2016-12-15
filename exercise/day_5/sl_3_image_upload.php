<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
</head>
<body>
<h2>Image Upload<h2><br><hr>
<?php 
 if(isset($_POST['submit'])){
    $name       = $_FILES['image']['name'];  
    $temp_name  = $_FILES['image']['tmp_name'];  
    if(isset($name)){
        if(!empty($name)){        
            if(move_uploaded_file($temp_name, "images/".$name)){
                echo 'File uploaded successfully';
            }
        }       
    }  else {
        echo 'You should select a file to upload !!';
    }
}
?>
<form method="POST" action="sl_3_image_upload.php" enctype="multipart/form-data">
<input type="file" name="image">
<input type="submit" name="submit">
</form>


</body>
</html>