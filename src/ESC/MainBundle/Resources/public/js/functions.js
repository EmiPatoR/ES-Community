jQuery(function(){
    $("#login").click(function(){
        $("#ModalLogin").modal();
    });
});


//TODO REMOVE FUNCTION

function minusClick(id){
    //Declaring static vars
    $("#minus"+id).unbind('click');

    if( typeof this.staticBool == 'undefined') this.staticBool = [];
    if( typeof this.staticBool[id] == 'undefined') this.staticBool[id] = false;

    if (this.staticBool[id] == true) {
        $("#minus"+id).html("&minus;");
        this.staticBool[id] = false;
    }
    else {
        $("#minus"+id).html("&plus;");
        this.staticBool[id] = true;
    }
}

function closeNews(id){
    $("#close"+id).remove();
}