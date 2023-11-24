<?php
require_once './Shared/Links.php';
require_once './Shared/Header.php';
require_once './Shared/Sidebar.php';
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Report</h1>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Number Of Orders</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>145</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Sales Card -->

                    <!-- Total  Money Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">


                            <div class="card-body">
                                <h5 class="card-title">Total Money</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-dollar-sign"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>$3,264</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">



                            <div class="card-body">
                                <h5 class="card-title">Customers</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>1244</h6>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- End Customers Card -->



                    <!-- Top Selling -->
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">
                            <div class="card-body pb-0">
                                <h5 class="card-title">Top Selling</h5>

                                <table class="table table-border">
                                    <thead>
                                        <tr>
                                            <th>Preview</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Sold</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th><span><img src="assets/img/product-1.jpg" alt=""></span></th>
                                            <td><span class="fw-bold">Ut inventore ipsa voluptas nulla</span></td>
                                            <td>$64</td>
                                            <td class="fw-bold">124</td>
                                        </tr>
                                        <tr>
                                            <th><span><img src="assets/img/product-2.jpg" alt=""></span></th>
                                            <td><span class="fw-bold">Exercitationem similique doloremque</span></td>
                                            <td>$46</td>
                                            <td class="fw-bold">98</td>
                                        </tr>
                                        <tr>
                                            <th><span><img src="assets/img/product-3.jpg" alt=""></span></th>
                                            <td><span class="fw-bold">Doloribus nisi exercitationem</span></td>
                                            <td>$59</td>
                                            <td class="fw-bold">74</td>
                                        </tr>
                                        <tr>
                                            <th><span><img src="assets/img/product-4.jpg" alt=""></span></th>
                                            <td><span class="fw-bold">Officiis quaerat sint rerum error</span></td>
                                            <td>$32</td>
                                            <td class="fw-bold">63</td>
                                        </tr>
                                        <tr>
                                            <th><span><img src="assets/img/product-5.jpg" alt=""></span></th>
                                            <td><span class="fw-bold">Sit unde debitis delectus repellendus</span></td>
                                            <td>$79</td>
                                            <td class="fw-bold">41</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                    <!-- End Top Selling -->

                </div>
            </div>

        </div>
    </section>

</main>

<!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<script src="assets/js/main.js"></script>


<?php

include_once './Shared/Footer.php';

?>