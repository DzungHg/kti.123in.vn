<?php namespace ProcessWire; 
function renderArticleList($items)
{
	$out = '';
	foreach ($items as $item)
	{
		$out .= "<li>
		 <h3><a href='$item->url'>$item->title</span></a></h3>
		</li>";
	}
	return $out;
}
//-- reder danh mục
$danhMuc = pages()->get('/kien-thuc-in-an/');
$danhMucS = $danhMuc->children;
function renderDanhMucKienThuc($danhMucS, Page $currentPage)
{
    $out = '';
    foreach ($danhMucS as $item )
    {
        if ($item == $currentPage)
        {
            $out .= "<li><a class='uk-text-bold' href='$item->url'>$item->title</a> <span uk-icon='icon: chevron-right'></span></li>";
        } else
        {
            $out .= "<li><a href='$item->url'>$item->title</a></li>";
        }

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
<div class="uk-section uk-section-small uk-padding-remove-bottom section-content">
        <div class="uk-container">
            <div class="uk-grid-medium" uk-grid>
                <div class="uk-width-3-4@m uk-flex-last@m">
                    <h1><?=$page->title?></h1>
                    <p class="uk-text-lead uk-margin-medium-bottom"><?=$page->headline?></p>
                    <ul class="uk-list list-category link-icon-right">
                        <?php echo renderArticleList($page->children); ?>
                    </ul>
                    <!--
                    <ul class="uk-pagination uk-margin-medium-top" uk-margin>
                        <li><a href="#"><span class="uk-margin-small-right" uk-pagination-previous></span> Previous</a></li>
                        <li class="uk-margin-auto-left"><a href="#">Next <span class="uk-margin-small-left" uk-pagination-next></span></a></li>
                    </ul> -->
                    <!-- thay bằng  -->
                    <?php
                        $posts = page()->children('limit=10');
                        echo $posts->renderPager(array(
                           'nextItemLabel' => "Next",
                           'previousItemLabel' => "Prev",
                           'listMarkup' => "<ul class='uk-pagination uk-margin-medium-top' uk-margin>{out}</ul>",
                           'itemMarkup' => "<li class='{class}'>{out}</li>",
                           'linkMarkup' => "<a href='{url}'><span>{out}</span></a>"
                        ));  
                        ?>
                </div>
                <div class="uk-width-1-4@m text-dark sidebar">
                    <h3>Danh Mục Kiến Thức</h3>
                    <ul class="uk-list uk-list-large uk-margin-medium-bottom">
                        <?=renderDanhMucKienThuc($danhMucS, $page)?>
                    </ul>
                    <h3>Related Articles</h3>
                    <ul class="uk-list uk-list-large">
                        <li><a href="article.html">Setting up attributes</a></li>
                        <li><a href="article.html">Shipping Options Page</a></li>
                        <li><a href="article.html">Extensions Setup</a></li>
                        <li><a href="article.html">Shipping Methods</a></li>
                        <li><a href="article.html">Tips and Tricks</a></li>
                        <li><a href="article.html">Troubleshooting Site</a></li>
                        <li><a href="article.html">Video Tutorials</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</pw-region>
