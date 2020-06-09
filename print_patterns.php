<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Patterns</title>
</head>

<body>

    <div style="display:flex;flex-direction:row;justify-content:center;text-align:center">
        <form action="" method="post">
            <h3>Print Triangle Pattern</h3>
            <label>Enter Number</label>
            <br>
            <br>
            <input type="text" name="iterator" placeholder="Enter Iterator Placeholder..." value="<?= isset($_POST['iterator']) ? $_POST['iterator'] : '' ?>">
            <input type="number" name="num" placeholder="Enter Number of Loop..." value="<?= isset($_POST['num']) ? $_POST['num'] : '' ?>">
            <br>
            <br>
            <input type="submit" value="Submit" name="submit">&nbsp;<input type="submit" value="Reset" name="reset">
        </form>
    </div>
    <br>
    <!-- Print Different Pyramids -->
    <div style="display:flex;flex-direction:row;justify-content:center;width:100%;height:100%;">
        <?php
        if (isset($_POST['submit'])) {
            $iterator = $_POST['iterator'];
            $num = $_POST['num'];
            if (empty($iterator) && empty($num)) {
                echo "All The Fields Should not be empty";
            } else if (empty($iterator)) {
                echo "Iterator Field should not be empty";
            } elseif (empty($num)) {
                echo "Num Field should not be empty";
            } else {
                for ($i = 1; $i <= $num; $i++) {
                    for ($k = 1; $k <= ($num - $i); $k++) {
                        echo "&nbsp;" . "&nbsp;";
                    }
                    for ($j = 1; $j <= $i; $j++) {
                        echo "&nbsp;" . "$iterator" . "&nbsp;";
                    }
                    echo "<br>";
                }
            }
        }
        ?>
        <?php
        if (isset($_POST['reset'])) {
            header("location: print_patterns.php");
        }
        ?>
    </div>
</body>

</html>