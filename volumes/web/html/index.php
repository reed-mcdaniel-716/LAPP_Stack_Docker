<?php
// Help from https://www.w3resource.com/PostgreSQL/select.php
// Help from https://forums.docker.com/t/cant-get-postgres-to-work/29580/
// https://www.quora.com/How-do-you-include-a-PHP-file-into-an-HTML-file
// https://stackoverflow.com/questions/17958787/include-html-pages-in-a-php-file
// html is split above and below our query result cards
include('./page_top.html');
// --------------------------------------------------------
// connect to postgresql database
$db = pg_connect("host=postgresql_db port=5432 dbname=db_test user=root password=password");
// check connection
if (!$db) {
  echo "An error occurred.\n";
  exit;
}
// return query for full table
$result = pg_query($db, "SELECT * FROM BIRTHDAYS");
// help from https://getbootstrap.com/docs/4.0/components/card/
// fetch each row as an associative array (key-value pair with key being column name) one at a time until none are left
echo '<div class="container">';
  echo '<h2 class="display-4"> Upcoming Birthdays <h2>';
  echo '<div class="row">';
  while($row = pg_fetch_assoc($result)){
    // help from https://stackoverflow.com/questions/2442746/postgresql-help-with-php-loop/2443049
    // var_dump($row);
    echo '<div class="col-sm">';
      echo '<div class="card w-33">';
        echo '<div class="card-body">';
          echo '<p class="card-title">' . $row['name'] . '</p>';
          echo '<p class="card-text">' . $row['age'] . '</p>';
          echo '<p class="card-text">' . $row['cake'] . '</p>';
        echo '</div>';
      echo  '</div>';
    echo '</div>';
  }
  echo '</div>';
echo '</div>';
// -------------------------------------------------------
include('./page_bottom.html');

?>
