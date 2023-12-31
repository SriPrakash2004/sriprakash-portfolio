function sendwhatsapp()
{
    var adminmobile = "+917395849334";

    var name = document.querySelector('.name').value;
    var mobile = document.querySelector('.mobile').value;
    var email = document.querySelector('.email').value;
    var text = document.querySelector('.text').value;

    var url = "https://wa.me/" + adminmobile + "?text=" 
    + "*Name :*" +name+"%0a"
    + "*Mobile Number :*" +mobile+"%0a"
    + "*E-mail* :" +email+"%0a"
    + "*Message :*" +text+"%0a%0a";

    window.open(url, '_blank').focus();
}