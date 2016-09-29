@extends('app')

@include('measure.scripts.index')


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
    <td><p data-placement="top" data-toggle="tooltip" title="Edit">
        <a class="btn btn-default delete" type="button" data-title="Edit" 
                data-id="{{ $measure->id }}"
                data-href="{{ route('measurements.destroy', ['id' => $measure->id ]) }}" >
            <i class="fa fa-trash" aria-hidden="true"></i>
        </a>
        </p>
    </td>
            </tr>
        @endforeach   
        </tbody>
    </table>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-remove" aria-hidden="true"></i></button>
        <h4 class="modal-title custom_align" id="Heading">Delete Measurement</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger alert-important"><i class="fa fa-exclamation-triangle fa-2x"></i> Are You Sure?</div>
       
      </div>
    
    <div class="modal-footer ">

        {{-- <button id="confirm-delete" type="button" class="btn btn-success">
            <i class="fa fa-check "></i>&nbsp;Yes</button> --}}
            
        </form>
        {!! Form::open([
            'id' => 'confirm-delete',
            'method' => 'DELETE',
            'route' => ['measurements.destroy', $measure->id]
        ]) !!}
        {{Form::button('<i class="fa fa-check">&nbsp;Yes</i>', 
                    array('type' => 'submit', 'class' => 'btn btn-default'))}}

            <button type="button" class="btn btn-danger" data-dismiss="modal">
            <i class="fa fa-remove "></i>&nbsp;No&nbsp;</button>
            {{-- {!! Form::submit('Delete?', ['class' => 'btn btn-danger']) !!} --}}

        {!! Form::close() !!}
       


    </div>
    </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>



@stop


 {{--        {!! Form::open([
            'id' => 'delete',
            'method' => 'DELETE',
            'route' => ['measurements.destroy', $measure->id]
        ]) !!}
        {{Form::button('<i class="fa fa-trash"></i>', 
                    array('type' => 'submit', 'class' => 'btn btn-danger'))}}

            {{-- {!! Form::submit('Delete?', ['class' => 'btn btn-danger']) !!} --}}
{{--         {!! Form::close() !!}
 --}}        