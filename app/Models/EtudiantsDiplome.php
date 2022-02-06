<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EtudiantsDiplome
 * 
 * @property int $id
 * @property int $etudiant_id
 * @property int $diplome_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Etudiant $etudiant
 * @property Diplome $diplome
 *
 * @package App\Models
 */
class EtudiantsDiplome extends Model
{
	use SoftDeletes;
	protected $table = 'etudiants_diplomes';

	protected $casts = [
		'etudiant_id' => 'int',
		'diplome_id' => 'int'
	];

	protected $fillable = [
		'etudiant_id',
		'diplome_id'
	];

	public function etudiant()
	{
		return $this->belongsTo(Etudiant::class);
	}

	public function diplome()
	{
		return $this->belongsTo(Diplome::class);
	}
}
