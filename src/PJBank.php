<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22/09/18
 * Time: 20:14
 */

namespace Indev\PJBank;



use GuzzleHttp\Exception\ClientException;

class PJBank extends PJApi
{





    /**
     * @param array
     * vencimento string
     * valor decimal
     * juros decimal
     * multa decimal
     * desconto decimal
     * nome_cliente string
     * cpf_cliente string
     * endereco_cliente string
     * numero_cliente string
     * complemento_cliente string
     * bairro_cliente string
     * cidade_cliente string
     * estado_cliente string
     * cep_cliente string
     * logo_url string
     * texto text
     * grupo string
     * split array(nome,cnpj,banco_repasse,agencia_repasse,conta_repasse,valor_fixo)
     */
    public function emitirBoletoSplit($array)
    {


        try {

            $url_api = "/recebimentos/{$this->getApikey()}/transacoes";

            $response = $this->getCliente()->post( $url_api, ["json" => $array, 'headers' => [
                'Content-Type' => 'Application/json',
                'X-CHAVE' => $this->getSecret()
            ]]);


            $data = json_decode($response->getBody());
            return new PjBoletoResponse($data->status, $data->msg, $data->nossonumero,
                $data->id_unico, $data->banco_numero, $data->token_facilitador, $data->credencial
                , $data->linkBoleto, $data->linkGrupo, $data->linhaDigitavel, $data->pedido_numero);

        } catch (ClientException $e) {

            $responseBody = json_decode($e->getResponse()->getBody());
            throw new \Exception($responseBody->msg, $responseBody->status);

        }

    }

    public function checkCredencial()
    {

        $url_api = "/recebimentos/{$this->getApikey()}";
        $response = $this->getCliente()->get($url_api,['headers' => ['X-CHAVE' => $this->getSecret()]]);

        return $response;

    }

    /**
     * @param $array PjBoleto
     * @return array|mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function emitirBoletoEmLoteSplit($array)
    {
        try {

            $url_api = "/recebimentos/{$this->getApikey()}/transacoes";

            $response = $this->getCliente()->post( $url_api, ["json" => $array, 'headers' => [
                'Content-Type' => 'Application/json',
                'X-CHAVE' => $this->getSecret()
            ]]);


            $dados = json_decode($response->getBody());

            $response = [];
            foreach ($dados as $data) {
                $response[] = new PjBoletoResponse($data->status, $data->msg, $data->nossonumero,
                    $data->id_unico, $data->banco_numero, $data->token_facilitador, $data->credencial
                    , $data->linkBoleto, $data->linkGrupo, $data->linhaDigitavel, $data->pedido_numero);
            }

            return $response;


        } catch (ClientException $e) {

            $responseBody = json_decode($e->getResponse()->getBody());
            throw new \Exception($responseBody->msg, $responseBody->status);

        }

    }

    /**
     * @param array id boletos
     */
    public function impressaoEmLote(Array $array)
    {
        try {
            $url_api = "/recebimentos/{$this->getApikey()}/transacoes/lotes";

            $response = $this->getCliente()->post( $url_api, ["json" => $array, 'headers' => [
                'Content-Type' => 'Application/json',
                'X-CHAVE' => $this->getSecret()
            ]]);

            $data = json_decode($response->getBody());

            return new ImpressaoResponse($response->getStatusCode(),$data->linkBoleto);

        } catch (ClientException $e) {

            $responseBody = json_decode($e->getResponse()->getBody());
            throw new \Exception($responseBody->msg, $responseBody->status);

        }
    }

    /**
     * @param $numero
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \Exception
     */
    public function canselarBoleto($numero)
    {

        try{
            $url_api =  "/recebimentos/{$this->getApikey()}/transacoes/$numero";

                $response = $this->getCliente()->delete($url_api, ['headers' => [
                    'Content-Type' => 'Application/json',
                    'X-CHAVE' => $this->getSecret()
                ]]);

            return $response;

        }catch (ClientException $e) {

            $responseBody = json_decode($e->getResponse()->getBody());
            throw new \Exception($responseBody->msg, $responseBody->status);

        }
    }



}