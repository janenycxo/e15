<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Str;
use App\Author;

class PracticeController extends Controller

{
    /**
     * Week 11 Assignment Examples
     */
    public function practice50()
    {
    # Eager load the author with the book
    $books = Book::with('author')->get();

    foreach ($books as $book) {
        if ($book->author) {
            dump($book->author->first_name.' '.$book->author->last_name.' wrote '.$book->title);
        } else {
            dump($book->title. ' has no author associated with it.');
        }
    }

dump($books->toArray());
    }


    public function practice49()
    {  
    # Get an example book
    $book = Book::whereNotNull('author_id')->first();

    # Get the author from this book using the "author" dynamic property
    # "author" corresponds to the the relationship method defined in the Book model
    $author = $book->author;

    # Output
    dump($book->title.' was written by '.$author->first_name.' '.$author->last_name);
    dump($book->toArray());
    }

    public function practice48()
    {     
    $author = Author::where('first_name', '=', 'J.K.')->first();

    $book = new Book;
    $book->slug = 'fantastic-beasts-and-where-to-find-them';
    $book->title = "Fantastic Beasts and Where to Find Them";
    $book->published_year = 2001;
    $book->cover_url = 'https://hes-bookmark.s3.amazonaws.com/cover-placeholder.png';
    $book->info_url = 'https://en.wikipedia.org/wiki/Fantastic_Beasts_and_Where_to_Find_Them';
    $book->purchase_url = 'http://www.barnesandnoble.com/w/fantastic-beasts-and-where-to-find-them-j-k-rowling/1004478855';
    $book->author()->associate($author); # <--- Associate the author with this book
    $book->description = 'Fantastic Beasts and Where to Find Them is a 2001 guide book written by British author J. K. Rowling (under the pen name of the fictitious author Newt Scamander) about the magical creatures in the Harry Potter universe. The original version, illustrated by the author herself, purports to be Harry Potter’s copy of the textbook of the same name mentioned in Harry Potter and the Philosopher’s Stone (or Harry Potter and the Sorcerer’s Stone in the US), the first novel of the Harry Potter series. It includes several notes inside it supposedly handwritten by Harry, Ron Weasley, and Hermione Granger, detailing their own experiences with some of the beasts described, and including in-jokes relating to the original series.';
    $book->save();
    dump($book->toArray());
    }

    
    /**
     * Week 10 Assignment Examples
     */
    
    public function practice47()
    {     
        $books = Book::where('author', '=', 'Fitzgerald')->delete();
        dump($books);
      }

    
     public function practice46()    
    {
    $books = Book::all();
    echo $books;
    }

    public function practice45()    
    {
        $books = Book::where('author', 'F. Scott Fitzgerald')->get();
        dump($books->first());

        $results=Book::where('author', 'F. Scott Fitzgerald')->first();
        dump($results);
    }

    public function practice44()    
    {
    $books = Book::orderBy('id', 'desc')->get();
    dump($books->first());

    $books = $books->first();
    dump($books);
    
}

public function practice43()    
{
    $books = Book::all();

# loop through the Collection and access just the data
foreach ($books as $book) {
    dump($book->title);
}
}

    public function practice42()    
    {

    $books = Book::all();
    dump($books);
    echo($books);
    }


    public function practice41()    
    {
    //$results=Book::find(1);
    //dump($results);

    //$results=Book::orderBy('title')->first();
    //dump($results);



    # Yields a collection of multiple books
//$results = Book::all(); 

//dump($results);
//$results = Book::orderBy('title')->get(); 
//dump($results);
# Should match 1 book; yields a Collection of 1 Book
//$results = Book::where('author', 'F. Scott Fitzgerald')->get();
//foreach ($results as $book) {
    //$book->title='ABC';
    //$book->save();
//}
//dump($results);
# Should match 0 books; yields an empty Collection
//$results = Book::where('author', 'Virginia Wolf')->get();
//dump($results);

# Even though we limit it to 1 book, we're using the `get` fetch method so we get a Collection (of 1 Book)
//$results = Book::limit(1)->get();

}



    
    /**
     * Week 9 Assignment Examples
     */
 
    public function practice17()    
    {
    $result=Book::all();
    dump($result->toArray());
}



    public function practice16()    {
        $result=Book::where('author', 'LIKE', '%Rowling%')->delete();
    dump($result);  
    dump('Deletion complete; check the database to see if it worked...');   
    }


    public function practice25()    {
# First get a book to delete
$result = Book::where('author', 'LIKE', '%Rowling%')->first();

if (!$result) {
    dump('Did not delete- Author not found.');
} else {
    $result->delete();

    dump($result->author);
    dump($result->toArray());
    dump('Deletion complete; check the database to see if it worked...');

}
}

public function practice28()    
    
    {
        $results = Book::where('author', '=', 'J.K. Rowling')->get();
        foreach ($results as $result) {
        
        $result->author = 'JK Rowling';
        $result->save();
        
        }
    }

    public function practice27()    
    
    {
        # First get a book to delete
        $result = Book::where('author', 'LIKE', '%Rowling%')->delete();
        dump('Deletion complete; check the database to see if it worked...');
    
        
            
        
        }
           




    public function practice15()    {
        $result=Book::where('author', '=', 'JK Rowling')->get();
        dump($result->toArray());
        }



