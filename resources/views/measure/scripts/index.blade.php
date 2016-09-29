@section('scripts')

<script type="text/javascript">
    
$(document).ready(function(){



    $('a.delete').click(function(e){
      e.preventDefault();

      var href = $(this).data('href');
      $('#myModal').modal({backdrop: true});
      $('#confirm-delete').attr('action', href);


    });
});
</script>


@stop
