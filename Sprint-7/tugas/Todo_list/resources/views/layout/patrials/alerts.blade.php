@if (session('info'))
<div class="">
  <div class="alert alert-info" role="alert">
    <h6 class="alert-heading">{{session('info')}}</h6>
  </div>
</div>
@endif

@if (session('success'))
<div class="">
  <div class="alert alert-success" role="alert">
    <h6 class="alert-heading">{{session('success')}}</h6>
  </div>
</div>
@endif

@if (session('danger'))
<div class="">
  <div class="alert alert-danger" role="alert">
    <h6 class="alert-heading">{{session('danger')}}</h6>
  </div>
</div>
@endif
return redirect()->back()->with('success', 'berhasil');