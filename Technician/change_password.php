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
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Change Password</li>
            </ol>

                  <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <!-- Change password form -->
          <form class="form-horizontal" action="change_password.php" method="post">
          	<div class="form-group">
              <label class="control-label col-sm-3">Employee ID:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="employeeID" required>
              </div>
            </div>
          	<div class="form-group">
              <label class="control-label col-sm-3">Old Password:</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" name="password" required>
              </div>
            </div>
            <div class="form-group">
          		<label class="control-label col-sm-3">New password:</label>
          		<div class="col-sm-9">
          			<input type="password" class="form-control" name="password1" required>
          		</div>
          	</div>
            <div class="form-group">
              <label class="control-label col-sm-3">Retype new password:</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" name="password2" required>
              </div>
            </div>
          	<div class="modal-footer">
	        	<input type="submit" class="btn btn-success" name="submit" value="Change password">
        	</div>

          <!--change password-->
          <?php

          $db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

          if(isset($_POST['submit'])) {

            $employeeID = $_POST['employeeID'];
            $password = $_POST['password'];
            $password1 = $_POST['password1'];
            $password2 = $_POST['password2'];

            if($password1 == $password2) {

              $sql = "UPDATE employees SET password = '$password1' WHERE employeeID = '$employeeID' AND password = '$password'";

              $result = mysqli_query($db, $sql);

              // header('Location: change_password.php');
            }

            else {
            //  echo "Passwords dont match";
              echo "<div class='alert alert-danger' role='alert'><strong>Passwords mismatch</strong> </div>";
            }

          }

          ?>
          
          </form>
        </div>
        
      </div>

        </div>
    </div>

<?php include'footer.php'; ?>