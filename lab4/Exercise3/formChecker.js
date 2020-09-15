function Test(){
    var set = document.forms["cart"]["set"].value;
    let MSI = document.forms["cart"]["MSI"].value;
    let LG = document.forms["cart"]["LG"].value;
    let Ryzen = document.forms["cart"]["Ryzen"].value;
    let Intel = document.forms["cart"]["Intel"].value;
    let name = document.forms["cart"]["name"].value;
    let password = document.forms["cart"]["pswd"].value;
    let test = false;


    if( set==""|| MSI == ""||LG == ""||Ryzen ==""||Intel ==""){
        alert("You cannot leave empty number for any item.");
        return false;
    }
    else if( name ==""||password==""){
        alert("Please complete your account information.");
        return false;
    }

    for( let i =0; i<name.length;i++)
    {
        if(name[i]=="@")
        {
            test = true;
        }
    }
    if(test != true){
        alert("Please enter a real username");
        return false;
    }
    alert("Congradulation, "+name+", your keyword is "+password+". Thanks for your purchase.");
}
