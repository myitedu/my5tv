$( function() {
    $( ".icon" ).draggable();
    $( ".droppable" ).droppable({
        drop: function( event, ui ) {
            $( this )
                .addClass( "ui-state-highlight" );
        }
    });


    $(".chess_cell").click(function () {
       var row = $(this).data(('row'));
       var letter = $(this).data(('letter'));
       $(this).html(row+' '+letter);
    });


} );