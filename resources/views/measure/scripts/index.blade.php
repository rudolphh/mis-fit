@section('scripts')

<script type="text/javascript">
    
$(document).ready(function(){


    $('#measurementTable').DataTable({
        "columnDefs": [
          { "orderable": false, "targets": 8 },
          { "orderable": false, "targets": 9 },
          {
            "targets": [ 6 ],
            "visible": false,
            "searchable": false
          },
          {
            "targets": [ 7 ],
            "visible": false,
            "searchable": false
          }
        
        ]
    });


    $('a.delete').click(function(e){
      e.preventDefault();

      var href = $(this).data('href');
      $('#myModal').modal({backdrop: true});
      $('#confirm-delete').attr('action', href);


    });
});
</script>


@stop
