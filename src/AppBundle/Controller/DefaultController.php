<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }


    /* A */

    /* B */

    /* C */

    /* D */
    /**
     * @Route("/boat.html", name="boat")
     */
    public function boatAction()
    {
        return $this->render('default/boat.html.twig');
    }
    /**
     * @Route("/brave.html", name="brave")
     */
    public function braveAction()
    {
        return $this->render('default/brave.html.twig');
    }

    /* E */

    /* F */

    /* G */

    /* H */

    /* I */

    /* J */

    /* K */

    /* L */

    /* M */

    /* N */

    /* O */

    /* P */

    /* Q */

    /* R */

    /* S */

    /* T */

    /* U */

    /* V */

    /* W */

    /* X */

    /* Y */

    /* Z */

}
