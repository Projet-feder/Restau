/*--------------------------
 Maps 
 ---------------------------*/
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8,
  });
}

/*--------------------------
AddToCart
-----------------------------*/
function addToCart(val){
  let http = new XMLHttpRequest() ; 
  http.onreadystatechange = ()=> {
      if (this.readyState == 4 && this.status == 200){
          console.log('Done') ; 
      }
  } ; 
  http.open( "GET" ,"cart_view.php?q=" + val.value, true);
  http.send();
}

/*------------------------------------
Admin_view Toggle 
------------------------------------*/
$(document).ready(function(){
    $(".statics").show();
    $(".products").hide();
    $(".reservation").hide();
    $(".updates").hide();
  $(".static-link").click(() => {
    $(".statics").show();
    $(".products").hide();
    $(".reservation").hide();
    $(".updates").hide();
  });
  $(".product-link").click(() => {
    $(".statics").hide();
    $(".products").show();
    $(".reservation").hide();
    $(".updates").hide();
  });
  $(".reservation-link").click(() => {
    $(".statics").hide();
    $(".products").hide();
    $(".reservation").show();
    $(".updates").hide();
  });
  $(".update-link").click(() => {
    $(".statics").hide();
    $(".products").hide();
    $(".reservation").hide();
    $(".updates").show();
  });
});
