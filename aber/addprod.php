<?php
  session_start();


if(isset($_POST['submit'])){
    require "../connections/dbh.inc.php";
    $productname = $_POST['pname'];
    $manufacturer = $_POST['manu'];
    $ver = $_POST['ve'];
    $year = $_POST['year'];
    $price = $_POST['price'];
    $acol = $_POST['acol'];
    $description = $_POST['desc'];
    $image = "placeholder";
    $promotion = "No Promo";
    
   

    $insert = "INSERT INTO products_data(prod_name,manufacturer,version,prod_pic,year,price,promotion,available_colors,description) 
    VALUES ( '".$productname."', '".$manufacturer."','".$ver."','".$image."','".$year."','".$price."','".$promotion."','".$acol."','".$description."')";	
    $inserted = $con -> query($insert);

  if($inserted){
    $_SESSION['ProductName'] = $productname;
    header("Location: imgprod.php");
  }else{
    echo "v";
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
    <h2>Add Products</h2>
    <label>You can customise your products by adding new ones.</label>
    <form method="post" enctype="multipart/form-data">
      <div>
        <div>
            <input placeholder="Product Name" type="text" name="pname" >
        </div>
        <div>
            <input placeholder="Manufacturer" type="tel" name="manu" >
        </div>
        <div>
            <input placeholder="Version" type="text" name="ve">
        </div>
        <div>
            <input placeholder="Year" type="text" name="year" >
        </div>
        <div>
            <input placeholder="Price" type="text" name="price">
        </div>
        <div>
            <input placeholder="Available Colors" type="text" name="acol">
        </div>
        
        <div>
          <label>Description</label>
          <div>
            <textarea placeholder="Eg. Enter your Product Description here" name="desc"></textarea>
          </div>
        </div>
        <div>
          <button type="submit" name="submit">Next</button>
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
