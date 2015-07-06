<html>

<head>
    <meta charset="UTF-8">
    <title>CodePen - Random Login Form</title>
    <style>
        @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
        @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
    </style>
    <link rel="stylesheet" href='<?php echo base_url(); ?>/styles/login_page.css'/>
    <script src="scripts/prefixfree.min.js"></script>
</head>
<body>
    <div class="body"></div>
        <div class="grad"></div>
        <div class="header">
            <div>CULT<span>R</span></div>
        </div>
        <br>
        <div class="login">
            <?php
                if (!isset($view_file)) {
                    $view_file = "";
                }

                if (!isset($module)) {
                    $module = $this->uri->segment(1);
                }

                if(($view_file != "") && ($module != "")) {
                    $path = $module.'/'.$view_file;
                    $this->load->view($path);
                }
            ?>
        </div>
        <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
</body>

</html>


    <!-- <input type="text" placeholder="username" name="user"><br>
    <input type="password" placeholder="password" name="password"><br>
    <input type="button" value="Login">