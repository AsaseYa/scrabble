<?php

namespace Src\Controllers;

use Src\Models\WordsModels;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class GameController extends FrontController
{
    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function addGame(): string
    {
        $cssFiles = ["settings", "navbar", "game"];
        $jsFiles = ["gameRandomLetters", "gameWords", "game", "timer"];
        $game = new WordsModels();
        $wordsGame = json_encode($game->getAllWordsCut());

        $lettersGame = json_encode($game->getGuessLetters());


        try {
            return $this->twig->render('/game.html.twig', [
                "cssFiles" => $cssFiles,
                "jsFiles" => $jsFiles,
                "wordsGame" => $wordsGame,
                "lettersGame" => $lettersGame
            ]);
        } catch (LoaderError | RuntimeError | SyntaxError $e) {
            return $e->getMessage();
        }
    }
}