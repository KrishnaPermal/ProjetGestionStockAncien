<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommandesFAResources extends JsonResource
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
            'id_commandes_fournisseurs' => $this->id_commandes_fournisseurs,
            'id_article' => $this->id_article,
            'quantite' => $this->quantite,
        ];
    }
}
