<?php
session_start();
include __DIR__ . '/partials/header.php';
$printPass = $_SESSION['password'];




?>

<body>
    <main>


        <div class="wrapper titolo risultato">
            <p class="text-danger mb-3">La tua password è:</p>
            <h3>
                <?php echo $printPass ?>
            </h3>
            <br>
            <p class="shhh mt-3">hover on your password</p>

        </div>

        <div class="mano1">
            <img src="./img/mano_3.png" alt="">
        </div>

        <div class="mano2">
            <img src="./img/mano_1.png" alt="">
        </div>


    </main>

</body>