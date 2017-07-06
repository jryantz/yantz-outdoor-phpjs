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
                    <div class="c12 cf">
                        <input type="text" name="name" id="name" placeholder="Your Name">
                    </div>

                    <div class="c12 cf">
                        <input type="text" name="subject" id="subject" placeholder="Subject">
                    </div>

                    <div class="c12 cf">
                        <textarea name="area" id="area" rows="10" cols="100"></textarea>
                    </div>

                    <div class="c12 cf">
                        <input type="submit" name="submit" value="Submit">
                    </div>
                </form>
            </div>
        </section>

        <?php require_once 'includes/footer.inc.php'; ?>
    </body>
</html>
