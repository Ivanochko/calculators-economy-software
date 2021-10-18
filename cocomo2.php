<h1tml>
    <?php
    $valuesFirst = array(
        "PREC" => array("very low" => 6.20, "low" => 4.96, "nominal" => 3.72, "high" => 2.48, "very high" => 1.24, "critical" => null),
        "FLEX" => array("very low" => 5.07, "low" => 4.05, "nominal" => 3.04, "high" => 2.03, "very high" => 1.01, "critical" => null),
        "RESL" => array("very low" => 7.07, "low" => 5.65, "nominal" => 4.24, "high" => 2.83, "very high" => 1.41, "critical" => null),
        "TEAM" => array("very low" => 5.48, "low" => 4.38, "nominal" => 3.29, "high" => 2.19, "very high" => 1.10, "critical" => null),
        "PMAT" => array("very low" => 7.80, "low" => 6.24, "nominal" => 4.68, "high" => 3.12, "very high" => 1.56, "critical" => null)
    );

    $valuesSecond = array(
        "ACAP(Analyst Capability)" => array("very low" => 1.42, "low" => 1.29, "nominal" => 1, "high" => 0.85, "very high" => 0.71, "critical" => null),
        "AEXP(Applications Experience)" => array("very low" => 1.22, "low" => 1.1, "nominal" => 1, "high" => 0.88, "very high" => 0.81, "critical" => null),
        "PCAP(Programmer Capability)" => array("very low" => 1.34, "low" => 1.15, "nominal" => 1, "high" => 0.88, "very high" => 0.76, "critical" => null),
        "PCON(Personnel Continuity)" => array("very low" => 1.29, "low" => 1.12, "nominal" => 1, "high" => 0.9, "very high" => 0.81, "critical" => null),
        "PEXP(Platform Experience)" => array("very low" => 1.19, "low" => 1.09, "nominal" => 1, "high" => 0.91, "very high" => 0.85, "critical" => null),
        "LTEX(Language and Tool Experience)" => array("very low" => 1.2, "low" => 1.09, "nominal" => 1, "high" => 0.91, "very high" => 0.84, "critical" => null),

        "RELY(Required Software Reliability)" => array("very low" => 0.84, "low" => 0.92, "nominal" => 1, "high" => 1.1, "very high" => 1.26, "critical" => null),
        "DATA(Database Size)" => array("very low" => null, "low" => 0.23, "nominal" => 1, "high" => 1.14, "very high" => 1.28, "critical" => null),
        "CPLX(Software Product Complexity)" => array("very low" => 0.73, "low" => 0.87, "nominal" => 1, "high" => 1.17, "very high" => 1.34, "critical" => 1.74),
        "RUSE(Required Reusability)" => array("very low" => null, "low" => 0.95, "nominal" => 1, "high" => 1.07, "very high" => 1.23, "critical" => null),
        "DOCU(Documentation Match to Lifecycle Needs)" => array("very low" => 0.81, "low" => 0.91, "nominal" => 1, "high" => 1.11, "very high" => 1.23, "critical" => null),


        "TIME(Execution Time Constraint)" => array("very low" => null, "low" => null, "nominal" => 1, "high" => 1.11, "very high" => 1.29, "critical" => 1.63),
        "STOR(Main Storage Constraint)" => array("very low" => null, "low" => null, "nominal" => 1, "high" => 1.05, "very high" => 1.17, "critical" => 1.46),
        "PVOL(Platform Volatility)" => array("very low" => null, "low" => 0.87, "nominal" => 1, "high" => 1.15, "very high" => 1.30, "critical" => null),

        "TOOL(Use of Software Tools)" => array("very low" => 1.17, "low" => 1.09, "nominal" => 1, "high" => 0.90, "very high" => 0.78, "critical" => null),
        "SITE(Multisite Development)" => array("very low" => 1.22, "low" => 1.09, "nominal" => 1, "high" => 0.93, "very high" => 0.86, "critical" => 0.8)
    );
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
                        <a class="nav-link" href="cocomo2.php"><span class="sr-only">(current)COCOMO II</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="functional-points.php">Functional Points</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="container">

            <div class="starter-template">
                <h1>Cocomo II</h1>
                <div class="container w-75 bg-white shadow-lg p-3">
                    <form method="post" action="cocomo2.php">
                        <div class="form-group">
                            <label for="lines-of-code">Count of <a href="https://www.tools4noobs.com/online_tools/count_lines/" class="text-decoration-none help" target="_blank"> lines of code: </a></label>
                            <input type="number" class="form-control" name="lines-of-code" id="lines-of-code" aria-describedby="lines-of-code-help" placeholder="Enter count" required>
                            <small id="lines-of-code-help" class="form-text text-muted">In thousands of lines of source code. Without whitespaces</small>
                        </div>

                        <div class="form-group">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="3" class="text-center"><b>Early design</b></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Attribute</th>
                                        <th scope="col">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($valuesFirst as $attribute => $numbers) {
                                        echo "<tr>";
                                        echo "<th scope=\"row\">$i</th>";

                                        echo "<td>";
                                        echo "	<label for=\"$attribute\">$attribute</label>";
                                        echo "</td>";

                                        echo "<td>";
                                        echo "	<select class=\"form-control\" name=\"$attribute\" id=\"$attribute\">";

                                        foreach ($numbers as $key => $value) {
                                            if ($key === "nominal") {
                                                echo "		<option value=\"$value\" selected=\"selected\">$key ($value)</option>";
                                            } elseif ($value != null) {
                                                echo "		<option value=\"$value\">$key ($value)</option>";
                                            }
                                        }
                                        echo "	</select>";
                                        echo "</td>";
                                        echo "</tr>";
                                        $i++;
                                    }
                                    ?>
                                    <thead>
                                        <tr>
                                            <td colspan="3" class="text-center"><b>Post Architecture</b></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Attribute</th>
                                            <th scope="col">Value</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $i = 1;
                                    foreach ($valuesSecond as $attribute => $numbers) {
                                        $attr = substr($attribute, 1, 4);
                                        echo "<tr>";
                                        echo "<th scope=\"row\">$i</th>";

                                        echo "<td>";
                                        echo "	<label for=\"$attr\">$attribute</label>";
                                        echo "</td>";

                                        echo "<td>";
                                        echo "	<select class=\"form-control\" name=\"$attr\" id=\"$attr\">";

                                        foreach ($numbers as $key => $value) {
                                            if ($key === "nominal") {
                                                echo "		<option value=\"$value\" selected=\"selected\">$key ($value)</option>";
                                            } elseif ($value != null) {
                                                echo "		<option value=\"$value\">$key ($value)</option>";
                                            }
                                        }
                                        echo "	</select>";
                                        echo "</td>";
                                        echo "</tr>";
                                        $i++;
                                    }
                                    ?>
                                    <thead>
                                        <tr>
                                            <td colspan="3" class="text-center"><b>Development Schedule</b></td>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <th scope="row">17</th>
                                        <td>
                                            <label for="SCED">SCED(Required Development Schedule)</label>
                                        </td>
                                        <td>
                                            <select class="form-control" name="SCED" id="SCED">
                                                <option value="1.43">very low (1.43)</option>
                                                <option value="1.14">low (1.14)</option>
                                                <option value="1" selected="selected">nominal (1)</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="submit" name="submit" class="btn btn-secondary">Calculate</button>
                    </form>
                    <?php
                    $values = array(
                        "Organic" => array("a" => 3.2, "b" => 1.05),
                        "Semi-independent" => array("a" => 3, "b" => 1.12),
                        "Built-in" => array("a" => 2.8, "b" => 1.2)
                    );
                    if (isset($_POST['submit'])) {
                        $loc = $_POST['lines-of-code'];
                        $SCED = $_POST['SCED'];

                        $SF = 0;
                        $EAF = 1;
                        $A = 2.45;
                        $B = 0.91;
                        $C = 3.67;
                        $PM = 0;
                        $TM = 0;

                        foreach ($valuesFirst as $key => $array)
                            $SF += $_POST[$key];
                        foreach ($valuesSecond as $key => $array){
                            $attr = substr($key, 1, 4);
                            $EAF *= $_POST[$attr];
                        }


                        $E = $B + 0.01 * $SF;
                        $PM = $EAF * $A * pow($loc, $E);
                        $TM = $SCED * $C * pow($PM, ($B + 2.2 * ($E - $B)));

                        echo "<p> LOC: $loc</p>";
                        echo "<p>  SF: $SF</p>";
                        echo "<p> EAF: $EAF</p>";
                        echo "<p>SCED: $SCED</p>";
                        echo "<p>  PM: $PM</p>";
                        echo "<p>  TM: $TM</p>";

                    }
                    ?>
                </div>
            </div>

        </main>
    </body>

    </html>