<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crewmates extends Model
{
    use HasFactory;

    protected $id;
	protected $crew_id;
	protected $name;
	protected $rank;
	protected $created_at;
	protected $updated_at;

    protected $fillable = [
        'crew_id',
        'name',
        'rank',
    ];

    public function getId()
	{
		return $this->id;
	}

    public function getCrewId()
	{
		return $this->crew_id;
	}

    public function getName()
	{
		return $this->name;
	}

    public function getRank()
	{
		return $this->rank;
	}

}
