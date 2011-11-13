<?php $this->load->view('head'); ?>    
<body>

        <div data-role="page">

            <div data-role="header">
                <a href="<?php echo site_url('login/signup') ?>" data-role="button" data-icon="start">sign up</a>
                <h1>Login siswa</h1>
            </div>

            <div data-role="content">
                <form action="<?php echo site_url("login/otentik"); ?>" method="post">
                    <table align="center"><tr><td>
                        <img src="<?php base_url(); ?>template/images/logo.png"></td></tr>

                        <tr>
                            <td>
                                <label name="username">username
                                    <input type="text" name="username">
                                </label></tr><tr><td>
                                <label name="password">password
                                    <input type="password" name="password"></td>
                                </label></tr>
                        <tr>
                            <td>
                                <div data-role="controlgroup"  data-type="horizontal">
                                    <input type="reset" value="batal" data-inline="true">
                                    <input type="submit" value="masuk" data-icon="arrow-r" data-iconpos="right" data-inline="true">
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
<?php $this->load->view('foot'); ?>