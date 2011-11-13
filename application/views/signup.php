<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
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
                <h1>Sign up</h1>
            </div>

            <div data-role="content">

                <form action="<?php echo site_url('login/simpan'); ?>" method="post">
                    <table><tr><td>
                                <label>username
                                    <input type="text" name="username" placeholder="username"></label>
                            </td></tr>
                        <tr><td>
                                <label>password
                                    <input type="password"" name="password" placeholder="password"></label>
                            </td></tr>
                    </table>
                    <hr/>
                    <label>nama lengkap
                        <input type="text" name="nama" placeholder="nama lengkap">
                    </label>
                    <label for="flip-a">jenis kelamin<br>
                        <select name="jkel" data-role="slider">
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-Laki">Laki-laki</option>
                        </select>
                    </label>
                    <label>Tgl Lahir
                        <?php echo form_input('date', date('Y-m-d'), 'id="date"'); ?>
                    </label>
                    <label>Alamat
                        <textarea name="alamat" placeholder="alamat"></textarea>
                    </label>
                    <table align="right"><tr><td>
                                <div data-role="controlgroup"  data-type="horizontal">
                                    <input type="reset" value="batal" data-inline="true">
                                    <input type="submit" value="submit" data-icon="arrow-r" data-iconpos="right" data-inline="true">
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>

            </div>

            <div data-role="footer">
                <h4>Copyright &copy;</h4>
            </div>
        </div>

    </body>
</html>