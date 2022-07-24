<?php 
namespace view\resident;

function index($residents,$mansion) {
?>
    <body>
    <section id="menu">
        <div class="logo">
            <img  src="php/images/logo.png" alt="">
            <h2>はーとふるエステート</h2>
        </div>
        <div class="items">
            <li><i class="fa-solid fa-house"></i><a href='home'>ホーム</a></li>
            <li><i class="fa-regular fa-building"></i><a href="mansion">マンション</a></li>
            <li><i class="fa-regular fa-building"></i><a href="register">住人</a></li>
            <li><i class="fa-regular fa-calendar-days"></i><a href="#">カレンダー</a></li>
            <li></li>
            <li></li>
            <li></li>
        </div>
    </section> 
    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div>
                    <i id="menu-btn" class="fas fa-bars"></i>
                </div>
                <div class="search">
                    <i class="far fa-search"></i>
                    <input type="text" placeholder="Search">
                </div>
            </div>
            <div class="profile">
                <i class="far fa-bell"></i>
                <img src="php/images/cat.jpg" alt="">   
            </div>
        </div>


        <h3 class="i-name">
            <?php echo $mansion->name ?>
        </h3>

        
        <div class="board">
            <table width="100%">
                <thead>
                    <td>氏名</td>
                    <td>家賃</td>
                    <td>更新日</td>
                </thead>
                <?php 
                foreach ($residents as $resident) {
                ?>
                    <tbody>
                    <tr>
                        <td class="">
                            <h3>
                                <?php echo $resident->name ?>
                            </h3>
                        </td>
                        <td class="">
                            <h3>
                               <?php echo  $resident->rent; ?>
                            </h3>
                        </td>
                        <td class="">
                            <h3>
                               <?php echo  $resident->update_day; ?>
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