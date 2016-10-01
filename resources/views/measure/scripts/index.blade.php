@section('scripts')

<script type="text/javascript">
    
$(document).ready(function(){


    $('#measurementTable').DataTable({
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




$('#measurementTable').removeClass('hidden');



});
</script>


@stop
