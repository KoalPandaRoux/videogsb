<h2>Oups !</h2>
<p>Vous n'avez pas accès à cette section.</p>
<p>Vous allez être redirigé dans quelques secondes...</p>

<?php

//Le temps de connexion avant redirection (en seconde)
$timeConnect = 3;
$urlConnect = 'url=http://localhost/videogsb/index.php';

header("Refresh:$timeConnect; $urlConnect");


