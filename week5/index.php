<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bhavya Singh PHP</title>
</head>

<body>
    <h1>Bhavya Singh PHP</h1>
    <p>
        <?PHP
        print "The SHA256 hash of <b>\"Bhavya Singh\"</b> is: " . hash('sha256', 'Bhavya Singh');
        ?>
    </p>
    <pre>
ASCII Art:

    BBBBBBBB
    BB      B
    BB       B
    BB      B
    BBBBBBBB
    BB      B
    BB       B
    BB      B
    BBBBBBBB
        </pre>
    <a href="check.php">Click here to check the error setting</a>
    <br>
    <a href="fail.php">Click here to cause a traceback</a>
</body>

</html>