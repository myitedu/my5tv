<div id="jonmenu">
    <div class="input-group">
        <select class="custom-select" id="companies_lists" aria-label="Example select with button addon">
            <option selected>Choose...</option>
            <?php foreach ($company_names as $website){?>
            <option value="<?php echo $website;?>"><?php echo $website;?></option>
            <?php
                }
            ?>

        </select>
    </div>
</div>
<div class="clearfix"></div>