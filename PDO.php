<?php 

/* We could use “PDO” instead of the regular form: */

	try{
		$courses= new PDO('mysql:host= ..;dbname= ..',"..user","..pass");
		$courses->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		catch(PDOException $e){
			echo"error".$e->getMessage();
		}
	}

	$courses->query('select*from ..table..');
	var_dump($courses);
	foreach ($courses as $course) {
		echo $course[''];
	}
		<table>
			<tr>
				<td> .. </td>
				<td> .. </td>
				<td> .. </td>
				<td> .. </td>
			</tr>
			<tr>
				<td><?=$couse[".."]></td>
				<td><?=$couse[".."]></td>
				<td><?=$couse[".."]></td>
				<td><?=$couse[".."]></td>
			</tr>
		</table>

	<?php endforeach;?>

	<p><a href="<?php echo $sso_link ?>" target="_blank" class="button <?php echo $_GET['active_course']; ?>"><?php echo __( 'Course Login', 'text-domain' ); ?></a></p>

?>
