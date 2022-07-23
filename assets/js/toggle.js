$(document).ready(function(){

    var visibleDiv = 0;
    function showDiv(){
      $(".main").hide();
      $(".main:eq("+ visibleDiv +")").show();
    }
    showDiv();

    function showNext()
    {
    if(visibleDiv== $(".main").length-1)
    {
    visibleDiv = 0;
    }
    else {
    visibleDiv ++;
    }
    showDiv();
    }

    function showPrev()
    {
      if(visibleDiv == 0)
      {
        visibleDiv= $(".main").length-1;
      }
      else {
        visibleDiv --;
      }
      showDiv();
    }

    $(".btn-back").click(function(){
      showPrev();

    });

    $(".other2").hide();
    $(".other3").hide();
    $(".other5").hide();
    $(".other6").hide();
    $(".other_ethnicity").hide();
    $(".other_gender").hide();
    $(".other_religion").hide();
    $(".other_orientation").hide();
    $(".why_other").hide();

    $(".conn").change(function() {
        var data2 = $("input[name='connection']:checked").val();
        if(data2 == "other"){
          $(".other2").show();
        }
        else {
          $(".other2").hide();
      }
    });

    $(".rel").change(function() {
        var data3 = $("input[name='relation']:checked").val();
        if(data3 == "other"){
          $(".other3").show();
        }
        else {
          $("#error5").text("");
          $(".other3").hide();

      }
    });

    $(function(){
      $("#other_n5").click(function(event){
        var x = $(this).is(':checked');
        if (x == true)
        {
          $(".other5").show();
        }
        else
        {
            $(".other5").hide();

        }
      });
    });

    $(".reported").change(function(){
        var data4 = $("input[name='ever_reported']:checked").val();
        if(data4 == "Yes"){
          $(".other6").show();
        }
        else {
          $(".other6").hide();
      }
    });

    $(".ethnicity").change(function(){
        var data5 = $("input[name='ethnicity']:checked").val();
        if(data5 == "specified"){
          $(".other_ethnicity").show();
        }
        else {
          $(".other_ethnicity").hide();
          $("#error15").text("");
      }
    });

    $(".gender").change(function(){
        var data6 = $("input[name='gender']:checked").val();
        if(data6 == "Prefer to self-describe"){
          $(".other_gender").show();
        }
        else {
          $(".other_gender").hide();
          $("#error16").text(" ");
      }
    });


    $(".religion").change(function(){
        var data7 = $("input[name='religion']:checked").val();
        if(data7 == "other"){
          $(".other_religion").show();
        }
        else {
          $(".other_religion").hide();
          $("#error17").text(" ");
      }
    });

    $(".sexual_orientation").change(function(){
        var data8 = $("input[name='Sexual_orientation']:checked").val();
        if(data8 == "other"){
          $(".other_orientation").show();
        }
        else {
          $(".other_orientation").hide();
          $("#error18").text(" ");
      }
    });

    $(function(){
      $("#reason_forteen").click(function(event){
        var x = $(this).is(':checked');
        if (x == true)
        {
          $(".why_other").show();
        }
        else
        {
            $(".why_other").hide();
            $("#error14").text(" ");

        }
      });
    });


    $(".btn-cont").click(function(){

      switch (this.name) {
        case "n0":
          showNext();
          break;

        case "n1":
          var who_val = $("input[name='who']:checked").val();
           if(who_val){
               //alert("Your are a reporting for - " + who_val);
               $("#n1_answer").val(who_val);
               showNext();
           }else {
             $("#error1").text("Please select one of these");
             return false;
           }

           console.log($("#n1_answer").val());
           break;

        case "n2":
            var who_val2 = $("input[name='connection']:checked").val();
             if(!who_val2){
                 //alert("Your are a reporting for - " + who_val);
                 $("#error2").text("Please select one of these");

             }
               else if(who_val2 == 'other') {
                 var n2_other_text = $(".other2").val();
                  if(!n2_other_text){
                    $("#error3").text("Please fill this out");

                  }else {
                    $("#n2_answer").val(n2_other_text);
                    showNext();
                  }

                }
                   else {
                     $("#n2_answer").val(who_val2);
                     showNext();
                   }
                   console.log($("#n2_answer").val());

             break;

        case "n3":
             var who_val3 = $("input[name='relation']:checked").val();
              if(!who_val3){
                  //alert("Your are a reporting for - " + who_val);
                  $("#error4").text("Please select one of these");

              }
                else if(who_val3 == 'other') {
                  var n3_other_text = $(".other3").val();
                   if(!n3_other_text){
                     $("#error5").text("Please fill this out");
                    }
                    else {
                     $("#n3_answer").val(n3_other_text);
                     $("#error5").text(" ");
                     showNext();
                   }

                 }
                    else {
                      $("#error5").text(" ");
                      $("#n3_answer").val(who_val3);
                      showNext();
                    }
                console.log($("#n3_answer").val());
              break;

          case "n4":
               var who_val4 = $(".dtl").val();
                if(!who_val4){
                    //alert("Your are a reporting for - " + who_val);
                    $("#error6").text("Please fill this out these");

                }
                  else {
                    $("#error6").text(" ");
                    $("#n4_answer").val(who_val4);
                    showNext();
                   }
                  console.log($("#n4_answer").val());
                break;

         case "n5":
              var checker = $(".fact:checked").length;
              if (checker > 0) {

                  var n5_other = $("#other_n5").is(':checked');
                  if (n5_other == true){
                    var n5_other_text = $(".other5").val();
                     if(!n5_other_text)
                     {
                       $("#error9").text("Please fill this out");
                     }
                     else {
                       showNext();
                     }

                   }
                  else {
                    showNext();
                  }

                }
              else {
                 $("#error8").text("Please select One of these");
              }
              break;

          case "n6":
              var who_val6 = $("input[name='ever_reported']:checked").val();
               if(!who_val6){
                   //alert("Your are a reporting for - " + who_val);
                   $("#error10").text("Please select one");

               }
                 else if(who_val6 == 'Yes') {
                   var n6_other_text = $(".other6").val();
                    if(!n6_other_text){
                      $("#error11").text("Please fill this out");

                    }
                    else {
                      $("#n6_answer").val(n6_other_text);
                      showNext();
                    }

                  }
                     else {
                       $("#n6_answer").val(who_val6);
                       showNext();
                     }
                     console.log($("#n6_answer").val());
           break;


           case "n7":
           var move = true;
           var who_val7 = $("input[name='age']:checked").val();
            if(!who_val7){
                //alert("Your are a reporting for - " + who_val);
                $("#age_value").val("Not selected");
            }else {
              $("#age_value").val(who_val7);
            }

            var who_val8 = $("input[name='disabiliy']:checked").val();
             if(!who_val8){
                 //alert("Your are a reporting for - " + who_val);
                 $("#disabiliy").val("Not selected");
             }else {
               $("#disabiliy").val(who_val8);
             }

             var who_val9 = $("input[name='ethnicity']:checked").val();
              if(!who_val9){
                  //alert("Your are a reporting for - " + who_val);
                  $("#ethnicity").val("Not selected");
                  $("#error15").text("");
              }else if(who_val9 == "specified"){
                var ethnicity_other_text = $(".other_ethnicity").val();
                if(!ethnicity_other_text){
                  $("#error15").text("Please fill about your ethnicity");
                  move = false;
                }else {
                  $("#ethnicity").val(ethnicity_other_text);
                  move = true;
                }

              }else {
                $("#ethnicity").val(who_val9);

              }

              var who_val10 = $("input[name='gender']:checked").val();
               if(!who_val10){
                   //alert("Your are a reporting for - " + who_val);
                   $("#gender").val("Not selected");
                   $("#error16").text("");
               }else if(who_val10 == "Prefer to self-describe"){
                 var gender_other_text = $(".other_gender").val();
                 if(!gender_other_text){
                   $("#error16").text("Please fill about your ethnicity");
                   move = false;
                 }else {
                   $("#gender").val(gender_other_text);
                   move = true;
                 }
               }else {
                 $("#gender").val(who_val10);
               }

               var who_val11 = $("input[name='assigned_gender']:checked").val();
                if(!who_val11){
                    //alert("Your are a reporting for - " + who_val);
                    $("#same_age").val("Not selected");
                }else {
                  $("#same_age").val(who_val11);
                }

                var who_val12 = $("input[name='legal_sex']:checked").val();
                 if(!who_val12){
                     //alert("Your are a reporting for - " + who_val);
                     $("#legal_sex").val("Not selected");
                 }else {
                   $("#legal_sex").val(who_val12);
                 }

                 var who_val13 = $("input[name='religion']:checked").val();
                  if(!who_val13){
                      //alert("Your are a reporting for - " + who_val);
                      $("#religion_answer").val("Not selected");
                      $("#error17").text("");
                  }else if(who_val13 == "other"){
                    var religion_other_text = $(".other_religion").val();
                    if(!religion_other_text){
                      $("#error17").text("Please fill about your religion");
                      move = false;
                    }else {
                      $("#religion_answer").val(religion_other_text);
                      move = true;
                    }
                  }else {
                    $("#religion_answer").val(who_val13);
                  }

                  var who_val14 = $("input[name='Sexual_orientation']:checked").val();
                   if(!who_val14){
                       //alert("Your are a reporting for - " + who_val);
                       $("#sexual_orientation").val("Not selected");
                       $("#error18").text("");
                   }else if(who_val14 == "other"){
                     var sexual_orientation_other_text = $(".other_orientation").val();
                     if(!sexual_orientation_other_text){
                       $("#error18").text("Please fill about your sexual orientation");
                       move = false;
                     }else {
                       $("#sexual_orientation").val(sexual_orientation_other_text);
                       move = true;
                     }
                   }else {
                     $("#sexual_orientation").val(who_val14);
                   }

                   if(move){
                     showNext();

                    console.log($("#age_value").val());
                    console.log($("#disabiliy").val());
                    console.log($("#ethnicity").val());
                    console.log($("#gender").val());
                    console.log($("#same_age").val());
                    console.log($("#legal_sex").val());
                    console.log($("#religion_answer").val());
                    console.log($("#sexual_orientation").val());

                   }
            break;


            case "n_d_8":

                var mover = true;
                var contact_name = $(".contact_name").val();
                var contact_number = $(".contact_number").val();
                var contact_email =  $(".contact_email").val();
                var contact_student_number = $(".contact_student_number").val();

                $("#error15").text("Please fill this out");

                if(!contact_email){
                  $(".contact_email").text("N/A");
                  mover = true;
                }

                if(!contact_student_number){
                  $(".contact_student_number").text("N/A");
                  mover = true;
                }

                if(!contact_name){
                  $("#error20").text("please fill out");
                  mover = false;
                }else {
                  $("#error20").text(" ");
                }

                if(!contact_number){
                  $("#error21").text("Please fill this out");
                  mover = false;
                }else {
                  $("#error21").text(" ");
                }


                if (mover) {
                  showNext();
                }

                break;

          case "n_a_8":

              var check = $(".reasons:checked").length;
              //var check = $("input[.reasons]:selected").length;
              if (check > 0) {

                  var reasons_other = $("#reason_forteen").is(':checked');
                  if (reasons_other == true){
                    var why_other_text = $(".why_other").val();
                     if(!why_other_text)
                     {
                       $("#error14").text("Please fill this out");
                     }
                     else {
                       showNext();
                     }
                   }
                  else {
                    showNext();
                  }
                }
                else {
                  showNext();
                }
                console.log(check);
              break;


      }
    });
});
