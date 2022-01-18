<?php
include('layouts/header.php');
// $servername = 'localhost';
// $username = 'root'; // User mặc định là root
// $password = '';
// $dbname = "myblog"; // Cơ sở dữ liệu
// $conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die('Không thể kết nối Database:');
}
if (isset($_POST['submit'])) {
        $keyword = $_POST['search'];
        $query = "SELECT * FROM `blog` WHERE `title` LIKE '%$keyword%' ORDER BY `title`";
        $result = mysqli_query($conn, $query);
        $arrItem = array();
        while ($row = mysqli_fetch_array($result)) {
            $arrItem[] = $row;
        }
    }
?>
<!-- header -->
<content class="content">
        <div class="section-breadcrum">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- section breabcrum -->
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="type-section">
                        <h2><?php echo $keyword; ?></h2>
                        <?php foreach ($arrItem as $key) { ?>
                        <div class="row section-article">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 section-image-article">
                                <a href="chi-tiet.php?id=<?php echo $key['id_blog']; ?>"><img src="admin/pages/public/images/blogs/<?php echo $key['image']; ?>" alt="<?php echo $key['image']; ?>" title="<?php echo $key['title']; ?>" class="w-100"/></a>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-4 col-xs-12 detail-article">
                                <h2><a href="chi-tiet.php?id=<?php echo $key['id_blog']; ?>">
                                  <?php
                                      if(strlen($key['title']) > 80)
                                        echo mb_substr($key['title'], 0, 80, 'UTF-8')."...";
                                      else
                                        echo $key['title'];
                                  ?></a></h2>
                                <span>Ngày đăng: <?php echo date_format(date_create($key['date_upload']), "d-m-Y"); ?></span>
                                <p>
                                  <?php
                                    if(strlen($key['summary']) > 150)
                                      echo mb_substr($key['summary'], 0, 150, 'UTF-8')."...";
                                    else
                                      echo $key['summary'];
                                    ?>
                                </p>
                            </div>
                        </div>
                        <!-- section article -->
                        <?php } ?>
                    </div>
                    <!-- type section -->
                </div>
                <!-- col-9 left -->
                <?php include('layouts/left-content.php'); ?>
            </div>
        </div>
    </content>
    <!-- content -->
<?php
  include('layouts/footer.php');
?>