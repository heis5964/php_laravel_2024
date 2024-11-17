<?php  
$name = "John";

?>

<h3>Tring Functions</h3>
<div>Count: <?php echo strlen($name); ?></div>
<div>IndexOf: <?php echo strpos($name, "o"); ?></div>
<div>Uppercase: <?php echo strtoupper($name); ?></div>
<div>Losercase: <?php echo strtolower($name); ?></div>
<div>Replace: <?php echo str_replace("John", "Jane", $name); ?></div>
<div>Substring: <?php echo substr($name, 0, 3); ?></div>