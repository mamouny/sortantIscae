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
 * Class Etudiant
 * 
 * @property int $id
 * @property string $matricule
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property int $telephone
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Diplome[] $diplomes
 *
 * @package App\Models
 */
class Etudiant extends Model
{
	use SoftDeletes;
	protected $table = 'etudiants';

	protected $casts = [
		'telephone' => 'int'
	];

	protected $fillable = [
		'matricule',
		'nom',
		'prenom',
		'email',
		'telephone'
	];

	public function diplomes()
	{
		return $this->belongsToMany(Diplome::class, 'etudiants_diplomes')
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}
}
