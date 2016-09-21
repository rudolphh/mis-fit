
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(Session::has($msg))
    <div class="alert alert-{{ $msg }} {{ session('important', '') }}">

        @if( session()->has('important')) 
            <button type="button" class="close" 
            data-dismiss="alert" aria-hidden="true">&times;</button>
        @endif

        <strong>
            @if( session('step')) 
                {{ session('step') . ':  ' }}
            @else
                {{ ucfirst($msg) . ':  ' }}
            @endif
        </strong>

        {{ session($msg) }}

    </div>
  @endif
@endforeach



{{-- @if(session()->has('alert_message'))
    <div class="alert {{ session()->get('alert_class', 'alert-info') }} 
    {{ session()->get('alert_close', '') }} ">

        @if(Session::has('alert_close'))
            <button type="button" class="close" 
            data-dismiss="alert" aria-hidden="true">&times;</button>
        @endif

        @if(session()->has('alert_class'))
            @if(session('alert_class') == 'alert-success')
                @if(session()->has('step_message'))
                    <strong>{{ session('step_message') }}&nbsp;&nbsp;</strong>
                @else
                    <strong>Success!&nbsp;&nbsp;</strong>
                @endif
            @else
                <strong>Warning!&nbsp;&nbsp;</strong>
            @endif
        @else
            <strong>Info:&nbsp;&nbsp;</strong>
        @endif

        {!! session('alert_message') !!}

    </div>
@endif --}}

@if(session()->has('update_message'))
    <div class="alert alert-info alert-important">

        <button type="button" class="close" 
            data-dismiss="alert" aria-hidden="true">&times;</button>

        {{ session('update_message') }}

    </div>
@endif