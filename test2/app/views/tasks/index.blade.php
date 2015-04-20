@extends('layouts.master')




@section('content')
<div class="col-md-6">
	<h3>All Votes ~ title</h3>
		
	<ul class="list-group">
		@foreach ($votes as $vote)
			<li class="list-group-item">
				
				<strong>{{ $vote->vote_title }}</strong>
							
				
			</li>
		@endforeach
	</ul>
</div>

<div class="col-md-6">
	<h5>Add New Vote(每一欄都要有值^_^，都輸入一個數字即可)</h5>

	@include('tasks/partials/_form')
</div>
@stop