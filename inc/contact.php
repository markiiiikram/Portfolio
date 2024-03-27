<?php
require 'vendor/autoload.php';
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// $name = $surname = $email = $message = "";
// $nameErr = $surnameErr = $emailErr = $messageErr = "";
// $successMessage = '';
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Sanitize input
//     $name = test_input($_POST["name"]);
//     $surname = test_input($_POST["surname"]);
//     $email = test_input($_POST["email"]);
//     $subject = test_input($_POST["subject"]);
//     $message = test_input($_POST["message"]);

//     // Validate name
//     if (empty($name)) {
//         $nameErr = "Name is required";
//     }
//     if (empty($surname)) {
//         $surnameErr = "Surname is required";
//     }
//     if (empty($email)) {
//         $emailErr = "Email is required";
//     } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $emailErr = "Invalid email format";
//     }
//     // Validate message
//     if (strlen($message) < 5) {
//         $messageErr = "The message must be at least 5 characters long";
//     }

//     if (empty($nameErr) && empty($emailErr) && empty($telephoneErr) && empty($messageErr))
//         try {
//           $phpmailer = new PHPMailer\PHPMailer\PHPMailer();
//           $phpmailer->isSMTP();
//           $phpmailer->Host = 'live.smtp.mailtrap.io';
//           $phpmailer->SMTPAuth = true;
//           $phpmailer->Port = 2525;
//           $phpmailer->Username = 'api';
//           $phpmailer->Password = '42f4e2822a719d4a496a9b12908f915c';

//           $phpmailer->setFrom($email, $name . ' ' . $surame);
//           $phpmailer->addAddress('markskobelevs@gmail.com');
//           $phpmailer->Subject = $subject;
//           $phpmailer->Body = "Name: $Name $surname\n\nSubject: $subject\n\nMessage: $message";

//            if (!$phpmailer->send()) {
//             throw new Exception("Mailer Error: " . $phpmailer->ErrorInfo);
//         } else {
//             // Email sent successfully
//             echo "<p>Email has been sent successfully!</p>";
//         }
//     } catch (Exception $e) {
//         // Log the error or handle it appropriately
//         $errorMessage = "<p style='color: red;'>Oops, something went wrong. Please try again later</p>";
//     }
//     }


// function test_input($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
// ?>

<div class="contact-container" id="contact">
    <div class="get-in-touch">
        <h3>Get In Touch</h3>
        <p>
            You are welcome to reach out to me either by phone, email or by
            using the form. I'll get back to you as soon as possible.
        </p>
        <h4>07447-410-381</h4>
        <h5>markskobelevs@gmail.com</h5>
    </div>
    <div class="leave-a-message">
      <?php include_once'contactme.php' ?>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
          <?php if (empty($nameErr) && empty($emailErr)  && empty($messageErr)): ?>
            <div class="success">
                <p><?php echo $successMessage; ?></p>
                <span class="icon-x1 close"></span>
            </div>
            <?php elseif (!empty($nameErr) || !empty($surnameErr) || !empty($emailErr) || !empty($messageErr)) : ?>
                <div class="errors">
                    <?php if (!empty($nameErr)) : ?>
                        <div class="error"><p><?php echo $nameErr; ?></p> <span class="icon-x1 close"></span></div>
                    <?php endif; ?>
                    <?php if (!empty($surnameErr)) : ?>
                        <div class="error"><p><?php echo $surnameErr; ?></p> <span class="icon-x1 close"></span></div>
                    <?php endif; ?>
                    <?php if (!empty($emailErr)) : ?>
                        <div class="error"><p><?php echo $emailErr; ?></p> <span class="icon-x1 close"></span></div>
                    <?php endif; ?>
                    <?php if (!empty($messageErr)) : ?>
                        <div class="error"><p><?php echo $messageErr; ?></p> <span class="icon-x1 close"></span></div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <form class="form-field" name="form" id="form" method="POST" action="">
            <input type="text" class="input-field" id="name" name="name" placeholder="First Name*" value="<?php echo htmlspecialchars($name); ?>"/>
            <input type="text" class="input-field" id="surname" name="surname" placeholder="Last Name*" value="<?php echo htmlspecialchars($surname); ?>"/>
            <input type="text" class="input-field" id="email" name="email" placeholder="Email Address*" value="<?php echo htmlspecialchars($email); ?>"/> 
            <input type="text" class="input-field" id="subject" name="subject" placeholder="Subject"/>
            <textarea class="input-field" id="message" name="message" placeholder="Message *" value="<?php echo htmlspecialchars($message); ?>"></textarea>
            <button type="submit" id="submit">Submit</button>
        </form>
    </div>
</div>
<div class="scroll-container-bottom">
    <a href="#header" class="scroll-down">
        <span class="icon-arrow-up-thick"></span><br />Scroll Up
    </a>
</div>
