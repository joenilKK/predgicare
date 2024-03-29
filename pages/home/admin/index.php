<?php


?>
<div class="container-fluid g-0 has-pink">
    <div class="container-fluid g-0 dark-pink"></div>
    <div class="container pt-4 pb-4">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-5">
                        <div class="card text-white bg-info">
                            <div class="card-body">
                                <h5 class="card-title">Hello Admin</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Good Morning</h6>
                            </div>
                        </div>
                    </div>  
                    <div class="col-5">
                        <div class="poplution-wrapper">
                            <div class="upper">
                                <div class="img-wrapper"><img src="../../../images/pregnant.svg"></div>
                                <h4>PREGNANT WOMEN POPULATION</h4>
                                <h2>10,244</h2>
                            </div>
                            <div class="lower">
                                <div class="pill-increase"><img src='../../../images/pregnant-rising.svg'><span class="increase-rate">2.65%</span></div>
                                <small>since last month</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="graph-wrapper">
                            <h2>PREGNANT WOMEN POPULATIONS</h2>
                            <canvas class="reporting"></canvas>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="activity-log-wrapper">
                            <h2>ACTIVITY LOG</h2>
                            <table id="activity-log" class="table hover table-striped" style="width:100%">
                            
                                <thead>
                                    <tr>
                                        <th>Activity</th>
                                        <th>User</th>
                                        <th>Added</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-8">
                        <div class="activity-log-wrapper">
                            <h2>LATEST REPORT SUBMISSION</h2>
                            <table id="latest-report" class="table hover table-striped" style="width:100%">
                            
                                <thead>
                                    <tr>
                                        <th>Activity</th>
                                        <th>User</th>
                                        <th>Added</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="activity-log-wrapper">
                            <h2>RECENT USERS</h2>
                            <table id="recent-user" class="table hover table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Type</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>