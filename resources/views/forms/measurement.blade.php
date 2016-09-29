@extends('app')

{{-- @include('forms.scripts.measurement') --}}

@section('main')

  <form class="form-horizontal" role="form" method="POST" 
        @if (isset($create))
          action="{{ url('/measurements') }}">
        @elseif (isset($edit))
          action="{{ url('/measurements/'.$measurement->id) }}">
          <input name="_method" type="hidden" value="PUT">
        @endif


  {{ csrf_field() }}
  <fieldset>

  <!-- Text input-->
  <div class="form-group {{ $errors->has('weight') ? 'has-error' : '' }}">
    <label class="col-md-4 control-label" for="weight">weight</label>  
    <div class="col-md-4">
    <input id="weight" name="weight" type="text" placeholder="" 
        class="form-control input-md" required="" value="{{ $measurement->weight }}">

    @if ($errors->has('weight'))
        <span class="help-block">
            <strong>{{ $errors->first('weight') }}</strong>
        </span>
    @endif
      
    </div>
  </div>


  <!-- Text input-->
  <div class="form-group {{ $errors->has('neck') ? 'has-error' : '' }}">
    <label class="col-md-4 control-label" for="neck">neck</label>  
    <div class="col-md-4">
    <input id="neck" name="neck" type="text" placeholder="" 
        class="form-control input-md" required="" value="{{ $measurement->neck }}">

    @if ($errors->has('neck'))
        <span class="help-block">
            <strong>{{ $errors->first('neck') }}</strong>
        </span>
    @endif
      
    </div>
  </div>


  <!-- Text input-->
  <div class="form-group {{ $errors->has('waist') ? 'has-error' : '' }}">
    <label class="col-md-4 control-label" for="waist">waist</label>  
    <div class="col-md-4">
    <input id="waist" name="waist" type="text" placeholder="" 
        class="form-control input-md" required="" value="{{ $measurement->waist }}">

    @if ($errors->has('waist'))
        <span class="help-block">
            <strong>{{ $errors->first('waist') }}</strong>
        </span>
    @endif
      
    </div>
  </div>


  @if ( $user->gender == 'female')

    <!-- Hip measurement input-->
    <div class="form-group {{ $errors->has('hip') ? 'has-error' : '' }}">
      <label class="col-md-4 control-label" for="hip">hip</label>  
      <div class="col-md-4">
      <input id="hip" name="hip" type="text" placeholder="" 
          class="form-control input-md" required="" value="{{ $measurement->hip }}">

      @if ($errors->has('hip'))
          <span class="help-block">
              <strong>{{ $errors->first('hip') }}</strong>
          </span>
      @endif
        
      </div>
    </div>

  @endif

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="save"></label>
    <div class="col-md-4">
      <button id="save" name="save" class="btn btn-primary btn-block">Save</button>
    </div>
  </div>

  </fieldset>
  </form>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class="fa fa-btn fa-cog fa-2x"></i>Settings</h4>
        </div>
        <div class="modal-body">
          <p>No changes have been made.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

@stop