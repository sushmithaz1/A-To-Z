<?php include("config3.php"); print_r($row);

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
<?php
$cost=0;
?>


<!--------------cart item details-------->
<div class="small-container cart-page">
    <table>
        <tr>
              <th>Product</th>
             <th>Quantity</th>
              <th>SubTotal</th> 
           
        </tr>

<?php
while($row = mysqli_fetch_array($result)){
?>
        <tr>
                <td>
                    <div class="cart-info">
                        <img src="C:\Users\sushmitha r\Pictures\Documents\img1.jpg">
                        <div>
                            <p><?php echo $row['Name'];?></p>
                            <small><?php echo $row['Price'];?></small>
                          
                          <?php  $cost=$cost+($row['Price']) 
                          ?>
                        </div>
                    </div>
                 </td>
                <td><input type="number" value="1"></td>

                <td><?php echo $row['Price'];?></td>
        </tr> 
        <?php
    }
    ?>      
    </table>

    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td><?php echo $cost ?></td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$34.00</td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <?php $Tcost=$cost-(34) ?>
                <td><?php echo $Tcost ?></td>
            </tr>
        </table>
    </div>




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
 

</body>
</html>
