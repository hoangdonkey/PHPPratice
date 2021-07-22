<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="search-filters">
        <div class="container">
            <div class="filter-box">
                <h3>What are you looking for at the library?</h3>
                <form action="result.php" method="get">
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="sr-only" for="keywords">Search by Keyword</label>
                            <input class="form-control" placeholder="Search by Keyword" id="keywords" name="keywords" type="text">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <div class="form-group">
                            <input class="form-control" type="submit" value="Search">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <table class="table table-bordered">
        <tr>
            <td colspan="4">
                <h3 align="center">Result</h3>
            </td>
        </tr>

        <tr>
            <td align="center">Title</td>
            <td align="center">Year Publish</td>
            <td align="center">Available</td>
        </tr>
        <?php
        $myDB = new mysqli('localhost', 'root', '', 'library');
        if ($myDB->connect_error) {
            die('Connect Error (' . $myDB->connect_errno . ') '
                . $myDB->connect_error);
        }
        $keywords = $_GET["keywords"];

        $sql = "SELECT * FROM `Books` WHERE `title` LIKE '{$keywords}' ORDER BY `title`";
        $result = $myDB->query($sql) or die($myDB->error);

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>";
            echo stripslashes($row["title"]);
            echo "</td><td align = 'center'>";
            echo $row["pub_year"];
            echo "</td><td>";
            echo $row["available"];
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>