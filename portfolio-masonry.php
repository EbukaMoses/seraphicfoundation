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
                    <span class="all">Childrens</span>
                </button>
                <button class="workitem btn p-0" onclick="filterSelection('donate')">
                    <span class="all">Donate</span>
                </button>
                <button class="workitem btn p-0" onclick="filterSelection('volunteer')">
                    <span class="all">Volunteer</span>
                </button>
            </div>
            <div class="container">
                <div class="row">
                    <div class="gal popup-gallery">
                        <div class="column charity blog-part img-box mb-3">
                            <a href="image/portfolio-masonry.jpg" class="blog-img zoom">
                                <img src="image/portfolio-masonry.jpg" alt="gallery-img" class="p-0">
                            </a>
                        </div>
                        <div class="column childrens blog-part img-box mb-3">
                            <a href="image/portfolio-masonry4.jpg" class="blog-img zoom">
                                <img src="image/portfolio-masonry4.jpg" alt="gallery-img" class="p-0">
                            </a>
                        </div>
                        <div class="column volunteer blog-part img-box mb-3">
                            <a href="image/portfolio-masonry7.jpg" class="blog-img zoom">
                                <img src="image/portfolio-masonry7.jpg" alt="gallery-img" class="p-0">
                            </a>
                        </div>
                        <div class="column donate blog-part img-box mb-3">
                            <a href="image/portfolio-masonry2.jpg" class="blog-img zoom">
                                <img src="image/portfolio-masonry2.jpg" alt="gallery-img" class="p-0">
                            </a>
                        </div>
                        <div class="column childrens blog-part img-box mb-3">
                            <a href="image/portfolio-masonry5.jpg" class="blog-img zoom">
                                <img src="image/portfolio-masonry5.jpg" alt="gallery-img" class="p-0">
                            </a>
                        </div>
                        <div class="column charity blog-part img-box mb-3">
                            <a href="image/portfolio-masonry8.jpg" class="blog-img zoom">
                                <img src="image/portfolio-masonry8.jpg" alt="gallery-img" class="p-0">
                            </a>
                        </div>
                        <div class="column charity blog-part img-box mb-3">
                            <a href="image/portfolio-masonry3.jpg" class="blog-img zoom">
                                <img src="image/portfolio-masonry3.jpg" alt="gallery-img" class="p-0">
                            </a>
                        </div>
                        <div class="column volunteer blog-part img-box mb-3">
                            <a href="image/portfolio-masonry9.jpg" class="blog-img zoom">
                                <img src="image/portfolio-masonry9.jpg" alt="gallery-img" class="p-0">
                            </a>
                        </div>
                        <div class="column childrens blog-part img-box mb-3">
                            <a href="image/portfolio-masonry6.jpg" class="blog-img zoom">
                                <img src="image/portfolio-masonry6.jpg" alt="gallery-img" class="p-0">
                            </a>
                        </div>
                        <div class="column volunteer blog-part img-box mb-3">
                            <a href="image/portfolio-masonry9.jpg" class="blog-img zoom">
                                <img src="image/portfolio-masonry9.jpg" alt="gallery-img" class="p-0">
                            </a>
                        </div>
                        <div class="column childrens blog-part img-box mb-3">
                            <a href="image/portfolio-masonry6.jpg" class="blog-img zoom">
                                <img src="image/portfolio-masonry6.jpg" alt="gallery-img" class="p-0">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <!-- MAIN END -->
    <?php include 'footer.php'; ?>