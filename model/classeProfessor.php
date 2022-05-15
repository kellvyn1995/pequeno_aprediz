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