<?php
// we are including our link page.
require_once 'config.php';

//we have listed the data
$data = $db->prepare("SELECT * FROM members");
$data->execute();
$datalist = $data->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- we are adding this css link to make the table look neat. -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css" />
    <title>PHP Datatable</title>
</head>

<body>
    <div class="container">
        <div class="card p-5">
            <h2 style="text-align: center;">USER DATA DATATABLE</h2>
            <hr>
            <!-- we created a table and assigned an id. -->
            <table class="table" id="userdata">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">USERNAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">PASSWORD</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- we are creating a loop because we want to capture all the data.  
                    while listing the variable data we have written as a datalist, 
                    we list all the data last and write the name of the variable we have transferred. -->
                    <?php foreach ($datalist as $key => $members) { ?>
                        <tr>
                            <!-- here we write the name of the variable to which we transfer the words in the loop(members). 
                            we write down all the column names found in the database. -->
                            <td><?php echo $members['user_id'] ?></td>
                            <td><?php echo $members['user_name'] ?></td>
                            <td><?php echo $members['user_mail'] ?></td>
                            <td><?php echo $members['user_pass'] ?></td>
                        </tr>
                    <?php   } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- we are writing the script codes here for the table to work. i wanted to include the table as a link. -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            // in the place where #userdata is written, we write that we wrote to the id in the table.
            $('#userdata').DataTable();
        });
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>