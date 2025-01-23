<script>
        $(document).ready(function () {
            
            $(".eguneratu").on("click", function () {
             taulaBirkargatu();
             
        });

            setInterval(taulaBirkargatu, 60000);

        });
        function taulaBirkargatu() {

            $.ajax({
                url: "posizioak.php",
                method: "GET",
                success: function (data) {
                    
                    $("#tabla-contenedor").html(data);
                }
            })
        }
</script>        