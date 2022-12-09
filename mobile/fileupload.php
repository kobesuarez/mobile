<?php
include('connection.php');
if (isset($_POST['submit'])) {
    if (($_FILES['my_file']['name'] != "")) {
        // Where the file is going to be stored
        $name = $_POST['name'];
        $candidatefolder = $_POST['positions'];
        $target_dir = "\src\candidate\\" . $name;
        $file = $_FILES['my_file']['name'];
        $path = pathinfo($file);
        $ext = $path['extension'];
        $temp_name = $_FILES['my_file']['tmp_name'];
        $path_filename_ext = $target_dir . "." . $ext;
        // Check if file already exists
        if (file_exists($path_filename_ext)) {
            echo "Sorry, file already exists.";
        } else {
            move_uploaded_file($temp_name, $path_filename_ext);
            echo "Congratulations! File Uploaded Successfully.";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="name" id="">
        <select name="positions" id="position">
            <option value="President">President</option>
            <option value="Vice President - Internal">Vice President - Internal</option>
            <option value="Vice President - External">Vice President - External</option>
            <option value="General Secretary">General Secretary</option>
            <option value="Deputy Secretary">Deputy Secretary</option>
            <option value="Treasurer">Treasurer</option>
            <option value="Auditor">Auditor</option>
            <option value="Public Information Officer - Male">Public Information Officer - Male</option>
            <option value="Public Information Officer - Female">Public Information Officer - Female</option>
        </select>
        <input type="file" name="my_file" id="">
        <button type="submit" name="submit">move</button>
    </form>
    <div id="display-image">
        <?php
        $query = " select * from candidate ";
        $result = mysqli_query($conn, $query);

        while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <img src="/src/candidate/President/<?php echo $data['candidatepicture']; ?>">

        <?php
        }
        ?>
    </div>
</body>

</html>