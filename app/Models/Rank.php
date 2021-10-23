<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    use HasFactory;

    protected $id;
	protected $captain;
	protected $chief_mate;
	protected $second_mate;
	protected $third_mate;
    protected $deck_cadet;
	protected $chief_engineer;
	protected $second_engineer;
    protected $third_engineer;
	protected $fourth_engineer;
	protected $engine_cadet;
	protected $electrician;
	protected $boatswain;
	protected $pump_man;
	protected $able_bodied_seaman;
	protected $ordinary_seaman;
	protected $fitter;
	protected $oiler;
	protected $wiper;
	protected $chief_cook;
	protected $steward;
	protected $created_at;
	protected $updated_at;

    protected $fillable = [
        'captain',
        'chief_mate',
        'second_mate',
        'third_mate',
        'deck_cadet',
        'chief_engineer',
        'second_engineer',
        'third_engineer',
        'fourth_engineer',
        'engine_cadet',
        'electrician',
        'boatswain',
        'pump_man',
        'able_bodied_seaman',
        'ordinary_seaman',
        'fitter',
        'oiler',
        'wiper',
        'chief_cook',
        'steward',
        'oiler'
    ];

    public function getId()
	{
		return $this->id;
	}
}
