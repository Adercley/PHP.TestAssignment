<?php
declare(strict_types=1);
namespace Linkfire\Assignment\Controllers;

use Phalcon\Mvc\Controller;


class SongsController extends Controller
{
    public function indexAction()
    {
        echo 'try /showSongs instead ;)';
    }

    /**
     * Adding song
     */
    public function showAction()
    {
        // ****************************************** TASK 2: Call the service function from controller and output the model as JSON *****

        // ****************************************** TASK 4: Get service from DI container in controller instead of doing new Service() *****
        $songs = \Phalcon\Di::getDefault()->get('songService');

        $songs->setId(1);
        $songs->setName('Ader');
        $songs->setDuration(721);
        $songs->setStatus('A');

        $song = [];
        $song['id'] = $songs->getId();
        $song['name'] = $songs->getName();
        $song['duration'] = $songs->getDuration();
        $song['status'] = $songs->getStatus();

        echo json_encode( $song );       
    }

    /**
     * Adding song
     */
    public function addAction()
    {
       
    }

    /**
     * Returns user list
     *
     * @return array
     */
    public function getSongsListAction()
    {
       
    }

     /**
     * Updating existing user
     *
     * @param string $userId
     */
    public function updateSongAction($songId)
    {
       
    }

    /**
     * Delete an existing user
     *
     * @param string $userId
     */
    public function deleteSongAction($songId)
    {
       
    }
}
