<?php
    require_once('vendor/autoload.php');
    use App\classes\FullName;

    $fullName = new FullName($_POST);
    //$fullName->index();
    $result = $fullName->index();
    include 'index.php';
