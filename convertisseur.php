<?php
$devise = [
    "EUR" => ["USD" => 1.05, "JPY" => 160.05, "GBP" => 0.83, "AUD" => 1.65],
    "USD" => ["EUR" => 0.95, "JPY" => 152.82, "GBP" => 0.79, "AUD" => 1.58],
    "JPY" => ["EUR" => 0.0062, "USD" => 0.0065, "GBP" => 0.0052, "AUD" => 0.010],
    "GBP" => ["EUR" => 1.20, "USD" => 1.26, "JPY" => 192.44, "AUD" => 1.99],
    "AUD" => ["EUR" => 0.61, "USD" => 0.63, "JPY" => 96.95, "GBP" => 0.50]
];

if (isset($_POST['from_devise'], $_POST['to_devise'], $_POST['amount'])) {
    $amount = $_POST['amount'];
    $from_devise = $_POST['from_devise'];
    $to_devise = $_POST['to_devise'];
    if ($from_devise === $to_devise) {
        echo "<p>Conversion impossible entre 2 devises identiques !</p>";
    } else {
        $convert = $amount * $devise[$from_devise][$to_devise];
        echo "<p>$amount $from_devise est égal à $convert $to_devise</p>";
    }
    echo '<a href="index.php"><button>Retour</button></a>';
}
?>
