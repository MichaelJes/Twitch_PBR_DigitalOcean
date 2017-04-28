<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 4/24/2017
 * Time: 2:55 PM
 */

namespace Mini\Model;

use Mini\Core\Model;

class Feedback extends Model
{
    public function addFeedback($confidant,$message)
    {
        $sql = "INSERT INTO Feedback (Confidant, Message) VALUES (:Confi, :Message)";
        $query = $this->db->prepare($sql);
        $parameters = array(':Confi' => $confidant, ':Message' => $message);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

}