<?php
$name = $email = $phone = $message = ""; 
$errors = array();

if(isset($_POST["send_message_btn"]) ) {

	    $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];


        if (empty($name)) {
        	array_push($errors, "Lūdzu ievadiet vārdu.");
        } else {
            $name = test_input($name);
        if (!preg_match("/^[a-zēūīāšžčķļņA-ZŅĒŪĪĀŠŽČĶĻŅ]*$/", $name)) {
            array_push($errors, "Vārds drīkst saturēt tikai burtus.");
            }
        }

        if (empty($email)) {
            array_push($errors, "Lūdzu ievadiet e-pasta adresi.");
        } else {
            $email = test_input($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Lūdzu pārliecinieties vai e-pasta adrese ir ievadīta pareizi.");
            }
        }

        if (empty($phone)) {
            array_push($errors, "Lūdzu ievadiet telefona numuru.");
        } else {
            $phone = test_input($phone);
        if (!preg_match("/^[0-9]{8,30}$/", $phone)) {
                array_push($errors, "Lūdzu ievadiet tikai ciparus.");
            }
        }

        if (empty($message)) {
            array_push($errors, "Lūdzu ievadiet ziņu.");
        } else {
            $message = test_input($message);
        }


        if (count($errors) == 0) {

            require 'phpmail/PHPMailerAutoload.php';

            $mail = new PHPMailer();

            $mail->Host = "smtp.gmail.com"; 

            $mail->isSMTP();

            $mail->SMTPDebug = 0;        

            $mail->SMTPAuth = true;

            $mail->isHTML(true);

            $mail->Username = "rihardsvv@gmail.com";

            $mail->Password = "odqyertfevdaxryq";

            $mail->SMTPSecure = "ssl"; 
 
            $mail->Port = 465; 

            $mail->CharSet = 'UTF-8';

            //$mail->Subject = $subject;

            $mail->Body = "
            <html> 
              <body> 
                <p style=\"text-align:center;height:100px;background-color:#abc;border:1px solid #456;border-radius:3px;padding:10px;\">
                    <b>Jauna ziņa no:</b><br>
                     <b>$name</b><br>
                     <b>$phone</b>, <b>$email</b><br><br> $message
                    <br>
                </p>
              </body>
            </html>";

            $mail->setFrom('rihardsvv@gmail.com');

            $mail->addAddress('rihardsvv@gmail.com');    // ra.assets@gmail.com


            if (!$mail->send()) {
                echo "error: " . $mail->ErrorInfo;
            }
            else {
             	//echo 'succes.';
                $mail->clearAddresses();
                $mail->addAddress($email);
                $mail->Subject = 'WoodCompany@Sigulda';
                $firstName = rtrim($name, 's');
                //$firstName = rtrim($name, 'š');


                $mail->Body = "
        <html>
            <body>
                <p style=\"text-align:center;height:120px;background-color:#abc;border:1px solid #456;border-radius:3px;padding:10px;\">
                <b>Paldies $firstName, jūsu ziņa ir saņemta.</b><br>
                Sazināsimies ar jums 1. darba dienas laikā.<br>
                Neskaidrību gadijumā lūdzu rakstiet uz mallerart@gmail.com vai arī zvaniet pa tālruni +371 28068086.<br><br>
                Jauku dienu vēlot, </br><br>
                Maller Art komanda!  
            </p>
            </body>
            </html>";
                $mail->send();
            }

	}
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

