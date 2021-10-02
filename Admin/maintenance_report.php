<?php include'header.php'; 

// if (empty($_SESSION['phonenumber'])) {
//     header('location: ../index.php');
//   }

?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <?php include'nav.php'; ?>

    <div class="content-wrapper">
            <div class="container-fluid">
      <!-- Maintenance Reports-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-comments-o"></i> Maintenance Reports</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Device ID</th>
                  <th>Phone Number</th>
                  <th>Device Name</th>
                  <th>Defect Type</th>
                  <th>Amount Charged</th>
                  <th>View</th>
                </tr>
              </thead>
              <tbody>
              	<?php

              	$db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

              	$df = "SELECT * FROM reservations";

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
              		echo $row['Amount_to_be_paid'];
                  echo "</td><td>";
                  echo "<a href='viewrpt.php?report=".$row['ID']."' class='btn btn-success'>View</a>";
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
    </div>

<?php include'footer.php'; ?>