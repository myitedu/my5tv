<?php
$q = $_GET['q']??1;
$title = "How are you buddy?";
?>
<div id="question_1" class="question">
    <div class="question_title"><?php echo $title;?></div>
    <div class="question_counter"><?php echo $q;?> of 20 questions</div>
    <div class="error">An error has occured</div>
    <div class="answers">
        <table class="table answers_table">
            <tr><td>&nbsp;</td><td><label title="Your answer"><input name="answer" type="radio"> Good </label></td></tr>
        </table>
    </div>
</div>