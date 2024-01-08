function sendform(){
    var phnumber = "+917395849334";

    var uname = document.querySelector('.uname').value;
    var mobile = document.querySelector('.mobile').value;
    var email = document.querySelector('.email').value;
    var text1 = document.querySelector('.text1').value;

    var url = "https://wa.me/" + phnumber + "?text="  
    + "Name: " + uname+"%0a" 
    + "Mobile: " + mobile+"%0a"
    + "E-mail: " + email+"%0a"
    + "Message: " + text1+"%0a%0a";

    window.open(url, '_blank').focus();

}