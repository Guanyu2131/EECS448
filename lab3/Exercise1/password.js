function validator(){
  let confirmPassword = document.getElementById("pswd").value;
  let password = document.getElementById("pswd2").value;
  if(confirmPassword.length < 8){
    alert("the passwords are not at least 8 characters long");
  }
  else if(confirmPassword != password){
    alert("the passwords entered don't match");
  }
  else{
    alert("Congradulation! Your password is correct.");
  }
}
