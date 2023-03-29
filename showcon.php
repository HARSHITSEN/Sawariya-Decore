<?php
$conn = mysqli_connect("localhost","root","","SawariyaDecore");
$query = "select * from contact";
if($result = mysqli_query($conn,$query))
{
	?>
	<h2 align='center'>Employee Data</h2>
	 <table width ='500px' border=1  align='center'>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<TH>Email</TH>
			<th>Mobile</th>
            <th>Message</th>
		</tr>
	
	<?php
	while($row = mysqli_fetch_assoc($result))
	{
            echo "<tr>
            <td width='200px'>".$row['name']."</td>
            <td width='200px'>".$row['name']."</td>
            <td width='250px'>".$row['email']."</td>
            <td width='200px'>".$row['contact']."</td>
            <td width='200px'>".$row['message']."</td>
            </tr>";
	}
}
else{
	echo "something goes wrong";
}
?>
</table>