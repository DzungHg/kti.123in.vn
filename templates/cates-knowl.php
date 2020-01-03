<?php namespace ProcessWire;
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
	<!--Nav bar -->
<nav class="uk-navbar-container uk-margin uk-navbar-transparent uk-background-primary uk-light uk-margin-remove-bottom">
	<?php include("./blocks/_main-nav-part.php"); ?>
</nav>

<!--Header -->
<?php include("./blocks/_page-header.php"); ?>

<!--Nội dung-->
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
                <div>
                    <h3>Recent Articles</h3>
                    <ul class="uk-list uk-list-large uk-list-divider link-icon-right">
                        <li><a href="article.html">Lorem ipsum dolor sit ut labore et dolore magna aliqua</a></li>
                        <li><a href="article.html">Sed ut perspiciatis unde omnis iste natus err aperiam</a></li>
                        <li><a href="article.html">Consectetur adipiscing elit sed do eiusmod</a></li>
                        <li><a href="article.html">Donseced do eiusmod tempor incididunt ut labore magna aliqua</a></li>
                        <li><a href="article.html">Sed utem accusantium doloremque laudantium totam</a></li>
                    </ul>
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