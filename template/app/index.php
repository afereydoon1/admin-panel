<?php
require_once(realpath(dirname(__FILE__) . "/../app/layouts/head-tag.php"));
?>

    <section class="app">
        <!--#region intro-->
        <section class="intro intro-h-500">
            <section class="intro-row intro-h-2-3 mb-2">
                <?php if (isset($articles[0])){?>
                <section class="intro-2-3-col intro-h-100 position-relative h-md-300px">
                      <section class="bg-1 intro-h-100 img-bg" style="background: url(http://localhost/admin-panel/<?php echo $articles[0]['image'];?>) no-repeat center; background-size: cover"></section>
                      <section class="intro-item-caption">
                          <h2 class="caption-title">
                              <a href="http://localhost/admin-panel/show-article/<?php echo $articles[0]['id'];?>"><?php echo substr( $articles[0]['title'],0,100).'...';?></a>
                          </h2>
                          <ul class="caption-info-bar">
                              <li><a href="#"><i class="fa fa-user text-yellow"></i>&nbsp;<?php echo $articles[0]['username'];?></a>
                              </li>
                              <li><?php echo date("M,d,Y",strtotime($articles[0]['created_at']))?></li>
                              <li><i class="fa fa-comments text-yellow"></i>&nbsp;<?php echo $articles[0]['comments_count'];?></li>
                              <li><i class="fa fa-eye text-yellow"></i>&nbsp;<?php echo $articles[0]['view'];?></li>
                          </ul>
                      </section>
                </section>
                <?php }?>
                <section class="intro-1-3-col intro-h-100">
                    <?php if (isset($articles[1])){?>
                    <section class="intro-1-3-item intro-h-50 position-relative h-md-300px">
                        <section class="bg-2 intro-h-100 img-bg" style="background: url(http://localhost/admin-panel/<?php echo $articles[1]['image'];?>) no-repeat center; background-size: cover"></section>
                        <section class="intro-item-caption">
                            <h2 class="caption-title"><a href="http://localhost/admin-panel/show-article/<?php echo $articles[1]['id'];?>"><?php echo substr( $articles[1]['title'],0,50).'...';?></a></h2>
                            <ul class="caption-info-bar">
                                <li><a href="#"><i class="fa fa-user text-yellow"></i>&nbsp;<?php echo $articles[1]['username'];?></a>
                                </li>
                                <li><?php echo date("M,d,Y",strtotime($articles[1]['created_at']))?></li>
                                <li><i class="fa fa-comments text-yellow"></i>&nbsp;<?php echo $articles[1]['comments_count'];?></li>
                                <li><i class="fa fa-eye text-yellow"></i>&nbsp;<?php echo $articles[1]['view'];?></li>
                            </ul>
                        </section>
                    </section>
                        <?php }?>
                    <?php if (isset($articles[2])){?>
                    <section class="intro-1-3-item intro-h-50 position-relative h-md-300px">
                        <section class="bg-3 intro-h-100 img-bg" style="background: url(http://localhost/admin-panel/<?php echo $articles[2]['image'];?>) no-repeat center; background-size: cover"></section>
                        <section class="intro-item-caption">
                            <h2 class="caption-title"><a href="http://localhost/admin-panel/show-article/<?php echo $articles[2]['id'];?>"><?php echo substr( $articles[2]['title'],0,50).'...';?></a></h2>
                            <ul class="caption-info-bar">
                                <li><a href="#"><i class="fa fa-user text-yellow"></i>&nbsp;<?php echo $articles[2]['username'];?></a>
                                </li>
                                <li><?php echo date("M,d,Y",strtotime($articles[2]['created_at']))?></li>
                                <li><i class="fa fa-comments text-yellow"></i>&nbsp;<?php echo $articles[2]['comments_count'];?></li>
                                <li><i class="fa fa-eye text-yellow"></i>&nbsp;<?php echo $articles[2]['view'];?></li>
                            </ul>
                        </section>
                    </section>
                    <?php }?>
                </section>
                <section class="clear-fix"></section>
            </section>

            <section class="intro-row intro-h-1-3">
                <?php if (isset($articles[3])){?>
                <section class="intro-1-3-col-item intro-h-100 position-relative h-md-300px">
                    <section class="bg-4 intro-h-100 img-bg" style="background: url(http://localhost/admin-panel/<?php echo $articles[3]['image'];?>) no-repeat center; background-size: cover"></section>
                    <section class="intro-item-caption">
                        <h2 class="caption-title"><a href="http://localhost/admin-panel/show-article/<?php echo $articles[3]['id'];?>"><?php echo substr( $articles[3]['title'],0,50).'...';?></a></h2>
                        <ul class="caption-info-bar">
                            <li><a href="#"><i class="fa fa-user text-yellow"></i>&nbsp;<?php echo $articles[3]['username'];?></a>
                            </li>
                            <li><?php echo date("M,d,Y",strtotime($articles[3]['created_at']))?></li>
                            <li><i class="fa fa-comments text-yellow"></i>&nbsp;<?php echo $articles[3]['comments_count'];?></li>
                            <li><i class="fa fa-eye text-yellow"></i>&nbsp;<?php echo $articles[3]['view'];?></li>
                        </ul>
                    </section>
                </section>
                <?php }?>
                <?php if (isset($articles[4])){?>
                <section class="intro-1-3-col-item intro-h-100 position-relative h-md-300px">
                    <section class="bg-5 intro-h-100 img-bg" style="background: url(http://localhost/admin-panel/<?php echo $articles[4]['image'];?>) no-repeat center; background-size: cover"></section>
                    <section class="intro-item-caption">
                        <h2 class="caption-title"><a href="http://localhost/admin-panel/show-article/<?php echo $articles[4]['id'];?>"><?php echo substr( $articles[4]['title'],0,50).'...';?></a></h2>
                        <ul class="caption-info-bar">
                            <li><a href="#"><i class="fa fa-user text-yellow"></i>&nbsp;<?php echo $articles[4]['username'];?></a>
                            </li>
                            <li><?php echo date("M,d,Y",strtotime($articles[4]['created_at']))?></li>
                            <li><i class="fa fa-comments text-yellow"></i>&nbsp;<?php echo $articles[4]['comments_count'];?></li>
                            <li><i class="fa fa-eye text-yellow"></i>&nbsp;<?php echo $articles[4]['view'];?></li>
                        </ul>
                    </section>
                </section>
                    <?php }?>
                <?php if (isset($articles[5])){?>
                <section class="intro-1-3-col-item intro-h-100 position-relative h-md-300px">
                    <section class="bg-6 intro-h-100 img-bg" style="background: url(http://localhost/admin-panel/<?php echo $articles[5]['image'];?>) no-repeat center; background-size: cover"></section>
                    <section class="intro-item-caption">
                        <h2 class="caption-title"><a href="http://localhost/admin-panel/show-article/<?php echo $articles[5]['id'];?>"><?php echo substr( $articles[5]['title'],0,50).'...';?></a></h2>
                        <ul class="caption-info-bar">
                            <li><a href="#"><i class="fa fa-user text-yellow"></i>&nbsp;<?php echo $articles[5]['username'];?></a>
                            </li>
                            <li><?php echo date("M,d,Y",strtotime($articles[5]['created_at']))?></li>
                            <li><i class="fa fa-comments text-yellow"></i>&nbsp;<?php echo $articles[5]['comments_count'];?></li>
                            <li><i class="fa fa-eye text-yellow"></i>&nbsp;<?php echo $articles[5]['view'];?></li>
                        </ul>
                    </section>
                </section>
                    <?php }?>
                <section class="clear-fix"></section>
            </section>
        </section>
        <!--#endregion-->

        <!--#region sardabir-->
        <div class="intro-row mt-40">
            <header>
                <h3 class="title">پر بحث ترین ها</h3>
            </header>
            <div class="row">
                <?php foreach ($discussions as $discussion){ ?>
                <div class="col-md-3 col-sm-6 article-box">
                    <article>
                        <img src="<?php echo $discussion['image']?>" alt="">
                        <h2><a href="http://localhost/admin-panel/show-article/<?php echo $discussion['id'];?>"><?php echo substr( $discussion['title'],0,50).'...';?></a></h2>
                        <div class="detail">
                            <a href=""><i class="fa fa-user"></i><?php echo $discussion['username']?></a>
                            <span class="comment-pt"><i class="fa fa-comments"></i><?php echo $discussion['comments_count']?></span>
                            <span><i class="fa fa-eye"></i><?php echo $discussion['view']?></span>
                            <section class="clear-fix"></section>
                        </div>
                    </article>
                </div>
                <?php }?>
            </div>
        </div>
        <!--#endregion-->

        <!--#region first-row-->
        <div class="intro-row mt-40">
            <div class="row">
                <aside class="col-md-4 col-sm-12 col-xs-12 pull-right">
                    <?php
                    require_once(realpath(dirname(__FILE__) . "/../app/layouts/sidebar.php"));
                    ?>
                </aside>

                <div class="col-md-8 col-sm-12 col-xs-12 ">
                    <!--#region last-news-->
                    <section class="last-news-section border-radius">
                        <header><i class="icons icon-doc-2"></i>
                            <h3>مطالب جدید</h3>
                        </header>
                        <ul>
                            <?php foreach ($articles as $article){?>
                            <li>
                                <img class="border-radius" src="<?php echo $article['image']?>">
                                <h2> <a href="http://localhost/admin-panel/show-article/<?php echo $article['id'];?>"><?php echo substr( $article['title'],0,100).'...';?></a></h2>
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
                    <!--#endregion-->
                </div>
            </div>
        </div>
        <!--#endregion-->

        <!--#region nature-->
        <div class="intro-row mt-40 ">
            <header>
                <h3 class="title">طبیعت جنوب</h3>
            </header>
            <div class="row">
                <?php foreach ($natures as $nature){?>
                <div class="col-md-4 col-sm-6 article-box">
                    <article>
                        <img src="<?php echo $nature['image']?>" alt="">
                        <h2><a href="#"><?php echo substr( $nature['title'],0,70).'...';?></a></h2>
                        <div class="detail">
                            <a href=""><i class="fa fa-user"></i><?php echo $nature['username']?></a>
                            <span class="comment-pt"><i class="fa fa-comments"></i><?php echo $nature['comments_count']?></span>
                            <span><i class="fa fa-eye"></i><?php echo $nature['view']?></span>
                            <section class="clear-fix"></section>
                        </div>
                    </article>
                </div>
                <?php }?>
            </div>
        </div>
        <!--#end region nature-->
    </section>


<?php
require_once(realpath(dirname(__FILE__) . "/../app/layouts/footer.php"));
?>