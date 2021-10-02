<?php include'header.php'; 


?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include'nav.php'; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Payments</li>
      </ol>

      <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Disp</th>
                  <th>Amount</th>
                  <th>Amount</th>
                  <th>Amount</th>
                </tr>
              </thead>
              <tbody>

      <?php


               

      	$db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

                
                // $id = $_GET['confirm'];

                 if (isset($_GET['confirm'])) {
		             $id = $_GET['confirm'];

                $df = "SELECT * FROM reservations WHERE ID=15";



              

                        $datafetch = mysqli_query($db, $df);

                while ($row = mysqli_fetch_array($datafetch, MYSQLI_ASSOC)) {
                  echo "<tr><td>";
                  echo $row['ID'];
                  echo "</td><td>";
                  // echo $row['devicename'];
                  // echo "</td><td>";
                  echo $row['defecttype'];
                  echo "</td><td>";
                  echo $row['Reservation_date'];
                  echo "</td><td>";
                  echo $row['Amount_to_be_paid'];
                  echo "</td><td>";
                  echo $row['Reservation_approval'];
                  echo "</td><td>";
                  // echo "<a href='confirm.php?confirm=".$row['ID']."' class='btn btn-success'>Confirm</a>";
                  echo "</td></tr>";
        }         } 
      ?>

  </tbody>

           
   </table>


          </div>
        
    </div>
 </div>
 <?php include'footer.php'; ?>