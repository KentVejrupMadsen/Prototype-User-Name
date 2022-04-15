<?php

    namespace App\Http\Controllers;

    use App\Models\FirstNameModel;

    use Illuminate\Support\Str;
    use Illuminate\Http\Request;



    class SetupController 
        extends Controller
    {
        //
        public function store( Request $req )
        {
            $array = $req->input( 'people_first_names' );

            /*foreach( $array as &$value )
            {
                if( !self::ExistFirstName( $value ) )
                {
                    $v['content'] = $value;
                    $fnm = FirstNameModel::create( $v );
                }
            }*/

            $data = array();
            $size = sizeof( $array );

            $inserted_list = array();

            for( $idx = 0; 
                 $idx < $size; 
                 $idx ++ )
            {
                $loop = $idx%500;
                $value = $array[ $idx ];

                if( true )
                {
                    $vinp['content'] = $value;

                    // Push to already exists
                    array_push( $inserted_list, $value );

                    // Push to data for getting send
                    array_push( $data, $vinp );
                }

                if( ($idx > 0) && ($loop == 0) )
                {
                    FirstNameModel::insert($data);
                    $data = array();   
                }

            }

            return response('successfull', 200);
        }


        public function search( Request $req )
        {

        }

        protected function ExistFirstName( string $value ): bool
        {
            $model = FirstNameModel::where('content', Str::lower($value))->first();

            if( isset( $model ) )
            {
                return true;
            }

            return false;
        }
    }

?>