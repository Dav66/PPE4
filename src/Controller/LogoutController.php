<?php
namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



/**
 * Description of LoginController
 *
 * @author d.poncet
 */
class LogoutController extends AbstractController{
    /**
     * @Route("/logout", name="logout")
     */
    
    function logout (){
        return $this->redirectToRoute("home");
    }
}
