<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23/09/18
 * Time: 11:37
 */

namespace Indev\PJBank;


class Impressao extends PJBase
{
    private $formato;
    private $pedido_numero = array();

    /**
     * Impressao constructor.
     * @param $formato
     */
    public function __construct($formato = null)
    {
        $this->formato = $formato;
    }

    /**
     * @return null
     */
    public function getFormato()
    {
        return $this->formato;
    }

    /**
     * @param null $formato
     * @return Impressao
     */
    public function setFormato($formato)
    {
        $this->formato = $formato;
        return $this;
    }

    /**
     * @return array
     */
    public function getPedidoNumero(): array
    {
        return $this->pedido_numero;
    }

    /**
     * @param array $pedido_numero
     * @return Impressao
     */
    public function setPedidoNumero(array $pedido_numero): Impressao
    {
        $this->pedido_numero = $pedido_numero;
        return $this;
    }





}