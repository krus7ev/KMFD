<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
            @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
        </style>
        <link rel="stylesheet" href='<?php echo base_url(); ?>/styles/login_page.css'/>
        <script src="scripts/prefixfree.min.js"></script>
    </head>
    <body>  
        <?php
            
            echo form_open('users/submit');
            echo"<table><tr><td>";
            echo "Username: ";
            echo "</td><td>";
            echo form_input('username', '');
            echo "</td></tr><tr><td>";
            echo "Password: ";
            echo "</td><td>";
            echo form_password('pword', '');
            echo "</td></tr><tr><td colspan=2>";

            echo '<input type="submit" value="Login"></td></tr></table>';
            echo form_close();
            echo validation_errors();
        ?>
    </body>
</html>
