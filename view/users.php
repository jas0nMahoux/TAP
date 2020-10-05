<?php $title= 'Fichier users'; ?>
<?php ob_start(); ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <h1 class="log">Tableau de bord</h1>
    <div class="log">
        <form method="post" action="/TAP/index.php/Ajout_commande.php">
            <h2>Commande</h2>
            <input type="submit" value="Ajouter une commande">
        </form>
        <form method="post" action="/TAP/index.php/Liste_commande.php">
            <input type="submit" value="Liste des commande">
        </form>
    </div>


    <div id="map" class="log" class="map map-home leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" style="height: 732px; width:732px; position: relative; outline: none;" tabindex="0"><div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);"><div class="leaflet-pane leaflet-tile-pane"><div class="leaflet-layer " style="z-index: 1; opacity: 1;"><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(-71px, -59px, 0px) scale(1);"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/15/16370/10896.png" class="leaflet-tile leaflet-tile-loaded" style="width: 200px; height: 200px; transform: translate3d(552px, 10px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/15/16369/10896.png" class="leaflet-tile leaflet-tile-loaded" style="width: 200px; height: 200px; transform: translate3d(296px, 10px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/15/16369/10897.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(296px, 266px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/15/16370/10897.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(552px, 266px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/15/16368/10896.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(40px, 10px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/15/16371/10896.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(808px, 10px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/15/16368/10897.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(40px, 266px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/15/16371/10897.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(808px, 266px, 0px); opacity: 1;"></div></div></div><div class="leaflet-pane leaflet-shadow-pane"><img src="https://unpkg.com/leaflet@1.7.1/dist/images/marker-shadow.png" class="leaflet-marker-shadow leaflet-zoom-animated" alt="" style="margin-left: -12px; margin-top: -41px; width: 41px; height: 41px; transform: translate3d(360px, 129px, 0px);"></div><div class="leaflet-pane leaflet-overlay-pane"></div><div class="leaflet-pane leaflet-marker-pane"><img src="https://unpkg.com/leaflet@1.7.1/dist/images/marker-icon.png" class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt="" tabindex="0" style="margin-left: -12px; margin-top: -41px; width: 25px; height: 41px; transform: translate3d(360px, 129px, 0px); z-index: 129;"></div><div class="leaflet-pane leaflet-tooltip-pane"></div><div class="leaflet-pane leaflet-popup-pane"><div class="leaflet-popup  leaflet-zoom-animated" style="opacity: 1; transform: translate3d(361px, 95px, 0px); bottom: -7px; left: -78px;"><div class="leaflet-popup-content-wrapper"><div class="leaflet-popup-content" style="width: 116px;">A pretty CSS3 popup.<br>Easily customizable.</div></div><div class="leaflet-popup-tip-container"><div class="leaflet-popup-tip"></div></div><a class="leaflet-popup-close-button" href="#close">×</a></div></div><div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(4.19067e+06px, 2.78958e+06px, 0px) scale(16384);"></div></div><div class="leaflet-control-container"><div class="leaflet-top leaflet-left"><div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out">−</a></div></div><div class="leaflet-top leaflet-right"></div><div class="leaflet-bottom leaflet-left"></div><div class="leaflet-bottom leaflet-right"><div class="leaflet-control-attribution leaflet-control"><a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> | © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors</div></div></div></div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin="">

    </script>
    <script>
        var map = L.map('map').setView([-22.275800, 166.458000],15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-22.275800, 166.458000]).addTo(map)
            .bindPopup()
            .openPopup();
    </script>
    <div class="log">
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