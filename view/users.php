<?php $title= 'Fichier users'; ?>
<?php ob_start(); ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <h1 class="log2">Tableau de bord</h1>
    <div class="alignement">
            <h2>Commande en cours :</h2>
            <div>
                <ul>
                    <?php foreach( $com as $com ): ?>
                        <li>
                            <?php echo "Commande n°  " ; echo $com['id_commande']?>
                            <form method="post" action="/TAP/index.php/users?id_commande=<?php echo $com['id_commande'];?>"></form>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        <form method="post" action="/TAP/index.php/ajout_commande">
            <input type="submit" value="Ajouter une commande">
        </form>
        <form method="post" action="/TAP/index.php/Liste_commande">
            <input type="submit" value="Liste des commandes">
        </form>
    </div>

    <div id="map" class="alignement" style="height: 400px; width:630px; position: relative; outline: none;" tabindex="0"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin="">

    </script>
    <script>
        var map = L.map('map').setView([-21.275800, 165.458000],8);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        <?php foreach( $data as $post ): ?>
            L.marker([<?php echo $post["latitude"]?>,<?php echo $post["longitude"]?>]).addTo(map)
                .bindPopup("<?php echo $post["immatriculation"]?>");

        <?php endforeach ?>

    </script>
    <div class="alignement">
        <h1>Véhicule en livraison :</h1>
        <ul>
            <?php foreach( $posts as $post ): ?>
                <li>
                    <?php echo $post['immatriculation']; echo '-->'; echo $post['modele']; echo "<button>positon</button>" ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
    <script>
        let position= document.querySelector('#position');
        position.addEventListener('change', function (evt)){
            .bindPopup("458321NC") .openPopup();
        }
    </script>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>