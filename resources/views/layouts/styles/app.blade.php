<!-- Fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">

<!-- Styles -->


<!-- This is actually bootstrap -->
<link href="/css/app.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"> 




<style>
  body {
        font-family: 'Lato';   
  }
  #left-nav { float: left; width: 70%; }
  #left-nav li { display: inline-table; }
  #right-nav { float: right; }

.measure {
  text-indent: -9999px;
  width: 32px;
  height: 24px;
  background-size: 32px 24px;
  vertical-align: bottom;
}

/*DATATABLES OVERRIDE FOR PAGINATION*/
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    border: none !important;
    background: #fff !important;
    background-color: #fff !important;
}
.dataTables_wrapper .dataTables_paginate .paginate_button {
     box-sizing: initial; 
     display: inline; 
     min-width: 0; 
     padding: 0 0; 
     margin-left: 0;
     text-decoration: none; 
     border: none !important;
}

/* color of main sections */
/*.panel-primary { border: none; }

.panel-primary>.panel-heading {
    color: black;
    background-color: white;
    border-color: #3097D1;
    border: none;
}
*/
	.fa-btn {
	    margin-right: 0px;
	}
	.fa-2x {
	    font-size: 2em;
	    vertical-align: middle;
      width: 36px;
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
/*      display: inline-flex;
*/      
  }
  .open > ul {
/*      display: inline-flex !important;
*/  }

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

tbody tr:hover>.sorting_1, table.dataTable.order-column.hover tbody tr:hover>.sorting_1 {
    background-color: #eaeaea;
    color: black;
}


table.hidden { display: none; }

/*    .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, 
    .navbar-default .navbar-nav>.open>a:hover {
	    background-color: darkblue;
	    color: #fff;
	}*/



/* unused box class for making page like look.  NEEDS MODIFYING */
  .box
{
  position: relative;
    width: 100%;
    padding: 15px;
  margin: 0 auto;
  background-color: #fff;
  -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2), inset 0 0 50px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2), inset 0 0 50px rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2), inset 0 0 50px rgba(0, 0, 0, 0.1);
}

.box:before, .box:after
{
  position: absolute;
  width: 40%;
  height: 10px;
  content: ' ';
  left: 12px;
  bottom: 12px;
  background: transparent;
  -webkit-transform: skew(-5deg) rotate(-5deg);
  -moz-transform: skew(-5deg) rotate(-5deg);
  -ms-transform: skew(-5deg) rotate(-5deg);
  -o-transform: skew(-5deg) rotate(-5deg);
  transform: skew(-5deg) rotate(-5deg);
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
  z-index: -1;
} 

.box:after
{
  left: auto;
  right: 12px;
  -webkit-transform: skew(5deg) rotate(5deg);
  -moz-transform: skew(5deg) rotate(5deg);
  -ms-transform: skew(5deg) rotate(5deg);
  -o-transform: skew(5deg) rotate(5deg);
  transform: skew(5deg) rotate(5deg);
}


</style>

@yield('styles')
    