@if (session()->get('success'))
<div class="alert alert-success alert-dismissible">
    <button class="close" data-dismiss="alert" aria-label="Close">×</button> {{session()->get('success')}}
</div>
@endif

@if (session()->get('error'))
<div class="alert alert-danger alert-dismissible">
    <button class="close" data-dismiss="alert" aria-label="Close">×</button> {{session()->get('error')}}
</div>
@endif

@if (session()->get('info'))
<div class="alert alert-info alert-dismissible">
    <button class="close" data-dismiss="alert" aria-label="Close">×</button> {{session()->get('info')}}
</div>
@endif

@if (session()->get('warning'))
<div class="alert alert-warning alert-dismissible">
    <button class="close" data-dismiss="alert" aria-label="Close">×</button> {{session()->get('warning')}}
</div>
@endif
{{-- @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info', "alert-danger") }}">{{ Session::get('message') }}</p>
@endif --}}
