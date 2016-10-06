<?php

namespace Containment\Exceptions;

use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as BaseHandler;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Handler extends BaseHandler
{
    /**
     * @var array
     */
    protected $dontReport = [
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * @inheritdoc
     *
     * @param Exception $exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * @inheritdoc
     *
     * @param Request $request
     * @param Exception $exception
     *
     * @return Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }
}
