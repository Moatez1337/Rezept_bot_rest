<?php


namespace App\Controller\Api;

use App\Entity\Recipe;
use App\Repository\RecipeRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RecipeShowController extends AbstractFOSRestController
{
    private RecipeRepository $recipeRepository;

    public function __construct(RecipeRepository $recipeRepository)
    {
        $this->recipeRepository = $recipeRepository;
    }

    #[Rest\Get('/api/show', name: 'show_recipe', options: ['expose' => true])]
    public function showRecipe(Request $request): Response
    {
        $recipeAll = $this->recipeRepository->findAll();
        return $this->json($recipeAll, Response::HTTP_OK);
    }
}