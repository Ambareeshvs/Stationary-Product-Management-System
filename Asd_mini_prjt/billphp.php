<?php
require 'dbconfig/config.php';
@$id = "";
@$name = "";
@$brand = "";
@$price = "";
@$qty = "";
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta http-equiv="x-ua-compatible" content="ie=edge">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
     <link href="css/styles.css" rel="stylesheet">
     <title>Product Details</title>
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
    .login-box hr{
      width: 20%;
      color: gray;
      background-color: gray;
      display: block;
    }
     </style>
   </head>
   <body>
     <div class="card-content">
       <div class="login-box">
         <h2>Product Details</h2>

          <?php
            if(isset($_POST['search']))
            {
              $id = $_POST['b_id'];
              if ($id=="")
              {
                echo "Invalid..!!";
              }
              else {
                $query = "select * from product where p_id = $id";
                $result = mysqli_query($connection,$query);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                @$id = $row['p_id'];
                @$name = $row['p_name'];
                @$brand = $row['p_brand'];
                @$price = $row['p_price'];
                @$qty = $row['p_qty'];
              }
            }
           ?>

     <form action="billphp.php" method="post">
       <input type="text" name="b_id" placeholder="Product ID" value="<?php echo $id; ?>">
       <button type="submit" name="search" class="btn btn-secondary">Search</button>
       <hr><br>
       <span></span>
       <input type="text" name="b_name" placeholder="Product Name" value="<?php echo $name; ?>">
       <input type="text" name="b_brand"  placeholder="Product Brand" value="<?php echo $brand; ?>">
       <input type="text" name="b_price" placeholder="Product Price" value="<?php echo $price; ?>">
       <input type="text" name="b_qty" placeholder="Product Quantity" value="<?php echo $qty; ?>">
       <br><br>
       <center>

       <button type="submit" name="clear_btn" id="btn_clear" class="btn btn-secondary">Clear</button>
       <div class="pbut">
       <a class="btn btn-secondary" href="./intro.html" type="submit">Back</a>
     </div>
     </center>
     </form>
   </div>
 </div>
 <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
 <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
 <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
   </body>
 </html>
