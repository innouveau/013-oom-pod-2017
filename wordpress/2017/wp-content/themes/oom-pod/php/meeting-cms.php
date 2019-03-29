<?php

require 'InterfaceBuilder.php';
require 'PostHandler.php';
require 'Program.php';

function setupInterface()
{

    if (in_category('meeting')) {
        $builder = new InterfaceBuilder(Program::$data);
        $builder->init();
    }
}



function onSavePost($post_id)
{
    $handler = new PostHandler($_POST, Program::$data, $post_id);
    $handler->process();
}


add_action( 'add_meta_boxes', 'setupInterface' );
add_action( 'save_post', 'onSavePost' );




