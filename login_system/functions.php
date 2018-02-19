<?php
        
        include "database.php";
        
        class procedure extends DB{
            
            public function setName($name){
                  $this->name=$name;
            }
             public function setUser($username){
                 $this->username=$username;
             }
           public function setEmail($email){
                  $this->email=$email;
           }
           public function setPass($password){
                  $this->password=$password;
         }
            
            public function showData(){
                $sql = "select * from userdata ";
                $result = $this->prepare($sql);
                $result->execute();
                
                return $result->fetchAll();
            }
            
            public function register(){
                if($this->name =="" or $this->username =="" or $this->email==""  or $this->password == ""){
                $msg= "<strong style=color:red >Input cannot be  empty !!</strong>";
                    return $msg;
                }
                elseif(strlen($this->username)<5){
                    $msg= "<strong style=color:red >Username must be 5 or more character  !!</strong>";
                    return $msg;
                }
                elseif(strlen($this->password)<8){
                    $msg= "<strong style=color:red >Passowrd must be 8 or more character  !!</strong>";
                    return $msg;
                }
                
                
                else {
                $sql="insert into userdata(name,username,email,password) values (:name,:username,:email,:password)";
                $stmt = $this->prepare($sql);
                $stmt->bindParam(':name',$this->name);
                $stmt->bindParam(':username',$this->username);
                $stmt->bindParam(':email',$this->email);
                $stmt->bindParam(':password',$this->password);
                
                if($stmt->execute()){
                   $msg = "<strong style=color:green >Data registered successfully !!</strong>";
                   return $msg;
               }
               else {
                   $msg= "<strong style=color:red >Data registration  Failed !!</strong>";
                    return $msg;
               }
                }
                
            }
            
        }










?>