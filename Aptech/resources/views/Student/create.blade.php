



<h1>Create new Student</h1>



<form action="{{action('StudentController@submit')}}" method="post">

{{ csrf_field() }}

Name <input type="text" name="Name"><br>
Phone <input type="text" name="Phone"><br>
Email <input type="text" name="Email"><br>
Password <input type="text" name="Password"><br>
<input type="submit" name="submit" value="Submit">

	
</form>

