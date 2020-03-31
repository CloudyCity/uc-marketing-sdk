<?php

namespace CloudyCity\UCMarketingSDK\Kernel;

use CloudyCity\UCMarketingSDK\Kernel\Exceptions\ApiException;
use CloudyCity\UCMarketingSDK\Kernel\Exceptions\DownloadFileException;
use CloudyCity\UCMarketingSDK\Kernel\Traits\HasHttpRequests;
use CloudyCity\UCMarketingSDK\Kernel\Traits\HasSdkBaseInfo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Client.
 */
class BaseClient
{
    use HasHttpRequests, HasSdkBaseInfo {
        request as performRequest;
        HasHttpRequests::getResponseType insteadof HasSdkBaseInfo;
        HasHttpRequests::setResponseType insteadof HasSdkBaseInfo;
    }

    /**
     * @var string
     */
    protected $baseUri = 'https://e.uc.cn/api/';

    /**
     * Client constructor.
     *
     * @param string $username
     * @param string $password
     * @param string $token
     * @param string $responseType
     */
    public function __construct($username, $password, $token, $responseType = 'array')
    {
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setToken($token);
        $this->setResponseType($responseType);
    }

    /**
     * Sending json.
     *
     * @param string $url
     * @param array  $data
     * @param array  $query
     *
     * @throws Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws ApiException
     *
     * @return \Psr\Http\Message\ResponseInterface|\Doctrine\Common\Collections\ArrayCollection|array|object|string
     */
    public function httpPostJson($url, array $data = [], array $query = [])
    {
        return $this->request($url, 'POST', ['query' => $query, 'json' => $data]);
    }

    /**
     * Sending form files.
     *
     * @see http://docs.guzzlephp.org/en/stable/quickstart.html#sending-form-files
     *
     * @param $url
     * @param array $files
     *
     * @throws ApiException
     * @throws Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|ArrayCollection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function httpPostFile($url, array $files)
    {
        return $this->request($url, 'POST', ['multipart' => $files]);
    }

    /**
     * Sending request.
     *
     * @param string $url
     * @param string $method
     * @param array  $options
     *
     * @throws Exceptions\InvalidArgumentException
     * @throws Exceptions\ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return \Psr\Http\Message\ResponseInterface|\Doctrine\Common\Collections\ArrayCollection|array|object|string
     */
    public function request($url, $method = 'POST', array $options = [])
    {
        $options = $this->appendToken($options);

        $response = $this->performRequest($url, $method, $options);

        $result = $this->castResponseToType($response);
        $formatted = $this->castResponseToType($response, $this->getResponseType());

        if ($this->isDownloadFile($url)) {
            if (!$formatted) {
                throw new DownloadFileException('', $response, $formatted, 0);
            }
        } else {
            if ((!isset($result['header']['status']) || $result['header']['status'] != 0)) {
                $message = isset($result['message']) ? $result['message'] : '';
                $code = isset($result['code']) ? $result['code'] : 0;

                throw new ApiException($message, $response, $formatted, $code);
            }
        }

        return $formatted;
    }

    /**
     * Attache token to request.
     *
     * @param array $options
     *
     * @return array
     */
    protected function appendToken(array $options)
    {
        $authorization = $this->getAuthorization();

        if (!empty($options['multipart'])) {
            $options['multipart']['header'] = json_encode($authorization);
        } else {
            if (empty($options['json'])) {
                $options['json']['header'] = $authorization;
            } else {
                $options['json'] = [
                    'header' => $authorization,
                    'body'   => $options['json'],
                ];
            }
        }

        return $options;
    }

    /**
     * @param $url
     *
     * @return bool
     */
    protected function isDownloadFile($url)
    {
        return $url == 'report/downloadFile';
    }
}
