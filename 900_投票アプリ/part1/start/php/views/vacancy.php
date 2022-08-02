<?php 
namespace view\vacancy;

use db\MansionQuery;

function index($rooms,$mansion) {
?>



        <h3 class="i-name">
            管理物件
        </h3>

        
        <div class="board">
            <table width="100%">
                <thead>
                    <td>写真</td>
                    <td>物件名</td>
                </thead>
                <?php 
                foreach ($rooms as $room) {
                    $room_url = get_url('register?room_id=' . $room->room_id);
                    $mansion = MansionQuery::fetchMansionId($room);
                ?>
                    <tbody>
                    <tr>
                        <td class="">
                            <h3>
                                <?php echo $mansion->name;?>
                            </h3>
                        </td>
                        <td class="">
                            <h3>
                               <a href="<?php echo $room_url; ?>"><?php echo $room->room_no; ?></a> 
                            </h3>
                        </td>
                    </tr>
                </tbody>
                <?php 
                }
                ?>
            </table>
        </div>
    </section>

    <script>
        $('#menu-btn').click(function() {
            $('#menu').toggleClass("active");
        })
    </script>
</body>

<?php 
} ?>