@extends('layouts.app')

@section('content')
<h1 class="mt-5">Soal Nomor 2</h1>
<div>
	@if(Session::has('flash_message'))
	<div class="alert alert-success alert-dismissable">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
		{!! session('flash_message') !!}
	</div>
	@else
	<div class="alert alert-danger alert-dismissable">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
		Validasi gagal
	</div>
	@endif

	

	<form action="{{ route('soal2')}}" method="post">
		@csrf
		<div class="form-group">
			<label for="">Username</label>
			<input type="text" class="form-control" name="username">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-default" value="Kirim">
		</div>
	</form>
</div>


</div>
@endsection
