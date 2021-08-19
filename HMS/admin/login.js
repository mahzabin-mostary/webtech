function validate()
{
var email=document.getElementById("email").value;
var password=document.getElementById("password").value;
if(email=="sajid9@yahoo.com"&& password=="121199")
{
    alert("login succesfully");
    return false;

}
else
{
    alert("login failed");
}


}