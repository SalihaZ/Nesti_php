<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
  
  
      <div class="collapse navbar-collapse justify-content-around" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
        
          <li class="nav-item menu <?= ($loc=='recipe')? 'active':''; ?> px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="<?=BASE_URL ?>recipe"> <button id="recipe"><i class="fas fa-clipboard-list"></i> Recettes</button> 
              
            </a>
          </li>
          <li class="nav-item menu <?= ($loc=='article')? 'active':''; ?> px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="article"> <button> <i class="fas fa-utensils"></i> Articles</button> </a>
          </li>
          <li class="nav-item menu <?= ($loc=='user')? 'active':''; ?>px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="<?=BASE_URL ?>user"> <button> <i class="fas fa-users"></i> Utilisateurs</button> </a>
          </li>
          <li class="nav-item menu <?= ($loc=='statistic')? 'active':''; ?>px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="<?=BASE_URL ?>statistic"> <button class="navbar-toggler" type="button"data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><i class="far fa-chart-bar"></i> Statistiques</button> </a>
          </li>
          <li class="nav-item  <?= ($loc=='statistic')? 'active':''; ?>px-lg-4">
            <a class=" session  text-expanded" href="<?=BASE_URL ?>profile"> <i class="fas fa-user-circle"></i> Profile </a>
          </li>
          <li class="nav-item <?= ($loc=='deconnection')? 'active':''; ?>px-lg-4">
            <a class=" session  text-expanded" href="<?=BASE_URL ?>logout"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
            <i class="far fa-sign-out"></i>
          </li>
          <li class="nav-item <?= ($loc=='deconnection')? 'active':''; ?>px-lg-4">
            <a class=" session  text-expanded" href="<?=BASE_URL ?>connexion"><i class="fas fa-sign-out-alt"></i> Connexion</a>
            <i class="far fa-sign-out"></i>
          </li>
        </ul>
      </div>
    
  </nav>
  