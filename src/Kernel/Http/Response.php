<?php

namespace CloudyCity\UCMarketingSDK\Kernel\Http;

use Doctrine\Common\Collections\ArrayCollection;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use Psr\Http\Message\ResponseInterface;
use function CloudyCity\UCMarketingSDK\Kernel\Support\csvStringToArray;

/**
 * Class Response from easywechat.
 */
class Response extends GuzzleResponse
{
    /**
     * @return string
     */
    public function getBodyContents()
    {
        $this->getBody()->rewind();
        $contents = $this->getBody()->getContents();
        $this->getBody()->rewind();

        return $contents;
    }

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     *
     * @return Response
     */
    public static function buildFromPsrResponse(ResponseInterface $response)
    {
        return new static(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody(),
            $response->getProtocolVersion(),
            $response->getReasonPhrase()
        );
    }

    /**
     * Build to json.
     *
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->toArray());
    }

    /**
     * Build to array.
     *
     * @return array
     */
    public function toArray()
    {
        $headers = $this->getHeaders();
        $content = $this->getBodyContents();

        if (!empty($headers['Content-Type']) && strpos($headers['Content-Type'][0], 'octet-stream')) {
            $content = iconv('gb2312', 'utf-8', $content);
            return csvStringToArray($content);
        }

        $array = json_decode($content, true, 512, JSON_BIGINT_AS_STRING);

        if (JSON_ERROR_NONE === json_last_error()) {
            return (array)$array;
        }

        return [];
    }

    /**
     * Get collection data.
     *
     * @return ArrayCollection
     */
    public function toCollection()
    {
        return new ArrayCollection($this->toArray());
    }

    /**
     * @return object
     */
    public function toObject()
    {
        return json_decode($this->toJson());
    }

    /**
     * @return bool|string
     */
    public function __toString()
    {
        return $this->getBodyContents();
    }
}
