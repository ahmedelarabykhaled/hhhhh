var x = document.getElementById("fff").style;
var bt = document.getElementById("bt")     



    function h_action()
    {
        if(x.display == "none")
            {
//                x.display = "block";
                $("#fff").slideDown(750)
                bt.innerHTML = "Hide";
            }
        else
            {
//                x.display = "none";
                $("#fff").slideUp(750)
                bt.innerHTML = "Show";
            }
    }

    if ( window.history.replaceState )
    {   //prevent the browser to use the last enterd data again;
        window.history.replaceState( null, null, window.location.href );
    }
        
    
