<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $table = 'categorie';

    /**
     * le nom de la colonne de la clé primaire
     * @var string
     * 
     */
    protected $primarykey = 'id';

    /**
     * Tableau qui contient les valeurs par defaut de certains champs
     * 
     * @var array
     */

    protected $attributes = [];

    /**
     * Cette fonction renvoi une collection contenant les plats rattachés
     * à cette categorie
     * 
     * @return ?
     */

    public function plats(){

        /**
         * 'categorie _id' correspond à la colonne de la 
         * clé etrangère dans la table 'plat'
         * 'id' correspond à la colonne de la clé primaire
         * dans la table 'categorie' 
         * 
         */

    return $this ->hasMany(Plat::class,  'categorie_id', 'id');

}
}