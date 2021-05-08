<!-- Modal -->
<?php
$today_date = "2021-04-22"
?>
<div class="modal fade" id="calendar_modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create a new event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="calendar_modal2_form">

                <form>
                <table class="modify_event_table">
                    <tr><td>Event Title: </td><td><input type="text" id="modify_event_title" name="event_title" placeholder="Event Title"></td></tr>
                    <tr><td>Event Description: </td><td><textarea placeholder="Event Description" id="modify_event_description" name="event_description"></textarea></td></tr>
                    <tr><td>Event Date: </td><td><input type="date" id="modify_event_date" name="event_date" placeholder="Event Date"></td></tr>
                    <tr><td>Event Time: </td><td><input type="time" id="modify_event_time" name="event_time" placeholder="Event Time"></td></tr>
                    <tr><td>Event Duration: </td><td><input type="number" id="modify_event_duration" name="event_duration" placeholder="Event Duration"></td></tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <input type="hidden" id="modify_event_id" value="" name="event_id">
                            <button type="reset" class="btn btn-dark">Reset</button>
                            <button id="modify_event_btn_submit" type="button" class="btn btn-info">Modify</button>
                        </td></tr>
                </table>
                </form>


            </div>

            <div class="modal-body2">
                 fgvdgtretgertertertertert
            </div>

            <div class="modal-footer">
                 Made by MYITEDU.US Students
            </div>
        </div>
    </div>



</div>

<style>

    .modify_event_table textarea{
        width: 98%;
        height: 130px;
    }

    .modify_event_table td:first-child{
        width: 30%;
    }
    .modify_event_table tr:last-child td button{
        /*Last tr child*/
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .modify_event_table{
        width: 95%;
        margin: auto;
    }
    .modify_event_table td, th{
        background: none;
        font-size: 14px;
        text-align: left;
        padding:2px;
        font-weight: normal;
        color: black;
    }

    .table_img_icons{
        text-align: center;
    }
    .table_img_icons img{
        width: 30px;
        height: 25px;
    }
    .modal-body2{
        overflow: auto;
    }
    .modal-body2 td{
        font-size: 14px;
        color: red;
        text-align: left;
        padding-left: 3px;
    }
    .calendar_modal2_form{
        background-color: #ffffff;
        z-index: 1000;
        position: relative;
        top: 0px;
        left: 0px;
        height: 100%;
        display: none;
    }
</style>