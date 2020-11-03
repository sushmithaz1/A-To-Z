<?php include("config2.php"); print_r($row);
include("config4.php"); print_r($row);
$result = mysqli_query($con,"SELECT * FROM  `shopify`");
?>

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

    <style>
    .rp{
      margin:0 10px;
      display:flex;
    }
    .coli{
      .rp:after{
        content:"";
        display:table;
        clear:both;
      }
    }
    </style>

  </head>
  <body>
      <div class=Main>
          <div>
            <div class="Header">
<div class="container">
    <nav>
      <div class="menu-icon">
<span class="fas fa-bars"></span></div>
<div class="logo">
CodingNepal</div>
<div class="nav-items">
<li><a href="Navigation.html">Home</a></li>
<li><a href="productss.html">All Products</a></li>
<li><a href="#categories">Featured Products</a></li>
<li><a href="#">Latest Products</a></li>
<li><a href="#offer">Exclusive Offers</a></li>
<li><a href="#testimonial">Testimonials</a></li>
<li><a href="#footer">Contact</a></li>
</div>
<div class="search-icon">
<span class="fas fa-search"></span></div>
<div class="cancel-icon">
<span class="fas fa-times"></span></div>

</nav>
<div class="row">
  <div class="col-2">
      <h1>Give Your workout 
        A New Style</h1>
      <p>Success isn't always about greatness.It's about 
        consistency.Consistent hard work gains success.
        Greatness will come.</p>
  </div>
  <div class="col-2">
    <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg">
  </div>
</div>
</div>
</div>
<img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg" class="menu-icon" onclick="menutoggle()">
 
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

<!-------------------featured categories----------------->
<div class="categories" id="categories">
  <div class="small-container">
    <div class="row">
      <div class="col-3">
        <a href="productDetails.html">
        <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg">
      </a>
      </div>
      <div class="col-3">
        <a href="productDetails.html">
        <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg">
      </a>
      </div>
      <div class="col-3">
        <a href="productDetails.html">
        <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg">
      </a>
      </div>
    </div>
  </div>
</div>
<!-----------------------featured products------------->
<div class="small-container">
  <h2>Featured Products
  <div class="title"></div>
</h2>
  <br>
  <br>
  <br>
 

  <?php
    while($row = mysqli_fetch_array($result)){
  ?>

  <div class="rp">
    <div class="coli">
      <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg" width="250px">
      <h4><?php echo $row['Name'];?></h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o" aria-hidden="true"></i>
      </div>
      <p><?php echo $row['Price'];?></p>
    </div>
  </div>

<?php } ?>


  <h2>Latest Products
    <div class="title"></div>
  </h2>
  <br><br><br>

  <?php
while($row1 = mysqli_fetch_array($result)){
  ?>


  <div class="rp">
    <div class="coli">
      <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg" width="250px">
      <h4><?php echo $row1['Name'];?></h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o" aria-hidden="true"></i>
      </div>
      <p><?php echo $row1['Price'];?></p>
    </div>

  </div>
 
<?php }
?>

</div>
</div>

<!---------offer------------->
<div class="offer" id="offer">
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg" class="offer-img">
        </div>

        <div class="col-2">
          <p>Exclusively available in ---</p>
          <h1 style="padding: 0px;">
            Smart brand 4
          </h1>
          <p>The mi smart band 4 feture a 39.9% larger(tham mi band 3)amoled colos full-touch display with adjustables</p><br>
          <a href="" class="btn">Buy now &#8594</a>
        </div>
      </div>
      </div>
    </div>


    <!-------------------testimonials----------->
    <div class="testimonial" id="testimonial">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <i class="fa fa-quote-left"></i>
            <p>
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam sequi id reprehenderit error est saepe
 repudiandae quidem quisquam? Exercitationem quasi illo obcaecati!

            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg">
            <h3>Sean parker</h3>
          </div>

          <div class="col-3">
            <i class="fa fa-quote-left"></i>
            <p>orem ipsum dolor sit amet consectetur, adipisicing elit. Magnam sequi id reprehenderit error est saepe
              repudiandae quidem quisquam? Exercitationem quasi illo obcaecati!
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg">
            <h3>Sean parker</h3>
          </div>

          <div class="col-3">
            <i class="fa fa-quote-left"></i>
            <p>orem ipsum dolor sit amet consectetur, adipisicing elit. Magnam sequi id reprehenderit error est saepe
              repudiandae quidem quisquam? Exercitationem quasi illo obcaecati!
  </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg">
            <h3>Sean parker</h3>
          </div>

        </div>
      </div>
    </div>
<!------------brands---------------->
<div class="brands">
  <div class="small-container">
    <div class="row">
      <div class="col-5">
          <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg">
      </div>
      <div class="col-5">
        <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg">
      </div>
      <div class="col-5">
        <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg">
      </div>
      <div class="col-5">
        <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg">
      </div>
      <div class="col-5">
        <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg">
      </div>
    </div>
  </div>
</div>


<!-----footer----->
<div class="footer" id="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col-1">
       
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
</body>
</html>
