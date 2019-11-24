<?php
echo '<pre>';
echo '<table style="text-align:center">';
for ($cols=1; $cols<11; $cols++) {
    echo "<tr>";
    for ($rows=1; $rows<11; $rows++) {
        $result = $cols * $rows;
        if ($cols % 2 == 1 && $rows % 2 == 1) {
            echo "<td>[$result]</td>";
        } elseif ($cols % 2 == 0 && $rows % 2 == 0) {
            echo "<td>($result)</td>";
        } else {
            echo "<td>$result</td>";
        }
    }
    echo "</tr>";
}
echo '</table>';
echo '</pre>';
