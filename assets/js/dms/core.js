// codemovers.com

 formdata = {};
    function Login(username,passwordname)
    {
      this.username = username;
      this.passwordname = passwordname;
      formdata['username'] = username;
      formdata['passwordname'] = passwordname;
      console.log(formdata);
    }

    Login.prototype.getPassword = function ()
    {
    return this.passwordname;
    };

    Login.prototype.getUsername = function ()
    {
    return this.username;
    };

    function User(username, passwordname) {
     this.username = username;
     this.passwordname = passwordname;
    }

    User.prototype = new Login();



    /* form validation using prototyping */

    //handle form validations and submitting
    var form_validation = function(e)
    {
      var form = e;
      var formid = form.id;
      var datatype = $("#"+formid).attr('data-type');
      var dataaction =   $("#"+formid).attr('data-action');
      var dataelements =   $("#"+formid).attr('data-elements');
      var serversidecheckss =  $("#"+formid).attr('data-cheks');
      var datacheckaction =  $("#"+formid).attr('data-check-action');
      var datacomp =  $("#"+formid).attr('datacompare');
      console.log(dataelements);
      var formelement = e;
      console.log(formelement); return 0;
    }

    /* end */

    //ajax json response  form data
    form_sending = function(url,data,type)
    {
      $.ajax({
        type: type,
        url:  url,
        data:data,
        success: function(data, textStatus, jqXHR){
        alertmsg(data);
          return data;

        },
        error:function(data , textStatus, jqXHR)
        {
            alertmsg(data);
             return 0;
        }
    });

    }


    // functionality for alert mysg
    alertmsg = function(msg){
     $(".alert").fadeOut('slow');
     $(".alert").fadeIn('slow');
     $(".alert").html(msg);
     scrollers();
     }

     //Cancel Msg Cancel Alert
     cancelmsg = function(){
     $(".alert").fadeOut('slow');
     }

     //scroll to the  top ::
     var scrollers = function(){
     $('html, body').animate({scrollTop : 0},800);
     }
