<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */

namespace FastD\Testing;


use FastD\Http\ServerRequest;
use PHPUnit_Framework_TestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * Class TestCase
 * @package FastD\Testing
 */
class TestCase extends PHPUnit_Framework_TestCase
{
    /**
     * @param $method
     * @param $path
     * @param array $headers
     * @return ServerRequest
     */
    public function request($method, $path, array $headers = [])
    {
        $serverRequest = new ServerRequest($method, $path, $headers);

        return $serverRequest;
    }

    /**
     * @param ResponseInterface $response
     * @param $assert
     */
    public function response(ResponseInterface $response, $assert)
    {
        $this->assertEquals((string) $response->getBody(), $assert);
    }

    /**
     * @param ResponseInterface $response
     * @param $statusCode
     */
    public function status(ResponseInterface $response, $statusCode)
    {
        $this->assertEquals($response->getStatusCode(), $statusCode);
    }

    /**
     * @return \Faker\Generator
     */
    public function createFake()
    {
        return fake();
    }
}