<?php

namespace A27Bundle\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    /**
     * @Route("/")
     * @param Request $request
     * @return mixed
     */
    public function indexAction(Request $request)
    {
        /** @var Connection $conn */
        $conn = $this->get('database_connection');
        //$tests = $conn->fetchAll('SELECT * FROM test');
        return $this->render('A27Bundle:Test:index.html.twig', array(
            //'tests' => $tests
        ));
    }

}
