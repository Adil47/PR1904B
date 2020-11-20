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
			<th>Id</th>
			<th>Image</th>
			<th>Name</th>

			<th>Phone</th>
			<th>Email</th>
			<th>Password</th>
			<th>Created At<br>Updated At</th>
			<th>Action</th>

		</tr>

		@foreach($students as $std)
			<tr>
				<td>{{$std->StudentId}}</td>
				<td>
					<img src="{{asset('storage')}}/{{$std->Image}}" style="height: 50px; width: 50px ; border-radius: 50%; box-shadow: 5px 5px 5px black">
				</td>
				<td>{{$std->Name}}</td>
				<td>{{$std->Phone}}</td>
				<td>{{$std->Email}}</td>
				<td>{{$std->Password}}</td>
				<td>{{$std->created_at}}<br>
				{{$std->updated_at}}</td>
				<td>
					<a href="{{action('StudentController@delete')}}?id={{$std->StudentId}}">
						<img src="{{asset('Images')}}/delete.png" width="25">
					</a>
					<a href="{{action('StudentController@edit')}}?id={{$std->StudentId}}">
						<img src="{{asset('Images')}}/edit.png" width="25">
					</a>
					
				</td>

			</tr>
		@endforeach

	</table>
</div>
</center>