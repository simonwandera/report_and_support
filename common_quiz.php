<!-- Question One start here -->
<div class="main col-lg-12 col-md-12 col-sm-12" style="background-color: #eeeeef; margin: auto;" >
     <div class="inner-part text-left mb-50">

        <div class="text-center">
          <h4>Are you reporting on behalf of yourself or somebody else?</h4>
        </div>

        <div class="text-left col-lg-5 col-md-10 col-sm-12" style="margin: auto;">
          <font id = "error1" class = "error-msg"></font>
          <input type="hidden" id="n1_answer" value="" name = "n1_answer">

        <div class="row">
            <div class="text-left" style="padding:10px">
              <input type="radio" name="who" value="My self" id = "me" class = "form-control who" style="height:35px; width:35px"></input>
            </div>
            <div class="text-left" style="padding:10px">
              <label for="me" style="font-size:20px; margin-bottom:0px">My self</label>
            </div>
        </div>
        <br>

        <div class="row">
          <div class="text-right" style="padding:10px">
            <input type="radio" name="who" value="Someone else" id = "notme" class = "form-control who" style="height:35px; width:35px"></input>
          </div>
          <div class="text-left" style="padding:10px">
            <label for="notme" style="font-size:20px; margin-bottom:0px">Someone else</label>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-12" style="margin:auto; padding-bottom: 10px">
        <div class="row justify-content-center">

              <div class="col">
                <input type="button" name="n1" value="< Back" class = "btn btn-primary btn-block btn-back" style="height:3em">
              </div>

              <div class="col">
                  <input type="button" name="n1" value="Continue" class = "btn btn-primary btn-block btn-cont" style="height:3em">
              </div>
          </div>
    </div>
</div>
<!-- Question One Ends here -->

<!-- Question Two starts here -->
<div class="main" style="background-color: #eeeeef; margin: auto;" >
   <div class="inner-part text-left mb-50">
      <div class="text-left col-lg-5 col-md-10 col-sm-12" style="margin: auto;">
        <h4>What is your connection with the University?</h4>
      </div>

      <div class="text-left col-lg-5 col-md-10 col-sm-12" style="margin: auto;">
        <font id = "error2" class = "error-msg"></font>
        <input type="hidden" id="n2_answer" name="n2_answer" value="">

      <div class="row">
        <div class="text-left" style="padding:10px">
            <input type="radio" id = "undergraduate" name="connection" class = "form-control conn" value="Undergraduate" style="height:35px; width: 35px">
        </div>
        <div class="text-left" style="padding:10px">
          <label for="undergraduate" style="font-size:20px; margin-bottom:0px">Undergraduate</label>
        </div>
      </div>
      <br>

      <div class="row">
        <div class="text-left" style="padding:10px">
            <input type="radio" id = "postgraduate" name="connection" value="Postgraduate" class = "form-control conn" style="height:35px; width: 35px">
        </div>
        <div class="text-left" style="padding:10px">
          <label for="postgraduate" style="font-size:20px; margin-bottom:0px">Postgraduate</label>
        </div>
      </div>
      <br>

      <div class="row">
        <div class="text-left" style="padding:10px">
            <input type="radio" id = "staff_member" name="connection" class = "form-control conn" value="Staff" style="height:35px; width: 35px">
        </div>
        <div class="text-left" style="padding:10px">
          <label for="staff_member" style="font-size:20px; margin-bottom:0px">Staff</label>
        </div>
      </div>
      <br>

      <div class="row">
        <div class="text-left" style="padding:10px">
            <input type="radio" id = "n2_other" name="connection" class = "form-control conn" value="other" style="height:35px; width: 35px">
        </div>

            <div class="text-left" style="padding:10px">
              <label for="n2_other" style="font-size:20px; margin-bottom:0px">Other</label>
              <input type="text" name="n2_other_text" class = "form-control other2" placeholder="please describe">
              <font id = "error3" class = "error-msg"></font>
            </div>
          <br>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-12" style="margin:auto; padding-bottom: 10px">
      <div class="row justify-content-center">

         <div class="col">
           <input type="button" name="n2" value="< Back" class = "btn btn-primary btn-block btn-back" style="height:3em">
         </div>

         <div class="col">
             <input type="button" name="n2" value="Continue" class = "btn btn-primary btn-block btn-cont" style="height:3em">
         </div>

      </div>
    </div>
