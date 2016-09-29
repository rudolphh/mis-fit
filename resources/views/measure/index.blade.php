@extends('app')

{{-- @include('forms.scripts.measurement') --}}

@section('main')


<table id="measurement_table" class="table table-striped table-bordered" 
        cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Weight</th>
                <th>Neck</th>
                <th>Waist</th>
                @if($user->gender == 'female')
                    <th>Hip</th>
                @endif
                <th>BF%</th>
                <th>LBM</th>
                <th>BMR</th>
                <th>Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tfoot>
                <th>#</th>
                <th>Weight</th>
                <th>Neck</th>
                <th>Waist</th>
                @if($user->gender == 'female')
                    <th>Hip</th>
                @endif
                <th>BF%</th>
                <th>LBM</th>
                <th>BMR</th>
                <th>Date</th>
                <th>Edit</th>
                <th>Delete</th>
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
                <td>{{ 0 }}</td>
                <td>{{ 0 }}</td>
                <td>{{ 0 }}</td>
                <td>{{ $measure->created_at }}</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit">
        <a class="btn btn-default" type="button" data-title="Edit" 
                href="{{ route('measurements.edit', ['id' => $measure->id ]) }}" >
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        </a>
        </p>
    </td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete">

        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['measurements.destroy', $measure->id]
        ]) !!}
            {!! Form::submit('Delete this task?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        </p>
    </td>
            </tr>
        @endforeach   
        </tbody>
    </table>

@stop