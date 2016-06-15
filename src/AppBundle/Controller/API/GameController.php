<?php
namespace AppBundle\Controller\API;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Game;

class GameController extends Controller {
    /**
     * @Route("/games/new", name="newGame")
     * @Method({"POST"})
     */
    public function newGame(Request $request) {
        $week = $request->request->get("week");
        $day = $request->request->get("day");
        $oTeamName = $request->request->get("oTeamName");

        $gameRepo = $this->getDoctrine()->getRepository("AppBundle:Game");

        $game = $gameRepo->findBy([
            "week" => $week,
            "day" => $day,
            "oTeamName" => $oTeamName
        ]);

        if (empty($game)) {
            $results = array(
                'result' => 'error',
                'message' => 'Unable to create game',
                'object' => []
            );

            return new JsonResponse($results);
        } else if (count($game) > 1) {
            $results = array(
                'result' => 'error',
                'message' => "There is already a game on the same week/day against the same team",
                'object' => []
            );

            return new JsonResponse($results);
        }
        
        $newGame = new Game($week, $day, $oTeamName);

        // Get entity manager
        $em = $this->get('doctrine.orm.entity_manager');

        $em->persist($newGame);
        $em->flush();

        $game = $gameRepo->findBy([
            "week" => $week,
            "day" => $day,
            "oTeamName" => $oTeamName
        ]);

        return $this->redirect('/games/' . $game[0]->getId());
    }
}