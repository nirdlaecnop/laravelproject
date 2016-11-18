@extends('master')

 @section('content')
 <div class="row">
	<div class="col-md-12">
		<h1 class="text-info">Welcome to Checklist</h1>		
	</div>
	<div class="col-md-12">
	
		@foreach ($checklists as $checklist)
		<div class="col-md-12 btn-success"><h3 class="text-center"><strong>{{ $checklist->checklist_title }}</strong></h3></div>
			<div class="col-md-4 btn-info text-center border-gray">Ingredients</div>
			<div class="col-md-2 btn-info text-center border-gray">Mon</div>
			<div class="col-md-1 btn-info text-center border-gray">Tue</div>
			<div class="col-md-1 btn-info text-center border-gray">Wed</div>
			<div class="col-md-1 btn-info text-center border-gray">Thu</div>
			<div class="col-md-1 btn-info text-center border-gray">Fri</div>
			<div class="col-md-1 btn-info text-center border-gray">Sat</div>
			<div class="col-md-1 btn-info text-center border-gray ">Sun</div>
			
			
			@foreach($checklist->ingredients as $ingred)
			<div class="col-md-4 border-left border-gray">{{ $ingred->ingredient }}</div>
			<div class="col-md-2 text-center border-gray">Yes</div>
			<div class="col-md-1 text-center border-gray">No</div>
			<div class="col-md-1 text-center border-gray">Yes</div>
			<div class="col-md-1 text-center border-gray">No</div>
			<div class="col-md-1 text-center border-gray">Yes</div>
			<div class="col-md-1 text-center border-gray">No</div>
			<div class="col-md-1 text-center border-gray">No</div>
			@endforeach
		
		<div class="col-md-12">&nbsp;</div>
		
		@endforeach
	
	</div>
 </div>
 
 @stop