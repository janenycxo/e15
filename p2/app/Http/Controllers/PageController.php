<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller

{
    public function index() 

    {  
        return view('index');
        
        
        //return view('bmi')->with([
              //  'gender' => $gender,
             //   'heightFeet' => $heightFeet,
              //  'heightInches' => $heightInches,
              //  'weight' => $weight,
              //  'bmiResults' => $bmiResults,
           // ]);
    }        
      
 
} 
  //  public function show($title) {
        //        
     //   return view('show');
    
   // }


//}
# File: app/Http/Controllers/BookController.php

/**
 * GET /search
 */
 //public function search(Request $request)
 //{
    # Start with an empty array of search results; books that
    # match our search query will get added to this array
     //$searchResults = [];

    # Get the input values (default to null if no values exist)
     //$searchTerms = $request->input('searchTerms', null);
     //$searchType = $request->input('searchType', null);

    # Load our book data using PHP's file_get_contents
    # We specify our books.json file path using Laravel's database_path helper
     //$bookData = file_get_contents(database_path('books.json'));
    
    # Convert the string of JSON text we loaded from books.json into an
    # array using PHP's built-in json_decode function
     //$books = json_decode($bookData, true);
    
    # This algorithm will filter our $books down to just the books where either
    # the title or author ($searchType) matches the keywords the user entered ($searchTerms)
    # The search values are convereted to lower case using PHP's built in strtolower function
    # so that the search is case insensitive
    // $searchResults = array_filter($books, function ($book) use ($searchTerms, $searchType) {
     //    return \Str::contains(strtolower($book[$searchType]), strtolower($searchTerms));
    // });

    # The above array_filter accomplishes the same thing this for loop would
    // foreach ($books as $slug => $book) {
    //     if (strtolower($book[$searchType]) == strtolower($searchTerms)) {
    //         $searchResults[$slug] = $book;
    //     }
    // }
    
    # Redirect back to the form with data/results stored in the session
    # Ref: https://laravel.com/docs/redirects#redirecting-with-flashed-session-data
     //return redirect('/')->with([
         //'searchTerms' => $searchTerms,
        // 'searchType' => $searchType,
        // 'searchResults' => $searchResults
     //]);
 //}
        
        //return view('bmi.index')->with([
           // 'searchTerms' => session('searchTerms', null),
          //  'searchType' => session('searchType', null),
          //  'searchResults' => session('searchResults', null)
       // ]);
   // }

        # ======== Temporary code to explore $request ==========

        # Get all the properties and methods available in the $request object
        //dump($request); # Object of type Illuminate\Http\Request

        # Get the form data (array) from the $request object
        //dump($request->all()); # Equivalent of dump($_GET)

        # Get the form data from individual fields
        //dump($request->input('searchTerms'));
        //dump($request->input('searchType'));
    
        # Form data from individual fields can also be accessed via dynamic properties
        //dump($request->searchTerms);

        # Boolean to see if the request contains data for a particular field
        //dump($request->has('searchTerms')); # Should be true
        
        # You can get more information about a request than just the data of the form, for example...
        //dump($request->path()); # "search"
        //dump($request->is('search')); # true
        //dump($request->is('books')); # false
        //dump($request->fullUrl()); # e.g. http://bookmark.loc search?searchTerms=Harry%20Potter&searchType=title
        //dump($request->method()); # GET
        //dump($request->isMethod('post')); # False

        # ======== End exploration of $request ==========
    



//        {  
   // public function bmi(Request $request) {
    
    //    $request->validate([
     //       'gender' => 'required',
     //       'heightFeet' => 'required',
       //     'heightInches' => 'required',
      //      'weight' => 'required',
       // ]);


        // $gender = $request->input('gender', null);
        // $heightFeet = $request->input('heightFeet', null);
        // $heightInches = $request->input('heightInches', null);
        // $weight = $request->input('weight', null);

        // $BodyMassIndex = $weight/($height * $height)*703;
        //formula to calculate BMI: weight/(height x height) x 703
        
        // return view('bmi.index')->with([
         //    'gender' => null,
            // 'heightFeet' => null,
          //   'heightInches' => null,
            // 'weight' => null,
          //   'bmiResults' => $bmiResults,
 //]);
 //}
        
 //public function show($title) {
        // 
      //   $bmiFound = true;
        
        // return view('bmi.show')->with(['title' => $title, 'bmiFound' => $bmiFound]);       
    //