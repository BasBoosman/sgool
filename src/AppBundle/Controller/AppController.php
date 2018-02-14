<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AppController extends Controller {
    /**
     * @Route("/", name="index")
     */
    public function homeAction(Request $request) {
        return $this->render('detail/index.html.twig' );
    }

    /**
     * @Route("/detail", name="detail")
     */
    public function detailAction(Request $request) {
        $data = array(
            "foo" => "bar",
            "bar" => "foo",
        );

        return $this->render('detail/detail1.html.twig', $data);
    }
}
