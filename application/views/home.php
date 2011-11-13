<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Utama</title>
        <link rel="stylesheet" href="<?php base_url(); ?>template/jquerymobile/jquery.mobile-1.0a1.min.css" />
        <script src="<?php base_url(); ?>template/jquerymobile/jquery-1.4.3.min.js"></script>
        <script src="<?php base_url(); ?>template/jquerymobile/jquery.mobile-1.0a1.min.js"></script>
        <script>
            $(document).ready(function() {
            // disable ajax nav
            $.mobile.ajaxLinksEnabled = false;
            });
        </script>
    </head>
    <body>

        <div data-role="page">

            <div data-role="header">
                <h1>Halaman Utama</h1>
            </div>

            <div data-role="content">
                joss
            </div>

            <div data-role="footer">
                <h4>Copyright &copy;</h4>
                <a href="<?php echo site_url('login/logout') ?>" data-role="button" data-icon="refresh">Log out</a>
            </div>
        </div>

    </body>
</html>