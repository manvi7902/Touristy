// console.log("hello");

function formValidation(){
    var name=document.regi.name;
    var password=document.regi.password;
    var confirm_p=document.regi.confirm_p;
    var terms=document.regi.terms;
    console.log(password.value)
    console.log(confirm_p.value)
    if(name_check(name))
    {
        
             if(pass_check(password,confirm_p))
             {
                if(check_terms(terms))
                {}
             }
         
    }return false;
}

function name_check(name)
{
    var letters = /^[A-Za-z]+$/;
    if(name.value.match(letters))
    {
        return true;
    }
    else
    {
        // console.log("name error");
        alert('name must have alphabet characters only');
        name.focus();
        return false;
    }
}

function pass_check(password, check_p)
 {
    console.log(password)
    var pass_format=/[A-Za-z0-9$%@#]{8,}\d/gm;

     if(password.value.match(pass_format))
     {
         if (password.value==check_p.value)
         {
             return true;
         }
         else{
             alert('Passwords dont match!');
             check_p.focus();
         }
     }
     else
     {
         alert('Password requirements: 8 units, Capital+ small letters, special characters:$ # @ %');
         password.focus();
         return false;
     }
 }

function check_terms(terms)
{
    if (terms.checked())
    {
        return true;
    }
    else{
        alert('Please check that youve read the terms and conditions!');
        terms.focus();
    }
}