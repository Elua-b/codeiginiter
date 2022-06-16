<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
.first{
    display: flex;
    justify-content: space-between;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
    <div class="first">
    <h1>View user</h1>
    <a href="<?php echo base_url().'index.php/user/create'?>">Create</a>
    </div>
    
    <table id="customers">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  
    <?php if(!empty($users)) { foreach($users as $user) { ?>
    <tr>
        <td><?php echo $user['user_id'];?></td>
        <td><?php echo $user['name'];?></td>
        <td><?php echo $user['email'];?></td>
        <td>
            <a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id']?>">Edit</a>
        </td>
        <td>
            <a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>">Delete</a>
        </td>
    </tr>
    <?php }} else{?>
        <tr>
            <td>Records not found</td>
        </tr>
    <?php } ?>
   
  
</table>
</body>
</html>