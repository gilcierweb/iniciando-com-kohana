<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le styles -->
        <?php echo Html::style("bootstrap/css/bootstrap.css"); ?>
        <?php echo Html::style("bootstrap/css/bootstrap-responsive.css"); ?>

    </head>
    <body>
        <div class="container">
            <h1>Topo</h1>

            <div id="content" class="grid_16">
                <?php echo $content; ?>
            </div>

            <h1>Footer</h1>
        </div>
    </body>
</html>
