<!Doctype html>
<html>
<head>
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Cache-Control" content="no-cache">
    <title><?php echo $title;?></title>
    <link rel="shortcut icon" href="/media/images/favicon.ico" type="image/x-icon">
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

<header class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"/>
                <span class="icon-bar"/>
                <span class="icon-bar"/>
            </button>
            <h5 class="navbar-text"><a style="color: #ffffff; " href="<?php echo URL::site('mine'); ?>"><span class="glyphicon glyphicon-home"></span> <?php
                    echo $user->username; ?> of <?php echo $user->department; ?></a></h5>
        </div>
        <div class="navbar-collapse collapse pull-right">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo URL::site('talk'); ?>">TALK</a>
                </li>
                <li>
                    <a href="<?php echo URL::site('mart'); ?>">MART</a>
                </li>
                <li>
                    <a href="<?php echo URL::site('worldcup'); ?>">WORLDCUP</a>
                </li>
                <li>
                    <a href="<?php echo URL::site('settings'); ?>" data-toggle="tooltip" data-placement="bottom" title="settings"><span class="glyphicon glyphicon-wrench"></span></a>
                </li>
                <li>
                    <a href="<?php echo URL::site('user/exit'); ?>" data-toggle="tooltip" data-placement="bottom" title="exit"><span class="glyphicon glyphicon-log-out"></span></a>
                </li>
            </ul>
        </div>
    </div>
</header>
<div id="content">
    <?php echo $content; ?>
</div>
<div id="footer" style="padding-top: 40px">
    <div class="row">
        <h4 class="footertext"><center>auconnect.in</center></h4>
    </div>
</div>

<?php foreach ($scripts as $script) : ?>
    <script src="/media/js/<?php echo $script; ?>.js"></script>
<?php endforeach; ?>

<script>
    $(function () {
        setNavigation();
    });
    function setNavigation() {
        var path = window.location.pathname;
        path = path.replace(/\/$/, "");
        path = decodeURIComponent(path);

        $(".nav a").each(function () {
            var href = $(this).attr('href');
            if (path.substring(0, href.length) === href) {
                $(this).closest('li').addClass('active');
            }
        });
    }
</script>
</body>
</html>

