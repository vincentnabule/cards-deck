<?php

$suite = rand(0, 3);
$suites = ['spade', 'diamond', 'clubs', 'heart'];

$val = rand(1, 13);
if ($val <= 10) {
    echo '<div class="cards card shadow p-1 rounded">';
    echo '<img src="assets/images/cards/' . $suites[$suite] . '' . $val . '.png" alt="generated">';
    echo '</div>';
} else {
    if ($val == 11) {
        $face = 'j';
    } elseif ($val == 12) {
        $face = 'q';
    } elseif ($val == 13) {
        $face = 'k';
    }
    echo '<div class="cards card shadow p-1 rounded">';
    echo '<img src="assets/images/cards/' . $suites[$suite] . '' . $face . '.png" alt="generated">';
    echo '</div>';
}
