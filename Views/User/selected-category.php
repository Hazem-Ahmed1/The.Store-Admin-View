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
    <div class="container">
      <div class="categoryCards row mt-5">
        <div class="sp-title">
          <h3>Our ELECTRONICS Collection</h3>
        </div>
        <div id="categoryCards-box" class="categoryCards-box row">
          <div class="my-card p-3 col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class=" p-3 rounded-3 d-flex flex-column justify-content-center align-items-center "
              style="background: #fff; border: 1px solid #cbd4d7;  ">
              <div class="img-box d-flex flex-column justify-content-center align-items-center "
                onclick="setPage('product', 9)" style="cursor: pointer; height:300px;">
                <img class="img-fluid pb-3" width="200px" style="max-height:300px;"
                  src="https://fakestoreapi.com/img/61IBBVJvSDL._AC_SY879_.jpg" alt="">
              </div>
              <div class="product-name">
                <h3 onclick="setPage('product', 9)" onmouseover="this.style.color='#0066ff'"
                  onmouseout="this.style.color='#1190c2'" style="cursor: pointer; color: #1190c2;">WD 2TB Elements
                  Portable External Hard Drive - USB 3.0 </h3>
                <p>USB 3.0 and USB 2.0 Compatibility Fast data transfers Improve PC Performance High Capacity;
                  Compatibility Formatted NTFS for Windows 10, Windows 8.1, Windows 7; Reformatting may be required for
                  other operating systems; Compatibility may vary depending on user’s hardware configuration and
                  operating
                  system
                </p>
              </div>
              <div class="price d-flex justify-content-between w-100">
                <div class="pr">$64 <del class="text-black-50 ">$104.00</del> </div>
                <div class="rate d-flex">
                  <li class="list-inline-item"><svg class="svg-inline--fa fa-star" style="color: #ffc000;"
                      aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                      <path fill="currentColor"
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                      </path>
                    </svg><!-- <i class="fa fa-star" style="color: #ffc000;"></i> Font Awesome fontawesome.com --></li>
                  <div class="rate-num">3.3</div>
                </div>
              </div>
            </div>
          </div>

          <div class="my-card p-3 col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class=" p-3 rounded-3 d-flex flex-column justify-content-center align-items-center "
              style="background: #fff; border: 1px solid #cbd4d7;  ">
              <div class="img-box d-flex flex-column justify-content-center align-items-center "
                onclick="setPage('product', 10)" style="cursor: pointer; height:300px;">
                <img class="img-fluid pb-3 hoverZoomLink" width="200px" style="max-height:300px;"
                  src="https://fakestoreapi.com/img/61U7T1koQqL._AC_SX679_.jpg" alt="">
              </div>
              <div class="product-name">
                <h3 onclick="setPage('product', 10)" onmouseover="this.style.color='#0066ff'"
                  onmouseout="this.style.color='#1190c2'" style="cursor: pointer; color: #1190c2;">SanDisk SSD PLUS 1TB
                  Internal SSD - SATA III 6 Gb/s</h3>
                <p>Easy upgrade for faster boot up, shutdown, application load and response (As compared to 5400 RPM
                  SATA
                  2.5” hard drive; Based on published specifications and internal benchmarking tests using PCMark
                  vantage
                  scores) Boosts burst write performance, making it ideal for typical PC workloads The perfect balance
                  of
                  performance and reliability Read/write speeds of up to 535MB/s/450MB/s (Based on internal testing;
                  Performance may vary depending upon drive capacity, host device, OS and application.)
                </p>
              </div>
              <div class="price d-flex justify-content-between w-100">
                <div class="pr">$109 <del class="text-black-50 ">$149.00</del> </div>
                <div class="rate d-flex">
                  <li class="list-inline-item"><svg class="svg-inline--fa fa-star" style="color: #ffc000;"
                      aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                      <path fill="currentColor"
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                      </path>
                    </svg><!-- <i class="fa fa-star" style="color: #ffc000;"></i> Font Awesome fontawesome.com --></li>
                  <div class="rate-num">2.9</div>
                </div>
              </div>
            </div>
          </div>

          <div class="my-card p-3 col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class=" p-3 rounded-3 d-flex flex-column justify-content-center align-items-center "
              style="background: #fff; border: 1px solid #cbd4d7;  ">
              <div class="img-box d-flex flex-column justify-content-center align-items-center "
                onclick="setPage('product', 11)" style="cursor: pointer; height:300px;">
                <img class="img-fluid pb-3" width="200px" style="max-height:300px;"
                  src="https://fakestoreapi.com/img/71kWymZ+c+L._AC_SX679_.jpg" alt="">
              </div>
              <div class="product-name">
                <h3 onclick="setPage('product', 11)" onmouseover="this.style.color='#0066ff'"
                  onmouseout="this.style.color='#1190c2'" style="cursor: pointer; color: #1190c2;">Silicon Power 256GB
                  SSD
                  3D NAND A55 SLC Cache Performance Boost SATA III 2.5</h3>
                <p>3D NAND flash are applied to deliver high transfer speeds Remarkable transfer speeds that enable
                  faster
                  bootup and improved overall system performance. The advanced SLC Cache Technology allows performance
                  boost and longer lifespan 7mm slim design suitable for Ultrabooks and Ultra-slim notebooks. Supports
                  TRIM command, Garbage Collection technology, RAID, and ECC (Error Checking &amp; Correction) to
                  provide
                  the optimized performance and enhanced reliability.
                </p>
              </div>
              <div class="price d-flex justify-content-between w-100">
                <div class="pr">$109 <del class="text-black-50 ">$149.00</del> </div>
                <div class="rate d-flex">
                  <li class="list-inline-item"><svg class="svg-inline--fa fa-star" style="color: #ffc000;"
                      aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                      <path fill="currentColor"
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                      </path>
                    </svg><!-- <i class="fa fa-star" style="color: #ffc000;"></i> Font Awesome fontawesome.com --></li>
                  <div class="rate-num">4.8</div>
                </div>
              </div>
            </div>
          </div>

          <div class="my-card p-3 col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class=" p-3 rounded-3 d-flex flex-column justify-content-center align-items-center "
              style="background: #fff; border: 1px solid #cbd4d7;  ">
              <div class="img-box d-flex flex-column justify-content-center align-items-center "
                onclick="setPage('product', 12)" style="cursor: pointer; height:300px;">
                <img class="img-fluid pb-3" width="200px" style="max-height:300px;"
                  src="https://fakestoreapi.com/img/61mtL65D4cL._AC_SX679_.jpg" alt="">
              </div>
              <div class="product-name">
                <h3 onclick="setPage('product', 12)" onmouseover="this.style.color='#0066ff'"
                  onmouseout="this.style.color='#1190c2'" style="cursor: pointer; color: #1190c2;">WD 4TB Gaming Drive
                  Works with Playstation 4 Portable External Hard Drive</h3>
                <p>Expand your PS4 gaming experience, Play anywhere Fast and easy, setup Sleek design with high
                  capacity,
                  3-year manufacturer's limited warranty
                </p>
              </div>
              <div class="price d-flex justify-content-between w-100">
                <div class="pr">$114 <del class="text-black-50 ">$154.00</del> </div>
                <div class="rate d-flex">
                  <li class="list-inline-item"><svg class="svg-inline--fa fa-star" style="color: #ffc000;"
                      aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                      <path fill="currentColor"
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                      </path>
                    </svg><!-- <i class="fa fa-star" style="color: #ffc000;"></i> Font Awesome fontawesome.com --></li>
                  <div class="rate-num">4.8</div>
                </div>
              </div>
            </div>
          </div>

          <div class="my-card p-3 col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class=" p-3 rounded-3 d-flex flex-column justify-content-center align-items-center "
              style="background: #fff; border: 1px solid #cbd4d7;  ">
              <div class="img-box d-flex flex-column justify-content-center align-items-center "
                onclick="setPage('product', 13)" style="cursor: pointer; height:300px;">
                <img class="img-fluid pb-3" width="200px" style="max-height:300px;"
                  src="https://fakestoreapi.com/img/81QpkIctqPL._AC_SX679_.jpg" alt="">
              </div>
              <div class="product-name">
                <h3 onclick="setPage('product', 13)" onmouseover="this.style.color='#0066ff'"
                  onmouseout="this.style.color='#1190c2'" style="cursor: pointer; color: #1190c2;">Acer SB220Q bi 21.5
                  inches Full HD (1920 x 1080) IPS Ultra-Thin</h3>
                <p>21. 5 inches Full HD (1920 x 1080) widescreen IPS display And Radeon free Sync technology. No
                  compatibility for VESA Mount Refresh Rate: 75Hz - Using HDMI port Zero-frame design | ultra-thin | 4ms
                  response time | IPS panel Aspect ratio - 16: 9. Color Supported - 16. 7 million colors. Brightness -
                  250
                  nit Tilt angle -5 degree to 15 degree. Horizontal viewing angle-178 degree. Vertical viewing angle-178
                  degree 75 hertz
                </p>
              </div>
              <div class="price d-flex justify-content-between w-100">
                <div class="pr">$599 <del class="text-black-50 ">$639.00</del> </div>
                <div class="rate d-flex">
                  <li class="list-inline-item"><svg class="svg-inline--fa fa-star" style="color: #ffc000;"
                      aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                      <path fill="currentColor"
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                      </path>
                    </svg><!-- <i class="fa fa-star" style="color: #ffc000;"></i> Font Awesome fontawesome.com --></li>
                  <div class="rate-num">2.9</div>
                </div>
              </div>
            </div>
          </div>

          <div class="my-card p-3 col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class=" p-3 rounded-3 d-flex flex-column justify-content-center align-items-center "
              style="background: #fff; border: 1px solid #cbd4d7;  ">
              <div class="img-box d-flex flex-column justify-content-center align-items-center "
                onclick="setPage('product', 14)" style="cursor: pointer; height:300px;">
                <img class="img-fluid pb-3" width="200px" style="max-height:300px;"
                  src="https://fakestoreapi.com/img/81Zt42ioCgL._AC_SX679_.jpg" alt="">
              </div>
              <div class="product-name">
                <h3 onclick="setPage('product', 14)" onmouseover="this.style.color='#0066ff'"
                  onmouseout="this.style.color='#1190c2'" style="cursor: pointer; color: #1190c2;">Samsung 49-Inch CHG90
                  144Hz Curved Gaming Monitor (LC49HG90DMNXZA) – Super Ultrawide Screen QLED </h3>
                <p>49 INCH SUPER ULTRAWIDE 32:9 CURVED GAMING MONITOR with dual 27 inch screen side by side QUANTUM DOT
                  (QLED) TECHNOLOGY, HDR support and factory calibration provides stunningly realistic and accurate
                  color
                  and contrast 144HZ HIGH REFRESH RATE and 1ms ultra fast response time work to eliminate motion blur,
                  ghosting, and reduce input lag
                </p>
              </div>
              <div class="price d-flex justify-content-between w-100">
                <div class="pr">$999.99 <del class="text-black-50 ">$1039.99</del> </div>
                <div class="rate d-flex">
                  <li class="list-inline-item"><svg class="svg-inline--fa fa-star" style="color: #ffc000;"
                      aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                      <path fill="currentColor"
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                      </path>
                    </svg><!-- <i class="fa fa-star" style="color: #ffc000;"></i> Font Awesome fontawesome.com --></li>
                  <div class="rate-num">2.2</div>
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