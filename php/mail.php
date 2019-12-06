<?php
    //Manda e-mail
	$to = "jennifer.cai@libero.it";
	$headers = "From: jennifer.cai@libero.it". "\r\n".
	           "Reply-To: jennifer.cai@libero.it". "\r\n".
			   "X-Mailer: PHP/". phpversion();
	if(!empty($_POST["message"])) {
		$subject = "data: ". time();
	    $message = $_POST["message"];
		mail($t0, $subject, $message, $headers);
	}
?>