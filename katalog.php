<html>
<style>
    table {
        border-collapse: collapse;
    }

    td,
    th {
        border: 1px solid black;
    }
</style>

<body>
    <p>Vasa korpa sadrzi: <?php echo count($_SESSION['korpa']); ?> poizvoda</p>

    <a href="?vidi_korpu">Vidi korpu</a>
    -->
    <table border="1">
        <thead>
            <tr>
                <th>Naziv</th>
                <th>Cena</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($proizvodi as $proizvod) : ?>
                <tr>
                    <td><?php echo $proizvod['naziv']; ?></td>
                    <td><?php echo $proizvod['cena']; ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?php echo $proizvod['id']; ?>">
                            <input type="submit" name="submit" value="Kupi">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>