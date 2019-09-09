<?php
	require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-config.php' );
	require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-includes/wp-db.php' );
	global $wpdb;
	
	$message = "a";
	echo $message;
	
	if (isset($_POST['action'])) {
		switch ($_POST['action']) {
			// case 'contactUsForm':
				// $name  	 = $_POST['name'];
				// $email   = $_POST['email'];
				// $phone   = $_POST['phone'];
				// $message = $_POST['message'];
				
				// if($wpdb -> insert('contactus', array(
				   // 'name'  => $name,  'email'   => $email,
				   // 'phone' => $phone, 'message' => $message)) == false){
					// $message ='Database Insertion Failed';
					// wp_die();
			    // }
				// else $message = 'Database insertion successful';
				// break;
				
			default: echo "Error: Invalid action data being passed in AJAX (CHECK JS)";
					 break;
		}
		echo $message;
	} else if (isset($_GET['action'])) {
		switch ($_GET['action']) {
			
					 
			default: echo "Error: Invalid action data being passed in AJAX (CHECK JS)";
					 break;
			
		}
		
	}
?>