<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<style type="text/css">
	body
	{
		background-color:#e9ecef
	}


</style>



<center >
	
<div class="card m-5 p-5" style="width: 90%">
	
	<a href="{{action('StudentController@create')}}">Create new Student</a>

	
	<div class="card-header">
		<h1>Students</h1>
	</div>

	<table class="table" >

		<tr>
			<th>Student Id</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Password</th>
			<th>Created At</th>
			<th>Updated At</th>

		</tr>

		@foreach($students as $std)
			<tr>
				<td>{{$std->StudentId}}</td>
				<td>{{$std->Name}}</td>
				<td>{{$std->Phone}}</td>
				<td>{{$std->Email}}</td>
				<td>{{$std->Password}}</td>
				<td>{{$std->created_at}}</td>
				<td>{{$std->updated_at}}</td>

			</tr>
		@endforeach

	</table>
</div>
</center>