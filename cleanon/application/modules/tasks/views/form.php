<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    

    echo validation_errors();

    echo form_open('tasks/submit');
    
    echo "Title: ";
    echo form_input('title', $title);
    
    echo '<br />';
    
    echo "Priority: ";
    echo form_input('priority', $priority);
    
    echo '<br />';
    
    echo form_submit('submit', 'Submit');
    
    if (isset($update_id)) {
        echo form_hidden('update_id', $update_id);
    }
    
    echo form_close();
