@section('scripts');


  <script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#members-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('members.ajax_index') }}",
          "oLanguage": {
          "sLengthMenu": "_MENU_",
          "sSearch": ""
          }
       
         
        });
    });
  </script>

@stop