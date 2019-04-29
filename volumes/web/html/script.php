<?php
// Help from https://www.w3resource.com/PostgreSQL/select.php
// Help from https://forums.docker.com/t/cant-get-postgres-to-work/29580/4
$db = pg_connect("host=postgresql_db port=5432 dbname=db_test user=root password=password");
// check connection
if (!$db) {
  echo "An error occurred.\n";
  exit;
}
$result = pg_query($db, "SELECT * FROM BIRTHDAYS");
// help from https://getbootstrap.com/docs/4.0/components/card/
while($row=pg_fetch_assoc($result)){
  echo '<div class="card">';
    echo '<div class="card-body">';
      echo '<h5 class="card-title"> $row["NAME"] </h5>';
      echo '<p class="card-text"> $row["AGE"] </p>';
      echo '<p class="card-text"> $row["CAKE"] </p>';
    echo '</div>';
  echo  '</div>';
}

?>
