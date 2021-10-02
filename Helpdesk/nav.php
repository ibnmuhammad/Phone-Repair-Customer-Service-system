<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="new_reservation.php">Help desk</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="new_reservation.php">
            <i class="fa fa-fw fa-book"></i>
            <span class="nav-link-text">Customer Reservations</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="device_delivery.php">
            <i class="fa fa-fw fa-truck"></i>
            <span class="nav-link-text">Device Delivery</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="device_return.php">
            <i class="fa fa-fw fa-exchange"></i>
            <span class="nav-link-text">Device Return</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="customer_feedback.php">
            <i class="fa fa-fw fa-comments-o"></i>
            <span class="nav-link-text">Customer Feedbacks</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="change_password.php">
            <i class="fa fa-fw fa-lock"></i>
            <span class="nav-link-text">Change Password</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto"> 
        <li class="nav-item">
          <a class="nav-link">
            <i class="fa fa-fw fa-user"></i>
            <?php
              session_start();
              echo $_SESSION['phonenumber'];
            ?>

          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="../logout.php">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>