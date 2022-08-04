<?php
namespace view\home;

use DateTime;
use db\MansionQuery;
use db\ResidentQuery;
use db\RoomQuery;

function index($residents,$room,$mansion) {
?>



        <h1 class="i-name">
            管理物件
        </h1>

        <!-- <div class="values">
            <div class="val-box">
                <i class="fas fa-users"></i>
                <div>
                    <h3>8,276</h3>
                    <span>New Users</span>
                </div>
            </div>

            <div class="val-box">
                <i class="fas fa-users"></i>
                <div>
                    <h3>8,276</h3>
                    <span>New Users</span>
                </div>
            </div>

            <div class="val-box">
                <i class="fas fa-users"></i>
                <div>
                    <h3>8,276</h3>
                    <span>New Users</span>
                </div>
            </div>
        </div> -->
        <div class="board">
            <table width="100%">
                <thead>
                    <td><h3>契約更新を通知する入居者</h3></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </thead>
                <tbody>
                    <?php 
                    $residents = ResidentQuery::All();
                    foreach ($residents as $resident) {
                        $room = RoomQuery::fetchByRoomNo($resident);
                        $mansion = MansionQuery::fetchMansionId($room);
                        $update_day = $resident->update_day;
                        $frequency = $resident->frequency;
                        
                        
                        $news = date_check($update_day);
                        $update = update_check($update_day);
                        if($news) {
                    ?>
                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <h3><?php echo $mansion->name ;?></h3>
                                <h5><?php echo  $room->room_no;?></h5>
                            </div>
                        </td>
                        <td class="people">
                            <h5><?php echo $resident->update_day;?></h5>
                            <p></p>
                        </td>

                        <td class="active">
                            <p><?php echo $resident->name;?></p>
                        </td>

                        <td class="role">
                            <p></p>
                        </td>

                        <td class="edit">
                            <a href="mansion">+</a>
                        </td>
                    </tr>
                    <?php
                        } else {

                        }
                        
                        if($update) {
                            $new_date = plus_day($update_day,$frequency);
                            ResidentQuery::UpDate($resident,$new_date);
                        } else{

                        }
                    }
                    
                     ?>
                    
                </tbody>
            </table>
            
        </div>
        <div class="board">
            <table width="100%">
                <thead>
                    <td><h3>その他振込</h3></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </thead>
                <tbody>
                    <?php 
                    // foreach(){
                    ?>
                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <h3><?php echo $mansion->name ;?></h3>
                                <h5><?php echo  $room->room_no;?></h5>
                            </div>
                        </td>
                        <td class="people">
                            <h5><?php echo $resident->update_day;?></h5>
                            <p></p>
                        </td>

                        <td class="active">
                            <p><?php echo $resident->name;?></p>
                        </td>

                        <td class="role">
                            <p></p>
                        </td>

                        <td class="edit">
                            <a href="mansion">+</a>
                            <p>詳細</p>
                        </td>
                    </tr>
                    <?php
                    // }
                    
                     ?>
                    
                </tbody>
            </table>
            
        </div>
        <div class="board">
            <table width="100%">
                <thead>
                    <td><h3>家賃未回収</h3></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </thead>
                <tbody>
                    <?php 
                    $residents = ResidentQuery::NotPay();
                    foreach ($residents as $resident) {
                        $room = RoomQuery::fetchByRoomNo($resident);
                        $mansion = MansionQuery::fetchMansionId($room);
                        
                    ?>
                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <h3><?php echo $mansion->name ;?></h3>
                                <h5><?php echo  $room->room_no;?></h5>
                            </div>
                        </td>
                        <td class="people">
                            <h5><?php echo $resident->update_day;?></h5>
                            <p></p>
                        </td>

                        <td class="active">
                            <p><?php echo $resident->name;?></p>
                        </td>

                        <td class="role">
                            <p></p>
                        </td>

                        <td class="edit">
                            <a href="mansion">+</a>
                            <p>詳細</p>
                        </td>
                    </tr>
                    <?php
                    }
                    
                     ?>
                    
                </tbody>
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
?>


