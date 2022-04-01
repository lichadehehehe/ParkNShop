
//Javascript to map the images to the screen coordinates
function displayCategories(arg) {
    document.getElementById('pic').src = arg.concat(".png");
    document.getElementById('pic').useMap = "#".concat(arg);
}



function display_cart()
{
    var x = document.getElementById("list").rows.length;
    
    if(x>1)
    {
        $("body",parent.document).find('#left').hide();  
        $("body",parent.document).find('#right').hide();
    }
    else
    {
        alert('Product list is empty.'); 
        $("body",parent.document).find('#bottom').show();
    }
    
}

function displayCart()
{
    $("body",parent.document).find('#rightframe').show();
}


