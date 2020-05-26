<?php
  require_once('db.php');
  $upload_dir = 'uploads/';

  if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

  //   $imgName = $_FILES['image']['name'];
		// $imgTmp = $_FILES['image']['tmp_name'];
		// $imgSize = $_FILES['image']['size'];

    if(empty($name)){
		$errorMsg = 'Please input name';
	}
	else if(empty($contact)){
		$errorMsg = 'Please input contact';
	}
	else if(empty($email)){
		$errorMsg = 'Please input email';
	}
	


		if(!isset($errorMsg)){
			$sql = "insert into contacts(name, contact, email)
					values('".$name."', '".$contact."', '".$email."')";
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record added successfully';
				header('Location: index.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}
  }
?>
