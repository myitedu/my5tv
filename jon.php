Explaining Form Select <br>
<form>
    <select name="field">

        <?php
        $field = $_GET['field']??'A';

        $columns = range('A','Z');

        foreach ($columns as $column){
            if ($field==$column){
                echo "<option selected value=\"$column\">$column</option>";
            }else{
                echo "<option value=\"$column\">$column</option>";
            }

        }

        ?>




    </select>

    <button type="submit">GO</button>
</form>

<hr>
<div class="letter">
    <?php echo $field;?>
</div>

<style>
    .letter{
        text-align: center;
        font-size: 180px;
        color: rebeccapurple;
        font-weight: bolder;
    }
</style>