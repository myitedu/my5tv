<?php
$qid = $_GET['q']??1;
$total = $_GET['total']??1;
$total++;
$qid++;
?>
<form>
    <div data-total="<?php echo $total;?>" data-id="<?php echo $qid;?>" class="question">
        <h4>Congratulations!</h4>
        <hr>
        <h5>You PASSED!</h5>
        <p><?php echo "qid: $qid | total: $total" ?></p>
    </div>
</form>