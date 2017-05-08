<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 5/5/2017
 * Time: 9:22 AM
 */
?>
<div class="container">
    <div class="section">
        <h4 class="privateSite center-align">Feedback Overview</h4>
        <div class="row">
            <?php foreach ($comments as $comment) { ?>
                <?php
                    $color = "blue-grey darken-4";
                    if ($comment->TypeOf == "Technical"){
                        $color = "grey darken-2";
                    }
                    if ($comment->TypeOf == "Question"){
                        $color = "brown darken-3";
                    }
                    if ($comment->TypeOf == "Suggestion"){
                        $color = "deep-orange accent-4";
                    }
                ?>
                <div class="col s12 m12 l4">
                    <div class="card small <?php echo $color ?>">
                        <div class="card-content white-text">
                            <span class="card-title"><?php if (isset($comment->Confidant)) echo htmlspecialchars($comment->Confidant, ENT_QUOTES, 'UTF-8'); ?></span>
                            <p><?php echo $comment->Message ?></p>
                        </div>
                        <div class="card-action right-align">
                            <a href="<?php echo URL . 'feedback/deleteFeedback/' . htmlspecialchars($comment->id, ENT_QUOTES, 'UTF-8'); ?>">Mark resolved</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

