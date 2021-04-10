$( function() {
    let name = '';
    let old_row = '';
    let old_letter = '';
    let moved = false;
    $( ".icon" ).draggable();

    $( ".droppable" ).droppable({
        drop: function( event, ui ) {
            old_row = $(this).data('row');
            old_letter = $(this).data('letter');


            moved = true;

            var next_row = old_row;
            var next_letter = old_letter;


            if (name == 'pawn') {
                pawnMove(next_row, next_letter, old_row, old_letter);
            }

        }
    });


    $(document).on("mouseover",".icon", function () {
       var getname = $(this).data('name');
       var row = $(this).parent('td').data('row');
       var lt = $(this).parent('td').data('letter');
       name = getname;
       old_row = row;
       old_letter = lt;
    });


    function pawnMove(next_row, next_letter, old_row, old_letter){
       console.log("new:" + next_row);
       console.log("prevoius: " + old_row);
    }


} );