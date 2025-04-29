<?php
$query = "SELECT * FROM shop where ". $searchtype." like '%".$searchterm."%'";
$result = $db->query($query);
$num_results = $result->num_rows;
echo '<p>Найдено предложений: '.$num_results.'</p>';
for ($i=0; $i <$num_results; $i++)
{
    $row = $result->fetch_assoc();
    echo stripslashes('<p><img src="'.$row['image']. '"width="300" height="300">');
    echo'<p><strong>'.($i+1). '. Название: ';
    echo htmlspecialchars(stripslashes($row['title']));
    echo '</strong><br />Описание: ';
    echo stripslashes($row['descr']);
    echo '</strong><br />Цена: ';
    echo stripslashes($row['price']);
    echo ' рублей';
}
$result->free();
$db->close();
?>