
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>

</head>
<body>

<div class="view-form">
    <div class="row">
        <?php
        $user ='root';
        $pass ='';
        $db = new PDO('mysql:host=localhost;dbname=art', $user, $pass);

        $stmt=$db->prepare('SELECT * FROM img ORDER BY id DESC ');
        $stmt->execute();
        if ($stmt->rowCount()>0){
            while ($row->$stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);

            }
        }
        ?>

        <div class="column">
            <img src="uploads/<?php echo $row['image']?>">
        </div>
    </div>
</div>

</body>
