<div class="col-10">
    <ul>
        <?php
        require("../admin/connections/conn.php");
        $sql = "select id, italy FROM languages where id=2";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<a href='reserve.php'>";
            echo "<button>$row[italy]</button>";
            echo "</a>";
        }
        mysqli_close($conn);
        ?>

        <?php
        require("../admin/connections/conn.php");
        $sql = "select id, italy FROM languages where id=3";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<a href='cancel-reservation.php'>";
            echo "<button>$row[italy]</button>";
            echo "</a>";
        }
        mysqli_close($conn);
        ?>
        <?php
        require("../admin/connections/conn.php");
        $sql = "select id, italy FROM languages where id=4";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<a href='contact.php'>";
            echo "<button>$row[italy]</button>";
            echo "</a>";
        }
        mysqli_close($conn);
        ?>
    </ul>
</div>