<?php

namespace AppBundle\Webservice\Einsamobile\Soap;

use AppBundle\Webservice\ClientInterface;

/**
 * Class Client
 * @package AppBundle\Webservice\Einsamobile\Soap
 */
class Client implements ClientInterface
{
    /**
     * @var ClientAnnotation
     */
    private $client;

    private $normalizeArrayFields = [
        'aVal',
        'tarifdetails',
        'sonderoptionen',
    ];

    /**
     * @param string $wsdl
     * @param string $username
     * @param string $password
     * @param string $headerName
     */
    public function __construct($wsdl, $username, $password, $headerName)
    {
        $usernameToken = new Header($username, $password);

        $soapHeaders[] = new \SoapHeader(
            'http://schemas.xmlsoap.org/ws/2002/07/utility',
            $headerName,
            $usernameToken
        );

        $this->client = new \SoapClient($wsdl, [
            'trace' => 1,
            'encoding' => 'UTF-8',
            'soap_version' => SOAP_1_2,
        ]);

        $this->client->__setSoapHeaders($soapHeaders);
    }

    public function getArticles()
    {
        return $this->normalize(
            $this->client->getArticle()->artikel
        );
    }

    public function getArticleDetails($articleId)
    {
        return $this->normalize(
            $this->client->getArticleDetails([
                "artikel_id" => $articleId
            ])->eigenschaften
        );
    }

    public function getTariffs()
    {
        return $this->normalize(
            $this->client->getTariffs()->tarife
        );
    }

    public function getCombinations()
    {
        return $this->normalize(
            $this->client->getArticleTariffCombinations()->kombinationen
        );
    }

    /**
     * Normalize inconsistent external data
     *
     * @todo move this to client so its available for everybody
     * @param array $data
     * @return array $data
     */
    private function normalize($data)
    {
        if (!$data) {
            return $data;
        }

        $fields = $this->normalizeArrayFields;

        foreach ($data as $key => &$value) {
            if (is_numeric($key)) {
                $data[$key] = $this->normalize($value);
            }

            if (in_array($key, $fields, true) && is_object($value)) {
                $data->$key = [
                    $this->normalize($value)
                ];
            }

            if (is_array($data->$key) || is_object($data->$key)) {
                $data->$key = $this->normalize($value);
            }
        }

        return $data;
    }
}
