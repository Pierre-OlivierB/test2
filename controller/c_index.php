<?php include 'controller/c_database.php'; //on inclut notre fichier de connection 
    
    $pdo = Database::connect(); //on se connecte à la base 
    $sql = 'SELECT * FROM user ORDER BY id DESC'; //on formule notre requete  
        foreach ($pdo->query($sql) as $row) { //on cree les lignes du tableau avec chaque valeur retournée
            echo '<br /><tr>';
            echo '<td>' . $row['name'] . '</td><p>';
            echo '<td>' . $row['firstname'] . '</td><p>';
            echo '<td>' . $row['age'] . '</td><p>';
            echo '<td>' . $row['tel'] . '</td><p>';
            echo '<td>' . $row['email'] . '</td><p>';
            echo '<td>' . $row['pays'] . '</td><p>';
            echo '<td>' . $row['comment'] . '</td><p>';
            echo '<td>' . $row['metier'] . '</td><p>';
            echo '<td>' . $row['url'] . '</td><p>';
            echo '<td>';
            echo '<a class="btn" href="index.php?loc=read&id=' . $row['id'] . '">Read</a>'; // un autre td pour le bouton d'edition
            echo '</td><p>';
            echo '<td>';
            echo '<a class="btn btn-success" href="index.php?loc=edit&id=' . $row['id'] . '">Update</a>'; // un autre td pour le bouton d'update
            echo '</td><p>';
            echo '<td>';
            echo '<a class="btn btn-danger" href="index.php?loc=delete&id=' . $row['id'] . ' ">Delete</a>'; // un autre td pour le bouton de suppression
            echo '</td><p>';
            echo '</tr><p>';
        }
        Database::disconnect(); //on se deconnecte de la base