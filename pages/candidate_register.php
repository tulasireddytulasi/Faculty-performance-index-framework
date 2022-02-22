<!DOCTYPE html>
<html lang="en">

<head>

    

    <title>Candidate Register</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
.multiselect {
  width: 200px;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 360%;
  height: 35px;
  border-radius: 5px;
  font-weight: normal;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
  padding-left: 10px;
}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}
</style>
</head>

<body>

            
                
                   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">Register</div>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="http://localhost/PPS/pages/canreg.php" method="post">
                            <div class="row">
                                <div class="col-lg-9">
                                        <div class="form-group">
                                            <label>Password:</label>
                                            <input class="form-control" type="password" placeholder="Create Password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input class="form-control" placeholder="Enter Name" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Surame:</label>
                                            <input class="form-control" placeholder="Enter Surame" name="surname">
                                        </div>
                                        <div class="form-group">
                                            <label>Father Name:</label>
                                            <input class="form-control" placeholder="Enter Father Name" name="fathername">
                                        </div>
                                         <div class="form-group">
                                            <label>Date Of Birth:</label>
                                            <input class=" form-control" type="date" data-date-inline-picker="true" name="dob" />    
                                        </div>
                                        <div class="form-group">
                                            <label>Gender:</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="optionsRadiosInline1" value="male" checked>Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="optionsRadiosInline2" value="female">Female
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone No.:</label>
                                            <input class="form-control" placeholder="Enter Phone No." type="number" name="phoneno">
                                        </div>
                                        <div class="form-group">
                                            <label>Mail-ID:</label>
                                            <input class="form-control" placeholder="Ex:- email@example.com" name="mailid">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Address:</label>
                                            <input class="form-control " placeholder="Door No., Street, City, District, State, Pincode" name="address">
                                        </div>        
                                        <div class="form-group">
                                                <label>Qualification:</label>
                                        </div>
                                    
                                    
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <select class="form-control" id="qual1" name="qual1" onchange="changespecialization1()">
                                                <option value="">Select Course</option>
                                                <option value="tenth">10th class</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-25">
                                        <div class="form-group">    
                                            <select id="spec1" class="form-control" name="spec1"></select>
                                        </div>
                                    </div> 
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Year of completion" name="year1">
                                        </div>                                  
                                    </div> 
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Institute Name" name="ins1">
                                        </div>                                  
                                    </div>
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="University/board" name="u1">
                                        </div>                                  
                                    </div>
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="percentage" name="per1">
                                        </div>                                  
                                    </div>
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <select class="form-control" id="qual2" onchange="changespecialization2()" name="qual2">
                                                <option value="">Select Course</option>
                                                <option value="iti">ITI</option>
                                                <option value="diploma">Diploma</option>
                                                <option value="intermediate">Intermediate</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-25">
                                        <div class="form-group">    
                                            <select id="spec2" class="form-control" name="spec2"></select>
                                        </div>
                                    </div> 
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Year of completion" name="year2">
                                        </div>                                  
                                    </div> 
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Institute Name" name="ins2">
                                        </div>                                  
                                    </div>
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="University/board" name="u2">
                                        </div>                                  
                                    </div>
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="percentage" name="per2">
                                        </div>                                  
                                    </div>
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <select class="form-control" id="qual3" name="qual3" onchange="changespecialization3()">
                                                <option value="">Select Course</option>
                                                <option value="iti">ITI</option>
                                                <option value="diploma">Diploma</option>
                                                <option value="degree">Degree</option>
                                                <option value="btech">B.Tech</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-25">
                                        <div class="form-group">    
                                            <select id="spec3" class="form-control" name="spec3"></select>
                                        </div>
                                    </div> 
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Year of completion" name="year3">
                                        </div>                                  
                                    </div> 
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Institute Name" name="ins3">
                                        </div>                                  
                                    </div>
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="University/board" name="u3">
                                        </div>                                  
                                    </div>
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="percentage" name="per3">
                                        </div>                                  
                                    </div>
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <select class="form-control" id="qual4" name="qual4" onchange="changespecialization4()">
                                                <option value="">Select Course</option>
                                                <option value="diploma">Diploma</option>
                                                <option value="degree">Degree</option>
                                                <option value="btech">B.Tech</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-25">
                                        <div class="form-group">    
                                            <select id="spec4" class="form-control" name="spec4"></select>
                                        </div>
                                    </div> 
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Year of completion" name="year4">
                                        </div>                                  
                                    </div> 
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Institute Name" name="ins4">
                                        </div>                                  
                                    </div>
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="University/board" name="u4">
                                        </div>                                  
                                    </div>
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="percentage" name="per4">
                                        </div>                                  
                                    </div>
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <select class="form-control" id="qual5" name="qual5" onchange="changespecialization5()">
                                                <option value="">Select Course</option>
                                                <option value="degree">Degree</option>
                                                <option value="btech">B.Tech</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-25">
                                        <div class="form-group">    
                                            <select id="spec5" class="form-control" name="spec5"></select>
                                        </div>
                                    </div> 
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Year of completion" name="year5">
                                        </div>                                  
                                    </div> 
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Institute Name" name="ins5">
                                        </div>                                  
                                    </div>
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="University/board" name="u5">
                                        </div>                                  
                                    </div>
                                    <div class="col-lg-25">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="percentage" name="per5">
                                        </div>                                  
                                    </div>
                                     
                                    <div class="multiselect">
                                        <label>Skills:</label>
                                        <div class="selectBox" onclick="showCheckboxes()">
                                            <select>
                                                <option>Select an option</option>
                                            </select>
                                        <div class="overSelect"></div>
                                    </div>
                                    <div id="checkboxes">
                                        <label for="one"><input type="checkbox" id="one" name="one" value="Adobe Illustrator" />Adobe Illustrator</label>
                                        <label for="two"><input type="checkbox" id="two" name="two" value="C" />C</label>
                                        <label for="three"><input type="checkbox" id="three" name="three" value="C++" />C++</label>
                                        <label for="four"><input type="checkbox" id="four" name="four" value="Java" />Java</label>
                                        <label for="five"><input type="checkbox" id="five" name="five" value="Oracle" />Oracle</label>
                                        <label for="six"><input type="checkbox" id="six" name="six" value="HTML" />HTML</label>
                                        <label for="sev"><input type="checkbox" id="two" name="sev" value="PHP" />PHP</label>
                                        <label for="eig"><input type="checkbox" id="two" name="eig" value="AJAX" />AJAX</label>
                                        <label for="nin"><input type="checkbox" id="two" name="nin" value="Ruby" />Ruby</label>
                                        <label for="ten"><input type="checkbox" id="two" name="ten" value="XML" />XML</label>
                                    </div>
                                </div>
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-3">
                                    
                                    <div class="form-group">
                                            <label>Upload Photo:</label>
                                            <input type="file" id="file" accept="image/jpeg" max_img_size="51200" name="photo">
                                        </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->

                            </div>
                            <!-- /.row (nested) -->
                            <center> 
                                        <button class="btn btn-success" type="submit" id="submit">Submit</button>
                                         
                                         <button type="Reset" class="btn btn-success">Reset</button>
                                     </center>
                                     </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                
            
            <!-- /.row -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

