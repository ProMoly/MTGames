<!-- // views/llistar-productes.php -->
<div class="productes" style="margin-top:10px;">
    <ul>
        <?php foreach ($productes as $producte): ?>
            <li class="col_responsive">
                <div class="product" >
                    <div class="botonimg" id="prod_<?php echo $producte['ProducteID']?>" ><img src="img/<?php echo $producte['Imatge'] ?>" style="width:100%;padding:10px;"</div>
                    <div class="title" style="padding:10px;font-size:13px;padding-bottom:3px;font-weight: bold; color:#333;text-align:center;"><?php echo $producte['Nom'] ?> </div>
                    <div class="descripcio" id="desc_<?php echo $producte['ProducteID'] ?>" style="padding-bottom: 5px;"></div>
                    <div class="price" style="color:#006600;padding:10px;padding-top:0px;font-size:13px;font-weight: bold;text-align:center;">Precio: <?php echo $producte['Preu'] ?> € </div>
                </div>
                <div class="button_add" id="<?php echo $producte['ProducteID'] ?>">ADD TO CART </div>
            </li>
        <?php endforeach; ?>
    </ul><div style="clear: both;"></div>
</div>
<hr class="liniadivisoria">

<script>
    $(document).ready(function(){
        $('.button_add').click(function (event) {
            var idp = event.currentTarget.id;
            $('.cabas').load('index.php?accio=cabas&prodid='+idp, function () {
                console.log("load complete");
            }).fadeIn(1500);
        });
        $('.botonimg').click(function (event) {
            var idp = event.currentTarget.id;
            $(".product").hide();
           //$(".product").removeClass("prodMarked");
            $(".descripcio").hide();
            $('#'+idp).show();
            //$('#'+idp).addClass("prodMarked");
            var newidp = idp.split('_')[1];
            var descid = "desc_" + newidp;
            //$('#'+descid).hide();
            $('.productes').load('index.php?accio=mostrar-info&prodid='+newidp, function () {
                console.log("load complete..");
            }).fadeIn(1500);
        });
    });
</script>