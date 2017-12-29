<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        //$comps = $em->getRepository('AppBundle:Pc')->findAllByPriceLow(500);

        // Через DQL
        //$comps = $em->getRepository('AppBundle:Pc')->findAllByPriceLow(500);

        // Получить sql запрос!
        //$comps = $em->getRepository('AppBundle:Pc')->findVarDump();




        dump($comps);
        die;
    }
}
