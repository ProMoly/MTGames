<div class="cabas" style="padding-left:20px;padding-right: 20px;">
    <H1>CABÀS</H1>
    <a href="index.php?accio=buidar"><i id="bin" class="fa fa-trash" style="height:15px;width:15px;float:right;"></i><br/></a>
    <ul>
        <?php
            $contador = 0;
            $array_codigos = array();
            foreach($_SESSION['cabas'] as $key => $value):
                array_push($array_codigos,$key);
            endforeach;
            foreach ($_SESSION['cabas'] as $prod):

            ?>
            <li class="col_responsive_cabas">
                <div class="product_cabas" id="prod_<?php echo $prod['ProducteID'] ?>" style="width:100%;">
                    <div id="<?php echo $array_codigos[$contador] ?>" class="cabasdel">-</div>

                    <div class="botonimg"><img src="img/<?php echo $prod['Imatge'] ?>" style="width:30%; float:left;padding:4px;"</div>
                    <div class="title" style="float:right;padding:10px;font-size:13px;padding-bottom:3px;font-weight: bold; color:#333;text-align:center; width: 70%;"><?php echo $prod['Nom'] ?> </div>
                    <div class="price" style="float:right;color:#006600;padding:10px;padding-top:0px;font-size:13px;font-weight: bold;text-align:center; width: 70%;">Precio: <?php echo $prod['Preu'] ?> € </div>
                    <div class="quantity" style="font-weight: bold;text-align: center;"><?php echo $prod['q']?></div>
                    <div style="clear: both;"></div>
                    <div class="botones" >
                        <div id="<?php echo $array_codigos[$contador] ?>" class="cabasadd">+</div>
                        <div id="<?php echo $array_codigos[$contador] ?>" class="cabasbin" >BORRAR</div>
                    </div>
                </div >
            </li>
        <?php
                $contador++;
            endforeach;
            $sum = 0;
            foreach ($_SESSION['cabas'] as $prod):
                    $preu = $prod['Preu']*$prod['q'];
                    $sum = $sum + $preu;
            endforeach;
        ?>
        <div style="clear: both;"></div>

        <div class="preuTotal" style="float:right;padding:10px;color:red;font-weight: bold;">Preu total: <?php echo $sum; ?> €</div>
        <div style="clear: both;"></div>
        <?php if(isset($pagCabas)){ ?>
            <div class="submit_cart" id="<?php $_SESSION['user_id'] ?>" style="padding:10px;width:100%;background-color:#006600;text-align: center;font-size: 20px;font-weight: bold;"><a href="index.php?accio=desar_comanda" style="font-weight:lighter;color:white;">Pagar</a></div>
        <?php }else{ ?>
            <div class="go_cart" id="<?php $_SESSION['user_id'] ?>" style="margin-top:10px;padding:15px;width:auto;background-color:#006600;text-align: center;font-size: 20px;font-weight: bold;float:right;"><a href="index.php?accio=llist" style="font-weight:lighter;color:white;">Anar al cabàs</a></div>
        <?php } ?>

    </ul><div style="clear: both;"></div>
</div>

<script>
    $(document).ready(function(){
        $('.cabasbin').click(function (event) {
            $.get('index.php?accio=delete_item_cabas&idbin='+this.id);
            location.reload();
        });

        $('.cabasadd').click(function (event) {
            $.get('index.php?accio=add_item_cabas&idbin='+this.id);
           location.reload();
        });

        $('.cabasdel').click(function (event) {
            $.get('index.php?accio=del_item_cabas&idbin='+this.id);
            location.reload();
        });


    });
</script>