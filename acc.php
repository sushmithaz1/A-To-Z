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
<li><a href="#">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Blogs</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Feedback</a></li>v>
<div class="search-icon">
<span class="fas fa-search"></span></div>
<div class="cancel-icon">
<span class="fas fa-times"></span></div>

</nav>

</div>

<img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg" class="menu-icon" onclick="menutoggle()">

<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                    </div>
                    <form id="Loginform">
                        <input type="text " placeholder="Username">
                        <input type="password " placeholder="Password">
                        <a href="produ.php">
                        <button type="submit" >Login</button>
                        ?>
                       
                    </form>
                    <form id="Regform">
                        <input type="text " placeholder="Username">
                        <input type="email " placeholder="Email">
                        <input type="password " placeholder="Password">
                        <a href="produ.php">
                        <button type="submit" class="btn">Register</button>
                       ?>
                    </form>
                </div>
            </div>
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
     var LoginForm=document.getElementById("Loginform");
     var RegForm=document.getElementById("Regform");
     var Indicator=document.getElementById("Indicator");


function register(){
    RegForm.style.transform="translateX(0px)";
    LoginForm.style.transform="translateX(0px)";
    Indicator.style.transform="translateX(100px)";
}
function login(){
    RegForm.style.transform="translateX(300px)";
    LoginForm.style.transform="translateX(300px)";
    Indicator.style.transform="translateX(-100px)";

}


 </script>

</body>
</html>
