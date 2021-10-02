<?php include'header.php'; ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <?php include'nav.php'; ?>

    <div class="content-wrapper">

      <div class="container-fluid">
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-book"></i> Customer Reservations</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Phone Number</th>
                  <th>Device Name</th>
                  <th>Defect Type</th>
                  <th>Reservation Date</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
              	<?php

              	$db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

              	$df = ("SELECT * FROM reservations WHERE Status = 'Approved'");

              	$datafetch = mysqli_query($db, $df);

              	while($row = mysqli_fetch_array($datafetch, MYSQLI_ASSOC)) {
              		echo "<tr><td>";
              		echo $row['ID'];
              		echo "</td><td>";
              		echo $row['phonenumber'];
              		echo "</td><td>";
              		echo $row['devicename'];
              		echo "</td><td>";
              		echo $row['defecttype'];
              		echo "</td><td>";
              		echo $row['Reservation_date'];
              		echo "</td><td>";
              		echo $row['description'];
              		echo "</td></tr>";
              	}

              	?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    </div>

<?php include'footer.php'; ?>