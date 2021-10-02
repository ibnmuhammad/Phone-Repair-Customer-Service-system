<?php include'header.php'; 

// if (empty($_SESSION['phonenumber'])) {
//     header('location: ../index.php');
//   }

?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <?php include'nav.php'; ?>

    <div class="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Compose a message</li>
            </ol>

            <form class="form-horizontal" action="sms.php" method="POST">
            <div class="form-group">
              <label class="control-label col-sm-6">Phonenumber:</label>
              <div class="col-sm-9">
                <input type="number" name="phonenumber" class="form-control" placeholder="eg: +255719233813" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-6">Message:</label>
              <div class="col-sm-9">
                <textarea  type="text" name="message" class="form-control" rows="4" placeholder=" hereType a message" required></textarea>
              </div>
            </div>
            <div class="modal-footer">
            <input type="submit" class="btn btn-success" name="submit" value="Send">
            </div>
          </form>

          <?php 

          	$db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

          	if (isset($_POST['submit'])) {
          		$mobilenumber = $_POST['phonenumber'];
          		$message = $_POST['message'];
          	}
          ?>

<?php 
//======================REQUIRED INFORMATION ============================ 
date_default_timezone_set('Africa/Nairobi'); 
global $message;
global $mobilenumber;
$sendername = "+255676272057"; 
$username = "ramadhan"; 
$password = "rY0787272058"; 
$apikey = "cdd81a10-6da5-11e8-935d-06cba1bf0ce7"; 
$mob="$mobilenumber"; 
$message = "$message"; 
//==========================END OF REQUIRED INFORMATION ==================== 
//==================OPTIONAL REQUIREMENTS =========================================  
$senddate = "";   //leave blank if you want an sms to be sent immediately or eg 31/03/2014 12:54:00 or 2014-03-31 12:54:00 
$proxy_ip = ""; //leave blank if your network environment does not support proxy 
$proxy_port = ""; //set your network port, leave black if your network environment does not support proxy 
//===================== END OF OPTIONAL REQUIREMENT =========================== 
//===============================DO NOT EDIT ANYTHING BELOW =================== 
$sendername = urlencode($sendername); $apiKey = urlencode($apikey); $destnum = urlencode($mob); $message = urlencode($message); 
IF(!empty($senddate)){ $senddate = strtotime("2014-05-03 13:50:00"); } 
$posturl = "http://www.bongolive.co.tz/api/sendSMS.php?sendername=$sendername&username=$username&password=$password&apikey=$apiKey&destnum=$destnum&message=$message&senddate=$senddate"; 
$ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $posturl); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,0);  curl_setopt($ch, CURLOPT_TIMEOUT, 500); //tim 
if($proxy_ip !=""){ curl_setopt($ch, CURLOPT_PROXYPORT, $proxy_port); curl_setopt($ch, CURLOPT_PROXYTYPE, 'HTTP'); curl_setopt($ch, CURLOPT_PROXY, $proxy_ip); } 
$response = curl_exec($ch); 
//===============YOU CAN EDIT BELOW === 
// echo  $response;

if ($response > 0) {
  echo "<div class='col-md-4 col-sm-4 col-xs-4 btn btn-success'>";
  echo "Message was sent successfully";
  echo "</div>";
}


?>

		</div>
    </div>

<?php include'footer.php'; ?>