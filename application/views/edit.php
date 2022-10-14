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
        <div class="conatiner">
            <a href="<?php echo base_url()?>" class="navbar-brand">Crud App</a>
        </div>
    </div>
    <div class="conatiner" style="padding-top: 10px; padding-left: 10px;">
        <h3>Update User</h3>
        <hr>
        <form method="POST" name="createUser" action="<?php echo base_url().'index.php/user/edit/'.$user['Id']; ?>">
        <div class="row">
          
            <div class="col-md-6">
                <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="<?php echo set_value('name',$user['Name']); ?>" class="form-control">
                <?php echo form_error('name');?>
                </div>
                <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" value="<?php echo set_value('email',$user['Email']); ?>" class="form-control">
                <?php echo form_error('email');?>
                </div>

                <!------------------------- Age ------------------------->
                <div class="form-group">
                <label for="">Age</label>
                <input type="number" name="age" value="<?php echo set_value('age',$user['Age']); ?>" class="form-control">
                </div>
                <!------------------------- Age ------------------------->

                <!-- checkbox -->
                <div class="form-group">
                <label for="">Hobby</label><br>
                reading<input type="checkbox" name="checkbox[]" value="reading" class="form-control">
                writing <input type="checkbox" name="checkbox[]" value="writing" class="form-control">
        
                </div>
                <!-- checkbox -->
                <div class="form-group">
              <button class="btn btn-primary">Update</button>
                <a href="<?php echo base_url().'index.php/user/index';?>" class="btn btn-secondary">Cancel</a>  
            </div>
            </div>
           
        </div>
        </form>
    </div>
    
</body>
</html>