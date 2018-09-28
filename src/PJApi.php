<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23/09/18
 * Time: 12:58
 */

namespace Indev\PJBank;


use GuzzleHttp\Client;

class PJApi
{

    private $sandbox = 'https://sandbox.pjbank.com.br';
    private $production = 'https://api.pjbank.com.br';
    private $apikey;
    private $secret;
    private $mode;
    private $cliente;
    private $url;



    /**
     * PJBank constructor.
     * @param string $mode
     */
    public function __construct($sandbox = false, $enable_ssl = false)
    {
        $this->mode = $sandbox;
        $this->url = ($this->mode ? $this->sandbox : $this->production);


        $this->cliente = new Client([
            // Base URI is used with relative requests
            'base_uri' => $this->url,
            // You can set any number of default request options.
            'timeout' => 30,
            'verify' => $enable_ssl
        ]);
    }

    /**
     * @return string
     */
    public function getSandbox(): string
    {
        return $this->sandbox;
    }

    /**
     * @param string $sandbox
     * @return PJCliente
     */
    public function setSandbox(string $sandbox): PJCliente
    {
        $this->sandbox = $sandbox;
        return $this;
    }

    /**
     * @return string
     */
    public function getProduction(): string
    {
        return $this->production;
    }

    /**
     * @param string $production
     * @return PJCliente
     */
    public function setProduction(string $production): PJCliente
    {
        $this->production = $production;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApikey()
    {
        return $this->apikey;
    }

    /**
     * @param mixed $apikey
     * @return PJCliente
     */
    public function setApikey($apikey)
    {
        $this->apikey = $apikey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @param mixed $secret
     * @return PJCliente
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;
        return $this;
    }

    /**
     * @return bool
     */
    public function isMode(): bool
    {
        return $this->mode;
    }

    /**
     * @param bool $mode
     * @return PJCliente
     */
    public function setMode(bool $mode): PJCliente
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return Client
     */
    public function getCliente(): Client
    {
        return $this->cliente;
    }

    /**
     * @param Client $cliente
     * @return PJCliente
     */
    public function setCliente(Client $cliente): PJCliente
    {
        $this->cliente = $cliente;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return PJCliente
     */
    public function setUrl(string $url): PJCliente
    {
        $this->url = $url;
        return $this;
    }


}