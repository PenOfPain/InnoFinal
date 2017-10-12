<?php
/**
 * Created by PhpStorm.
 * User: aurel
 * Date: 09/10/2017
 * Time: 06:18
 */

namespace ReviewBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class OtherController extends Controller
{
    /**
     * @Route("/Other", name="Other")
     */
    public function indexAction()
    {
        return $this->render('ReviewBundle:Category:Other.html.twig');
    }
}