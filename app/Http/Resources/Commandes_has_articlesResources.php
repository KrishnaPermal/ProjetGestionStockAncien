<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Commandes_has_articlesResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id_article' => $this->id_article,
            'id_commandes' => $this->id_commandes,
            'quantite' => $this->quantite,
        ];
    }
}
