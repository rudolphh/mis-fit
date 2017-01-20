@extends('app')

@include('members.scripts.index')


@section('main')


<table id="members-table" class="table table-striped table-bordered " cellspacing="0" width="100%" >
    <thead>
      <tr>
        <th>Name</th>
        <th>Joined</th>
      </tr>
    </thead>

    <tbody>
    </tbody>
  </table>

@stop


