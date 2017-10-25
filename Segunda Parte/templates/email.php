<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Datos del Empledo</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2><?php echo $employee->name; ?></h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Name:</label>
      <label><?php echo $employee->name; ?></label>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <label><?php echo $employee->email; ?></label>
     </div>
    <div class="form-group">
        <label for="email">Phone:</label>
        <label><?php echo $employee->phone; ?></label>
    </div>
    <div class="form-group">
        <label for="email">Address:</label>
        <label><?php echo $employee->address; ?></label>
    </div>
    <div class="form-group">
        <label for="email">Position:</label>
        <label><?php echo $employee->position; ?></label>
    </div>
    <div class="form-group">
        <label for="email">Salary:</label>
        <label><?php echo $employee->salary; ?></label>
    </div>
    <div class="form-group">
        <label for="email">Kilss:</label>
        <label><?php foreach($employee->skills as $item) {
			    echo $item->skill, ' ';
			}?></label>
    </div>
    
  </form>
</div>


</body>
</html>