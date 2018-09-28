<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22/09/18
 * Time: 11:54
 */
namespace Indev\PJBankTests;



use Indev\PJBank\Impressao;
use Indev\PJBank\PJBoletoReturn;
use PHPUnit\Framework\TestCase;
use Indev\PJBank\PJBank;
use Indev\PJBank\PjBoleto;
use Indev\PJBank\PJBoletoEmLote;
use Indev\PJBank\PJSplit as Split;



class PJBankTest extends TestCase
{
    private $numero = array();

    public function testCredencial(){
        $pjbank = new PJBank(false,false);
        $pjbank->setApikey('d3418668b85cea70aa28965eafaf927cd34d004c');
        $pjbank->setSecret("46e79d6d5161336afa7b98f01236efacf5d0f24b");



        $response = $pjbank->checkCredencial();

        echo $response->getBody();
        $this->assertEquals(200,$response->getStatusCode());
    }
    public function testEmitirBoleto(){

        $split = new Split("Fornecedor Exemplo", "10488175000143",  "001",
            "0001", "99999-9", "300");

        $boleto = new PjBoleto(
            "12/30/2019",
            "5000",
            "0",
            "0",
            "",
            "Cliente de Exemplo",
            "62936576000112",
            "Rua Joaquim Vilac",
            "509",
            "",
            "Vila Teixeira",
            "SP",
            "Clientes",
            "13301510",
            rand(100,9999),
            "DS",
            "Exemplo de emissão de boleto",
            "https://www.indev.net.br/themes/company-developer/assets/images/logo.png",
            "",
            "",
            "",
            "",
            $split
        );


        $pjbank = new PJBank(true,false);
        $pjbank->setApikey('d3418668b85cea70aa28965eafaf927cd34d004c');
        $pjbank->setSecret("46e79d6d5161336afa7b98f01236efacf5d0f24b");
        $emitido =   $pjbank->emitirBoletoSplit($boleto->prepare());

        echo $emitido->getPedidoNumero();

        $this->assertEquals(201,$emitido->getStatus());
    }

    public function testEmitirBoletoEmLoteSplit(){

        $split = new Split("Fornecedor Exemplo", "10488175000143",  "001",
            "0001", "99999-9", "300");

        $boleto1 = new PjBoleto(
            "12/30/2019",
            "5000",
            "0",
            "0",
            "",
            "Cliente de Exemplo",
            "62936576000112",
            "Rua Joaquim Vilac",
            "509",
            "",
            "Vila Teixeira",
            "SP",
            "Clientes",
            "13301510",
            rand(100,9999),
            "DS",
            "Exemplo de emissão de boleto",
            "https://www.indev.net.br/themes/company-developer/assets/images/logo.png",
            "",
            "",
            "",
            "",
            $split
        );

        $boleto2 = new PjBoleto(
            "12/30/2019",
            "5000",
            "0",
            "0",
            "",
            "Cliente de Exemplo",
            "62936576000112",
            "Rua Joaquim Vilac",
            "509",
            "",
            "Vila Teixeira",
            "SP",
            "Clientes",
            "13301510",
            rand(100,9999),
            "DS",
            "Exemplo de emissão de boleto",
            "https://www.indev.net.br/themes/company-developer/assets/images/logo.png",
            "",
            "",
            "",
            "",
            $split
        );


        $pjbank = new PJBank(false,false);
        $pjbank->setApikey('d3418668b85cea70aa28965eafaf927cd34d004c');
        $pjbank->setSecret("46e79d6d5161336afa7b98f01236efacf5d0f24b");

        $boletos = new PJBoletoEmLote(array($boleto1,$boleto2));

        $emitido =   $pjbank->emitirBoletoEmLoteSplit($boletos->prepare());

       $this->numero[] =  $emitido[0]->getPedidoNumero();
       $this->numero[] =  $emitido[1]->getPedidoNumero();

       var_dump($this->numero);

        $this->assertInternalType('array',$emitido);
    }

    public function testImpressaoEmLote(){
        $pjbank = new PJBank(false,false);
        $pjbank->setApikey('d3418668b85cea70aa28965eafaf927cd34d004c');
        $pjbank->setSecret("46e79d6d5161336afa7b98f01236efacf5d0f24b");

        $imprimir = new Impressao('carne');
        $imprimir->setPedidoNumero(array(8733,8913));


        $emitido = $pjbank->impressaoEmLote($imprimir->prepare());

        $this->assertEquals(200,$emitido->getStatus());
    }

    public function testCanselarBoleto(){
        $pjbank = new PJBank(false,false);
        $pjbank->setApikey('d3418668b85cea70aa28965eafaf927cd34d004c');
        $pjbank->setSecret("46e79d6d5161336afa7b98f01236efacf5d0f24b");


            $canselar1 = $pjbank->canselarBoleto(8733);
            $canselar2 = $pjbank->canselarBoleto(8913);

        $this->assertEquals(200,$canselar1->getStatusCode());
            $this->assertEquals(200,$canselar2->getStatusCode());


    }

    public function testReturnBoleto(){
        $return = '
        {
            "operacao":"PUT",
            "tipo":"recebimento_boleto",
            "valor": "100",
            "valor_pago": "100",
            "valor_liquido": "97.5",
            "valor_tarifa": "2.5",
            "nosso_numero":"102030",
            "nosso_numero_original":"",
            "id_unico":"102031",
            "id_unico_original":"102030",
            "banco_numero":"033",
            "token_facilitador":"78f0dce295bf8c4fa26bf5de3daefd1d659fe381",
            "data_vencimento":"12/30/2019",
            "data_pagamento":"04/15/2018",
            "data_credito":"04/16/2018",
            "credencial":"e490e77a794a662711309355df873866a5fbe46d",
            "chave":"6ca9c48dc91dfc740ec1b13f85dda60652cf682d",
            "registro_sistema_bancario": "confirmado"
        }
        ';

        $response = new PJBoletoReturn($return);

        $this->assertEquals('6ca9c48dc91dfc740ec1b13f85dda60652cf682d',$response->getChave());
    }


}

