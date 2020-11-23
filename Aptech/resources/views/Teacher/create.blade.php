



<h1>Create new Teacher</h1>



<form action="{{action('TeacherController@submit')}}" method="post">

{{ csrf_field() }}

Name <input type="text" name="Name"><br>
Phone <input type="text" name="Phone"><br>
<input type="submit" name="submit" value="Submit">

</form>


