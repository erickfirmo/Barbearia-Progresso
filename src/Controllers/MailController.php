<?php

namespace System\Controllers;

use System\Controllers\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller {

    public $required_fields = [

    ];

    public function __construct(){

        
    }

    public function send() {

        if(isset($_POST['form_send_to']) && !empty($_POST['form_send_to'])) {

            $_POST['form_send_to'] = base64_decode($_POST['form_send_to']);

            if(strpos($_POST['form_send_to'], ",") !== false)
                $email_to = explode(",", $_POST['form_send_to']);
            else if(strpos($_POST['form_send_to'], ";") !== false)
                $email_to = explode(";", $_POST['form_send_to']);
            else
                $email_to = $_POST['form_send_to'];

        } else {
            $email_to = 'tests@erickfirmo.dev';
        }


        $writeHTML = '';

        $message_content  = '';
        $message_content .= $writeHTML;
        $message_content .= '';

        $return = array();

        $message = "";

    }
}