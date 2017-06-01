<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link type="text/css" href="css/main.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/example-page.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.tabSlideOut.v1.3.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<script>
   $(function(){
       $('.slide-out-div').tabSlideOut({
           tabHandle: '.handle',                              //class of the element that will be your tab
           pathToTabImage: 'img/courses/enrollnowsmall.png',          //path to the image for the tab (optionaly can be set using css)
           imageHeight: '122px',                               //height of tab image
           imageWidth: '40px',                               //width of tab image    
           tabLocation: 'right',                               //side of screen where tab lives, top, right, bottom, or left
           speed: 300,                                        //speed of animation
           action: 'click',                                   //options: 'click' or 'hover', action to trigger animation
           topPos: '',                                   //position from the top
           fixedPosition: false
                                          //options: true makes it stick(fixed position) on scroll
       });
   });
   
</script>
</head>
<body>
   <div class="slide-out-div">
      <!--<a class="handle" href="http://link-for-non-js-users">Content</a>-->
      <center>
         <h4><b>COME AND GET ENROLL WITH US !</b></h4>
      </center>
      <br>
      <form>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  Name (required)
                  <input type="text" class="form-control" id="name">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  Email address (required)
                  <input type="email" class="form-control" id="email">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  Phone Number (required)
                  <input type="text" class="form-control" id="pwd">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  Prefered Timing (required)
                  <input type="text" class="form-control" id="preferedTiming">
               </div>
            </div>
         </div>
         <div class="form-group">
            Your Desired Course Name (required)
            <select class="form-control" id="course">
               <option value="">---</option>
               <option value="Graphic Design">Graphic Design</option>
               <option value="PHP &amp; MYSQL">PHP &amp; MYSQL</option>
               <option value="Java">Java</option>
               <option value="Auto CAD(2D &amp; 3D)">Auto CAD(2D &amp; 3D)</option>
               <option value="Microsoft .Net">Microsoft .Net</option>
               <option value="Wordpress">Wordpress</option>
               <option value="Android App Development">Android App Development</option>
               <option value="IOS App Development">IOS App Development</option>
               <option value="Hybrid App Development">Hybrid App Development</option>
               <option value="C / C++">C / C++</option>
            </select>
         </div>
         <div class="form-group">
            What best describes your current employment status? (required)
            <select class="form-control" id="employment">
               <option value="">---</option>
               <option value="Employed">Employed</option>
               <option value="Unemployed but not looking">Unemployed but not looking</option>
               <option value="Unemployed and looking for work">Unemployed and looking for work</option>
               <option value="Self-Employed(Freelancer)">Self-Employed(Freelancer)</option>
               <option value="Entrepreneur building/growing a business">Entrepreneur building/growing a business</option>
               <option value="student">student</option>
            </select>
         </div>
         <div class="form-group">
            Please describe in 200 words or less, why would you want to enroll in this course.<br>
            <textarea class="form-control" rows="5" id="comment"></textarea>
         </div>
         <div class="form-group">
            <label for="select">How did you hear about Nepdroid Academy?</label>
            <select class="form-control" id="hear">
               <option value="">---</option>
               <option value="Facebook Page">Facebook Page</option>
               <option value="Friends/Family">Friends/Family</option>
               <option value="Job Recruiter">Job Recruiter</option>
               <option value="News Article">News Article</option>
               <option value="Employer/Colleague">Employer/Colleague</option>
               <option value="Others">Others</option>
            </select>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
</body>
</html>