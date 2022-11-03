<?php
    try
    {
        include 'Controler/controler.php';
        $controler = new Controler();
        $controler->displayVue();

    }
    catch (Exception $e)
    {

    }
?>