<?php
require_once(realpath(dirname(__FILE__) . "/../app/layouts/head-tag.php"));
?>
    <section class="app">
        <div class="intro-row">
            <div class="row">

                <aside class="col-md-4 col-sm-12 col-xs-12 pull-right">
                    <?php
                    require_once(realpath(dirname(__FILE__) . "/../app/layouts/sidebar.php"));
                    ?>
                </aside>

                <article class="col-md-6 col-sm-12 col-xs-12">
                    <section class="middle-side-post border-radius">
                        <header >
                            <section class="sidebar-item-category">
                                <ul class="sidebar-list">
                                    <li><a href="#"><b><?php //echo $category['name'];?></b></a></li>
                                </ul>
                            </section>
                        </header>
                        <ul>
                            <?php foreach ($articles as $article){?>
                            <li>
                                <img class="border-radius" src="http://localhost/admin-panel/<?php echo $article['image'];?>">
                                <h2> <a href="http://localhost/admin-panel/show-article/<?php echo $article['id'];?>"> <?php echo substr( $article['title'],0,54).'...';?></a></h2>
                                <p>
                                    <?php echo substr( $article['summary'],0,500).'...';?>
                                </p>
                                <span class="date-publish"><i class="fa fa-calendar"></i> انتشار : <?php echo date("M,d,Y",strtotime($article['created_at']))?>
                                </span>
                                <a href="" class="more-link"><i class="icons icon-more"></i></a>
                            </li>
                            <?php }?>
                        </ul>
                    </section>
                    <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>
                </article>
            </div>
        </div>
    </section>
<?php
require_once(realpath(dirname(__FILE__) . "/../app/layouts/footer.php"));
?>