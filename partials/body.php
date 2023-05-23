    <body>

        
        <div class="main-wrapper bg-dark text-light h-100 w-100 p-3">

            <h1 class="text-center fw-bold">Pet Shop <i class="fa-solid fa-paw fa-bounce" style="color: gold;"></i></h1>

            <div class="container p-4">
            <h2 class="fw-bold fs-1 py-2">Food <i class="fa-solid fa-bowl-food fa-flip" style="color: #0080ff;"></i></h2>
            <div class="row">
                <?php foreach ($foodShop as $foodItem) : ?>
                <div class="col">
                    <div class="card text-dark" style="width: 25rem; height:45rem;">
                        <img src="<?php echo $foodItem->getImage() ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold"><?php echo $foodItem->name ?></h5>
                            <h6><?php echo $foodItem->getBrand() ?></h6>
                            <h6><span class="fw-bold">Gusto:</span> <?php echo $foodItem->getTaste() ?></h6>
                            <h6><?php echo $foodItem->getWeight() ?> Kg</h6>
                            <h6><em><?php echo $foodItem->getCategory() ?></em></h6>
                            <h6><span class="fw-bold">Prezzo:</span> <?php echo $foodItem->getPrice() ?>€</h6>
                            <p><?php echo $foodItem->getDescription() ?></p>
                        </div>    
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
        <!--  -->
        <div class="container p-4">
            <h2 class="fw-bold fs-1 py-2">Toys <i class="fa-solid fa-basketball fa-spin" style="color: crimson;"></i></h2>
            <div class="row">
                <?php foreach ($toysShop as $toysItem) : ?>
                    <div class="col">
                        <div class="card text-dark" style="width: 25rem; height:45rem;">
                            <img src="<?php echo $toysItem->getImage() ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?php echo $toysItem->name ?></h5>
                                <h6><?php echo $toysItem->getBrand() ?></h6>
                                <h6><span class="fw-bold">Materiali:</span> <?php echo $toysItem->getMaterial() ?></h6>
                                <h6><em><?php echo $toysItem->getCategory() ?></em></h6>
                                <h6><?php echo $toysItem->getDimensions() ?></h6>
                                <h6><span class="fw-bold">Prezzo:</span> <?php echo $toysItem->getPrice() ?>€</h6>
                                <p><?php echo $toysItem->getDescription() ?></p>
                            </div>    
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
            <!--  -->
            <div class="container p-4">
                <h2 class="fw-bold fs-1 py-2">Sanitary <i class="fa-solid fa-staff-snake fa-beat" style="color: #008040;"></i></h2>
                <div class="row">
                    <?php foreach ($sanitaryShop as $sanitaryItem) : ?>
                        <div class="col">
                            <div class="card text-dark" style="width: 25rem; height:45rem;"">
                            <img src="<?php echo $sanitaryItem->getImage() ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?php echo $sanitaryItem->name ?></h5>
                                <h6><?php echo $sanitaryItem->getBrand() ?></h6>
                                <h6><span class="fw-bold">Azione:</span> <?php echo $sanitaryItem->getAction() ?></h6>
                                <h6><span class="fw-bold">Durata:</span> <?php echo $sanitaryItem->getDuration() ?? '---' ?></h6>
                                <h6><em><?php echo $sanitaryItem->getCategory() ?></em></h6>
                                <h6><span class="fw-bold">Prezzo:</span> <?php echo $sanitaryItem->getPrice() ?>€</h6>
                                <p><?php echo $sanitaryItem->getDescription() ?></p>
                            </div>    
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
            
        </div>
        
    </body>
</html>