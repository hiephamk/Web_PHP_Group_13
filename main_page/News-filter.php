<?php
$title = "News 2";
include "../sub_page/header.php";
?>
<!-- body -->
<div class="body-page container d-inline-block justify-content-center">
  <div class="banner-items">
    <div class="banner-img">
      <img src="../img/News.jpg" alt="" class="img-fluid">
    </div>
    <!-- <div class="banner-text">
      <input type="checkbox" id="ck">
      <div class="hide-text">
      </div>
    </div> -->
  </div>
  <div class="main-page">
    <div class="icon-container container">
      <div class="cta-col col-4">
        <div class="cta-icon text-center">
          <a href="News2.php" target="#">
            <img class="img-fluid" style="width: 80px; height: 80px" src="../img/icons8-filter-64.png" alt="Filter">
            <h2>Filter News</h2>
          </a>
        </div>
      </div>
      <div class="cta-col col-4">
        <div class="cta-icon text-center">
          <a href="Products.php" target="#">
            <img class="img-fluid" style="width: 80px; height: 80px" src="../img/icons8-find.png" alt="">
            <h2>Find spare parts</h2>
          </a>
        </div>
      </div>
      <div class="cta-col col-4">
        <div class="cta-icon text-center">
          <a href="Contact.php" target="#">
            <img class="img-fluid" style="width: 80px; height: 80px" src="../img/icons8-write.png" alt="">
            <h2>Become our partner</h2>
          </a>
        </div>
      </div>
    </div>
    <!--Main News layout-->
    <div class="news-container d-flex-column full-container">
      <!--Section: News of the day-->
        <nav aria-label="breadcrumb"> 
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="Products.php">Products</a></li>
              <li class="breadcrumb-item"><a href="News.php">News</a></li>
              <li class="breadcrumb-item active" aria-current="page">Filter News</li>
            </ol>
          </nav>
          <br>
          <?php include '../sub_page/filter-news.php'; 
          ?>
        
    
    <!--Main layout-->
  </div>
  <!-- End Main page-->
</div>
</div> <!-- End Body-->
<br>
<!--Footer-->
<?php include "../sub_page/footer.php"; ?>