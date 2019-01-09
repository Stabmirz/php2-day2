<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List of Employees</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>List of Employees</h1>
    <ol>
        <?php foreach ($employees as $employee) { ?>
            <li><?=$employee['name']?> <a href="view/person.php?id=<?=$employee['id']?>">See More</a></li><br>
        <?php } ?>
</body>
</html>
