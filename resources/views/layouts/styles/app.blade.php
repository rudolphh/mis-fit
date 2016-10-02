<!-- Fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">

<!-- Styles -->


<!-- This is actually bootstrap -->
<link href="/css/app.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" 
      href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"> 




<style>
  body {
        font-family: 'Lato';   
  }

	.fa-btn {
	    margin-right: 0px;
	}
	.fa-2x {
	    font-size: 2em;
	    vertical-align: middle;
      padding-right: 10px;
	}

	.modal-body p {
	    text-align: center;
	    margin: 5px 0px;
	    font-size: 16px;
	}

  .modal {
    text-align: center;
    padding: 0!important;
  }

  .modal:before {
    content: '';
    display: inline-block;
    height: 100%;
    vertical-align: middle;
    margin-right: -4px;
  }

  .modal-dialog {
    display: inline-block;
    text-align: left;
    vertical-align: middle;
      max-width: 600px;
      min-width: 350px;
  }

  .navbar-default .navbar-nav>.open>a {
      background-color: #eee;
      color: #555;
      text-align: right;
  }


  .navbar-nav .open .dropdown-menu {

      text-align: left;
  }

  .alert { text-align: center; }

  .modal .alert { margin-bottom: 0px; }

   .dropdown-menu > li {
      display: inline-flex;
      
  }
  .open > ul {
      display: inline-flex !important;
  }

  #content-title {
    font-size: 18px;
  }

  .logo { font-size: 24px; }





table.dataTable.order-column tbody tr>.sorting_1 {
background-color: #337ab7;
color: white;

  } 
  tbody tr>.sorting_1 a { color: white; }
  tbody tr:hover>.sorting_1 a { color: black; }

isplay tbody tr:hover>.sorting_1, table.dataTable.order-column.hover tbody tr:hover>.sorting_1 {
    background-color: #eaeaea;
    color: black;
}


table.hidden { display: none; }

/*    .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, 
    .navbar-default .navbar-nav>.open>a:hover {
	    background-color: darkblue;
	    color: #fff;
	}*/
</style>

@yield('styles')
    