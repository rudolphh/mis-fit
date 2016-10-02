<!DOCTYPE html>
<head>
  <link href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
  <table class="datatable">
    <thead>
      <tr>
        <th>Date</th>
        <th>Weight</th>
        <th>Neck</th>
        <th>Waist</th>
        <th>Hip</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>

  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('measurements.serverSide') }}'
        });
    });
  </script>

</body>
</html>