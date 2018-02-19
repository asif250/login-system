<?php

    include "inc/header.php";
    include "functions.php";
    
    $db=new procedure();
    



?>





<section class="">
  <table class="tblone">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    
    <?php $i=0;
    
    foreach($db->showData() as $key=>$value){
    $i++;
    
    ?>

    <tr>
        <td><?php  echo $i ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['username']; ?></td>
        <td><?php echo $value['email']; ?></td>
        <td>
        <a href="index.php?action=edit&id=<?php echo $value['id'];?>">Edit</a> ||
        <a href="index.php?action=delete&id=<?php echo $value['id'];?>">Delete</a>
        </td>
    </tr>

    <?php } ?>
  </table>
</section>
<?php include "inc/footer.php"; ?>
