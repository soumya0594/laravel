
<?php $__env->startSection('content'); ?>


<div class="container text-center mt-3 mx-auto header-only rounded" style="font-family: consolas;" >
    <h5 class="form-header" >Government of West Bengal<br>Backward Classes Welfare Department<br>Application form for SC/ST/OBC Certificate</h5>
</div>
<form class="container">
    <div class="row mt-3">
        <p class="mb-1 point-name">1. Application to:</p>
        <div class="col-md-3">
            <div class="form-group">
                <label for="state">State: <span class="star">*</span></label>
                <input class="form-control-plaintext font-weight-bolder" id="state" value="WEST BENGAL" readonly="" name="state">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="district">District: <span class="star">*</span></label>
                <select id="district" class="form-control">
                    <option value="" disabled selected>- SELECT FROM THE LIST -</option>
                    <?php $__currentLoopData = $district; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($dataValue->id); ?>"><?php echo e($dataValue->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="subDivision">Sub-division: <span class="star">*</span></label>
                <select id="subDivision" class="form-control">

                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <div class="radio" id="municipality">
                </div>
                <select id="disabledSelect" class="form-control">
                </select>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3 my-auto">
            <div class="form-group radio">
                <p class="mb-1 point-name">2. Applying for:</p>
            </div>
        </div>
        <div class="col-md-3 my-auto">
            <div class="form-group">
                <div class="radio" id="caste">
                    <label><input type="radio" name="casterad" value="SC" checked> SC </label>
                    <label><input type="radio" name="casterad" value="ST"> ST </label>
                    <label><input type="radio" name="casterad" value="OBC"> OBC </label>
                </div>
            </div>
        </div>
        <div class="col-md-3" id="appendobcsub" style="display: none"></div>
        <div class="col-md-3">
            <div class="form-group">
                <label> Caste/Tribe/Community: <span class="star">*</span></label>
                <select id="subCaste" name="subCaste" class="form-control">
                    <option value="">- SELECT FROM THE LIST-</option>
                    <?php $__currentLoopData = $caste; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $casteValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($casteValue->id); ?>"><?php echo e($casteValue->c_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label class="point-name">3. Name: <span class="star">*</span></label>
                <input type="text" class="form-control" id="name" value="WEST BENGAL" placeholder="Enter your name" name="name">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="point-name">4. Father's name: <span class="star">*</span></label>
                <input type="text" class="form-control" id="father" placeholder="Enter your father's name" name="father">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="point-name">5. Mobile No.:</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" name="phone">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="point-name">6. Email ID:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
            </div>
        </div>
    </div>
    <div class="row pt-3">
        <p class="point-name mb-1">7. Documents Required ( At least One): <span class="star">*</span></p>
        <div class="col-md-3">
            <div class="form-group">
                <label>(a) Epic No</label>
                <input type="text" class="form-control" id="father" placeholder="Enter your father's name" name="father">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>(b) Aadhaar No.: </label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" name="phone">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>(c) Khadya sathi No.: </label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <p class="point-name mb-1">8.Date of Birth: <span class="star">*</span></label></p>
        <div class="col-md-3">
            <div class="form-group">
                <label>(a) Date of Birth:  <span class="star">*</span></label>
                <input type="text" readonly class="form-control date" id="dob" placeholder="Enter your father's name" name="dob">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>(b) Place of Birth: <span class="star">* </span>  </label><label>State</label>
                <select id="birthState" name="birthState" class="form-control">
                    <option value="">-- SELECT STATE FROM THE LIST--</option>
                    <?php $__currentLoopData = $state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stateValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo ($stateValue->id==8)?'selected':'';?> value="<?php echo e($stateValue->id); ?>"><?php echo e($stateValue->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>District: </label>
                <select id="birthDistrict" name="birthDistrict" class="form-control">
                    <option value="">- SELECT DISTRICT FROM THE LIST-</option>
                     <?php $__currentLoopData = $district; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($dataValue->id); ?>"><?php echo e($dataValue->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Police Station: </label>
                <select id="birthPoliceStation" name="birthPoliceStation" class="form-control">
                    <option value="">- SELECT POLICE STATION FROM THE LIST-</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Village/City </label>
                <select id="birthVillage" name="birthVillage" class="form-control">
                    <option>Disabled select</option>
                </select>
            </div>
        </div>
    </div>
    <hr>
    <div class="row mt-2">
        <p class="point-name mb-1">9. Address:</p>
        <p class="mb-1 same-point-name">a) Present Address for last 6 months:</p>
        <div class="col-md-3">
            <div class="form-group">
                <label>C/O (Name): <span class="star">*</span></label>
                <input type="text" class="form-control" id="father" placeholder="Enter your father's name" name="father">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="email">State: <span class="star">*</span></label>
                <input type="email" class="form-control" id="email" value="WEST BENGAL" readonly="" name="state">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="email">District: <span class="star">*</span></label>
                <select id="disabledSelect" class="form-control">
                    <option>Disabled select</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="email">Police Station: <span class="star">*</span></label>
                <select id="disabledSelect" class="form-control">
                    <option>Disabled select</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Ward/GP: <span class="star">*</span></label>
                <input type="text" class="form-control" id="" ame="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Vill/Para/House No./Road: <span class="star">*</span></label>
                <input type="text" class="form-control" id="" name="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Post Office: <span class="star">*</span></label>
                <input type="text" class="form-control" id="" name="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Pin Code : <span class="star">*</span></label>
                <input type="text" class="form-control" id="pin" name="pin">
            </div>
        </div>
        <hr class="mt-3">
        <p class="mb-1 same-point-name">b) Permanent Address:
            <span>Same as present?  </span>
            <label><input type="radio" name="optradio" checked> Yes </label>
            <label><input type="radio" name="optradio"> No </label>
        </p>

        <div class="col-md-3">
            <div class="form-group">
                <label>C/O (Name): <span class="star">*</span></label>
                <input type="text" class="form-control" id="father" placeholder="Enter your father's name" name="father">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="email">State: <span class="star">*</span></label>
                <input type="email" class="form-control" id="email" value="WEST BENGAL" readonly="" name="state">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="email">District: <span class="star">*</span></label>
                <select id="disabledSelect" class="form-control">
                    <option>Disabled select</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="email">Police Station: <span class="star">*</span></label>
                <select id="disabledSelect" class="form-control">
                    <option>Disabled select</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Ward/GP: <span class="star">*</span></label>
                <input type="text" class="form-control" id="" ame="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Vill/Para/House No./Road: <span class="star">*</span></label>
                <input type="text" class="form-control" id="" name="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Post Office: <span class="star">*</span></label>
                <input type="text" class="form-control" id="" name="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Pin Code : <span class="star">*</span></label>
                <input type="text" class="form-control" id="pin" name="pin">
            </div>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label class="point-name">10. Nationality:</label>
                <input type="text" class="form-control" id="nationality" value="INDIAN" readonly="" name="nationality">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="point-name">11. Religion: <span class="star">*</span></label>
                <select id="disabledSelect" class="form-control">
        <option>Disabled select</option>
    </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="point-name">12. Gender: <span class="star">*</span></label>
                <select id="disabledSelect" class="form-control">
        <option>Disabled select</option>
    </select>
            </div>
        </div>
    </div>
    <hr class="mt-3">
    <div class="row ">
        <p class="point-name mb-1"> 13. Blood relation (paternal side) details:
            <label><input type="radio" name="optradio" checked> Yes </label>
            <label><input type="radio" name="optradio"> No </label>
        </p>

        <div class="col-md-3">
            <div class="form-group">
                <label>a) Certificate holder's name: <span class="star">*</span></label>
                <input type="text" class="form-control" id="" name="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>b) Relation with applicant: <span class="star">*</span></label>
                <select id="disabledSelect" class="form-control">
        <option>Disabled select</option>
    </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>c) Certificate No: <span class="star">*</span></label>
                <input type="text" class="form-control" id="" name="">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>d) Date of issue: <span class="star">*</span></label>
                <input type="text" readonly class="form-control date" id="" name="">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>e) Issuing authority: <span class="star">*</span></label>
                <select id="disabledSelect" class="form-control">
        <option>Disabled select</option>
    </select>
            </div>
        </div>
    </div>
    <hr class="mt-3">
    <div class="row">
        <p class="point-name mb-1"> 14. Details of two(2) local referees:</p>

        <div class="col-md-3">
            <div class="form-group">
                <label>a) Name of Referee-I: <span class="star">*</span></label>
                <input type="text" class="form-control" id="" name="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>b) Address of Referee-I: <span class="star">*</span></label>
                <input type="text" class="form-control" id="" name="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>c) Name of Referee-II: <span class="star">*</span></label>
                <input type="text" class="form-control" id="" name="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>d) Address of Referee-II: <span class="star">*</span></label>
                <input type="text" class="form-control" id="" name="">
            </div>
        </div>
    </div>
    <hr>

    <div class="row">
        <p class="point-name mb-1"> 15. Whether the applicant or his family migrated from other State/Country?
            <label><input type="radio" name="optradio" checked> Yes </label>
            <label><input type="radio" name="optradio"> No </label>
        </p>
        <div class="col-md-3">
            <div class="form-group">
                <label>a) Migration Certificate No:</label>
                <input type="text" class="form-control" id="" name="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label> Date of issue: </label>
                <input type="text" readonly class="form-control date" id="" name="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label> Country:</label>
                <input type="text" class="form-control" id="" name="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label> State:</label>
                <input type="text" class="form-control" id="" name="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>District:</label>
                <input type="text" class="form-control" id="" name="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Police Station:</label>
                <input type="text" class="form-control" id="" name="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Village/Ward</label>
                <input type="text" class="form-control" id="" name="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Year of migration</label>
                <input type="text" class="form-control" id="" name="">
            </div>
        </div>
    </div>
    <hr>

    <div class="text-center pt-3 mb-5">
        <button class="btn btn-info mx-3" type="button" data-toggle="modal" data-target="#view"><i class="fas fa-eye px-3"></i>View</button>
        <button class="btn btn-success mx-3"><i class="fas fa-save px-3"></i>Save</button>
        <button class="btn btn-danger mx-3" type="reset"><i class="fas fa-times px-3"></i>Clear</button>
    </div>
