<!-- Modal -->
<?php
$today_date = "2021-04-22"
?>
<div class="modal fade" id="calendar_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create a new event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <p>Subject: <input name="subject" placeholder="Your Subject" type="text"></p>
                    <p>Date: <input id="calendar_modal_day" type="date" value="<?php echo $today_date;?>">
                    </p>
                    <p>Time: <input type="time"></p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>