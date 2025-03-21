$(document).ready(function(){
    $("#search-input").keyup(function(){
        var input = $(this).val(); //when user types any value/releases key, will be sotred in vriable input.
        //alert(input)

        if (input != ""){//if not empty, redirect to search.php with the input.
            $.ajax({
                url:"search.php",
                method: "POST",
                data:{input:input},//post the input from user

                success:function(data){
                    $("#search-results").html(data);
                    $("#search-results").css("display", "block")//this makes sure it is visible after every keyup.
                }
            });
        }else{
            $("#search-results").css("display", "none") //if there is no input do not display the results
        }
    })
})