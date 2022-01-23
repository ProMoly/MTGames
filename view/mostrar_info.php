
<div class="info">
    <?php foreach ($producte as $inf): ?>
    <div class="product-info" style="width:auto; height:auto; align-content: center;">
        <div class="botonimg" ><img src="img/<?php echo $inf['Imatge'] ?>" style="width:30%; float:left;"></div>
        <div class="informacio" style=" padding-left: 20px; padding-top: 20px; width:70%; float:left;" >
            <div class="title" style="font-size:13px;padding-bottom: 15px;font-weight: bold; color:#333;text-align:left;"><?php echo $inf['Nom'] ?> </div>
            <div class="descripcio" id="desc_<?php echo $inf['ProducteID'] ?>" style="padding-bottom: 35px; text-align: left;"><?php echo $inf['Descripcio'] ?> </div>
        </div><div style="clear: both;"></div>
        <div class="price" style="color:#006600;padding:10px;padding-top:5px;vertical-align: text-bottom ;font-size:13px;font-weight: bold;text-align:right;">Precio: <?php echo $inf['Preu'] ?> € </div>
        <div class="button_add" id="<?php echo $inf['ProducteID'] ?>" style="vertical-align: text-bottom;">ADD TO CART </div>

    </div>
    <?php endforeach; ?>
</div>

<script>
    $(document).ready(function(){
        $('.button_add').click(function (event) {
           var idp = event.currentTarget.id;
           $('.cabas').load('index.php?accio=cabas&prodid='+idp, function () {
               console.log("load complete");
           }).fadeIn(1500);
        });
    });
</script>

