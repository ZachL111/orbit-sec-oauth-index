<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(93, 78, 10, 13, 6);
assert(Policy::score($signal_case_1) === 181);
assert(Policy::classify($signal_case_1) === "accept");
$signal_case_2 = new Signal(63, 99, 13, 12, 5);
assert(Policy::score($signal_case_2) === 136);
assert(Policy::classify($signal_case_2) === "review");
$signal_case_3 = new Signal(73, 70, 12, 22, 12);
assert(Policy::score($signal_case_3) === 94);
assert(Policy::classify($signal_case_3) === "review");
