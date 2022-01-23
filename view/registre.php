<div class="formulario">
    <?php if($message == "success"){ ?>
        <div id="message" style="text-align: center;">
            <br>Alta realizada correctamente!<br><br>
            Moltes gràcies.<br><br>
            <a href="index.php">Tornar a l'inici</a>
        </div>

    <?php }else{ ?>
        <header class="fancy">
            <h3>Registre: </h3>
        </header>
        <p> Si us plau facilita'ns les teves dades </p>
        <div id="formDiv">
            <form id="form" method="post" action="index.php?accio=register" >
                <div class="row">
                    <div class="col">
                        <input class="<?php if(in_array("Nom",$error,false)){ echo 'error-class'; }else{ echo 'correct-class'; } ?>" type="text" name="nom"  value="<?php echo $nom; ?>" required placeholder="Nom complet"/></br></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input class="<?php if(in_array("Email",$error,false)){ echo 'error-class'; }else{ echo 'correct-class'; } ?>" type="email" name="email"  value="<?php echo $correu; ?>" required placeholder="Correu electrònic"/></br></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input class="<?php if(in_array("Password",$error,false)){ echo 'error-class'; }else{ echo 'correct-class'; } ?>" type="password" name="clau" value="<?php echo $pssw; ?>" placeholder="Password"/></br></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input class="<?php if(in_array("Adreca",$error,false)){ echo 'error-class'; }else{ echo 'correct-class'; } ?>" type="text" name="adreca" maxlength="30"  value="<?php echo $adress; ?>" required placeholder="Adreça"/></br></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input class="<?php if(in_array("Poblacio",$error,false)){ echo 'error-class'; }else{ echo 'correct-class'; } ?>" type="text" name="poblacio" maxlength="30"  value="<?php echo $poblacio; ?>" required placeholder="Població"/></br></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input class="<?php if(in_array("CP",$error,false)){ echo 'error-class'; }else{ echo 'correct-class'; } ?>" type="text" name="cp" value="<?php echo $cp; ?>" maxlength="5" required placeholder="Codi Postal"/></br></br>
                    </div>
                </div>
                <input class="button" type="submit" value="Registrar-me" />
            </form>
            <div style="clear: both;"></div>
        </div>
        <div class="missatge-error" style="color:red;">
            <?php echo $err; ?>
        </div>
    <?php echo $message; } ?>
</div>

