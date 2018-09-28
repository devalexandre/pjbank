<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23/09/18
 * Time: 13:14
 */

namespace Indev\PJBank;


class PJConsultas extends PJApi
{

    public function checkCredencials()
    {

        try {
            $url_api = "/recebimentos/{$this->getApikey()}";
            $response = $this->getCliente()->get($url_api, ['headers' => ['X-CHAVE' => $this->getSecret()]]);

            return $response;
        } catch (ClientException $e) {

            $responseBody = json_decode($e->getResponse()->getBody());
            throw new \Exception($responseBody->msg, $responseBody->status);

        }
    }

    public function getExtratoDeRecebimentosPorBoleto($data_inicio, $data_fim, $page = 1)
    {

        try {
            $data_inicio = $this->normalizaData($data_inicio);
            $data_fim = $this->normalizaData($data_fim);


            $url_api = "/recebimentos/{$this->getApikey()}/transacoes?data_inicio=$data_inicio&data_fim=$data_fim&pago=0&pagina=$page";

            $response = $this->getCliente()->get($url_api, ['headers' => ['X-CHAVE' => $this->getSecret()]]);

            return $response;

        } catch (ClientException $e) {

            $responseBody = json_decode($e->getResponse()->getBody());
            throw new \Exception($responseBody->msg, $responseBody->status);

        }
    }

    public function getExtratoDeBoletoPorIdentificador($id_unico)
    {

        try {

            $url_api = "recebimentos/{$this->getApikey()}/transacoes/$id_unico";
            $response = $this->getCliente()->get($url_api, ['headers' => ['X-CHAVE' => $this->getSecret()]]);

            return $response;

        } catch (ClientException $e) {

            $responseBody = json_decode($e->getResponse()->getBody());
            throw new \Exception($responseBody->msg, $responseBody->status);

        }
    }


    public function normalizaData($data)
    {
        $data = explode('/', $data);
        return "$data[1]/$data[0]/$data[2]";
    }

}