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
<div class="container-fluid career-cont">
<div class="container">
   <br>
   <div class="container">
      <br>
      <h2 class="section-heading">Make caarer with us</h2>
      <hr class="course-line">
      <p align="center">As our company is rebranding, we have put in an effort to revamp our job application site as well. Applying for a job had never been easier. Introducing new and improved site, created just to simplify your job applying process. It’s fast, it’s simple and it’s hassle free.<br><br>
         <b>So what are you waiting for? Drop your CV today!!</b>
      </p>
      <br><br><br>
      <form style="margin-bottom: 20px;">
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  Your Name (required)
                  <div class="row">
                     <div class="col-md-11">
                        <input type="text" class="form-control modifiedFrom" id="name">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  Email Address (required)
                  <div class="row">
                     <div class="col-md-11">
                        <input type="email" class="form-control modifiedFrom" id="email">
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
                        <input type="number" class="form-control modifiedFrom" id="pwd">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  Prefferd (required)
                  <div class="row">
                     <div class="col-md-11">
                        <select class="form-control modifiedFrom" id="course">
                           <option value="">---</option>
                           <option value="Graphic Design">Trainee</option>
                           <option value="PHP &amp; MYSQL">Intern</option>
                           <option value="Java">Job</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  Expertise (Eg. PHP)
                  <div class="row">
                     <div class="col-md-11">
                        <input type="text" class="form-control modifiedFrom" id="preferedTiming">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  Total Experience (months) 
                  <div class="row">
                     <div class="col-md-11">
                        <input type="text" class="form-control modifiedFrom" maxlength="30" id="preferedTiming">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  Cover Letter<br>
                  <div class="row">
                     <div class="col-md-11">
                        <textarea class="form-control modifiedFrom" maxlength="2000" rows="5" id="comment"></textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <br>
                  <b>Resume</b><small> (Files must be less than 2 MB)</small><br><br>
                  <div class="row">
                     <div class="col-md-6">
                        <input id="file_upload" name="file_upload" type="file" multiple="true">
                     </div>
                     <div class="col-md-6">
                     </div>
                  </div>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button> <br>
            </div>
         </div>
      </form>
   </div>
</div>
<script type="text/javascript">
   <?php $timestamp = time();?>
   $(function() {
   	$('#file_upload').uploadify({
   		'formData'     : {
   			'timestamp' : '<?php echo $timestamp;?>',
   			'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
   		},
   		'swf'      : 'uploadify/uploadify.swf',
   		'uploader' : 'uploadify/uploadify.php'
   	});
   });
</script>
<?php include 'footer.php' ?>