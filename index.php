<?php
session_start();
include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/functions.php';

$caratteri = [
    'alphabet' => 'qwertyuiopasdfghjklzxcvbnm',
    'numbers' => '1234567890',
    'symbols' => '\|!"£$%&/()=?^*.;,-_#@][><'
];
getCharacter($string);


$password = '';
if (isset($_GET['lunghezza']) && !empty($_GET['lunghezza'])) {
    $lunghezza = $_GET['lunghezza'];
    while (strlen($password) < $lunghezza) {
        $password .= getCharacter($caratteri['alphabet']);
    }
}
;



?>





<body>
    <main>
        <form action="index.php" method="GET">

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Lunghezza</label>
                <input type="number" class="form-control" name="lunghezza">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">genera</button>
            <button type="refer" class="btn btn-primary">annulla</button>
        </form>

        <div>
            <?php echo $password . strlen($password) ?>
        </div>


    </main>

</body>