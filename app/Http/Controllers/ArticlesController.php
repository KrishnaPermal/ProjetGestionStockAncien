<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Http\Resources\ArticlesResources;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ActivitiesController extends Controller
{
    /**
     *  Affichage des Articles
     * @param null
     * @return retourne 
     */
    function index()
    {
        $data = Articles::all();
        return ArticlesResources::collection($data);
    }

    /**
     * Ajouter un article
     * @param null
     * @return retourne 
     */
    function add(Request $request)
    {
        //Validation des données
        $data = Validator::make(
            $request->input(),
            [
                "ref_article" => "required",
                "designation" => "required",
                "description" => "required",
                "fournisseur" => "required",
                "quantite" => "required",
                "prix" => "required",
            ],
            [
                'required' => 'Le champ :attribute est requis'
            ]
        )->validate();

        //Ajout en bdd des données validées
        $addArticle = Articles::create($data);
        return new ArticlesResources($addArticle);
    }

    /**
     * Supprimer un article
     * @param $id
     * @return retourne 
     */
    function delete($id)
    {
        $data = Articles::destroy($id) ? " L'Article à bien été supprimée" : "Erreur dans la suppression de l'article";
        return json_encode(["status" => $data]);
    }
    /**
     * Editer un article
     * @param $id
     * @return retourne 
     */
    function update(Request $request, $id)
    {
        $dataEdit = Validator::make(
            $request->input(),
            [
                "ref_article" => "required",
                "designation" => "required",
                "description" => "required",
                "fournisseur" => "required",
                "quantite" => "required",
                "prix" => "required",
            ],
            [
                'required' => 'Le champ :attribute est requis'
            ]
        )->validate();

        $data = Articles::where('id', '=', $id)
            ->first();

        $data->ref_article = $dataEdit['ref_article'];
        $data->designation = $dataEdit['designation'];
        $data->description = $dataEdit['description'];
        $data->fournisseur = $dataEdit['fournisseur'];
        $data->quantite = $dataEdit['quantite'];
        $data->prix = $dataEdit['prix'];
        $data->save();

        return new ArticlesResources($data);
    }
}
