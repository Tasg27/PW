<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $value = "Nome"; ?>
    <p>Value is: <?php echo gettype($value)?></p>
    <?php $value = 1.0; ?>
    <p>Value is: <?php echo gettype($value)?></p>
    <?php $value = true; ?>
    <p>Value is: <?php echo gettype($value)?></p>
    <?php $value = 1; ?>
    <p>Value is: <?php echo gettype($value)?></p>
    <?php $value = NULL; ?>
    <p>Value is: <?php echo gettype($value)?></p>
</body>
</html>