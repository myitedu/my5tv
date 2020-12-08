<?php
require_once "database.php";
$parms = $_POST;
$q = $_GET['q'] ?? 1;
$q = (int)$q;
$user_id = 1;
$db = new \Database\database("myitedu");
if (!empty($parms['formdata'])) {
    $answer = $parms['formdata'];
    $p = explode("=", $answer);
    $question_id = explode("_", $p[0]);
    $question_id = $question_id[1] ?? 0;
    $question_id = (int)$question_id;
    $answer_id = $p[1] ?? 0;
    $answer_id = (int)$answer_id;
    $sql = "INSERT INTO users_answers (user_id, question_id, answer_id) VALUES ($user_id, $question_id,$answer_id);";
    $saved = $db->sql($sql);
}
$sql = "SELECT q.id AS qid, q.question, q.quiz_id, a.question_id AS question_id, a.id AS aid, a.answers FROM questions AS q
RIGHT JOIN answers AS a
ON q.id = a.question_id
WHERE q.quiz_id = 1;";
$items = $db->sql($sql);
$answered_questions = $db->sql("SELECT * FROM users_answers AS ua WHERE ua.question_id=$q AND user_id = 1;");
$questions = [];
$answered_id = null;
if (!empty($answered_questions[0]['answer_id'])){
    $answered_id = $answered_questions[0]['answer_id'];
}
foreach ($items as $item) {
    $questions[$item['qid']][] = $item;
}
$num = 0;
foreach ($questions as $question_id => $answers) {
    $num++;
    if ($num === $q) {
        ?>
        <form>
            <div data-total="<?php echo count($questions); ?>" data-id="<?php echo $num; ?>"
                 id="<?php echo 'question_' . $num; ?>" class="question">
                <div class="question_title"><?php echo $answers[0]['question']; ?></div>
                <div class="question_counter">
                    Question <span class="current_page_number"><?php echo $q . "</span> of " . count($questions); ?>
                        <br>
                        <div class="time_lapsed"></div>
                </div>
                <div class="error">An error has occured</div>
                <?php
                foreach ($answers as $answer) {
                    $answered_class = null;
                    if ($answer['aid'] == $answered_id){
                        $answered_class = "answered_class";
                    }else{
                        $answered_class = null;
                    }
                    ?>
                    <div class="answers <?php echo $answered_class;?>">
                        <table class="table answers_table">
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <label title="Your answer">
                                        <?php
                                        if ($answer['aid'] == $answered_id){
                                        ?>
                                        <input checked value="<?php echo $answer['aid'] ?>" name="answer_<?php echo $question_id; ?>" type="radio"> <?php echo $answer['answers']; ?>
                                            <?php
                                        }else{
                                            ?>
                                        <input value="<?php echo $answer['aid'] ?>" name="answer_<?php echo $question_id; ?>" type="radio"> <?php echo $answer['answers']; ?>
                                        <?php
                                        }
                                            ?>
                                    </label>
                                </td>
                            </tr>
                        </table>
                    </div>
                <?php } ?>
            </div>
        </form>
        <?php
    }
}
?>