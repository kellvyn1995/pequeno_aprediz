<?php
require_once '../model/classePessoa.php';
class Professor extends Pessoa{
    private $rua;
    private $bairro;
    private $numero;
    private $cep;
    private $estado;
    private $disponibilidade;
    private $adicional;

    //metodos 
    function add_aluno($novo_aluno){
        $pdo = conectar();
            try{
                $query = $pdo->prepare("INSERT INTO alunos (nome_aluno, email_aluno, nascimento_aluno, nome_mae, nome_pai, contato_mae, contato_pai, escola, carga_hora, valor_hora, mensalidade, turno) VALUES (:nome_aluno,:email_aluno,:nascimento_aluno,:nome_mae,:nome_pai, :contato_mae,:contato_pai, :escola,:carga_hora,:valor_hora,:mensalidade,:turno)");
                //PDOStatement :: bindValue - Vincula um valor a um parâmetro
		        $query->bindValue(":nome_aluno", $novo_aluno->getNome());
		        $query->bindValue(":email_aluno", $novo_aluno->getEmail());
		        $query->bindValue(":nascimento_aluno", $novo_aluno->getNascimento());
				$query->bindValue(":nome_mae", $novo_aluno->getNome_mae());
				$query->bindValue(":nome_pai", $novo_aluno->getNome_pai());
				$query->bindValue(":contato_mae", $novo_aluno->getContato_mae());
                $query->bindValue(":contato_pai", $novo_aluno->getContato_pai());
                $query->bindValue(":escola", $novo_aluno->getEscola());
                $query->bindValue(":carga_hora", $novo_aluno->getCarga_hora());
                $query->bindValue(":valor_hora", $novo_aluno->getValor_hora());
                $query->bindValue(":mensalidade", $novo_aluno->getMensalidade());
                $query->bindValue(":turno", $novo_aluno->getTurno());
                $query->execute();
            return true;
            } catch (PDOException $e) {
                    echo "Erro ao cadastrar novo aluno: ".$e->getMessage();
                return false;
                }
    }
    function lista_alunos(){
        $pdo = conectar();
        try {
            $query = $pdo->prepare("SELECT * FROM alunos");
            $query->execute();
            return $query;
        } catch (PDOException $e) {
            echo "Erro ao lista alunos: ".$e->getMessage();
            return false;
        }
    }
    function lista_professores(){
        $pdo = conectar();
        try {
            $query = $pdo->prepare("SELECT * FROM professores");
            $query->execute();
            return $query;
        } catch (PDOException $e) {
            echo "Erro ao lista professores: ".$e->getMessage();
            return false;
        }
    }

    // função do professor administrador
    function cadastra_professor($novo_professor,$senha_pro){
        $pdo = conectar();
        try {
            $query = $pdo->prepare("INSERT INTO professores (nome_pro, email_pro, nascimento,senha_pro, telefone, rua_pro, bairro_pro, numero_pro, estado_pro, cep_pro, semanal, adicionais, admin_pro, diarios, professor, alunos, ponto, cad_alunos, cad_pro, informa) VALUES (:nome_pro, :email_pro, :nascimento, :senha_pro, :telefone, :rua_pro, :bairro_pro, :numero_pro, :estado_pro, :cep_pro, :semanal, :adicionais, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)");
            $query->bindValue(":nome_pro", $novo_professor->getNome());
            $query->bindValue(":email_pro", $novo_professor->getEmail());
            $query->bindValue(":nascimento", $novo_professor->getNascimento());
            $query->bindValue(":senha_pro", $senha_pro);
            $query->bindValue(":telefone", $novo_professor->getTelefone());
            $query->bindValue(":rua_pro", $novo_professor->getRua());
            $query->bindValue(":bairro_pro", $novo_professor->getBairro());
            $query->bindValue(":numero_pro", $novo_professor->getNumero());
            $query->bindValue(":estado_pro", $novo_professor->getCep());
            $query->bindValue(":cep_pro", $novo_professor->getEstado());
            $query->bindValue(":semanal", $novo_professor->getDisponibilidade());
            $query->bindValue(":adicionais",$novo_professor->getAdicional());
            $query->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error ao cadastra novo professor: ".$e->getMessage();
            return false;
        }
    }

    function atualizar_acesso($diarios, $professor, $alunos, $ponto, $cad_alunos, $cad_pro, $informa, $id){
        $pdo = conectar();
        try {
            $query = $pdo->prepare("UPDATE professores SET diarios = :diarios, professor = :professor, alunos = :alunos, ponto = :ponto, cad_alunos = :cad_alunos, cad_pro = :cad_pro, informa = :informa WHERE professores.id_professor =:id");
            $query->bindValue(":diarios",$diarios);
            $query->bindValue(":professor",$professor);
            $query->bindValue(":alunos",$alunos);
            $query->bindValue(":ponto",$ponto);
            $query->bindValue(":cad_alunos",$cad_alunos);
            $query->bindValue(":cad_pro",$cad_pro);
            $query->bindValue(":informa",$informa);
            $query->bindValue(":id",$id);
            $query->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error ao mudar nível de acesso: ".$e->getMessage();
            return false;
        }
    }

