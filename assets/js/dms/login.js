  $(function(){
      /*
      * SUBMITTIONG LOGIN FORM
      */
       $( ".loginform" ).submit(function(e) {
           e.preventDefault();
           data_action = $(this).data('action');
           //alertmsg(data_action); return;
           //default login button
           var normal_btn = ' <span class="glyphicon glyphicon-flash"></span>Log In';
           $(".loginbutton").html(normal_btn);
           var username = $("#username").val();
           var password = $("#password").val();

           //initialize user
           var user = new User(username, password);

            $("#username").attr("style","");
            $("#password").attr("style","");

         if((user.getPassword().length <= 0) && (user.getUsername().length <= 0))
         {
              $("#password").attr("style","border:2px solid red;");
              $("#username").attr("style","border:2px solid red;");
              alertmsg("Fill Blanks");
               return;
         }

            // Check out the Passwords
           if(user.getPassword().length <= 0)
           {
             $("#password").attr("style","border:2px solid red;");
            alertmsg("Enter Password");
            return;
             }

           // Check Out the User
           if(user.getUsername().length <= 0)
           {
             alertmsg("Enter Username");
             $("#username").attr("style","border:2px solid red;");
             return;
            }
            cancelmsg();
            $(".loginbutton").html("Proccessing...");
            formdata['login'] = 'login';
            formdata['username'] = user.getUsername();
            formdata['password'] = user.getPassword();

            //sending data
          //  var response = form_sending(data_action,formdata,"POST");


            /* ajax sending */
            $.ajax({
              type: "POST",
              url:  data_action,
              data:formdata,
              success: function(data, textStatus, jqXHR){
                console.log(data);
              $(".loginbutton").html(normal_btn);
              response = data;
              if(response  == 0)
                {
                  alertmsg("SOMETHING WENT WRONG, CONTACT SITE ADMINISTRATOR");
                }
                else {

                  var data_array = JSON.parse(response);
                  console.log(data_array);
                  if(data_array.mysgtype == "WARNING")
                  {
                    alertmsg(data_array.msg);

                  }
                  else if(data_array.redirect == true) {
                      location.href = ""+data_array.url ;
                  }
                  console.log(data_array);
                }

              },
              error:function(data , textStatus, jqXHR)
              {
                  alertmsg(data);
              }
          });
          /* end */




       });


  });
