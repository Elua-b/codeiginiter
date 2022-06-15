<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./create.css">
    <style>
      input[type=text],input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }  
    </style>
</head>
<body>
<div>
  <form method="POST"  name="createUser" action="<?php echo base_url().'index.php/user/create'?>">
    <label for="fname">Name</label>
    <input  type="text" id="fname" name="name" value="<?php echo set_value('name');?>" placeholder="Your name..">
    <?php echo form_error('name')?> 
    <label for="lname">Email</label>
    <input type="email" id="lname" name="email" value="<?php echo set_value('email');?>" placeholder="Your Email..">
  <?php echo form_error('email')?>
   
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>