<?php
    header('Access-Control-Allow-Origin: *');
    // root
    $beverages = [
        [   
            "img" => "NestleFresh.jpg",
            "Type" => "Milk",
            "Brand" => "NESTLE",
            "Product" => "NESTLE Fresh Milk",
            "Description" => "comes directly from free roaming cows in the lush pastures of New Zealand and is free of preservatives, additives or stabilizers.",
            "History" => ["Ingredients, Price, Begins , Founder"]
        ],
        [
            "img" => "RealJuice.jpg",
            "Type" => "Juice",
            "Brand" => "REAL",
            "Product" => "Real Fruit Power",
            "Description" => "Made from best quality fruits, Réal Fruit Power has NO added Preservatives, hence offers not just great taste, but also FRUIT POWER.",
            "History" => ["Ingredients, Price, Begins , Founder"]
        ],
        [
            "img" => "Deakin.jpg",
            "Type" => "Wine",
            "Brand" => "DEAKIN",
            "Product" => "Deakin estate moscato 2021",
            "Description" => "Light, fruity, fresh with sweet tropical fruit and green apple flavors with lime touches.",
            "History" => ["Ingredients, Price, Begins , Founder"]
        ],
        [
            "img" => "RH.jpg",
            "Type" => "Beer",
            "Brand" => "San Miguel Brewery",
            "Product" => "Red Horse Beer",
            "Description" => "A strong, high alcohol beer. It is deeply hued lager with a distinctive, sweetish taste, balanced by a smooth bitterness.",
            "History" => ["Ingredients, Price, Begins , Founder"]
        ],
        [
            "img" => "Coke.jpg",
            "Type" => "Softdrinks",
            "Brand" => "Coca Cola Company",
            "Product" => "Coke",
            "Description" => "Cola is a carbonated soft drink flavored with vanilla, cinnamon, citrus oils and other flavorings.",
            "History" => ["Ingredients, Price, Begins , Founder"]
        ]

    ];

    $data = json_encode($beverages);
    echo $data;
    
?>