<?php
    session_start();
    if(isset($_SESSION['ProductName'])){
        if(isset($_POST['submit'])){
            require "../connections/dbh.inc.php";
            $image = strtolower($_FILES['fileToUpload']['name']); 
            
            $search = "UPDATE  products_data  SET prod_pic = '".$image."' WHERE prod_name = '".$session."'";
            $searched = $con -> query($search);
            if($searched){
                header("Location: addedprod.php");
            }else{

            }


        }else{
            header("Location: addprod.php");
        }
    }

?>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/dark.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Add Product ♦ Afrolago Rwanda</title>

</head>

<body>
  <div class="qfc-container">
      <div class="back">
          <a href="dashboard.php"><i class="fa fa-arrow-left"></i></a>
      </div>
    <h2>Add Image</h2>
    <label>You can customise your products by adding new ones.</label>
    <form method="post" enctype="multipart/form-data" >
      <div>
        <div>
            <input type="file" name="fileToUpload" id="File To Upload">
        </div>       
        <div>
          <button type="submit" name="submit">Save Product</button>
        </div>
      </div>
    </form>
  </div>
</body>
<div style="padding-bottom:15px; font-family: 'Roboto';color:fefefe;" align="center">
  &copy; All Right Reserved. Powered by <a href="#"> Lunar Tights Group </a>
<div>
<style>
  a {
    color : #c2c2c2;
    text-decoration: none;
  }
</style>
</html>