<script>
var special = {};
special['tenth'] = ['','10'];
special['iti'] = ['','electrician','fitter','carpenter','foundry man','book binder','plumber'];
special['intermediate'] = ['','M.P.C','Bi.P.C']
special['diploma'] = ['','Civil Engineering', 'Computer Engineering', 'Electronics and Computer Engineering', 'Electrical and Electronics Engineering', 'Mechanical Engineering'];
special['btech'] = ['','Civil Engineering', 'Computer Science & Engineering', 'Electronics and Computer Engineering', 'Electrical and Electronics Engineering', 'Mechanical Engineering'];
special['degree'] = ['','B.Sc', 'B.Arch', 'B.A', 'B.Com', 'B.C.A'];

function changespecialization1() 
{
    var courselist = document.getElementById("qual1");
    var slist = document.getElementById("spec1");
    var selcourse = courselist.options[courselist.selectedIndex].value;
    while (slist.options.length) {
        slist.remove(0);
    }
    var courses = special[selcourse];
    if (courses) {
        var i;
        for (i = 1; i < courses.length; i++) {
            var course = new Option(courses[i], i);
            slist.options.add(course);
        }
    }
} 
function changespecialization2() 
{
    var courselist = document.getElementById("qual2");
    var slist = document.getElementById("spec2");
    var selcourse = courselist.options[courselist.selectedIndex].value;
    while (slist.options.length) {
        slist.remove(0);
    }
    var courses = special[selcourse];
    if (courses) {
        var i;
        for (i = 1; i < courses.length; i++) {
            var course = new Option(courses[i], i);
            slist.options.add(course);
        }
    }
} 
function changespecialization3() 
{
    var courselist = document.getElementById("qual3");
    var slist = document.getElementById("spec3");
    var selcourse = courselist.options[courselist.selectedIndex].value;
    while (slist.options.length) {
        slist.remove(0);
    }
    var courses = special[selcourse];
    if (courses) {
        var i;
        for (i = 1; i < courses.length; i++) {
            var course = new Option(courses[i], i);
            slist.options.add(course);
        }
    }
} 
function changespecialization4() 
{
    var courselist = document.getElementById("qual4");
    var slist = document.getElementById("spec4");
    var selcourse = courselist.options[courselist.selectedIndex].value;
    while (slist.options.length) {
        slist.remove(0);
    }
    var courses = special[selcourse];
    if (courses) {
        var i;
        for (i = 1; i < courses.length; i++) {
            var course = new Option(courses[i], i);
            slist.options.add(course);
        }
    }
} 
function changespecialization5() 
{
    var courselist = document.getElementById("qual5");
    var slist = document.getElementById("spec5");
    var selcourse = courselist.options[courselist.selectedIndex].value;
    while (slist.options.length) {
        slist.remove(0);
    }
    var courses = special[selcourse];
    if (courses) {
        var i;
        for (i = 1; i < courses.length; i++) {
            var course = new Option(courses[i], i);
            slist.options.add(course);
        }
    }
} 
var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
</script>

</body>

</html>
