<?php

$proizvodi = array(
    array(
        'id' => 1,
        'naziv' => 'Knjiga',
        'cena' => 30.5
    ),
    array(
        'id' => 2,
        'naziv' => 'Lopta',
        'cena' => 67.45
    ),
    array(
        'id' => 3,
        'naziv' => 'Kisobran',
        'cena' => 203.7
    ),
    array(
        'id' => 4,
        'naziv' => 'Laptop',
        'cena' => 130.7
    )
);


session_start();
if (!isset($_SESSION['korpa'])) {
    $_SESSION['korpa'] = array();
}


if (isset($_POST['submit']) && $_POST['submit'] == 'Kupi') {
    $_SESSION['korpa'][] = $_POST['id'];
    header('Location: .');
    exit();
}


if (isset($_POST['submit']) && $_POST['submit'] == 'Isprazni') {
    unset($_SESSION['korpa']);
    header('Location: ?vidi_korpu');
    exit();
}

if (isset($_GET['vidi_korpu'])) {
    $korpa = array();
    $ukupno = 0;
    $brojac = array_fill(1, 4, 0);
    $brukupno = 0;
    foreach ($_SESSION['korpa'] as $id) {
        foreach ($proizvodi as $proizvod) {
            if ($proizvod['id'] == $id) {
                if (!in_array($proizvod, $korpa)) {
                    $korpa[$proizvod['id']] = $proizvod;
                    $ukupno += $proizvod['cena'];
                    $brojac[$proizvod['id']]++;
                    $brukupno++;
                    break;
                } else {
                    $ukupno += $proizvod['cena'];
                    $brojac[$proizvod['id']]++;
                    $brukupno++;
                    break;
                }
            }
        }
    }

    include 'korpa.php';
    exit();
}


include 'katalog.php';
