<?php

class Contact_Controller extends Base_Controller{

    public function main(){
        //Set current page
        $this->assign('currentPage', 'contact');

        $this->render();
    }

    public function action(){
        //Set recipient
        define ('RECIPIENT_NAME', 'Karol Tinsley');
        define ('RECIPIENT_EMAIL', 'contact@karoltinsley.com');

        //Get fields
        $name = mysql_escape_string($_POST['name']);
        $email = mysql_escape_string($_POST['email']);
        $subject = mysql_escape_string($_POST['subject']);
        $message = mysql_escape_string($_POST['message']);

        //Check for empty fields
        if (empty($name) || empty($email) || empty($subject) || empty($message)){
            $success_message = 'Empty field(s)';
        }

        //
        else if (!strpos($email, '@') || !strrpos($email, '.') || strrpos($email, '.') < strrpos($email, '@')) {
            $success_message = 'Incorrect email entered';
        }

        else {    
            //Send email
            $recipient = RECIPIENT_NAME . ' <' . RECIPIENT_EMAIL . '>';
            $headers = 'From: ' . $name . ' <' . $email . '>';
            $success = mail($recipient, $subject, $message, $headers);
        
            if ($success){
                $success_message = 'success';
            }
        }

        //Redirect is not using ajax
        if (!$_POST['ajax']){
	        header('Location: ' . SITE_ROOT . '/contact/');
        } else {
	       echo $success_message;
        }
    }
}

?>
