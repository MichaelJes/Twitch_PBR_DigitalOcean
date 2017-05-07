<style>
    .radioInline {
        display: inline;
        margin-left: 15px;

    }
    .topo{
        padding-top: 5px;
    }

</style>

<div class="container">
    <div class="section">
    <h3 class="editorz">Feedback</h3>
        <form action="<?php echo URL; ?>Feedback/submitFeedback" method="POST">
            <div class="row">
                <div class="input-field col s4">
                    <input id="first_name" type="text" class="validate" name="user" value="" required />
                    <label for="first_name" >Name</label>
                </div>
                <div class="topo">
                    <h6>Feedback type:</h6>
                    <div class="radioInline">
                        <input  value="Technical" name="feedType" type="radio" id="tech" />
                        <label for="tech">Technical</label>
                    </div>
                    <div class="radioInline">
                        <input value="Question" name="feedType" type="radio" id="que" />
                        <label for="que">Question</label>
                    </div>
                    <div class="radioInline">
                        <input  value="Suggestion" name="feedType" type="radio" id="sug" />
                        <label for="sug">Suggestion</label>
                    </div>
                    <div class="radioInline">
                        <input value="Other" name="feedType" type="radio" id="other" checked/>
                        <label for="other">Other</label>
                    </div>
                </div>
            </div>
            <textarea name="editor1"></textarea>

            <button class="btn waves-effect waves-light  red " type="submit" name="submit_feedback" value="Submit">Submit
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</div>
