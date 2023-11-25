<?php
require_once './../Shared/Links.php';
require_once './../Shared/Header.php';
require_once './../Shared/Sidebar.php';
require_once __DIR__ . "../../Models/DBManager.php";
?>








<main id="main" class="main">

    <div class="pagetitle">
        <h1>Promocodes</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <?php 
        global $db;
        $db = DBManager::getInstance();
        $promos = $db->select("SELECT * FROM Promocode");
        function deletePromoCode($promoCode) {
            global $db;
            $db->delete("Promocode", $promoCode);
        }
        // Check for form submission for deletion
        if(isset($_POST["promoCode"])) {
            $promoCodeToDelete = $_POST['promoCode'];
            deletePromoCode($promoCodeToDelete);
            
            // Free up the $_POST array
            unset($_POST["promoCode"]);
        }
        ?>
        <div class="row">
            <!-- Top Selling -->
            <div class="col-12">
                <div class="card top-selling overflow-auto">
                    <div class="card-body pb-0">
                        <h5 class="card-title">Promo Codes</span></h5>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Promocode</th>
                                    <th>State</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($promos)) { 
                                    foreach ($promos as $promo) : ?>
                                <tr>
                                    <td><span class="fw-bold"><?php echo $promo["promocode"]?></span></td>
                                    <td><?php echo $promo["discount"]?> %</td>
                                    <td>
                                    <form action="" method="post">
                                        <input type="hidden" name="promoCode" value="<?php echo $promo["promocode"] ?>">
                                        <button type="submit" class="btn btn-danger"> <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                      
                                    </td>
                                </tr>
                                <?php endforeach; } 
                                else {
                                    echo '<h2 style="background-color: red; color: white; padding: 5px; border-radius: 5px;">No promocodes available</h2>';
                                }?>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div><!-- End Top Selling -->

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <img src="./../assets/img/DISCOUNT_TACTICS_NEW_COLOURS_FOR_VANESSA.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Add a Promocode</h5>
                                <form class="row g-3">
                                    <div class="col-12">
                                        <label for="cat_name" class="form-label">Code</label>
                                        <input type="text" class="form-control" id="cat_name">
                                    </div>
                                    <div class="col-12">
                                        <label for="img_url" class="form-label">Discount percentage</label>
                                        <input type="range" min="0" max="100" value="0"  class="form-range"  id="discountRange">
                                        <center><span id="discountValue" style="font-size: 70px;">0%</span><i class="fa-solid fa-tag fa-2xl" style="color: #cf3a50;" "></i> </center>
                                        <script>
                                            var discountRange = document.getElementById("discountRange");
                                            var discountValueSpan = document.getElementById('discountValue');
                                            discountRange.addEventListener('input', function(){
                                                discountValueSpan.textContent = discountRange.value+"%"; 
                                            });
                                        </script>

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

















<script src="../assets/js/main.js"></script>


<?php

include_once './../Shared/Footer.php';

?>