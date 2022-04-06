<!DOCTYPE html>
<html lang="<?= env('APP_LOCALE'); ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
        <link rel="stylesheet" href="public/app.css">
    </head>
    <body>
        <div class="wrapper">
            <?= $this->insert('layout/header'); ?>
            
            <?= $this->insert('layout/main', [
                'title' => $title,
                'content' => $content
            ]); ?>
            
            <?= $this->insert('layout/footer'); ?>
        </div>
        <div class="circles">
            <div class="circle"></div>
            <div class="circle"></div>
        </div>

	    <script src="public/app.js"></script>
    </body>
</html>