<?php

namespace ReviewBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ReviewBundle\Repository\CategoriesRepository;
class DefaultController extends Controller
{
    /**
     * @Route("/menu", name="menu")
     */
    public function indexAction()
    {
        $categoriesRepository = new CategoriesRepository;
        $categories = $categoriesRepository->findAllCategories();

        return $this->render('ReviewBundle:Category:categoryList.html.twig', [
            'categories' => $categories,
        ]);
    }




    public function testAction()
    {
        return $this->render('ReviewBundle:Category:categoryList.html.twig');
    }
    /**
     * @Route("/")
     */
}
