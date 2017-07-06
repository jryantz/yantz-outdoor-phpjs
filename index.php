<html>
    <head>
        <title>Yantz Outdoor Collection</title>
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
        var name = document.getElementById('name');
        var subject = document.getElementById('subject');

        function check() {
            console.log(name);
            console.log(subject);

            if(name.value != '' && subject.value != '') {
                document.getElementById('submit').setAttribute("disabled", "false");
            } else {
                document.getElementById('submit').setAttribute("disabled", "true");
            }
        }
        </script>
    </body>
</html>
