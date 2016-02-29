<?PHP
$rando = rand(1, 100);
echo "Comp chosed {$rando}" . PHP_EOL;
$userChoice;
if ($userChoice == $rando) {
	echo "BULLSEYE!" . PHP_EOL;
} else if ($userChoice > $rando) {
	echo "Lower!" . PHP_EOL;
} else {
	echo "Higher!" . PHP_EOL;
}