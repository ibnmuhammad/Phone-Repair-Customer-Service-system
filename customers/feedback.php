<?php include'header.php'; 


?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include'nav.php'; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Feedback</li>
      </ol>
 		
      	<!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <!-- Feedback form -->
          <form class="form-horizontal" action="feedback.php" method="post">
          	<div class="form-group">
            <div class="form-group">
          		<label class="control-label col-sm-3">Name:</label>
          		<div class="col-sm-9">
          			<input type="text" class="form-control" name="name" required>
          		</div>
          	</div>
              <label class="control-label col-sm-3">Phone number:</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" name="phonenumber" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3">Comment:</label>
              <div class="col-sm-9">
                <textarea name="comment" class="form-control" rows="5"></textarea>
              </div>
            </div>
          	<div class="modal-footer">
	        	<input type="submit" class="btn btn-success" name="submit" value="Submit">
        	</div>
          </form>
        </div>
        
      </div>

      <?php

        $db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

        if(isset($_POST['submit'])) {

          $name = $_POST['name'];
          $phonenumber = $_POST['phonenumber'];
          $comment = $_POST['comment'];

            $sql = "INSERT INTO feedback(Name, Phonenumber, Comment) VALUES('$name', '$phonenumber', '$comment')";

            $result = mysqli_query($db, $sql);

        }

      ?>

    </div>
 </div>
 <?php include'footer.php'; ?>