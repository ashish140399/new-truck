let Restaurant = class {
    constructor(id, name, price, rating, menu, schedule, cuisine) {
        this.id = id;
        this.name = name;
        this.price = price;
        this.rating = rating;
        this.menu = menu;
        this.schedule = schedule;
        this.cuisine = cuisine;
    };

    // gets current address at the given time
    getAddress(dow, hr) {
        for (let i = 0; i < this.schedule.length; i++) {
            let dowSchedule = this.schedule[i][3][dow];

            if (!dowSchedule) {
                continue;
            }

            for (let j = 0; j < dowSchedule.length; j++) {
                let hrSchedule = dowSchedule[j];

                if (hr >= hrSchedule[1] && hr < hrSchedule[2]) {
                    return [ this.schedule[i], hrSchedule ];
                }
            }
        }

        return [ ];
    }
};

let Restaurants = [
    new Restaurant(
        0,
        "Power Breakfast Truck",
        3,
        4.2,
        [
            ['Breakfast Sandwich', 2.99, "some sandwich"],
            ['Black Coffee', 1.99, "unsweetened and crappy"],
            ['Avocado Toast', 5.99, "millenial approved"],
            ['Scrambled Eggs', 2.99, "idk its eggs gggg gggg gggggg gggggg ggggg gggg gggggg gggggg"]
        ],
        [
            [
                '1191 - 1137 S Halsted St<br>Chicago, IL 60607',
                41.867354,
                -87.647072,
                [
                    [ ],
                    [ [ " 7AM - 10AM", 7, 10 ] ],
                    [ [ " 7AM -  9AM", 7,  9 ], [ "10AM - 12PM", 10, 12 ] ],
                    [ [ " 7AM - 10AM", 7, 10 ] ],
                    [ [ " 7AM -  9AM", 7,  9 ], [ "10AM - 12PM", 10, 12 ] ],
                    [ [ " 7AM - 10AM", 7, 10 ] ],
                    [ ]
                ]
            ],
            [
                '1199 - 1131 Michigan Avenue<br>Chicago, IL 60605',
                41.867712,
                -87.623920,
                [
                    [ ],
                    [ [ "10AM - 12PM", 10, 12 ] ],
                    [ ],
                    [ [ "10AM - 12PM", 10, 12 ] ],
                    [ ],
                    [ [ "10AM - 12PM", 10, 12 ] ],
                    [ ]
                ]
            ]
        ],
        [
            "American",
            "Canadian"
        ]
    ),

    new Restaurant(
        1,
        "Desert-a-truck",
        4,
        3.2,
        [
            ['Desert Cup', 10.99, "a to-go cup of deserts"],
            ['Whatabirthday', 9.99, "birthday cake for any ocassion"],
            ['Anchorcake', 12.99, "cake in the shape of an anchor"],
            ['Pie', 3.14, "pie day special everyday"],
            ['Cheesecake', 9.99, "a cheesecake with extra cheese"],
            ['Playcake', 12.99, "a cake for special ocassions"],
            ['Boxcake', 10.99, "a box shaped cake for sharing"]
        ],
        [
            [
                '14 - 10 E Jackson Blvd<br>Chicago, IL 60604',
                41.878273,
                -87.627517,
                [
                    [ ],
                    [ [ " 3PM -  5PM", 15, 17 ] ],
                    [ ],
                    [ [ " 3PM -  5PM", 15, 17 ] ],
                    [ ],
                    [ [ " 3PM  - 5PM", 15, 17 ] ],
                    [ ]
                ]
            ]
        ],
        [
            "American"
        ]
    ),

    new Restaurant(
        2,
        "Dhaba",
        1,
        4.9,
        [
            ['Biryani', 4.99, "biryani with your choice of meat"],
            ['Gyros', 2.99, "lamb gyros served with a tzatziki sauce"],
            ['Fries', 1.99, "potato fries served with a tzatziki sauce"],
            ['Kabob', 5.99, "kabob made from your choice of meat"],
            ["Pita Sandwich", 3.99, "pita bread with your choice of stuffing"],
            ['Mozarella Sticks', 0.99, "5 piece mozarella sticks with choice of dipping sauce"]
        ],
        [
            [
                '107 S Michigan Ave<br>Chicago, IL 60603',
                41.880781,
                -87.624081,
                [
                    [ ],
                    [ [ "11AM -  2PM", 11, 14 ] ],
                    [ [ "11AM -  2PM", 11, 14 ] ],
                    [ [ "11AM -  2PM", 11, 14 ] ],
                    [ [ "11AM -  2PM", 11, 14 ] ],
                    [ ],
                    [ ]
                ]
            ],
            [
                '1155 S State St<br>Chicago, IL 60605',
                41.867605,
                -87.627416,
                [
                    [ ],
                    [ [ " 2PM -  4PM", 14, 16 ] ],
                    [ [ " 2PM -  4PM", 14, 16 ] ],
                    [ [ " 2PM -  4PM", 14, 16 ] ],
                    [ [ " 2PM -  4PM", 14, 16 ] ],
                    [ ],
                    [ ]
                ]
            ],
        ],
        [
            "Indian",
            "Arabic",
            "American"
        ]
    ),
    new Restaurant(
        3,
        "Ameer Nawaz",
        4,
        4.9,
        [
            ['Ameer Biryani', 14.99, "biryani with your choice of meat"],
            ['Ameer Gyros', 15.99, "lamb gyros served with a tzatziki sauce"],
            ['Ameer Fries', 4.99, "potato fries served with a tzatziki sauce"],
            ['Kabob of the kings', 9.99, "kabob made from your choice of meat"],
            ["King Sandwich", 18.99, "pita bread with your choice of stuffing"],
            ['Mozarella Sticks', 3.99, "5 piece mozarella sticks with choice of dipping sauce"]
        ],
        [
            [
                '521 N Rush St<br>Chicago, IL 60611',
                41.8916,
                -87.6252,
                [//Edited upto here
                    [ ],
                    [ [ "11AM -  2PM", 11, 14 ] ],
                    [ [ "11AM -  2PM", 11, 14 ] ],
                    [ [ "11AM -  2PM", 11, 14 ] ],
                    [ [ "11AM -  2PM", 11, 14 ] ],
                    [ ],
                    [ ]
                ]
            ],
            [
                '1155 S State St<br>Chicago, IL 60605',
                41.867605,
                -87.627416,
                [
                    [ ],
                    [ [ " 2PM -  4PM", 14, 16 ] ],
                    [ [ " 2PM -  4PM", 14, 16 ] ],
                    [ [ " 2PM -  4PM", 14, 16 ] ],
                    [ [ " 2PM -  4PM", 14, 16 ] ],
                    [ ],
                    [ ]
                ]
            ],
        ],
        [
            "Indian",
            "Arabic",
            "American"
        ]
    ),
    new Restaurant(
        4,
        "HALAL-Food-truck",
        2,
        4.1,
        [
            ['Chili Biryani', 5.99, "biryani with your choice of meat"],
            ['Halal Gyros', 8.99, "lamb gyros served with a tzatziki sauce"],
            ['Cheese Fries', 2.99, "potato fries served with a tzatziki sauce"],
            ['Kabob of the kings', 6.99, "kabob made from your choice of meat"],
            ['Double Cheese Sandwich', 7.99, "pita bread with your choice of stuffing"],
            ['Mozarella Sticks', 3.99, "5 piece mozarella sticks with choice of dipping sauce"]
        ],
        [
            [
                '356 S Wabash Ave,<br> Chicago, IL 60604',
                41.878264,
                -87.626082,
                [
                    [ ],
                    [ [ " 4PM -  10PM", 16, 22 ],[ " 11PM -  12AM", 23, 00 ] ],
                    [ ],
                    [ [ " 4PM -  10PM", 16, 22 ] ],
                    [ ],
                    [ [ " 4PM  - 10PM", 16, 22 ] ],
                    [ ]
                ]
            ]
        ],
        [
            "Indian"
        ]
    ),

    new Restaurant(
        5,
        "Sushi-Thai-truck",
        4,
        4.7,
        [
            ['ThAI Spicy Basil', 8.99, "Stir-fried meat, basil, mushroom, bell peppers, onion"],
            ['Beef & Broccoli', 9.99, "Stir-fried beef with broccoli and ginger in a delicate oyster sauce"],
            ['Thai Rice', 7.99, "Stir-fried with egg, carrots, green peas. onions and tomatoes"],
            ['Dragon Roll', 11.59, "Shrimp trmpura, masago, mayo and topped with avaocado,eel and sweet sauce"],
            ['Godzilla', 13.99, "Srimp tempura, avocado, red tobiko, creamcheese, wasabi mayo and sweet sauce"],
            ['Rainbow', 11.99, "Crabstick, cucmber, avocado topped with assorted fresh fish"]
        ],
        [
            [
                '98-2 Michigan Ave,<br> Chicago, IL 60602',
                41.882821,
                -87.624752,
                [
                    [ ],
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ ],
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ ],
                    [ [ " 11AM  - 10PM", 11, 22 ] ],
                    [ ]
                ]
            ]
        ],
        [
            "Thai"        ]
    ),

    new Restaurant(
        6,
        "Italian-Food-truck",
        4,
        4.8,
        [
            ['Prosciutto E Burrata', 13.99, "Prosciutto di parma, fresh mozzarella, aragola, tomato, blasamic glaze"],
            ['Vongole Al Forno', 11.99, "Baked Clams"],
            ['Calamari Alla Griglia', 12.99, "Grilled calamri over spinach. Garlic. Evoo"],
            ['Margherita Pizza', 15.59, "San Marzano tomato sauce, fresh mozzarella, fresh nasil"],
            ['Funghi', 16.99, "San Marzano tomato sauce, dry aged or fresh mozzarella, trilogy of sauteed mushroom"],
            ['Alfredo', 18.00, "Creamy parmigiano cheese sause, dry aged mozzarella, chicken, jalapenos"]
        ],
        [
            [
                '114 S Racine ave,<br> Chicago, IL 60607',
                41.879347,
                -87.657865,
                [
                    [ ],
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ ],
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ ],
                    [ [ " 11AM  - 10PM", 11, 22 ] ],
                    [ ]
                ]
            ]
        ],
        [
            "French"
        ]
    ),

    new Restaurant(
        7,
        "Korean-Food-truck",
        3,
        3.7,
        [
            ['Gun Mandu', 4.99, "Fried Vegetable dumplings"],
            ['Gyeran Jim', 5.99, "Korean steamed egg custard with green onions"],
            ['Haemul Pajeon', 8.99, "Korean pancake, Pan fried with seafood, green onions, seasoned sauce"],
            ['Dakdori Tang', 15.59, "Sliced chicken stew with patato and vegetavles"],
            ['Galbi', 17.99, "Korean BBQ, Onions and green onions"],
            ['Pork Bulgogi', 10.00, "Grilled spicy marinated pork with onions, and green onions"]
        ],
        [
            [
                '2179-2217 N Spaulding ave,<br> Chicago, IL 60647',
                41.921170,
                -87.710270,
                [
                    [ ],
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ ],
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ ],
                    [ [ " 11AM  - 10PM", 11, 22 ] ],
                    [ ]
                ]
            ]
        ],
        [
            "Asian"
        ]
    ),

    new Restaurant(
        8,
        "Gelato-ICE-truck",
        3,
        4.5,
        [
            ['Banana Split', 6.99, "Banana with Streaks of chocolate and milk caramel"],
            ['Cafe con Leche', 7.99, "Cafe latte made with real coffee beans"],
            ['Coco', 8.99, "Coconut with real melted coconut chunks"],
            ['Frutilla', 4.59, "Strawberry"],
            ['Vainilla', 7.50, "Vanilla made with real vanilla beans"],
            ['Yerba Mate', 6.00, "Yerba mate herbal tea"]
        ],
        [
            [
                '998-958 N Kedzie ave,<br> Chicago, IL 60651',
                41.899062,
                -87.706530,
                [
                    [ ],
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ ],
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ ],
                    [ [ " 11AM  - 10PM", 11, 22 ] ],
                    [ ]
                ]
            ]
        ],
        [
            "Italian"
        ]
    ),

    new Restaurant(
        9,
        "Taco-Food-truck",
        2,
        4.3,
        [
            ['Cochinita', 3.99, "Achiote marinade cooked in banana leaves topped with pickled red onions."],
            ['Chicken Tinga', 4.99, "Chipotle salsa, crema and queso fresco."],
            ['Chorizo con Papa', 5.99, "Chihuahua cheese queso and crema fresca."],
            ['Charred Butternut Squash', 6.59, "Roasted kale, arbol salsa, queso fresco."],
            ['Braised Cauliflower', 5.29, "Macha mole, crema fresca, sesame seeds."],
            ['Pork Belly', 7.00, "Tamarindo chipotle salsa, pickled red onions, cilantro sprigs"]
        ],
        [
            [
                '3146 W Madison St,<br> Chicago, IL 60612',
                41.881537,
                -87.705538,
                [
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ [ " 11AM  - 10PM", 11, 22 ] ],
                    [ ]
                ]
            ]
        ],
        [
            "Mexican"
        ]
    ),

    new Restaurant(
        10,
        "Sushi-Burrito-truck",
        4,
        4.1,
        [
            ['Crunch+Fire', 15.99, "Shrimp tempura, spicy tuna, cream cheese, jalapeno, mashed sweet potato, flakes, cucumber, guacamole, lettuce, avocado, soy glazed sauce, and spicy mayo sauce."],
            ['Fire Tuna', 16.99, "Spicy tuna, edamame, guacamole, sweet potato, cucumber, pickled radish, beets, carrots, sesame seed, onion flakes, lime, soy glazed, and volcano sauce. Spicy."],
            ['Savory', 20.99, "Tuna and salmon marinade with yuzu soy, edamame, guacamole, sweet potato, cucumber, pickled radish &beets, carrots, sesame seed, onion flakes, lime, soy glazed, volcano, and onion maple sauce."],
            ['Crunch', 25.59, "Shrimp tempura, eel, cream cheese, sweet potato, flakes, cucumber, plumguac, lettuce, avocado, eel sauce, and mayo sauce."],
            ['Bibimbap', 30.29, "Korean BBQ beef, tofu, spinach, carrots, cucumber, pickle radish, egg, and crabmeat."],
            ['Vegetarian', 28.00, "Sweet potato, tofu, carrots, cucumber, pickle radish, lettuce, flakes, avocado, plumguac, spinach, red pepper, and jalapeno."]
        ],
        [
            [
                '310 S State St,<br> Chicago, IL 60604',
                41.877183,
                -87.627989,
                [
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ [ " 11AM  - 10PM", 11, 22 ] ],
                    [ ]
                ]
            ]
        ],
        [
            "Japanese"
			
        ]
    ),

    new Restaurant(
        11,
        "Mix-Burger-truck",
        3,
        2.5,
        [
            ['Quarter Pounder®* with Cheese Bacon', 6.99, "hot and deliciously juicy, seasoned with just a pinch of salt and pepper and sizzled on our flat iron grill. Layered with two slices of melty American cheese, slivered onions and tangy pickles on a soft, fluffy sesame seed bun."],
            ['Quarter Pounder®* Deluxe', 7.99, "Layered with two slices of melty American cheese, creamy mayo, slivered onions and tangy pickles on a soft, fluffy sesame seed bun"],
            ['Bacon Smokehouse Burger', 8.99, " All served with Applewood smoked bacon, smoky bacon-onion sauce, real white cheddar, mild sweet mustard sauce and in-house fried onion strings for an unexpected flavor combination."],
            ['Double Bacon Smokehouse Burger', 4.59, " Stacked with two 100% fresh beef 1/4 lb.* patties that are hot, deliciously juicy and cooked when you order. Served on an artisan roll."],
            ['Double Mushroom & Swiss Burger', 7.50, " Made with two 100% fresh beef ¼. patties*, cooked right when you order and served on an artisan roll."],
            ['Mushroom & Swiss Burger', 6.00, "Mushroom & Swiss Burger brings out layers of texture and flavor that come together perfectly, with seasoned mushrooms, creamy bistro aioli, Swiss cheese and crispy onion strings."]
        ],
        [
            [
                'Streeteville,<br> Chicago, IL 60611',
                41.893784,
                -87.619157,
                [
                    [ ],
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ ],
                    [ [ " 11AM -  10PM", 11, 22 ] ],
                    [ ],
                    [ [ " 11AM  - 10PM", 11, 22 ] ],
                    [ ]
                ]
            ]
        ],
        [
            "American"
        ]
    )



];