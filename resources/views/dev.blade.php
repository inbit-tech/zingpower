@extends ('master')

@section ('content')
<div class="cols-12" style="height: 90%">
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-3">Dev Notes</h1>
			<p class="lead">This is the page for develop purpose only, which includes bugs and notes</p>
		</div>
	</div>

	<div class="container-fluid row" style="padding: 0 80px">
		<div class="col" style="color: red">
			<h4>Bugs : </h4>
			<ul>
				<li>Testing workflow</li>
			</ul>
		</div>

		<div class="col" style="color: blue">
			<h4>Notes : </h4>
			<ul>
				<li>Delete 'Master-Page' Branch</li>
				<li>Restore 'Master' Branch</li>
				<li>app.css - master.css - boostrap - custom.css</li>
			</ul>
		</div>
	</div>
</div>
@endsection