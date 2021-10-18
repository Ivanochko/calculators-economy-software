<html>

<head>
    <?php
    require('config.php');
    ?>
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="calculator.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav nav-fill w-50">
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
                    <a class="nav-link" href="functional-points.php">Functional Points</a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="container">

        <div class="starter-template">
            <h1>This is the home page of the calculators</h1>
            <p class="lead">
                Please select the method by which you want to calculate the cost of the software product.
            </p>
        </div>

    </main>
</body>

</html>