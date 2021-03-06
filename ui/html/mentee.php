
<?php
    include_once "profileheader.php";
    require_once("config.php");
    session_start();
    
    // Run Table query
    $sql="select email from menteeprofile where email='".$_SESSION['username']."'";
    $res=mysqli_query($connection,$sql);

    // echo $sql;
    // Check for user existance
    if(mysqli_num_rows($res)>0) {
        header("location:menteehome.php"); 
    }

    else {
    ?>
        <title>User Profile</title>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User Profile</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Please complete your profile before using our services as Mentee
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="menteedetails.php" method="post">
                                    <h2>Contact Information</h2>
                                        <div class="form-group">
                                            <label>Mobile No.</label>
                                            <input class="form-control" placeholder = "e.g. +91897612312"name="mobile">
                                        </div>
                                        <div class="form-group">
                                            <label>Lnkedin Profile Link</label>
                                            <input class="form-control" placeholder="e.g. www.linkedin.com/username" name = "linkedin">
                                        </div>
                                    <h2>Education and Work</h2>
                                        <div class="form-group">
                                            <label>Education Profile</label>
                                            <input class="form-control" placeholder="e.g. Mtech, Phd etc." name="education">
                                        </div>
                                        <div class="form-group">
                                            <label>Work Experience</label>
                                            <input class="form-control" placeholder="e.g. 15 Years experience in IT sector"  name="work">
                                        </div>
                                         <div class="form-group">
                                            <label>Current Status</label>
                                            <input class="form-control" placeholder="e.g. Working with Google India" name = "status">
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <h2>Professional Details</h2>
                                        <div class="form-group">
                                            <label>Industry</label>
                                            <select class="form-control" name="industry">
                                                <option>Automotive</option>    
                                                <option>Banking/Financial Services</option>     
                                                <option>BPO</option>               
                                                <option>Consulting</option>               
                                                <option>Construction/Real Estate </option>             
                                                <option>Education & related</option>  
                                                <option>Training & related</option> 
                                                <option>FMCG/Durables/F&B</option> 
                                                <option>Healthcare/Pharma/Biotech</option>              
                                                <option>Hospitality/Travel </option>             
                                                <option>Human Resources</option> 
                                                <option>Industrial Products/Heavy Machinery</option>              
                                                <option>Infrastructure</option>              
                                                <option>Insurance</option>              
                                                <option>Internet/Online</option>              
                                                <option>IT </option>             
                                                <option>KPO/Research/Analytics </option>             
                                                <option>Legal</option>              
                                                <option>Manufacturing</option>              
                                                <option>Media/Journalism/PR</option>              
                                                <option>Mining/Steel/Shipping</option>              
                                                <option>NGO/Social Service</option>              
                                                <option>Oil & Gas/Power/Energy</option>              
                                                <option>Retail</option>              
                                                <option>Telecom</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="category">
                                                <option>Finance</option>
                                                <option>Sales & Marketing</option>
                                                <option>Consulting</option>
                                                <option>HR</option>
                                                <option>IT & Systems</option>
                                                <option>Operations</option>
                                                <option>Legal</option>
                                                <option>BPO/KPO/Outsourcing</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>User Type</label>
                                            <select class="form-control" name="utype">
                                                <option>Freelance Professional</option>
                                                <option>Independent Professional</option>
                                                <option>High School Student</option>
                                                <option>Graduate Student</option>
                                                <option>Under Graduate Student</option>
                                                <option>Corporate Professional</option>
                                                <option>Governing Body</option>
                                                <option>First-Time Entrepreneur</option>
                                                <option>Student Entrepreneur</option>
                                                <option>Rural Entrepreneur</option>
                                                <option>Women Entrepreneur</option>
                                                <option>Working Professional</option>
                                                <option>Corporate Organization</option>
                                                <option>Senior Management</option>
                                                <option>Fresher</option>
                                                <option>Parent</option>
                                                <option>Stay-At-Home Parent</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Fields Interested In</label>
                                            <input class="form-control" placeholder="e.g. Cloud Computing, Management" name="interest">
                                        </div>                                        
                                        <div class="form-group">
                                            <label>Past Project Details (Maximum 500 Characters)</label>
                                            <textarea class="form-control" rows="3" name="project"></textarea>
                                        </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit Your Details</button>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
<?php } ?>