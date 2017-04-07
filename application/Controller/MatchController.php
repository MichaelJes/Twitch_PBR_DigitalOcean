<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 3/19/2017
 * Time: 12:06 PM
 */

namespace Mini\Controller;
use Mini\Model\Ludicolo;
use Mini\Model\Milotic;

class MatchController
{
    public function index()
    {
        $milo = new Milotic();
        $ludi = new Ludicolo();
        $current = $milo->showBluePokemon();
        $blueCurrent = $milo->showRedPokemon();
        $team = $milo->teamWinPrecentage($current,$blueCurrent);
        //$balance = $ludi->returnUserBalance('MayonakaYuki');
        require APP . 'view/_templates/header.php';
        require APP . 'view/milotic/index.php';
        require APP . 'view/_templates/footer.php';
    }

}