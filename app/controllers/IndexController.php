<?php
declare(strict_types=1);
namespace Linkfire\Assignment\Controllers;

use Phalcon\Mvc\Controller;


class IndexController extends Controller
{
    public function indexAction()
    {
        $songs = \Phalcon\Di::getDefault()->get('songService');

        $songs->setId(1);
        $songs->setName('Ader');
        $songs->setDuration(721);
        $songs->setStatus('A');

        $this->view->songName = $songs->getName();   
        $this->view->songDuration = $songs->getDuration();   
        $this->view->songStatus = $songs->getStatus();   
    }

}
