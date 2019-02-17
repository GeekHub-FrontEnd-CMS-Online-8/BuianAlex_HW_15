"use strict"

class errorHandler {
  constructor() {
    this.wraper = document.getElementById('error-handler');
    this.errors = [];
    this.reset();
  }
  reset() {
    this.errors = [];
    this.update();
  }
  setError(data){
    this.errors.push(data);
    this.update();
  }
  update(){
    this.wraper.innerHTML = "";
    this.errors.forEach(er => {
      let errorElement = document.createElement("p");
      errorElement.innerText = er;
      this.wraper.appendChild(errorElement);
    })
  }
}

if (document.getElementById('error-handler')){
  var nandler = new errorHandler();
}

//todo clean Data
function  testForm(unputData) {
  let afterTrim = unputData.value.trim();
  
  if (afterTrim.length!=0){
    unputData.style.borderColor = 'rgb(238, 238, 238)';
    return unputData.value;
  }
  else{
    unputData.style.borderColor = "red";
    nandler.setError(unputData.getAttribute('name')+ ' is required field');
    return false;
  }
  
}



if (document.querySelector('input[type = "submit"]')){
  
  document.querySelector('input[type = "submit"]').addEventListener("click", function (e) {
    e.preventDefault();
    nandler.reset();
    let userName,
      userGenger,
      b_day,
      family_status,
      home_address,
      eMail,
      userSurname;
    try {
      userName = testForm(document.querySelector('input[name = "firstname"]'));
      eMail = testForm(document.querySelector('input[name = "email"]'));

      userSurname = testForm(document.querySelector('input[name = "lastname"]'));
      userGenger = document.querySelector('input[name = "gender"]').value;
      b_day = document.querySelector('input[name = "bday"]').value;
      family_status = document.querySelector('input[name = "family_status"]').value;

      home_address = document.querySelector('input[name = "home_address"]').value;

    }
    catch (err) {
      console.log(err);

    }
    if (nandler.errors.length===0) {


      fetch("/form", {
        method: "post",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          name: userName,
          surname: userSurname,
          gender: userGenger,
          b_day: b_day,
          family_status: family_status,
          home_address: home_address,
          email: eMail,
        }),
      }
      ).then(res => {
        return res.json();
      })
      .then(data=>{
        console.log(typeof JSON.stringify(data));
        if (JSON.stringify(data)!=1){
          nandler.setError("User does not save in data base");
        }
        else{
          window.location = "/";
        }
      })
      .catch((error) => {
        nandler.setError("Server is not respond");
      });
      nandler.reset();
    }
    
  });
}