</form>

   
    <div class="modal fade" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">
                        Government of West Bengal Backward Classes Welfare Department Application form for SC/ST/OBC Certificate
                    </h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <section class="container">
                        <div class="row mt-3">
                            <p class="mb-1 point-name">1. Application to:</p>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">State: <span class="star">*</span></label>
                                    <input type="email" class="form-control" id="email" value="WEST BENGAL" readonly="" name="state">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">District: <span class="star">*</span></label>
                                    <select id="disabledSelect" class="form-select form-select-sm mb-3">
                                                <option>Disabled select</option>
                                            </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">Sub-division: <span class="star">*</span></label>
                                    <select id="disabledSelect" class="form-select form-select-sm mb-3">
                                <option>Disabled select</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" checked> Municipality</label> /
                                        <label><input type="radio" name="optradio"> Block : <span class="star">*</span></label>
                                    </div>
                                    <select id="disabledSelect" class="form-select form-select-sm mb-3">
                                <option>Disabled select</option>
                            </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3 my-auto">
                                <div class="form-group radio">
                                    <p class="mb-1 point-name">2. Applying for:</p>
                                </div>
                            </div>

                            <div class="col-md-3 my-auto">
                                <div class="form-group text-center">
                                    <div class="btn-group btn-group-lg" id="btt">
                                        <button type="button" class="btn-smt btn-smt-active btn-smt-1">SC</button>
                                        <button type="button" class="btn-smt">ST</button>
                                        <button type="button" class="btn-smt btn-smt-2">OBC</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label> Caste/Tribe/Community: <span class="star">*</span></label>
                                    <select id="selectcaste" class="form-select form-select-sm mb-3">
                                        <option>Disabled select</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="point-name">3. Name: <span class="star">*</span></label>
                                    <input type="text" class="form-control" id="name" value="WEST BENGAL" placeholder="Enter your name" name="name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="point-name">4. Father's name: <span class="star">*</span></label>
                                    <input type="text" class="form-control" id="father" placeholder="Enter your father's name" name="father">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="point-name">5. Mobile No.:</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" name="phone">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="point-name">6. Email ID:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <p class="point-name mb-1">7. Documents Required ( At least One): <span class="star">*</span></p>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>(a) Epic No</label>
                                    <input type="text" class="form-control" id="father" placeholder="Enter your father's name" name="father">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>(b) Aadhaar No.: </label>
                                    <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" name="phone">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>(c) Khadya sathi No.: </label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <p class="point-name mb-1">8.Date of Birth: <span class="star">*</span></label>
                            </p>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>(a) Date of Birth:  <span class="star">*</span></label>
                                    <input type="date" class="form-control" id="dob" placeholder="Enter your father's name" name="dob">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>(b) Place of Birth: <span class="star">* </span>  </label><label>State</label>
                                    <select id="disabledSelect" class="form-select form-select-sm mb-3">
                                <option>Disabled select</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>District: </label>
                                    <select id="disabledSelect" class="form-select form-select-sm mb-3">
                                <option>Disabled select</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Police Station: </label>
                                    <select id="disabledSelect" class="form-select form-select-sm mb-3">
                                <option>Disabled select</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Village/City </label>
                                    <select id="disabledSelect" class="form-select form-select-sm mb-3">
                                <option>Disabled select</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-2">
                            <p class="point-name mb-1">9. Address:</p>

                            <p class="mb-1 same-point-name">a) Present Address for last 6 months:</p>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>C/O (Name): <span class="star">*</span></label>
                                    <input type="text" class="form-control" id="father" placeholder="Enter your father's name" name="father">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">State: <span class="star">*</span></label>
                                    <input type="email" class="form-control" id="email" value="WEST BENGAL" readonly="" name="state">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">District: <span class="star">*</span></label>
                                    <select id="disabledSelect" class="form-select form-select-sm mb-3">
                                <option>Disabled select</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">Police Station: <span class="star">*</span></label>
                                    <select id="disabledSelect" class="form-select form-select-sm mb-3">
                                <option>Disabled select</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Ward/GP: <span class="star">*</span></label>
                                    <input type="text" class="form-control" id="" ame="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Vill/Para/House No./Road: <span class="star">*</span></label>
                                    <input type="text" class="form-control" id="" name="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Post Office: <span class="star">*</span></label>
                                    <input type="text" class="form-control" id="" name="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Pin Code : <span class="star">*</span></label>
                                    <input type="text" class="form-control" id="pin" name="pin">
                                </div>
                            </div>



                            <hr class="mt-3">
                            <p class="mb-1 same-point-name">b) Permanent Address:
                                <span>Same as present?  </span>
                                <label><input type="radio" name="optradio" checked> Yes </label>
                                <label><input type="radio" name="optradio"> No </label>
                            </p>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>C/O (Name): <span class="star">*</span></label>
                                    <input type="text" class="form-control" id="father" placeholder="Enter your father's name" name="father">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">State: <span class="star">*</span></label>
                                    <input type="email" class="form-control" id="email" value="WEST BENGAL" readonly="" name="state">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">District: <span class="star">*</span></label>
                                    <select id="disabledSelect" class="form-select form-select-sm mb-3">
                                <option>Disabled select</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">Police Station: <span class="star">*</span></label>
                                    <select id="disabledSelect" class="form-select form-select-sm mb-3">
                                <option>Disabled select</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Ward/GP: <span class="star">*</span></label>
                                    <input type="text" class="form-control" id="" ame="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Vill/Para/House No./Road: <span class="star">*</span></label>
                                    <input type="text" class="form-control" id="" name="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Post Office: <span class="star">*</span></label>
                                    <input type="text" class="form-control" id="" name="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Pin Code : <span class="star">*</span></label>
                                    <input type="text" class="form-control" id="pin" name="pin">
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="point-name">10. Nationality:</label>
                                    <input type="text" class="form-control" id="nationality" value="INDIAN" readonly="" name="nationality">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="point-name">11. Religion: <span class="star">*</span></label>
                                    <select id="disabledSelect" class="form-select form-select-sm mb-3">
                                <option>Disabled select</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="point-name">12. Gender: <span class="star">*</span></label>
                                    <select id="disabledSelect" class="form-select form-select-sm mb-3">
                                <option>Disabled select</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-3">
                        <div class="row ">
                            <p class="point-name mb-1"> 13. Blood relation (paternal side) details:
                                <label><input type="radio" name="optradio" checked> Yes </label>
                                <label><input type="radio" name="optradio"> No </label>
                            </p>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>a) Certificate holder's name: <span class="star">*</span></label>
                                    <input type="text" class="form-control" id="" name="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>b) Relation with applicant: <span class="star">*</span></label>
                                    <select id="disabledSelect" class="form-select form-select-sm mb-3">
                                <option>Disabled select</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>c) Certificate No: <span class="star">*</span></label>
                                    <input type="text" class="form-control" id="" name="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>d) Date of issue: <span class="star">*</span></label>
                                    <input type="date" class="form-control" id="" name="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>e) Issuing authority: <span class="star">*</span></label>
                                    <select id="disabledSelect" class="form-select form-select-sm mb-3">
                                <option>Disabled select</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-3">
                        <div class="row">
                            <p class="point-name mb-1"> 14. Details of two(2) local referees:</p>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>a) Name of Referee-I: <span class="star">*</span></label>
                                    <input type="text" class="form-control" id="" name="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>b) Address of Referee-I: <span class="star">*</span></label>
                                    <input type="text" class="form-control" id="" name="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>c) Name of Referee-II: <span class="star">*</span></label>
                                    <input type="text" class="form-control" id="" name="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>d) Address of Referee-II: <span class="star">*</span></label>
                                    <input type="text" class="form-control" id="" name="">
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <p class="point-name mb-1"> 15. Whether the applicant or his family migrated from other State/Country?
                                <label><input type="radio" name="optradio" checked> Yes </label>
                                <label><input type="radio" name="optradio"> No </label>
                            </p>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>a) Migration Certificate No:</label>
                                    <input type="text" class="form-control" id="" name="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label> Date of issue: </label>
                                    <input type="date" class="form-control" id="" name="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label> Country:</label>
                                    <input type="text" class="form-control" id="" name="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label> State:</label>
                                    <input type="text" class="form-control" id="" name="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>District:</label>
                                    <input type="text" class="form-control" id="" name="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Police Station:</label>
                                    <input type="text" class="form-control" id="" name="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Village/Ward</label>
                                    <input type="text" class="form-control" id="" name="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Year of migration</label>
                                    <input type="text" class="form-control" id="" name="">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div class="text-center py-1" style="border-top: 1px solid;">
                    <button type="button" data-dismiss="modal" class="btn-Continue">Continue</button>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/dashboard/form.blade.php ENDPATH**/ ?>