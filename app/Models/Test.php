<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $table = 'tests';
    
    protected $primaryKey = 'id';

    protected $fillable =['name','description','course_id','creator'];
    
    public function testQuestions(){
        return $this->hasMany(TestQuestion::class);
    }
}
