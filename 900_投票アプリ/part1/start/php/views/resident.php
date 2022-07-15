<?php 
namespace view\resident;



function index($mansion) {
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
            管理物件
        </h3>

        
        <div class="board">
            <table width="100%">
                <thead>
                    <td>写真</td>
                    <td>物件名</td>
                </thead>
                <?php 
                
                ?>
                    <tbody>
                    <tr>
                        <td class="">
                            <img src="<?php echo BASE_IMAGE_PATH; ?>cat.jpg" alt="">
                        </td>
                        <td class="">
                            <h3>
                               <a href="<?php  ?>"><?php echo $mansion->id . $mansion->name; ?></a> 
                            </h3>
                        </td>
                    </tr>
                </tbody>
                <?php 
                
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
}