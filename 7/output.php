<?php
/*
 * Facebook Puzzle 7
 * "Hoppity Hop!"
 * https://www.facebook.com/careers/puzzles.php?puzzle_id=7
 */

ob_start();
include('input');
$int = ob_get_contents();
ob_end_clean();

$regex = '/\D/';
$cleanInt = (int) preg_replace($regex, '', $int);

if (empty($cleanInt) || $cleanInt < 0) return;

for ($i = 0; $i < $cleanInt; $i++) {
	($i % 3 == 0) ? $isA = true : $isA = false;
	($i % 5 == 0) ? $isB = true : $isB = false;

	echo ($isA && $isB) ? 'Hop<br>' : null;
	echo ($isA) ? 'Hoppity<br>' : null;
	echo ($isB) ? 'HopHop<br>' : null;
}
	
