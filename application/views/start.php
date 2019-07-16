<!Doctype html>
<html>
<head>
    <title>Auconnect</title>
    <link rel="icon" href="/media/images/favicon.ico" type="image/x-icon">
    <?php foreach ($styles as $style) : ?>
        <link rel="stylesheet" href="/media/css/<?php echo $style; ?>.css" type="text/css"
              media="screen"/>
    <?php endforeach; ?>
    <script>
        setTimeout(function () {
            var el = document.getElementById('alwaysFetch');
            el.value = el.value ? location.reload() : true;
        }, 0);
    </script>
</head>
<body>
<input id="alwaysFetch" type="hidden" />
<div id="content">
    <?php echo $content; ?>
</div>
<?php foreach ($scripts as $script) : ?>
    <script src="/media/js/<?php echo $script; ?>.js"></script>
<?php endforeach; ?>
</body>
</html>