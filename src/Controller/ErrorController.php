<?php

namespace App\Controller;

use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Log\DebugLoggerInterface;

class ErrorController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    public function show (FlattenException $exception, DebugLoggerInterface $logger = null): Response {
        return $this->render('bundles/TwigBundle/Exception/error.html.custom.twig', [
            "code" => $exception->getStatusCode(),
            "message" =>$exception->getStatusText()
        ]);
    }
}