<?php

namespace App\Controller;

use App\Repository\QuestionRepository;
use App\Repository\ThemeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class QuestionsController extends AbstractController
{
    #[Route('/api/{theme}/{nombreQuestions}', name: 'app_api_theme_questions')]
    public function questionsParThemes(QuestionRepository $repository, ThemeRepository $themeRepository, SerializerInterface $serializer, $theme, $nombreQuestions ): Response
    {
        $themeobj = $themeRepository->findOneBy(["intitule"=>$theme]);
        $questions = $repository->findBy(["theme"=>$themeobj]);
        shuffle($questions);
        $tableauQuestions = array_slice($questions,0,$nombreQuestions);
        $response = new Response();
        if (count($tableauQuestions) < $nombreQuestions || count($tableauQuestions) > $nombreQuestions ) {
            $returnJson = $serializer->serialize("Nombre de questions invalide","json");
            $response->setStatusCode(Response::HTTP_BAD_REQUEST);
        } elseif ($themeobj == null) {
            $returnJson = $serializer->serialize("Theme invalide","json");
            $response->setStatusCode(Response::HTTP_BAD_REQUEST);
        } elseif ($nombreQuestions == 0) {
            $returnJson = $serializer->serialize("Veuillez choisir un nombre au dessus de 0","json");
            $response->setStatusCode(Response::HTTP_BAD_REQUEST);
        } else {
            $returnJson = $serializer->serialize($tableauQuestions,"json",["groups"=>["theme","questions"]]);
            $response->setStatusCode(Response::HTTP_OK);
        }


        $response->headers->set("content-type","application/json");
        $response->setContent($returnJson);
        return $response;
    }
}
