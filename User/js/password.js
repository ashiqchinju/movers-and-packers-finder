function myFunction() {
    let x = document.getElementById('password');
    if ( x.type === 'password' ) {
        x.type = 'text';
    } else {
        x.type = 'password';
    }
}

function check() {
    if (document.getElementById('password').value != document.getElementById('cpass').value) {
        alert("confirm password doesn't match");
        document.getElementById('cpass').focus();
        return false;
    }
    if(document.form1.email.value=="")
      {
    alert("Please Enter your Email Address");
    document.form1.email.focus();
    return false;
      }
      e=document.form1.email.value;
    f1=e.indexOf('@');
    f2=e.indexOf('@',f1+1);
    e1=e.indexOf('.');
    e2=e.indexOf('.',e1+1);
    n=e.length;

    if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
    {
        alert("Please Enter valid Email");
        document.form1.email.focus();
        return false;
    }
    return true;
}
