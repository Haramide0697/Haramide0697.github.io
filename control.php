<?php
require 'core/connection.php';

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])== 'xmlhttprequest'){
$date = date('l M d, Y H:i');
if (isset($_POST['inputName'])) {
$fullname = $_POST['inputName'];
$email = $_POST['inputEmail'];
$password = $_POST['inputPassword'];
$password = sha1(md5($password));


$select = $conn->query("SELECT * FROM users WHERE mail = '$email' OR name = '$fullname'");
$count = $select->rowCount();
if ($count > 0) {
    echo "Details already used.. Use another";
}else{

$in = array('name' => $fullname,
            'mail' => $email,
            'password' => $password, 
            'date' => $date, 
            );

create('users',$in);
echo "Congratulations You have successfully Registered <br> You Can Now Login";
}
}

 if(isset($_POST['useremail'])){
    $username = sanitize($_POST['useremail']);
    $password = $_POST['userpass'];
    $hash = sha1(md5($password));


    if(empty($username) || empty($password)){
      echo "<div style='color:#e6102e'><i class='fa fa-ban fa-5x'></i><p><b> Fill All Empty Fields</b></p></div>";
    }else{
      $verify = get_alias('users','mail',$username,'password',$hash);
      if($verify->rowCount() > 0){
        $fetch = $verify->fetchAll(PDO::FETCH_OBJ);
        foreach($fetch as $log){
          $id = $log->id;
          $user = $log->name;
          $email = $log->mail;

          $encode_id = md5($id);
          session_start();
          $_SESSION['is_admin'] = $encode_id; 
          $_SESSION['username'] = $user; 
          $_SESSION['admin_id'] = $id; 
          $_SESSION['email'] = $email; 
          $_SESSION['numb'] = 0;
          echo "Success";

              }
      }else{
       echo "Invalid";
      }
    }
  }

if (isset($_POST['textmessage'])) {
	$message = sanitize(htmlspecialchars($_POST['textmessage']));
	$ident = $_POST['ident'];

	if ($message == 'hello') {
	$in = array('age' => null,
            'gender' => null,
            'height' => null, 
            'weight' => null, 
            'bmi' => null, 
            'bmistatus' => null, 
            );
	$in2 = array('iden' => $ident,
            'by' => 'user',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	update('users',$in,'id',$ident);
	create('conversation',$in2);
}else{
	$query1 = $conn->query("SELECT * FROM users WHERE id = '$ident' order by 'id' DESC");
	$fetch1 = $query1->fetchAll(PDO::FETCH_OBJ);
	$count1 = $query1->rowCount();
	if ($count1 > 0) {
	foreach ($fetch1 as $value1) {
	$name = $value1->name;
	$age = $value1->age;
	$gender = $value1->gender;
	$height = $value1->height;
	$weight = $value1->weight;
	$mail = $value1->mail;
	$bmi = $value1->bmi;
	$bmistatus = $value1->bmistatus;
	}
	}
	$query2 = $conn->query("SELECT * FROM conversation WHERE iden = '$ident' order by 'id' DESC");
	$count2 = $query2->rowCount();
	$fetch2 = $query2->fetchAll(PDO::FETCH_OBJ);
	$last = $count2-1;
	$lastword = $fetch2[$last]->message;


	if (empty($age) && empty($gender) && empty($height) && empty($weight) && empty($bmi) && empty($bmistatus)) {
	if ($lastword == "How old are you?" || $lastword == "Invalid, please input a number") {
	if (is_numeric($message) == 1) {
	if ($message > 18 && $message < 65) {
	$in = array('age' => $message,
            );
	$in2 = array('iden' => $ident,
            'by' => 'user',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	update('users',$in,'id',$ident);
	create('conversation',$in2);
	}else{
		$in1 = array('iden' => $ident,
            'by' => 'user',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	$in2 = array('iden' => $ident,
            'by' => 'admin',
            'type' => 'text', 
            'message' => "Age not in range, please visit a physical dietitian", 
            'dates' => $date, 
            );

	create('conversation',$in1);
	create('conversation',$in2);
	}
	}else{
	$in1 = array('iden' => $ident,
            'by' => 'user',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	$in2 = array('iden' => $ident,
            'by' => 'admin',
            'type' => 'text', 
            'message' => "Invalid, please input a number", 
            'dates' => $date, 
            );

	create('conversation',$in1);
	create('conversation',$in2);
	}
	}else{
	$in1 = array('iden' => $ident,
            'by' => 'user',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	$in2 = array('iden' => $ident,
            'by' => 'admin',
            'type' => 'text', 
            'message' => 'Please answer the next question', 
            'dates' => $date, 
            );

	create('conversation',$in1);
	create('conversation',$in2);
	}
	}elseif ((!empty($age) && empty($gender) && empty($height) && empty($weight) && empty($bmi) && empty($bmistatus))) {
		if ($lastword == "Are you a male or a female?" || $lastword == "Invalid, please input male or female") {
			$message = strtolower($message);
		if ($message == 'male' || $message == 'female') {
	$in = array('gender' => $message,
            );
	$in2 = array('iden' => $ident,
            'by' => 'user',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	update('users',$in,'id',$ident);
	create('conversation',$in2);
	}else{
		$in1 = array('iden' => $ident,
            'by' => 'user',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	$in2 = array('iden' => $ident,
            'by' => 'admin',
            'type' => 'text', 
            'message' => "Invalid, please input male or female", 
            'dates' => $date, 
            );

	create('conversation',$in1);
	create('conversation',$in2);
	}
		}else{
	$in1 = array('iden' => $ident,
            'by' => 'user',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	$in2 = array('iden' => $ident,
            'by' => 'admin',
            'type' => 'text', 
            'message' => 'Please answer the next question', 
            'dates' => $date, 
            );

	create('conversation',$in1);
	create('conversation',$in2);
	}
	
	}elseif ((!empty($age) && !empty($gender) && empty($height) && empty($weight) && empty($bmi) && empty($bmistatus))) {
		if ($lastword == "What is your height... Height is in m<sup>2</sup>" || $lastword == "Invalid, please input a number") {
		if (is_numeric($message) == 1) {
	$in = array('height' => $message,
            );
	$in2 = array('iden' => $ident,
            'by' => 'user',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	update('users',$in,'id',$ident);
	create('conversation',$in2);
	}else{
		$in1 = array('iden' => $ident,
            'by' => 'user',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	$in2 = array('iden' => $ident,
            'by' => 'admin',
            'type' => 'text', 
            'message' => "Invalid, please input a number", 
            'dates' => $date, 
            );

	create('conversation',$in1);
	create('conversation',$in2);
	}
		}else{
	$in1 = array('iden' => $ident,
            'by' => 'user',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	$in2 = array('iden' => $ident,
            'by' => 'admin',
            'type' => 'text', 
            'message' => 'Please answer the next question', 
            'dates' => $date, 
            );

	create('conversation',$in1);
	create('conversation',$in2);
	}
	
	}elseif ((!empty($age) && !empty($gender) && !empty($height) && empty($weight) && empty($bmi) && empty($bmistatus))) {
		if ($lastword == "What is your Weight... Weight is in kg" || $lastword == "Invalid, please input a number") {
		if (is_numeric($message) == 1) {
	$in = array('weight' => $message,
            );
	$in2 = array('iden' => $ident,
            'by' => 'user',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	update('users',$in,'id',$ident);
	create('conversation',$in2);
	}else{
		$in1 = array('iden' => $ident,
            'by' => 'user',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	$in2 = array('iden' => $ident,
            'by' => 'admin',
            'type' => 'text', 
            'message' => "Invalid, please input a number", 
            'dates' => $date, 
            );

	create('conversation',$in1);
	create('conversation',$in2);
	}
		}else{
	$in1 = array('iden' => $ident,
            'by' => 'user',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	$in2 = array('iden' => $ident,
            'by' => 'admin',
            'type' => 'text', 
            'message' => 'Please answer the next question', 
            'dates' => $date, 
            );

	create('conversation',$in1);
	create('conversation',$in2);
	}
	
	}elseif ((!empty($age) && !empty($gender) && !empty($height) && !empty($weight) && empty($bmi) && empty($bmistatus))) {
		if ($lastword == "Please state yes or no if you are any of: <br> a muscle builder, Long distance athletes, Breast feeding or Pregnant?") {
		$message = strtolower($message);
		if ($message == 'no') {
		$bmithis = $weight/$height;
		$bmithis = round($bmithis,2);

		if ($bmithis <= 18.5) {
			$bmithisstat = 'underweight';
		}elseif ($bmithis >= 18.5 && $bmithis <= 24.9){
			$bmithisstat = 'normal weight';
		}elseif ($bmithis >= 25 && $bmithis <= 29.9){
			$bmithisstat = 'overweight';
		}elseif ($bmithis >= 30){
			$bmithisstat = 'Obesity';
		}
		$in3 = array('bmi' => $bmithis,
					'bmistatus' => $bmithisstat,
            );
		update('users',$in3,'id',$ident);

	$in1 = array('iden' => $ident,
            'by' => 'user',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	$in2 = array('iden' => $ident,
            'by' => 'admin',
            'type' => 'text', 
            'message' => 'Dear '.$name.', Thank you for using this application, Below is your statistics<br> BMI = '.$bmithis.' <br> BMI status is '.$bmithisstat.' <br> you can dowmload full document and diet plan by clicking this button <a href="plan.php?ref='.$ident.'"><button class="btn btn-info">Click Here!</button></a>', 
            'dates' => $date, 
            );
	create('conversation',$in1);
	create('conversation',$in2);
	}elseif($message == 'yes'){
		$in1 = array('iden' => $ident,
            'by' => 'user',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	$in2 = array('iden' => $ident,
            'by' => 'admin',
            'type' => 'text', 
            'message' => "Please visit a physical dietitian", 
            'dates' => $date, 
            );

	create('conversation',$in1);
	create('conversation',$in2);
	}else{
		$in1 = array('iden' => $ident,
            'by' => 'user',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	$in2 = array('iden' => $ident,
            'by' => 'admin',
            'type' => 'text', 
            'message' => "Please answer the next question", 
            'dates' => $date, 
            );

	create('conversation',$in1);
	create('conversation',$in2);
	}
		}
	}
}
	$query = $conn->query("SELECT * FROM conversation WHERE iden = '$ident' order by 'id' DESC");
	$fetch = $query->fetchAll(PDO::FETCH_OBJ);
	$count = $query->rowCount();
	if ($count > 0) {
	foreach ($fetch as $key) {
	$id = $key->id;
	$iden = $key->iden;
	$by = $key->by;
	$type = $key->type;
	$messages = $key->message;
	$dates = $key->dates;
	if ($by == 'user') {
		$ext = 'me';
		$imagea = "";
	}elseif ($by == 'admin') {
		$ext = "";
		$imagea = '<img class="avatar-md" src="dist/img/avatars/user.png" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">';
	}
	?>
		<div class="message <?php echo $ext; ?>">
			<?php echo $imagea; ?>
			<div class="text-main">
				<div class="text-group <?php echo $ext; ?>">
					<div class="text <?php echo $ext; ?>">
						<p><?php echo $messages; ?></p>
					</div>
				</div>
				<span><?php echo $dates; ?></span>
			</div>
		</div>
	<?php
	}
	}
}

if (isset($_POST['action']) && $_POST['action'] == 'promessage') {
	$id = $_POST['id'];
	$query = $conn->query("SELECT * FROM users WHERE id = '$id' order by 'id' DESC");
	$fetch = $query->fetchAll(PDO::FETCH_OBJ);
	$count = $query->rowCount();
	if ($count > 0) {
	foreach ($fetch as $value) {
	$name = $value->name;
	$age = $value->age;
	$gender = $value->gender;
	$height = $value->height;
	$weight = $value->weight;
	$mail = $value->mail;
	$bmi = $value->bmi;
	$bmistatus = $value->bmistatus;
	}
	}
	$query2 = $conn->query("SELECT * FROM conversation WHERE iden = '$id' order by 'id' DESC");
	$count2 = $query2->rowCount();
	$fetch2 = $query2->fetchAll(PDO::FETCH_OBJ);
	$last = $count2-1;
	$lastword = $fetch2[$last]->message;
	echo "$lastword";
	if (($lastword != 'Age not in range, please visit a physical dietitian') && ($lastword != 'Invalid, please input a number') && ($lastword != 'Invalid, please input male or female') && ($lastword != 'Please visit a physical dietitian')) {
	if (empty($age) && empty($gender) && empty($height) && empty($weight) && empty($bmi) && empty($bmistatus)) {
		$message = "Dear $name, we are happy you are using this application, please provide all informations correctly";
		$in2 = array('iden' => $id,
            'by' => 'admin',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	create('conversation',$in2);

	$message = "How old are you?";
	$in2 = array('iden' => $id,
            'by' => 'admin',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	create('conversation',$in2);
	}elseif (!empty($age) && empty($gender) && empty($height) && empty($weight) && empty($bmi) && empty($bmistatus) && $lastword) {
	
	$message = "Are you a male or a female?";
		$in2 = array('iden' => $id,
            'by' => 'admin',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	create('conversation',$in2);
	}elseif (!empty($age) && !empty($gender) && empty($height) && empty($weight) && empty($bmi) && empty($bmistatus) && $lastword) {
	
	$message = "What is your height... Height is in m<sup>2</sup>";
		$in2 = array('iden' => $id,
            'by' => 'admin',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	create('conversation',$in2);
	}elseif (!empty($age) && !empty($gender) && !empty($height) && empty($weight) && empty($bmi) && empty($bmistatus) && $lastword) {
	
	$message = "What is your Weight... Weight is in kg";
		$in2 = array('iden' => $id,
            'by' => 'admin',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	create('conversation',$in2);
	}elseif (!empty($age) && !empty($gender) && !empty($height) && !empty($weight) && empty($bmi) && empty($bmistatus) && $lastword) {
	
	$message = "Please state yes or no if you are any of: <br> a muscle builder, Long distance athletes, Breast feeding or Pregnant?";
		$in2 = array('iden' => $id,
            'by' => 'admin',
            'type' => 'text', 
            'message' => $message, 
            'dates' => $date, 
            );

	create('conversation',$in2);
	}
}
	$query = $conn->query("SELECT * FROM conversation WHERE iden = '$id' order by 'id' DESC");
	$fetch = $query->fetchAll(PDO::FETCH_OBJ);
	$count = $query->rowCount();
	if ($count > 0) {
	foreach ($fetch as $key) {
	$id = $key->id;
	$iden = $key->iden;
	$by = $key->by;
	$type = $key->type;
	$messages = $key->message;
	$dates = $key->dates;
	if ($by == 'user') {
		$ext = 'me';
		$imagea = "";
	}elseif ($by == 'admin') {
		$ext = "";
		$imagea = '<img class="avatar-md" src="dist/img/avatars/user.png" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">';
	}
	?>
		<div class="message <?php echo $ext; ?>">
			<?php echo $imagea; ?>
			<div class="text-main">
				<div class="text-group <?php echo $ext; ?>">
					<div class="text <?php echo $ext; ?>">
						<p><?php echo $messages; ?></p>
					</div>
				</div>
				<span><?php echo $dates; ?></span>
			</div>
		</div>
	<?php
	}
	}
}

if (isset($_POST['action']) && $_POST['action'] == 'notify') {
	$id = $_POST['id'];
$query = $conn->query("SELECT * FROM conversation WHERE iden = '$id' order by 'id' DESC");
$count = $query->rowCount();
$fetch = $query->fetchAll(PDO::FETCH_OBJ);
	$count = $query->rowCount();
	$last = $count-1;
	if ($count > 0) {

	foreach ($fetch as $key) {
	$id = $key->id;
	$iden = $key->iden;
	$by = $key->by;
	$type = $key->type;
	$messages = $key->message;
	$dates = $key->dates;
	if ($by == 'user') {
		$ext = 'me';
		$imagea = "";
	}elseif ($by == 'admin') {
		$ext = "";
		$imagea = '<img class="avatar-md" src="dist/img/avatars/user.png" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">';
	}
	?>
		<div class="message <?php echo $ext; ?>">
			<?php echo $imagea; ?>
			<div class="text-main">
				<div class="text-group <?php echo $ext; ?>">
					<div class="text <?php echo $ext; ?>">
						<p><?php echo $messages; ?></p>
					</div>
				</div>
				<span><?php echo $dates; ?></span>
			</div>
		</div>
	<?php
	}

	}
}


if (isset($_POST['action']) && $_POST['action'] == 'checkhei') {
	$id = $_POST['id'];
$query = $conn->query("SELECT * FROM conversation WHERE iden = '$id' order by 'id' DESC");
$count = $query->rowCount();
$fetch = $query->fetchAll(PDO::FETCH_OBJ);
	$count = $query->rowCount();
	$last = $count-1;
	if ($count > 0) {
	if ($fetch[$last]->message == 'What is your height... Height is in m<sup>2</sup>') {
		echo "yesplease";
	}

	}
}

if (isset($_POST['action']) && $_POST['action'] == 'sidecheck') {
	$id = $_POST['id'];
$query = $conn->query("SELECT * FROM conversation WHERE iden = '$id' order by 'id' DESC");
$count = $query->rowCount();
$fetch = $query->fetchAll(PDO::FETCH_OBJ);
	$count = $query->rowCount();
	$last = $count-1;
	if ($count > 0) {
	echo $fetch[$last]->message;

	}
}

}

?>