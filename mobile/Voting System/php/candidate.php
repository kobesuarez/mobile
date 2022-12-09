<?php
include 'connection.php';
if (isset($_POST['submit'])) {
    $cname = $_POST['fname'] . ' ' . $_POST['mname'] . ' ' . $_POST['lname'];
    $cno = $_POST['cno'];
    $cage = $_POST['cage'];
    if (isset($_POST['cgender'])) {
        $cgender = $_POST['cgender'];
    }
    $course = $_POST['course'];
    $cposition = $_POST['cpositions'];
    $cpartylist = $_POST['cpartylist'];
    $votingstatus = 0;
    $cname = mysqli_real_escape_string($conn, $cname);
    $cno = mysqli_real_escape_string($conn, $cno);
    $cage = mysqli_real_escape_string($conn, $cage);
    $cgender = mysqli_real_escape_string($conn, $cgender);
    $course = mysqli_real_escape_string($conn, $course);
    $cposition = mysqli_real_escape_string($conn, $cposition);
    $cpartylist = mysqli_real_escape_string($conn, $cpartylist);
    if (($_FILES['my_file']['name'] != "")) {
        // Where the file is going to be stored
        $target_dir = "C:\Users\\Windows X\\Documents\\files\\mobile\\src\\candidate\\" . $cposition . "\\" . $cname;
        $file = $_FILES['my_file']['name'];
        $path = pathinfo($file);
        $ext = $path['extension'];
        $temp_name = $_FILES['my_file']['tmp_name'];
        $path_filename_ext = $target_dir . "." . $ext;
        $fileurl = $cname . '.' . $ext;
        // Check if file already exists
        if (file_exists($path_filename_ext)) {
            echo "Sorry, file already exists.";
        } else {
            move_uploaded_file($temp_name, $path_filename_ext);
            echo "Congratulations! File Uploaded Successfully.";
        }
    }
    $insertquery = "INSERT into candidate(candidatename, candidatestudentnumber, candidateage, candidategender, candidatecourse, candidateposition, candidatepartylist, candidatepicture) values ('$cname', '$cno', '$cage', '$cgender', '$course', '$cposition', '$cpartylist', '$fileurl')";
    $performquery = mysqli_query($conn, $insertquery);
    if ($performquery) {
        $insertquery = "INSERT into totalvotestracker(partylist) values ('$cpartylist')";
        $performquery = mysqli_query($conn, $insertquery);
        header('Location: candidate.php');
    } else {
        echo "error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Voting System/stylesheets/candidate.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Candidate</title>
</head>

<body id="addcandidate">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <div class="topnav">
        <img src="/cict.png" class="img">
        <div class="title">
            <p>
            <h1>Taguig City University</h1>
            <h3>College of Information Communication and Technology Admin Portal</h3>
            </p>
        </div>
        <div class="adminpanel">
            <div class="adminlogo">
                <img src="" alt="" class="logo">
            </div>
            <h3 class="adminname">Admin</h3>
        </div>
    </div>
    <div class="sidenav">
        <ul>
            <li><button type="button" class="dashboardbtn">Dashboard</button></li>
            <li><button type="button" class="voterbtn">Voters List</button></li>
            <li><button type="button" class="candidatebtn">Candidates</button></li>
        </ul>
    </div>
    <div class="dashboard-voter">
        <div class="list">
            <div class="toplist">
                <input type="text" placeholder="ex: xx-xxxxx" class="searchbar">
                <button class="addbtn" v-on:click="isClicked = !isClicked">Add</button>
                <button class="sortbtn">Sort</button>
                <button class="findbtn">Find</button>
            </div>
            <div class="tablelist">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Student Number</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Course</th>
                            <th>Position</th>
                            <th>Partylist</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'connection.php';
                        $filltable = "SELECT * FROM candidate";
                        $fill = mysqli_query($conn, $filltable);
                        while ($getrow = mysqli_fetch_array($fill)) {
                            echo '
                                <tr>
                                    <td>' . $getrow["candidatename"] . '</td>
                                    <td>' . $getrow["candidatestudentnumber"] . '</td>
                                    <td>' . $getrow["candidateage"] . '</td>
                                    <td>' . $getrow["candidategender"] . '</td>
                                    <td>' . $getrow["candidatecourse"] . '</td>
                                    <td>' . $getrow["candidateposition"] . '</td>
                                    <td>' . $getrow["candidatepartylist"] . '</td>
                                </tr>
                                ';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="partygraph"></div>

    </div>
    <div id="add" v-if="isClicked">
        <form method="post" enctype="multipart/form-data">
            <div class="addcontainer">
                <div class="imgbtn">
                    <input type="file" name="my_file" id="insertbtn">
                </div>
                <p>Surname</p>
                <input type="text" name="lname" class="intext" id="surtext">
                <p>First name</p>
                <input type="text" name="fname" class="intext" id="firsttext">
                <p>Middle Name</p>
                <input type="text" name="mname" class="intext" id="mntext">
                <p>Age</p>
                <input type="text" name="cage" class="intext" id="agetext"><br><br>
                <input type="radio" name="cgender" id="male" value="Male">Male
                <input type="radio" name="cgender" id="female" style="margin-left: 30px;" value="Female">Female
                <p>Student Number</p>
                <input type="text" name="cno" class="intext" id="stnotext">
                <p>Course</p>
                <input type="text" name="course" class="intext" id="coursetext">
                <p>Position Applying</p>
                <select name="cpositions" id="position">
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
                <p>Partylist:</p>
                <input type="text" name="cpartylist" class="intext" id="plist">
            </div>
            <div class="btns">
                <button class="applybtn">Apply</button><br>
                <button type="submit" name="submit" class="savebtn">Save</button><br>
                <button class="cancelbtn" v-on:click="isClicked = !isClicked">Cancel</button>
            </div>
        </form>
    </div>
    <script>
        let add = Vue.createApp({
            data: function() {
                return {
                    isClicked: false
                }
            }
        })
        add.mount('#addcandidate')
    </script>
</body>

</html>