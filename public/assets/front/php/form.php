<?php

	$to = "example@example.com"; // Put Your Email Here
	$subject = "عنوان الرسالة"; // Put Your Optional Subject Here
	$message = "Message: ".strip_tags($_POST["contactmessage"]);
	$headers   = array();
	$headers[] = "MIME-Version: 1.0";
	$headers[] = "Content-type: text/plain; charset=iso-8859-1";
	$headers[] = "From: ".strip_tags($_POST["contactname"])." <".strip_tags($_POST["contactemail"]).">";
	$headers[] = "Reply-To: ".strip_tags($_POST["contactname"])." <".strip_tags($_POST["contactemail"]).">";
	$headers[] = "Subject: ".$subject;
	$headers[] = "X-Mailer: PHP/".phpversion();

	if($_POST["contactname"] == ""){

		echo "أدخل الاسم";

	}else if($_POST["contactemail"] == ""){

		echo "أدخل البريد الالكتروني";

	}else if($_POST["contactmessage"] == ""){

		echo "أدخل الرسالة";

	}else {

		$send = mail($to, $subject, $message, implode("\r\n", $headers));

		if($send){

			echo "تم الإرسال";

		}else {

			echo "هناك خطأ ما قم بتحديث الصفحة ...";

		}

	}

?>