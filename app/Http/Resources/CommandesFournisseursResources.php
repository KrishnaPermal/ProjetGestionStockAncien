<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommandesFournisseursResources extends JsonResource
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
            'numero_commande' => $this->numero_commande,
            'date' => $this->date,
            'quantite' => $this->quantite,
            'id_fournisseur' => $this->id_fournisseur,
        ];
    }
}
