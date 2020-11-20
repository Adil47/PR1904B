



<h1>Update Student "<i>{{$std->Name}}</i>"</h1>



<form action="{{action('StudentController@update')}}" method="post">

{{ csrf_field() }}


<input type="hidden" name="StudentId" value="{{$std->StudentId}}">
Name <input type="text" name="Name" value="{{$std->Name}}"><br>
Phone <input type="text" name="Phone" value="{{$std->Phone}}"><br>
Email <input type="text" name="Email" value="{{$std->Email}}"><br>
Password <input type="text" name="Password" value="{{$std->Password}}"><br>
<input type="submit" name="Update" value="Update">

	
</form>

