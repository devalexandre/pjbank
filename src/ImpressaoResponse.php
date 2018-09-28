<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23/09/18
 * Time: 11:58
 */

namespace Indev\PJBank;


class ImpressaoResponse
{
    private $status;
    private $linkBoleto;

    /**
     * ImpressaoResponse constructor.
     * @param $status
     * @param $linkBoleto
     */
    public function __construct($status, $linkBoleto)
    {
        $this->status = $status;
        $this->linkBoleto = $linkBoleto;
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
    public function getLinkBoleto()
    {
        return $this->linkBoleto;
    }


}