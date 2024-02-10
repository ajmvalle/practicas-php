<!DOCTYPE html>
<html>

<head>
    <title>Memorama</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php
    require_once  'Deck.php';
    require_once  'Card.php';

    session_start();

    $deck = new Deck();

    if (isset($_SESSION['cards'])) {
        $cards = unserialize($_SESSION['cards']);
    } else {
        $deck->shuffle();
        $cards = $deck->getCards();
        $_SESSION['cards'] = serialize($cards);
    }

    ?>

    <div class="container">
        <div class="contenedor-derecha">

            <form action="reset.php" method="post">
                <button type="submit" class="btn">Reiniciar</button>
            </form>
        </div>

        <div class="contenedor">
            <h1>Memorama</h1>
        </div>

        <div class="card-grid">
            <?php foreach ($cards as $index => $card) : ?>
                <?php if ($card->getStatus() == "hidden") : ?>
                    <form action="controlador.php" method="post">
                        <input type="hidden" name="index" value="<?php echo $index; ?>">
                        <button type="submit">
                            <img width="200" height="200" src="images/logo.svg" />
                        </button>
                    </form>
                <?php else : ?>
                    <form action="controlador.php" method="post">
                        <input type="hidden" name="index" value="<?php echo $index; ?>">
                        <button type="submit">
                            <img width="200" height="200" src="<?php echo $card->getImage(); ?>" />
                        </button>
                    </form>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <!-- Mensaje de felicitaciones cuando se completa el tablero -->
        <div class="contenedor">
            <?php
            $completed = true;

            foreach ($cards as $card) {
                if ($card->getStatus() != "found") {
                    $completed = false;
                    break;
                }
            }

            if ($completed) {
                echo "<h1>¡Felicidades! Gran trabajo!</h1>";
                echo "<img src='images/Ash.png' width='200' height='200'>";
            }


            ?>


        </div>


        <div class="form-container">

        </div>
    </div>
</body>

</html>