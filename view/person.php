
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Details of Employees</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Details of Employee</h1>
    <ol>
        <?php
        if(isset($_GET['id'])) {
            $id= $_GET['id'];
            if($id==$employee['id']){?>
            <li><?=$employee['name'].", id : ". $employee['id'].", Age : ". $employee['age'].", Salary : ". $employee['salary']?> </li><br>
        <?php }}?>
</body>
</html>
