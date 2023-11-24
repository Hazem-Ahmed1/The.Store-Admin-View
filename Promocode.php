<?php
require_once './Shared/Links.php';
require_once './Shared/Header.php';
require_once './Shared/Sidebar.php';
?>








<main id="main" class="main">

    <div class="pagetitle">
        <h1>Categories</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Top Selling -->
            <div class="col-12">
                <div class="card top-selling overflow-auto">
                    <div class="card-body pb-0">
                        <h5 class="card-title">Promo Codes</span></h5>

                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                    <td>$64</td>
                                    <td>
                                        <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                                    <td class="fw-bold">98</td>
                                    <td>
                                        <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                    </td>

                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div><!-- End Top Selling -->

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <img src="./assets/img/DISCOUNT_TACTICS_NEW_COLOURS_FOR_VANESSA.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Add a new category</h5>
                                <form class="row g-3">
                                    <div class="col-12">
                                        <label for="cat_name" class="form-label">Category Name</label>
                                        <input type="text" class="form-control" id="cat_name">
                                    </div>
                                    <div class="col-12">
                                        <label for="img_url" class="form-label">Image Url</label>
                                        <input type="email" class="form-control" id="img_url">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="col-12 btn btn-primary">Update</button>
                                    </div>
                                </form><!-- Vertical Form -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- End Left side columns -->
        </div>
    </section>

</main><!-- End #main -->

















<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>


<?php

include_once './Shared/Footer.php';

?>