</div>
    <!-- Question Two Ends here -->

<!-- Question Three starts here -->
 <div class="main col-lg-12 col-md-11 col-sm-12" style="background-color: #eeeeef; margin: auto;">
    <div class="inner-part text-left mb-50">
       <div class="text-justify" style="margin:auto;">
         <div class="col-lg-8 col-md-11 col-sm-12" style="margin:auto;">
           <h4>Which of the following best describes the situation your report relates to?</h4>
           <p>The definitions provided on this page are for illustrative purposes only and are not a definitive list. If you have experienced something that has made you feel uncomfortable, or experienced or witnessed something you feel falls below the standards of conduct expected of students by the University, let us know. You will be able to provide more details on the next page.</p>
         </div>
       </div>

      <div class="text-left col-lg-8 col-md-10 col-sm-12" style="margin: auto;">
         <font id = "error4" class = "error-msg"></font>
         <input type="hidden" id="n3_answer" name="n3_answer" value="">

      <div class="row">
         <div class="text-left" style="padding:10px">
           <input type="radio" name="relation" value="Bullying" class = "form-control rel" id="bullying" style="height:35px; width: 35px">
         </div>
         <div class="text-left" style="padding:10px">
           <label for="bullying">Bullying</label>
         </div>
         <div class="text-justify" style="padding:5px">
           <p>Offensive, intimidating, humiliating, malicious or insulting behaviour that can undermine person's confidence, reducing feelings of self esteem and self worth. Includes cyber bullying.</p>
         </div>
       </div>

       <br>

       <div class="row">
         <div class="text-right" style="padding:10px">
           <input type="radio" name="relation" value="Harassment" class = "form-control rel" id="Harassment" style="height:35px; width: 35px">
         </div>
         <div class="text-left" style="padding:10px">
           <label for="Harassment">Harassment</label>
         </div>
         <div class="text-justify" style="padding:5px">
           <p>Unwanted behaviour relating to a person's protected characteristics which has the purpose or effect of violating someone's dignity or which creates an intimidating, hostile, degrading, humiliating or offensive environment. Includes hate incidents and online harassment.</p>
         </div>
       </div>
       <br>

         <div class="row">
           <div class="text-left" style="padding:10px">
             <input type="radio" name="relation" value="Sexual harassment" class = "form-control rel" id = "sexual_harassment" style="height:35px; width: 35px">
           </div>
           <div class="text-left" style="padding:10px">
            <label for="sexual_harassment">Sexual Harassment</label>
           </div>
           <div class="text-justify" style="padding:5px">
             <p>Sexual harassment is when someone behaves in a way which makes you feel distressed, intimidated or offended and the behaviour is of a sexual nature. Sexual harassment can include: sexual comments or jokes, physical behaviour, including unwelcome sexual advances and touching.</p>
           </div>
         </div>
         <br>

         <div class="row">
          <div class="text-left" style="padding:10px">
             <input type="radio" name="relation" value="Sexual violence" class = "form-control rel" id = "Sexual_violence" style="height:35px; width: 35px">
          </div>
          <div class="text-left" style="padding:10px">
            <label for="Sexual_violence">Sexual violence</label>
          </div>
          <div class="text-justify" style="padding:5px">
             <p>Sexual violence is defined as a sexual act committed against someone without that person's freely given consent, this includes completed or attempted acts and those that relate to alcohol/drug- facilitated acts.</p>
          </div>
         </div>
         <br>

         <div class="row">
           <div class="text-left" style="padding:10px">
             <input type="radio" name="relation" value="Physical Violence" class = "form-control rel" id = "Physical_Violence" style="height:35px; width: 35px">
           </div>
           <div class="text-left" style="padding:10px">
             <label for="Physical_Violence">Physical Violence</label>
           </div>
           <div class="text-justify" style="padding:5px">
             <p>Acts or threats of physical harm to another, including punching, kicking, shoving, biting, slapping, throwing objects, and similar behaviours.</p>
           </div>
         </div>
         <br>

         <div class="row">
           <div class="text-left" style="padding:10px">
             <input type="radio" name="relation" value="Covid 19 related concern" class = "form-control rel" id="covid_19" style="height:35px; width: 35px">
           </div>
           <div class="text-left" style="padding:10px">
             <label for="covid_19">Covid 19 related concern</label>
           </div>
           <div class="text-justify" style="padding:5px">
             <p>Any incidents of students not following national laws or guidance, University guidance and health and safety policy, or local laws and guidance relating to Covid 19 requirements or restrictions.</p>
           </div>
         </div>
         <br>

         <div class="row">
           <div class="text-left" style="padding:10px">
             <input type="radio" name="relation" value="other" id="relation_other" class = "form-control rel" style="height:35px; width: 35px">
           </div>
           <div class="text-left" style="padding:5px">
             <label for="relation_other">Other(Please specify)</label>
             <input type="text" name="n3_other_text" class = "form-control other3" placeholder="please describe here">
            <font id = "error5" class = "error-msg"></font>
           </div>
         </div>
         <br>

      </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-12" style="margin:auto; padding-bottom: 10px">
      <div class="row justify-content-center">

          <div class="col">
              <input type="button" name="n3" value="< Back" class = "btn btn-primary btn-block btn-back" style="height:3em">
          </div>

          <div class="col">
              <input type="button" name="n3" value="Continue" class = "btn btn-primary btn-block btn-cont" style="height:3em">
          </div>
        </div>
    </div>
 </div>
   <!-- Question Three Ends here -->

   <!-- Question Four starts here -->
