<?php
 
$start_time = time();
 
?>
 
<?php
 
$end_time = time();
echo "<h1>Difference: " . ($end_time - $start_time) . " seconds</h1>";
<?php
 
$start_time = time();
 
?>
 
<?php
 
$end_time = time();
echo "<h1>Difference: " . ($end_time - $start_time) . " seconds</h1>";


<?php
 
$cache_file = "cache.php";
$cache_time = 60; // 1 minute
 
// Start output buffering
ob_start();
 
// run all DB queries here
 
$file = fopen($cache_file, "w");
fwrite($file, ob_get_contents());
fclose($file);


<?php
 
$cache_time = 10; // seconds
 
if (file_exists($cache_file) && (filemtime($cache_file) + $cache_time > time()))
{
    readfile($cache_file);
    exit();
}
 
ob_start();