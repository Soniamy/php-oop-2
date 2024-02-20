<?php
    include_once __DIR__ . '/classi/product.php';
    include_once __DIR__ . '/classi/category.php';
    include_once __DIR__ . '/classi/food.php';
    include_once __DIR__ . '/classi/toys.php';
    include_once __DIR__ . '/classi/dog_kennel.php';

        $dogsCategory = new Category('🐶');
        $catsCategory = new Category('🐱');

    //var_dump($category);
    $products=[

       new Food ("https://static1.gattiliano.it/ita_pm_ROYAL-CANIN-Mini-Puppy-2kg-15268_1.png", "Royal Canin Mini Puppy", 62.49,  $dogsCategory, "Disponibile",'prosciutto, riso', "1KG", "NULL"),
       new Food ('https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/medium/adult/con/manzo/fresco/5/800/68015_pla_almo_nature_holistic_adult_rind_reis_medium_746_12kg_dog_5.jpg', 'Almo Nature', 44.99,  $dogsCategory,"NON Disponibile", 'manzo, cereali', '600gr'),
       new Food ('https://shop-cdn-m.mediazs.com/bilder/gourmet/gold/mousse/x/g/alimento/umido/per/gatti/4/400/cans_24_1000x1000_4.jpg', 'Gourmet Gold Mousse ', 13.19,$catsCategory,"Disponibile", 'manzo, pollo','85gr'),
       new Food ('https://iperverde.it/cdn/shop/products/cibo-umido-gatto-sheba-selezione-in-salsa-85-gr-vitello-tacchino.jpg?v=1634725379', 'Sheba Creazioni speciali in salsa', 0.89, $catsCategory, " NON Disponibile", 'vitello, tacchino','85gr'),
       new DogKennel( "https://static3.gattiliano.it/ita_pm_Curver-Knit-Letto-per-animali-Beige-9199_1.jpg","Curver knit Letto per animali Beige", 60.99, $catsCategory,"Disponibile", "CURVER","54x20 cm"),
       new DogKennel("https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_-_2023-11-10t095221.361_2.png?width=700&height=700&store=default&image-type=image","Petit Sofà Dreamaway Boston Fabotex", 108.99,  $dogsCategory,"NON Disponibile", "HUNTER", "80x60 cm"),
       new Toys ('https://www.ulissequalityshop.com/wp-content/uploads/2017/11/nobleza-giocattolo-per-cane-blu-cuore.jpg', 'Giocattolo per Cani Nobleza Porta Ricompensa',4.90,  $dogsCategory,'Disponibile',"Giocattolo per cani dove si può mettere il cibo come premio", "GOMMA"),
       new Toys("https://static2.gattiliano.it/ita_pm_Trixie-Denta-Fun-12cm-cerchio-12038_1.png","Trixie Denta Fun cerchio", 8.99, $catsCategory ,"Disponibile","Giocattolo per animali.", "GOMMA"),
    ];
   // var_dump($products);

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
      
    <div class="container">
        <h1 class="text-center">PetBoolshop</h1>
        <h2>I nostri prodotti:</h2>
        <div class="row row-cols-2">
            <?php foreach($products as $product) :?>
            <div class="col">
                <div class="card h-100">
                    <img  src="<?php echo $product->image ?>" alt="">
                    <h2><?php echo $product->getName() ?></h2>
                    <p><?php echo $product->price. " ". "euro" ?></p>
                    <p>Category:<?php $product->category->getName()  ?></p>
                    <p>Peso:  <?php echo isset($product->weight) ? $product->weight : 0 ?></p>
                    <p>Disponibilità:  <?php echo $product->availability ?></p>
                    <p>Descrizione: <?php echo isset($product->description) ? $product->description : "Nessuna Descrizione" ?></p>
                    <p>Dimensione:<?php echo isset($product->dimensions) ? $product->dimensions : "Nessuna Dimensione" ?></p>
                    <p>Materiale:<?php echo isset($product->material) ? $product->material : "NULL" ?></p>

                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>
