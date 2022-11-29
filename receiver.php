<?php
session_start();
include __DIR__ . '/partials/header.php';
$printPass = $_SESSION['password'];




?>

<body>
    <main>


        <div class="wrapper titolo risultato">
            <p class="text-danger">La tua passwor è:</p>
            <h3><?php echo $printPass ?></h3>
        </div>


    </main>

</body>