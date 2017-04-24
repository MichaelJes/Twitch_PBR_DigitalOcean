<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 4/24/2017
 * Time: 2:52 PM
 */

namespace Mini\Controller;
use Mini\Model\Feedback;

class FeedbackController
{
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/example_two.php';
        require APP . 'view/_templates/footer.php';
    }
    public function submitFeedback()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_feedback"])) {
            // Instance new Model (Song)
            $feed = new Feedback();
            // do addSong() in model/model.php
            $Song->addSong($_POST["artist"], $_POST["track"],  $_POST["link"]);
        }

        // where to go after song has been added
        header('location: ' . URL . 'songs/index');
    }

}