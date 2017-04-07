<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 3/17/2017
 * Time: 8:48 AM
 */

namespace Mini\Controller;

use Mini\Model\Ludicolo;

class PokeController
{
    public function index()
    {

        $Ludi = new Ludicolo();
        // Instance new Model (Song)
        // getting all songs and amount of songs
        //$balance = $Ludi->returnUserBalance('mayonakayuki');
        $pokeDex = $Ludi->getAllItems();
        //$Ludi->createArray();
        //$Ludi->winsAndLoses();
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/ludicolo/index.php';
        $Ludi->TableItems();
        require APP . 'view/_templates/footer.php';
    }

}