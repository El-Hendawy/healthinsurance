
$(document).foundation()


$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll >= 50) {
        //clearHeader, not clearheader - caps H
        $("a.mover").removeClass("hollow");
        $(".top-bar").addClass("sticky");

    }else{
        $("a.mover").addClass("hollow");
        $(".top-bar").removeClass("sticky");

        

    }
}); //missing );

$(document).foundation();

/*
  Switch actions
*/
$('.unmask').on('click', function(){

  if($(this).prev('input').attr('type') == 'password')
    changeType($(this).prev('input'), 'text');

  else
    changeType($(this).prev('input'), 'password');

  return false;
});

function changeType(x, type) {
  if(x.prop('type') == type)
  return x; //That was easy.
  try {
    return x.prop('type', type); //Stupid IE security will not allow this
  } catch(e) {
    //Try re-creating the element (yep... this sucks)
    //jQuery has no html() method for the element, so we have to put into a div first
    var html = $("<div>").append(x.clone()).html();
    var regex = /type=(\")?([^\"\s]+)(\")?/; //matches type=text or type="text"
    //If no match, we add the type attribute to the end; otherwise, we replace
    var tmp = $(html.match(regex) == null ?
      html.replace(">", ' type="' + type + '">') :
      html.replace(regex, 'type="' + type + '"') );
    //Copy data from old element
    tmp.data('type', x.data('type') );
    var events = x.data('events');
    var cb = function(events) {
      return function() {
            //Bind all prior events
            for(i in events)
            {
              var y = events[i];
              for(j in y)
                tmp.bind(i, y[j].handler);
            }
          }
        }(events);
        x.replaceWith(tmp);
    setTimeout(cb, 10); //Wait a bit to call function
    return tmp;
  }
}


$('[data-app-dashboard-toggle-shrink]').on('click', function(e) {
  e.preventDefault();
  $(this).parents('.app-dashboard').toggleClass('shrink-medium').toggleClass('shrink-large');
});



var loginForm = $("#loginForm");
loginForm.submit(function(e){
    e.preventDefault();
    var formData = loginForm.serialize();
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
    $.ajax({
        url:$(this).attr('action'),
        type:'POST',
        data:formData,
        dataType:'json',
        success:function(data){
          window.location.href = '/home';
          
        },
        error: function (data) {
        //  console.log(data.responseJSON);
       
          $.each(data.responseJSON, function(index,item) {     
            if(index == 'errors'){
              $.each(item, function(indexE,itemE) {  
                console.log(indexE+itemE);
// Create with jQuery

$("span#"+indexE).html('<span class="form-error is-visible" role="alert">'+itemE+'</span>');

               
              })}
               
        });
          
      }
    });
});








var RegisterForm = $("#registerForm");
RegisterForm.submit(function(e){
    e.preventDefault();
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
    $.ajax({
        url: $(this).attr('action'),
        method:"POST",
        data:new FormData(this),
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success:function(data){
          console.log(data);
          location.reload(true);          
        },
        error: function (data) {
        //  console.log(data.responseJSON);
       
          $.each(data.responseJSON, function(index,item) {     
            if(index == 'errors'){
              $.each(item, function(indexE,itemE) {  
                console.log(indexE+itemE);
// Create with jQuery

$("span#"+indexE).html('<span class="form-error is-visible" role="alert">'+itemE+'</span>');

               
              })}
               
        });
          
      }
    });
});



