<?php
include'header.php';


?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  
  <!-- Navigation-->
<?php include'nav.php'; ?>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Make New Reservation</li>
      </ol>

          <?php

                $db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

                if(isset($_POST['submit'])) {

                  $phonenumber = $_POST['phonenumber'];
                  $device_name = $_POST['devicename'];
                  $defect_type = $_POST['defecttype'];
                  $reservation_date = $_POST['reservationdate'];
                  $description = $_POST['description'];

                    $sql = "INSERT INTO reservations(phonenumber, devicename, defecttype, Reservation_date, description) VALUES('$phonenumber', '$device_name', '$defect_type', '$reservation_date', '$description')";

                    $result = mysqli_query($db, $sql);

                    if(!$result) {
                      die(mysqli_error($db));
                    }

                }
          ?>


    <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <!-- Reservation form -->
          <form class="form-horizontal" action="new_reservation.php" method="POST">
          	<div class="form-group">
              <label class="control-label col-sm-3">Phone number:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="phonenumber" required>
              </div>
            </div>
            <div class="form-group">
          		<label class="control-label col-sm-3">Device name:</label>
          		<div class="col-sm-9">
          			<input type="text" class="form-control" name="devicename" required>
          		</div>
          	</div>
          	<div class="form-group">
          		<label class="control-label col-sm-3">Defect type:</label>
          		<div class="col-sm-9">
          			<select class="form-control" name="defecttype" id="sel1">
                  <option selected>Unknown</option>
                  <option>Application</option>
                  <option>Audio</option>
                  <option>Camera</option>
                  <option>Charging/Battery</option>
                  <option>Connectivity</option>
                  <option>Display</option>
                  <option>Keypad</option>
                  <option>Mechanics</option>
                  <option>Memory</option>
                  <option>Microphone</option>
                  <option>Power</option>
                  <option>Slim</option>
                  <option>Speaker</option>  
                </select>
          		</div>
          	</div>
            <div class="form-group">
              <label class="control-label col-sm-3">Reservation Date:</label>
              <div class="col-sm-9">
                <input type="date" class="form-control" name="reservationdate">
              </div>
            </div>
          	<div class="form-group">
          		<label class="control-label col-sm-3">Description:</label>
          		<div class="col-sm-9">
          			<textarea name="description" class="form-control" rows="5"></textarea>
          		</div>
          	</div>
          	<div class="modal-footer">
	        	<input type="submit" class="btn btn-success" name="submit" value="Make new reservation">
        	</div>
          </form>
        </div>
        
      </div>
    </div>
 </div>

<?php include'footer.php'; ?>