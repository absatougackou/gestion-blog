<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="#">GESTION DE BLOGS</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <?php if(is_connect()):?>
            <li class="nav-item active">
                <a class="nav-link" href="<?php if(is_admin()){echo WEB_ROOT."?controller=security&page=accueil.admin";} if(is_lecteur()){echo WEB_ROOT."?controller=security&page=accueil.lecteur";}else{echo WEB_ROOT."?controller=security&page=accueil.redacteur";}?>">Accueil <span class="sr-only">(current)</span></a>
            </li>
        <?php endif ?>
        <?php if(is_admin()):?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo WEB_ROOT."?controller=security&page=lister.utilisateur"?>">Lister utilisateurs</a>
            </li>
        <?php endif ?>
        </ul>
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <?php if(!is_connect()):?>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo WEB_ROOT."?controller=security&page=inscription"?>">Inscription <span class="sr-only">(current)</span></a>
            </li>
        <?php endif ?>
        <?php if(!is_connect()):?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo WEB_ROOT."?controller=security&page=connexion"?>">Connexion</a>
            </li>
        <?php endif ?>
        <?php if(is_connect()):?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo WEB_ROOT."?controller=security&page=deconnexion"?>">Déconnexion</a>
            </li>
        <?php endif ?>
        </ul>
    </div>
</nav>