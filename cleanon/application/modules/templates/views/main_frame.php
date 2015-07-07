<!DOCTYPE html>
<html>
    <head>
        
        
        <!--<link rel="stylesheet" href='<?php echo base_url(); ?>/styles/one_col.css'/>-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/styles/sitee/main.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/styles/sitee/bootstrap.css">

        
        <title>Cleaning services</title>
        
    </head>
    <body>
        <div class="nav nav-pills">
            <div class="container">
                <ul class="pull-left">
                    <li>
                        <a href="">
                            <img class="site-logo" alt="Cleaning service that you want!." src=styles/sitee/logo.gif>
                        </a>
                    </li>

                    <?php                        
                        foreach ($query->result() as $query_row)
                        {
                            switch($query_row->page_title) 
                            {
                                case "Home" : echo "<li><a href='#'>".$query_row->page_title."</a></li>";
                                break;
                                case "About" : echo "<li><a href='#'>".$query_row->page_title."</a></li>";
                                break;
                                case "Services" : echo "<li><a href='#'>".$query_row->page_title."</a></li>";
                                break;
                                case "Contacts" : echo "<li><a href='#'>".$query_row->page_title."</a></li>";
                                break;
                                case "Prices" : echo "<li><a href='#'>".$query_row->page_title."</a></li>";                      
                            }                            
                        }
                    ?>
                </ul>
            </div>
        </div>
        
        <div id="conteneur">
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
        
        
        <div class="footer">
            <div class="container">
                <div class="pull"
                    <?php                        
                        foreach ($query->result() as $query_row)
                        {
                            switch($query_row->page_title) 
                            {
                                case "Terms & Conditions" : echo "<li><a href='#'>".$query_row->page_title."</a></li>";
                                break;
                                case "Privacy policy" : echo "<li><a href='#'>".$query_row->page_title."</a></li>";
                                break;
                                case "Contacts" : echo "<li><a href='#'>".$query_row->page_title."</a></li>";
                            }
                        }
                    ?>               
            </div>
        </div>
        
    </body>
</html> 