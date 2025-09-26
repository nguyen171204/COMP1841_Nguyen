<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>calc</title>
</head>

<body>
    <form action="" method="post">
        Value 1: <input type="text" name="val1" size=10>
        Value 2: <input type="text" name="val2" size=10>
        <hr />
        Calculation:<br />
        <!-- PART 1 -->
        <input type="radio" name="calc" value="add" checked>Add
        <input type="radio" name="calc" value="sub">Subtract
        <!-- PART 2 -->
        <input type="radio" name="calc" value="mul">Multiply  
        <input type="radio" name="calc" value="div">Divide<br />
        <br />
        <input type="submit" value="Calculate">
        <input type="reset" value="Clear">
    </form>
</body>

</html>