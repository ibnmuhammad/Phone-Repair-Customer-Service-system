<?php include'header.php'; 

// if (empty($_SESSION['phonenumber'])) {
//     header('location: ../index.php');
//   }

?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <?php include'nav.php'; ?>

    <?php
	$db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

	if (isset($_GET['feedback'])) {
		$id = $_GET['feedback'];

		$ff = "SELECT * FROM feedback WHERE ID = $id ";
                $ffQ = mysqli_query($db, $ff);

                while($row = mysqli_fetch_array($ffQ, MYSQLI_ASSOC)) {

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

            <form class="form-horizontal" action="reply_feedback.php" method="POST">
            <div class="form-group">
              <label class="control-label col-sm-6">Reply:</label>
              <div class="col-sm-9">
                <!-- <input type="text" class="form-control" name="reply" required> -->
                <textarea  type="text" class="form-control" rows="4" required></textarea
              </div>
            </div>
            <div class="modal-footer">
            <input type="submit" class="btn btn-success" name="reply" value="Submit">
            </div>
          </form>

            <?php
            $db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

            if (isset($_POST['reply'])) {

              $reply = $_POST['reply'];
              global $id;
              
              
              $rp = "UPDATE feedback SET reply = $reply WHERE ID = $id ";
              $rpy = mysqli_query($db, $rp);


            if (!$rpy) {
              die(mysqli_error($db));
            }else
            {
              header('Location: customer_feedback.php');
            }

            }



            ?>

        </div>
    </div>

<?php include'footer.php'; ?>