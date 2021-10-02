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
                <li class="breadcrumb-item active">All Employees</li>
            </ol> -->
            
      <div class="container-fluid">
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> All employees</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Employee ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Employee Role</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              	<?php

              	$db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

              	$df = "SELECT * FROM employees";

              	$datafetch = mysqli_query($db, $df);

              	while($row = mysqli_fetch_array($datafetch, MYSQLI_ASSOC)) {
              		echo "<tr><td>";
              		echo $row['employeeID'];
              		echo "</td><td>";
              		echo $row['firstname'];
              		echo "</td><td>";
              		echo $row['lastname'];
              		echo "</td><td>";
              		echo $row['employeerole'];
                  echo "</td><td>";
                  echo "<a href='employee.php?employee=".$row['employeeID']."' class='btn btn-danger'>Delete</a>";
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