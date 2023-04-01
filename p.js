function validate()
{
    var username=document.getElementById("nam").value;
    var password=document.getElementById("nam1").value;
    if(username=="Parth" && password=="Parth@123")
    {
        window.location.href= "parthstudentinner.html"
        return false;
    }
  
    else if(username=="Mohit" && password=="Mohit@123")
    {
        window.location.href= "mohitstudent inner.html"
        return false;
    }
    else if(username=="Aakash" && password=="Aakash@123")
    {
        window.location.href= "aakashstudent inner.html"
        return false;
    }
    else if(username=="Akash" && password=="Akash@123")
    {
        window.location.href= "akashstudent inner.html"
        return false;
    }
   
    else
    {
        alert("Login Failed");
        return ;
    }
}