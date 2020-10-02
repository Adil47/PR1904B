<form action="profile.php" method="post">
	
	<table>
		<tr>
			<th>Name</th>
			<td><input type="text" name="Name"></td>
		</tr>
		<tr>
			<th>Phone</th>
			<td><input type="text" name="Phone"></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><input type="email" name="Email"></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="Password"></td>
		</tr>
		<tr>
			<th>Gender</th>
			<td>
				<input type="radio" name="Gender" value="Male"> Male
				<input type="radio" name="Gender" value="Female"> Female
			</td>
		</tr>
		<tr>
			<th>Country</th>
			<td>
				<select name="Country" id="Country" onChange="changeCities()">
					<option> Pakistan </option>
					<option> Turkey </option>
					<option> China </option>

				</select>
			</td>
		</tr>
		<tr>
			<th>City</th>
			<td>
				<select name="City" id="City">
					<option>Karachi</option><option>Mirpur khas</option><option>Rawal Pindi</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Address</th>
			<td>
				<textarea name="Address"></textarea>
			</td>
		</tr>
		<tr>
			<th>Theme</th>
			<td>
				<input type="color" name="Theme">
			</td>
		</tr>
		
		<tr>
		<td></td>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</form>



<script>

	function changeCities()
	{
		var country=document.getElementById('Country').value;
		var city=document.getElementById('City');
		switch(country)
			{
				case "Pakistan":
					city.innerHTML="<option>Karachi</option><option>Mirpur khas</option><option>Rawal Pindi</option>";
					break;
				case "Turkey":
					city.innerHTML="<option>Istambol</option><option>Antalya</option><option>konia</option>";
					break;
				case "China":
					city.innerHTML="<option>Beijing</option><option>shanghai</option><option>Wuhan</option>";
					break;
				
			}
		
		
	}


</script>












