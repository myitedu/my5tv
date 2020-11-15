<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Shopping Cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="modal_body" class="modal-body">

            </div>
            <?php include_once "checkout.php";?>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="checkout_button">Checkout</button>
            </div>
        </div>
    </div>
</div>

<style>
    .last_td{
        text-align: center;
        width: 50px;
    }
    .remove_item_icon{
        width: 40%;
    }
    #checkout{
        margin: auto;
        width: 95%;
        padding: 5px;
        background-color: cornsilk;

    }
</style>