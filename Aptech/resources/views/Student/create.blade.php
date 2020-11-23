



<h1>Create new Student</h1>



<form action="{{action('StudentController@submit')}}" method="post" enctype="multipart/form-data">

{{ csrf_field() }}

Name <input type="text" name="Name"><br>
Phone <input type="text" name="Phone"><br>
Email <input type="text" name="Email"><br>
Password <input type="text" name="Password"><br>
Select Teacher
<select name="TeacherId">

    @foreach($teachers as $t)
        <option value="{{$t->TeacherId}}" >{{$t->Name}}</option>
    @endforeach
</select>
<br>
<img src="" id="outImage" style="max-width:150px" >
<input type="file" name="imgFile" id="picField" accept="image/*"><br>

<input type="submit" name="submit" value="Submit">

	
</form>


<script type="text/javascript">
	

document.getElementById('picField').onchange = function (evt) {
    var tgt = evt.target || window.event.srcElement,
        files = tgt.files;

    // FileReader support
    if (FileReader && files && files.length) {
        var fr = new FileReader();
        fr.onload = function () {
            document.getElementById('outImage').src = fr.result;
        }
        fr.readAsDataURL(files[0]);
    }

}


</script>
