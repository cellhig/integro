$(document).ready(function(){


    $.ajax({
        url: 'http://localhost/integro/getAllmovies.php',
        method: 'GET',
        success: function(response){

            json = JSON.parse(response)
            console.log(json);            
        }

    });

    $('#moviesForm').submit(function(e){
        e.preventDefault();

        var title = $("#title").val();
        var date = $("#date").val();
        var synopsis = $("#synopsis").val();
        
        var formData = {
            'title' : title,
            'date' : date,
            'synopsis' : synopsis
        }

        console.log(formData);

        $.ajax({
            url: 'http://localhost/integro/createMovie.php',
            method: 'post',
            data : formData,
            success: function(response){

                //json = JSON.parse(response)
                console.log(response);
                
            }

        });

    });
});