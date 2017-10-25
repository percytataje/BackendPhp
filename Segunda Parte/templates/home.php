<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listado de Empleados</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="margin: 0 auto; width:90%; text-align: center;">
		<h1>Empleados</h1>
		
		<table class="table">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Position</th>
				<th>Salary</th>
			</tr>
			<?php foreach ($employees as $employee): ?>
            
			<tr>
				<td><?php echo $employee->name; ?></td>
                <td><?php echo $employee->email; ?></td>
				<td><?php echo $employee->position; ?></td>
				<td><?php echo $employee->salary; ?></td>
			</tr>
			<?php endforeach; ?>
		</table>

        <form id="buscador" name="buscador" method="post" style="margin: 20px 0;"> 
            <input type="search" id="buscar" name="email" placeholder="Buscar por Email" style="width: 90%;" autofocus >
            <input type="submit" name="buscador" value="Buscar">
        </form>		  
		
	</div>
</body>
</html>