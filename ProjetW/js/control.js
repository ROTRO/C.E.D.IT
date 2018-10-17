function test(){
a=document.getElementById('Firstname');
b=document.getElementById('Last Name');
c=document.getElementById('Username');
d=document.getElementById('Password');
e=document.getElementById('BirthDate');
f=document.getElementById('PhoneNumber');
g=document.getElementById('Adresse');
h=document.getElementById('Email');
if(a.value =="")
{hide('#name')}
else if(b.value =="")
{alert ("Please Write Your Last name");}
else if(c.value =="")
{alert ("Please Write Your Username");}
else if(d.value =="")
{alert ("Please Write Your Password");}
else if(e.value =="")
{alert ("Please Insert Your BirthDate");}
else if(f.value=="")
{alert ("Please Write Your PhoneNumber");}
else if(g.value =="")
{alert ("Please Write Your Adresse");}
else if(h.value =="")
{alert ("Please Write Your Email");}

}
function hide(x)
{
  $(document).ready(function(){
    $(x).toggle();
});
}
