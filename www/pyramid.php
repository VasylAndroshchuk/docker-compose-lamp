<?php
$n = $i = $_GET['count'] ?? 9;
echo '<pre>';
while ($i--) {
    echo str_repeat(' ', $i).str_repeat('* ', $n - $i)."\n";
}
echo '</pre>';
