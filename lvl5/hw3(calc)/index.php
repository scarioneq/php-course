<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
<form action="/result.php" method="GET">
    <input type="text" name="x1" required>
    <select name="operation" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>    <input type="text" name="x2" required>
    <input type="submit" value="Посчитать">
</form>
</body>
</html>