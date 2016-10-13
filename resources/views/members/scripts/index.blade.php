@section('scripts');

  <script>
    $(document).ready(function(){
      $('#members-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('members.ajax_index') }}",
          "oLanguage": {
          "sLengthMenu": "_MENU_",
          "sSearch": "Search for Friends : "
          }
       
         
      });// end DataTable()


    });
  </script>

@stop