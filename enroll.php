<?php include 'header.php' ?>
<div class="container-fluid flex">
   <div class="row">
      <div class="col-md-6 col-xs-6 col-md-offset-3 col-xs-offset-3">
         <div class="col-md-3 col-xs-4 col-md-offset-1">
            <i class="fa fa-cogs fa-5x"></i>
         </div>
         <div class="col-md-3 col-xs-4 col-md-offset-1">
            <i class="fa fa-file-video-o fa-5x"></i>
         </div>
         <div class="col-md-3 col-xs-4 col-md-offset-1">
            <i class="fa fa-file-image-o fa-5x"></i>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid enroll-cont">
   <div class="container">
      <br><br>
      <h2 class="section-heading">mission/vision/goal</h2>
      <hr class="course-line">
      <form style="margin-bottom: 20px;" action="enrollSubmit.php" method="post">
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  Your Name (required)
                  <div class="row">
                     <div class="col-md-11">
                        <input type="text" class="form-control modifiedFrom" name="fullname" id="name">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  Email Address (required)
                  <div class="row">
                     <div class="col-md-11">
                        <input type="email" class="form-control modifiedFrom"  name="email" id="email">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  Your Phone/Mobile Number (required)
                  <div class="row">
                     <div class="col-md-11">
                        <input type="number" name="phone" class="form-control modifiedFrom" id="pwd">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  Your Desired Course Name (required)
                  <div class="row">
                     <div class="col-md-11">
                        <select class="form-control modifiedFrom" name="course" id="course">
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
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  Prefered Timing (required)
                  <div class="row">
                     <div class="col-md-11">
                        <input type="number" class="form-control modifiedFrom" name="preferedTiming" id="preferedTiming">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  What best describes your current employment status? (required)
                  <div class="row">
                     <div class="col-md-11">
                        <select class="form-control modifiedFrom" name="employment" id="employment">
                           <option value="">---</option>
                           <option value="Employed">Employed</option>
                           <option value="Unemployed but not looking">Unemployed but not looking</option>
                           <option value="Unemployed and looking for work">Unemployed and looking for work</option>
                           <option value="Self-Employed(Freelancer)">Self-Employed(Freelancer)</option>
                           <option value="Entrepreneur building/growing a business">Entrepreneur building/growing a business</option>
                           <option value="student">student</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  Please describe in 200 words or less, why do you want to enroll in this course.<br>
                  <div class="row">
                     <div class="col-md-11">
                        <textarea class="form-control modifiedFrom" rows="5" name="comments" id="comment"></textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  How did you hear about Nepdroid Academy?
                  <div class="row">
                     <div class="col-md-11">
                        <select class="form-control modifiedFrom" name="hear" id="hear">
                           <option value="">---</option>
                           <option value="Facebook Page">Facebook Page</option>
                           <option value="Friends/Family">Friends/Family</option>
                           <option value="Job Recruiter">Job Recruiter</option>
                           <option value="News Article">News Article</option>
                           <option value="Employer/Colleague">Employer/Colleague</option>
                           <option value="Others">Others</option>
                        </select>
                     </div>
                  </div>
               </div>
               <button type="submit" class="btn btn-primary modifiedFrom">Submit</button> <br>
            </div>
         </div>
      </form>
   </div>
</div>
<br><br>
</div>
<?php include 'footer.php' ?>