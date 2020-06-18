@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card text-center">
					<div class="card-header text-4xl">Todo-List</div>

					<div class="card-body text-center pt-0">
						@foreach($lists as $list)
							<div class="text-3xl pt-1 pb-1">
								{{ $list->body }}
							</div>
							<hr>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection