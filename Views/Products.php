<?php
require_once './../Shared/Links.php';
require_once './../Shared/Header.php';
require_once './../Shared/Sidebar.php';
require_once __DIR__ . "../../Models/DBManager.php";
?>






<main id="main" class="main">

    <div class="pagetitle">
        <h1>Products</h1>
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
                                <!-- <h5 class="card-title">Top Selling <span>| Today</span></h5> -->
                                <h5 class="card-title">Products</h5>

                                <table class="table table-border">
                                    <?php
                                    $db = DBManager::getInstance();
                                    # An INNER JOIN returns only the rows where there is a match in both tables based on the specified condition
                                    $prods = $db->select("SELECT p.productID, p.productName, p.price, p.stockQuantity, p.numSales, p.categoryID, p.imgURL, c.categoryName FROM Products p JOIN Categories c ON p.categoryID = c.categoryID");
                                    ?>
                                    <thead>
                                        <tr>
                                            <th>Product ID</th>
                                            <th>Preview</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Sales</th>
                                            <th>Category</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    # helper function to chooce unique color for each category
                                    function getCategoryColor($categoryName)
                                    {
                                        $hash = md5($categoryName);
                                        return '#' . substr($hash, 0, 6);
                                    }
                                    ?>
                                    <?php foreach ($prods as $row) : ?>

                                        <tbody>
                                            <tr>
                                                <td><span class="fw-bold"><?php echo $row['productID']; ?></span></td>
                                                <th><span><img src="<?php echo $row['imgURL']; ?>" alt=""></span></th>
                                                <td><span class="fw-bold"><?php echo $row['productName']; ?></span></td>
                                                <td><?php echo $row['price']; ?></td>
                                                <td><?php echo $row['stockQuantity']; ?></td>
                                                <td class="fw-bold"><?php echo $row['numSales']; ?></td>
                                                <td>

                                                    <div style="background-color: <?php echo getCategoryColor($row['categoryName']); ?>; padding: 5px; border-radius: 5px;"><?php echo $row['categoryName']; ?></div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php endforeach; ?>
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























<script src="../assets/js/main.js"></script>


<?php

include_once './../Shared/Footer.php';

?>