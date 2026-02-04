

function validate(){

  var fname = document.getElementById("fname").value;
  var lname = document.getElementById("lname").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var message = document.getElementById("message").value;

  
  var error_message = document.getElementById("error_message");
  error_message.style.padding = "10px";

  var correct_way = /^[A-Za-z\s+]+$/;
  
  
  var text;
  // validating for fname 

  if(fname === ""){
    text = "First Name Should not be empty";
    error_message.innerHTML = text;
    return false;
  }
  if(fname.length < 3){
    text = "First Name Atleast Have 3 Characters";
    error_message.innerHTML = text;
    return false;
  }
  if(fname.length > 20){
    text = "First Name Must be less than 20 Characters";
    error_message.innerHTML = text;
    return false;
  }
  if(fname == " "){
    text = "blank space are not allowed";
    error_message.innerHTML = text;
    return false;
  }
  if(fname.match(correct_way))true;
  else{
    text = "Only alphabets are allowed";
    error_message.innerHTML = text;
    return false;
  }


  // validation for lname 
  if(lname === ""){
    text = "Last Name Should not be empty";
    error_message.innerHTML = text;
    return false;
  }
  if(lname.length < 3){
    text = "Last Name Atleast Have 3 Characters";
    error_message.innerHTML = text;
    return false;
  }
  if(lname.length > 20){
    text = "Last Name Must be less than 20 Characters";
    error_message.innerHTML = text;
    return false;
  }
  if(lname.match(correct_way))true;
  else{
    text = "Only alphabets are allowed";
    error_message.innerHTML = text;
    return false;
  }


  // validation for email 
  if(email === ""){
    text = "Email should not be empty";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6)
  {
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }



  // validation for mobile number
  if(phone === ""){
    text = "Mobile Number should not be empty";
    error_message.innerHTML = text;
    return false;
  }
  if(isNaN(phone)){
    text = "Enter Only Numeric Value";
    error_message.innerHTML = text;
    return false;
  }
  if(phone.length < 10){
    text = "Mobile Number Must be of 10 digits";
    error_message.innerHTML = text;
    return false;
  }
  if(phone.length > 10){
    text = "Mobile Number Must be of 10 digits";
    error_message.innerHTML = text;
    return false;
  }
  if((phone.charAt(0)!=9) && (phone.charAt(0)!=8) && (phone.charAt(0)!=7)){
    text = "Mobile Number Must be Start with 9 , 8 and 7";
    error_message.innerHTML = text;
    return false;
  }



  // Validation for comments parts
  if(message ==="")
  {
    text = "Message should not be empty";
    error_message.innerHTML = text;
    return false;
  }
  if(message.length <= 40)
  {
    text = "Please Enter More Than 40 Characters";
    error_message.innerHTML = text;
    return false;
  }

  
  // alert("Form Submitted Successfully!");
  return true;
}



