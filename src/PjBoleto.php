<?php
namespace Indev\PJBank;
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/09/18
 * Time: 09:53
 * @author Alexandre E Souza (alexandre@indev.net.br)
 */

class PjBoleto extends PJBase
{
    private $vencimento;
    private $valor;
    private $juros;
    private $multa;
    private $desconto;
    private $nome_cliente;
    private $cpf_cliente;
    private $endereco_cliente;
    private $numero_cliente;
    private $complemento_cliente;
    private $bairro_cliente;
    private $estado_cliente;
    private $grupo;
    private $cep_cliente;
    private $pedido_numero;
    private $especie_documento;
    private $texto;
    private $logo_url;
    private $formato;
    private $exibir_fantasia;
    private $nunca_atualizar_boleto;
    private $webhook;
    private  $split;

    /**
     * PjBoleto constructor.
     * @param $vencimento
     * @param $valor
     * @param $juros
     * @param $multa
     * @param $desconto
     * @param $nome_cliente
     * @param $cpf_cliente
     * @param $endereco_cliente
     * @param $numero_cliente
     * @param $complemento_cliente
     * @param $bairro_cliente
     * @param $estado_cliente
     * @param $grupo
     * @param $cep_cliente
     * @param $pedido_numero
     * @param $especie_documento
     * @param $texto
     * @param $logo_url
     * @param $formato
     * @param $exibir_fantasia
     * @param $nunca_atualizar_boleto
     * @param $webhook
     * @param $split
     */
    public function __construct($vencimento = '', $valor= '', $juros= '', $multa= '', $desconto= '',
                                $nome_cliente= '', $cpf_cliente= '', $endereco_cliente= '',
                                $numero_cliente= '', $complemento_cliente= '', $bairro_cliente= '', $estado_cliente= '',
                                $grupo, $cep_cliente= '', $pedido_numero= '', $especie_documento= '',
                                $texto= '', $logo_url= '', $formato= '', $exibir_fantasia= '',
                                $nunca_atualizar_boleto= '', $webhook= '',  $split = null)
    {
        $this->vencimento = $vencimento;
        $this->valor = $valor;
        $this->juros = $juros;
        $this->multa = $multa;
        $this->desconto = $desconto;
        $this->nome_cliente = $nome_cliente;
        $this->cpf_cliente = $cpf_cliente;
        $this->endereco_cliente = $endereco_cliente;
        $this->numero_cliente = $numero_cliente;
        $this->complemento_cliente = $complemento_cliente;
        $this->bairro_cliente = $bairro_cliente;
        $this->estado_cliente = $estado_cliente;
        $this->grupo = $grupo;
        $this->cep_cliente = $cep_cliente;
        $this->pedido_numero = $pedido_numero;
        $this->especie_documento = $especie_documento;
        $this->texto = $texto;
        $this->logo_url = $logo_url;
        $this->formato = $formato;
        $this->exibir_fantasia = $exibir_fantasia;
        $this->nunca_atualizar_boleto = $nunca_atualizar_boleto;
        $this->webhook = $webhook;
        $this->split = $split;
    }


    /**
     * @return String
     */
    public function getVencimento()
    {
        return $this->vencimento;
    }

    /**
     * @param String $vencimento
     * @return PjBoleto
     */
    public function setVencimento($vencimento)
    {
        $this->vencimento = $vencimento;
        return $this;
    }

    /**
     * @return String
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param String $valor
     * @return PjBoleto
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
        return $this;
    }

    /**
     * @return String
     */
    public function getJuros()
    {
        return $this->juros;
    }

    /**
     * @param String $juros
     * @return PjBoleto
     */
    public function setJuros($juros)
    {
        $this->juros = $juros;
        return $this;
    }

    /**
     * @return String
     */
    public function getMulta()
    {
        return $this->multa;
    }

    /**
     * @param String $multa
     * @return PjBoleto
     */
    public function setMulta($multa)
    {
        $this->multa = $multa;
        return $this;
    }

    /**
     * @return String
     */
    public function getDesconto()
    {
        return $this->desconto;
    }

    /**
     * @param String $desconto
     * @return PjBoleto
     */
    public function setDesconto($desconto)
    {
        $this->desconto = $desconto;
        return $this;
    }

    /**
     * @return String
     */
    public function getNomeCliente()
    {
        return $this->nome_cliente;
    }

    /**
     * @param String $nome_cliente
     * @return PjBoleto
     */
    public function setNomeCliente($nome_cliente)
    {
        $this->nome_cliente = $nome_cliente;
        return $this;
    }

    /**
     * @return String
     */
    public function getCpfCliente()
    {
        return $this->cpf_cliente;
    }

    /**
     * @param String $cpf_cliente
     * @return PjBoleto
     */
    public function setCpfCliente($cpf_cliente)
    {
        $this->cpf_cliente = $cpf_cliente;
        return $this;
    }

