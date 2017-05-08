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
    //bættir feedback í databasið
    public function addFeedback($confidant,$type,$message)
    {
        $sql = "INSERT INTO Feedback (Confidant, TypeOf ,Message) VALUES (:Confi, :TypeF, :Message)";
        $query = $this->db->prepare($sql);
        $parameters = array(':Confi' => $confidant,':TypeF' => $type,':Message' => $message);
        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
    }
    //nær í feedback frá databasinu
    public function getAllFeedback()
    {
        $sql = "SELECT id, Confidant,  TypeOf, Message FROM Feedback";
        $query = $this->db->prepare($sql);
        $query->execute();
        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }
    public  function Securtiy()
    {
        $required = ['user', 'editor1'];
        $expected = ['user', 'editor1'];
        foreach ($_POST as $key => $value) {
            $temp = is_array($value) ? $value : trim($value);
            if (empty($temp) && in_array($key, $required)) {
                $missing[] = $key;
                ${$key} = '';
            } elseif (in_array($key, $expected)) {
                $temp = filter_var($temp, FILTER_SANITIZE_STRING);
                $temp = htmlentities($temp);
                ${$key} = $temp;

            }
        }
    }
    public function deleteFeedback($feedback_id)
    {
        $sql = "DELETE FROM Feedback WHERE id = :feedback_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':feedback_id' => $feedback_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }
}