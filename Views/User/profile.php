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
    <div class="container mt-5">
      <div class="row justify-content-between">
        <div class="col-12 my-3">
          <!-- User Information -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">User Information</h4>
              <p class="card-text"><strong>Username</strong>: JohnDoe</p>
              <p class="card-text"><strong>Email</strong>: john@example.com</p>
              <p class="card-text"><strong>Phone</strong>: 01154897856</p>
              <!-- Add more user information here -->
            </div>
          </div>
        </div>

        <div class="col-12 my-3">
          <!-- Last Orders Table -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Last Orders</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Order Code</th>
                    <th>Order Date</th>
                    <th>Total Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>54891</td>
                    <td>2023-01-01</td>
                    <td>$50.00</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>54892</td>
                    <td>2023-02-05</td>
                    <td>$30.50</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>54892</td>
                    <td>2023-02-05</td>
                    <td>$30.50</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>54892</td>
                    <td>2023-02-05</td>
                    <td>$30.50</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>54892</td>
                    <td>2023-02-05</td>
                    <td>$30.50</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>54892</td>
                    <td>2023-02-05</td>
                    <td>$30.50</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>54892</td>
                    <td>2023-02-05</td>
                    <td>$30.50</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>54892</td>
                    <td>2023-02-05</td>
                    <td>$30.50</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>54892</td>
                    <td>2023-02-05</td>
                    <td>$30.50</td>
                  </tr>
                  <!-- Add more rows for additional orders -->
                </tbody>
              </table>
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