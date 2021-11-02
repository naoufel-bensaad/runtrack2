<DOCTYPE html>
<html>
    <head>
        <title>Tableau en PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $myBool = false;
        $entier = 7;
        $str ="bonjour";
        $float = 7.1;
        ?>
        <table border ="1">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Valeu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>boléen</td>
                    <td><?php echo gettype($myBool) ?></td>
                    <td><?php echo gettype($myBool) ?></td>
                </tr>
                <tr>
                <td>entier</td>
                    <td><?php echo gettype($entier) ?></td>
                    <td><?php echo gettype($entier) ?></td>
                </tr>
                <tr>
                <td>nombre à virgule flottante</td>
                    <td><?php echo gettype($float) ?></td>
                    <td><?php echo gettype($float) ?></td>
                </tr>
            </thead>
        </table>
    </body>
</html>
                    


