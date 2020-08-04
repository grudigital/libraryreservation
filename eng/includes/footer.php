<section style="height: 100px; background-color: #f2f2f2">
    <div class="container">
        <div class="row">
            <div style="margin-top: 30px" class="col-4">
                <a href="https://www.facebook.com/khiflorenz" target="_blank"><img style="float: left; margin-right:20px" src="../assets/img/facebook.png"></a>
                <a href="https://twitter.com/khiflorenz" target="_blank"><img style="float: left; margin-right:20px" src="../assets/img/twitter.png"></a>
                <a href="https://vimeo.com/khiflorenz" target="_blank"><img style="float: left" src="../assets/img/vimeo.png"></a>
            </div>
            <div style="font-size:30px; font-weight: bold; margin-top: 25px; color:#424242" class="col-8">
                <?php
                require("../admin/connections/conn.php");
                $sql = "select id, english FROM languages where id=37";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[english]";
                }
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>
</section>
<section style="height: 60px; background-color: #424242">
    <div class="container">
        <div class="row">
            <div style="text-align: center; padding-top:15px; color:#f2f2f2 " class="col-12">

                Kunsthistorisches Institut in Florenz.
                <?php
                require("../admin/connections/conn.php");
                $sql = "select id, english FROM languages where id=38";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[english]";
                }
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'dd/mm/yyyy',
        startDate: new Date(Date.now() + 72 * 60 * 60 * 1000),
        endDate: new Date(Date.now() + 8 * 24 * 60 * 60 * 1000),
        daysOfWeekDisabled: [0,6],
    });
    $('.datepicker').on("keydown", function() {
        event.preventDefault();
        return false;

    });
    $('.datepicker').datepicker({
        startDate: '+1d'
    })

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
<script src="../js/scripts.js"></script>

<script src="../js/popper.js"></script>
<script src="../js/scripts.js"></script>
<script src="../js/form-validation.js"></script>
</body>
</html>
