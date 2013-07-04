<?php

namespace Belhassine\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MathController extends Controller
{
    public function additionAction(Request $request,$a,$b)
    {
        return $this->render('BelhassineHelloBundle:Math:addition.html.twig', array('a' => $a,'b' => $b,'somme' => $a+$b));
    }
    
    public function soustractionAction(Request $request,$a,$b)
    {
        return $this->render('BelhassineHelloBundle:Math:soustraction.html.twig', array('a' => $a,'b' => $b,'somme' => $a-$b));
    }
}
