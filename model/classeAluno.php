<?php
require_once '../model/classePessoa.php';
class Aluno extends Pessoa{
    private $nome_mae;
    private $nome_pai;
    private $contato_mae;
    private $contato_pai;
    private $escola;
    private $carga_hora;
    private $valor_hora;
    private $mensalidade;
    private $turno;

    // metodos especiais 
    function __construct($carga_hora,$valor_hora)
    {
        if ($carga_hora == false && $valor_hora == false) {
            $this->mensalidade = false;
        } else {
            $this->mensalidade = $carga_hora * $valor_hora;
        }
        
    }
    
    
    //metodos

    /**
     * Get the value of nome_mae
     */ 
    public function getNome_mae()
    {
        return $this->nome_mae;
    }

    /**
     * Set the value of nome_mae
     *
     * @return  self
     */ 
    public function setNome_mae($nome_mae)
    {
        $this->nome_mae = $nome_mae;

        return $this;
    }

    /**
     * Get the value of nome_pai
     */ 
    public function getNome_pai()
    {
        return $this->nome_pai;
    }

    /**
     * Set the value of nome_pai
     *
     * @return  self
     */ 
    public function setNome_pai($nome_pai)
    {
        $this->nome_pai = $nome_pai;

        return $this;
    }

    /**
     * Get the value of contato_mae
     */ 
    public function getContato_mae()
    {
        return $this->contato_mae;
    }

    /**
     * Set the value of contato_mae
     *
     * @return  self
     */ 
    public function setContato_mae($contato_mae)
    {
        $this->contato_mae = $contato_mae;

        return $this;
    }

    /**
     * Get the value of contato_pai
     */ 
    public function getContato_pai()
    {
        return $this->contato_pai;
    }

    /**
     * Set the value of contato_pai
     *
     * @return  self
     */ 
    public function setContato_pai($contato_pai)
    {
        $this->contato_pai = $contato_pai;

        return $this;
    }

    /**
     * Get the value of escola
     */ 
    public function getEscola()
    {
        return $this->escola;
    }

    /**
     * Set the value of escola
     *
     * @return  self
     */ 
    public function setEscola($escola)
    {
        $this->escola = $escola;

        return $this;
    }

    /**
     * Get the value of carga_hora
     */ 
    public function getCarga_hora()
    {
        return $this->carga_hora;
    }

    /**
     * Set the value of carga_hora
     *
     * @return  self
     */ 
    public function setCarga_hora($carga_hora)
    {
        $this->carga_hora = $carga_hora;

        return $this;
    }

    /**
     * Get the value of valor_hora
     */ 
    public function getValor_hora()
    {
        return $this->valor_hora;
    }

    /**
     * Set the value of valor_hora
     *
     * @return  self
     */ 
    public function setValor_hora($valor_hora)
    {
        $this->valor_hora = $valor_hora;

        return $this;
    }

    /**
     * Get the value of mensalidade
     */ 
    public function getMensalidade()
    {
        return $this->mensalidade;
    }

    /**
     * Set the value of mensalidade
     *
     * @return  self
     */ 
    public function setMensalidade($mensalidade)
    {
        $this->mensalidade = $mensalidade;

        return $this;
    }

    /**
     * Get the value of turno
     */ 
    public function getTurno()
    {
        return $this->turno;
    }

    /**
     * Set the value of turno
     *
     * @return  self
     */ 
    public function setTurno($turno)
    {
        $this->turno = $turno;

        return $this;
    }
}
?>