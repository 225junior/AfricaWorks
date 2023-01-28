<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'email',
        'objet',
        'message'
    ];


    /**
     * Contraintes sur les champs du formulaire
     */
    public static $storeRules = [
        'nom' => 'required|min:2|max:100|string',
        'email' => 'required|min:5|string',
        'objet' => 'required|min:5|string',
        'message' => 'required|min:5|string',
    ];
}
