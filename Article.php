<?php
$title = "Article";
include "./layout/header.php";
?>

<!-- Body -->
<div class="banner border-3 border-top border-dark"></div>
<div class="body-page container d-flex-row justify-content-between">
  <div class="article-container justify-content-between">
    <!-- Image -->
    <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4" data-mdb-ripple-color="light">
      <img
        src="https://www.ford.fi/content/dam/guxeu/nextgen/cx740s/adventure/Adventure_16_CX740S_Int_Beauty_Cockpit_1920x1080_16x9.jpg"
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
</div>
</div> <!-- End of d-flex-column -->

<!--Footer-->
<?php include "./layout/footer.php"; ?>