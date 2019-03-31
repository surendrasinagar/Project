
function clicked(){
let abc = document.getElementsByTagName('input');
alert(abc);
console.log(abc);
console.log(abc.length);
alert(abc[0]);
        for(abcElt of abc)
        {
            alert('dfdf');
            if(abcElt.name === "username"){
            abcElt.value = "hello";
            }
        }
        
    } 
    
    function abcd(){
        alert('hello');
    }