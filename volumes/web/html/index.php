<?php
// Help from https://www.w3resource.com/PostgreSQL/select.php
$db = pg_connect("host=localhost port=5432 dbname=db_test user=root password=password");
$result = pg_query($db,"SELECT * FROM BIRTHDAYS");
// help from https://getbootstrap.com/docs/4.0/components/card/
while($row=pg_fetch_assoc($result)){
  echo '<div class="card">'
  echo '<div class="card-body">'
    echo '<h5 class="card-title">$row['NAME']</h5>'
    echo '<p class="card-text">$row['AGE']</p>'
    echo '<p class="card-text">$row['CAKE']</p>'
  echo '</div>'
  echo  '</div>'
}

?>
