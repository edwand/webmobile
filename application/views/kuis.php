<!DOCTYPE html>
<html>
    <head>
        <title>Test Online</title>
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
                <h1>Test Online</h1>
            </div>

            <div data-role="content">
                <form action="" method="post">
                    <?php foreach ($kuis as $m) {
                    ?>
                        <legend><?php echo $m['id'] . '. ' . $m['pertanyaan']; ?></legend>
                        <fieldset data-role="controlgroup">
                            <input type="radio" name="A" id="radio-choice-1" value="A" />
                            <label for="A"><?php echo $m['jawaban_A']; ?></label>

                            <input type="radio" name="B" id="radio-choice-2" value="B"  />
                            <label for="B"><?php echo $m['jawaban_B']; ?></label>

                            <input type="radio" name="C" id="radio-choice-3" value="C"  />
                            <label for="C"><?php echo $m['jawaban_C']; ?></label>

                            <input type="radio" name="D" id="radio-choice-4" value="D"  />
                            <label for="D"><?php echo $m['jawaban_D']; ?></label>
                        </fieldset>
                    <?php } ?>
                    <div data-role="controlgroup"  data-type="horizontal">
                        <input type="reset" value="batal" data-inline="true">
                        <input type="submit" value="jawab" data-icon="arrow-r" data-iconpos="right" data-inline="true">
                    </div>
                </form>
            </div>

            <div data-role="footer">
                <h4>Copyright &copy;</h4>
                <a href="<?php echo site_url('login/logout') ?>" data-role="button" data-icon="refresh">Log out</a>
            </div>
        </div>

    </body>
</html>