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
    <div id="myProduct-box" class="myProduct pt-2 mt-5">
      <div class="row justify-content-center">
        <div class="py-3 prod-img col-12 col-md-4 col-lg-4 d-flex justify-content-center align-items-center">
          <img class="img-fluid w-100 " style="max-width: 300px;max-height: 350px;"
            src="https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg" alt="">
        </div>
        <div class="py-3 prod-img col-12 col-sm-6 col-md-4 col-lg-4 d-flex flex-column justify-content-evenly">
          <h2 style="color:var(--main-color);font-weight: bold;">Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops
          </h2>
          <h5 class="text-black-50 product-desc">Your perfect pack for everyday use and walks in the forest. Stash your
            laptop (up to 15 inches) in the padded sleeve, your everyday</h5>
          <p class="text-black-50 pt-2"><span class="text-black fw-bold">Category: </span><a id="cate-link" href="#"
              class="text-warning ">men's clothing</a></p>
        </div>
        <div class="py-3 prod-price  col-12 col-sm-6 col-md-4 col-lg-4 d-flex align-items-center">
          <div class="w-100 p-3 rounded-3 d-flex flex-column justify-content-center"
            style="background: #fff; border: 2px solid var(--main-color);  ">
            <div class="price d-flex flex-column justify-content-between align-items-center w-100 ">
              <h4 class="fw-bold">Add To Cart</h4>
              <h4 class="fw-bold">$109.95</h4>
              <h5 class="text-danger "><del class="text-black-50 ">$149.95</del> ( $40 off )</h5>
            </div>
            <a class="product-btn my-2" href="#">Add to cart</a>
            <div class=" d-flex justify-content-between align-items-center w-100">
              <div class="fw-bold" style="color: var(--main-color);">
                <svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                  data-fa-i2svg="">
                  <path fill="currentColor"
                    d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                  </path>
                </svg><!-- <i class="fa fa-check"></i> Font Awesome fontawesome.com --> In Stoke
              </div>
              <div class="rate d-flex my-2">
                <li class="list-inline-item">
                  <svg class="svg-inline--fa fa-star" style="color: #ffc000;" aria-hidden="true" focusable="false"
                    data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 576 512" data-fa-i2svg="">
                    <path fill="currentColor"
                      d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                    </path>
                  </svg><!-- <i class="fa fa-star" style="color: #ffc000;"></i> Font Awesome fontawesome.com -->
                </li>
                <div class="rate-num">3.9</div>
              </div>
            </div>
            <div class="delvery text-black-50 text-start ">
              <p>Number of sales :<span class="text-black"> 120</span></p>
              <p>Delivery - next day</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="categoryCards row mt-5">
        <div class="sp-title">
          <h3> Related Products </h3>
        </div>
        <div id="categoryCards-box" class="categoryCards-box row">
          <div class="my-card p-3 col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class=" p-3 rounded-3 d-flex flex-column justify-content-center align-items-center "
              style="background: #fff; border: 1px solid #cbd4d7;  ">
              <div class="img-box d-flex flex-column justify-content-center align-items-center "
                onclick="setPage('product', 1)" style="cursor: pointer; height:300px;">
                <img class="img-fluid pb-3" width="200px" style="max-height:300px;"
                  src="https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg" alt="">
              </div>
              <div class="product-name">
                <h3 onclick="setPage('product', 1)" onmouseover="this.style.color='#0066ff'"
                  onmouseout="this.style.color='#1190c2'" style="cursor: pointer; color: #1190c2;">Fjallraven - Foldsack
                  No. 1 Backpack, Fits 15 Laptops</h3>
                <p>Your perfect pack for everyday use and walks in the forest. Stash your laptop (up to 15 inches) in
                  the
                  padded sleeve, your everyday
                </p>
              </div>
              <div class="price d-flex justify-content-between w-100">
                <div class="pr">$109.95 <del class="text-black-50 ">$149.95</del> </div>
                <div class="rate d-flex">
                  <li class="list-inline-item"><svg class="svg-inline--fa fa-star" style="color: #ffc000;"
                      aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                      <path fill="currentColor"
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                      </path>
                    </svg><!-- <i class="fa fa-star" style="color: #ffc000;"></i> Font Awesome fontawesome.com --></li>
                  <div class="rate-num">3.9</div>
                </div>
              </div>
            </div>
          </div>

          <div class="my-card p-3 col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class=" p-3 rounded-3 d-flex flex-column justify-content-center align-items-center "
              style="background: #fff; border: 1px solid #cbd4d7;  ">
              <div class="img-box d-flex flex-column justify-content-center align-items-center "
                onclick="setPage('product', 2)" style="cursor: pointer; height:300px;">
                <img class="img-fluid pb-3" width="200px" style="max-height:300px;"
                  src="https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg" alt="">
              </div>
              <div class="product-name">
                <h3 onclick="setPage('product', 2)" onmouseover="this.style.color='#0066ff'"
                  onmouseout="this.style.color='#1190c2'" style="cursor: pointer; color: #1190c2;">Mens Casual Premium
                  Slim Fit T-Shirts </h3>
                <p>Slim-fitting style, contrast raglan long sleeve, three-button henley placket, light weight &amp; soft
                  fabric for breathable and comfortable wearing. And Solid stitched shirts with round neck made for
                  durability and a great fit for casual fashion wear and diehard baseball fans. The Henley style round
                  neckline includes a three-button placket.
                </p>
              </div>
              <div class="price d-flex justify-content-between w-100">
                <div class="pr">$22.3 <del class="text-black-50 ">$62.30</del> </div>
                <div class="rate d-flex">
                  <li class="list-inline-item"><svg class="svg-inline--fa fa-star" style="color: #ffc000;"
                      aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                      <path fill="currentColor"
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                      </path>
                    </svg><!-- <i class="fa fa-star" style="color: #ffc000;"></i> Font Awesome fontawesome.com --></li>
                  <div class="rate-num">4.1</div>
                </div>
              </div>
            </div>
          </div>

          <div class="my-card p-3 col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class=" p-3 rounded-3 d-flex flex-column justify-content-center align-items-center "
              style="background: #fff; border: 1px solid #cbd4d7;  ">
              <div class="img-box d-flex flex-column justify-content-center align-items-center "
                onclick="setPage('product', 3)" style="cursor: pointer; height:300px;">
                <img class="img-fluid pb-3" width="200px" style="max-height:300px;"
                  src="https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg" alt="">
              </div>
              <div class="product-name">
                <h3 onclick="setPage('product', 3)" onmouseover="this.style.color='#0066ff'"
                  onmouseout="this.style.color='#1190c2'" style="cursor: pointer; color: #1190c2;">Mens Cotton Jacket
                </h3>
                <p>great outerwear jackets for Spring/Autumn/Winter, suitable for many occasions, such as working,
                  hiking,
                  camping, mountain/rock climbing, cycling, traveling or other outdoors. Good gift choice for you or
                  your
                  family member. A warm hearted love to Father, husband or son in this thanksgiving or Christmas Day.
                </p>
              </div>
              <div class="price d-flex justify-content-between w-100">
                <div class="pr">$55.99 <del class="text-black-50 ">$95.99</del> </div>
                <div class="rate d-flex">
                  <li class="list-inline-item"><svg class="svg-inline--fa fa-star" style="color: #ffc000;"
                      aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                      <path fill="currentColor"
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                      </path>
                    </svg><!-- <i class="fa fa-star" style="color: #ffc000;"></i> Font Awesome fontawesome.com --></li>
                  <div class="rate-num">4.7</div>
                </div>
              </div>
            </div>
          </div>

          <div class="my-card p-3 col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class=" p-3 rounded-3 d-flex flex-column justify-content-center align-items-center "
              style="background: #fff; border: 1px solid #cbd4d7;  ">
              <div class="img-box d-flex flex-column justify-content-center align-items-center "
                onclick="setPage('product', 4)" style="cursor: pointer; height:300px;">
                <img class="img-fluid pb-3" width="200px" style="max-height:300px;"
                  src="https://fakestoreapi.com/img/71YXzeOuslL._AC_UY879_.jpg" alt="">
              </div>
              <div class="product-name">
                <h3 onclick="setPage('product', 4)" onmouseover="this.style.color='#0066ff'"
                  onmouseout="this.style.color='#1190c2'" style="cursor: pointer; color: #1190c2;">Mens Casual Slim Fit
                </h3>
                <p>The color could be slightly different between on the screen and in practice. / Please note that body
                  builds vary by person, therefore, detailed size information should be reviewed below on the product
                  description.
                </p>
              </div>
              <div class="price d-flex justify-content-between w-100">
                <div class="pr">$15.99 <del class="text-black-50 ">$55.99</del> </div>
                <div class="rate d-flex">
                  <li class="list-inline-item"><svg class="svg-inline--fa fa-star" style="color: #ffc000;"
                      aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                      <path fill="currentColor"
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                      </path>
                    </svg><!-- <i class="fa fa-star" style="color: #ffc000;"></i> Font Awesome fontawesome.com --></li>
                  <div class="rate-num">2.1</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ======= footer ======= -->
  <?php
  include_once "Shared/footer.php"
  ?>
  <!-- End footer -->

  <script src="./../../assets/js/all.min.js"></script>
  <script src="./../../assets/js/bootstrap.bundle.min.js"> </script>
  <!-- <script src="js/main.js"> </script> -->
</body>


</html>