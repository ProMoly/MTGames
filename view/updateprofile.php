<div class="container bootstrap snippets bootdey" style="margin-top:10px;padding:20px;">
    <h1 class="text-primary">Edita el meu compte</h1>
    <hr>

    <div class="row">
        <!-- left column -->
        <div class="col-md-3">
            <div class="text-center">
                <form action="index.php?accio=updatefoto" method="post" enctype="multipart/form-data">

                    <img src="fitxers/<?php echo $user['ImatgePerfil'] ?>" style="height: auto;" class="avatar" alt="<?php echo $user['Nom'] ?>">
                    <h6>Pujar una foto diferent...</h6>

                    <input type="file" name="profile_image">
                    <input type="submit" value="Pujar foto" >
                </form>
            </div>
        </div>

        <!-- edit form column -->
        <div class="col-md-9 personal-info">
            <h3>Informació personal</h3>
            <form  action="index.php?accio=modificar" method="post" class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Nom:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" name="nom" value="<?php echo $user['Nom'] ?>">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="email" name="email" value="<?php echo $user['Mail'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Adreça</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" name="adreca" value="<?php echo $user['Adreça'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Població:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="poblacio" type="text" value="<?php echo $user['Poblacio'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Codi Postal:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" name="cp" maxlength="5" value="<?php echo $user['CodiPostal'] ?>">
                    </div>
                </div>
                <br/>
                <br/>
                <div class="submit">
                    <input class="button" type="submit" value="Actualitzar Perfil">
                </div>
            </form>
        </div>
    </div>
</div>
<hr>