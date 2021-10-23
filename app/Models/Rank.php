<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    use HasFactory;

    protected $id;
    protected $rank_name;
    protected $created_at;
	protected $updated_at;

    protected $fillable = [
        'rank_name'
    ];

    public function getId()
	{
		return $this->id;
	}
}
