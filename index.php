<html>
<body>
<?php
$instance_id = @file_get_contents("http://169.254.169.254/latest/meta-data/instance-id");
?>
<h1>It works!!</h1>
<h2>This is version 2</h2>
<h2>Content served from EC2 by instance <?php echo $instance_id; ?>.</h2>
</body>
</html>