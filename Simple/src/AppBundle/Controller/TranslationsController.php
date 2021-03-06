<?php
/**
 * Created by PhpStorm.
 * User: adrian.ispas
 * Date: 7/15/2016
 * Time: 3:23 PM
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TranslationsController extends Controller
{
    /**
     * @Route("/translate")
     * @param $text
     * @return Response
     */
    public function indexAction()
    {
        $start = time();
        $translated = $this->get('translator')->trans('Symfony is great');
        $end = time();
        return new Response("Translate in " . ($end - $start) . "s " . $translated);
    }
}