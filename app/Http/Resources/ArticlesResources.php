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
            'designation' => $this->designation,
            'description' => $this->description,
            'fournisseur' => $this->fournisseur,
            'quantité' => $this->quantité,
            'prix' => $this->prix,
        ];
    }
}
