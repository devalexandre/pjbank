<?php
namespace Indev\PJBank;
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/09/18
 * Time: 23:08
 */

class PJCredencial extends PJBase
{
    private $nome_empresa;
    private $cnpj;
    private $cep;
    private $endereco;
    private $numero;
    private $bairro;
    private $complemento;
    private $cidade;
    private $estado;
    private $ddd;
    private $telefone;
    private $email;
    private $webhook;

    /**
     * PJCredencial constructor.
     * @param $nome_empresa
     * @param $cnpj
     * @param $cep
     * @param $endereco
     * @param $numero
     * @param $bairro
     * @param $complemento
     * @param $cidade
     * @param $estado
     * @param $ddd
     * @param $telefone
     * @param $email
     * @param $webhook
     */
    public function __construct($nome_empresa, $cnpj, $cep, $endereco, $numero, $bairro, $complemento, $cidade, $estado, $ddd, $telefone, $email, $webhook)
    {
        $this->nome_empresa = $nome_empresa;
        $this->cnpj = $cnpj;
        $this->cep = $cep;
        $this->endereco = $endereco;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->complemento = $complemento;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->ddd = $ddd;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->webhook = $webhook;
    }

    /**
     * @return mixed
     */
    public function getNomeEmpresa()
    {
        return $this->nome_empresa;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @return mixed
     */
    public function getDdd()
    {
        return $this->ddd;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getWebhook()
    {
        return $this->webhook;
    }


}