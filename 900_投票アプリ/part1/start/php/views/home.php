<?php
namespace view\home;

function index() {
?>



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


