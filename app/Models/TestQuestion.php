<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Model
{
    use HasFactory;
    protected $table = 'test_questions';
    
    protected $primaryKey = 'id';

    protected $fillable =['test_id'];

    public function test(){
        return $this->belongsTo(Test::class);
    }
    
}
