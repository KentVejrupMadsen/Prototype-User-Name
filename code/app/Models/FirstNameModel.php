<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class FirstNameModel 
        extends Model
    {
        use HasFactory;
        
        protected $table = 'cache_first_names';
        public $timestamps = false;

        protected $fillable = [
            'content'
        ];

    }
?>