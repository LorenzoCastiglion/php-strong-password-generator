<?php
session_start();
include __DIR__ . '/partials/header.php';
include __DIR__ . '/functions/functions.php';

$caratteri = [
    'alphabet' => 'qwertyuiopasdfghjklzxcvbnm',
    'numbers' => '1234567890',
    'symbols' => '\|!"£$%&/()=?^*.;,-_#@][><'
];



$password = '';
if (isset($_GET['lunghezza']) && !empty($_GET['lunghezza'])) {
    $lunghezza = $_GET['lunghezza'];
    $scrumble = $caratteri['alphabet'] . $caratteri['numbers'] . $caratteri['symbols'];
    $scrumble = str_shuffle($scrumble);
    while (strlen($password) < $lunghezza) {
        $password .= getRandom($scrumble);
    }
    $password = str_shuffle($password);
    $_SESSION['password'] = $password;
    header('Location: ./receiver.php');
}
;







?>





<body>
    <main class="wrapper">
        <form action="index.php" method="GET" class="container">

            <div class="mb-3 col-3 m-auto">
                <label for="exampleInputPassword1" class="form-label titolo">Lunghezza Password</label>
                <input type="number" class="form-control col-3" name="lunghezza">
            </div>

            <button type="submit" class="btn btn-primary text-uppercase">genera</button>
            <button type="refer" class="btn btn-warning text-uppercase
            ">annulla</button>
        </form>






    </main>

</body>