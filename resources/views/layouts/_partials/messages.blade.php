@if( $message = Session::get('success') )
<div style="padding:15px; background-color:green; color:white; font-size:1em; border-radius:0.8em; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.7);">
        <p>{{$message}}</p>
    </div>
@endif

@if( $message = Session::get('danger') )
    <div style="padding:15px;background-color:red;color:white;font-size:1em">
        <p>{{$message}}</p>
    </div>
@endif
