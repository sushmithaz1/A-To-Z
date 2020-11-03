
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Responsive Navbar with Search Box | CodingNepal</title> -->
    <link rel="stylesheet" href="Nav.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
      <div class=Main>
          <div>
           
<div class="container">
    <nav>
      <div class="menu-icon">
<span class="fas fa-bars"></span></div>
<div class="logo">
CodingNepal</div>
<div class="nav-items">
<li><a href="peoDet.php">Home</a></li>
<li><a href="produ.php">Featured Products</a></li>
<li><a href="#foter">Contact</a></li>
<li><a href="#footer">Feedback</a></li>
</div>
<div class="search-icon">
<span class="fas fa-search"></span></div>
<div class="cancel-icon">
<span class="fas fa-times"></span></div>

</nav>

</div>

<img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg" class="menu-icon" onclick="menutoggle()">

<!-------------single product details--------->
<div class="small-container single-product">

    <div class="row">
        <div class="col-2">
            <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg" width="100% " id="productImg">
<div class="small-img-row">
    <div class="small-img-col">
        <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg" width="100%" class=small-img>
    </div>
    <div class="small-img-col">
        <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg" width="100%" class=small-img >
    </div> 
    <div class="small-img-col">
        <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg" width="100%" class=small-img>
    </div> 
    <div class="small-img-col">
        <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg" width="100%" class=small-img>
    </div> 
</div>


        </div>
        <div class="col-2 det">
          <form method="post" action="cart.php">
            <p>Home / T-Shirt</p>
            <h1 id="DetName" name="DetName">Red Printed T-shirt by HRX</h1>
            <h4 id="Price" name="Price">$50.00</h4>
            <select id="Size" name="Size">
                <option>Select size</option>
                <option value="XXL">XXL</option>
                <option value="XL">XL</option>
                <option value="Large">Large</option>
                <option value="Medium">Medium</option>
                <option value="small">Small</option>
            </select>
            <input type="number" name="Que" value="1">
            <button>Add To Cart</button>
            <h3>Product Details <i class="fa fa-indent"></i></i> </h3><br>
            <p id="Desc" name="Desc">Give your summer wardrobe a style upgrade with the HRX
                men's Avtive T-shirt.Team it with a pair of shorts for your
                morning workout or a denims for an evening out with the guys.
            </p>
        </form>
        </div>
    </div>
</div>

<!---------title----------->
<div class="small-container">
    <div class="row row-2">
        <h2>Related Products</h2>
        <p>View More</p>
    </div>
</div>

<!--------products----------->
<div class="small-container">
<div class="row">
    <div class="col-4">
      <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg" width="250px">
      <h4>Red printed T-shirt</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o" aria-hidden="true"></i>
      </div>
      <p>$50.0</p>
    </div>

    <div class="col-4">
      <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg" width="250px">
      <h4>Red printed T-shirt</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o" aria-hidden="true"></i>
      </div>
      <p>$50.0</p>
    </div>

    <div class="col-4">
      <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg" width="250px">
      <h4>Red printed T-shirt</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o" aria-hidden="true"></i>
      </div>
      <p>$50.0</p>
    </div>

    <div class="col-4">
      <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg" width="250px">
      <h4>Red printed T-shirt</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o" aria-hidden="true"></i>
      </div>
      <p>$50.0</p>
    </div>

  
  </div>
</div>

 
<script>
    const menuBtn = document.querySelector(".menu-icon span");
    const searchBtn = document.querySelector(".search-icon");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const form = document.querySelector("form");
    menuBtn.onclick = ()=>{
      items.classList.add("active");
      menuBtn.classList.add("hide");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
    cancelBtn.onclick = ()=>{
      items.classList.remove("active");
      menuBtn.classList.remove("hide");
      searchBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      form.classList.remove("active");
      cancelBtn.style.color = "#ff3d00";
    }
    searchBtn.onclick = ()=>{
      form.classList.add("active");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
  </script>

</div>

<!-----footer----->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col-1">
        <h3>Download Our App</h3>
        <p>Download App for Android and ios mobile phone</p>
        <div class="app-logo">
          <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg" alt="">
          <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg"s alt="">
        </div>
      </div>

      <div class="footer-col-2">
        <!----logo---->
      <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg">
        <p>Our purpose is to Sustainably make the pleasure 
          and benefits of sports accessible to the many</p>
      </div>
<br>
      <div class="footer-col-3">
        <h3>Useful links</h3>
        <ul>
          <li>
            Coupons
          </li>
          <li>
            Blog Post
          </li>
          <li>
            Return Policy
          </li>
          <li>
            Join Affiliate
          </li>
        </ul>
      </div>

      <div class="footer-col-4">
        <h3>Follow Us</h3>
        <ul>
          <li>
            Facebook
          </li>
          <li>
            Instagram
          </li>
          <li>
            LinkedIn
          </li>
          <li>
            Youtube
          </li>
        </ul>
      </div>

    </div>

    <hr>
    <p class="copyright">copyright 2020-Name of app</p>
  </div>
</div>


<!-------------js for toglle menu------------->
<script>
  var MneuItems=document.getElementById("nav-Items");
  MenuItems.style.maxHeight="0px";

  function menutoggle(){
      if(MenuItems.style.maxHeight=="0px"){
        MenuItems.style.maxHeight="200px";
      }
      else{
        MenuItems.style.maxHeight="0px";
      }
  }
</script>
 <!-------------js for toglle menu------------->

<script>
    var productImg = document.getElementById("productImg");
    var smallImg=document.getElementById("small-ig");
    smallImg[0].onclick=function(){
        ProductImg.src=SmallImg[0].src;
    }
    smallImg[1].onclick=function(){
        ProductImg.src=SmallImg[1].src;
    }
    smallImg[2].onclick=function(){
        ProductImg.src=SmallImg[2].src;
    }
    smallImg[3].onclick=function(){
        ProductImg.src=SmallImg[3].src;
    }
  </script>

<script>
 
var queryString = decodeURIComponent(window.location.search);
queryString = queryString.substring(1);
var queries = queryString.split("&");

 document.getElementById('DetName').innerHTML=queries[0];
 document.getElementById('Price').innerHTML=queries[1];
 document.getElementById('Desc').innerHTML=queries[2];

 
</script> 

         <?php
          $Name=$_GET['DetName'];
          $Price=$_GET['Price'];
          $Size=$_GET['Size'];
          $Quantity=$_GET['Que'];
          $Description=$_GET['Desc'];
          ?>
         
        <script>
        function tar(){
            alert(size,quantity,description);

           $hostname = "localhost";//'localhost';
           $database = "shoppingapp";//'config';
           $username ="root";//'root';
           $password = "";//'password';
           
           $con=mysqli_connect($hostname,$username,$password,$database);
           if($con===FALSE){
               die("Error:couldnt connect" . mysqli_connect_error());
           }

            $sql="insert into shopify values('8','$Name','$Price','$Description')";
            if(mysqli_query($con,$sql)){         
                alert("sucecss");
            }
            else{
              alert("not success");
            }
          ?>
            window.location.href ="produ.php";
        }
        </script>
</body>
</html>

