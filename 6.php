<pre>
<?php
echo '<table style="text-align:center">';
for ($i=1; $i<11; $i++) {
    echo "<tr>";
    for ($e=1; $e<11; $e++) {
        $result = $i * $e;
        if ($i % 2 == 1 && $e % 2 == 1) {
            echo "<td>[$result]</td>";
        } elseif ($i % 2 == 0 && $e % 2 == 0) {
            echo "<td>($result)</td>";
        } else {
            echo "<td>$result</td>";
        }
    }
    echo "</tr>";
}
echo '</table>';
