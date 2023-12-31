<?php
$conn = new mysqli('localhost', 'root', '', 'itechnebula');
$sql = "SELECT
            type,
            SUM(CASE WHEN type = 'PC' THEN 1 ELSE 0 END) AS pc_count,
            SUM(CASE WHEN type = 'Mobile' THEN 1 ELSE 0 END) AS mobile_count,
            SUM(CASE WHEN type = 'Tablet' THEN 1 ELSE 0 END) AS tablet_count
        FROM
            visitor
        WHERE
            type IN ('PC', 'Mobile', 'Tablet')
        GROUP BY
            type;";

$result = $conn->query($sql);

$rows = $result->fetch_all(MYSQLI_ASSOC);

foreach ($rows as $row) {
    if ($row['type'] === 'PC') {
        // echo '<p class="f-w-600">Desktop <span class="pull-right">' . $row['pc_count'] . '</span></p>';
    } elseif ($row['type'] === 'Mobile') {
        // echo '<p class="f-w-600">Mobile <span class="pull-right">' . $row['mobile_count'] . '</span></p>';
    } elseif ($row['type'] === 'Tablet') {
        // echo '<p class="f-w-600">Tablet <span class="pull-right">' . $row['tablet_count'] . '</span></p>';
    }
}

$conn->close();
