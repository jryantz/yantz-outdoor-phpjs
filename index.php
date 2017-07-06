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
                <div class="c12 cf">
                    <form action="" method="post">
                        <input type="text" name="name" id="name" placeholder="Your Name">
                        <input type="text" name="subject" id="subject" placeholder="Subject">
                        <textarea name="area" id="area" rows="60" cols="30"></textarea>
                    </form>
                </div>
            </div>
        </section>

        <?php require_once 'includes/footer.inc.php'; ?>
    </body>
</html>
