@extends('app')

@include('members.scripts.index')


@section('main')


<table id="members-table" class="hover order-column" >
    <thead>
      <tr>
        <th>Name</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>

@stop


