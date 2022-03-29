<?php 
require'core/connection.php';
session_start();
if (!isset($_SESSION['is_admin'])) {
redirect('index.php');
}
$id = $_SESSION['admin_id'];
$email = $_SESSION['email'];
$user = $_SESSION['username'];
$usenumb = $_SESSION['numb']++;
include'inc/header.php'; 
?>
		<main>
			<div class="layout">
				<!-- Start of Navigation -->
				<?php include 'inc/navigation.php'; ?>
				<!-- End of Navigation -->
				<!-- Start of Sidebar -->
				<?php include 'inc/Sidebar.php'; ?>
				<!-- End of Sidebar -->
				<!-- Start of Add Friends -->
				
				<!-- End of Add Friends -->
				
				<div class="main">
					<div class="tab-content" id="nav-tabContent">
						<!-- Start of Babble -->
						<div class="babble tab-pane fade active show" id="list-chat" role="tabpanel" aria-labelledby="list-chat-list">
							<!-- Start of Chat -->
							<div class="chat" id="chat1">
								<?php include 'inc/top.php'; ?>
								<?php include 'inc/mainchat.php'; ?>
								<?php include 'inc/buttom.php'; ?>
							</div>
							<!-- End of Chat -->
							

							<!-- Start of Call -->
							
							<!-- End of Call -->
						</div>
						<!-- End of Babble -->
					</div>
				</div>
			</div> <!-- Layout -->
		</main>
		<!-- Bootstrap/Swipe core JavaScript
		================================================== -->
<?php
if ($usenumb == 0) {
$usenumb = $_SESSION['numb']++;
?>
<script type="text/javascript">
$(document).ready(function(){
	setInterval(function(){ 
    $('#modalmessage').modal();
	}, 5000);
});
</script>
<div class="modal fade" id="modalmessage" role="dialog" style="margin-top: 10%;">
<div class="modal-dialog modal-sm">
  <div class="modal-content">
  	<div class="modal-header">
     <p class="modal-title" id="myModalLabel" style="color: red">Please Read!!</p>
     <a href=""><button type="button" class="close" aria-hidden="true" style="color: black;">Dissmiss Here</button></a>
     </div>
    <div class="modal-body">
    	<p>Hello <?php echo "$name1"; ?>, welcome to this application. Please note that you have to type "hello" to start a new and fresh conversation with me here. I wish you happy stay here!</p>
    </div>
  </div>
</div>
</div>
<?php
}
?>

<?php include'inc/footer.php'; ?>