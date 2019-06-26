<?php


if (isset($_POST["task_name"])) {
    require 'crud.php';
    extract($_POST);

    $sql = "INSERT INTO `tasks`(`task_id`, `task_name`, `date_todo`, `status`) 
                        VALUES (null,'$task_name','$date_todo','$status')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));

}






?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add A Task</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
include 'navbar.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header bg-warning">
                    <h2 class="text-white text-center font-weight-bold">
                        Add A New Task
                    </h2>
                </div>

                <div class="card-body">


                    <?php
                    if (isset($message))
                        echo "<p class='text-danger'>$message</p>";
                    ?>

                    <form action="form.php" method="post" enctype="multipart/form-data">


                        <div class="form-group">
                            <label for="title">Task Name</label>
                            <input type="text" class="form-control" name="task_name" required>
                        </div>

                        <div class="form-group">
                            <label for="title">Date</label>
                            <input type="date" class="form-control" name="date_todo" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Status</label>
                            <select name="status" class="form-control">
                                <option value="Complete">Complete</option>
                                <option value="Incomplete">Incomplete</option>
                            </select>
                        </div>


                        <button class="btn btn-info btn-block">Save Task</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






</body>
</html>