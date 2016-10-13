@extends('app')

@include('members.scripts.index')


@section('main')


<table id="members-table" class="table table-striped table-bordered compact" cellspacing="0" width="100%" >
    <thead>
      <tr>
        <th>Name</th>
        <th>Joined</th>
      </tr>
    </thead>
	<tfoot>
	  <tr>
	    <th>Name</th>
	    <th>Joined</th>
	  </tr>
	</tfoot>
    <tbody>
    </tbody>
  </table>

@stop


