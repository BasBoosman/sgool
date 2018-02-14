<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/", name="index")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function homeAction(Request $request) {
        return $this->render('detail/index.html.twig' );
    }

    /**
     * @Route("/detail/{detail}", name="detail")
     * @param $detail
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function detailAction($detail) {
        $data = [
            "foo" => "bar",
            "bar" => "foo",
        ];

        return $this->render('detail/detail1.html.twig', $data);
    }
}
