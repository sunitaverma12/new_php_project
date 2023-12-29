<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <style>
        body{
            display: grid;
            place-items: center;
            height:100vh;
            margin: 0;
            
        }
    </style> -->
</head>
<body>
    <!-- variable -->
    <!-- <h1> 
        <?php
        $val="hii";
        echo "$val";
        echo "hello word";
        ?>
    </h1> -->
    <!-- Conditionals and Booleans -->
     <?php
     $namse= "Dark Matter";
     $read="false";


     if ($read){
        $massege="you have read $name";
     } 
      else{
        $massege="you have not read $name";

     }
    
    ?>

    <!-- <h1>
        <?=$massege ;?>

    </h1> -->

    <!-- array -->
    <h1> Recommended books</h1>

    <?php
    $books=["Gita",
            "Mahabharata",
            "Ramayana"

    ];
    ?>
    <!-- <ol>
        <?php foreach($books as $books):?>
            <li> <?=$books ;?></li>
        <?php endforeach ;?>
    </ol> -->

    <!-- Associative Arrays -->

    <?php
    $books=[
        ["name"=>"Gita",
        "author"=>"Veda Vyasa"
    ],
    ["name"=>"Ramayana",
        "author"=>"Valmiki"


]

    ];
    ?>
     <!-- <ol>
        <?php foreach($books as $books):?>
            <li> <?=$books ["name"];?></li>
        <?php endforeach ;?>
    </ol> -->

    <!-- Functions and Filters -->

    <?php
    $books=[
        ["name"=>"Do androids dream of electri sheep",
        "author"=>"Philip K. Dick",
        "releaseyear"=>" 1968"
    ],
    ["name"=>"Project Hail Marry",
    "author"=>"Andy Weir",
    "releaseyear" =>"2021"


],
    ["name"=>"The Martion",
        "author"=>"Andy Weir",
        "releaseyear"=>" 2011"
    ]

    ]; 
    function filterByAuthor($books){
          
    }
    ?>
     <ul>
        <?php foreach( $books as $book):?>
            <?php if ($book['author']==="Andy Weir"):?>
                <li> 
                <?=$book['name'];?> (<?=$book['releaseyear']?>)- By <?=$book ['author']?>
                
                </li>
        <?php endif;?>

        <?php endforeach ;?>
    </ul>

    <!-- Lambda Functions -->
    
   
</body>
</html>