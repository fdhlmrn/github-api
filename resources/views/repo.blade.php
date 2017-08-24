@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">List of Public Repos</div>
				<div class="panel-body">
					<div class="form-group">
					@foreach ($repos as $repo)

						<label class="col-md-offset-4 col-md-2 control-label">URL: </label>
							<div class="col-md-4">
								<label>{{($repo['name'])}}</label>
							</div>
                    <form class="form-horizontal" method="POST" action="{{ route('get-each') }}">
                        {{ csrf_field() }}
                        	<input type="hidden" name="url" value="{{$repo['url']}}">

                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                    </form>
					@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
