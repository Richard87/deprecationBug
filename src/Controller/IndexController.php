<?php
namespace App\Controller;

use APY\BreadcrumbTrailBundle\Annotation\Breadcrumb;
use Symfony\Component\HttpFoundation\Response;

class IndexController
{
    /**
     * @Breadcrumb("HelloWorld")
     */
    public function indexAction(): Response {
        return new Response("Hello world!");
    }
}