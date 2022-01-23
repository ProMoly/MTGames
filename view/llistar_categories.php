<!-- // views/llistar_categories.php -->

<div class = "categories">
        <?php foreach ($categories as $categoria): ?>
        <div class="col_responsive ">
            <div class="category"  id="cat_<?php echo htmlentities($categoria["CategoriaID"], ENT_QUOTES | ENT_HTML5, 'UTF-8');?>">
                <img class="catimg"  src="img/<?php echo htmlentities($categoria["Imatge"], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>">
                <div class="desc"><?php echo htmlentities($categoria["NomCategoria"], ENT_QUOTES | ENT_HTML5, 'UTF-8');?></div>
            </div>
        </div>
        <?php endforeach; ?>
     <div style="clear: both;"></div>

</div>
<hr class="liniadivisoria">
<div class="product_list"></div>

<script>
       $(document).ready(function(){
            $('.category').click(function (event) {
                var idc = event.currentTarget.id;
                $(".category").removeClass("marked");
                $('#'+idc).addClass("marked");
                var newidc = idc.split('_')[1];
                $('.product_list').load('index.php?accio=llistar-productes&catid='+newidc, function () {
                     console.log("load complete..");
                 }).fadeIn(1500);
            });
       });
</script>