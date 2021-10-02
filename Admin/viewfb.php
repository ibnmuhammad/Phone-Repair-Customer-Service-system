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

  if (isset($_GET['feedback'])) {
    $id = $_GET['feedback'];

    $fb = "SELECT * FROM feedback WHERE ID = $id ";
                $fbQ = mysqli_query($db, $fb);

                while($row = mysqli_fetch_array($fbQ, MYSQLI_ASSOC)) {

                  $Name = $row['Name'];
                  $PhoneNumber = $row['Phonenumber'];
                  $Comment = $row['Comment'];
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
              <label class="control-label col-sm-6">Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php global $Name; echo $Name; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Phonenumber:</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" value="<?php global $PhoneNumber; echo $PhoneNumber; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Comment:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php global $Comment; echo $Comment; ?>" disabled>
              </div>
            </div>
            <div class="modal-footer">
            <a href="feedback.php" type="button" class="btn btn-danger">Close</a>
            </div>

    
          </form>

        </div>
    </div>

<?php include'footer.php'; ?>