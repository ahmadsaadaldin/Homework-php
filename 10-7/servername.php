<?php
$start=microtime(true);
$page=$_SERVER['SCRIPT_NAME'];
echo $page;
$end=microtime(true);
echo "<br>";
echo $start-$end ;
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST')
?>

<?php
echo "<br>";
session_start();
if(isset($_SESSION['page_views']))
{
   $_SESSION['page_views']++;
} Else {
   $_SESSION['page_views'] = 1;
}
echo "Page Views: " . $_SESSION['page_views'];
?>

<?php
echo "<br>";
$cookie_name = "assignment";
$cookie_value = "ahmad";
$expiry_time = time() + (86400 * 30); // 30 days from now
$cookie_path = "/"; 
$domain = ""; // Use an empty string or your own domain name
$secure = false; // Set to true if using HTTPS
$httponly = true; // Accessible only through HTTP

setcookie($cookie_name, $cookie_value, $expiry_time, $cookie_path, $domain, $secure, $httponly);

foreach ($_COOKIE as $name => $value) {
    echo "Cookie name: " . htmlspecialchars($name) . "<br>";
    echo "Cookie value: " . htmlspecialchars($value) . "<br>";
}

?>