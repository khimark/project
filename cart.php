<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="cart.css">
    <!-- CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />



         <!-- JS CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-rbs5gXFiGgUKKkZt6R5eCzjL6g/oD23Qe3cvlT+tsI9xTnep1jsYD4ELWIzjI9J" crossorigin="anonymous"></script>
</head>

<body>
<?php
    $link = mysqli_connect("localhost", "root", "", "ecommerce_db");
    $sql = "SELECT * FROM ordersTable";
    $sql = "SELECT * FROM order_itemsTable";
    $sql = "SELECT * FROM productsTable";
    ?>

    <section id="header">
        <a href="#"><img src="image/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a class="active" href="cart.html"><i class="fal fa-shopping-cart cart"></i></a></li>
                <li><a href="login.html">Login</a></li>   
                <li><a href="admin.html">Admin</a></li>             
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header" class="about-header">
        <h2>#let's_talk</h2>
        <p>LEAVE A MESSAGE. We would love to hear from you</p>
    </section>

        <!-- Nav -->
<nav class="navbar navbar-inverse bg-inverse fixed-top bg-faded">
    <div class="row">
        <div class="col">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">Cart (<span class="total-count"></span>)</button><button class="clear-cart btn btn-danger">Clear Cart</button></div>
    </div>
</nav>

<div class="container">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 20rem; border-radius: 20px;" >
  <img class="card-img-top" src="image/shoes/1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Shoe</h4>
    <p class="card-text">Price: KSh 2500</p>
    <a href="#" data-name="Shoe" data-price="2500" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem; border-radius: 20px;">
  <img class="card-img-top" src="image/shoes/2.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Shoe</h4>
    <p class="card-text">Price: KSh 1500</p>
    <a href="#" data-name="Shoe" data-price="1500" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem; border-radius: 20px;">
  <img class="card-img-top" src="image/shoes/3.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Shoe</h4>
    <p class="card-text">Price: KSh 3500</p>
    <a href="#" data-name="Shoe" data-price="3500" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem; border-radius: 20px;">
  <img class="card-img-top" src="image/shoes/4.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Shoe</h4>
    <p class="card-text">Price: KSh 2500</p>
    <a href="#" data-name="Shoe" data-price="2500" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem; border-radius: 20px;">
  <img class="card-img-top" src="image/shoes/5.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Shoe</h4>
    <p class="card-text">Price: KSh 2500</p>
    <a href="#" data-name="Shoe" data-price="2500" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem; border-radius: 20px;">
  <img class="card-img-top" src="image/shoes/6.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Shoe</h4>
    <p class="card-text">Price: KSh 3500</p>
    <a href="#" data-name="Shoe" data-price="3500" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem; border-radius: 20px;">
  <img class="card-img-top" src="image/shoes/7.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Shoe</h4>
    <p class="card-text">Price: KSh 2500</p>
    <a href="#" data-name="Shoe" data-price="2500" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem; border-radius: 20px;">
  <img class="card-img-top" src="image/shoes/8.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Shoe</h4>
    <p class="card-text">Price: KSh 1500</p>
    <a href="#" data-name="Shoe" data-price="1500" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem; border-radius: 20px;">
  <img class="card-img-top" src="image/products/n1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">T-Shirt</h4>
    <p class="card-text">Price: KSh 2500</p>
    <a href="#" data-name="T-Shirt" data-price="2500" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem; border-radius: 20px;">
  <img class="card-img-top" src="image/products/n2.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">T-Shirt</h4>
    <p class="card-text">Price: KSh 1500</p>
    <a href="#" data-name="T-Shirt" data-price="1500" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem; border-radius: 20px;">
  <img class="card-img-top" src="image/products/n3.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Shoe</h4>
    <p class="card-text">Price: KSh 2500</p>
    <a href="#" data-name="Shor" data-price="2500" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem; border-radius: 20px;">
  <img class="card-img-top" src="image/products/n4.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">T-Shirt</h4>
    <p class="card-text">Price: KSh 3500</p>
    <a href="#" data-name="T-Shirt" data-price="3500" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem; border-radius: 20px;">
  <img class="card-img-top" src="image/products/n5.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Bag</h4>
    <p class="card-text">Price: KSh 2500</p>
    <a href="#" data-name="Bag" data-price="2500" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem; border-radius: 20px;">
  <img class="card-img-top" src="image/products/n6.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">T-Shirt</h4>
    <p class="card-text">Price: KSh 1500</p>
    <a href="#" data-name="T-Shirt" data-price="1500" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem; border-radius: 20px;">
  <img class="card-img-top" src="image/products/n7.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Briefcase</h4>
    <p class="card-text">Price: KSh 2500</p>
    <a href="#" data-name="Briefcase" data-price="2500" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem; border-radius: 20px;">
  <img class="card-img-top" src="image/products/n8.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Shoe</h4>
    <p class="card-text">Price: KSh 2500</p>
    <a href="#" data-name="Shoe" data-price="2500" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="show-cart table">
            
          </table>
          <div>Total price: KSh<span class="total-cart"></span></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Order now</button>
        </div>
      </div>
    </div>
  </div> 
    
    <script src="script.js"></script>
</body>

</html>