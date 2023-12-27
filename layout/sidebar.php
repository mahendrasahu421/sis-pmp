<!-- top navbar -->
<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
        </div>

        <div class="navbar-brand ps-2">
            <a href="index.php" class="d-flex">
               
                <img style="width: 100px; height:40px;" src="assets/images/logo/acfl.png" class="avatar lg rounded me-3" alt="User Profile Picture">
            </a>
            
        </div>


    </div>
</nav>

<!-- Sidbar menu -->
<div id="left-sidebar" class="sidebar">
    <div class="user-account p-3 mb-3">
        <div class="d-flex mb-3 pb-3 border-bottom align-items-center">
            <img src="assets/images/user.png" class="avatar lg rounded me-3" alt="User Profile Picture">
            <div class="dropdown flex-grow-1">
                <span>Welcome,</span>
                <a href="#" class="dropdown-toggle user-name" data-bs-toggle="dropdown"><strong>Jessica
                        Doe</strong></a>
                <ul class="dropdown-menu p-2 shadow-sm">
                    <li><a href="page-profile2.php"><i class="fa fa-user me-2"></i>My Profile</a></li>
                    <li><a href="app-inbox.php"><i class="fa fa-envelope-open me-2"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-cog me-2"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="page-login.php"><i class="fa fa-power-off me-2"></i>Logout</a></li>
                </ul>
            </div>
        </div>

    </div>

    <div class="tab-content px-0">
        <div class="tab-pane fade show active" id="hr_menu" role="tabpanel">
            <nav class="sidebar-nav">
                <ul class="metismenu list-unstyled">
                    <li class="active"><a href="index.php"><i class="fa fa-tachometer"></i><span>
                                Dashboard</span></a></li>
                    <li>
                        <a href="#Master" class="has-arrow"><i class="fa fa-users"></i><span>Authenticaion Master</span></a>
                        <ul class="list-unstyled">
                            <li><a href="add-menu.php">Add Menu</a></li>
                            <li><a href="add-sub-menu.php">Add Sub Menu </a></li>
                            <li><a href="add-role.php">Add Role</a></li>
                            <li><a href="add-permission.php">Add Permission</a></li>
                            <li><a href="map-role-permission.php">Map Role & Permission</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#Master" class="has-arrow"><i class="fa fa-users"></i><span>Masters</span></a>
                        <ul class="list-unstyled">
                            <li><a href="session-master.php">Session Master</a></li>
                            <li><a href="designation-master.php">Designation Master</a></li>
                            <li><a href="branch-master.php">Branch Master</a></li>
                            <li><a href="region-master.php">Region Master</a></li>
                            <li><a href="segment-master.php">Segment Master</a></li>
                            <li><a href="group-master.php">Group Master </a></li>
                            <li><a href="role-master.php">Role Master </a></li>
                            <li><a href="group-edit.php">Group Edit </a></li>
                            <li><a href="form-type-master.php">Form Type Master</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#Employees" class="has-arrow"><i class="fa fa-users"></i><span>Employees</span></a>
                        <ul class="list-unstyled">
                            <li><a href="login-creation.php">Login Creation</a></li>
                            <li><a href="employee-master.php">Employee Master</a></li>
                            <li><a href="edit-employee.php">Edit Employye Master</a></li>
                            <li><a href="emp-official-details.php">Employee Offical Details</a></li>
                            <li><a href="emp-posting-details.php">Employee Posting Details</a></li>
                            <li><a href="emp-transfer-setting.php">Employee Transfer Setting </a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="#ACR" class="has-arrow"><i class="fa fa-users"></i><span>ACR Master</span></a>
                        <ul class="list-unstyled">
                            <li><a href="budget-master.php">Budget Master</a></li>
                            <li><a href="percentage-increment-master.php">Percentage Increment Master </a></li>
                            <li><a href="department-master.php">Deartment Master</a></li>
                            <li><a href="brnd-wise-convegancy.php">Band Wise Convegancy Setting</a></li>
                            <li><a href="convegancy-tier.php">Convegancy Tier Master</a></li>
                            <li><a href="mobile-tier.php">Mobile Tier Master</a></li>
                            <li><a href="hra-tier.php">HRA Tier Master</a></li>
                            <li><a href="perf-linked-special-allowance">Perf Linked Special Allowance</a></li>
                            <li><a href="book-and-story.php">Books & Stories</a></li>
                            <li><a href="liverries-and-story.php">Liverries & Stories</a></li>
                            <li><a href="mobile-reimbursement.php">Mobile Reimbursement</a></li>
                            <li><a href="medical-reimbursement.php">Medical Reimbursement</a></li>

                        </ul>
                    </li>
                    <li><a href="apprasial-section"><i class="fa fa-file-text-o"></i><span>Apprasial
                                Section</span></a></li>
                    <li>
                        <a href="#Reports" class="has-arrow"><i class="fa fa-users"></i><span>Reports</span></a>
                        <ul class="list-unstyled">
                            <li><a href="employye-master-report.php">Employee Reports</a></li>
                            <li><a href="login-report.php">Login Reports</a></li>
                            <li><a href="appraisal-report.php">Appraisal Reports</a></li>
                            <li><a href="transfer-report.php">Transfer Reports</a></li>
                            <li><a href="traning-report.php">Traning Reports</a></li>
                            <li><a href="pending=report.php">Pendiing Reports</a></li>
                            <li><a href="average-garding-report.php">Average Grading Details</a></li>
                            <li><a href="comparision-details.php">Comparision Details</a></li>
                            <li><a href="sales-target-reports.php">Sales Target Reports</a></li>
                            <li><a href="acr-reports.php">ACR Reports</a></li>
                        </ul>
                    </li>
                    </li>
                    <li><a href="help-supports.php"><i class="fa fa-user"></i><span>Help And
                                Supports</span></a></li>

                </ul>
            </nav>
        </div>



    </div>
</div>