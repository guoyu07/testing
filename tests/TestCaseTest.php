<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */


use FastD\Http\Response;
use FastD\Testing\TestCase;


class TestCaseTest extends PHPUnit_Framework_TestCase
{
    public function testTestCaseFakeData()
    {
        $testing = new TestCase();

        $serverRequest = $testing->request('GET', '/');

        $this->assertEquals('/', $serverRequest->getUri()->getPath());
    }

    public function testTestCaseHandleResponse()
    {
        $testing = new TestCase();

        $testing->response(new Response('hello world'), 'hello world');
    }
}
