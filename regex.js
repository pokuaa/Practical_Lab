const input = $("#SEARCHING");

const checkInput = (inp) => {
    var regex = /[^0-9]+$/;
    if (regex.test(inp.val()) == false){

        alert ('No numbers in input');
        return false;
    }
    alert ('Input is right');
    return true;
} 

const Validate = (e) => {
    alert("I'm here");
    //e.preventDefault();
    return checkInput(input);    
}