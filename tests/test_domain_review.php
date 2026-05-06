<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(41, 35, 16, 74);
assert(DomainReviewLens::score($item) === 143);
assert(DomainReviewLens::lane($item) === "ship");
