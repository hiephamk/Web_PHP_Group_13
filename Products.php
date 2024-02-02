<?php
$title = "Products";
include "header.php";
?>

<!-- Body -->
<div class="body-page d-flex-column container">
  <!-- Banner -->
  <div class="banner-items container">
    <div class="banner-img">
      <img src="./img/banner-products.png" alt="banner" class="img-fluid">
    </div>
    <div class="banner-text">
      <h3>YOUR IDEAL CAR NOW AVAILABLE!</h3>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, cum
        a. Voluptatibus delectus enim earum amet.
      </p>
      <a class="btn btn-primary" href="Products.html" role="button">View more</a>
    </div>
  </div>
  <!-- Main page -->
  <div class="d-flex-column main-page">
    <!-- Call to Action -->
    <div class="icon-container container">
      <div class="cta-col col-4">
        <div class="cta-icon text-center">
          <img class="img-fluid" style="width: 80px; height: 80px" src="./img/icons8-play.png" alt="Video">
          <a href="https://www.youtube.com/watch?v=fdGWRq1dVBA" target="blank">
            <h2>Watch videos</h2>
          </a>
        </div>
      </div>
      <div class="cta-col col-4">
        <div class="cta-icon text-center">
          <img class="img-fluid" style="width: 80px; height: 80px" src="./img/icons8-find.png" alt="">
          <a href="Products.html" target="blank">
            <h2>Find spare parts</h2>
          </a>
        </div>
      </div>
      <div class="cta-col col-4">
        <div class="cta-icon text-center">
          <img class="img-fluid" style="width: 80px; height: 80px" src="./img/icons8-write.png" alt="">
          <a href="Contact.html" target="blank">
            <h2>Become our partner</h2>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Product list -->
  <div class="product-container container">
    <!-- Section: Electric Car -->
    <section class="container">
      <div class="row gx-lg-5 product-items container">
        <!-- Card Title -->
        <div class="row text-dark" id="Electric">
          <h2>ELECTRIC CARS</h2>
          <div class="divider border-3 border-dark border-bottom align=left"></div>
        </div>
        <!-- Column 1 -->
        <div class=" col-3 item-box ">
          <a href="#" class="text-box">
            <img class="img-fluid" src="img/ecar-iXM60.png" alt="Product_1">
            <h3>T13 iX M60</h3>
            <h6>Electric car</h6>
            <p>
              Lorem ipsum dolor sit amet consectetur elit. Voluptatibus
              delectus enim earum amet.
            </p>
          </a>
        </div>
        <!-- Column 2 -->
        <div class=" col-3 item-box">
          <a href="#" class="text-box">
            <img class="img-fluid" src="img/ecar-iX.png" alt="Product_2">
            <h3>T13 iX</h3>
            <h6>Electric car</h6>
            <p>
              Nihil laudantium at ducimus officiis tenetur. Inventore,
              cupiditate autem eius nemo.
            </p>
          </a>
        </div>
        <!-- Column 3 -->
        <div class=" col-3 item-box">
          <a href="#" class="text-box">
            <img class="img-fluid" src="img/ecar-i7.png" alt="Product_3">
            <h3>T13 i7</h3>
            <h6>Electric car</h6>
            <p>
              Numquam est voluptatum suscipit inventore dolorem veritatis,
              quidem obcaecati dolorum vitae.
            </p>
          </a>
        </div>
        <!-- Column 4 -->
        <div class=" col-3 item-box">
          <a href="#" class="text-box">
            <img class="img-fluid" src="img/ecar-i7M70.png" alt="Product_4">
            <h3>T13 i7 M70</h3>
            <h6>Electric car</h6>
            <p>
              Odio quod eius expedita possimus provident aut repellat fuga.
              Autem reiciendis provident obcaecati cum.
            </p>
          </a>
        </div>
      </div>
    </section>

    <!-- Section: SUV -->
    <section class="container">
      <div class="row gx-lg-5 product-items container">
        <!-- Card Title -->
        <div class="row text-dark" id="SUV">
          <h2>SUV</h2>
          <div class="divider border-3 border-dark border-bottom align=left"></div>
        </div>
        <!-- Column 1 -->
        <div class=" col-3 item-box">
          <a href="#" class="text-box">
            <img class="img-fluid" src="img/SUV-X5-hybrid.png" alt="Product_5">
            <h3>T13 X5</h3>
            <h6>Hybrid</h6>
            <p>
              Lorem ipsum dolor sit amet consectetur elit. Voluptatibus
              delectus enim earum amet.
            </p>
          </a>
        </div>
        <!-- Column 2 -->
        <div class=" col-3 item-box">
          <a href="#" class="text-box">
            <img class="img-fluid" src="img/SUV-X7.png" alt="Product_6">
            <h3>T13 X7</h3>
            <h6>Petrol - Diesel</h6>
            <p>
              Nihil laudantium at ducimus officiis tenetur. Inventore,
              cupiditate autem eius nemo.
            </p>
          </a>
        </div>
        <!-- Column 3 -->
        <div class=" col-3 item-box">
          <a href="#" class="text-box">
            <img class="img-fluid" src="img/SUV-X5M.png" alt="Product_7">
            <h3>T13 X7 M60i</h3>
            <h6>Petrol</h6>
            <p>
              Numquam est voluptatum suscipit inventore dolorem veritatis,
              quidem obcaecati dolorum vitae.
            </p>
          </a>
        </div>
        <!-- Column 4 -->
        <div class=" col-3 item-box">
          <a href="#" class="text-box">
            <img class="img-fluid" src="img/SUV-X4.png" alt="Product_8">
            <h3>T13 X6</h3>
            <h6>Petrol - Diesel</h6>
            <p>
              Odio quod eius expedita possimus provident aut repellat fuga.
              Autem reiciendis provident obcaecati cum.
            </p>
          </a>
        </div>
      </div>
    </section>

    <!-- Section: Sedan -->
    <section class="container">
      <div class="row gx-lg-5 product-items container">
        <!-- Card Title -->
        <div class="row text-dark" id="Sedan">
          <h2>SEDAN</h2>
          <div class="divider border-3 border-dark border-bottom align=left"></div>
        </div>
        <!-- Column 1 -->
        <div class=" col-3 item-box">
          <a href="#" class="text-box">
            <img class="img-fluid" src="img/Sedan-i7.png" alt="Product_9">
            <h3>T13 M5 Sedan</h3>
            <h6>Hybrid</h6>
            <p>
              Lorem ipsum dolor sit amet consectetur elit. Voluptatibus
              delectus enim earum amet.
            </p>
          </a>
        </div>
        <!-- Column 2 -->
        <div class=" col-3 item-box">
          <a href="#" class="text-box">
            <img class="img-fluid" src="img/Sedan-7series.png" alt="Product_10">
            <h3>T13 7 Series Sedan</h3>
            <h6>Hybrid</h6>
            <p>
              Nihil laudantium at ducimus officiis tenetur. Inventore,
              cupiditate autem eius nemo.
            </p>
          </a>
        </div>
        <!-- Column 3 -->
        <div class=" col-3 item-box">
          <a href="#" class="text-box">
            <img class="img-fluid" src="img/Sedan-5series.png" alt="Product_11">
            <h3>T13 M760e</h3>
            <h6>Diesel</h6>
            <p>
              Numquam est voluptatum suscipit inventore dolorem veritatis,
              quidem obcaecati dolorum vitae.
            </p>
          </a>
        </div>
        <!-- Column 4 -->
        <div class=" col-3 item-box">
          <a href="#" class="text-box">
            <img class="img-fluid" src="img/Sedan-3series.png" alt="Product_12">
            <h3>T13 M5 Sedan</h3>
            <h6>Hybrid</h6>
            <p>
              Odio quod eius expedita possimus provident aut repellat fuga.
              Autem reiciendis provident obcaecati cum.
            </p>
          </a>
        </div>
      </div>
    </section>
  </div>
</div>

<!--Footer-->
<?php include "footer.php"; ?>