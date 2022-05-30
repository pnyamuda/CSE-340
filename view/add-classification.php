<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/site/logo.png">
    <title>PHP Motors</title>
    <link type="text/css" media="screen" rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <header>
        <?php
        //HEADER SNIPPET
        require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php';
        ?>

        <nav>
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/vehicles/index.php';

            // //NAV SNIPPET
            // require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/nav.php';

            echo $navList;

            ?>
        </nav>
    </header>
    <main>
        <div class="section-form">

            <form method="POST" action="/phpmotors/vehicles/index.php">
                <div class="intro">
                    <h1>Add Classification</h1>
                    <?php if (isset($message)) {
                        echo $message;
                    } ?>

                </div>

                <label for="invMake">Classification Name<input id="inMake" type="text"
                        value="<?php echo $classificationName ?>" placeholder="Classification Name"
                        name="classificationName" tabindex="1" /></label>
                <input type="submit" value="Submit" tabindex="6" />
                <input type="hidden" name="action" value="add-classification">
            </form>
        </div>

        <hr>
    </main>



    <!--FOOTER SNIPPET-->
    <?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'

    ?>


</body>

</html>