    public function practice14()
    {
        $result=Book::where('author', '=', 'J.K. Rowling')
        ->update(['author' => 'JK Rowling']);
        $result = Book::all();
        dump($result->toArray());
        }

       
        public function practice22()
        {
        $result = Book::where('author', '=', 'J.K. Rowling')->get();

        if (!$result) {
            dump("No Matches Found");
        } else {
            # Change some properties
            $result->author = 'JK Rowling';
            
        }                
        dump($result->author);
        dump($result->toArray());
            }
             
            
    


    public function practice24()
    {
        $result = Book::where('author', 'LIKE', '%Rowling%')->first();
        dump($result->title);
        
        }




//latest()
    public function practice13()
    {
        $result = Book::orderByDesc
    ('created_at')->limit(2)->get();
        dump($result->toArray());
        }


    public function practice12()
{
$result = Book::whereIn('id', [1,2,3,4,5,6,7])->get();
    dump($result->toArray());
}

    public function practice11()
    {
    $result = Book::orderBy('published_year', 'desc')->get();
    dump($result->toArray());
    }

    public function practice10()
    {
    $result = Book::orderBy('title', 'asc')->get();
    dump($result->toArray());
    }



    public function practice9()
        {$result = Book::all();
    dump($result->toArray());
    }


    # Get only books published after 1950
#   `where` is the design method
#   `get` is the execution method

# Get all rows

# A second param can be passed to `orderBy` constraint to specify descending order


public function practice8()
    {
$results = Book::where('published_year', '>', 1950)->get();
dump($results->toArray()); 
    }

# Study the results

    
    
    /**
     * Demonstrates deleting data
     */
    public function practice7()
    {
        # First get a book to delete
        $book = Book::where('author', '=', 'F. Scott Fitzgerald')->first();

        if (!$book) {
            dump('Did not delete- Book not found.');
        } else {
            $book->delete();
            dump('Deletion complete; check the database to see if it worked...');
        }
    }
    
    /**
     * Demonstrates updating data
     */
    public function practice6()
    {
        # First get a book to update
        $book = Book::where('author', '=', 'F. Scott Fitzgerald')->first();

        if (!$book) {
            dump("Book not found, can not update.");
        } else {
            # Change some properties
            $book->title = 'The Really Great Gatsby';
            $book->published_year = '2025';

            # Save the changes
            $book->save();

            dump('Update complete; check the database to confirm the update worked.');
        }
    }

    /**
     * Demonstrates the `first` method
     */
    public function practice5()
    {
        $book = Book::where('slug', '=', 'the-martian')->first();

        dump($book);
        dump($book->toArray());
    }

    /**
     * Demonstate reading data
     */
    public function practice4()
    {
        //$book = new Book();
        //$books = Book::where('title', 'LIKE', '%Harry Potter%')->get();
        $books = Book::where('title', 'LIKE', '%Harry Potter%')->orWhere('published_year', '>=', 1998)->get();

        if ($books->isEmpty()) {
            dump('No matches found');
        } else {
            dump($books->toArray());

            foreach ($books as $book) {
                dump($book->title);
            }
        }
    }

    /**
     * Demonstrates creating data
     */
    public function practice3()
    {
        # Instantiate a new Book Model object
        $book = new Book();

        # Set the properties
        # Note how each property corresponds to a column in the table
        $book->title = 'The Martian';
        $book->slug = 'the-martian';
        $book->author = 'Anthony Weir';
        $book->published_year = 2011;
        $book->cover_url = 'https://hes-bookmark.s3.amazonaws.com/the-martian.jpg';
        $book->info_url = 'https://en.wikipedia.org/wiki/The_Martian_(Weir_novel)';
        $book->purchase_url = 'https://www.barnesandnoble.com/w/the-martian-andy-weir/1114993828';
        $book->description = 'The Martian is a 2011 science fiction novel written by Andy Weir. It was his debut novel under his own name. It was originally self-published in 2011; Crown Publishing purchased the rights and re-released it in 2014. The story follows an American astronaut, Mark Watney, as he becomes stranded alone on Mars in the year 2035 and must improvise in order to survive.';

        # Invoke the Eloquent `save` method to generate a new row in the
        # `books` table, with the above data
        $book->save();

        dump('Added: ' . $book->title);
    }

    /**
     * Demonstrates using the Book model
     */
    public function practice2()
    {
        //dump(Str::plural('mouse'));

        dump(Book::find(3));
        dump(Book::all()->toArray());
    }

    /**
     * First practice example
     */
    public function practice1()
    {
        dump('This is the first example.');
    }

    /**
     * ANY (GET/POST/PUT/DELETE)
     * /practice/{n?}
     * This method accepts all requests to /practice/ and
     * invokes the appropriate method.
     * http://bookmark.loc/practice => Shows a listing of all practice routes
     * http://bookmark.loc/practice/1 => Invokes practice1
     * http://bookmark.loc/practice/5 => Invokes practice5
     * http://bookmark.loc/practice/999 => 404 not found
     */
    public function index($n = null)
    {
        $methods = [];

        # Load the requested `practiceN` method
        if (!is_null($n)) {
            $method = 'practice' . $n; # practice1

            # Invoke the requested method if it exists; if not, throw a 404 error
            return (method_exists($this, $method)) ? $this->$method() : abort(404);
        } # If no `n` is specified, show index of all available methods
        else {
            # Build an array of all methods in this class that start with `practice`
            foreach (get_class_methods($this) as $method) {
                if (strstr($method, 'practice')) {
                    $methods[] = $method;
                }
            }

            # Load the view and pass it the array of methods
            return view('practice')->with(['methods' => $methods]);
        }
    }
}