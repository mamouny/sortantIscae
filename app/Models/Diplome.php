<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Diplome
 * 
 * @property int $id
 * @property string $intitulé
 * @property string $reference
 * @property string $nometablissement
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Etudiant[] $etudiants
 *
 * @package App\Models
 */
class Diplome extends Model
{
	use SoftDeletes;
	protected $table = 'diplomes';

	protected $fillable = [
		'intitulé',
		'reference',
		'nometablissement'
	];

	public function etudiants()
	{
		return $this->belongsToMany(Etudiant::class, 'etudiants_diplomes')
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}
}
