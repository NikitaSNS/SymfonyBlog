<?php
/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 10/16/2016
 * Time: 7:01 PM
 */

namespace BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    public function indexAction()
    {
        return new Response('admin');
    }

    public function blogAction()
    {
        return new Response('stab');
    }

    public function blogEditAction($id)
    {
        return new Response($id);
    }
}