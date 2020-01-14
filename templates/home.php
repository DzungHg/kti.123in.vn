<?php namespace ProcessWire; 

// get most recent blog post
$blog = pages()->get('/kien-thuc-in-an/');
$blogPost = $blog->children;
function renderDanhMucKienThuc($items)
{
	$out = '';
	foreach ($items as $page)
	{
		$out .= "<div>
		<a href='$page->url' class='box uk-border-rounded'>
			 <h3>$page->title</h3>
		</a>
  </div>";
	}
	return $out;
}
?>

<pw-region id="page-content">
<div class="section-hero uk-background-blend-color-burn uk-background-top-center uk-background-cover uk-section-large1 cta" style="background-image: url(<?=$config->urls->templates?>styles/img/city.jpg)" >
        <nav class="uk-navbar-container uk-margin uk-navbar-transparent uk-light">
				<?php include("./blocks/_main-nav-part.php"); ?>
        </nav>
        <div class="uk-container hero">
            <h1 class="uk-heading-primary uk-text-center uk-margin-large-top uk-light"><?=page()->headline?></h1>
            <p class="uk-text-lead uk-text-center uk-light"><?=page()->summary?></p>
            <div class="uk-flex uk-flex-center">
                <form class="uk-margin-medium-top uk-margin-xlarge-bottom uk-search uk-search-default">
                    <a href="" class="uk-search-icon-flip" uk-search-icon></a>
                    <input id="autocomplete" class="uk-search-input uk-form-large" type="search" autocomplete="off" name="s" placeholder="Enter search term here">
                </form>
            </div>
        </div>
</div>
<!-- nội dung -->
<div class="uk-section">
        <div class="uk-container">
            <div class="uk-child-width-1-3@s uk-grid-match uk-grid-medium uk-text-center" uk-grid>
					<?=renderDanhMucKienThuc($blogPost) ?>
            </div>
        </div>
</div>

<div class="uk-section uk-padding-remove-top uk-padding-remove-bottom">
        <div class="uk-container">
            <hr>
        </div>
    </div>

    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-child-width-1-2@s text-dark" uk-grid>
                <div>
                    <h3>Popular Articles</h3>
                    <ul class="uk-list uk-list-large uk-list-divider link-icon-right">
                        <li><a href="article.html">Voluptatem accusantium doloremque laudan rem aperiam</a></li>
                        <li><a href="article.html">Sorem do eiusmod tempor incididunt dolore magna aliqua</a></li>
                        <li><a href="article.html">Lorem ipsum dolor sit amet elit sed do eiusmod</a></li>
                        <li><a href="article.html">Sed ut perspiciatis unde omnis iste natus error sit aperiam</a></li>
                        <li><a href="article.html">Lorem ipsum dolor sit amet, consectetur adipiscing sed iusmod</a></li>
                    </ul>
                </div>
                <!-- Bài gần đâu -->
                <?php include("./article-recent-posts.php"); ?>
                </div>
            </div>
        </div>
    </div>

        <div class="uk-section uk-padding-remove section-cta uk-background-blend-lighten uk-background-center-center uk-background-cover uk-text-center" style="background-image: url(assets/img/cafe.jpg)" >
            <div class="uk-background-muted1 uk-border-rounded1 uk-padding-large">
                <h2>Can't find what you're looking for?</h2>
                <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <p class="uk-margin-medium-top">
                    <a href="contact.html" class="uk-button uk-button-primary uk-button-large">Contact Support</a>
                </p>
            </div>
        </div>			
</pw-region>
