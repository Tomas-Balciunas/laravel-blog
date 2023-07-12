@if (Session::has('message'))
<alert-component :alert="{{ json_encode(Session::get('message')) }}"></alert-component>
@endif
