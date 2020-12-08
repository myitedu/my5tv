<?php
require_once "database.php";
$db = new \Database\database("myitedu");
$sql = "SELECT q.id AS qid, q.question, q.quiz_id, a.question_id AS question_id, a.id AS aid, a.answers FROM questions AS q
RIGHT JOIN answers AS a
ON q.id = a.question_id
WHERE q.quiz_id = 1;";
$items = $db->sql($sql);
$questions = [];
foreach ($items as $item){
 $questions[$item['qid']][] = $item;
}
