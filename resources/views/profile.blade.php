@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">{{$decode['name']}}</div>
				<div class="panel-body">
					<div class="form-group">
						<label class="col-md-offset-4 col-md-2 control-label">URL: </label>
							<div class="col-md-4">
								<label>{{$decode['url']}}</label>
							</div>
					</div>
					<div class="form-group">
						<label class="col-md-offset-4 col-md-2 control-label">Username: </label>
							<div class="col-md-4">
								<label>{{$decode['login']}}</label>
							</div>
					</div>
					<form class="form-horizontal" method="POST" action="{{ route('get-repo') }}">
						{{ csrf_field() }}
						<div class="form-group">
							<div class="col-md-6">
								<input type="hidden" name="username" value="{{$decode['login']}}">
							</div>
						</div>
						<div style="width:20%; margin:0 auto;" class="form-group">
							<div>
								<button type="submit" class="btn btn-primary">
								User Public Repos
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
