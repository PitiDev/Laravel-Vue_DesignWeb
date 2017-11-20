@if (Auth::guest())
@else
	@include('admin/head')
	@include('admin/main')

	@section('content')

	@endsection

	@include('admin/footer')
{{-- End If Admin --}}
@endif