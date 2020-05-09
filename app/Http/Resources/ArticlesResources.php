<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticlesResources extends JsonResource
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
            'id' => $this->id,
            'réf_articles' => $this->réf_articles,
            'marque' => $this->marque,
            'description' => $this->description,
            'fournisseur' => $this->fournisseur,
            'quantite' => $this->quantite,
            'prix' => $this->prix,
            'image' => $this->image,
        ];
    }
}
