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
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item active">Customers Feedback</li>
            </ol> -->

            <div class="container-fluid">
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-comments-o"></i> Customer Feedbacks</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Phone Number</th>
                  <th>Comment</th>
                  <th>View</th>
                </tr>
              </thead>
              <tbody>
              	<?php

              	$db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

              	$df = "SELECT * FROM feedback";

              	$datafetch = mysqli_query($db, $df);

              	while($row = mysqli_fetch_array($datafetch, MYSQLI_ASSOC)) {
              		echo "<tr><td>";
              		echo $row['Name'];
              		echo "</td><td>";
              		echo $row['Phonenumber'];
              		echo "</td><td>";
              		echo $row['Comment'];
                  echo "</td><td>";
                  echo "<a href='viewfb.php?feedback=".$row['ID']."' class='btn btn-success'>View</a>";
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