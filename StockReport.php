<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="format.css">
    <link rel="stylesheet" href="format-custom.css">
</head>

<body>
    <h2>Stock Rankings<span class="developer">Developer Lisbeth Paulino</span></h2>

    <form>
        <label>ranking: </label> <input class="number" type="number" name="ranking" value="15" />
<!--
        <label>market cap in billions</label>
        <select name="marketCapComparison">
            <option value="gt">greater than</option>
            <option value="lt">less than</option>
        </select>
        &nbsp;
        <input class="number" type="number" step="0.01" name="marketCap" value="0" />
-->
        <input type="submit" value="query" />
    </form>
    <br />



    <table>
        <thead>

            <tr>
                <th>rank</th>
                <th>symbol</th>
                <th>company</th>
                <th>quant</th>
                <th>sa authors</th>
                <th>wall street</th>
                <th>market cap</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $file = $file = fopen("./data/TopStocks.csv", "r");
            $count = 0;

            while (!feof($file)) {
                $row = fgetcsv($file);
                $rank = $row[0];
                $symbol = $row[1];
                $companyName = $row[2];
                $quant = $row[3];
                $saAuthors = $row[4];
                $wallStreet = $row[5];
                $marketCap = $row[6];


                ?>
                <tr class="">
                    <td>
                        <?= $rank ?>
                    </td>
                    <td>
                        <?= $symbol ?>
                    </td>
                    <td>
                        <?= $companyName ?>
                    </td>
                    <td class="number">
                        <?= $quant ?>
                    </td>
                    <td class="number">
                        <?= $saAuthors ?>
                    </td>
                    <td class="number">
                        <?= $wallStreet ?>
                    </td>
                    <td class="number">
                        <?= $marketCap ?>
                    </td>
                </tr>

                <?php

                    $count++;
                    if ($count > 15) {
                        break;
                    }
                    }

                    fclose($file);
                ?>

        </tbody>
    </table>
</body>

</html>
