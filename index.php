<html>
    <body>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <input id="inputsearch" type="search"  onkeyup="searchfunction()"/>

        <label id="labelsearch">check</label>

        <script>

            function searchfunction(){

                var a= document.getElementById("inputsearch").value;

                $.ajax({ 
                        url: 'test.php', 
                        type: 'GET', 
                        dataType: 'json', 
                        success: function(data) { 
                            console.log(data); // Handle the data returned from the server 
                            $("#labelsearch").html(data);



                        }, 
                        error: function(xhr, status, error) { 
                            console.error('Error: ' + error); 
                        } 
                        }); 
    }
        </script>

    </body>
</html>