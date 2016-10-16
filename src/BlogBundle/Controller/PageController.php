<?php
/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 10/15/2016
 * Time: 9:37 PM
 */

namespace BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function aboutUsAction()
    {
        return $this->render('BlogBundle:Page:about_us.html.twig');
    }
}