<?php?>

<!DOCTYPE html>
<html lang = "en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Name of the website-->
    <!--This is what the tab says-->
    <head>
        <title> EastWest Health Services </title>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="CSS/web.css">
        <link rel="stylesheet" href="CSS/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/slick/slick.css">
        <link rel="stylesheet" href="CSS/slick/slick-theme.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <!--Top div section, this is the section detailing the social media, along with
    "get more info", "family portal", "Caregiver Portal", email and number -->
    <!--Social media part of the top bar-->
    <div id = "stickyNav">
        <div id = "toprow" class = "pb-4 pt-1">
            <div id = "navWrapper">
                <div class = "contact">
                    <ul>
                        <li><a href = "https://my.adlware.com/family">Family Portal</a></li>
                        <li><a href = "https://my.adlware.com/cp">Caregiver Portal</a></li>
                        <li><a href = "mailto:eastwesthomecare@gmail.com"><i class = "fa fa-envelope"></i> eastwesthomecare@gmail.com</a></li>
                        <li><a href = "tel:586-582-9690"><i class = "fa fa-phone"></i> (586)582-9690</a></li>
                        <li><a href = "login.php">log in</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id = "mobileOnly">
            <a href = "index.html"><img id = "logopic" src = "eastwest/eastwestRed.png"></a>
        </div>
        <!--Remaking the navigation of the website - so it's more mobile responsive-->
        <!--The navigation of the website-->   
        <nav class = "navbar navbar-expand-lg ms-auto">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
            class="fa fa-bars"></i></span></button>
            <div id = "navWrapper">
                <div class = "row">
                    <div class = "col" id = "navLogo">
                        <a class = "mr-left" href = "index.html"><img id = "logopic" src = "eastwest/eastwestRed.png"></a>
                    </div>
                    <div class = "col navitems">
                                    <!-- Collapse button -->
                <div class = "collapse navbar-collapse" id = "navbarSupportedContent1">
                    <ul class = "nav navbar-nav ml-auto">
                        <li class = "nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ABOUT US</a>
                                <div class = "dropdown-menu animate slideIn" aria-labelledby="navbarDropdown">
                                    <a class = "dropdown-item" href = "ourMission.html">OUR MISSION</a>
                                    <a class = "dropdown-item" href = "tenReasons.html">10 REASONS TO CONTACT EASTWEST</a>
                                    <a class = "dropdown-item" href = "101Ways.html">101 WAYS WE CAN HELP YOU</a>
                                    <!--
                                    <a class = "dropdown-item" href = "#">PHYSICIAN REFERRAL</a>
                                    <a class = "dropdown-item" href = "#">APPLY TO BE A CAREGIVER</a>
                                    -->
                                </div>
                        </li>
                
                        <li class = "nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">OUR SERVICES</a>
                                <div class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdown">
                                    <a class = "dropdown-item" href = "registeredNursing.html">REGISTERED NURSING</a>
                                    <a class = "dropdown-item" href = "physicalTherapy.html">PHYSICIAL THERAPY</a>
                                    <a class = "dropdown-item" href = "occupationalTherapy.html">OCCUPATIONAL THERAPY</a>
                                    <a class = "dropdown-item" href = "homeHealthAide.html">HOME HEALTH AIDE</a>
                                    <a class = "dropdown-item" href = "speechTherapy.html">SPEECH THERAPY</a>
                                    <a class = "dropdown-item" href = "medicalSocialWorker.html">MEDICAL SOCIAL WORKER</a>
                                    <a class = "dropdown-item" href = "privateDuty.html">PRIVATE DUTY-CAREGIVER SERVICES</a>
                                    <a class = "dropdown-item" href = "caseManagement.html">CASE MANAGEMENT</a>
                                    <a class = "dropdown-item" href = "medicalMonitoring.html">MEDICAL MONITORING</a>
                                    <!--
                                    <a class = "dropdown-item" href = "#">ORDER MEDICAL SUPPLIES</a>
                                    -->
                                </div>
                        </li>
                
                        <!--
                        <li class = "nav-item"><a class = "nav-link" href = "reviews.html">REVIEWS</a></li>
                        -->
                        <li class = "nav-item"><a class = "nav-link" href = "contact.html">CONTACT US</a></li>
                        <li class = "nav-item"><a class = "nav-link" href = "apply.html">APPLY</a></li>
                        <!--
                        <li class = "nav-item"><button class = "navbar-btn" id = "coloredBox"><a class = "nav-link" href = "#">SCHEDULE YOUR ASSESSMENT</a></button></li>
                        -->
                    </ul>
            </div>
                    </div>
                </div>

            </div>
        </nav> 
    </div>
    <body>
    <div id = "wrapper">

        <div class = "container">
            <br>
            <h1><b>EASTWEST HEALTH SERVICES</b></h1>

            <!--ANYTHING YOU NEED TO CHANGE SHOULD BE BETWEEN THE <>. SO FOR EXAMPLE TEXT THAT SHOULD BE CHANGED SHOULD BETWEEN <p>
    ------------------------------------------------------------------------------------------------------------------------------------->
            <div class = "eastwestSlider">
                <div><img src = "eastwest/eastWestBanner.jpg" id = "eastwestPhotos"></div>
                <div><img src = "eastwest/eastwestBanner-long.jpg" id = "eastwestPhotos"></div>
            </div>

            <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
            <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
            <script type="text/javascript" src="CSS/slick/slick.min.js"></script>
        
            <script type = "text/javascript">
                $(document).ready(function(){
                    $(".eastwestSlider").slick({
                        autoplay: true,
                        autoplaySpeed: 5000,
                        arrows: true
                    });
                });
            </script>
            
            <p>EastWest’s care team works with your physician, hospital, rehab, assisted living or family member to provide the highest level of care in the comfort of your home. Our holistic approach to home care provides a customized plan for reaching each patient’s optimal wellness. We like to to look for 5 key factors: Nutritional, Emotional / Social, Safety, Physical, and mental for integrated wellness planning. Our home care team has been trained to execute our comprehensive plan of care so that the most favorable results can be achieved. We offer specialized programs for Heart and Lung Disease, Diabetes, Orthopedic Surgeries, Alzheimer’s Disease, Parkinson’s Disease, Dementia, MS or ALS, Strokes, Neurologic Disorders, and Cancer</p>
            <br>
            <h1>OUR SERVICES</h1>
    <!--Creating a new tabs page for the 9 sections instead of having them be in columns-->
            <div id = "tabs">
                <div class = "row">
                    <div class = "col-sm-2">
                        <ul>
                            <li><button class = "indexTabs" onclick = "indexTab('indexNursing', this)" id = "defaultOpen">Nursing</button>
                            <li><button class = "indexTabs" onclick = "indexTab('indexPT', this)">Physical Therapy</button>
                            <li><button class = "indexTabs" onclick = "indexTab('indexOT', this)">Occupational Therapy</button>
                            <li><button class = "indexTabs" onclick = "indexTab('indexST', this)">Speech Therapy</button>
                            <li><button class = "indexTabs" onclick = "indexTab('indexMSW', this)">Medical Social Worker</button>
                            <li><button class = "indexTabs" onclick = "indexTab('indexPDHC', this)">Private-Duty Home Care</button>
                            <!--<button class = "indexTabs" onclick = "indexTab('indexMedical')">Medical Supplies</button>-->
                            <li><button class = "indexTabs" onclick = "indexTab('indexMM', this)">Medical Monitoring</button>
                            <li><button class = "indexTabs" onclick = "indexTab('indexCM', this)">Case Management</button>
                        </ul>
                    </div>
                <div class = "col-md-8">
            <div id = "indexNursing" class = "indexTabContent pb-2">
                <div class = "row">
                    <div class = "col-sm">
                        <img src = "eastwest/filler-home-nursing.jpg">
                    </div>
                    <div class = "col-md-6">
                        <p>Our Registered Nurses are skilled at giving injections, IV Therapy, orthopedic care. cardiac care, wound care and other services that require medical training.</p>
                        <a href = "registeredNursing.html">
                        <div id = "coloredBox" class = "homeButton">
                            Read More
                        </div>
                        </a>
                    </div>
                </div>
            </div>

            <div id = "indexPT" class = "indexTabContent pb-2">
                <div class = "row">
                    <div class = "col-sm">
                        <img src = "eastwest/filler-home-PT.jpg">
                    </div>
                    <div class = "col-sm">
                        <p>Physical therapists use exercises, massage and other methods to help restore your mobility, build strength and relieve pain after an injury.</p>
                        <a href = "physicalTherapy.html">
                        <div id = "coloredBox" class = "homeButton">
                            Read More
                        </div>
                        </a>
                    </div>
                </div>
            </div>

            <div id = "indexOT" class = "indexTabContent pb-2">
                <div class = "row">
                    <div class = "col-sm">
                        <img src = "eastwest/filler-home-OT.jpg">
                    </div>
                    <div class = "col-sm">
                        <p>Affinity Occupational therapists help you regain lost motion, stay active and achieve independence in activities of daily living (ADL’s).</p>
                        <a href = "occupationalTherapy.html">
                        <div id = "coloredBox" class = "homeButton">
                            Read More
                        </div>
                        </a>
                    </div>
                </div>
            </div>

            <div id = "indexST" class = "indexTabContent pb-2">
                <div class = "row">
                    <div class = "col-sm">
                        <img src = "eastwest/filler-home-ST.jpg">
                    </div>
                    <div class = "col-sm">
                        <p>Speech-language pathologists can help you with communication problems after surgery or a stroke.</p>
                        <a href = "speechTherapy.html">
                        <div id = "coloredBox" class = "homeButton">
                            Read More
                        </div>
                        </a>
                    </div>
                </div>
            </div>

            <div id = "indexMSW" class = "indexTabContent pb-2">
                <div class = "row">
                    <div class = "col-sm">
                        <img src = "eastwest/filler-home-MSW.jpg">
                    </div>
                    <div class = "col-sm">
                        <p>Social workers provide counseling and locate community resources to help you and your family adjust.</p>
                        <a href = "medicalSocialWorker.html">
                        <div id = "coloredBox" class = "homeButton">
                            Read More
                        </div>
                        </a>
                    </div>
                </div>
            </div>

            <div id = "indexPDHC" class = "indexTabContent pb-2">
                <div class = "row">
                    <div class = "col-sm">
                        <img src = "eastwest/filler-home-PDHC.jpg">
                    </div>
                    <div class = "col-sm">
                        <p>Compassionate Caregivers skilled in Alzheimer’s, Dementia, Parkinson’s Disease and more.</p>
                        <a href = "privateDuty.html">
                        <div id = "coloredBox" class = "homeButton">
                            Read More
                        </div>
                        </a>
                    </div>
                </div>
            </div>

            <!--
            <div id = "indexMedical" class = "indexTabContent pb-2">
                <h1>Medical Supplies</h1>
                <div class = "row">
                    <div class = "col-sm">
                        <img src = "eastwest/filler-home-MS.jpg">
                    </div>
                    <div class = "col-sm">
                        <p>DME includes, but is not limited to, wheelchairs (manual and electric), traction equipment, canes, crutches, walkers, kidney machines, ventilators, oxygen, monitors, pressure mattresses, lifts, nebulizers, bili blankets and bill lights</p>
                        <a href = "#">
                        <div id = "coloredBox" class = "homeButton">
                            Read More
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            -->

            <div id = "indexMM" class = "indexTabContent pb-2">
                <div class = "row">
                    <div class = "col-sm">
                        <img src = "eastwest/filler-home-MM.jpg">
                    </div>
                    <div class = "col-sm">
                        <p>Dispatch Center is equipped to deliver constant, secure monitoring of your home. Home Help Button connects you to Guardian’s 24-hour Medical Monitoring and Command Center so that you can get help from caring, well-trained professionals in the first critical moments of an emergency anytime, day or night.</p>
                        <a href = "medicalMonitoring.html">
                        <div id = "coloredBox" class = "homeButton">
                            Read More
                        </div>
                        </a>
                    </div>
                </div>
            </div>

            <div id = "indexCM" class = "indexTabContent pb-2">
                <div class = "row">
                    <div class = "col-sm">
                        <img src = "eastwest/filler-home-CM.jpg">
                    </div>
                    <div class = "col-sm">
                        <p>Case Management by registered nurses allows EastWest to measure a patient’s medical state at home. Monitors may measure patient vital signs and other parameters including Safety, Medical, Nutrition, Mental, Emotional and Medications.</p>
                        <a href = "caseManagement.html">
                        <div id = "coloredBox" class = "homeButton">
                            Read More
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
    </div>
    </div>
    <script src = "javascript/indexTab.js"></script>    
        <footer>
        <p><a href = "tel:586-582-9690"><i class = "fa fa-phone"></i> (586)582-9690</a> &nbsp-&nbsp <a href = "mailto:eastwesthomecare@gmail.com"><i class = "fa fa-envelope"></i> eastwesthomecare@gmail.com</a> <br>
        © 2021 EastWest Health Services</p>
        </footer>
    </body>
</html>
