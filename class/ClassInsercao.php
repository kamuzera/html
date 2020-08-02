<?php require_once("../models/ClassConexao.php");   
class ClassInsercao extends ClassConexao {

    private $id;
    private $CodInterno;
    private $CodEstrangeiro;
    private $Nome;
    private $Email;
    private $Telefone;
    private $TelefoneWp;
    private $Idade;
    private $Cpf;
    private $Rg;
    private $Salario;
    private $DataNascimento;

    #Método Construtor
    public function __construct( $Nome, $Email, $Telefone, $TelefoneWp, $Idade, $Cpf, $Rg, $Salario, $DataNacimento){
        $this->Id=0;
        $this->CodInterno=rand(1,100000000);
        $this->CodEstrangeiro=rand(1,100000000);
        $this->Nome=$Nome;
        $this->Email=$Email;
        $this->Telefone=$Telefone;
        $this->TelefoneWp=$TelefoneWp;
        $this->Idade=$Idade;
        $this->Cpf=$Cpf;
        $this->Rg=$Rg;
        $this->Salario=$Salario;
        $this->DataNascimento=$DataNacimento;

    }

    #Método Inserção
    public function InserirDB(){
        $Crud=$this->Conectar() -> prepare("INSERT INTO clientes VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $Crud->bindParam(1,$this->Id, PDO::PARAM_INT);
        $Crud->bindParam(2,$this->CodInterno, PDO::PARAM_INT);
        $Crud->bindParam(3,$this->CodEstrangeiro, PDO::PARAM_INT);
        $Crud->bindParam(4,$this->Nome, PDO::PARAM_STR);
        $Crud->bindParam(5,$this->Email, PDO::PARAM_STR);
        $Crud->bindParam(6,$this->Telefone, PDO::PARAM_STR);
        $Crud->bindParam(7,$this->TelefoneWp, PDO::PARAM_STR);
        $Crud->bindParam(8,$this->Idade, PDO::PARAM_STR);
        $Crud->bindParam(9,$this->Cpf, PDO::PARAM_STR);
        $Crud->bindParam(10,$this->Rg, PDO::PARAM_STR);
        $Crud->bindParam(11,$this->Salario, PDO::PARAM_STR);
        $Crud->bindParam(12,$this->DataNascimento, PDO::PARAM_STR);
        $Crud->execute();


    }

}

?>