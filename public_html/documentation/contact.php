<?php

/** require all composer dependencies; requiring the  autoload file loads all composer packages at once while this is convenient, this may load too much if your composer configuration grows to many classes if this is a concern, laod "/vendor/swiftmailer/aultolaod.php" instead to load just SwiftMailer
 **/

require_once((dirname(dirname(dirname(dirname(__DIR__))))) . "/vendor/autoload.php");

try {
        // sanitize the inputs from the form: name, email, subject, and message
        // this assumes jQuery (not Angular) will be submitting the form, so we're using the $_post superglobal
		
		$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
		$subject = filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		
		// create Swift message
		$swiftMessage = Swift_Message::newInstance();
	
		// attach the sender to the message
		// this takes the form of an associative array where the email is the key for the real name
		$swiftMessage->setFrom([$email=> $name]);
		
		/*
		 *  attach the recipients to the message
		 * notice this is an array that can include or omit the recipient's real name
		 * use the recipients' real name where possible; this reduces the probablity of the Email being marked as spam*/
		$recipients = ["lucnmsu@gmail.com" => "Coding from Deep Dive"];
		$swiftMessage->setTo($recipients);
		
		//attach the subject line to the message
			$swiftMessage->setSubject($subject);
			
		/*
		 * attach the actual message to the message
		 * here, we set two version of the message: the HTML formatted message and a special filter_var()ed
		 * version of the message that generates a plain text version fo the HTML content
		 * notice one tactic used is to display the netire $confirmLink to plain text; this lets users who aren't
		 * viewing HTML content in Emails still access to your links*/
		$swiftMessage->setBody($message, "text/html");
		$swiftMessage->addPart(html_entity_decode($message), "text/plain");
  
		/*
		 * send the Email via SMTP; the SMTP server here is configured to relay everything upstream via CNM
		 * this default may or may not be available on all web hosts; consult their documentation/support for details
		 * SwiftMailer supports many different transport methods; SMTP was chosen because it's the most compatible and has the best error
		 * handling @see http://swiftmailer.org/docs/sending.html Sending messages - documentation - swiftMailer
		 */
		$smtp = Swift_SmtpTransport::newInstance("localhost", 25);
		$mailer = Swift_Mailer::newInstance($smtp);
		$numSent = $mailer->send($swiftMessage, $failedRecipients);
		
		/*
		 * the send method returns the number of recipients that accepted the Email
		 * so, fi the number attempted is not the number accepted, this is an Exception
		 * */
		if($numSent !== count($recipients)) {
			// the $failedRecipients parameter passed in the sen() method now contains an array of emails that failed
			throw(new RuntimeException("unable to send email"));
			
		}
		
		// report a successful send
	echo "<div class=\"alert alert-seccess\" role=\"alert\">Email successfully sent.</div>";
		
} catch(Exception $exception) {
	echo "<div class=\"alert alert-danger\" role=\"alert\"><strong> NOOO!</strong> Unable to send email: " . $exception->getMessage() . "</div>";
}