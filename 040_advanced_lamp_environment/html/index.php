<!-- <?php phpinfo(); ?> -->
<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "test";

$mysqli = new mysqli($db_host,$db_user,$db_pass,"test");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Change db to "test" db
$mysqli -> select_db("test");

// Return list of posts
if ($result = $mysqli -> query("select * from posts")) {
    echo "<table border=1 align='center'><tr><th>ID</th><th>PostID</th><th>Text</th></tr>";
    while ($row = $result -> fetch_array()) {
        echo "<tr align='left'><td>" . $row[0] . "</td><td>" . $row[1]. "</td><td>" . $row[2]. "</td></tr>";
    }
    echo "</table>";
    $result -> close();
}

$mysqli -> close();
?>