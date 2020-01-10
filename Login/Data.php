<?php
   include('session.php');
?>

<?php include 'inc/db.php'; 
$_GET['interval'] = 7;
?>
<table style="border: 1px solid silver;">

<tr>
    <td style="border: 1px solid silver;">Date</td>
    <td style="border: 1px solid silver;">Unique user</td>
    <td style="border: 1px solid silver;">Views</td>
</tr>
<?php
if ($_GET['interval'])
{
	$interval = $_GET['interval'];
    
    if (!is_numeric ($interval))
    {
        echo '<p><b>Недопустимый параметр!</b></p>';        
    }
    @mysqli_query ($db, 'set character_set_results = "utf8"');
    
	$res = mysqli_query($db, "SELECT * FROM `visits` ORDER BY `date` DESC LIMIT $interval");    

	while ($row = mysqli_fetch_assoc($res))
    {
		echo '<tr>
			     <td style="border: 1px solid silver;">' . $row['date'] . '</td>
			     <td style="border: 1px solid silver;">' . $row['hosts'] . '</td>
			     <td style="border: 1px solid silver;">' . $row['views'] . '</td>
			 </tr>';
	}
}
?>
   <a href = "http://test.ru/welcome.php"> Back </a> <br>
</table>