@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Repo 1</div>
				<div class="panel-body">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
						<li><a data-toggle="tab" href="#menu1">Issues</a></li>
						<li><a data-toggle="tab" href="#menu2">Commits</a></li>
						<li><a data-toggle="tab" href="#menu3">Pull Requests</a></li>
					</ul>
					<div class="tab-content">
						<div id="home" class="tab-pane fade in active">
							<h1>Halo</h1>
						</div>
						<div id="menu1" class="tab-pane fade">
							@foreach ($issues as $issue)
							<div class="panel-body">
								<div class="card">
									<div class="card-block">
									<h4>{{$issue['title']}}</h4>
									<p>{{$issue['body']}}</p>
									</div>
									<hr>
								</div>
							</div>
							@endforeach
						</div>
						<div id="menu2" class="tab-pane fade">
							@foreach ($commits as $commit)
							<div class="panel-body">
								<div class="card">
									<div class="card-block">
									<h4>{{$commit['author']['login']}}</h4>
									<p>{{$commit['commit']['message']}}</p>
									</div>
									<hr>
								</div>
							</div>
							@endforeach
						</div>
						<div id="menu3" class="tab-pane fade">
							@foreach ($pullrequests as $pullrequest)
							<div class="panel-body">
								<div class="card">
									<div class="card-block">
									<h4>{{$pullrequest['title']}}</h4>
									<p>{{$pullrequest['body']}}</p>
									</div>
									<hr>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
