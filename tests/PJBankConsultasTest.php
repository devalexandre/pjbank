<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23/09/18
 * Time: 12:54
 */

namespace Indev\PJBankTests;

use Indev\PJBank\PJConsultas;
use PHPUnit\Framework\TestCase;
use Indev\PJBank\PJBank;

class PJBankConsultasTest extends TestCase
{

    public function testVerificaCredencial()
    {

        $pjbank = new PJConsultas(false,false);
        $pjbank->setApikey('20a0cf961a7539fcb7e389973e55f6e64fc3e230');
        $pjbank->setSecret("15de9f3676c46ae29d8fc878de9aebe255b1b19c");


        $response = $pjbank->checkCredencials();


        $this->assertEquals(200,$response->getStatusCode());
    }

    public function testExtratoDeRecebimentosPorBoleto()
    {
        $pjbank = new PJConsultas(false,false);
        $pjbank->setApikey('20a0cf961a7539fcb7e389973e55f6e64fc3e230');
        $pjbank->setSecret("15de9f3676c46ae29d8fc878de9aebe255b1b19c");


        $response = $pjbank->getExtratoDeRecebimentosPorBoleto('01/09/2018','23/09/2018');

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testExtratoDeBoletoPorIdentificador()
    {
        $pjbank = new PJConsultas(true,false);
        $pjbank->setApikey('20a0cf961a7539fcb7e389973e55f6e64fc3e230');
        $pjbank->setSecret("15de9f3676c46ae29d8fc878de9aebe255b1b19c");


        $response = $pjbank->getExtratoDeBoletoPorIdentificador(7724);

        $this->assertEquals(200, $response->getStatusCode());
    }
}