function check(){
    var firstname=document.getElementById("firstname").value; 
    var lastname=document.getElementById("lastname").value;
    var phonenum=document.getElementById("phnnum").value;
    var email=document.getElementById("email").value;
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;
    var conf_password=document.getElementById("conf_password").value;
    if(firstname=="")
        alert("Please fill firstname");
    if(/\d/g.test(firstname)==true){
        alert("First name should not have digits!");
    }
    if(/\W/g.test(firstname)==true){
        alert("First name should not have special characters!");
    }
    if(/\d/g.test(lastname)==true){
        alert("Last name should not have digits!");
    }
    if(/\W/g.test(lastname)==true){
        alert("Last name should not have specail characters!");
    }
    if(/\d{10}/g.test(phonenum)==false){
        alert("Phone number should be 10 digits!");
    }
    if(/\s/g.test(phonenum)==true){
        alert("Phone number should have no space");
    }
    if(/[a-z]/g.test(phonenum)==true){
        alert("Phone number should not have characters!");
    }
    if(/[@]/g.test(email)==false){
        alert("Invaid email id!");
    }
}
      