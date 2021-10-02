<?php include'header.php';
      include'nav.php';



?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <div class="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Profile</li>
            </ol>

                <?php 
                      $db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

                      $mobilenumber = $_SESSION['phonenumber'];


                      $jj = "SELECT * FROM customers WHERE phonenumber = $mobilenumber ";
                      $jjQ = mysqli_query($db, $jj);

                      while($row = mysqli_fetch_array($jjQ, MYSQLI_ASSOC)) {

                            $PhoneNumber = $row['phonenumber'];
                            $FirstName = $row['firstname'];
                            $LastName = $row['lastname'];
                            $Email = $row['email'];
                      }

              ?>

            <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <!-- My profile -->
          <form class="form-horizontal" action="index.php" method="post">
          	<div class="form-group">
          		<label class="control-label col-sm-3">Account</label>
          		<div class="col-sm-9">
          			<input type="text" class="form-control" value="<?php echo $PhoneNumber; ?>" disabled>
          		</div>
          	</div>
          	<div class="form-group">
          		<label class="control-label col-sm-3">First Name:</label>
          		<div class="col-sm-9">
          			<input type="text" class="form-control" value="<?php echo $FirstName; ?>" disabled>
          		</div>
          	</div>
          	<div class="form-group">
          		<label class="control-label col-sm-3">Last Name:</label>
          		<div class="col-sm-9">
          			<input type="text" class="form-control" value="<?php echo $LastName; ?>" disabled>
          		</div>
          	</div>
          	<div class="form-group">
          		<label class="control-label col-sm-3">Email:</label>
          		<div class="col-sm-9">
          			<input type="email" class="form-control" value="<?php echo $Email; ?>" disabled>
          		</div>
          	</div>
          	<div class="modal-footer">
        	</div>
          </form>
        </div>
        
      </div>

        </div>
    </div>

<?php include'footer.php'; ?>