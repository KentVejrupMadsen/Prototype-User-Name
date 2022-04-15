<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    
    return new class extends Migration
    {
        
        public function up()
        {
            //
            Schema::create( 'cache_first_names', 
                function ( Blueprint $table ) 
                {
                    $table->id();
                    $table->string( 'content' )
                          ->unique();

                    $table->collation = 'utf8mb4_0900_as_cs';
                }
            );


            Schema::create( 'cache_last_names', 
                function ( Blueprint $table ) 
                {
                    $table->id();
                    $table->string('content')
                          ->unique();
                          
                    $table->collation = 'utf8mb4_0900_as_cs';   
                }
            );

        }

        
        public function down()
        {
            //
            Schema::dropIfExists( 'cache_first_name' );
            Schema::dropIfExists( 'cache_last_name' );
        }
    };

?>