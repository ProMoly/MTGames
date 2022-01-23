<?php if ($succ != "succ"){?>
<div class="formulario-login">
    <header clelass="fancy">
        <h3>Login: </h3>
    </header>
    <p>Introdueix les teves credencials: </p>
        <div id="formDiv">
            <form id="form" method="post" action="index.php?accio=login" >
                <?php if(!$succ){ ?>
                <div class="row">
                    <div class="col">
                        <input class="" type="email" name="correu"  value="" required placeholder="Correu electrònic"/></br></br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input class="" type="password" name="clau"  value="" required placeholder="Contrasenya"/></br></br>
                    </div>
                </div>
                <input class="button" type="submit" value="Entrar" />
            </form>
            <div style="clear: both;"></div>
        </div>
    <div class="missatge-error" style="color:red;">
        <?php echo $error; } ?>
    </div>
</div>
<?php } ?>