<?php

declare(strict_types=1);

// Takes images from the export folder of an export form the game and renames them to the correct location for the page.
// This should make updating the visuals much quicker if they change again in the future.

// Source => target
// Source is already inside the export folder, no starting slash
// Target is already inside the images folder, no starting slash
$imageMap = [
    'something.png' => 'parts/something.png',
];
