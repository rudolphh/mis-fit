@section('scripts')

<script type="text/javascript">
    
$(document).ready(function(){

$('body').on('click', '[data-editable]', function(){
  
  var $el = $(this);
              
  var $input = $('<input/>').val( $el.text() );
  $el.replaceWith( $input );
  
  var save = function(){
    var $p = $('<span data-editable />').text( $input.val() );
    $input.replaceWith( $p );
  };
  
  /**
    We're defining the callback with `one`, because we know that
    the element will be gone just after that, and we don't want 
    any callbacks leftovers take memory. 
    Next time `p` turns into `input` this single callback 
    will be applied again.
  */
  $input.one('blur', save).focus();
  
});// end (document).ready


    $('#measurements-table').DataTable({
        // processing: true,
        // serverSide: true,
        /* ajax: '{{ route('measurements.serverSide') }}',*/
        "aaSorting": [],
        "oLanguage": {
          "sLengthMenu": "_MENU_",
          "sSearch": ""
       
         },
        "columnDefs": [
          // { "orderable": false, "targets": 8 },
          // { "orderable": false, "targets": 9 },
          // {
          //   "targets": [ 6 ],
          //   "visible": false,
          //   "searchable": false
          // },
          // {
          //   "targets": [ 7 ],
          //   "visible": false,
          //   "searchable": false
          // }
        
        ]
    });


    // var table = $('#example').DataTable();

    // $('#measurementTable tbody').on( 'click', 'tr', function () {
    //     if ( $(this).hasClass('selected') ) {
    //         $(this).removeClass('selected');
    //     }
    //     else {
    //         table.$('tr.selected').removeClass('selected');
    //         $(this).addClass('selected');
    //     }
    // } );
 
    // $('#button').click( function () {
    //     table.row('.selected').remove().draw( false );
    // } );









// FOR DELETE

    $('a.delete').click(function(e){
      e.preventDefault();

      var href = $(this).data('href');
      $('#myModal').modal({backdrop: true});
      $('#confirm-delete').attr('action', href);


    });




$('#measurements-table').removeClass('hidden');



});
</script>


@stop
