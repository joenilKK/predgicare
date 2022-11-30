<div id="<?= $url?>" class="container-fluid g-0">
    <div class="container-fluid g-0 dark-pink"></div>
    <div class="container pt-4 pb-4">
        <div class="row">
            <div class="col-4">
                <h3 class="">Register Patients</h3>
                <form method="POST" class="regisert-form needs-validation">
                    <div class="form-col">
                        <div class="row pt-2 pb-2">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control u_fname" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Middle Name</label>
                                <input type="text" class="form-control u_mname" required>
                                
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control u_lname" required>
                            </div>
                        </div>
                        <div class="row pt-2 pb-2 mt-3">
                            <div class="container" style="display:flex;gap:10px">
                                <div class="col mb-3">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control u_BOD" required>
                                </div>
                                <div class="col-3 mb-3">
                                    <label class="form-label">Age</label>
                                    <input type="number" class="form-control u_age" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">FSN</label>
                                <input type="number" class="form-control u_fsn" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Name of Husband</label>
                                <input type="text" class="form-control u_husband" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Contact Number</label>
                                <input type="number" class="form-control u_number" required>
                            </div>
                        </div>
                        <div class="row pt-2 pb-2 mt-3">
                            <div class="mb-3">
                                <label class="form-label">Area</label>
                                <select class="form-select u_area" aria-label="Default select example" required>
                                    <option selected>Area 51</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn ">Register</button>
                            </div>
                            
                        </div>  
                    </div>
                </form>
            </div>
            <div class="col-8 ">
                <h3 class="">Newly Added Patients</h3>
                <table id="new-added-table" class="table hover table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Patient Number</th>
                            <th>Name</th>
                            <th>FSN</th>
                            <th>Date Added</th>
                        </tr>
                    </thead> 
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>