<div class="container">
    <div class="section">
    <h3>Feedback</h3>
        <form action="<?php echo URL; ?>songs/addsong" method="POST">
            <div class="row">
                <div class="input-field col s4">
                    <input id="first_name" type="text" class="validate" name="user" value="" required />
                    <label for="first_name" >Name</label>
                </div>
            </div>
            <textarea name="editor1"></textarea>
            <button class="btn waves-effect waves-light  red " type="submit" name="submit_feedback" value="Submit">Submit
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</div>
