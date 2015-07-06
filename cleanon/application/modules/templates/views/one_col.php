q<html>
    <head>
        <title>OneColumnLayout</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
        <link rel="stylesheet" href='<?php echo base_url(); ?>/styles/one_col.css'/>
    </head>
    <body>
        <div id="conteneur">
            <div id="header">CULTR.net</div>

            <div id="haut">
                <ul class="menuhaut">
                    <?php
                        foreach ($pages as $page)
                        {
                            echo "<li><a".$page."</a></li>";
                        }
                    ?>
                    <li><a href="">Homie</a></li>
                    <li><a href="">Dash</a></li>
                    <li><a href="">Articles</a></li>
                    <li><a href="">Gallery</a></li>
                    <li><a href="">Video</a></li>
                    <li><a href="">Audio IO</a></li>
                </ul>
            </div>

            <div id="centre">
                <h1>Welcome to the Homie Page!</h1>

                <h2>About</h2>

                <p>This will be the home of CULTR MEDIA - a unique new platform to provide a clutter of Hi-End cultural media to your web browser.</p>
                
                <h2> THA DATA LOADED:</h2>
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
        </div>
    </body>
</html> 