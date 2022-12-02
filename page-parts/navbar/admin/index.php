<?php
    $uri = $_SERVER['REQUEST_URI'];
    if($uri == '/'){
        $url = 'home';
        $class = 'container-fluid g-0 home' ;
    }else{
        $url =  trim($uri, "/");
        $class = 'container container-lg '.trim($uri, "/");
    }
    $navItem = ['home','add midwife','patient records','users','archive','reports','activity log'];
?>

<nav class="navbar navbar-expand-lg navbar-bg midwife" aria-label="Eighth navbar example">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../../../images/icon.text.horizontal.png" height="50px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php for($i=0;$i<count($navItem);$i++){?>
                    <?php if(strtolower($navItem[$i]) == str_replace("-", " ",$url)){?>
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="/<?= str_replace(" ", "-", $navItem[$i]) ?>"><?=  ucwords($navItem[$i])?></a>
                        </li>
                    <?php }elseif(strtolower($navItem[$i]) == 'home'){?> 
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/"><?=  ucwords($navItem[$i])?></a>
                        </li>
                    <?php }else{?> 
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/<?= str_replace(" ", "-", $navItem[$i]) ?>"><?=  ucwords($navItem[$i])?></a>
                        </li>
                    <?php }?>
                <?php }?>
            </ul>
        </div>
    </div>
</nav>