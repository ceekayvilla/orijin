
(function ($) {
  var AG_NAMESPACE = 'ageGate',
      ag_numInstances = 0,
      curent_date = new Date(),
      year = curent_date.getFullYear(),
      defaults = {
        logo: 'img/logo.png',
        lang: 'en',
        min_age: 18,
        age_span: 100,
        month_names: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
  },
  langStrings = {
      'en': {
          underage_text: "Sorry, you do not meet the minimum age requirements",
          error_text: "Please enter country of residence and your birthday date",
          country_error: "Please select country of your residence",
          dob_error: "Please enter your birthday date"
      },
  };          
  
  var methods = {
      /**
      * Initialization method for embedding Age Gate prompt
      * @param {Object} age_gate  Object containing all the age_gate for configuring Age Gate
      */

      init: function (age_gate) {
          // extend the default fields
          var age_gate = $.extend(defaults, age_gate);

          // build out each component (everything in here actually acts like our objects)
          return this.each(function () {
              // increase the number instances we have
              ag_numInstances++;

              var _target = $(this),
                  _data = _target.data(AG_NAMESPACE),
                  _me = this,
                  _lang = age_gate.lang,
                  _strings = langStrings[_lang];
                  
              // there's data, then the component has probably been initialized already
              // we probably don't need to continue with the rest of initialization
              if (_data) return;
              //_target.html('').data(AG_NAMESPACE, age_gate).addClass('ageGate').width(age_gate.width).height(age_gate.height);
              
              function buildHTML() {

              
                  // Generate static objects
                  // Days selector
                  var days = '<option value="" selected disabled>Day</option>';
                  for (var i = 1; i < 32; i++) {
                    days += '<option value="' + i + '">' + i + '</option>';
                  }
                  var select_day = '<div class="large-4 small-12 medium-4 columns"><select name="age-day" class="age-dob form-control">' + days + '</select></div>';
                  // Months selector
                  var months = '<option value="" selected disabled>Month</option>';
                  for (var i = 0; i < 12; i++) {
                    var month_value = i + 1;
                    months += '<option value="' + month_value + '">' + age_gate.month_names[i] + '</option>';
                  }
                  var select_month = '<div class="large-4 small-12 medium-4 columns"><select name="age-month" class="age-dob form-control">' + months + '</select></div>';
                  // Years selector
                  var years = '<option value="" selected disabled>Year</option>';
                  for (var i = year - 8; i > (year - age_gate.age_span); i--) {
                    years += '<option value="' + i + '">' + i + '</option>';
                  }
                  var select_year = '<div class="large-4 small-12 medium-4 columns"><select name="age-year" class="age-dob form-control">' + years + '</select></div>';

                  //build an overlay (css required)
                  var age_gate_container = '<div id="age-gate" class="video-loader"><div class="jarallax"data-jarallax-video="https://www.youtube.com/watch?v=uSX7npfAYYA"><div class="table"><div class="table-cell"><div class="row"><div class="large-12 small-12 column">'+
                    '<img src="'+ age_gate.logo +'" alt="Logo" class="age-gate-logo center clear  logo" />'+
                     '<div class="center clear"><h1 class="uppercase">welcome to<span> fans made of more </span> experience</h1></div>' +'<div class="center clear">FAN OF FOOTBALL? COME & DEMONSTRATE YOUR FAN ATTITUDE</div>'+ '<div class="center clear"><p class="capitalize">Please enter your date of birth and your region below</p></div>' +
                    '<form id="age-verification-form">'+  
                    '<label for="edit-dob" class="age-dob"></label><div class="row">' +
                    select_month + select_day + select_year +
                    '</div><label for="edit-country" class="age-country hide"></label><div class=" row  collapse prefix-radius margin-top-20 margin-bottom-20"><div class="small-3 columns"><span class="prefix"><i class="fa fa-flag"></i></span></div><div class="small-9 columns"><select name="country" id="age-country" class="age-country form-control"><option value="CM">Cameroon</option></select></div></div>' +
                    
                    '<div id="age-error" class="error_age_text"></div><div class="clear margin-top-20"><button class="button" type="submit" value="ENTER">ENTER</button></div><div class="clear"><input type="checkbox" name="remember"><span>Remember me (Unless device is shared) </span></div><p class="clear copright">By entering this site you agree to our <a target="_blank" href="/about-us">Terms & Condtions</a> and <a target="_blank" href="https://footer.diageohorizon.com/dfs/assets/www.fansmadeofmore.com/PrivacyPolicy_en.html?locale=en-cm">Privacy & Cookie</a></p></form></div></div></div></div></div> </div>';
                  //end of static content
                    
                  // If the age_gate cookie is set, use it.
                    var cookie_js = readCookie('ageVerified');
                  //cookie_js = 'x';
                    if (cookie_js === 'no') {
                      $("#age-error").text(_strings.underage_text);
                    } else if  (cookie_js === 'yes') {
                       console.log("Age is verified");
                    } else {
                      $("body").append(age_gate_container);
                    };


                  $("#age-verification-form").submit(function() {
                    cn = $('#age-country option:selected').val(),
                      dob = $('select[name=age-year] option:selected').val() + '/' + $('select[name=age-month] option:selected').val() + '/' + $('select[name=age-day] option:selected').val(),
                      e = 0,
                      curent_date = new Date();

                    var dobb = new Date(dob);
                    var diff = Math.floor((curent_date - dobb) / (1000 * 60 * 60 * 24)); //days

                    $("#age-country-error, #age-dob-error").remove();
                    $(".age-country").removeClass("error_age_text");
                    
                    /* Check if country of residence is selected */
                    if (cn == '') {
                      $(".age-country").append('<div class="error_age_text" id="age-country-error">' + _strings.country_error + '</div>');
                      e++;
                    };

                    if (isNaN(diff) === true) {
                      $(".age-dob").append('<div class="error_age_text" id="age-dob-error">' + _strings.dob_error +'</div>');
                      
                      e++;
                    } else if (diff < 21 * 365) {
                      $(".age-dob").append('<div class="error_age_text" id="age-dob-error">' + _strings.underage_text + '</div>');
                      e++;
                    };

                    if (e++ == 0) {
                      createCookie('ageVerified','yes',1);
                      $("#age-gate").fadeOut();
                      return false;
                    } else {
                      return false;
                    };
                  return false;
                  });             
              
              
              }
              // start the initialization
              buildHTML();
          });
      }, // end init
      destroy: function () {
          return this.each(function () {
              var $this = $(this),
                  data = $this.data(AG_NAMESPACE);
              data[AG_NAMESPACE].remove();
              $this.removeData(AG_NAMESPACE);
          });
      } // end destroy 
  };
  createCookie = function (name, value, days) {
      var i = location.hostname.split("."),
          s = i.slice(-2).join(".");
      if (days) {
          var date = new Date();
          date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
          var expires = "; expires=" + date.toGMTString();
      } else
          var expires = "";
      document.cookie = name + "=" + value + expires + "; path=/;domain=" + s;
  }
  eraseCookie = function (name) {
      createCookie(name, "", -1);
  }
  readCookie = function (name) {
      var nameEQ = name + "=";
      var ca = document.cookie.split(';');
      for(var i=0;i < ca.length;i++) {
          var c = ca[i];
          while (c.charAt(0)==' ') c = c.substring(1,c.length);
          if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
      }
      return null;
  };
  $.fn.ageGate = function (method) {
      if (methods[method]) {
          return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
      } else if (typeof method === 'object' || !method) {
          return methods.init.apply(this, arguments);
      } else {
          $.error('Method ' + method + ' does not exist on jQuery');
      }
  };
})(jQuery);

(function($){
  $('#ageGateInstance').ageGate({
      logo: 'img/logo.png',
      lang: 'en',
      min_age: 21,
      age_span: 100
  });
})(jQuery);