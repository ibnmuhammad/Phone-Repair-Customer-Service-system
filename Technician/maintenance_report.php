<?php include'header.php';
       

  // if (empty($_SESSION['employeeID'])) {
  //   header('location: ../index.php');
  // }

?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->

    <?php include'nav.php'; ?>

    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-book"></i> Maintenance Report</div>
        <div class="card-body">
        </div>
        <form class="form-horizontal" action="maintenance_report.php" method="POST">
            <div class="form-group">
              <label class="control-label col-sm-6">Device ID:</label>
              <div class="col-sm-9">
                <input type="number" name="id" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Phonenumber:</label>
              <div class="col-sm-9">
                <input type="tel" name="phonenumber" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Device Name:</label>
              <div class="col-sm-9">
                <input type="text" name="devicename" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Defect Type:</label>
              <div class="col-sm-9">
                <input type="text" name="defecttype" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Tools used</label>
              <div class="col-sm-9">
                <textarea name="tools" class="form-control" rows="5"></textarea>
              </div>
            </div>
            <div class="modal-footer">
            <input type="submit" class="btn btn-success" name="upd" value="Submit">
            </div>
          </form>


      </div>

            <?php

            $db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

            if (isset($_POST['upd'])) {

              $id = $_POST['id'];
              $PhoneNumber = $_POST['phonenumber'];
              $DeviceName = $_POST['devicename'];
              $DefectType = $_POST['defecttype'];
              $Tools = $_POST['tools'];
              
              $dfd = "INSERT INTO reports(DeviceID, phonenumber, devicename, defecttype, tools) VALUES('$id', '$PhoneNumber', '$DeviceName', '$DefectType', '$Tools')";

              $sqly = mysqli_query($db, $dfd);


            if (!$sqly) {
              die(mysqli_error($db));
            }else
            {
              header('Location: collected_phones.php');
            }

            }
            ?>	

        </div>
    </div>

<?php include'footer.php'; ?>