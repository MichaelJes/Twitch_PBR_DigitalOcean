<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 3/19/2017
 * Time: 1:33 PM
 */

namespace Mini\Model;

use Mini\Model\Ludicolo;

class Milotic extends Ludicolo
{

    function returnCurrentGame()
    {
        $response =null;
        $response = file_get_contents("http://api.twitchplaysleaderboard.info/match/current");
        // remeber to fix this code when you publish
        return $response;
    }
    function showBluePokemon(){
        $bluePoko = [];
        $counter = 0;
        $game = json_decode($this->returnCurrentGame(), false);
        $pokeDex = $this->getAllItems();
        foreach ($game->blue->team as $value) {
            $poke = $value->name;
            $dex = $value->dexNumber;
            array_push($bluePoko, array("name"=>$poke,"dex"=>$dex,"winrate"=>'0',"points"=>'0'));
        }
        foreach ($bluePoko as $item){
            if ($item['dex'] != 0)
            {
                $number = $item['dex'] -1;
                $bluePoko[$counter]['winrate'] = $pokeDex[$number]->winPrecent;
                $bluePoko[$counter]['points'] = $pokeDex[$number]->points;

            }
            $counter++;
        }
        return $bluePoko;


    }
    function showRedPokemon(){
        $redPoko = [];
        $counter = 0;
        $game = json_decode($this->returnCurrentGame(), false);
        $pokeDex = $this->getAllItems();
        foreach ($game->red->team as $value) {
            $poke = $value->name;
            $dex = $value->dexNumber;
            array_push($redPoko, array("name"=>$poke,"dex"=>$dex,"winrate"=>'0',"points"=>'0'));
        }
        foreach ($redPoko as $item){
            if ($item['dex'] != 0)
            {
                $number = $item['dex'] -1;
                $redPoko[$counter]['winrate'] = $pokeDex[$number]->winPrecent;
                $redPoko[$counter]['points'] = $pokeDex[$number]->points;
            }
            $counter++;
        }
        return $redPoko;


    }
    function teamWinPrecentage($blue,$red){
        $teamWin = [];
        //red
        $sumRed = 0;
        $sumBlue = 0;
        foreach ($red as $value){
            $sumRed = $sumRed + $value['winrate'];
        }
        foreach ($blue as $value){
            $sumBlue = $sumBlue + $value['winrate'];
        }
        $sumAll = $sumBlue + $sumRed;
        if ($sumAll != 0){
            $sumBlue = ($sumBlue / $sumAll) * 100;
            $sumRed = ($sumRed / $sumAll) * 100;
            $sumBlue = round($sumBlue,2);
            $sumRed = round($sumRed,2);
        }
        array_push($teamWin,$sumRed,$sumBlue);
        return $teamWin;

    }


}