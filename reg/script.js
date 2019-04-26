 var x = setInterval(function(){        
        getAjax("getposts.php", jsonParse);
    }, 1000);



function getAjax(url, success) {
    var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    xhr.open('GET', url);
    xhr.onreadystatechange = function() {
        if (xhr.readyState > 3 && xhr.status == 200){
          success(xhr.responseText);  
        } 
    };
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.send();
    return xhr;
}

function jsonParse(response){
	console.log(response);
}