<?php
$devise = [
    "EUR" => ["USD" => 1.05, "JPY" => 160.05, "GBP" => 0.83, "AUD" => 1.65],
    "USD" => ["EUR" => 0.95, "JPY" => 152.82, "GBP" => 0.79, "AUD" => 1.58],
    "JPY" => ["EUR" => 0.0062, "USD" => 0.0065, "GBP" => 0.0052, "AUD" => 0.010],
    "GBP" => ["EUR" => 1.20, "USD" => 1.26, "JPY" => 192.44, "AUD" => 1.99],
    "AUD" => ["EUR" => 0.61, "USD" => 0.63, "JPY" => 96.95, "GBP" => 0.50]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertisseur</title>
</head>
<body>
<form method="post" action="convertisseur.php">
    <label>From :</label>
    <select name="from_devise">
        <?php
        foreach ($devise as $price => $value) :?>
            <option value="<?= $price ?>"><?= $price ?></option>
        <?php endforeach; ?>
    </select>

    <label>To :</label>
    <select name="to_devise">
        <?php
        foreach ($devise as $price => $value) :?>
            <option value="<?= $price ?>"><?= $price ?></option>
        <?php endforeach; ?>
    </select>

    <label>Amount :</label>
    <input type="number" name="amount" step="0.01">

    <button type="submit">Convert</button>
</form>
</body>
</html>