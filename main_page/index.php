<?php
$title = "Home";
include_once "../sub_page/header.php";
?>
<!-- php controler -->
<div class="body-page container d-flex-column justify-content-center">
    <div class="banner-items">
        <div class="banner-img">
            <img class="img-fluid" src="../img/banner-home.jpeg" alt="">
        </div>
        <div class="banner-text">
            <input type="checkbox" id="ck">
            <h3>It's NEW ITEM!</h3>
            <p>Lorem ipsum, dolor sit amet Lorem ipsum, dolor sit amet </p>
            <div class="hide-text">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, cum a.</p>
                <label class="sl" for="ck">View less </label>
            </div>
            <label class="sm" for="ck">View more </label>
        </div>
    </div>
    <div class="main-page">
        <div class="icon-container container">
            <div class="cta-col col-4">
                <div class="cta-icon text-center">
                    <a href="https://www.youtube.com/watch?v=fdGWRq1dVBA" target="blank">
                        <img class="img-fluid" style="width: 80px; height: 80px" src="../img/icons8-play.png"
                            alt="Video">
                        <h2>Watch videos</h2>
                    </a>
                </div>
            </div>
            <div class="cta-col col-4">
                <div class="cta-icon text-center">
                    <a href="Products.php" target="#">
                        <img class="img-fluid" style="width: 80px; height: 80px" src="../img/icons8-find.png"
                            alt="Product">
                        <h2>Find spare parts</h2>
                    </a>
                </div>
            </div>
            <div class="cta-col col-4">
                <div class="cta-icon text-center">
                    <a href="Contact.php" target="#">
                        <img class="img-fluid" style="width: 80px; height: 80px" src="../img/icons8-write.png"
                            alt="Partner">
                        <h2>Become our partner</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="accessory-container container">
            <input type="checkbox" id="expand">
            <input type="checkbox" id="expand-2">
            <input type="checkbox" id="expand-3">
            <div class="accessory-item-container d-inline-flex">
                <div class="accessory-item item-1 col-4">
                    <img class="img-fluid" src="../img/interior-1.jpeg" alt="">
                    <label class="label-1" for="expand">
                        Self Driving Technology<br>
                        Click here
                    </label>
                </div>
                <div class="accessory-item item-2 col-4">
                    <img class="img-fluid" src="../img-hiep/interior-2.jpeg" alt="">
                    <label class="label-2" for="expand-2">
                        Interior Accessories<br>
                        Click here
                    </label>
                </div>
                <div class="accessory-item item-3 col-4">
                    <img class="img-fluid" src="../img-hiep/interior-4.jpeg" alt="">
                    <label class="label-3" for="expand-3">
                        Exterior Accessories<br>
                        Click here
                    </label>
                </div>
            </div>
            <div class="expand-item-2">
                <div class="d-flex expand-block">
                    <img class="img-fluid col-6" src="../img/interior-2.jpeg" alt="">
                    <div class="col-6 p-3">
                        <h3 class="text-left-2">Interior Accessories</h3>
                        <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, sit
                            ipsa reprehenderit exercitationem accusantium aperiam architecto illum iusto veniam
                            laboriosam iste officiis alias, velit at! Adipisci quo tempora dolores magni?</p>
                    </div>
                </div>
            </div>
            <div class="expand-item-1">
                <div class="d-flex expand-block">
                    <img class="img-fluid col-6" src="../img/interior-1.jpeg" alt="">
                    <div class="col-6 p-3">
                        <h3 class="text-left-1">Self Driving Technology</h3>
                        <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, sit
                            ipsa reprehenderit exercitationem accusantium aperiam architecto illum iusto veniam
                            laboriosam iste officiis alias, velit at! Adipisci quo tempora dolores magni?</p>
                    </div>
                </div>
            </div>
            <div class="expand-item-3">
                <div class="d-flex expand-block">
                    <img class="img-fluid col-6" src="../img/interior-4.jpeg" alt="">
                    <div class="col-6 p-3 ">
                        <h3 class="text-left-3">Exterior Accessories</h3>
                        <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, sit
                            ipsa reprehenderit exercitationem accusantium aperiam architecto illum iusto veniam
                            laboriosam iste officiis alias, velit at! Adipisci quo tempora dolores magni?</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="newcar-container">
            <div class="newcar-img">
                <img class="img-fluid" src="../img/luxury-2.jpeg" alt="">
            </div>
            <div class="newcar-text">
                <input type="checkbox" id="ch">
                <h3>THE NEW CAR, THE NEW HORIZON!!</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, cum a. Quidem nam corporis fugiat
                    sit nisi pariatur beatae dolore, modi eligendi dolorem nihil asperiores, quae esse eveniet quod
                    labore.</p>
                <div class="hide-text">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, cum a. Quidem nam corporis
                        fugiat sit nisi pariatur beatae dolore, modi eligendi dolorem nihil asperiores, quae esse
                        eveniet quod labore.</p>

                    <label class="sl" for="ch">View less </label>
                </div>
                <label class="sm" for="ch">View more </label>
            </div>
        </div>
        <div class="Discovery-container container">
            <div class="discovery-text text-md-start fw-bold">
                <h3>Feature Products</h3>
            </div>
            <div class="discovery-item">
                <div class="col-3 item-img"><img class="img-fluid" src="../img/luxury-2.jpeg" alt="Product_1">
                    <div class="item-text">
                        <p>Hybrid Cars</p>
                    </div>
                </div>
                <div class="col-3 item-img"><img class="img-fluid" src="../img/luxury-3.jpeg" alt="Product_2">
                    <div class="item-text">
                        <p>Electric Cars</p>
                    </div>
                </div>
                <div class="col-3 item-img"><img class="img-fluid" src="../img/luxury-1.jpeg" alt="Product_2">
                    <div class="item-text">
                        <p>Hi-Class Cars</p>
                    </div>
                </div>
                <div class="col-3 item-img"><img class="img-fluid" src="../img/luxury-4.jpeg" alt="Product_2">
                    <div class="item-text">
                        <p>Sport Cars</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--Footer-->
<?php include "../sub_page/footer.php"; ?>