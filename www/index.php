<?php
$USER=getenv('MYSQL_USER_NAME');
$host=getenv('MYSQL_HOST');
$pass=getenv('MYSQL_PASSWORD');
echo "MySQL host : $host";
echo "<br/>";
echo "MySQL pass : $pass";
echo "<br/>";
echo "<br/>";

  
echo "This is a testing comment ";
$link = mysql_connect($host, $user, $pass)
    or die('Could not connect: ' . mysql_error());
    
echo "My IP adress is ".$_SERVER['SERVER_ADDR'];

echo "\nConnected successfully to MySQL server";
mysql_select_db('demo') or die('Could not select database');

// Performing SQL query
$query = 'SELECT   * FROM users';
$result = mysql_query($query) or die('Query failed: ' . mysql_error());

// Printing results in HTML
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
mysql_free_result($result);

// Closing connection
mysql_close($link);

?>

