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
        require APP . 'view/Feedback/Feedback_Index.php';
        require APP . 'view/_templates/footer.php';
    }
    public function thanks()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/Feedback/feedbackRedirect.php';
        require APP . 'view/_templates/footer.php';

    }
    public function submitFeedback()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_feedback"])) {
            // Instance new Model (Song)
            $feed = new Feedback();
            // do addSong() in model/model.php
            //$feed->addFeedback($_POST["user"], $_POST["editor1"]);
        }

        // where to go after song has been added
        header('location: ' . URL . 'Feedback/thanks');
    }

}