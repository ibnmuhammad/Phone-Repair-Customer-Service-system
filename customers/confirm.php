<?php include'header.php';
      include'nav.php';


?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->

  <div class="content-wrapper">
  	<div class="container-fluid">

  								<?php

  								$db = mysqli_connect('localhost', 'root', '1234', 'carlcare');


  								if (isset($_GET['confirm'])) {
  									$id = $_GET['confirm'];

  									$sql = "UPDATE reservations SET Reservation_approval = 'Confirmed' WHERE ID = $id";
  									$sqly = mysqli_query($db, $sql);


  									if($db->query($sql)==TRUE){


  										$cc = "SELECT * FROM reservations WHERE ID = $id ";
								        $ccQ = mysqli_query($db, $cc);

								        while($row = mysqli_fetch_array($ccQ, MYSQLI_ASSOC)) {

								              $EntryID = $row['ID'];
								              $PhoneNumber = $row['phonenumber'];
								              $DeviceName = $row['devicename'];
								              $DefectType = $row['defecttype'];
								              $ReserveDate = $row['Reservation_date'];
								              $Descr = $row['description'];
								              $amount = $row['Amount_to_be_paid'];
  										}         
								          } 
								          }
  										?>


  	<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-book"></i> Payments details</div>
          <!-- <?php 

          	$_SESSION['kay'] = $EntryID;

           ?> -->
        <div class="container col-md-12">
        <form class="form-horizontal" action="update.php" method="POST">
            <div class="form-group">
              <label class="control-label col-sm-6">ID:</label>
              <div class="col-sm-5">
                <input type="number" class="form-control" value="<?php echo $EntryID; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Phonenumber:</label>
              <div class="col-sm-5">
                <input type="tel" class="form-control" value="<?php echo $PhoneNumber; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Device Name:</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" value="<?php echo $DeviceName; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Defect Type:</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" value="<?php echo $DefectType; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Reservation Date:</label>
              <div class="col-sm-5">
                <input type="date" class="form-control" value="<?php echo $ReserveDate; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Amount to be paid(Tshs):</label>
              <div class="col-sm-5">
                <input type="number" class="form-control" value="<?php echo$amount; ?>" disabled>
              </div>
            </div>
          </form>
        

			<div class="container col-md-12">
				<h2> Payment Informations</h2>

				<p>Kwa Tigo Pesa: </p>
				<p>Namba Ya Kampuni: <strong>+255719233813</strong></p>
				<p>Namba Kumbukumbu #: <strong><?php echo $_SESSION['phonenumber']; ?></strong></p>

               <button class="btn btn-success hidden-print" onclick="myFunction()" style="float: right" ><i class="fa fa-print"></i> Print</button>
			</div>

      </div>


		</div>
  	</div>
  				
      <script>
  function myFunction() {
    window.print();
}
</script>
 <?php include'footer.php'; ?>