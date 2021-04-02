<?php
/*
Template Name: Product Page
Template Post Type: page
*/

get_header();
?>
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Product</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">Product</p>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Products Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Best Prices We Offer For Ice Cream Lovers</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel product-carousel">
                    <?php get_template_part("template-parts/content", "products"); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->

<?php get_footer(); ?>