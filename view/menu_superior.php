<h1 class="titulo"><a href="index.php?accio=null" >MT Games</a></h1>

<div class = "topMenu">
    <ul>
        <li class="dropdown" id="cabas">
            <!-- <a href="index.php?accio=llist" class="boton"><img src="img/a7p6u-vh5y7-001.ico"></a>-->
            <a href="index.php?accio=llist" class="dropbtn"><img src="img/a7p6u-vh5y7-001.ico"></a>
            <div class="dropdown-cabas">
                <div id="cabas_content">
                    Carrito Vacio
                </div>
            </div>
        </li>

        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn"><img src="img/am6z2-a258k-001.ico"></a>
            <div class="dropdown-content">
                <a href="index.php?accio=perfil" id="micuenta">El meu compte</a>
                <a href="index.php?accio=historial" id="compres">Les meves compres</a>
                <a href="index.php?accio=logout" id="tanca">Tancar sessió</a>
            </div>
        </li>

        <li class="dropdown">
            <aside class="search-button">
                <div class="container-search">
                    <span class="lupa">
                        <i class="fa fa-search" style="font-size:30px;color:#EDEDED;"></i>
                     </span>
                    <input type="search" id="search" placeholder="Que vols buscar?"/>
                </div>
            </aside>
        </li>
    </ul>
</div>


<script>
    $(document).ready(function(){

        $('#cabas').hover(function (event) {
            console.log($("#cabas_content").html('content'));
            $('#cabas_content').load('index.php?accio=getcabas', function () {
                console.log("load complete..");
            }).fadeIn(1500); //document.querySelector("#cabas_content").innerHTML='Contenido Carrito';
        });

        $('#search').on('keypress',function (event) {
            if(event.which == 13) {
                var query=this.value;
                location.href='index.php?accio=cerca&query='+query;
            }
        });

    });
</script>