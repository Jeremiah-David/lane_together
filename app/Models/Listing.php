<?php 
    namespace App\Models;
    use Symfony\Component\Console\SingleCommandApplication;

    class Listing {
        //  All listing
        public static function all() {
            return [
                [    'id'    => 1,
                    'title' => 'Listing One',
                    'description' => 'This is a description of Listing One'
                ],
                [    'id'    => 2,
                    'title' => 'Listing Two',
                    'description' => 'This is a description of Listing One'
                ],  
                [   
                     'id'    => 3,
                    'title' => 'Listing Three',
                    'description' => 'This is a description of Listing One'
                ]
            ];
        }

// Single listing
        public static function find($id) {
            $listings = self::all();
            foreach($listings as $listing) {
                if($listing['id'] == $id) {
                    return $listing;
                }
            }
            
        }
    }