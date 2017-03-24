<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 3/17/2017
 * Time: 8:51 AM
 */

namespace Mini\Model;
use Mini\Core\Model;

class Ludicolo
{

    public $Pokedex = [];
    function Getdata($x){
        $forceDownload=false;
        $response =null;
        $file = "Match/Match{$x}.json";
        if(!file_exists($file) || $forceDownload){
            $response = file_get_contents("http://api.twitchplaysleaderboard.info/match/".$x);
            file_put_contents($file,$response);
        }
        if(!$response){
            $response = file_get_contents($file);
        }
        return $response;
    }
    function createArray(){
        require APP . 'Data/Pokemon.php';
        foreach ($Pokemon as $value) {
            array_push($this->Pokedex,array("Name" => $value, "Wins" => 0, "Loses" => 0, "WinPrecent" => 0, "Points" => 0, "dexNumber" => ''));}
        $this->Pokedex[31]['dexNumber'] = 32;
        $this->Pokedex[28]['dexNumber'] = 29;
        $this->Pokedex[177]['dexNumber'] = 178;
    }
    function winsAndLoses(){
        $total = 12000;
        for ($x = 1; $x <= $total; $x++) {
            $json_object = json_decode($this->Getdata($x), false);
            if ($json_object->success)
            {
                $winner = $json_object->battle_winner;
                foreach ($json_object->blue->team as $value) {
                    if ($value != null) {
                        $Poke = $value->name;
                        if ($Poke != '') {
                            $dex = $value->dexNumber;
                            if ($winner == 'red') {
                                $this->Pokedex[$dex - 1]['Loses']++;
                                $this->Pokedex[$dex - 1]['dexNumber'] = $dex;
                                //Add Pokemon here instead of including the Pokemon.php file
                            } else //Blue wins
                            {
                                $this->Pokedex[$dex - 1]['Wins']++;//technically works needs more work and remeber -1 to the dex number so it works
                            }
                        }
                    }


                }
                foreach ($json_object->red->team as $value) {
                    if ($value != null)
                    {
                    $Poke = $value->name;
                    if ($Poke != '') {
                        $dex = $value->dexNumber;
                        if ($winner == 'blue') {
                            //echo 'winner Red';
                            $this->Pokedex[$dex - 1]['Loses']++;
                            $this->Pokedex[$dex-1]['dexNumber'] = $dex;

                        } else //red wins
                        {
                            //echo 'Winner blue';
                            $this->Pokedex[$dex - 1]['Wins']++;
                        }
                    }
                }

            }
            }
            else
            {

            }

        }
        $this->calculate();
    }
    function printData(){
        print_r($this->Pokedex);
    }
    function returnArray(){
        return $this->Pokedex;
    }
    function calculate(){
        $z = 0;
        foreach ($this->Pokedex as $value) {
            if ($value['Loses'] == 0 & $value ['Wins']== 0)
            {
                $precentageFormated ='0';
            }
            elseif ($value['Loses'] == 0)
            {
                $precentageFormated = '100';
            }
            else
            {
                $precentage =$value['Wins']/($value['Wins']+$value['Loses']);
                $precentageFormated =round(($precentage*100),0);
            }
            $this->Pokedex[$z]['WinPrecent'] = $precentageFormated;
            $this->Pokedex[$z]['Points'] = $value ['Wins'] - $value['Loses'] ;
            $z++;
            //array_push($Pokedex, array("Name" => $value, "Wins" => $PokeWin[$value], "Loses" => $PokeLose[$value], "WinPrecent" => $precentageFormated, "Points" => $sum));

        }

    }
    function TableItems(){
        foreach ($this->Pokedex as $value) {
            $imageUrl = 'img/icons/'.$value['dexNumber'].'.png';
            echo "<tr><td>","<img alt=\"{$value['Name']}\" src=\"{$imageUrl }\"/></td><td>", $value['Name'],"</td>","<td>", $value['Wins'], "</td>","<td>", $value['Loses'], "</td>","<td>",$value['WinPrecent'].'%' , "</td>","<td>",$value['Points'] , "</td><tr>";
        }
        echo '</tbody>','</table>';
    }
    function returnUserInfo($name)
    {
        $response =null;
        //$file = "User/{$name}.json";
        $response = file_get_contents("http://api.twitchplaysleaderboard.info/user/balance/".$name);
        //file_put_contents($file,$response);
        // remeber to fix this code when you publish
        return $response;
    }
    function returnUserBalance($name){

        $json_object = json_decode($this->returnUserInfo($name), false);
        if ($json_object->success)
        {
            return $json_object->balance->calculated->amount;
        }
        else{
            return '0';
        }

    }


}