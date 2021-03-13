
<?php
class Db {

    private $host = 'localhost';
    private $usuario = 'root';
    private $senha ='';
    private $banco ='marmo';
    private $porta ='3306';
    private $dbh;
    private $stmt;

    public function __construct()
    {
      $dsn = 'mysql:host='.$this->host.';porta='.$this->porta.';dbname='.$this->banco;
      $opcoes = [ 
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ];

      try {
            $this->dbh = new PDO($dsn, $this->usuario, $this->senha, $opcoes);

      } catch (PDOException $e){
          print "Error!:" .$e->getMessage() . "<br/>";
          die();
      }
    }

    public function query($sql){
        $this->stmt = $this->dbh->prepare($sql);

    }
    public function bind($parametro, $valor, $tipo = null){
        if(is_null($tipo)):
            switch (true): 
                case is_int($valor):
                    $tipo = PDO::PARAM_INT;
                break;
                case is_bool($valor):
                    $tipo = PDO::PARAM_BOOL;
                break;
                case is_null($valor):
                    $tipo = PDO::PARAM_NULL;
                break;
                default:
                $tipo = PDO::PARAM_STR; //MANUAL PHP funcoes pdo 
            endswitch;
        endif;

        $this->stmt->bindValue($parametro, $valor, $tipo);

    }
        public function executa(){
            return $this->stmt->execute();
        }
        public function resultado(){
            $this->executa();
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }
        public function resultados(){
            $this->executa();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function totalResults(){
            return $this->stmt->rowCount();
        }
        public function ultimoIdInserido(){
            return $this->stmt->lastInsertId();
        }
}