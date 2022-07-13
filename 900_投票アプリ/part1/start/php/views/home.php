<?php
namespace view\home;

function index() {
?>
<body>
    <section id="menu">
        <div class="logo">
            <img  src="php/images/logo.png" alt="">
            <h2>はーとふるエステート</h2>
        </div>
        <div class="items">
            <li><i class="fa-solid fa-house"></i><a href="#">ホーム</a></li>
            <li><i class="fa-regular fa-building"></i><a href="#">マンション</a></li>
            <li><i class="fa-regular fa-building"></i><a href="#">住人</a></li>
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

        <div class="values">
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

            <div class="val-box">
                <i class="fas fa-users"></i>
                <div>
                    <h3>8,276</h3>
                    <span>New Users</span>
                </div>
            </div>
        </div>
        <div class="board">
            <table width="100%">
                <thead>
                    <td>Name</td>
                    <td>Title</td>
                    <td>Status</td>
                    <td>Role</td>
                    <td></td>
                </thead>
                <tbody>
                    <tr>
                        <td class="people">
                            <img src="<?php echo BASE_IMAGE_PATH; ?>cat.jpg" alt="">
                            <div class="people-de">
                                <h5>soru</h5>
                                <p>souutan</p>
                            </div>
                        </td>
                        <td class="people">
                            <h5>Software Engineer</h5>
                            <p>Wev dev</p>
                        </td>

                        <td class="active"><p>Active</p></td>

                        <td class="role">
                            <p>Owner</p>
                        </td>

                        <td class="edit"><a href="#">Edit</a></td>
                    </tr>
                    <tr>
                        <td class="people">
                            <img src="<?php echo BASE_IMAGE_PATH; ?>cat.jpg" alt="">
                            <div class="people-de">
                                <h5>runa</h5>
                                <p>runatan</p>
                            </div>
                        </td>
                        <td class="people">
                            <h5>Software Engineer</h5>
                            <p>Wev dev</p>
                        </td>

                        <td class="active"><p>Active</p></td>

                        <td class="role">
                            <p>Owner</p>
                        </td>

                        <td class="edit"><a href="#">Edit</a></td>
                    </tr>
                    <tr>
                        <td class="people">
                            <img src="<?php echo BASE_IMAGE_PATH; ?>cat.jpg" alt="">
                            <div class="people-de">
                                <h5>tera</h5>
                                <p>teratan</p>
                            </div>
                        </td>
                        <td class="people">
                            <h5>Software Engineer</h5>
                            <p>Wev dev</p>
                        </td>

                        <td class="active"><p>Active</p></td>

                        <td class="role">
                            <p>Owner</p>
                        </td>

                        <td class="edit"><a href="#"><?php echo $_SERVER['REQUEST_URI']; ?></a></td>
                    </tr>
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


