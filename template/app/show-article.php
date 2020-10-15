<?php
session_start();
require_once(realpath(dirname(__FILE__) . "/../app/layouts/head-tag.php"));
?>
    <div class="container margin-top-30">
        <div class="row">

            <div class="col-md-8 col-sm-12 col-xs-12 pull-left">
                <section class="single-news border-radius">
                    <header>
                        <h2><?php echo substr($article['title'],0,70).'...'?></h2> <span> <i class="fa fa-calendar"></i> انتشار :
                            <?php echo date("M,d,Y",strtotime($article['created_at']))?></span>
                    </header>
                    <article>
                        <img src="http://localhost/admin-panel/<?php echo $article['image']?>" alt="">
                        <p><?php echo $article['body']?></p>
                    </article>
                </section>

                <!--#region comment-post-->
                <div class="comment-layer">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#addcomment" aria-expanded="true"> نظرات کاربران
                            </a></li>
                    </ul>
                    <div class="tab-content ">
                        <div id="addcomment" class="tab-pane fade active in">
                            <?php if (isset($_SESSION['user'])){?>
                            <form action="http://localhost/admin-panel/comment-store" method="post">
                                <div class="col-md-12">
                                    <label for="Message" id="message-label">متن دیدگاه :</label>
                                    <input name="article_id" type="hidden" value="<?php echo $id; ?>">
                                    <textarea id="Message" class="form-control" name="comment"></textarea>
                                    <input class="btn btn-primary btn-block" value="ثبت دیدگاه ارزشمند شما" type="submit">
                                </div>
                                <div class="clearfix"></div>
                            </form>
                            <?php }?>
                            <hr>
                            <!-- Comment -->
                            <ul class="comment-list">
                                <?php foreach ( $comments as $comment){?>
                                <li>
                                    <div>
                                        <h5>ارسال شده از : <?php echo $comment['username']?>  در تاریخ : <?php echo date("M,d,Y",strtotime($comment['created_at']))?> </h5>
                                        <p>
                                           <?php echo $comment['comment'];?>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                <?php }?>
                            </ul>

                            <ul class="pagination pagging-comment">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul>
                            <!-- End Comment -->
                        </div>
                    </div>
                </div>
                <!--#endregion-->
            </div>


            <aside class="col-md-4 col-sm-12 col-xs-12 pull-right user-account">
                <section class="post-info border-radius">
                    <header>
                        <h3> اطلاعات این پست </h3>
                    </header>
                    <ul>
                        <li>
                            <i class="fa fa-user"></i>
                            نویسنده: <?php echo $username['username']?>
                        </li>
                        <li>
                            <i class="fa fa-comment"></i>
                            تعداد نظرات: <?php echo $commentsCount['COUNT(*)']?>
                        </li>
                        <li>
                            <i class="fa fa-eye"></i>
                            تعداد بازدید : <?php echo $article['view']?>
                        </li>
                        <li>
                            <i class="fa fa-calendar-check-o"></i>
                            تاریخ انتشار : <?php echo date("M,d,Y",strtotime($article['created_at']))?>

                        </li>

                        <li>
                            <i class="fa fa-link"></i>
                            لینک کوتاه : <span class="short-url"> Zoomit.com/b/316x </span>
                        </li>

                        <div class="share-layer">
                            <span> به اشتراک گذاری </span>
                            <a href="" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="" class="google"><i class="fa fa-google"></i></a>
                            <a href="" class="telegram"><i class="fa fa-paper-plane"></i></a>
                            <a href="" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            <section class="clearfix"></section>
                        </div>
                    </ul>
                </section>
                <?php
                require_once(realpath(dirname(__FILE__) . "/../app/layouts/sidebar.php"));
                ?>
            </aside>

        </div>
    </div>
    
 <?php
require_once(realpath(dirname(__FILE__) . "/../app/layouts/footer.php"));
?>