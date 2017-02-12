<?php

namespace A27Bundle\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    /**
     * @Route("/test")
     * @param Request $request
     * @return mixed
     */
    public function indexAction(Request $request)
    {
        /** @var Connection $conn */
        $conn = $this->get('database_connection');
        die(var_dump($conn->getSchemaManager()));
        //$users = $conn->fetchAll('SELECT * FROM test');
        //die(var_dump($conn));
        return $this->render('A27Bundle:Test:index.html.twig', array(
            // ...
        ));
    }

}
