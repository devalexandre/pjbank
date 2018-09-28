<?php
namespace Indev\PJBank;
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/09/18
 * Time: 09:59
 * @author Alexandre E Souza (alexandre@indev.net.br)
 */

class PJSplit
{

    private $nome;
    private $cnpj;
    private $banco_repasse;
    private $agencia_repasse;
    private $conta_repasse;
    private $valor_fixo;

    /**
     * Split constructor.
     * @param $nome
     * @param $cnpj
     * @param $banco_repasse
     * @param $agencia_repasse
     * @param $conta_repasse
     * @param $valor_fixo
     */
    public function __construct($nome= '', $cnpj= '', $banco_repasse= '', $agencia_repasse= '', $conta_repasse= '', $valor_fixo= '')
    {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->banco_repasse = $banco_repasse;
        $this->agencia_repasse = $agencia_repasse;
        $this->conta_repasse = $conta_repasse;
        $this->valor_fixo = $valor_fixo;
    }


    /**
     * @return String
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param String $nome
     * @return Split
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return String
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param String $cnpj
     * @return Split
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    /**
     * @return String
     */
    public function getBancoRepasse()
    {
        return $this->banco_repasse;
    }

    /**
     * @param String $banco_repasse
     * @return Split
     */
    public function setBancoRepasse($banco_repasse)
    {
        $this->banco_repasse = $banco_repasse;
        return $this;
    }

    /**
     * @return String
     */
    public function getAgenciaRepasse()
    {
        return $this->agencia_repasse;
    }

    /**
     * @param String $agencia_repasse
     * @return Split
     */
    public function setAgenciaRepasse($agencia_repasse)
    {
        $this->agencia_repasse = $agencia_repasse;
        return $this;
    }

    /**
     * @return String
     */
    public function getContaRepasse()
    {
        return $this->conta_repasse;
    }

    /**
     * @param String $conta_repasse
     * @return Split
     */
    public function setContaRepasse($conta_repasse)
    {
        $this->conta_repasse = $conta_repasse;
        return $this;
    }

    /**
     * @return String
     */
    public function getValorFixo()
    {
        return $this->valor_fixo;
    }

    /**
     * @param String $valor_fixo
     * @return Split
     */
    public function setValorFixo($valor_fixo)
    {
        $this->valor_fixo = $valor_fixo;
        return $this;
    }

}