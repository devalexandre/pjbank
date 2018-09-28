<?php
namespace Indev\PJBank;
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/09/18
 * Time: 10:33
 * @author Alexandre E Souza (alexandre@indev.net.br)
 */

class PjBoletoResponse
{

    private $status;
    private $msg;
    private $nossonumero;
    private $id_unico;
    private $banco_numero;
    private $token_facilitador;
    private $credencial;
    private $linkBoleto;
    private $linkGrupo;
    private $linhaDigitavel;
    private $pedido_numero;

    /**
     * PjReturnBoleto constructor.
     * @param $status
     * @param $msg
     * @param $nossonumero
     * @param $id_unico
     * @param $banco_numero
     * @param $token_facilitador
     * @param $credencial
     * @param $linkBoleto
     * @param $linkGrupo
     * @param $linhaDigitavel
     * @param $pedido_numero
     */
    public function __construct($status, $msg, $nossonumero, $id_unico, $banco_numero, $token_facilitador, $credencial, $linkBoleto, $linkGrupo, $linhaDigitavel, $pedido_numero)
    {
        $this->status = $status;
        $this->msg = $msg;
        $this->nossonumero = $nossonumero;
        $this->id_unico = $id_unico;
        $this->banco_numero = $banco_numero;
        $this->token_facilitador = $token_facilitador;
        $this->credencial = $credencial;
        $this->linkBoleto = $linkBoleto;
        $this->linkGrupo = $linkGrupo;
        $this->linhaDigitavel = $linhaDigitavel;
        $this->pedido_numero = $pedido_numero;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @return mixed
     */
    public function getNossonumero()
    {
        return $this->nossonumero;
    }

    /**
     * @return mixed
     */
    public function getIdUnico()
    {
        return $this->id_unico;
    }

    /**
     * @return mixed
     */
    public function getBancoNumero()
    {
        return $this->banco_numero;
    }

    /**
     * @return mixed
     */
    public function getTokenFacilitador()
    {
        return $this->token_facilitador;
    }

    /**
     * @return mixed
     */
    public function getCredencial()
    {
        return $this->credencial;
    }

    /**
     * @return mixed
     */
    public function getLinkBoleto()
    {
        return $this->linkBoleto;
    }

    /**
     * @return mixed
     */
    public function getLinkGrupo()
    {
        return $this->linkGrupo;
    }

    /**
     * @return mixed
     */
    public function getLinhaDigitavel()
    {
        return $this->linhaDigitavel;
    }

    /**
     * @return mixed
     */
    public function getPedidoNumero()
    {
        return $this->pedido_numero;
    }




}