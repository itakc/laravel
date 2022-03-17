<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Etiquette extends Model
{
    use HasFactory;

    protected $table = 'etiquette';

    /**
     * le nom de la colonne de la clé primaire
     * @var string
     * 
     */
    protected $primarykey = 'id';

    /**
     * Tableau qui contient les valuers par ddefaut de certains champs
     * 
     * @var array
     */

    protected $attributes = [];

    /**
     * Cette fonction renvoi une collection contenant les plats rattachés
     * à cette etiquette
     * 
     * @return Collection
     */

    public function plats(){

        /**
         * cette fonction renvoi un tableau de plat
         * rattaché à cette etiquette
         * 
         */

    return $this ->belongsToMany(Plat::class);

}
}

