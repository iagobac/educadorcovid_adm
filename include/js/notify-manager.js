

function notifySuccess(message, element = 'body'){
  $(document).ready(function(){
    $.notify({
    // options
    message: '<b>'+message+'</b>'
    },{
    // settings
    type: 'success',
    element: element
    });
  });
}

function notifyDanger(message, element = 'body'){
  $(document).ready(function(){
    $.notify({
    // options
    message: '<b>'+message+'</b>'
    },{
    // settings
    type: 'danger',
    element: element
    });

  });
    $(element).scrollTop(0);
}

function notifyInfo(message, element = 'body'){
  $(document).ready(function(){
    $.notify({
    // options
    message: '<b>'+message+'</b>'
    },{
    // settings
    type: 'info',
    element: element
    });
  });
}

function notifyWarning(message, element = 'body'){
  $(document).ready(function(){
    $.notify({
    // options
    message: '<b>'+message+'</b>'
    },{
    // settings
    type: 'warning',
    element: element
    });
  });
}
