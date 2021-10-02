<?php include'header.php'; 

  // if (empty($_SESSION['phonenumber'])) {
  //   header('location: ../index.php');
  // }

?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <?php include'nav.php'; ?>

    <div class="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Add New Employee</li>
            </ol>

            <?php

                $db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

                if(isset($_POST['submit'])) {

                  $employeeID = $_POST['employeeID'];
                  $firstname = $_POST['firstname'];
                  $lastname = $_POST['lastname'];
                  $employeerole = $_POST['employee_role'];
                  $password = $_POST['password'];

                    $sql = "INSERT INTO employees(employeeID, firstname, lastname, employeerole, password) VALUES('$employeeID', '$firstname', '$lastname', '$employeerole', '$password')";

                    $result = mysqli_query($db, $sql);
                }
            ?>

        <!-- Modal content-->
      	<div class="modal-content">
        <div class="modal-body">
          <!-- Add Employee -->
          <form class="form-horizontal" action="add_employee.php" method="post">
          	<div class="form-group">
          		<label class="control-label col-sm-3">Employee ID:</label>
          		<div class="col-sm-9">
          			<input type="tel" class="form-control" name="employeeID" required>
          		</div>
          	</div>
          	<div class="form-group">
          		<label class="control-label col-sm-3">First Name:</label>
          		<div class="col-sm-9">
          			<input type="text" class="form-control" name="firstname" required>
          		</div>
          	</div>
            <div class="form-group">
              <label class="control-label col-sm-3">Last Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="lastname" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3">Employee Role:</label>
              <div class="col-sm-9">
                <select class="form-control" name="employee_role" id="sel1">
                  <option selected>Helpdesk</option>
                  <option>Technician</option> 
                </select>
              </div>
            </div>
          	<div class="form-group">
          		<label class="control-label col-sm-3">Password:</label>
          		<div class="col-sm-9">
          			<input type="password" class="form-control" name="password" required>
          		</div>
          	</div>
          	<div class="modal-footer">
	        	<input type="submit" class="btn btn-success" name="submit" value="Add Employee">
        	</div>
          </form>
        </div>
        
      </div>

        </div>
    </div>

<?php include'footer.php'; ?>