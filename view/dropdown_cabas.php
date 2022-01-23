<div class="dropdown_cabas" style="margin-top:10px;">

   <div>
        <?php foreach ($_SESSION['cabas'] as $prod):
                ?>
                <div style="padding:10px;">

                    <div class="" id="prod_<?php echo $prod['ProducteID'] ?>" >
                        <div class="cabas-product-image" style ="width: 30px; float:left;">
                            <img src="img/<?php echo $prod['Imatge'] ?>" style="width:100%;">
                        </div>
                        <div class="cabas-product-content" style="width:210px;float:left;font-size:14px;padding-left:5px;">
                            <strong><?php echo $prod['Nom'] ?></strong><br/>
                            <span style="font-size: 12px;"><?php echo $prod['Preu'] ?> € x <?php echo $prod['q']?> | <strong style="color:#006600;"> <?php echo $prod['Preu']*$prod['q']?> € </strong> </span>
                        </div>

                    </div>
                    <div style="clear:both;">
                    </div>
                </div>
        <?php endforeach;
        $sum = 0;
        foreach ($_SESSION['cabas'] as $prod):
            $preu = $prod['Preu']*$prod['q'];
            $sum = $sum + $preu;
        endforeach;
        ?>
        <!--
        <a href="index.php?accio=buidar"><i id="bin" class="fa fa-trash" style="height:15px;width:15px;"></i><br/></a>

        <p1>Preu total: <?php echo $sum; ?></p1>
        <div class="submit_cart" id="<?php $_SESSION['user_id'] ?>" >PAGA</div>-->
       <div class="total" >  <?php echo $sum; ?>€ </div>
       <a href="index.php?accio=llist" id="#ircarrito">
          Ir carrito
       </a>
    </div><div style="clear: both;"></div>
</div>


