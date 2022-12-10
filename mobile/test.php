<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    required::after {
        background-color: red;
    }
</style>

<body>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
    </button>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="staticBackdropLabel">Add Candidate</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mb-0">
                    <form method="post">
                        <div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="lname" required>
                                </div>
                                <div class="col-4">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="fname">
                                </div>
                                <div class="col-4">
                                    <label class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" name="mname">
                                </div>
                            </div>

                            <label class="form-label">Age</label>
                            <input type="text" class="form-control" name="cage">

                            <input type="radio" name="cgender" class="form-check-input" value="Male">Male
                            <input type="radio" name="cgender" class="form-check-input" style="margin-left: 15px;" value="Female">Female </br>

                            <label class="form-label">Student Number</label>
                            <input type="text" class="form-control" name="cno">

                            <label class="form-label">Course</label>
                            <input type="text" class="form-control" name="course">

                            <label class="form-label">Position</label>
                            <select class="form-select" name="cpositions" id="position">
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

                            <label class="form-label">Partylist</label>
                            <input type="text" class="form-control" name="cpartylist">

                            <label class="form-label">Upload Picture</label>
                            <input class="form-control" type="file" name="my_file">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>