var sendAjax = function (dataIn, errorText, func, inCart){
    $.ajax({
        type: "POST",
        url:  'assets/components/ajax/connector.php',
        data: dataIn,
        cache: false,
        dataType: 'json',
        success: function (data) {
            if (data.error==false) {
                func(dataIn.id, data);
            }
            else {
                alert(errorText);
            }
        },
        error: function (data){
            alert('Ошибка! Попробуйте еще раз.');
        },
        complete: function(jqXHR, textStatus) {
        }
    });
}

var Funct = {
        redirectTo: function(id,data) {
         window.location.href = data.url;
    },
    reload: function(id,data) {
        return false;
        window.location = window.location;
    },
} 

/* data = {
                action: 'cart',
                subaction: 'add',
                id: id,
                items: jsonText
                }; */