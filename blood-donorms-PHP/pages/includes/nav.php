<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: #8A0302;" >
            <div class="navbar-header" style="background-color: #8A0302">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:white"><i class="icofont-heart-beat-alt" ></i> <i class="icofont-blood-drop"></i>Blood Donor Management System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
             
                <!-- /.dropdown -->
                <li class="dropdown" style="background-color:#8A0302">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down" ></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!-- <li class="divider"></li> -->
                        <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> ထွက်မည်</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
               
                <!-- /.dropdown -->
            </ul>
            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation" >
                <div class="sidebar-nav navbar-collapse" >
                    <ul class="nav" id="side-menu" >
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>

                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php" style="color:#8A0302;"><i class="fa fa-dashboard fa-fw"></i> ပင်မစာမျက်နှာ</a>
                        </li>
                        <li>
                            <a href="" style="color:#8A0302;"><i class="fa fa-heartbeat"></i> သွေးလှူဒါန်းမှူများအားစီမံခန့်ခွဲရန် <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="addblood.php" style="color:#3A1A1A;"><i class="icofont-blood"></i>သွေးလှူဒါန်းမှူအားမှတ်တမ်းတင်မည်</a>
                                </li>
                                <li>
                                    <a href="viewblood.php" style="color:#3A1A1A;"><i class="fa fa-edit fa-eye"></i>သွေးလှူစာရင်း</a>
                                </li>
                                <li>
                                    <a href="editblood.php" style="color:#3A1A1A;"><i class="fa fa-edit fa-fw"></i>ပြင်ဆင်မည်</a>
                                </li>
                                <li>
                                    <a href="deleteblood.php" style="color:#3A1A1A;"><i class="fa fa-user-times"></i>ဖျက်မည်</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="" style="color:#8A0302;"><i class="fa fa-user fa-fw"></i> သွေးလှူရှင်များအားစီမံခန့်ခွဲရန် <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="adddonor.php" style="color:#3A1A1A;"><i class="fa fa-table fa-user-plus"></i> သွေးလှူရှင်အားမှတ်တမ်းတင်မည်</a>
                                </li>
                                <li>
                                    <a href="viewdonor.php" style="color:#3A1A1A;"><i class="fa fa-edit fa-eye"></i> သွေးလှူရှင်စာရင်း</a>
                                </li>
                                <li>
                                    <a href="editview.php" style="color:#3A1A1A;"><i class="fa fa-edit fa-fw"></i> ပြင်ဆင်မည်</a>
                                </li>
                                <li>
                                    <a href="deleteview.php" style="color:#3A1A1A;"><i class="fa fa-user-times"></i> ဖျက်မည်</a>
                                </li>
                            </ul>
                            <!-- /.nav-third-level -->
                        </li>

                        <li>
                            <a href="" style="color:#8A0302;"><i class="fa fa-bullhorn"></i> သွေးလိုအပ်မှုအတွက် အသိပေးကြေငြာချက်<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="makeannouncement.php" style="color:#3A1A1A;">ကြေငြာရန်</a>
                                </li>
                                <li>
                                    <a href="viewannouncement.php" style="color:#3A1A1A;">ကြေငြာချက်များအားကြည့်ရန်</a>
                                </li>
                                <li>
                                    <a href="editannounceform.php" style="color:#3A1A1A;">ပြင်ဆင်မည်</a>
                                </li>
                                <li>
                                    <a href="deleteannouncement.php" style="color:#3A1A1A;">ဖျက်မည်</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="" style="color:#8A0302;"><i class="fa fa-flag"></i> သွေးလှူဒါန်းခြင်းဆိုင်ရာကန်ပိန်းများ <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="newcampaign.php" style="color:#3A1A1A;">ကန်ပိန်းအသစ်ကြေညာမည်</a>
                                </li>
                                <li>
                                        <a href="viewcampaign.php" style="color:#3A1A1A;">ကန်ပိန်းများအားကြည့်ရန်</a>
                                    </li>
                                    <li>
                                        <a href="updatecampaign.php" style="color:#3A1A1A;">ပြင်ဆင်မည်</a>
                                    </li>
                                    <li>
                                        <a href="deletedcampaign.php" style="color:#3A1A1A;">ဖျက်မည်</a>
                                    </li>
                            </ul>
                        </li>
            
                        
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>