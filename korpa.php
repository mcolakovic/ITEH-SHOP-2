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
    <h1>Korpa</h1>
    <?php if (count($korpa) > 0) : ?>
        <table>
            <thead>
                <tr>
                    <th>Naziv</th>
                    <th>Cena</th>
                    <th>Kolicina</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td>Ukupno:</td>
                    <td><?php echo $ukupno; ?></td>
                    <td><?php echo $brukupno; ?></td>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach ($korpa as $proizvod) : ?>
                    <tr>
                        <td><?php echo $proizvod['naziv']; ?></td>
                        <td><?php echo $proizvod['cena']; ?></td>
                        <?php if ($brojac[$proizvod['id']] > 0) : ?>
                            <td><?php echo $brojac[$proizvod['id']]; ?></td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>Nema proizvoda u korpi</p>
    <?php endif; ?>

    <form method="post" action="?">
        <p>
            <a href="?">Nastavi sa kupovinom</a>
            <input type="submit" name="submit" value="Isprazni">
        </p>
    </form>
</body>

</html>