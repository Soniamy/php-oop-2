<?php
    include_once __DIR__ . '/classi/product.php';
    include_once __DIR__ . '/classi/category.php';
    include_once __DIR__ . '/classi/food.php';
    include_once __DIR__ . '/classi/toys.php';
    include_once __DIR__ . '/classi/dog_kennel.php';
    $category =[
        'cane' => new Category('cane'),
        'gatto' => new Category('gatto'),
    ];
    var_dump($category);
    $products=[

       new Food ("https://static1.gattiliano.it/ita_pm_ROYAL-CANIN-Mini-Puppy-2kg-15268_1.png", "Royal Canin Mini Puppy", 62.49, $category['cane'], "Disponibile",'prosciutto, riso', "10KG"),
       new Food ('https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/medium/adult/con/manzo/fresco/5/800/68015_pla_almo_nature_holistic_adult_rind_reis_medium_746_12kg_dog_5.jpg', 'Almo Nature', 44.99, $category['cane'],"NON Disponibile", '600gr', 'manzo, cereali'),
       new Food ('https://shop-cdn-m.mediazs.com/bilder/gourmet/gold/mousse/x/g/alimento/umido/per/gatti/4/400/cans_24_1000x1000_4.jpg', 'Gourmet Gold Mousse ', 13.19, $category['gatto'],"Disponibile", '85gr', 'manzo, pollo'),
       new Food ('https://iperverde.it/cdn/shop/products/cibo-umido-gatto-sheba-selezione-in-salsa-85-gr-vitello-tacchino.jpg?v=1634725379', 'Sheba Creazioni speciali in salsa', 0.89, $category['gatto'], " NON Disponibile", '85gr', 'vitello, tacchino'),
       new DogKennel( "https://static3.gattiliano.it/ita_pm_Curver-Knit-Letto-per-animali-Beige-9199_1.jpg","Curver knit Letto per animali Beige", 60.99, $category['gatto'],"Disponibile", "CURVER", "850g","54x20 cm"),
       new DogKennel("https://static3.gattiliano.it/ita_pm_Hunter-Gent-Divano-antibatterico-per-cani-marrone-taglia-M-15700_1.png","Hunter Gent Divano Antibatterico per cani marrone", 108.99, $category['cane'],"NON Disponibile", "HUNTER", "80x60 cm"),
       new Toys ('https://www.ulissequalityshop.com/wp-content/uploads/2017/11/nobleza-giocattolo-per-cane-blu-cuore.jpg', 'Giocattolo per Cani Nobleza Porta Ricompensa',4.90, $category['cane'],'Disponibile', 'giocattolo in gomma'),
       new Toys("https://static2.gattiliano.it/ita_pm_Trixie-Denta-Fun-12cm-cerchio-12038_1.png","Trixie Denta Fun cerchio", 8.99, $category['gatto'] ,"Disponibile", "giocattolo silicone verde"),
    ];
    var_dump($products);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <title>PETSHOP</title>
</head>
<body>
    <h1>
        CIAO
    </h1>
</body>
</html>
