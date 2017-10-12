<?php
/**
 * Created by PhpStorm.
 * User: aurel
 * Date: 09/10/2017
 * Time: 05:33
 */

namespace ReviewBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DroneController extends Controller
{

    /**
     * @Route("/admin")
     */
     public function adminAction()
         {
             return new Response('<html><body>Admin page!</body></html>');
         }

}
