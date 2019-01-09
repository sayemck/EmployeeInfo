<fieldset>
	<legend>EmployeeInfo</legend>
    <form action="" method="post">
    <h2 align="center">EmployeeInfo</h2>
    	<table align="center">
        	<tr>
            	<td>ID:</td>
                <td><input type="text" name="id"</td>
            </tr>
            <tr>
            	<td>Name:</td>
                <td><input type="text" name="name"</td>
            </tr>
            <tr>
            	<td>Designation:</td>
                <td><input type="text" name="designation"</td>
            </tr>
            <tr>
            	<td>Basic:</td>
                <td><input type="text" name="basic"</td>
            </tr>
            <tr>
            	<td>House Rent:</td>
                <td><input type="text" name="house_rent"</td>
            </tr>
            <tr>
            	<td>Transport:</td>
                <td><input type="text" name="transport"</td>
            </tr>
            <tr>
            	<td><input type="reset" name="reset" value="Reset"</td>
                <td><input type="submit" name="submit" value="submit"</td>
            </tr>
        </table>
        <?php
	if (isset($_POST['submit'])){
		$id =$_POST['id'];
		$name =$_POST['name'];
		$designation =$_POST['designation'];
		$basic =$_POST['basic'];
		$house_rent =$_POST['house_rent'];
		$transport =$_POST['transport'];
		$total =$basic+$house_rent+$transport;
		print "Employee ID: ".$id."<br/>";
		print "Employee Name: ".$name."<br/>";
		print "Total Salary: ".$total."<br/>";
		}
?>
    </form>
</fieldset>
