
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($todos as $row) {?>
                <tr>
                    <td><?= $row["usuario_id"] ?></td>
                    <td><?= $row["nombre"] ?></td>
                    <td><?= $row["estado"] ?></td>
                   
                </tr>
                 <?php } ?>
            </tbody>
        </table>


    
</body>
</html>
