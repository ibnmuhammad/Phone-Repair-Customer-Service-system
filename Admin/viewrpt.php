<?php include'header.php'; 

// if (empty($_SESSION['phonenumber'])) {
//     header('location: ../index.php');
//   }

?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <?php include 'nav.php'; ?>
    <?php
  $db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

  if (isset($_GET['report'])) {
    $id = $_GET['report'];

    $rpt = "SELECT * FROM reservations WHERE ID = $id ";
                $rptQ = mysqli_query($db, $rpt);

                while($row = mysqli_fetch_array($rptQ, MYSQLI_ASSOC)) {

                  $DeviceID = $row['ID'];
                  $PhoneNumber = $row['phonenumber'];
                  $devicename = $row['devicename'];
                  $defecttype = $row['defecttype'];
                  $amount = $row['Amount_to_be_paid'];
            }


}

?>

      <div class="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Customer Feedback</li>
            </ol>

            <form class="form-horizontal" action="#" method="POST">
            <div class="form-group">
              <label class="control-label col-sm-6">DeviceID:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php global $DeviceID; echo $DeviceID; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Phonenumber:</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" value="<?php global $PhoneNumber; echo $PhoneNumber; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Device Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php global $devicename; echo $devicename; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Defect Type:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php global $defecttype; echo $defecttype; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Amount Charged:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php global $amount; echo $amount; ?>" disabled>
              </div>
            </div>
            <div class="modal-footer">
            <a href="maintenance_report.php" type="button" class="btn btn-danger">Close</a>
            </div>

    
          </form>

        </div>
    </div>

<?php include'footer.php'; ?>