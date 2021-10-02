<?php 
$db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

$ThisID = $_GET['id'];


        $cc = "SELECT * FROM reservations WHERE ID = $ThisID ";
        $ccQ = mysqli_query($db, $cc);

        while($row = mysqli_fetch_array($ccQ, MYSQLI_ASSOC)) {

              $EntryID = $row['ID'];
              $PhoneNumber = $row['phonenumber'];
              $DeviceName = $row['devicename'];
              $DefectType = $row['defecttype'];
              $ReserveDate = $row['Reservation_date'];
              $Descr = $row['description'];

        }

?>


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
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-book"></i> Customer Reservation</div>
          <!-- <?php 

          	$_SESSION['kay'] = $EntryID;

           ?> -->
        <div class="card-body">
        </div>
        <form class="form-horizontal" action="update.php" method="POST">
            <div class="form-group">
              <label class="control-label col-sm-6">ID:</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" value="<?php echo $EntryID; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Phonenumber:</label>
              <div class="col-sm-9">
                <input type="tel" class="form-control" value="<?php echo $PhoneNumber; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Device Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo $DeviceName; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Defect Type:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo $DefectType; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Reservation Date:</label>
              <div class="col-sm-9">
                <input type="date" class="form-control" value="<?php echo $ReserveDate; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Description:</label>
              <div class="col-sm-9">
                <textarea  type="text" class="form-control" rows="4" value="<?php echo $Descr; ?>" disabled></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Amount to be paid(Tshs):</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" name="amount" required>
              </div>
            </div>
            <div class="modal-footer">
            <input type="submit" class="btn btn-success" name="submit" value="Submit">
            </div>
          </form>


      </div>
    </div>

    </div>
    

<?php include'footer.php'; ?>