<?php
session_start();
include __DIR__ . '/partials/header.php';
$printPass = $_SESSION['password'];




?>

<body>
    <main>


        <div>

            <?php echo $printPass ?>
        </div>


    </main>

</body>