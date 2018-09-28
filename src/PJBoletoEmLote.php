<?php
namespace Indev\PJBank;
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/09/18
 * Time: 10:53
 */

class PJBoletoEmLote extends PJBase
{

    private $cobrancas;

    /**
     * PJBoletoEmLote constructor.
     * @param $credencial
     * @param $cobrancas
     */
    public function __construct($cobrancas)
    {


        foreach ($cobrancas as $c){
            $this->cobrancas[] = $c->prepare();
        }

    }


    /**
     * @return mixed
     */
    public function getCobrancas()
    {
        return $this->cobrancas;
    }


}