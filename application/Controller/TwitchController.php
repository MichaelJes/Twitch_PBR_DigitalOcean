<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 4/17/2017
 * Time: 2:36 PM
 */

namespace Mini\Controller;


class TwitchController
{

    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/TwitchStream.php';
        require APP . 'view/_templates/footer.php';
    }
}