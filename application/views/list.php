<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body{
        background-color: lavender;
    }
  </style>
    <title>Document</title>
</head>
<body>
    <div class="navbar navbar-dark bg-dark" style="background-color: black;">
        <div class="container">
            <a href="<?php echo base_url()?>" class="navbar-brand">Crud App</a>
        </div>
    </div>
    <div class="conatiner" style="padding-top: 10px; padding-left: 10px;">
    <div class="row">
        <div class="col-md-12">
            <?php 
            $success = $this->session->userdata('success');
            if($success != ""){?>
            <div class="alert alert-success"><?php echo $success;?></div>
            <?php

            }

            ?>
             
        </div>
    </div>
<div class="row">
<div class="col-md-6"><h3>View Users</h3></div>
        <div class="col-md-6" style="float: right;">
            <a href="<?php echo base_url().'index.php/user/create'?>" class="btn btn-primary"> Create</a>
        </div>
</div>
        <hr>
        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Hobby</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php if(!empty($users)) {
                        foreach ($users as $user) 
                        { ?>
                        <tr>
                            <td><?php echo $user['Id'] ?></td>
                            <td><?php echo $user['Name'] ?></td>
                            <td><?php echo $user['Email'] ?></td>
                            <td><?php echo $user['Age'] ?></td>
                            <td><?php echo $user['Hobby'] ?></td>
                            <td><a href="<?php echo base_url().'index.php/user/edit/'.$user['Id'] ?>" class="btn btn-primary">Edit</a></td>
                            <td><a href="<?php echo base_url().'index.php/user/delete/'.$user['Id'] ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php }} else { ?>
                        
                            <tr>
                                <td colspan="5">Record Not Found</td>
                            </tr>
                  <?php } ?>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>