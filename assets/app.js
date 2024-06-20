const button = document.getElementById("button");

button.addEventListener("click", init);

function init() {
  console.log('ingeladen');
  cookieSetter()
  displayData();
}

function cookieSetter() {
  const cookie = "testcookie=" + document.getElementById("selection").value;
  console.log(cookie);
  document.cookie = cookie;
}

function displayData(){
  fetch("../controller.php").then(function(response){
    return response.json();
  }).then(function(data){
    console.log(data);
  }).catch(function(error){
    console.log(error);
  })
}