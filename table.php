<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="3" cellspacing="0">
    <?php
        for($i=1;$i<=6;$i++)
        {
            ?>
            <tr>
                <?php
                for($j=1;$j<=5;$j++)
                {
                    ?>
                    <td>
                        <?php
                            echo "$i * $j =" . $i*$j;
                        ?>
                    </td>
                    <?php
                }
                echo "<br>";
                ?>
            </tr>
            <?php
        }
    ?>
    </table>
</body>
</html>