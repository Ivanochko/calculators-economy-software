<html>

<?php
$first = array(
    array("User Input", array("simple" => 3, "average" => 4, "complex" => 6)),
    array("User Outputs", array("simple" => 4, "average" => 5, "complex" => 7)),
    array("User Inquiries Count", array("simple" => 3, "average" => 4, "complex" => 6)),
    array("Number Of Files", array("simple" => 7, "average" => 10, "complex" => 15)),
    array("External Interfaces", array("simple" => 5, "average" => 7, "complex" => 10))
);

$second = array(
    "Does the system require reliable backup and recovery?",
    "Are data communications required?",
    "Are there distributed processing functions?",
    "Is performance critical?",
    "Will the system run in an existing, heavily utilized operational environment?",
    "Does the system require on-line data entry?",
    "Does the on-line data entry require the input transaction to be built over multiple screens or operations?",
    "Are the master files updated on-line?",
    "Are the inputs, outputs, files or inquiries complex?",
    "Is the internal processing complex?",
    "Is the code to be designed reusable?",
    "Are conversion and installation included in the design?",
    "Is the system designed for multiple installations in different organizations?",
    "Is the application designed to facilitate change and ease of use by the user?"
);

$wages = array("simple", "average", "complex");

function convertLabelToKey($str)
{
    $arr = explode(' ', $str);
    $result = 'key-';
    foreach ($arr as $value) {
        $result .= substr($value, 0, 1);
    }
    return $result;
}
?>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="calculator.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav nav-fill w-75">
                <li class="nav-item">
                    <a class="nav-link" href="cocomo1-basic.php">COCOMO I basic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cocomo1-intermediate.php">COCOMO I intermediate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cocomo2.php">COCOMO II</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="functional-points.php"><span class="sr-only">(current)Functional Points</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="container">

        <div class="starter-template">
            <h1>Functional points</h1>
            <div class="container w-75 bg-white shadow-lg p-3">
                <form method="post" action="functional-points.php">
                    <div class="form-group">
                        <table class="table table-bordered w-75 m-auto shadow-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Attribute</th>
                                    <th scope="col">Count</th>
                                    <th scope="col">Wages</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($first as $valuess) {
                                    $text = $valuess[0];
                                    $key = convertLabelToKey($text);

                                    echo "<tr>";
                                    echo "  <th scope=\"row\">$i</th>";
 
                                    echo "  <td>";
                                    echo "    <label for=\"$key\">$text</label>";
                                    echo "  </td>";

                                    echo "  <td class=\"input-count-points\">";
                                    echo "    <input type=\"number\" id=\"$key-count\" name=\"$key-count\" value=\"0\" step=\"1\" min=\"0\" class=\"input-count-points\" dir=\"rtl\" required>";
                                    echo "  </td>";

                                    echo "  <td class=\"input-wages-points\">";
                                    echo "	  <select id=\"$key-wages\" name=\"$key-wages\" dir=\"rtl\" class=\"input-wages-points\" required>";
                                    foreach ($wages as $value ) {
                                        echo " <option>$value</option>";
                                    }
                                    echo "    </select>";
                                    echo "  </td>";

                                    echo "</tr>";
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                        <br>
                        <table class="table table-bordered w-100 m-auto shadow-sm mt-5">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Attribute</th>
                                    <th scope="col">Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($second as $text) {
                                    $key = convertLabelToKey($text);

                                    echo "<tr>";
                                    echo "  <th scope=\"row\">$i</th>";
 
                                    echo "  <td>";
                                    echo "    <label for=\"$key\">$text</label>";
                                    echo "  </td>";

                                    echo "  <td class=\"input-rate\">";
                                    echo "    <input type=\"number\" id=\"$key-rate\" name=\"$key-rate\" value=\"0\" step=\"1\" min=\"0\" max=\"5\" class=\"input-rate\" dir=\"rtl\" required>";
                                    echo "  </td>";

                                    echo "</tr>";
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <button type="submit" name="submit" class="btn btn-secondary">Calculate</button>
                </form>
                <?php
                if (isset($_POST['submit'])) {

                    $w = 0;
                    $fp = 0;
                    
                    foreach ($first as $valuess) {
                        $key = convertLabelToKey("$valuess[0]");
                        $fp += $_POST["$key-count"];
                        $w += $valuess[1][$_POST["$key-wages"]] * $_POST["$key-count"];
                    }
                    
                    $N = 0;

                    foreach ($second as $valuess) {

                        $N += $_POST[convertLabelToKey($valuess)."-rate"];
                    }

                    $CAF = 0.65 + (0.01 * $N);
                    $AFP = $w * $CAF;

                    echo "<p> N : $N</p>";
                    echo "<p>СAF: $CAF</p>";
                    echo "<p>AFP: $AFP</p>";
                }
                ?>
            </div>
        </div>

    </main>
</body>

</html>