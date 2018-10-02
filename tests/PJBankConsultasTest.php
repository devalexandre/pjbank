<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23/09/18
 * Time: 12:54
 */

namespace Indev\PJBankTests;

use Indev\PJBank\PJBoletoReturn;
use Indev\PJBank\PJConsultas;
use PHPUnit\Framework\TestCase;
use Indev\PJBank\PJBank;

class PJBankConsultasTest extends TestCase
{

    public function testVerificaCredencial()
    {

        $pjbank = new PJConsultas(false,false);
        $pjbank->setApikey('d3418668b85cea70aa28965eafaf927cd34d004c');
        $pjbank->setSecret("46e79d6d5161336afa7b98f01236efacf5d0f24b");




        $response = $pjbank->checkCredencials();

        echo $response->getBody();

        $this->assertEquals(200,$response->getStatusCode());
    }

    public function testExtratoDeRecebimentosPorBoleto()
    {
        $pjbank = new PJConsultas(false,false);
        $pjbank->setApikey('d3418668b85cea70aa28965eafaf927cd34d004c');
        $pjbank->setSecret("46e79d6d5161336afa7b98f01236efacf5d0f24b");



        $response = $pjbank->getExtratoDeRecebimentosPorBoleto('01/09/2018','01/10/2018');

        echo $response->getBody();

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testExtratoDeBoletoPorIdentificador()
    {
        $pjbank = new PJConsultas(false,false);
        $pjbank->setApikey('d3418668b85cea70aa28965eafaf927cd34d004c');
        $pjbank->setSecret("46e79d6d5161336afa7b98f01236efacf5d0f24b");


        $response = $pjbank->getExtratoDeBoletoPorIdentificador(33392351);

     //  $data = new PJBoletoReturn($response);


        $this->assertEquals(200, $response->getStatusCode());
    }
}