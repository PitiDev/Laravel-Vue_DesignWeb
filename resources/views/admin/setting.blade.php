@include('admin/head')
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<hr width="92%">
 <h5>User Setting</h5>
<hr width="92%">

@include('admin/footer')