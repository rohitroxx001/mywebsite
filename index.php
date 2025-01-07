<html>
    <body>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <input id="inputsearch" type="search"  onkeyup="searchfunction()"/>
        <br>
        <label id="labelsearch">check</label>

        <script>

            function searchfunction(){

                var a= document.getElementById("inputsearch").value;

                $.ajax({ 
                        url: 'test.php', 
                        type: 'GET', 
                        dataType: 'json', 
                        data: {registration: a},
                        success: function(data) { 
                            console.log(data); // Handle the data returned from the server 
                            $("#labelsearch").html(data);



                        }, 
                        
                        }); 
    }
        </script>
        <script>
            </script>


    </body>
</html>