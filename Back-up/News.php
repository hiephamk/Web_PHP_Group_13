<?php
$title = "News";
include "header.php";
?>
<!-- body -->
<div class="body-page container d-inline-block justify-content-center">
  <div class="banner-items">
    <div class="banner-img">
      <img src="./img/News.jpg" alt="" class="img-fluid">
    </div>
    <div class="banner-text">
      <input type="checkbox" id="ck">
      <div class="hide-text">
      </div>
    </div>
  </div>
  <div class="main-page">
    <div class="icon-container container">
      <div class="cta-col col-4">
        <div class="cta-icon text-center">
          <a href="#" target="#">
            <img class="img-fluid" style="width: 80px; height: 80px" src="./img/icons8-play.png" alt="Video">
            <h2>Watch videos</h2>
          </a>
        </div>
      </div>
      <div class="cta-col col-4">
        <div class="cta-icon text-center">
          <a href="Products.php" target="#">
            <img class="img-fluid" style="width: 80px; height: 80px" src="./img/icons8-find.png" alt="">
            <h2>Find spare parts</h2>
          </a>
        </div>
      </div>
      <div class="cta-col col-4">
        <div class="cta-icon text-center">
          <a href="Contact.php" target="#">
            <img class="img-fluid" style="width: 80px; height: 80px" src="./img/icons8-write.png" alt="">
            <h2>Become our partner</h2>
          </a>
        </div>
      </div>
    </div>
    <!--Main News layout-->
    <div class="news-container d-flex-column full-container">
      <!--Section: News of the day-->
      <div class="news-items border-bottom">
        <div class="news-img">
          <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
            <img
              src="https://www.ford.fi/content/dam/guxeu/nextgen/cx740s/adventure/Adventure_16_CX740S_Int_Beauty_Cockpit_1920x1080_16x9.jpg"
              class="img-fluid" alt="Ford interior">
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
            </a>
          </div>
        </div>
        
        <div class="news-text">
          <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">News of the day</span>
          <h4><strong>Facilis consequatur eligendi</strong></h4>
          <p class="text-muted">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Facilis consequatur eligendi quisquam doloremque vero ex
            debitis veritatis placeat unde animi laborum sapiente illo
            possimus, commodi dignissimos obcaecati illum maiores
            corporis.
          </p>
          <a class="btn btn-primary" href="Article.php" role="button">
            Read more
          </a>
        </div>
      </div>

      <!--Section: News of the day-->

      <!--Section: Content-->
      <section>
        <div class="row gx-lg-5">
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <!-- News block -->
            <div>
              <!-- Featured image -->
              <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4" data-mdb-ripple-color="light">
                <img
                  src="https://plus.unsplash.com/premium_photo-1663047616905-5bdff3c06010?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                  class="img-fluid" alt="">
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>

              <!-- Article data -->
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

              <!-- Article title and description -->
              <a href="" class="text-dark">
                <h5>This is title of the news</h5>

                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Odit, iste aliquid. Sed id nihil magni, sint vero
                  provident esse numquam perferendis ducimus dicta adipisci
                  iusto nam temporibus modi animi laboriosam?
                </p>
              </a>

              <hr>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img
                      src="https://plus.unsplash.com/premium_photo-1681821676263-48ad57d15f64?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                      class="img-fluid shadow-1-strong rounded" alt="Hollywood Sign on The Hill">
                  </div>

                  <div class="col-9">
                    <p class="mb-2">
                      <strong>Lorem ipsum dolor sit amet</strong>
                    </p>
                    <p>
                      <u> 15.07.2024</u>
                    </p>
                  </div>
                </div>
              </a>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp"
                      class="img-fluid shadow-1-strong rounded" alt="Palm Springs Road">
                  </div>

                  <div class="col-9">
                    <p class="mb-2">
                      <strong>Lorem ipsum dolor sit amet</strong>
                    </p>
                    <p>
                      <u> 15.07.2024</u>
                    </p>
                  </div>
                </div>
              </a>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img
                      src="https://images.unsplash.com/photo-1616096969071-7fcd4cda8007?q=80&w=1548&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                      class="img-fluid shadow-1-strong rounded" alt="Los Angeles Skyscrapers">
                  </div>

                  <div class="col-9">
                    <p class="mb-2">
                      <strong>Lorem ipsum dolor sit amet</strong>
                    </p>
                    <p>
                      <u> 15.07.2024</u>
                    </p>
                  </div>
                </div>
              </a>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp"
                      class="img-fluid shadow-1-strong rounded" alt="Skyscrapers">
                  </div>

                  <div class="col-9">
                    <p class="mb-2">
                      <strong>Lorem ipsum dolor sit amet</strong>
                    </p>
                    <p>
                      <u> 15.07.2024</u>
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <!-- News block -->
          </div>

          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <!-- News block -->
            <div>
              <!-- Featured image -->
              <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4" data-mdb-ripple-color="light">
                <img
                  src="https://plus.unsplash.com/premium_photo-1661757479896-0b9bb562b2a4?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                  class="img-fluid" alt="Brooklyn Bridge">
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>

              <!-- Article data -->
              <div class="row mb-3">
                <div class="col-6">
                  <a href="" class="text-danger">
                    <i class="fas fa-chart-pie"></i>
                    Business
                  </a>
                </div>

                <div class="col-6 text-end">
                  <u> 15.07.2024</u>
                </div>
              </div>

              <!-- Article title and description -->
              <a href="" class="text-dark">
                <h5>This is title of the news</h5>

                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Odit, iste aliquid. Sed id nihil magni, sint vero
                  provident esse numquam perferendis ducimus dicta adipisci
                  iusto nam temporibus modi animi laboriosam?
                </p>
              </a>

              <hr>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/031.webp"
                      class="img-fluid shadow-1-strong rounded" alt="Five Lands National Park">
                  </div>

                  <div class="col-9">
                    <p class="mb-2">
                      <strong>Lorem ipsum dolor sit amet</strong>
                    </p>
                    <p>
                      <u> 15.07.2024</u>
                    </p>
                  </div>
                </div>
              </a>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/032.webp"
                      class="img-fluid shadow-1-strong rounded" alt="Paris - Eiffel Tower">
                  </div>

                  <div class="col-9">
                    <p class="mb-2">
                      <strong>Lorem ipsum dolor sit amet</strong>
                    </p>
                    <p>
                      <u> 15.07.2024</u>
                    </p>
                  </div>
                </div>
              </a>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/033.webp"
                      class="img-fluid shadow-1-strong rounded" alt="Louvre">
                  </div>

                  <div class="col-9">
                    <p class="mb-2">
                      <strong>Lorem ipsum dolor sit amet</strong>
                    </p>
                    <p>
                      <u> 15.07.2024</u>
                    </p>
                  </div>
                </div>
              </a>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/034.webp"
                      class="img-fluid shadow-1-strong rounded" alt="Times Square">
                  </div>

                  <div class="col-9">
                    <p class="mb-2">
                      <strong>Lorem ipsum dolor sit amet</strong>
                    </p>
                    <p>
                      <u> 15.07.2024</u>
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <!-- News block -->
          </div>

          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <!-- News block -->
            <div>
              <!-- Featured image -->
              <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4" data-mdb-ripple-color="light">
                <img
                  src="https://images.unsplash.com/photo-1676886417721-2e180ff9adee?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                  class="img-fluid" alt="Golden Gate National Recreation Area">
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>

              <!-- Article data -->
              <div class="row mb-3">
                <div class="col-6">
                  <a href="" class="text-warning">
                    <i class="fas fa-code"></i>
                    Technology
                  </a>
                </div>

                <div class="col-6 text-end">
                  <u> 15.07.2024</u>
                </div>
              </div>

              <!-- Article title and description -->
              <a href="" class="text-dark">
                <h5>This is title of the news</h5>

                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Odit, iste aliquid. Sed id nihil magni, sint vero
                  provident esse numquam perferendis ducimus dicta adipisci
                  iusto nam temporibus modi animi laboriosam?
                </p>
              </a>

              <hr>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/011.webp"
                      class="img-fluid shadow-1-strong rounded" alt="Brooklyn Bridge">
                  </div>

                  <div class="col-9">
                    <p class="mb-2">
                      <strong>Lorem ipsum dolor sit amet</strong>
                    </p>
                    <p>
                      <u> 15.07.2024</u>
                    </p>
                  </div>
                </div>
              </a>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/012.webp"
                      class="img-fluid shadow-1-strong rounded" alt="Hamilton Park">
                  </div>

                  <div class="col-9">
                    <p class="mb-2">
                      <strong>Lorem ipsum dolor sit amet</strong>
                    </p>
                    <p>
                      <u> 15.07.2024</u>
                    </p>
                  </div>
                </div>
              </a>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/013.webp"
                      class="img-fluid shadow-1-strong rounded" alt="Perdana Botanical Garden Kuala Lumpur">
                  </div>

                  <div class="col-9">
                    <p class="mb-2">
                      <strong>Lorem ipsum dolor sit amet</strong>
                    </p>
                    <p>
                      <u> 15.07.2024</u>
                    </p>
                  </div>
                </div>
              </a>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/014.webp"
                      class="img-fluid shadow-1-strong rounded" alt="Perdana Botanical Garden">
                  </div>

                  <div class="col-9">
                    <p class="mb-2">
                      <strong>Lorem ipsum dolor sit amet</strong>
                    </p>
                    <p>
                      <u> 15.07.2024</u>
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <!-- News block -->
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <!-- Pagination -->
      <nav class="my-4" aria-label="...">
        <ul class="pagination pagination-circle justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
    <!--Main layout-->
  </div>
  <!-- End Main page-->
</div>
</div> <!-- End Body-->

<!--Footer-->
<?php include "footer.php"; ?>