    /**
     * @return String
     */
    public function getEnderecoCliente()
    {
        return $this->endereco_cliente;
    }

    /**
     * @param String $endereco_cliente
     * @return PjBoleto
     */
    public function setEnderecoCliente($endereco_cliente)
    {
        $this->endereco_cliente = $endereco_cliente;
        return $this;
    }

    /**
     * @return String
     */
    public function getNumeroCliente()
    {
        return $this->numero_cliente;
    }

    /**
     * @param String $numero_cliente
     * @return PjBoleto
     */
    public function setNumeroCliente($numero_cliente)
    {
        $this->numero_cliente = $numero_cliente;
        return $this;
    }

    /**
     * @return String
     */
    public function getComplementoCliente()
    {
        return $this->complemento_cliente;
    }

    /**
     * @param String $complemento_cliente
     * @return PjBoleto
     */
    public function setComplementoCliente($complemento_cliente)
    {
        $this->complemento_cliente = $complemento_cliente;
        return $this;
    }

    /**
     * @return String
     */
    public function getBairroCliente()
    {
        return $this->bairro_cliente;
    }

    /**
     * @param String $bairro_cliente
     * @return PjBoleto
     */
    public function setBairroCliente($bairro_cliente)
    {
        $this->bairro_cliente = $bairro_cliente;
        return $this;
    }

    /**
     * @return String
     */
    public function getEstadoCliente()
    {
        return $this->estado_cliente;
    }

    /**
     * @param String $estado_cliente
     * @return PjBoleto
     */
    public function setEstadoCliente($estado_cliente)
    {
        $this->estado_cliente = $estado_cliente;
        return $this;
    }

    /**
     * @return String
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * @param String $grupo
     * @return PjBoleto
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;
        return $this;
    }

    /**
     * @return String
     */
    public function getCepCliente()
    {
        return $this->cep_cliente;
    }

    /**
     * @param String $cep_cliente
     * @return PjBoleto
     */
    public function setCepCliente($cep_cliente)
    {
        $this->cep_cliente = $cep_cliente;
        return $this;
    }

    /**
     * @return String
     */
    public function getPedidoNumero()
    {
        return $this->pedido_numero;
    }

    /**
     * @param String $pedido_numero
     * @return PjBoleto
     */
    public function setPedidoNumero($pedido_numero)
    {
        $this->pedido_numero = $pedido_numero;
        return $this;
    }

    /**
     * @return String
     */
    public function getEspecieDocumento()
    {
        return $this->especie_documento;
    }

    /**
     * @param String $especie_documento
     * @return PjBoleto
     */
    public function setEspecieDocumento($especie_documento)
    {
        $this->especie_documento = $especie_documento;
        return $this;
    }

    /**
     * @return String
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * @param String $texto
     * @return PjBoleto
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;
        return $this;
    }

    /**
     * @return String
     */
    public function getLogoUrl()
    {
        return $this->logo_url;
    }

    /**
     * @param String $logo_url
     * @return PjBoleto
     */
    public function setLogoUrl($logo_url)
    {
        $this->logo_url = $logo_url;
        return $this;
    }

    /**
     * @return String
     */
    public function getFormato()
    {
        return $this->formato;
    }

    /**
     * @param String $formato
     * @return PjBoleto
     */
    public function setFormato($formato)
    {
        $this->formato = $formato;
        return $this;
    }

    /**
     * @return String
     */
    public function getExibirFantasia()
    {
        return $this->exibir_fantasia;
    }

    /**
     * @param String $exibir_fantasia
     * @return PjBoleto
     */
    public function setExibirFantasia($exibir_fantasia)
    {
        $this->exibir_fantasia = $exibir_fantasia;
        return $this;
    }

    /**
     * @return String
     */
    public function getNuncaAtualizarBoleto()
    {
        return $this->nunca_atualizar_boleto;
    }

    /**
     * @param String $nunca_atualizar_boleto
     * @return PjBoleto
     */
    public function setNuncaAtualizarBoleto($nunca_atualizar_boleto)
    {
        $this->nunca_atualizar_boleto = $nunca_atualizar_boleto;
        return $this;
    }

    /**
     * @return String
     */
    public function getWebhook()
    {
        return $this->webhook;
    }

    /**
     * @param String $webhook
     * @return PjBoleto
     */
    public function setWebhook($webhook)
    {
        $this->webhook = $webhook;
        return $this;
    }

    /**
     * @return String
     */
    public function getSplit()
    {
        return $this->split;
    }

    /**
     * @param String $split
     * @return PjBoleto
     */
    public function setSplit(Split $split)
    {
        if($split instanceof Split) {
            $this->split = $split;
            return $this;
        }else{
            throw new Exception('parametro nao pertence a class Split');
        }
    }
    

}