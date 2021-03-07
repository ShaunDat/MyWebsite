<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/33a12d68d3.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="../Demowebsite(1)/Vendors/css/grid.css">
    <style>
        .menubar{
    background: #4407E9;
    color: #FFFFFF;
    width: 850px;
    height: 30px;
}
.menubar1{
    background: #676767;
    color: aliceblue;
    width: 150px;
    height: 150px;
    list-style-type: none;
    
}
#horizontal li{
    display: inline;
    list-style: none;
    padding: 10px;
    width: 300px;
    height: 300px;
    list-style-type: none;	
}
#vertical li{
    display: inline;
    list-style: none;
    padding: 10px;
    list-style-type:none;	
}
*{width: 800px}
#search{
    width: 300px;
    float: left;
}
#submit{
    width:100px ;
    float: left;
float: left;
}


    </style>
</head>

<body>
    <header>
        <ul class="main-nav"></ul>
        <a href="/Index.html.html"><i class="fas fa-basketball-ball" style="float: left; font-size: 50px"></i></a>
        <input type="search" name="" id="search" placeholder="tìm kiếm">
        <a href="#"><i class="fas fa-search" id="submit" style="float: left;font-size: 50px"> </i></a>
        <a href="#"><i class="fas fa-user-plus" style="float: right;font-size: 50px"></i></a>
        <a href="#"><i class="fas fa-user" style="float: right;font-size: 50px"></i></a>
        <a href="#"><i class="fas fa-shopping-bag " style="float: right;font-size: 50px"></i></a>
        </ul>
        <div class="clearfix"></div>
        <div class="menubar">
            <ul id="horizontal">
                <li> <a href="/Index.html.html">Home</a></li>
                <li> <a href="/Admin/product/view_product.html">All Products</a> </li>
                <li> <a href="/Admin/relation/Myaccount.html">My account </a></li>
                <li> <a href="/Admin/product/seting_product.html"> Shopping Cart</a></li>
                <li><a href="#">Contact </a></li>
                <li>Admin Area </li>
                <li>Logou </li>
            </ul>
        </div>
    </header>
    <setion class="about-section">
        <div>
            <ul id="vertacal">
                <li>Categori</li>
                <ul class="menubar1">
                    <li>Laptops</li>
                    <li>Mobiles</li>
                    <li>Apple</li>
                </ul>
                <li>Brands</li>
                <ul class="menubar1">
                    <li>HP</li>
                    <li>Dell</li>
                    <li>Samsung</li>
                    <li>Sony</li>
                    <li>Toshiba</li>
                    <li>Lenovo</li>
                    <li>Apple</li>
                </ul>
            </ul>
        </div>
        <div class="section group">
            <div class="col span_1_of_3">
                This is column 1
            </div>
            <div class="col span_1_of_3">
                This is column 2
            </div>
            <div class="col span_1_of_3">
                This is column 3
            </div>
        </div>
       <?php $connect = mysqli_connect('localhost','root','','mysql_dat');
     if (!$connect){
         echo "ket noi that bai";
     }else {
         echo "ket noi thanh cong";
     }  $spl = " select * from product";
     $run_pro = mysqli_query($connect,$spl);
     while($row_pro = mysqli_fetch_array($run_pro)){
         $productID = $row_pro ['ProductID'];
         $productName = $row_pro ['ProductName'];
         $productPrice = $row_pro['ProductPrice'];
         $productDes = $row_pro['ProductDes'];
         $product_Images = $row_pro['Product_images'];
         $CategoriID = $row_pro['CategoriID'];
         echo"
         <div class='single_product'>
        <h3>$productName</h3>
         <img src='$product_Images' alt='hinhanh' width='50' height= '100' />
        <p><b>Price : $productPrice</b></p>
        <a href=''> Detallis</a>
        <a href=''>
            <button style= 'float :right' > Add to cart</button>
        </a>
    </div>
         ";
     }
     ?>
    <!-- // <div class="single_product">
    //     <h3>$product_name</h3>
    //     <img src="$product_images" alt="hinhanh">
    //     <p><b>Price : $product_Price</b></p>
    //     <a href="#">
    //         <button style= 'floattight' > Add to cart</button>
    //     </a>
    // </div> -->
        <!-- <p>
            <script> document.write(new Date().toLocaleDateString()); </script>
            </p> -->
        
    </setion>
</body>

</html>