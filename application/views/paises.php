<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                    <td><?= $row["pais_id"] ?></td>
                    <td><?= $row["nombre"] ?></td>
                    <td><?= $row["estado"] ?></td>
                   
                </tr>
                 <?php } ?>
            </tbody>
        </table>
    </body>
</html>
