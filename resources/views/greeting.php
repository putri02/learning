
<html>
<body>
<h1>Hello, <?php echo $name; ?></h1>
</body>
</html>

<?php
$view = view('greeting')->with('name', 'Victoria');


