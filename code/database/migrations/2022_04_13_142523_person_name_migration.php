<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    
    return new class extends Migration
    {
        
        public function up()
        {
            //
            Schema::create( 'first_name', 
                function ( Blueprint $table ) 
                {
                    $table->id();
                    $table->string( 'content' )
                          ->unique();
                }
            );


            Schema::create( 'last_name', 
                function ( Blueprint $table ) 
                {
                    $table->id();
                    $table->string('content')
                          ->unique();
                }
            );


            Schema::create( 'person_name', 
                function ( Blueprint $table ) 
                {
                    $table->id();

                    $table->bigInteger( 'first_name_id' )
                          ->unsigned()
                          ->index();

                    $table->json( 'middle_name' );
                    
                    $table->bigInteger( 'last_name_id' )
                          ->unsigned()
                          ->index();
                    
                    
                    $table->foreign( 'first_name_id' )
                        ->references( 'id' )
                        ->on( 'first_name' );
                    
                    $table->foreign( 'last_name_id' )
                        ->references( 'id' )
                        ->on( 'last_name' );
                }
            );
        }

        
        public function down()
        {
            //
            Schema::dropIfExists( 'person_name' );
            Schema::dropIfExists( 'last_name' );
            Schema::dropIfExists( 'first_name' );
        }
    };

?>