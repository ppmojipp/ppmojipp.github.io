<!DOCTYPE html>
<html>
<head>
    <title>Request Headers</title>
</head>
<body>
    <h1>Request Headers</h1>
    <pre>
<?php
foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}
?>
    </pre>
</body>
</html>
