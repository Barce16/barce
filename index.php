<?php
    include('./config/database.php');

    $sql = "SELECT * FROM animals WHERE Pet_Owner LIKE 'Jecris i%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
            echo $row['Pet_Owner'] . "<br/>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>