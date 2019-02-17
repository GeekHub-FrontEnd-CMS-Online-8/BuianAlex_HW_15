"use strict"
function  testForm(unputData) {
  let afterTrim = unputData.value.trim();
  
  if (afterTrim.length!=0){

    
    return unputData.value;
  }
  else{
    unputData.style.borderColor = "red";
    return false;
  }
  //todo clean Data
  
}

document.querySelector('input[type = "submit"]').addEventListener("click", function(e) {
  e.preventDefault();
  let heandError = false;
  let userName,
      userGenger,
      b_day,
      family_status,
      home_address,
      userSurname;
  try{
    userName = testForm(document.querySelector('input[name = "firstname"]'));
    if (!userName) throw "empty";
    userSurname = testForm(document.querySelector('input[name = "lastname"]'));
    userGenger = document.querySelector('input[name = "gender"]').value;
    b_day = document.querySelector('input[name = "age"]').value;
    family_status = document.querySelector('input[name = "family_status"]').value;
    home_address = document.querySelector('input[name = "address"]').value;

  }
  catch(err){
    console.log(err);
    heandError = true;
  }
  if (!heandError){

    
    fetch("/form", {
      method: "post",
      headers: {
        "Content-Type": "application/json",
        //"Content-Type": "application/x-www-form-urlencoded",
      },
      body: JSON.stringify({
        name: userName,
        surname: userSurname,
        gender: userGenger,
        b_day: b_day,
        family_status: family_status,
        home_address: home_address,

      }),

    }
        
    ).then(res => {
      window.location.replace("/");
      return res.json();
    }).catch((error) => console.log(error));
  }
  
  


  
});


