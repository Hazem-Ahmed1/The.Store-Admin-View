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
                                    $cats = $db->select("SELECT * FROM Categories");
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
                        <h5 class="card-title">Add a new Product</h5>
                        <form class="row g-3" >
                            <div class="col-12">
                                <label for="productName" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="productName" name="productName" required>
                            </div>
                            <div class="col-12">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" id="description" name="description" minlength="30" required>
                            </div>
                            <div class="col-12">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" id="price" name="price" required min="1">
                            </div>
                            <div class="col-12">
                                <label for="stockQuantity" class="form-label">Stock Quantity</label>
                                <input type="number" class="form-control" id="stockQuantity" name="stockQuantity" min="1" required>
                            </div>
                            <div class="col-12">
                                <label for="categoryID" class="form-label">Category</label>
                                <select class="form-select" id="categoryID" name="categoryID">
                                    <?php foreach($cats as $cat) : ?>
                                    <!-- filling this list dynamically from available categories in the database -->
                                    <option value="<?php echo $cat["categoryID"];?>" style="font-size: 30;"><?php echo $cat['categoryName']; ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="col-12 btn btn-primary">Add New Product</button>
                            </div>
                        </form> <!-- form end-->

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