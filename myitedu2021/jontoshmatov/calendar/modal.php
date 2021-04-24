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
                    <p>Title: <input id="calendar_modal_title" required name="title" placeholder="Your Event Title" type="text"></p>
                    <p>Description: <br><textarea id="calendar_modal_description" required name="description" placeholder="Your Event Description">

                        </textarea></p>
                    <p>Date: <input required id="calendar_modal_day" type="date" value="<?php echo $today_date;?>">
                    </p>
                    <p>Time: <input id="calendar_modal_time" required type="time"></p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button id="btn_save_events" type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>