<?php 
namespace view\resident;

use db\RoomQuery;
use model\RoomModel;

function index($residents,$mansion) {
?>
    


        <h3 class="i-name">
            <?php echo $mansion->name ?>
        </h3>

        
        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>部屋番号</td>
                        <td>氏名</td>
                        <td>家賃</td>
                        <td></td>
                    </tr>
                </thead>
                <?php 
                foreach ($residents as $resident) {
                    $room = RoomQuery::fetchByRoomNo($resident);
                ?>
                    <tbody>
                    <tr>
                        <td class="">
                            <h3>
                                <?php echo $room->room_no; ?>
                            </h3>
                        </td>
                        <td class="">
                            <h3>
                               <?php echo  $resident->name; ?>
                            </h3>
                        </td>
                        <td class="">
                            <h3>
                               <?php echo  number_format($resident->rent)."円"; ?>
                            </h3>
                        </td>
                        <td class="">
                            <h3>
                            <div class="hidden_box">
                                <label for="label.<?php echo $resident->id?>">+</label>
                                <input type="checkbox" id="label.<?php echo $resident->id?>"/>
                                <div class="hidden_show">
                                    <!--非表示ここから-->     
      	                            <table>
                                        <tr>
                                            <th><h5>更新日</h5></th>
                                            <td><h5><?php echo $resident->update_day; ?></h5></td>
                                        </tr>
                                        <tr>
                                            <th><h5>更新頻度</h5></th>
                                            <td><h5><?php echo $resident->frequency; ?>年</h5></td>
                                        </tr>
                                        <tr>
                                            <th><h5>更新手数料</h5></th>
                                            <td><h5><?php echo number_format($resident->commission); ?>円</h5></td>
                                        </tr>
                                        <tr>
                                            <th><h5>保証会社</h5></th>
                                            <td><h5><?php echo $resident->guarantee; ?></h5></td>
                                        </tr>
                                    </table>
                                    <!--ここまで-->
                                </div>
                            </div>
                            </h3>
                        </td>
                    </tr>
                    </tbody>
                <?php 
                } ?>
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
}