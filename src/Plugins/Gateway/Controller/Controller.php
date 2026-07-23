<?php
/**
 * ESD framework
 * @author tmtbe <896369042@qq.com>
 */

namespace Yew\Cloud\Plugins\Gateway\Controller;

class Controller extends \Yew\Framework\Controller
{
    /**
     * @param string $title
     * @param string $info
     * @param int $wait
     * @param string $url
     * @return string
     */
    private function msg(string $title = 'System Message', string $info = '', int $wait = 3, string $url = '/'): string
    {
        return sprintf(
            '<!DOCTYPE html>
        <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <meta http-equiv="Refresh" content="%d; url=%s"/>
        </head>
        <body>
            <h1>%s</h1>
            <h2>%s</h2>
        </body>
        </html>',
            $wait, $url, $title, $info
        );
    }

    /**
     * @param $data
     * @param null $url
     * @param int $wait
     * @param array $header
     * @return string
     */
    public function successResponse($data,
                                    ?string $url = null,
                                    ?int $wait = 3,
                                    ?array $header = null)
    {

        if (is_null($url) && $this->request->getServer(Request::HEADER_REFERER) != null) {
            $url = $this->request->getServer(Request::HEADER_REFERER);
        }

        if (is_array($data)) {
            if (empty($header)) {
                $this->response->withHeader('Content-type', 'application/json');
            } else {
                $this->response->withHeaders($header);
            }
            return json_encode([
                'data' => $data,
                'code' => 0
            ]);
        } else {
            if (!empty($header)) {
                $this->response->withHeaders($header);
            }
            return $this->msg('System Message', $data, $wait, $url);
        }
    }


    /**
     * @param string $msg
     * @param int $code
     * @param null $url
     * @param int $wait
     * @param array $header
     * @return false|string
     */
    public function errorResponse(string  $msg = '',
                                  int     $code = 500,
                                  ?string $url = null,
                                  ?int    $wait = 3,
                                  ?array  $header = null)
    {

        if (is_null($url) && $this->request->getServer(Request::HEADER_REFERER) != null) {
            $url = $this->request->getServer(Request::HEADER_REFERER);
        }

        if ($this->isAjax()) {
            if (empty($header)) {
                $this->response->withHeader('Content-type', 'application/json');
            } else {
                $this->response->withHeaders($header);
            }
            return json_encode([
                'code' => $code,
                'message' => $msg,
                'data' => null
            ]);
        } else {
            if (!empty($header)) {
                $this->response->withHeaders($header);
            }
            return $this->msg('错误消息', $msg, $wait, $url);
        }
    }


    /**
     * @param \Throwable $exception
     * @return false|mixed|string
     * @throws \Throwable
     */
    public function onExceptionHandle(\Throwable $exception)
    {
        if ($this->clientData->getResponse() != null) {
            $this->response->withStatus(404);
            $this->response->withHeader("Content-Type", "text/html;charset=UTF-8");
            if ($exception instanceof RouteException) {
                $msg = '404 Not found / ' . $exception->getMessage();
                return $msg;
            } else if ($exception instanceof AccessDeniedException) {
                $this->response->withStatus(401);
                $msg = '401 Access denied / ' . $exception->getMessage();
                return $msg;
            } else if ($exception instanceof ResponseException) {
                $this->response->withStatus(200);
                return $this->errorResponse($exception->getMessage(), $exception->getCode());
            } else if ($exception instanceof AlertResponseException) {
                $this->response->withStatus(500);
                return $this->errorResponse($exception->getMessage(), $exception->getCode());
            }
        }
        return parent::onExceptionHandle($exception);
    }
}