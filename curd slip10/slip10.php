<?php
$con = mysqli_connect("localhost","root","","studentmca");

if(isset($_POST["a"]))
 mysqli_query($con,"INSERT INTO student VALUES('', '$_POST[n]', '$_POST[c]')");

if(isset($_GET["d"]))
 mysqli_query($con,"DELETE FROM student WHERE id=".$_GET["d"]);

$r = mysqli_query($con,"SELECT * FROM student");
?>

<form method="post">
<input name="n" placeholder="Name">
<input name="c" placeholder="City">
<button name="a">Add</button>
</form>

<table border="1">
<?php
while($x=mysqli_fetch_assoc($r))
{
 echo "<tr>
 <td>$x[name]</td>
 <td>$x[city]</td>
 <td><a href='?d=$x[id]'>Del</a></td>
 </tr>";
}
?>
</table>
