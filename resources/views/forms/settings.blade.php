@extends('home')

@include('forms.settings-script')

@section('main')

  <form class="form-horizontal" role="form" method="POST" action="{{ url('/settings') }}">
  {{ csrf_field() }}
  <fieldset>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="name">Name</label>  
    <div class="col-md-4">
    <input id="name" name="name" type="text" placeholder="" class="form-control input-md" 
    value="{{ old('name', $user->name) }}" required="">
      
    </div>
  </div>

  <!-- Multiple Radios (inline) -->
  <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
    <label class="col-md-4 control-label" for="gender">Gender</label>
    <div class="col-md-4"> 
      <label class="radio-inline" for="gender-0">
        <input type="radio" name="gender" id="gender-0" value="male" 
        {{ $user->gender == 'male' ? 'checked' : '' }} >
        Male
      </label> 
      <label class="radio-inline" for="gender-1">
        <input type="radio" name="gender" id="gender-1" value="female"
        {{ $user->gender == 'female' ? 'checked' : '' }} >
        Female
      </label>
      @if ($errors->has('gender'))
        <span class="help-block">
            <strong>{{ $errors->first('gender') }}</strong>
        </span>
      @endif
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group {{ $errors->has('height') ? 'has-error' : '' }}">
    <label class="col-md-4 control-label" for="height">Height</label>  
    <div class="col-md-4">
    <input id="height" name="height" type="text" placeholder="" 
        class="form-control input-md" required="" value="{{ $user->height }}">

    @if ($errors->has('height'))
        <span class="help-block">
            <strong>{{ $errors->first('height') }}</strong>
        </span>
    @endif
      
    </div>
  </div>

  <!-- Multiple Radios (inline) -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="system">System</label>
    <div class="col-md-4"> 
      <label class="radio-inline" for="system-0">
        <input type="radio" name="system" id="system-0" value="imperial"
        {{ $user->system == 'imperial' ? 'checked' : '' }} >
        Inches
      </label> 
      <label class="radio-inline" for="system-1">
        <input type="radio" name="system" id="system-1" value="metric"
        {{ $user->system == 'metric' ? 'checked' : '' }} >
        Centimeters
      </label>
    </div>
  </div>

  <!-- Select Basic -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="goal">Goal</label>
    <div class="col-md-4">
      <select id="goal" name="goal" class="form-control">
        <option value="loss" 
          {{ $user->goal == 'loss' ? 'selected' : '' }} >Weight Loss</option>
        <option value="maint"
          {{ $user->goal == 'maint' ? 'selected' : '' }} >Maintain</option>
        <option value="gain"
          {{ $user->goal == 'gain' ? 'selected' : '' }} >Muscle Gain</option>
      </select>
    </div>
  </div>

  <!-- Select Basic -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="activity_level">Activity Level</label>
    <div class="col-md-4">
      <select id="activity_level" name="activity_level" class="form-control">
        <option value="A"
          {{ $user->activity_level == 'A' ? 'selected' : '' }} >&lt; 1 hour exercise</option>
        <option value="B"
          {{ $user->activity_level == 'B' ? 'selected' : '' }} >1-3 hours exercise</option>
        <option value="C"
          {{ $user->activity_level == 'C' ? 'selected' : '' }} >4-6 hours exercise</option>
        <option value="D"
          {{ $user->activity_level == 'D' ? 'selected' : '' }} >&gt; 6 hours exercise</option>
        <option value="E"
          {{ $user->activity_level == 'E' ? 'selected' : '' }} >Custom Multiplier</option>
      </select>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="activity_mult">Activity Multiplier</label>  
    <div class="col-md-4">
    <input id="activity_mult" name="activity_mult" type="text" placeholder="" class="form-control input-md" required="" value="{{ $user->activity_mult }}">
    <span class="help-block">help</span>  
    </div>
  </div>

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="save"></label>
    <div class="col-md-4">
      <button id="save" name="save" class="btn btn-primary">Save</button>
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