<?php
include('vue/common/head.html');

$loc = filter_input(INPUT_GET, "loc");
switch ($loc) {
    case 'index':
        include("vue/content/index_content.php");
        break;
    case 'delete':
        include('controller/c_delete.php');
        include("vue/content/delete_content.php");
        break;
    case 'edit':
        include('controller/c_edit.php');
        include("vue/content/edit_content.php");
        break;
    case 'read':
        include('controller/c_read.php');
        include("vue/content/read_content.php");
        break;
    case 'add':
        include("vue/content/add_content.php");
        break;
    case null:
        include("vue/content/index_content.php");
        break;
    default:
        include("vue/content/404.php");
        break;
}