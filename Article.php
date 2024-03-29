<?php
$title = "Article";
include "header.php";
?>

<!-- Body -->
<div class="banner border-3 border-top border-dark"></div>
<div class="body-page container d-flex-row justify-content-between">
  <div class="article-container justify-content-between">
    <!-- Image -->
    <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4" data-mdb-ripple-color="light">
      <img
        src="./img/news/Travel-2.jpg"
        class="img-fluid" alt="">
      <a
        href="https://www.ford.fi/content/dam/guxeu/nextgen/cx740s/adventure/Adventure_16_CX740S_Int_Beauty_Cockpit_1920x1080_16x9.jpg">
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)">
        </div>
      </a>
    </div>
    <!-- Article title and description -->
    <div class="row mb-3">
      <div class="col-6">

       <!-- breadcrumb (Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS.)-->
       <nav aria-label="breadcrumb"> 
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="Products.php">Products</a></li>
              <li class="breadcrumb-item"><a href="News.php">News</a></li>
              <li class="breadcrumb-item active" aria-current="page">Articles</li>
            </ol>
          </nav>
          <!-- end breadcrumb -->

        <a href="" class="text-info">
          <i class="fas fa-plane"></i>
          Travels
        </a>
      </div>

      <div class="col-6 text-end">
        <u> 15.07.2024</u>
      </div>
    </div>

    <div class="text-dark">
      <br>
      <h3>Facilis consequatur eligendi</h3>
      <br>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed id nihil magni, sint vero
        provident esse numquam perferendis ducimus dicta adipisci iusto nam temporibus modi animi laboriosam?
      </p>
      <p>
        Tempora vel molestias aliquam magni amet ut at soluta facere, aliquid, quia quibusdam distinctio facilis. Quo
        eaque sed, nemo soluta temporibus possimus.
      </p>
      <p>
        Molestias aliquam magni amet ut at soluta facere, aliquid, quia quibusdam distinctio facilis. Quo eaquesed, nemo
        soluta temporibus possimus.
      </p><br>
    </div>
  </div>
  <a href="News.php">
      <input type="button" value="Go Back" class="btn btn-outline-info">
    </a>
</div>
<br>
</div> <!-- End of d-flex-column -->

<!--Footer-->
<?php include "footer.php"; ?>