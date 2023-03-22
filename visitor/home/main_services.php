<!DOCTYPE html>
<html>
<head>
	<title>Main Services Offered</title>
	<!-- App favicon -->
	<link rel="shortcut icon" href="../../assets/nar-icon.ico">

    <!-- App css -->

    <link href="../dist/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- icons -->
    <link href="../dist/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

     <!-- Plugins css -->
    <link href="../dist/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <link href="../dist/assets/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
      .vr{
        border-left: 2px solid;
        height: 30px;
        margin-top: 10px;
        color: #42A5F5;
      }
    	.dropdown a:hover {
    		color: #42A5F5;
    	}
       .nav-pills .nav-link.active{
        background-color: #146dac;
      }
    </style>

</head>

<body>
	<nav class="topnav navbar navbar-expand-lg bg-body-tertiary mt-0">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">
    		<img src="../dist/assets/images/nar_logo.png" class="ms-4"  width="50" height="50">
    	</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: #42A5F5;">
	      <span style="color: #42A5F5;"><i class="fas fa-bars"></i></span>
	    </button>
	    <div class="collapse navbar-collapse justify-content-center me-5" id="navbarSupportedContent">
	    	<ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link arrow-none" href="home.php" id="topnav-dashboard" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
        
                </li>
                <div class="vr d-none d-md-block"></div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-cogs me-1"></i>Services<div class="arrow-down"></div>
                    </a>
                    <ul class="dropdown-menu border border-1" aria-labelledby="topnav-apps">
                      <a href="main_services.php" class="dropdown-item">Main Services Offered</a>
                        <a href="eng_design.php" class="dropdown-item">Engineering & Design Services</a>
                        <a href="quality_manage.php" class="dropdown-item">Quality Management</a>
                        <a href="equip.php" class="dropdown-item">Equipments</a>
                    </ul>
                </li>
                <div class="vr d-none d-md-block"></div>
                <li class="nav-item">
                  <a class="nav-link" href=clients.php><i class="fas fa-users me-1"></i>Clients</a>
                </li>
               <div class="vr d-none d-md-block"></div>
                <li class="nav-item">
                  <a class="nav-link" href="careers.php"><i class="fas fa-briefcase me-1"></i>Careers</a>
                </li>
               <div class="vr d-none d-md-block"></div>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php"><i class="fas fa-phone-alt me-1"></i>Contact Us</a>
                </li>
              <div class="vr d-none d-md-block"></div>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"><i class="fas fa-info-circle me-1"></i>About</a>
                </li>
            </ul>  
	    </div>
	  </div>
	</nav>

    <!--  Main Content -->
    <div class="container-fluid">
    	<div class="bg-image" style="background-image: url('../dist/assets/images/nar_bg.jpg');height: 450px; width: 100%; background-size: 100% 100%;">
	    </div>
      <h3 class="mt-3 ms-5" style="color: #146dac;">Main Services Offered</h3>
        <hr class="border border-1">
        <div class="col-xl-12">
           <div class="card">
                <div class="card-body">
                    <div class="row p-2">
                        <div class="col-sm-4">
                            <div class="nav flex-column nav-pills nav-pills-tab" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active show mb-1" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-predictive" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">
                                    Predictive & Prevent  ive Testing of Substation Equipment</a>
                                <a class="nav-link mb-1" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-thermo" role="tab" aria-controls="v-pills-profile"
                                    aria-selected="false">
                                  Thermographic Scanning Inspection</a>
                                <a class="nav-link mb-1" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-ultrasonic" role="tab" aria-controls="v-pills-messages"
                                    aria-selected="false">
                                    Ultrasonic Detection Testing & Machinery Health Monitoring</a>
                                <a class="nav-link mb-1" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-fault" role="tab" aria-controls="v-pills-settings"
                                    aria-selected="false">
                                    Fault Investigation & Trouble Shooting</a>
                                <a class="nav-link mb-1" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-power" role="tab" aria-controls="v-pills-settings"
                                    aria-selected="false">
                                    Power Quality Audit</a>
                                <a class="nav-link mb-1" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-system" role="tab" aria-controls="v-pills-settings"
                                    aria-selected="false">
                                    Power System Analysis</a>
                            </div>
                        </div> <!-- end col-->
                        <div class="col-sm-8">
                            <div class="tab-content pt-0">
                                <div class="tab-pane fade active show" id="v-pills-predictive" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <p class="fw-bold">A. Predictive and Preventive Maintenance Testing of Substation Equipment</p>
                                    <h5>Main Substation Switch Yard</h5>
                                    <ul>
                                      <li>High and Medium Voltage Circuit Breakers</li>
                                      <li>Air Switches</li>
                                      <li>Outdoor Bus Structure</li>
                                      <li>Porcelain Insulators</li>
                                      <li>Lightning Arresters</li>
                                      <li>Power Transformers</li>
                                      <li>Protective Relays</li>
                                      <li>Power Cable</li>
                                      <li>Associated Groundings</li>
                                    </ul>
                                    <h5>Low Voltage System</h5>
                                    <ul>
                                      <li>Switchgear (General)</li>
                                      <li>Circuit Breakers</li>
                                      <li>Bus Duct</li>
                                      <li>Protective Relays</li>
                                      <li>Instruments Transformers</li>
                                      <li>Metering Instruments and Controls</li>
                                      <li>Motor Control Center</li>
                                      <li>Automatic Transfer Switch</li>
                                      <li>Battery System</li>
                                      <li>Associated Groundings</li>
                                    </ul>   
                                </div>
                                <div class="tab-pane fade" id="v-pills-thermo" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <h4>Thermographic Scanning Inspection</h4>
                                    <p  align="justify" style="text-indent: 20px;"> Thermography measures surface temperatures by using infrared video and still cameras. These tools see light that is in the heat spectrum. Images on the video or film record the temperature variations of the building's skin, ranging from white for warm regions to black for cooler areas. The resulting images help the auditor determine whether insulation is needed. They also serve as a quality control tool, to ensure that insulation has been installed correctly. </p>
                                    <p align="justify" style="text-indent: 20px;">A thermographic inspection is either an interior or exterior survey. The energy assessor decides which method would give the best results under certain weather conditions. Interior scans are more common, because warm air escaping from a building does not always move through the walls in a straight line. Heat loss detected in one area of the outside wall might originate at some other location on the inside of the wall. Also, it is harder to detect temperature differences on the outside surface of the building during windy weather. Because of this difficulty, interior surveys are generally more accurate because they benefit from reduced air movement.         </p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-ultrasonic" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                    <h4>Ultrasonic Detection Testing and Machinery Health Monitoring</h4>
                                    <p align="justify" style="text-indent: 20px;">Ultrasonic testing (UT) is a form of non-destructive testing (NDT) that uses high-frequency sound waves to measure the thickness or hardness of a material. Ultrasonic tests often are performed to assess corrosion on pipes, valves and steel or aluminum constructions. An ultrasonic tester also is used to detect flaws such as cracks and leaks. Thus, an ultrasonic tester is an integral tool used in material testing and engineering, manufacturing quality control, equipment condition monitoring, building and bridge inspection and more. PCE Instruments offers accurate, affordable ultrasonic test equipment for the non-destructive evaluation (NDE) of ferrous and non-ferrous metals and alloys, plastics, composites and ceramics as well as for the non-destructive inspection (NDI) of industrial welds and building walls.    </p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-fault" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                    <h4>Fault Investigation and Trouble Shooting</h4>
                                    <p align="justify" style="text-indent: 20px;">Troubleshooting is a form of problem solving, often applied to repair failed products or processes on a machine or a system. It is a logical, systematic search for the source of a problem in order to solve it, and make the product or process operational again. Troubleshooting is needed to identify the symptoms. Determining the most likely cause is a process of elimination—eliminating potential causes of a problem. Finally, troubleshooting requires confirmation that the solution restores the product or process to its working state. </p>
                                     
                                    <p align="justify" style="text-indent: 20px;">In general, troubleshooting is the identification or diagnosis of "trouble" in the management flow of a system caused by a failure of some kind. The problem is initially described as symptoms of malfunction, and troubleshooting is the process of determining and remedying the causes of these symptoms.</p>
                                  
                                   <p align="justify" style="text-indent: 20px;">A system can be described in terms of its expected, desired or intended behavior (usually, for artificial systems, its purpose). Events or inputs to the system are expected to generate specific results or outputs. (For example, selecting the "print" option from various computer applications is intended to result in a hardcopy emerging from some specific device). Any unexpected or undesirable behavior is a symptom. Troubleshooting is the process of isolating the specific cause or causes of the symptom. Frequently the symptom is a failure of the product or process to produce any results. (Nothing was printed, for example). Corrective action can then be taken to prevent further failures of a similar kind.</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-power" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                    <h4>Power Quality Audit</h4>
                                    <p>The Power Quality Audit (PQA), is a service offered by the Socomec technical support centre that checks the reliability,efficiency and safety of an organization's electrical system. It verifies the following aspects:</p>
                                    <ul>
                                      <li>The continuity of the power supply: i.e., that the power in the network is available on a regular basis and is able to ensure the efficient operation of the equipment;</li>
                                      <li>The quality of the voltage: i.e., that there are no low or high frequency disturbances in the network capable of damaging the system components. </li>
                                    </ul>
                                    <p>The PQA uses network analyzers, instruments specially designed to detect faults and deteriorations and record parameters and information that may be of use in locating the causes of disturbances.The data is collected and analyzed by our engineers, who can then diagnose the problems and suggest the mostappropriate solutions.</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-system" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                  <h4>Power System Analysis (Using the State of the Art High Impact Engineering Software /ETAP)</h4>
                                  <div class="row">
                                       <div class="col-md-4">
                                        <p>1. Network Analysis</p>
                                        <ul style="list-style-type: none;">
                                          <li>a. Short-Circuit ANSI</li>
                                          <li>b. Short-Circuit IEC</li>
                                          <li>c. Arc Flash</li>
                                          <li>d. Load Flow</li>
                                          <li>e. Motor Acceleration</li>
                                        </ul>
                                        <p>2. Power Quality</p>
                                        <ul style="list-style-type: none;">
                                          <li>a. Harmonic Load Flow</li>
                                          <li>b. Frequency Scan</li>
                                          <li>c. Harmonic Filters</li>
                                        </ul>
                                        <p>3. Protective Devices</p>
                                        <ul style="list-style-type: none;">
                                          <li>a. Coordination & Selectivity</li>
                                          <li>b. Sequence-of-operation</li>
                                          <li>c. Relay Test Set Interface</li>
                                        </ul>
                                        <p>4. Relay Testing</p>
                                        <ul style="list-style-type: none;">
                                          <li>a. Relay Test Set Equipment</li>
                                          <li>b. Relay Test Set Software</li>
                                        </ul>
                                        <p>5. Ground Grid System</p>
                                        <ul style="list-style-type: none;">
                                          <li>a. Finite Element Method</li>
                                          <li>b. IEEE 80 & 655 Methods</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <p>6. Dynamics and Transients</p>
                                        <ul style="list-style-type: none;">
                                          <li>a. Transient Stability</li>
                                          <li>b. Generator Start-up</li>
                                          <li>c. Wind Turbine Generator</li>
                                          <li>d. User-Defined Dynamic Mode</li>
                                          <li>e. Parameter Estimation</li>
                                        </ul>
                                        <p>7. Cable Systems</p>
                                        <ul style="list-style-type: none;">
                                          <li>a. Underground Thermal Analysis</li>
                                          <li>b. Cable Pulling</li>
                                          <li>c. Cable Ampacity</li>
                                          <li>d. Cable Sizing</li>
                                        </ul>
                                        <p>8. Distribution Systems</p>
                                        <ul style="list-style-type: none;">
                                          <li>a. Unbalanced Load Flow</li>
                                          <li>b. Optimal Power Flow</li>
                                          <li>c. Optimal Capacitor Placement</li>
                                          <li>d. Reliability Assessment</li>
                                        </ul>
                                        <p>9. Transmission Line</p>
                                        <ul style="list-style-type: none;">
                                          <li>a. Line Constant</li>
                                          <li>b. Line Ampacity</li>
                                          <li>c. Sag & Tension</li>
                                          <li>d. HV DC Transmission Link</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                      <p>10. Real-Time Monitoring and Simulation</p>
                                        <ul style="list-style-type: none;">
                                          <li>a. Monitoring & Control</li>
                                          <li>b. Energy Cost Analysis</li>
                                          <li>c. State Estimation</li>
                                          <li>d. Real-Time Simulation</li>
                                          <li>e. Playback / Trending</li>
                                        </ul>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div> <!-- end col-->
                    </div> <!-- end row-->
                </div>
            </div> <!-- end card-->
        </div>
    </div>
    

    <footer class="text-center text-lg-start text-white "style="background-color: #146dac; position: absolute; width: 100%; "> 
    <!-- Grid container -->
    <div class="container mb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row mb-2">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-2">
            <img src="../dist/assets/images/nar_logo.png" class="mt-3 text-center"  height="90">
          </div>
          <!-- Grid column -->


          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-white">Address</h5>
            <p>
              Unit 223 Ciannat Complex, Marcos Highway,
              Barangay Mayamot, Antipolo City, Rizal Province
            </p>
            
          </div>
      
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-white">Telephone Number</h5>
            <p><i class="fas fa-phone mr-3 me-1"></i>(02) 531-5594</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-white">Contact with us</h5>

            <!-- Facebook -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- Google -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a>
          </div>
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: #ffdb2b; color: #42A5F5; font-weight: bold; ">
      NAR Power System Specialists Corporation © 2023. All rights reserved.
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->











</body>
<!-- Vendor -->
<script src="../dist/assets/libs/jquery/jquery.min.js"></script>
<script src="../dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../dist/assets/libs/simplebar/simplebar.min.js"></script>
<script src="../dist/assets/libs/node-waves/waves.min.js"></script>
<script src="../dist/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="../dist/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
<script src="../dist/assets/libs/feather-icons/feather.min.js"></script>

<!-- knob plugin -->
<script src="../dist/assets/libs/jquery-knob/jquery.knob.min.js"></script>

<!--Morris Chart-->
<script src="../dist/assets/libs/morris.js06/morris.min.js"></script>
<script src="../dist/assets/libs/raphael/raphael.min.js"></script>

<!-- Dashboar init js-->
<script src="../dist/assets/js/pages/dashboard.init.js"></script>

<!-- Plugins js -->
<script src="../dist/assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="../dist/assets/libs/dropify/js/dropify.min.js"></script>
<!-- App js-->
<script src="../dist/assets/js/app.min.js"></script>
</html>