<div class="main col-lg-12 col-md-11 col-sm-12" style="background-color: #eeeeef; margin: auto;">
  <div class="inner-part text-left mb-50">
      <br>

      <div class="text-left col-lg-8 col-md-11 col-sm-12" style="margin: auto;">
        <input type="hidden" id="n4_answer" name="n4_answer" value="">
        <p class="text-justify">Provide dates, times and locations if possible. You only need to share what you feel comfortable writing</p> <br>
        <br>
        <h4>Please provide any details of the report you would like to make</h4>
        <font id = "error6" class = "error-msg"></font>

         <div class="form-group">
             <textarea class="form-control rounded-0 dtl" id="details" name="details" placeholder="Please provide your details here" required="" rows="6"></textarea>
         </div>
         <br>

         <div class="fluid-container text-left">
             <h4>If applicable, upload any image files that you wish to include as evidence</h4>
               <input type="file" name="file" id="file" class="from-control" placeholder="file" value="Choose file">
              <font id = "error7" class = "error-msg"></font>
         </div>
       </div>
  </div>

      <div class="col-lg-6 col-md-12 col-sm-12" style="margin:auto; padding-bottom: 10px">
          <div class="row justify-content-center">
              <div class="col">
                <input type="button" name="n4" value="< Back" class = "btn btn-primary btn-block btn-back" style="height:3em">
              </div>

              <div class="col">
                  <input type="button" name="n4" value="Continue" class = "btn btn-primary btn-block btn-cont" style="height:3em">
              </div>
          </div>
       </div>
    </div>
   <!-- Question Four Ends here -->

  <!-- Question Five Starts here -->
   <div class="main col-lg-12 col-md-12 col-sm-12" style="background-color: #eeeeef; margin: auto;" >
   <div class="inner-part text-justify mb-50">
         <div class="text-justify col-lg-8 col-md-10 col-sm-12" style="margin: auto;"> 
           <h4>Do you believe that any protected characteristics were a factor in the incident?</h4>
           <br>
           <p>If you believe there was more than one reason, please choose what you believe to be the main reasons.</p>
         </div>

         <div class="text-left col-lg-7 col-md-10 col-sm-12" style="margin: auto;">
           <font id = "error8" class = "error-msg"></font>
           <div class="row">
             <div class="text-right" style="padding:10px">
               <input type="checkbox" name="factor[]" class="form-control fact" value="None" id="None" style="height:30px; width: 30px">
             </div>
             <div class="text-left" style="padding:10px">
               <label for="None">None</label>
             </div>
           </div><br>

           <div class="row">
             <div class="text-right" style="padding:10px">
               <input type="checkbox" name="factor[]" class="form-control fact" value="Age" id ="Age" style="height:30px; width: 30px">
             </div>
             <div class="text-left" style="padding:10px">
               <label for="Age">Age</label>
             </div>
           </div><br>

           <div class="row">
             <div class="text-left" style="padding:10px">
               <input type="checkbox" name="factor[]" class="form-control fact" value="Disability" id ="Disability" style="height:30px; width: 30px">
             </div>
             <div class="text-left" style="padding:10px">
               <label for="Disability">Disability</label>
             </div>
           </div><br>

           <div class="row">
             <div class="text-left" style="padding:10px">
               <input type="checkbox" name="factor[]" class="form-control fact" value="Sex" id ="Sex" style="height:30px; width: 30px">
             </div>
             <div class="text-left" style="padding:10px">
               <label for="Sex">Sex</label>
             </div>
           </div><br>

           <div class="row">
             <div class="text-left" style="padding:10px">
               <input type="checkbox" name="factor[]" class="form-control fact" value="Sexual orientation" id ="Sexual_orientation" style="height:30px; width: 30px">
             </div>
             <div class="text-left" style="padding:10px">
               <label for="Sexual_orientation">Sexual orientation</label>
             </div>
           </div><br>

           <div class="row">
             <div class="text-left" style="padding:10px">
               <input type="checkbox" name="factor[]" class="form-control fact" value="Race" id ="Race" style="height:30px; width: 30px">
             </div>
             <div class="text-left" style="padding:10px">
               <label for="Race">Race</label>
             </div>
           </div><br>

           <div class="row">
             <div class="text-left" style="padding:10px">
               <input type="checkbox" name="factor[]" class="form-control fact" value="Religion or belief" id ="Religion_or_belief" style="height:30px; width: 30px">
             </div>
             <div class="text-left" style="padding:10px">
               <label for="Religion_or_belief">Religion or belief</label>
             </div>
           </div><br>

           <div class="row">
             <div class="text-left" style="padding:10px">
               <input type="checkbox" name="factor[]" class="form-control fact" value="Gender reassignment" id ="Gender_reassignment" style="height:30px; width: 30px">
             </div>
             <div class="text-left" style="padding:10px">
               <label for="Gender_reassignment">Gender reassignment</label>
             </div>
           </div>
           <br>

           <div class="row">
             <div class="text-left" style="padding:10px">
               <input type="checkbox" name="factor[]" class="form-control fact" value="Marital or civil partnership status" id ="partnership_status" style="height:30px; width: 30px">
             </div>
             <div class="text-left" style="padding:10px">
               <label for="partnership_status">Marital or civil partnership status</label>
             </div>
           </div><br>

           <div class="row">
             <div class="text-left" style="padding:10px">
               <input type="checkbox" name="factor[]" class="form-control fact" value="Pregnancy or maternity status" id ="Pregnancy_status" style="height:30px; width: 30px">
             </div>
             <div class="text-left" style="padding:10px">
               <label for="Pregnancy_status">Pregnancy or maternity status</label>
             </div>
           </div><br>

           <div class="row">
             <div class="text-left" style="padding:10px">
               <input type="checkbox" name="factor[]" class="form-control fact" value="other" id ="other_n5" style="height:30px; width: 30px">
             </div>
             <div class="text-left" style="padding:10px">
               <label for="other_n5">Other (please specify)</label>
               <input type="text" name="n5_other_text" class = "form-control other5" placeholder="please describe here">
              <font id = "error9" class = "error-msg"></font>
             </div>
             </div>
           </div>
         </div>
           <br>

           <div class="col-lg-6 col-md-12 col-sm-12" style="margin:auto; padding-bottom: 10px">
               <div class="row justify-content-center">

                      <div class="col">
                        <input type="button" name="n5" value="< Back" class = "btn btn-primary btn-block btn-back" style="height:3em">
                      </div>

                      <div class="col">
                          <input type="button" name="n5" value="Continue" class = "btn btn-primary btn-block btn-cont" style="height:3em">
                      </div>

                  </div>
            </div>
     </div>
 <!-- Question Five Ends here -->

 <!-- Question six starts here -->
 <div class="main col-lg-12 col-md-12 col-sm-12" style="background-color: #eeeeef; margin: auto;" >
   <div class="inner-part text-left mb-50">
      <div class="text-justify" style="margin:auto;">
        <div class="col-lg-8 col-md-10 col-sm-12" style="margin:auto;">
            <p>Within the limits of safeguarding requirements, we will not pressure you into making a report if you have chosen not to, but we may be able to advise you and support you to make whatever choice is best for you.</p>
            <br>
            <h4>Have your reported this incident elsewhere?</h4>
         </div>
       </div>

       <div class="text-left col-lg-7 col-md-10 col-sm-12" style="margin: auto; padding: 20px;">
         <font id = "error10" class = "error-msg"></font>
         <input type="hidden" id="n6_answer" name="n6_answer" class="n6_answer" value="">

         <div class="row">
           <div class="text-left" style="padding:10px">
             <input type="radio" name="ever_reported" value="No" class="form-control reported" id="not_reported" style="height:35px; width: 35px">
           </div>
           <div class="text-left" style="padding:10px">
             <label for="not_reported">No</label>
           </div>
         </div>
         <br>

         <div class="row">
           <div class="text-left" style="padding:10px">
             <input type="radio" name="ever_reported" value="Yes" class="form-control reported" id="yes_reported" style="height:35px; width: 35px">
           </div>

           <div class="text-left" style="padding:10px">
             <label for="yes_reported">Yes</label>
             <input type="text" name="n6_other_text" class = "form-control other6" placeholder="please describe here">
            <font id = "error11" class = "error-msg"></font>
           </div>
         </div>
        </div>
      </div>

    <div class="col-lg-6 col-md-12 col-sm-12" style="margin:auto; padding-bottom: 10px">
      <div class="row justify-content-center">

            <div class="col">
              <input type="button" name="n6" value="< Back" class = "btn btn-primary btn-block btn-back" style="height:3em">
            </div>
            <div class="col">
                <input type="button" name="n6" value="Continue" class = "btn btn-primary btn-block btn-cont" style="height:3em">
            </div>
        </div>
    </div>
 </div>
 <!-- Question six Ends here -->

 <div class="main col-lg-12 col-md-12 col-sm-12" style="background-color: #eeeeef; margin: auto;" >
   <div class="inner-part text-left mb-50">
     <div class="col-lg-8 col-md-10 col-sm-12 text-justify" style="margin:auto;">
        <p>The following questions are <b>optional.</b> We monitor reports by these equality groups to inform our future work. For example, we might want to know how many female students have made a report in the last 6 months. We do not include any personal details in these monitoring reports.</p>
        <p>If you are reporting on behalf of someone else please answer these questions as they relate to the person you are reporting for and not yourself.</p>
      </div>

      <!-- Age starts here -->
      <div class="col-lg-7 col-md-10 col-sm-12 text-justify" style="margin:auto;">
        <h4>Age</h4>
        <input type="hidden" name="age" id = "age_value" value="">
         <div class="row">
           <div class="text-left" style="padding:5px">
             <input type="radio" name="age" value="17 or under" id="17_or_under" style="height:35px; width: 35px">
           </div>
           <div class="text-left" style="padding:10px">
             <label for="17_or_under">17 or under</label>
           </div>
         </div>

         <div class="row">
           <div class="text-left" style="padding:5px">
             <input type="radio" name="age" value="18 - 21 years" id="18to21" style="height:35px; width: 35px">
           </div>
           <div class="text-left" style="padding:10px">
             <label for="18to21">18 - 21 years</label>
           </div>
         </div>

         <div class="row">
           <div class="text-left" style="padding:5px">
             <input type="radio" name="age" value="22 - 25 years" id="22to25" style="height:35px; width: 35px">
           </div>
           <div class="text-left" style="padding:10px">
             <label for="22to25">22 - 25 years</label>
           </div>
         </div>

         <div class="row">
           <div class="text-left" style="padding:5px">
             <input type="radio" name="age" value="26 - 35 years" id="26to35" style="height:35px; width: 35px">
           </div>
           <div class="text-left" style="padding:10px">
             <label for="26to35">26 - 35 years</label>
           </div>
         </div>

         <div class="row">
           <div class="text-left" style="padding:5px">
             <input type="radio" name="age" value="36 - 45 years" id="36to45" style="height:35px; width: 35px">
           </div>
           <div class="text-left" style="padding:10px">
             <label for="36to45">36 - 45 years</label>
           </div>
         </div>

         <div class="row">
           <div class="text-left" style="padding:5px">
             <input type="radio" name="age" value="46 years and over" id="over45" style="height:35px; width: 35px">
           </div>
           <div class="text-left" style="padding:10px">
             <label for="over45">46 years and over</label>
           </div>
         </div>

         <div class="row">
           <div class="text-left" style="padding:5px">
             <input type="radio" name="age" value="Prefer not to say" id="age_not_said" style="height:35px; width: 35px">
           </div>
           <div class="text-left" style="padding:10px">
             <label for="age_not_said">Prefer not to say</label>
           </div>
         </div>
        </div>
        <br>
        <!-- Age Ends here -->

        <!-- disability starts here -->
        <div class="col-lg-7 col-md-10 col-sm-12 text-justify" style="margin:auto;">
           <h4>Do you consider yourself to be disabled within the definition of the Equality Act 2010?</h4>
           <p>The Equality Act 2010 describes a disabled person as: "…anyone who has a physical, sensory or mental impairment, which has a substantial and long term adverse effect on their ability to carry out normal day-to-day activities."</p>
           <input type="hidden" id = "disabiliy" name ="disabiliy" value="">
           <div class="row">
             <div class="text-left" style="padding:5px">
               <input type="radio" name="disabiliy" value="Yes" id="disabiliy_yes" style="height:35px; width: 35px">
             </div>
             <div class="text-left" style="padding:10px">
               <label for="disabiliy_yes">Yes</label>
             </div>
           </div>

           <div class="row">
             <div class="text-left" style="padding:5px">
               <input type="radio" name="disabiliy" value="No" id="disabiliy_no" style="height:35px; width: 35px">
             </div>
             <div class="text-left" style="padding:10px">
               <label for="disabiliy_no">No</label>
             </div>
           </div>

           <div class="row">
             <div class="text-left" style="padding:5px">
               <input type="radio" name="disabiliy" value="Prefer not to say" id="disabiliy_not_said" style="height:35px; width: 35px">
             </div>
             <div class="text-left" style="padding:10px">
               <label for="disabiliy_not_said">Prefer not to say</label>
             </div>
           </div>
        </div>
        <br>
        <!-- disability Ends here -->

        <!-- Ethnicity starts here -->
        <div class="col-lg-7 col-md-10 col-sm-12 text-justify" style="margin:auto;">
          <h4>Ethnicity</h4>
          <input type="hidden" name="ethnicity" id ="ethnicity" value="">
          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="ethnicity" class = "form-control ethnicity" value="Prefer not to say" id="ethnic_unspecified" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="ethnic_unspecified">Prefer not to say</label>
            </div>
          </div>

          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="ethnicity" class = "form-control ethnicity" value="specified" id="ethnic_specified" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="ethnic_specified">Click to specify</label>
              <input type="text" name="ethnicity_other_text" class = "form-control other_ethnicity" placeholder="please describe here">
              <font id = "error15" class = "error-msg"></font>
            </div>
          </div>
        </div>
        <br>
        <!-- End of Ethnicity -->

        <!-- Gender starts here-->
        <div class="col-lg-7 col-md-10 col-sm-12 text-justify" style="margin:auto;">
          <h4>Gender</h4>
          <input type="hidden" name="gender" id = "gender" value="">
          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="gender" value="Male" id="male" class = "form-control gender" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="male">Male</label>
            </div>
          </div>

          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="gender" value="Female" class = "form-control gender" id="Female" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="Female">Female</label>
            </div>
          </div>

          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="gender" value="Non Binary" class = "form-control gender" id="Non_Binary" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="Non_Binary">Non Binary</label>
            </div>
          </div>

          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="gender" value="Prefer not to say" class = "form-control gender" id="gender_not_said" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="gender_not_said">Prefer not to say</label>
            </div>
          </div>

          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="gender" value="Prefer to self-describe" class = "form-control gender" id="gender_describe" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="gender_describe">Prefer to self-describe</label>
              <br>
              <input type="text" name="gender_other_text" class = "form-control other_gender" placeholder="please describe here">
              <font id = "error16" class = "error-msg"></font>
            </div>
          </div>
        </div>
        <br>
        <!-- Gender Ends here-->

        <!-- assigned gender start here-->
        <div class="col-lg-7 col-md-10 col-sm-12 text-justify" style="margin:auto;">
          <h4>Is your gender identity different from the gender you were assigned at birth?</h4>
          <input type="hidden" name="same_gender" id = "same_age" value="">
          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="assigned_gender" value="Yes" id="assigned_gender_yes" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="assigned_gender_yes">Yes</label>
            </div>
          </div>

          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="assigned_gender" value="No" id="assigned_gender_no" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="assigned_gender_no">No</label>
            </div>
          </div>

          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="assigned_gender" value="Prefer not to say" id="gender_describe_not_said" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="gender_describe_not_said">Prefer not to say</label>
            </div>
          </div>
        </div>
        <br>
        <!-- assigned gender start here-->

        <!-- Legal sex start-->
        <div class="col-lg-7 col-md-10 col-sm-12 text-justify" style="margin:auto;">
          <h4>What is your legal sex?</h4>
          <input type="hidden" name="legal_sex" id = "legal_sex" value="">
          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="legal_sex" value="Female" id="legal_sex_female" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="legal_sex_female">Female</label>
            </div>
          </div>

          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="legal_sex" value="male" id="legal_sex_male" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="legal_sex_male">Male</label>
            </div>
          </div>

          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="legal_sex" value="Intersex" id="legal_sex_intersex" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="legal_sex_intersex">Intersex</label>
            </div>
          </div>

          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="legal_sex" value="Prefer not to say" id="legal_sex_not_said" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="legal_sex_not_said">Prefer not to say</label>
            </div>
          </div>
        </div>
        <br>
        <!-- Legal sex ends here-->

        <!-- Religion starts here -->
        <div class="col-lg-7 col-md-10 col-sm-12 text-justify" style="margin:auto;">
          <h4>Religion or belief</h4>
          <input type="hidden" name="religion_answer" id = "religion_answer" value="">
          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="religion" value="No religion" class = "form-control religion" id="No_religion" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="No_religion">No religion</label>
            </div>
          </div>

          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="religion" value="Chistian - Catholic" class = "form-control religion" id="Catholic" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="Catholic">Chistian - Catholic</label>
            </div>
          </div>

          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="religion" value="Chistian - Protestant" class = "form-control religion" id="protestant" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="protestant">Chistian - Protestant</label>
            </div>
          </div>

          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="religion" value="Muslim" class = "form-control religion" id="Muslim" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="Muslim">Muslim</label>
            </div>
          </div>

          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="religion" value="Hindu" id="Hindu" class = "form-control religion" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="Hindu">Hindu</label>
            </div>
          </div>

          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="religion" value="Jewish" class = "form-control religion" id="Jewish" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="Jewish">Jewish</label>
            </div>
          </div>

          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="religion" value="Sikh" class = "form-control religion" id="Sikh" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="Sikh">Sikh</label>
            </div>
          </div>

          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="religion" value="other" class = "form-control religion" id="religion_other" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="religion_other">Other</label>
              <input type="text" name="religion_other_text" class = "form-control other_religion" placeholder="please describe here">
              <font id = "error17" class = "error-msg"></font>
            </div>
          </div>

          <div class="row">
            <div class="text-left" style="padding:5px">
              <input type="radio" name="religion" value="Prefer not to say" class = "form-control religion" id="religion_not_said" style="height:35px; width: 35px">
            </div>
            <div class="text-left" style="padding:10px">
              <label for="religion_not_said">Prefer not to say</label>
            </div>
          </div>
        </div>
        <br>
          <!-- Religion ends here -->

          <!-- Sexual orientation starts here-->
          <div class="col-lg-7 col-md-10 col-sm-12 text-justify" style="margin:auto;">
            <h4>Sexual orientation</h4>
            <input type="hidden" name="sexual_orientation_answer" id = "sexual_orientation" value="">
            <div class="row">
              <div class="text-left" style="padding:5px">
                <input type="radio" name="Sexual_orientation" value="Heterosexual/Straight" class = "form-control sexual_orientation" id="Heterosexual" style="height:35px; width: 35px">
              </div>
              <div class="text-left" style="padding:10px">
                <label for="Heterosexual">Heterosexual/Straight</label>
              </div>
            </div>

            <div class="row">
              <div class="text-left" style="padding:5px">
                <input type="radio" name="Sexual_orientation" value="Homosexual" class = "form-control sexual_orientation" id="Homosexual" style="height:35px; width: 35px">
              </div>
              <div class="text-left" style="padding:10px">
                <label for="Homosexual">Gay/lesbian (Homosexual)</label>
              </div>
            </div>

            <div class="row">
              <div class="text-left" style="padding:5px">
                <input type="radio" name="Sexual_orientation" value="Bi-Sexual" class = "form-control sexual_orientation" id="bi_sexual" style="height:35px; width: 35px">
              </div>
              <div class="text-left" style="padding:10px">
                <label for="bi_sexual">Bi-Sexual</label>
              </div>
            </div>

            <div class="row">
              <div class="text-left" style="padding:5px">
                <input type="radio" name="Sexual_orientation" value="other" class = "form-control sexual_orientation" id="Sexual_orientation_other" style="height:35px; width: 35px">
              </div>
              <div class="text-left" style="padding:10px">
                <label for="Sexual_orientation_other">Other</label>
                <input type="text" name="sexual_orientation_other_text" class = "form-control other_orientation" placeholder="please describe here">
                <font id = "error18" class = "error-msg"></font>
              </div>
            </div>

            <div class="row">
              <div class="text-left" style="padding:5px">
                <input type="radio" name="Sexual_orientation" value="Prefer Not to say" class = "form-control sexual_orientation" id="Sexual_orientation_not_said" style="height:35px; width: 35px">
              </div>
              <div class="text-left" style="padding:10px">
                <label for="Sexual_orientation_not_said">Prefer Not to say</label>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Sexual orientation -->

        <div class="col-lg-6 col-md-12 col-sm-12" style="margin:auto; padding-bottom: 10px">
          <div class="row justify-content-center">
            <div class="col">
                <input type="button" name="n7" value="< Back" class = "btn btn-primary btn-block btn-back" style="height:3em">
            </div>
            <div class="col">
                <input type="button" name="n7" value="Continue" class = "btn btn-primary btn-block btn-cont" style="height:3em">
            </div>
          </div>
       </div>
     </div>
 <!-- Question seven Ends here -->