    function abrir_diario($data_diario){
        $pdo = conectar();
        $condicao_diario = 1;
        try {
            $query = $pdo->prepare("INSERT INTO diario (data_diario, condicao_diario) VALUES (:data_diario, :condicao_diario)");
            $query->bindValue(":data_diario", $data_diario);
            $query->bindValue(":condicao_diario",$condicao_diario);
            $query->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao abrir novo diario: ".$e->getMessage();
            return false;
        }
    }

    
    function diario_aberto(){
        $pdo = conectar();
        try {
            $query = $pdo->prepare("SELECT * FROM diario WHERE condicao_diario = 1");
            $query->execute();
            $id_diario = $query->fetch();
            $id_diario = $id_diario['id_diario'];
            return $id_diario;
        } catch (PDOException $e) {
            echo "Diario_aberto error: ".$e->getMessage();
            return false;
        }
    }

    function add_registro_diario($id_aluno_registro,$presenca_registro,$obs_registro,$hm_registro){
        $pdo = conectar();
        $prof_no_sistema = new Professor();
        $prof_no_sistema->setNome($_SESSION['nome_pro']);
        $id_diario_chave = $prof_no_sistema->diario_aberto();
        $id_pro_registro = $_SESSION['idUser'];
        try {
            $query = $pdo->prepare("INSERT INTO diario_registro (id_aluno_registro, presenca_registro, obs_registro, hm_registro, id_pro_registro, id_diario_chave) VALUES (:id_aluno_registro, :presenca_registro, :obs_registro, :hm_registro, :id_pro_registro, :id_diario_chave)");
            $query->bindValue(":id_aluno_registro",$id_aluno_registro);
            $query->bindValue(":presenca_registro",$presenca_registro);
            $query->bindValue(":obs_registro",$obs_registro);
            $query->bindValue(":hm_registro",$hm_registro);
            $query->bindValue(":id_pro_registro",$id_pro_registro);
            $query->bindValue(":id_diario_chave",$id_diario_chave);
            $query->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error ao add_registro_diario: ".$e->getMessage();
            return false;
        }
    }

    function fechar_diario(){
        $pdo = conectar();
        try {
            $query = $pdo->prepare("SELECT * FROM diario WHERE condicao_diario = 1");
            $query->execute();
            $id_diario = $query->fetch();
            $id_diario = $id_diario['id_diario'];
            $sql = $pdo->prepare("UPDATE diario SET condicao_diario = 2 WHERE id_diario = $id_diario");
            $sql->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error fechar_diario: ".$e->getMessage();
            return false;
        }
    }

    function verifica_diario(){
        $pdo = conectar();
        try {
            $query = $pdo->prepare("SELECT * FROM diario WHERE condicao_diario = 1");
            $query->execute();
            //retorna o número de linhas afetadas pela última instrução 
            $linhas =  $query->rowCount();

            return $linhas;
        } catch (PDOException $e) {
            echo "Erro ao verificar diarios: ".$e->getMessage();
            return false;
        }
    }
    function lista_diario_registro(){
        $pdo = conectar();

        try {
            $sql = $pdo->prepare("SELECT * FROM diario WHERE condicao_diario = 1");
            $sql->execute();
            $id_diario_chave = $sql->fetch();
            $id_diario_chave = $id_diario_chave['id_diario'];
            $query = $pdo->prepare("SELECT * FROM diario_registro INNER JOIN professores ON id_professor = id_pro_registro INNER JOIN alunos ON id_aluno = id_aluno_registro WHERE id_diario_chave =  $id_diario_chave ");
            $query->execute();
            return $query;
        } catch (PDOException $e) {
            echo "Erro ao lista diario_registro: ".$e->getMessage();
            return false;
        }
    }


    /**
     * Get the value of rua
     */ 
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * Set the value of rua
     *
     * @return  self
     */ 
    public function setRua($rua)
    {
        $this->rua = $rua;

        return $this;
    }

    /**
     * Get the value of bairro
     */ 
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set the value of bairro
     *
     * @return  self
     */ 
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of cep
     */ 
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set the value of cep
     *
     * @return  self
     */ 
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of disponibilidade
     */ 
    public function getDisponibilidade()
    {
        return $this->disponibilidade;
    }

    /**
     * Set the value of disponibilidade
     *
     * @return  self
     */ 
    public function setDisponibilidade($disponibilidade)
    {
        $this->disponibilidade = $disponibilidade;

        return $this;
    }

    /**
     * Get the value of adicional
     */ 
    public function getAdicional()
    {
        return $this->adicional;
    }

    /**
     * Set the value of adicional
     *
     * @return  self
     */ 
    public function setAdicional($adicional)
    {
        $this->adicional = $adicional;

        return $this;
    }
}
?>