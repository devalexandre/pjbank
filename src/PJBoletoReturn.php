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

    private $valor;
    private $valor_pago;
    private $valor_liquido;
    private $valor_tarifa;
    private $nosso_numero;
    private $nosso_numero_original;
    private $id_unico;
    private $id_unico_original;
    private $pedido_numero;
    private $banco_numero;
    private $token_facilitador;
    private $data_vencimento;
    private $data_pagamento;
    private $data_credito;
    private $pagador;
    private $registro_sistema_bancario;

    /**
     * PJBoletoReturn constructor.
     * @param $data
     */
    public function __construct($response)
    {
        $data = json_decode($response->getBody());
        $data = $data[0];
        $this->valor = $data->valor;
        $this->valor_pago = $data->valor_pago;
        $this->valor_liquido = $data->valor_liquido;
        $this->valor_tarifa = $data->valor_tarifa;
        $this->nosso_numero = $data->nosso_numero;
        $this->nosso_numero_original = $data->nosso_numero_original;
        $this->id_unico = $data->id_unico;
        $this->id_unico_original = $data->id_unico_original;
        $this->pedido_numero = $data->pedido_numero;
        $this->banco_numero = $data->banco_numero;
        $this->token_facilitador = $data->token_facilitador;
        $this->data_vencimento = $data->data_vencimento;
        $this->data_pagamento = $data->data_pagamento;
        $this->data_credito = $data->data_credito;
        $this->pagador = $data->pagador;
        $this->registro_sistema_bancario = $data->registro_sistema_bancario;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     * @return PJBoletoReturn
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorPago()
    {
        return $this->valor_pago;
    }

    /**
     * @param mixed $valor_pago
     * @return PJBoletoReturn
     */
    public function setValorPago($valor_pago)
    {
        $this->valor_pago = $valor_pago;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorLiquido()
    {
        return $this->valor_liquido;
    }

    /**
     * @param mixed $valor_liquido
     * @return PJBoletoReturn
     */
    public function setValorLiquido($valor_liquido)
    {
        $this->valor_liquido = $valor_liquido;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorTarifa()
    {
        return $this->valor_tarifa;
    }

    /**
     * @param mixed $valor_tarifa
     * @return PJBoletoReturn
     */
    public function setValorTarifa($valor_tarifa)
    {
        $this->valor_tarifa = $valor_tarifa;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNossoNumero()
    {
        return $this->nosso_numero;
    }

    /**
     * @param mixed $nosso_numero
     * @return PJBoletoReturn
     */
    public function setNossoNumero($nosso_numero)
    {
        $this->nosso_numero = $nosso_numero;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNossoNumeroOriginal()
    {
        return $this->nosso_numero_original;
    }

    /**
     * @param mixed $nosso_numero_original
     * @return PJBoletoReturn
     */
    public function setNossoNumeroOriginal($nosso_numero_original)
    {
        $this->nosso_numero_original = $nosso_numero_original;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdUnico()
    {
        return $this->id_unico;
    }

    /**
     * @param mixed $id_unico
     * @return PJBoletoReturn
     */
    public function setIdUnico($id_unico)
    {
        $this->id_unico = $id_unico;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdUnicoOriginal()
    {
        return $this->id_unico_original;
    }

    /**
     * @param mixed $id_unico_original
     * @return PJBoletoReturn
     */
    public function setIdUnicoOriginal($id_unico_original)
    {
        $this->id_unico_original = $id_unico_original;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPedidoNumero()
    {
        return $this->pedido_numero;
    }

    /**
     * @param mixed $pedido_numero
     * @return PJBoletoReturn
     */
    public function setPedidoNumero($pedido_numero)
    {
        $this->pedido_numero = $pedido_numero;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBancoNumero()
    {
        return $this->banco_numero;
    }

    /**
     * @param mixed $banco_numero
     * @return PJBoletoReturn
     */
    public function setBancoNumero($banco_numero)
    {
        $this->banco_numero = $banco_numero;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTokenFacilitador()
    {
        return $this->token_facilitador;
    }

    /**
     * @param mixed $token_facilitador
     * @return PJBoletoReturn
     */
    public function setTokenFacilitador($token_facilitador)
    {
        $this->token_facilitador = $token_facilitador;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataVencimento()
    {
        return $this->data_vencimento;
    }

    /**
     * @param mixed $data_vencimento
     * @return PJBoletoReturn
     */
    public function setDataVencimento($data_vencimento)
    {
        $this->data_vencimento = $data_vencimento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataPagamento()
    {
        return $this->data_pagamento;
    }

    /**
     * @param mixed $data_pagamento
     * @return PJBoletoReturn
     */
    public function setDataPagamento($data_pagamento)
    {
        $this->data_pagamento = $data_pagamento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataCredito()
    {
        return $this->data_credito;
    }

    /**
     * @param mixed $data_credito
     * @return PJBoletoReturn
     */
    public function setDataCredito($data_credito)
    {
        $this->data_credito = $data_credito;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPagador()
    {
        return $this->pagador;
    }

    /**
     * @param mixed $pagador
     * @return PJBoletoReturn
     */
    public function setPagador($pagador)
    {
        $this->pagador = $pagador;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegistroSistemaBancario()
    {
        return $this->registro_sistema_bancario;
    }

    /**
     * @param mixed $registro_sistema_bancario
     * @return PJBoletoReturn
     */
    public function setRegistroSistemaBancario($registro_sistema_bancario)
    {
        $this->registro_sistema_bancario = $registro_sistema_bancario;
        return $this;
    }
    
    }