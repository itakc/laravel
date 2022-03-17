<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class plat extends Model
{
    use HasFactory;

    protected $table = 'plat';

    protected $primarykey = 'id';

    protected $attribute = [

        //valeur par defaut du champ description

        'description' => "Origine : \népicé :\n",

    ];

    /**
     * Cette fonction renvoie la categorie auquelle l
     * ce plat est rattaché
     * 
     * @return categorie 
     */

    public function categorie(){

        /**
         * 'categorie id' correspond à la colonne de la clé etrangere 
         * dans la table 'plat'
         * 'id' correspond à la colonne d ela clé primaire
         * dans la colonne 'categorie'
         */
        return $this ->belongsTo(Categorie::class);
    
    }
    
}