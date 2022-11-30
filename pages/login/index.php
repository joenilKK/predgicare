<?php

?>
<div class="row g-0">
    <div class="col col-8">
        <img src="../../images/loginPromotion.png" class="img-fluid img-thumbnail" alt="...">
    </div>
    <div class="col col-4 col-8-md login-form-wrapper">
        <div class="login-image">
            <img src="../../images/loginLogo.svg" class="rounded mx-auto d-block" alt="...">
            <img src="../../images/PredgiCare.svg" class="rounded mx-auto d-block" alt="...">
        </div>
        <div class="login-form">
            <h3 class="text-center">Log in to continue</h3>
            <form id="login-form" method="POST">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control form-control-lg username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control form-control-lg password" >
                </div>
                <div class="d-grid gap-2">
                    <button 
                        type="submit" 
                        class="btn btn-primary btn-lg btn-submit"
                    >
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>