<!--#category-->
<section class="sidebar-item">
    <ul class="sidebar-list">
        <?php foreach ($categories as $category){?>
        <li><a href="http://localhost/admin-panel/show-category/<?php echo $category['id']?>"><b><?php echo $category['name']?></b></a></li>
        <?php }?>
    </ul>
</section>
<!--#endCategory-->

<!--#region most views news-->
<section class="last-news-side border-radius">
    <header><i class="icons icon-star"></i>
        <h3> پربازدیدترین مطالب</h3>
    </header>
    <ul>
        <?php foreach ($sidebarPopularArticles as $article){?>
        <li>
            <img class="border-radius" src="http://localhost/admin-panel/<?php echo $article['image']?>">
            <h2> <a href="http://localhost/admin-panel/show-article/<?php echo $article['id']?>"><?php echo substr($article['title'],0,50).'...'?></a></h2>
            <span>انتشار : <?php echo date("M,d,Y",strtotime($article['created_at']))?></span>
        </li>
        <?php }?>
    </ul>
</section>
<!--#endregion-->