<div class="historial" style="padding:20px;">
    <H1>HISTORIAL DE COMANDES</H1>
    <?php foreach ($historial as $comanda): ?>
    <div class="resum_comanda" style="padding-top:20px;">
        <div class="data_creacio"><?php echo $comanda['data_creacio'] ?></div>
        <table style="margin-top:10px;padding:10px;width:100%;border:1px solid black!important;">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Preu Unitat</th>
                <th>Preu Total</th>
            </tr>
            <?php foreach ($comanda[0] as $productes): ?>
                <tr style="text-align: center;padding-top:5px;">
                    <td><?php echo $productes["nom_producte"] ?></td>
                    <td><?php echo $productes["quantitat"] ?></td>
                    <td><?php echo $productes["preu_unitari"] ?> €</td>
                    <td><?php echo $productes["preu_total"] ?> €</td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td style="font-weight: bold; padding: 5px; color:red;float:right;">TOTAL: <?php echo $comanda['import_total']?> €</td>
            </tr>
        </table>
        <br/><br/>
    </div>
    <?php endforeach; ?>
</div>
