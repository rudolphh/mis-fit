@extends('app')

{{-- @include('forms.scripts.measurement') --}}

@section('main')


<table id="measurement_table" class="table table-striped table-bordered" 
        cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Number</th>
                <th>Weight</th>
                <th>Neck</th>
                <th>Waist</th>
                @if($user->gender == 'female')
                    <th>Hip</th>
                @endif
                <th>Date</th>
            </tr>
        </thead>
        <tfoot>
                <th>Number</th>
                <th>Weight</th>
                <th>Neck</th>
                <th>Waist</th>
                @if($user->gender == 'female')
                    <th>Hip</th>
                @endif
                <th>Date</th>
            </tr>
        </tfoot>
        <tbody>
        @foreach ($measurements as $measure)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $measure->weight }}</td>
                <td>{{ $measure->neck }}</td>
                <td>{{ $measure->waist }}</td>
                @if($user->gender == 'female')
                    <td>{{ $measure->hip }}</td>
                @endif
                
                <td>{{ $measure->created_at }}</td>
            </tr>
        @endforeach   
        </tbody>
    </table>

@stop