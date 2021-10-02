<?php include'header.php'; ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <?php include'nav.php'; ?>

    <div class="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Add New Employee</li>
            </ol>

        <!-- Modal content-->
      	<div class="modal-content">
        <div class="modal-body">
          <!-- Add Employee -->
          <form class="form-horizontal" action="add_employees.php" method="post">
          	<div class="form-group">
          		<label class="control-label col-sm-3">Employee ID:</label>
          		<div class="col-sm-9">
          			<input type="tel" class="form-control" name="employeeID" required>
          		</div>
          	</div>
          	<div class="form-group">
          		<label class="control-label col-sm-3">Employee Name:</label>
          		<div class="col-sm-9">
          			<input type="text" class="form-control" name="firstname" required>
          		</div>
          	</div>
          	<div class="form-group">
          		<label class="control-label col-sm-3">Employee Role:</label>
          		<div class="col-sm-9">
				  <label class="btn btn-secondary active">
				    <input type="radio" name="options" id="option1" autocomplete="off" checked> Help Desk
				  </label><br>
				  <label class="btn btn-secondary">
				    <input type="radio" name="options" id="option2" autocomplete="off"> Technician
				  </label>
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