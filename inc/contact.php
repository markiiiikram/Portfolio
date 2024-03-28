<?php
require 'vendor/autoload.php';
// ?>

<div class="contact-container" id="contact">
    <div class="get-in-touch">
        <h3>Get In Touch</h3>
        <p>
            You are welcome to reach out to me either by phone, email or by
            using the form. I'll get back to you as soon as possible.
        </p>
        <h4>07447-410-381</h4>
        <h5>markskobelevs
            <br>
            @gmail.com</h5>
    </div>
    <div class="leave-a-message">
      <?php include_once'contactme.php' ?>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
          <?php if (empty($nameErr) && empty($emailErr)  && empty($messageErr)): ?>
            <div class="success">
                <p><?php echo $successMessage; ?></p>
                <span class="icon-x close"></span>
            </div>
            <?php elseif (!empty($nameErr) || !empty($surnameErr) || !empty($emailErr) || !empty($messageErr)) : ?>
                <div class="errors">
                    <?php if (!empty($nameErr)) : ?>
                        <div class="error"><p><?php echo $nameErr; ?></p> <span class="icon-x close"></span></div>
                    <?php endif; ?>
                    <?php if (!empty($surnameErr)) : ?>
                        <div class="error"><p><?php echo $surnameErr; ?></p> <span class="icon-x close"></span></div>
                    <?php endif; ?>
                    <?php if (!empty($emailErr)) : ?>
                        <div class="error"><p><?php echo $emailErr; ?></p> <span class="icon-x close"></span></div>
                    <?php endif; ?>
                    <?php if (!empty($messageErr)) : ?>
                        <div class="error"><p><?php echo $messageErr; ?></p> <span class="icon-x close"></span></div>
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
