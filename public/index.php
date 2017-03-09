<?php
require '../vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__. '/../');
$dotenv->load();
$dotenv->required(['TITLE']);
?><!DOCTYPE html>
<html>
    <head>
        <title><?php echo getenv('TITLE'); ?></title>
        <style>
            body { background: #eeeeee; font-size: 23px; } .center-the-dang-thing { position:absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); font-family:monospace, sans-serif; text-align:center; max-width: 400px; }
        </style>
    </head>
    <body>
    <div class="center-the-dang-thing">
        <h3>Greetings stranger!</h3>
        <div>
            We currently have this website on our todo list, so we'll be getting to this soon. <?php if(!empty(getenv('URL'))):?>
            In the mean time you can checkout <a href="<?php echo getenv('URL'); ?>">our website</a>!
            <?php endif; ?>
        </div>
    </div>
    </body>
</html>
