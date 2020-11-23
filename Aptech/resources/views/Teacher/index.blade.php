<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<style type="text/css">
	body
	{
		background-color:#e9ecef
	}


</style>

<div class="container mt-2">
	<nav class="navbar navbar-light bg-light navbar-expand-md">
	  <a class="navbar-brand" href="#">
	    <img src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
	  
	  </a>
	   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	 <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="{{action('StudentController@index')}}">Students</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{action('TeacherController@index')}}">Teachers</a>
      </li>
     
    </ul>
  </div>

	</nav>
</div>


<center >
	
<div class="card m-5 p-5" style="width: 90%">
	
	<a href="{{action('TeacherController@create')}}">Create new Teacher</a>

	
	<div class="card-header">
		<h1>Teachers</h1>
	</div>

	<table class="table" >

		<tr>
			<th>Id</th>
		
			<th>Name</th>

			<th>Phone</th>
			<th>TotalStudents</th>
			<th>Students</th>
		
		
		

		</tr>

		@foreach($teachers as $t)
			<tr>
				<td>{{$t->TeacherId}}</td>
				
				<td>{{$t->Name}}</td>
				<td>{{$t->Phone}}</td>
				<td>{{$t->Students->count()}}</td>
				<td>
					<ul>
						@foreach($t->Students as $std)
							<li>{{$std->Name}}</li>
						@endforeach						
					</ul>
				</td>
			</tr>
		@endforeach

	</table>
</div>
</center>