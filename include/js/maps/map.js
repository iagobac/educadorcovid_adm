
var markers = [];
var infowindows = [];
function initMap(){
  map = new google.maps.Map($("#map")[0], {
    center: {lat:-7.233207, lng: -39.412537},
    zoom: 15,
    mapTypeId: 'hybrid',
    styles: [
      {
        "featureType": "poi",
        "stylers": [
          { "visibility": "off" }
        ]
      }
    ],
    gestureHandling: 'greedy'
  });
  fillMap();
}

function setMapOnAll(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
  setMapOnAll(null);
  markers = [];
}

function closeInfoWindows(){
  for (var i = 0; i < infowindows.length; i++) {
    infowindows[i].close();
  }
  infowindows = [];
}


function fillMap(){
  clearMarkers();
  closeInfoWindows();
  $.getJSON('index.php/home/contentJson', function(json, textStatus) {
    console.log(json);
  }).error(function(e){
    console.log(e);
  }).always(function(){
    $.LoadingOverlay("hide");
  }).done(function(json){
    for(let imovel of json['imoveis']){
      position =  new google.maps.LatLng(imovel['latitude'],imovel['longitude']);
      marker = new google.maps.Marker({
        position: position,
        animation: google.maps.Animation.DROP,
        title: imovel['descricao'],
        map: map
      });
      markers.push(marker)
      var infowindow = new google.maps.InfoWindow();
      google.maps.event.addListener(marker, 'click', (function(marker) {
        return function() {
          infowindow.setContent(content(imovel));
          infowindow.open(map, marker);
          infowindows.push(infowindow);
        }
      })(marker));


    }
  });
}

function fillMapByUnidadeGestora(id){
  clearMarkers();
  closeInfoWindows();
  $.getJSON('index.php/imovel/getImoveisByUnidadesGestoras/'+id, function(json, textStatus) {
    console.log(json);
  }).error(function(e){
    console.log(e);
  }).always(function(){
    $.LoadingOverlay("hide");
  }).done(function(json){
    for(let imovel of json['imoveis']){
      position =  new google.maps.LatLng(imovel['latitude'],imovel['longitude']);
      marker = new google.maps.Marker({
        position: position,
        animation: google.maps.Animation.DROP,
        title: imovel['descricao'],
        map: map
      });
      markers.push(marker)
      var infowindow = new google.maps.InfoWindow({maxWidth: 1000});
      google.maps.event.addListener(marker, 'click', (function(marker) {
        return function() {
          infowindow.setContent(content(imovel));
          infowindow.open(map, marker);
          infowindows.push(infowindow);
        }
      })(marker));


    }
  });
}


function content(imovel){

  var contentString = '<div class="info-window-tooltip" id="content">'+
  '<div id="siteNotice">'+
  '</div>'+
  '<h4 class="info-window-title">{title}</h4>'+
  '<small>{address}</small>'+
  '<hr>'+
  '<div class="info-window-content">'+
  '{body}' +
  '</div>'+
  '</div>';
  address = ""
  if(imovel['rua']!=""){
    address += `Rua: ${imovel['rua']}; `
  }
  if(imovel['numero_rua']!=""){
    address += `Número: ${imovel['numero_rua']}; `
  }
  if(imovel['bairro']!=""){
    address += `Bairro: ${imovel['bairro']}; `
  }
  contentString = contentString.split("{title}").join(imovel['descricao']);
  contentString = contentString.split("{address}").join(address);
  if(imovel['unidades'].length > 0){
    contentString = contentString.split("{body}").join(contentTable(imovel));
  }else{
    contentString = contentString.split("{body}").join("Nenhuma Unidade Administrativa cadastrada nesse imóvel");
  }
  return contentString
}

function contentTable(imovel){
  headers = "<th>Unidade Gestora</th><th>Unidade Administrativa</th><th>Vencimento Água</th><th>Vencimento Energia </th><th>Vencimento Internet </th><th>Vencimento Telefone </th><th>Detalhes</th>";
  rows = ""
  for(let unidade of imovel['unidades']){
    rows = rows + `<tr><td>${unidade['gestora']}</td><td>${unidade['descricao']}</td><td>${unidade['venc_saaec']}</td><td>${unidade['venc_enel']}</td><td>${unidade['venc_internet']}</td><td>${unidade['venc_telefonia']}</td><td><button type='button' class='btn btn-info btn-md' onclick="btnExidUnidadeHome(${unidade['id']})"><i class='fa fa-eye'></i></button></td></tr>`
  }
  table = "<h5>Vencimentos</h5>"
  +"<div class='table-responsive-sm'>"
  +"<table class='table table-sm table-striped table-bordered'"
  +"<thead>"
  +headers
  +"</thead>"
  +"<tbody>"
  +rows
  +"</tbody>"
  +"</table>"
  +"</div>"
  return table;

}

function btnExidUnidadeHome(id) {
  $.LoadingOverlay("show");

  dados = {id: id, getUnidadeExibir: true};

  //alert(id);

  $.ajax({
    type: "POST", url: "index.php/home/getUnidade_detalhes", data: dados, dataType: 'json',
    success: function (result) {
      console.log(result);

      if (result == 0) {
        notifyDanger("Houve um problema em recuperar as informações da Unidade", $('#modalDetalhesUnidadeHome'));
      } else {

        $('#ModalLabelDetalhesUnidadeHome').text(result.descricao.toUpperCase());

        $('#exibirUnidadeHome').val(result.id);
        $('#btnExiEditarUnidadeHome').val(result.id);
        $('#exibir_unidade_home_codigo').text(result.codigo_unidade);
        $('#exibir_unidade_home_descricao').text(result.descricao);
        $('#exibir_unidade_home_venc_telefonia').text(result.venc_telefonia);
        $('#exibir_unidade_home_venc_internet').text(result.venc_internet);
        $('#exibir_unidade_home_venc_saaec').text(result.venc_saaec);
        $('#exibir_unidade_home_venc_enel').text(result.venc_enel);
        $('#exibir_unidade_home_secretaria').text(result.id_secretaria);

        $('#exibir_unidade_home_agrupamento_enel').text(result.id_agrupamento_enel);
        $('#exibir_unidade_home_agrupamento_saaec').text(result.id_agrupamento_saaec);

        $('#exibir_unidade_home_lei').text(result.lei);
        $('#exibir_unidade_home_gestor').text(result.gestor);
        $('#exibir_unidade_home_publicacao').text(result.data_publicacao);

        $('#exibir_unidade_home_imovel').text(result.id_imovel);

      }
      $.LoadingOverlay("hide");
      $('#modalDetalhesUnidadeHome').modal("show");
    }
  });

}
