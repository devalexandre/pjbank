<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23/09/18
 * Time: 12:23
 */

namespace Indev\PJBank;


class PJBoletoReturn
{

private $tipo;
private $valor;
private $valor_pago;
private $valor_liquido;
private $valor_tarifa;
private $nosso_numero;
private $nosso_numero_original;
private $id_unico;
private $id_unico_original;
private $banco_numero;
private $token_facilitador;
private $data_vencimento;
private $data_pagamento;
private $data_credito;
private $credencial;
private $chave;
private $registro_sistema_bancario;

    /**
     * PJBoletoReturn constructor.
     * @param $tipo
     * @param $valor
     * @param $valor_pago
     * @param $valor_liquido
     * @param $valor_tarifa
     * @param $nosso_numero
     * @param $nosso_numero_original
     * @param $id_unico
     * @param $id_unico_original
     * @param $banco_numero
     * @param $token_facilitador
     * @param $data_vencimento
     * @param $data_pagamento
     * @param $data_credito
     * @param $credencial
     * @param $chave
     * @param $registro_sistema_bancario
     */
    public function __construct($response)
    {
        $data = json_decode($response->getBody());
        $data = $data[0];

        $this->tipo = $data->tipo;
        $this->valor = $data->valor;
        $this->valor_pago = $data->valor_pago;
        $this->valor_liquido = $data->valor_liquido;
        $this->valor_tarifa = $data->valor_tarifa;
        $this->nosso_numero = $data->nosso_numero;
        $this->nosso_numero_original = $data->nosso_numero_original;
        $this->id_unico = $data->id_unico;
        $this->id_unico_original = $data->id_unico_original;
        $this->banco_numero = $data->banco_numero;
        $this->token_facilitador = $data->token_facilitador;
        $this->data_vencimento = $data->data_vencimento;
        $this->data_pagamento = $data->data_pagamento;
        $this->data_credito = $data->data_credito;
        $this->credencial = $data->credencial;
        $this->chave = $data->chave;
        $this->registro_sistema_bancario = $data->registro_sistema_bancario;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @return mixed
     */
    public function getValorPago()
    {
        return $this->valor_pago;
    }

    /**
     * @return mixed
     */
    public function getValorLiquido()
    {
        return $this->valor_liquido;
    }

    /**
     * @return mixed
     */
    public function getValorTarifa()
    {
        return $this->valor_tarifa;
    }

    /**
     * @return mixed
     */
    public function getNossoNumero()
    {
        return $this->nosso_numero;
    }

    /**
     * @return mixed
     */
    public function getNossoNumeroOriginal()
    {
        return $this->nosso_numero_original;
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
    public function getIdUnicoOriginal()
    {
        return $this->id_unico_original;
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
    public function getDataVencimento()
    {
        return $this->data_vencimento;
    }

    /**
     * @return mixed
     */
    public function getDataPagamento()
    {
        return $this->data_pagamento;
    }

    /**
     * @return mixed
     */
    public function getDataCredito()
    {
        return $this->data_credito;
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
    public function getChave()
    {
        return $this->chave;
    }

    /**
     * @return mixed
     */
    public function getRegistroSistemaBancario()
    {
        return $this->registro_sistema_bancario;
    }


}