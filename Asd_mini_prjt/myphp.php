<?php
require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Page</title>
    <style media="screen">
      .login-box{
          background: linear-gradient(#141e30, #243b55);
          border-radius: 1px;
          padding: 40px;
          box-sizing: border-box;
          width: 5px;
          box-shadow: 0 5px 10px rgba(0,0,0,.6);
          margin-top: 0px;
          width: 100%;
          margin: 8px 0;

        }
      .login-box input {
          width: 100%;
          padding: 10px 0;
          font-size: 16px;
          color: #fff;
          margin-bottom: 30px;
          border: none;
          border-bottom: 1px solid #fff;
          outline: none;
          background: transparent;
        }
    .login-box h2{
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
        }
    .login-box button{
        margin: 0 0 30px;
        padding: 0;

        text-align: center;
        width: 15%;
        height: 40px;
        font-size: 20px;
            }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
    <div class="card-content">
      <div class="login-box">
        <h2>Product Insertion</h2>
          <form class="" action="myphp.php" method="post">
              <input type="text" name="p_id" placeholder="Enter the product ID">
              <input type="text" name="p_name" placeholder="Enter the product Name">
              <input type="text" name="p_brand" placeholder="Enter the product Brand">
              <input type="text" name="p_qty" placeholder="Enter the product quantity">
              <input type="text" name="p_price" placeholder="Enter the product price">
              <br><br>
<center>
                  <button name="insert_btn" id="btn_insert" class="btn btn-secondary">Insert</button>
                  <div class="pbut">
                  <a class="btn btn-secondary" href="./intro.html" type="submit">Back</a>
                </div>
              </center>
            </form>
          </div>
        </div>
        
    <?php
        if(isset($_POST['insert_btn'])){
          //echo "<script type = "text/javascript">Alert("Insert Clicked")</script>"
          $p_id = $_POST['p_id'];
          $p_name = $_POST['p_name'];
          $p_brand = $_POST['p_brand'];
          $p_qty = $_POST['p_qty'];
          $p_price = $_POST['p_price'];

          $sql_query = "insert into product values($p_id,'$p_name','$p_brand',$p_qty,$p_price)";
          $query_run = mysqli_query($connection,$sql_query);
        }
    ?>

    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
