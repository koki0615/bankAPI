<?php 
namespace view\mansion;

function index($mansions) {
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
                foreach ($mansions as $mansion) {
                    $mansion_url = get_url('resident?mansion_id=' . $mansion->id);
                ?>
                    <tbody>
                    <tr>
                        <td class="">
                            <img src="<?php echo BASE_IMAGE_PATH; ?>cat.jpg" alt="">
                        </td>
                        <td class="">
                            <h3>
                               <a href="<?php echo $mansion_url; ?>"><?php echo $mansion->name; ?></a> 
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