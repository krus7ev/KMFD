
<h1>Your Tasks</h1>

<?php
    
    echo anchor('tasks/create', '<p>Create New Task</p>');

    foreach ($query->result() as $row) {
        $edit_url = 'http://localhost/starter/tasks/create/'.$row->id;
        echo "<h2>".$row->title." &nbsp; &nbsp; <a href='".$edit_url."'>Edit</a></h2>";
    }
    
    echo "<hr>";
    echo $base_url;
    
    $variable = "Very Able";
    
    $this->load->module('nofun');
    $this->nofun->sayhello($variable);
    
    echo "<hr>";
    
    echo Modules::run('nofun/sayhello', $variable);

