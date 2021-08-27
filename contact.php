<? php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message']
      
    $email_form = 'katesiddhi313@gmail.com';
    $email_subject = "Product Enquiry";
    $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                  "User Message: $message.\n";
    $to = "siddhikate05@gmail.com";
    $headers = "Form: $email_form \r\n";
    $headers = "Reply-to: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.html");
?>