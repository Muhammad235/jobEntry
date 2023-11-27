<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

        public static function latest(){
           return [
                [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'lorem lor em loremlore mloremlorem loremlor eml oremlo remlor emloremlor emloremlorem lore mloremlor em lorem lorem   lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'lorem lor em loremlore mloremlorem loremlor eml oremlo remlor emloremlor emloremlorem lore mloremlor em lorem lorem   lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem'
            ],
            [
                'id' => 3,
                'title' => 'Listing Three',
                'description' => 'lorem lor em loremlore mloremlorem loremlor eml oremlo remlor emloremlor emloremlorem lore mloremlor em lorem lorem   lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem'
            ],
            [
                'id' => 4,
                'title' => 'Listing Four',
                'description' => 'lorem lor em loremlore mloremlorem loremlor eml oremlo remlor emloremlor emloremlorem lore mloremlor em lorem lorem   lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem  lorem'
            ]
            ];
        
        }


        public static function find($id){
            $listings = self::latest();

            foreach($listings as $listing){
                if($listing['id'] == $id){
                    return $listing;
                }
            }
         
         }

         
}
