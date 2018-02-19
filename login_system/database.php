<?PHP
        
        
class DB{
             public $servername = "localhost";
             public $dbname     = "login";
             public $user       ="root";
             public $pass       ="";
             public $pdo;
        
        public function __construct(){
                    
           $this->db_conn();
    
        }
        
        public function db_conn(){
                    
            try{
            $link = new PDO("mysql:host =localhost;dbname=login","root","");
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $link;
            

        }
        catch(PDOException $e){
            die("Failed Connected ").$e->getMessage();
            
        }
        
        
        }
        
        public function prepare($sql){
            return $this->pdo->prepare($sql);
        }
        
        
        
        }


?>