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
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <!-- Top Selling -->
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">
                            <div class="card-body pb-0">
                                <h5 class="card-title">Top Selling <span>| Today</span></h5>

                                <table class="table table-border">
                                    <thead>
                                        <tr>
                                            <th>Preview</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Data</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th><span><img src="assets/img/product-1.jpg" alt=""></span></th>
                                            <td><span class="fw-bold">Ut inventore ipsa voluptas nulla</span></td>
                                            <td>$64</td>
                                            <td class="fw-bold">124</td>
                                            <td>
                                                <button class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><span><img src="assets/img/product-2.jpg" alt=""></span></th>
                                            <td><span class="fw-bold">Exercitationem similique doloremque</span></td>
                                            <td>$46</td>
                                            <td class="fw-bold">98</td>
                                            <td>
                                                <button class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th><span><img src="assets/img/product-3.jpg" alt=""></span></th>
                                            <td><span class="fw-bold">Doloribus nisi exercitationem</span></td>
                                            <td>$59</td>
                                            <td class="fw-bold">74</td>
                                            <td>
                                                <button class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><span><img src="assets/img/product-4.jpg" alt=""></span></th>
                                            <td><span class="fw-bold">Officiis quaerat sint rerum error</span></td>
                                            <td>$32</td>
                                            <td class="fw-bold">63</td>
                                            <td>
                                                <button class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><span><img src="assets/img/product-5.jpg" alt=""></span></th>
                                            <td><span class="fw-bold">Sit unde debitis delectus repellendus</span></td>
                                            <td>$79</td>
                                            <td class="fw-bold">41</td>
                                            <td>
                                                <button class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Selling -->

                </div>
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
                                <button type="submit" class="col-12 btn btn-primary">Submit</button>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>
            <!-- End Left side columns -->
        </div>
    </section>

</main><!-- End #main -->























<script src="assets/js/main.js"></script>


<?php

include_once './Shared/Footer.php';

?>