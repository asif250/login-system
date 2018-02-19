
<?php include "inc/header.php";

      include "functions.php";
    
        $db=new procedure();
       
    
   
   
   




?>



<section style="margin:  150px;">
 

<form action="" method="POST">
 <table>
  <?php
   if(isset($_POST['register'])){
       
       $name=$_POST['name'];
       $username=$_POST['username'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       
       $db->setName($name);
       $db->setUser($username);
       $db->setEmail($email);
       $db->setPass($password);
       
        $result = $db->register();
        echo "<tr><td></td><td>{$result}</td></tr>";
       
   }?>
    <tr>
        <td>Name: </td>
        <td><input type="text" name="name" /></td>    
    </tr>

    <tr>
       <td>Username: </td>
        <td><input type="text" name="username"/></td>
    </tr>

    <tr>
      <td>Email: </td>
        <td><input type="email" name="email"/></td>
    </tr>
    <tr>
      <td>Password: </td>
        <td><input type="password" name="password"/></td>
    </tr>
    <tr>
      <td></td>
        <td>
        <input type="submit" name="register" value="Register"/>
        <input type="reset" value="Clear"/>
        </td>
    </tr>
  </table>
</form>
</section>

<?php include "inc/footer.php"; ?>
