<?php include 'header.php'; ?>
    <!-- MAIN START -->
    <main class="main">
        <div class="gallery-banner text-left">
            <div class="banner-content">
                <div class="container pl-0">
                    <h1 class="heading-three">Gallery</h1>
                </div>
            </div>
        </div>
        <div class="gallery-part">
            <div class="gallery-category">
                <button class="workitem btn active p-0" onclick="filterSelection('all')">
                    <span class="all active">Show All</span>
                </button>
                <button class="workitem btn p-0" onclick="filterSelection('charity')">
                    <span class="all">Charity</span>
                </button>
                <button class="workitem btn p-0" onclick="filterSelection('childrens')">
                    <span class="all">Children</span>
                </button>
                <button class="workitem btn p-0" onclick="filterSelection('donate')">
                    <span class="all">Donate</span>
                </button>
                <button class="workitem btn p-0" onclick="filterSelection('volunteer')">
                    <span class="all">Volunteer</span>
                </button>
            </div>
            <div class="container">
                <div class="row img-show popup-gallery" id="grid">
                    <div class="column charity col-xs-12 col-sm-6 col-md-4 cat-detail">
                        <div class="blog-part img-box">
                            <a href="image/gallery-img1.png" class="blog-img zoom">
                                <img class="workimg" src="image/gallery-img1.png" alt="gallery">
                            </a>
                        </div>
                    </div>
                    <div class="column childrens col-xs-12 col-sm-6 col-md-4 cat-detail">
                        <div class="blog-part img-box">
                            <a href="image/gallery-img2.png" class="blog-img zoom">
                                <img class="workimg" src="image/gallery-img2.png" alt="gallery">
                            </a>
                        </div>
                    </div>
                    <div class="column childrens col-xs-12 col-sm-6 col-md-4 cat-detail">
                        <div class="blog-part img-box">
                            <a href="image/gallery-img3.png" class="blog-img zoom">
                                <img class="workimg" src="image/gallery-img3.png" alt="gallery">
                            </a>
                        </div>
                    </div>
                    <div class="column donate col-xs-12 col-sm-6 col-md-4 cat-detail">
                        <div class="blog-part img-box">
                            <a href="image/gallery-img4.png" class="blog-img zoom">
                                <img class="workimg" src="image/gallery-img4.png" alt="gallery">
                            </a>
                        </div>
                    </div>
                    <div class="column donate col-xs-12 col-sm-6 col-md-4 cat-detail">
                        <div class="blog-part img-box">
                            <a href="image/gallery-img5.png" class="blog-img zoom">
                                <img class="workimg" src="image/gallery-img5.png" alt="gallery">
                            </a>
                        </div>
                    </div>
                    <div class="column volunteer col-xs-12 col-sm-6 col-md-4 cat-detail">
                        <div class="blog-part img-box">
                            <a href="image/gallery-img6.png" class="blog-img zoom">
                                <img class="workimg" src="image/gallery-img6.png" alt="gallery">
                            </a>
                        </div>
                    </div>
                    <div class="column charity col-xs-12 col-sm-6 col-md-4 cat-detail">
                        <div class="blog-part img-box ">
                            <a href="image/gallery-img7.png" class="blog-img zoom">
                                <img class="workimg" src="image/gallery-img7.png" alt="gallery">
                            </a>
                        </div>
                    </div>
                    <div class="column volunteer col-xs-12 col-sm-6 col-md-4 cat-detail">
                        <div class="blog-part img-box ">
                            <a href="image/gallery-img8.png" class="blog-img zoom">
                                <img class="workimg" src="image/gallery-img8.png" alt="gallery">
                            </a>
                        </div>
                    </div>
                    <div class="column charity col-xs-12 col-sm-6 col-md-4 cat-detail">
                        <div class="blog-part img-box ">
                            <a href="image/gallery-img9.png" class="blog-img zoom">
                                <img class="workimg" src="image/gallery-img9.png" alt="gallery">
                            </a>
                        </div>
                    </div>
                    <div class="column volunteer col-xs-12 col-sm-6 col-md-4 cat-detail">
                        <div class="blog-part img-box ">
                            <a href="image/gallery-img10.png" class="blog-img zoom">
                                <img class="workimg" src="image/gallery-img10.png" alt="gallery">
                            </a>
                        </div>
                    </div>
                    <div class="column donate col-xs-12 col-sm-6 col-md-4 cat-detail">
                        <div class="blog-part img-box ">
                            <a href="image/gallery-img11.png" class="blog-img zoom">
                                <img class="workimg" src="image/gallery-img11.png" alt="gallery">
                            </a>
                        </div>
                    </div>
                    <div class="column childrens col-xs-12 col-sm-6 col-md-4 cat-detail">
                        <div class="blog-part img-box ">
                            <a href="image/gallery-img12.png" class="blog-img zoom">
                                <img class="workimg" src="image/gallery-img12.png" alt="gallery">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="more">
                    <a href="#" class="more-btn">VIEW MORE PROJECTS</a>
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN END -->
    <?php include 'footer.php'; ?>