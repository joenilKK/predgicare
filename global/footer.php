<?php
    $uri = $_SERVER['REQUEST_URI'];
    if($uri == '/'){
        $url = 'home';
    }else{
        $url =  trim($uri, "/");
    }
?>
    </div>
    <div class="container-fluid g-0 footer-con">
        <footer class="container pt-3 pb-3">
            ©<?= date('Y')?> Alrights Reserved.
        </footer>
    </div>
        <script type="text/javascript" src="//code.jquery.com/jquery-3.6.1.min.js" defer></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" defer></script>  
        <script type="text/javascript" src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" defer></script>
        <script type="text/javascript" src="//cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js" defer></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/toastify-js" defer></script>
        <script type="text/javascript" src="//markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js" defer></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/chart.js" defer></script>
        <script type="text/javascript" src="../assets/js/functions.js" defer></script>
        <script type="text/javascript" src="../pages/<?= $url?>/function.js" defer></script>
    </body>
</html>