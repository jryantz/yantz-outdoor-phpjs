<?php
session_start();

if(isset($_POST['submit'])) {
    $to = 'jryantz0@frostburg.edu';
    $subject = $_POST['subject'];
    $message = wordwrap($_POST['area'], 70);

    if(isset($_POST['reply'])) {
        $header = "From: mailer@yantznet.com" . "\r\n" . "Reply-To: {$_POST['reply']}" . "X-Mailer: PHP/" . phpversion();
    } else {
        $header = "From: mailer@yantznet.com" . "\r\n" . "Reply-To: mailer@yantznet.com" . "X-Mailer: PHP/" . phpversion();
    }

    if(isset($subject)) {
        $success = mail($to, $subject, $message, $header);

        if(!$success) {
            $error = error_get_last()['message'];
            echo $error;
        } else {
            echo 'Email sent.';
        }
    }
}

?>

<html>
    <head>
        <title>Contact Yantz Outdoor Collection</title>
        <link rel="stylesheet" href="css/app.css" type="text/css" media="screen" charset="utf-8">
    </head>

    <body>
        <?php require_once 'includes/call.inc.php'; ?>

        <?php require_once 'includes/announcement.inc.php'; ?>

        <section class="places cf">
            <div class="grid-fixed">
                <form action="" method="post">
                    <div class="c12 cf" style="margin-bottom: 15px;">
                        <input type="text" name="name" id="name" placeholder="Your Name" style="padding: 5px;" onkeyup="check();"><span style="color: red;"> *</span>
                    </div>

                    <div class="c12 cf" style="margin-bottom: 15px;">
                        <input type="text" name="reply" id="reply" placeholder="Reply Email" style="padding: 5px;"><span style="color: red;"> *</span>
                    </div>

                    <div class="c12 cf" style="margin-bottom: 15px;">
                        <input type="text" name="subject" id="subject" placeholder="Subject" style="padding: 5px;" onkeyup="check();"><span style="color: red;"> *</span>
                    </div>

                    <div class="c12 cf" style="margin-bottom: 15px;">
                        <textarea name="area" id="area" rows="10" cols="100" style="padding: 5px;"></textarea>
                    </div>

                    <div class="c12 cf">
                        <input type="submit" name="submit" id="submit" value="Submit" disabled>
                    </div>
                </form>
            </div>
        </section>

        <?php require_once 'includes/footer.inc.php'; ?>

        <script>
        var uname = document.getElementById('name');
        var reply = document.getElementById('reply');
        var subject = document.getElementById('subject');

        function check() {
            if(uname.value !== '' && reply.value !== '' && subject.value !== '') {
                document.getElementById('submit').removeAttribute("disabled");
            }

            if(uname.value === '' || reply.value === '' || subject.value === '') {
                document.getElementById('submit').setAttribute("disabled", "");
            }
        }
        </script>
    </body>
</html>
