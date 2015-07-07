
<h1>Your Tasks</h1>

<?php
    
/*
    echo anchor('home/create', '<p>Create New Task</p>');

    foreach ($query->result() as $row) {
        $edit_url = 'http://localhost/cleanon/home/create/'.$row->id;
        echo "<h2>".$row->title." &nbsp; &nbsp; <a href='".$edit_url."'>Edit</a></h2>";
    }
*/    
    echo "<hr>";
    echo base_url();
    echo "<br>";
    
    $variable = "Very Able";
    
    
    //tui e pyrviq na4en da izvikash nqkva funkciq ot druk modulerks
    $this->load->module('nofun');
    $this->nofun->sayhello($variable);
    
    echo "<hr>";
    
    // a tui e naprao da pusnish celiq modol dirkeshan sas vste mu shemi v slu4aq pak funkciqa seihelo
    echo Modules::run('nofun/sayhello', $variable);

