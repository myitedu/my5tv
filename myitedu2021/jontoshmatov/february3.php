 
<?php
$age = $_GET['age']??21;
if ($age < 21){
    echo "I am sorry, we are not able to sell this product";
}elseif($age>60){
    echo "No ID is required to purchase anything";
}else{
    echo "Sure, np";
}
?>
<div>
    <form>
        <p>
            <h4>Enter your age form</h4>
        <hr>
        </p>
        <p>Enter: <input name="age" type="number" placeholder="Your Age">
        <button type="submit">GO</button>
        </p>
        <hr>
    </form>
</div>
</body>
</html>