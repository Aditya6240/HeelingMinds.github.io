<?php
    
        $name = $_POST['name']; // Get Name value from HTML Form
        $email_id = $_POST['email']; // Get Email Value
        $mobile_no = $_POST['mobile']; // Get Mobile No
        $subject = $_POST['subject']; 
        $msg = $_POST['message']; // Get Message Value
         
        $to = "info@heelingminds.com"; // You can change here your Email
        $subject = "'$subject'"; // This is your subject
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email_id</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Mobile No: </strong></td>
                            <td style='width:400px'>$mobile_no</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$msg</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Message Ends here
         
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        // More headers
      $headers .= "From: ".$_POST["email"]."\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id
       // $headers .= 'Cc: info@websapex.com' . "\r\n"; // If you want add cc
        //$headers .= 'Bcc: boss@websapex.com' . "\r\n"; // If you want add Bcc
         
        if(mail($to,$subject,$message,$headers)){
            // Message if mail has been sent
            echo "Mail has been sent Successfully.";
                
        }
 
        else{
            // Message if mail has been not sent
            echo "Email sending failed.";
        }
?>