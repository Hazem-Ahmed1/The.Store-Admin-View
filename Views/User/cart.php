<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once 'Shared/head-code.php' ?>
</head>

<body>
  <!-- ======= header ======= -->
  <?php
  include_once "Shared/header.php"
  ?>
  <!-- End header -->

  <div class="page-container container-fluid ">
    <section class="h-100 gradient-custom">
      <div class="container py-5">
        <div class="row d-flex justify-content-center my-4">
          <div class="col-md-8">
            <div class="card mb-4">
              <div class="card-header py-3">
                <h5 class="mb-0">Cart - 2 items</h5>
              </div>
              <div class="card-body">
                <!-- Single item -->
                <div class="row">
                  <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                    <!-- Image -->
                    <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                      <img src="https://fakestoreapi.com/img/71pWzhdJNwL._AC_UL640_QL65_ML3_.jpg" class="w-100 alt="
                        Blue Jeans Jacket />
                    </div>
                    <!-- Image -->
                  </div>

                  <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                    <!-- Data -->
                    <p><strong>Red hoodie</strong></p>
                    <p>Delivery - next day</p>
                    <p class="fw-bold" style="color: var(--main-color);">
                      <i class="fa fa-check"></i> In Stoke
                    </p>
                    <button type="button" class="btn btn-danger btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                      title="Remove item">
                      <i class="fas fa-trash"></i>
                    </button>
                    <!-- Data -->
                  </div>

                  <div
                    class="col-lg-4 col-md-6 mb-4 mb-lg-0 d-flex flex-column justify-content-center align-items-center ">
                    <!-- Quantity -->
                    <div class="d-flex mb-4" style="max-width: 300px">
                      <button class="btn btn-primary px-3 me-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="fas fa-minus"></i>
                      </button>

                      <div class="form-outline">
                        <!--  -->
                        <input id="form1" min="1" max="10" name="quantity" value="1" type="number"
                          class="form-control" />
                        <label class="form-label" for="form1">Quantity</label>
                      </div>

                      <button class="btn btn-primary px-3 ms-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- Quantity -->

                    <!-- Price -->
                    <p class="text-start text-md-center">
                      <strong>$17.99</strong>
                    </p>
                    <!-- Price -->
                  </div>
                </div>
                <!-- Single item -->

                <hr class="my-4" />

                <!-- Single item -->
                <div class="row">
                  <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                    <!-- Image -->
                    <div class="">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.webp"
                        class="w-100" />
                    </div>
                    <!-- Image -->
                  </div>

                  <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                    <!-- Data -->
                    <p><strong>Red hoodie</strong></p>
                    <p>Delivery - next day</p>
                    <p class="fw-bold text-danger">
                      <i class="fa fa-times "></i> out of Stoke
                    </p>
                    <button type="button" class="btn btn-danger btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                      title="Remove item">
                      <i class="fas fa-trash"></i>
                    </button>
                    <!-- Data -->
                  </div>

                  <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 d-flex justify-content-center align-items-center ">
                    <!-- Quantity -->
                    <!-- <div class="d-flex mb-4" style="max-width: 300px">
                      <button class="btn btn-primary px-3 me-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="fas fa-minus"></i>
                      </button>

                      <div class="form-outline">
                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control" />
                        <label class="form-label" for="form1">Quantity</label>
                      </div>

                      <button class="btn btn-primary px-3 ms-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div> -->
                    <!-- Quantity -->

                    <!-- Price -->
                    <p class="text-start text-md-center">
                      <strong>$17.99</strong>
                    </p>
                    <!-- Price -->
                  </div>
                </div>
                <!-- Single item -->
              </div>
            </div>

            <div class="card mb-4 mb-lg-0">
              <div class="card-body">
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="promoCode" class="form-label">Enter Promo Code</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="promoCode" placeholder="Enter your promo code">
                      <button class="btn btn-primary" type="button" id="applyPromoCode">Apply</button>
                    </div>
                  </div>
                </div>
                <hr>
                <p><strong>We accept</strong></p>
                <img class="me-2" width="45px"
                  src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                  alt="Visa" />
                <img class="me-2" width="45px"
                  src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                  alt="American Express" />
                <img class="me-2" width="45px"
                  src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                  alt="Mastercard" />
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-header py-3">
                <h5 class="mb-0">Summary</h5>
              </div>
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    Products
                    <span>2</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    Total Price
                    <span>+ $55.00</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    Promo Code Discount
                    <span>- $5</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    Shop Discount
                    <span>- $15</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                    Shipping
                    <span>Free</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                    <div>
                      <strong>Total amount</strong>
                      <strong>
                        <p class="mb-0">(including VAT)</p>
                      </strong>
                    </div>
                    <span><strong>$35.00</strong></span>
                  </li>
                </ul>

                <!-- <button type="button" class="btn btn-primary btn-lg btn-block">
                  Go to checkout
                </button> -->
                <a href="checkout.html" class="btn btn-primary btn-lg btn-block">Go to checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- ======= footer ======= -->
  <?php
  include_once "Shared/footer.php"
  ?>
  <!-- End footer -->

  <script src="./../../assets/js/all.min.js"></script>
  <script src="./../../assets/js/bootstrap.bundle.min.js"> </script>
</body>

</html>