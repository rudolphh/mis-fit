@extends('app')
{{--  --}}
@include('friends.scripts.index')


@section('main')

{{-- <div class="table-responsive"> --}}
<table id="friends-table" class="table table-striped table-bordered "
        cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Hght</th>
                <th>Wght</th>
                <th>BF%</th>
            </tr>
        </thead>

        @if ($user->getFriendsCount() > 10)
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Hght</th>
                <th>Wght</th>
                <th>BF%</th>
            </tr>
        </tfoot>
        <tbody>
        @endif

        @foreach ($user->friends as $friend)
            <tr>
                {{-- <td>{{ $loop->iteration }}</td> --}}
                <td>{{ $friend->name }}</td>
                <td>{{ $friend->height }}</td>
                <td>{{ 0 }}</td>
                <td>{{ 0 }}</td>
{{--                 <td>{{ $friend->gender }}</td> --}}
        
            </tr>
        @endforeach   
        </tbody>
</table>

{{-- </div>
 --}}




@stop


