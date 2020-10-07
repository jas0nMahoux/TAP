<?php $title= 'Fichier users'; ?>
<?php ob_start(); ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <h1 class="log2">Tableau de bord</h1>
    <div class="alignement">
        <form method="post" action="/TAP/index.php/ajout_commande">
            <h2>Commande</h2>
            <input type="submit" value="Ajouter une commande">
        </form>
        <form method="post" action="/TAP/index.php/Liste_commande">
            <input type="submit" value="Liste des commandes">
        </form>
    </div>

    <div id="map" class="alignement" style="height: 270px; width:655px; position: relative; outline: none;" tabindex="0"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin="">

    </script>
    <script>
        var map = L.map('map').setView([-21.275800, 165.458000],8);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-22.275800, 166.458000]).addTo(map)
            .bindPopup()
            .openPopup();
    </script>
    <div class="alignement">
        <h1>List of vehicule</h1>
        <ul>
            <?php foreach( $posts as $post ): ?>
                <li>
                    <?php echo $post['immatriculation']; echo '-->'; echo $post['modele'] ?>
                    <form method="post" action="/TAP/index.php/users?id_supp=<?php echo $post['immatriculation'];?>"></form>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>