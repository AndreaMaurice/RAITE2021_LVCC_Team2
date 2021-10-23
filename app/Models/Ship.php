<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    use HasFactory;
    
    protected $id;
	protected $crew_id;
	protected $speed;
	protected $distance;
	protected $eta;
    protected $price;
	protected $created_at;
	protected $updated_at;

    protected $fillable = [
        'crew_id',
        'speed',
        'distance',
        'eta',
        'price'
    ];

    public function getId()
	{
		return $this->id;
	}

    public function getCrewId()
	{
		return $this->crew_id;
	}

    public function getEta()
	{
		return $this->eta;
	}

    public function getPrice()
	{
		return $this->price;
	}
}
