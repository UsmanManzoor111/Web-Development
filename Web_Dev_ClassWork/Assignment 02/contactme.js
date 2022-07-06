const Name = document.getElementById("name");
const output = document.getElementById("sender");
    

function valid_name(){
    if(Name.value.length > 3 && Name.value.length < 100){
        output.innerText = "Valid Sender Name";
        output.style.color = "lime";
    }else{
        output.innerText = "Name must be between 3 to 100 characters";
        output.style.color = "red";
    }
}

const email = document.getElementById("email");
const out = document.getElementById("message");

function valid_email()
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email.value.match(mailformat))
    {
        out.innerText = "Valid email";
        out.style.color = "lime";
        return true;
    }
    else
    {
        out.innerText = "Invalid syntax error";
        out.style.color = "red";
        return false;
    }
}

const message = document.getElementById("Message");
const Output = document.getElementById("print");

function countWords(str) {
    str = str.replace(/(^\s*)|(\s*$)/gi,"");
    str = str.replace(/[ ]{2,}/gi," ");
    str = str.replace(/\n /,"\n");
    return str.split(' ').length;
}

function valid_message()
{
    const counter = countWords(message.value);

    if(counter >= 3){
        Output.innerText = "Good to go";
        Output.style.color = "lime";
    }else{
        Output.innerText = "Not good to go";
        Output.style.color = "red";
    }
}




