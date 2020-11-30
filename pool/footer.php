<div class="container index">
    <div class="row">
        <div class="col-md-8">
        </div>
        <div class="col-md-4"> 
        </div>
			<div class="col-md-12"> 
        </div>
    </div>
</div>

<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">首页</a></li>
  <li role="presentation"><a href="#">博客</a></li>
  <li role="presentation"><a href="#">制作人员</a></li>
</ul>

<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
             <h3 class="panel-title">内容一</h3>
        </div>
        <div class="panel-body">
             <?php if(have_posts()): ?> 
                <?php while(have_posts()) : the_post(); ?>
<art class="post">
<div class="row">
 <?php if(has_post_thumbnail()): ?>
 <div class="col-md-7">
<div class="post-thumbnail">
  <?php the_post_thumbnail(); ?>
 </div>
</div>
    <div class="col-md-9">
        <h2>??????</h2>
    </div>
    <?php else : ?>
       <div class="col-md-12">

 <h2>
 < a href="<?php echo the_permalink(); ?>">
<?php echo the_title(); ?>
 </ a>
 </h2>
 <p class="meta">
 Posted at
 <?php the_time(); ?> on 
 <?php the_date(); ?> by 
 <strong><?php the_author(); ?></strong>
 </p >
 <div class="excerpt">
 <?php echo get_the_excerpt(); ?>
 </div>
 <br>
 <a class="btn " href="<?php the_permalink(); ?>">
 Read More 
 </ a>

 </div>
 <?php endif; ?>
</div>
</art>
  <?php endwhile; ?>
             <?php endif; ?>
        </div>

    </div>
</div>

<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-heading">
             <h3 class="panel-title">内容二</h3>
        </div>
        <div class="panel-body">
             <?php if(have_posts()): ?> 
                <?php while(have_posts()) : the_post(); ?> 
                <?php endwhile; ?>
             <?php endif; ?>
        </div>
    </div>
</div>


</body>
</html>