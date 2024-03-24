<?php

namespace App\Controller\Api;

use App\Entity\Recipe;
use App\Repository\RecipeRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RecipeSaveController extends AbstractFOSRestController
{
    private RecipeRepository $recipeRepository;

    public function __construct(RecipeRepository $recipeRepository)
    {
        $this->recipeRepository = $recipeRepository;
    }

    #[Rest\Post('/api/save', name: 'save_recipe', options: ['expose' => true])]
    public function saveRecipe(Request $request): Response
    {
        $data = json_decode($request->getContent(), true);
        $title = $data["title"];
        $ingredients = $data["ingredients"];
        $preparation = $data["preparation"];


        $recipe = new Recipe();
        $recipe->setTitle($title);
        $recipe->setIngredients($ingredients);
        $recipe->setPreparation($preparation);


        $this->recipeRepository->save($recipe, true);

        return $this->json(['status' => 200]);

    }


}