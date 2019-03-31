<?php
    session_start();
    $name1=$_SESSION['Name1'];
    $email1=$_SESSION['Email1'];
?>

<script>
console.log("Chrome Extension Ready to go...");

 //chrome.runtime.onMessage.addListener(gotMessage);

 function buttonclicked(){
    console.log(message.txt);
        let abc = document.getElementsByTagName('input');

        for(abcElt of abc)
        {
            if(abcElt.name === "username"){
            abcElt.value = "<?php echo $name1; ?>";}
            if(abcElt.name === "emailid"){
                abcElt.value = "<?php echo $email1;?>";
            }
        }
    }
</script>