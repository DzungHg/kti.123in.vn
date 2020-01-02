<?php namespace ProcessWire; ?>

<pw-region id="page-content">
		<!--Nav bar -->
<nav class="uk-navbar-container uk-margin uk-navbar-transparent uk-background-primary uk-light uk-margin-remove-bottom">
	<?php include("./blocks/_main-nav-part.php"); ?>
</nav>

<!--Header -->
<?php include("./blocks/_page-header.php"); ?>

<!--Nội dung-->
<div class="uk-section uk-section-small uk-padding-remove-bottom section-content">
        <div class="uk-container uk-position-relative">
            <div uk-grid>
                <div class="uk-width-3-4@m">
                    <article class="uk-article">
                        <header>
                            <h1 class="uk-article-title uk-margin-bottom"><?=$page->title?></h1>
                            <div class="author-box uk-card">
                                <div class="uk-card-header uk-padding-remove">
                                    <div class="uk-grid-small uk-flex-middle  uk-position-relative" uk-grid>
                                        <div class="uk-width-auto">
                                            <img class="uk-border-circle" width="40" height="40" src="assets/img/joshua.jpg">
                                        </div>
                                        <div class="uk-width-expand">
                                            <h5 class="uk-card-title">Joshua Birdman</h5>
                                            <p class="uk-article-meta uk-margin-remove-top">Created: Sep 06, 2016 - Updated: Apr 26, 2017</p>
                                        </div>
                                        <a href="#" class="uk-button uk-button-outline-primary uk-button-small uk-visible@m">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="entry-content uk-margin-medium-top">
							<p class="uk-text-lead"><?=$page->summary?></p>
							<!--bắt đầu render các paragraph  ở đây -->
                            <h2 id="animation-repeat">Instalation</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <h2 id="animation-delay">Quick Setup</h2>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillriatur. Excepteur sint occaecat cupidatat non proident,
                                sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <h4>Change your password</h4>
                            <ol class="ol-pretty uk-list-large">
                                <li>Click your team name to open the Team Menu.</li>
                                <li>Select Profile & account. This will open your profile on the right side of your screen.</li>
                                <li>Under your name, click Account Settings. This will open your Account settings.</li>
                                <li>By Password, click expand.</li>
                                <li>Enter your Current Password, and then a New Password.</li>
                                <li>Click Save Password.</li>
                            </ol>
                            <h2 id="animation-fade">Advanced Options</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <h2 id="animation-scale-up">Content Import</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <div class="uk-alert-primary" uk-alert>
                                <p>If you've followed the steps above, but have yet to receive a password reset email, please check all tabs, folders, and spam filters in your inbox.</p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="article-votes uk-text-center uk-margin-medium-top uk-padding uk-padding-remove-horizontal border-bottom border-top">
                            <h3>Was this article helpful?</h3>
                            <a href="#" class="vote uk-button uk-button-outline-primary"><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 0.8"></span>Yes</a>
                            <a href="#" class="vote uk-button uk-button-outline-primary uk-margin-small-left"><span class="uk-margin-small-right uk-inline" uk-icon="icon: close; ratio: 0.8"></span>No</a>
                            <p class="vote-thanks uk-margin-remove">Thanks so much for your feedback!</p>
                            <p class="vote-question text-dark">Have more questions? <a href="#">Submit a request</a></p>
                        </div>
                        <div class="uk-child-width-1-2@s text-dark article-related uk-margin-medium-top" uk-grid>
                            <div>
                                <h3>Recently Viewed Articles</h3>
                                <ul class="uk-list uk-list-large">
                                    <li><a href="#">Sed ut perspiciatis unde omnis iste laudantium, totam rem aperiam</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet, elabore et dolore magna aliqua</a></li>
                                    <li><a href="#">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod</a></li>
                                </ul>
                            </div>
                            <div>
                                <h3>Related Articles</h3>
                                <ul class="uk-list uk-list-large">
                                    <li><a href="#">Apsum dolor sit amet, consectet tempor incididunt ut dolore magna aliqua</a></li>
                                    <li><a href="#">Hadem sit amet, consectetur adipiscing elit, sed do eiusmod</a></li>
                                    <li><a href="#">Lorem ipsum dolor tempor incididunt ut labore et dolore magna aliqua</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="uk-margin-medium-top border-top padding-top">
                            <h3 class="uk-margin-medium-bottom">Comments</h3>
                            <ul class="uk-comment-list">
                                <li>
                                    <article class="uk-comment uk-visible-toggle">
                                        <header class="uk-comment-header uk-position-relative">
                                            <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-comment-avatar uk-border-circle" src="assets/img/ashley.jpg" width="70" height="70" alt="">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Ashley Winslow</a></h4>
                                                    <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">12 days ago</a></p>
                                                </div>
                                            </div>
                                            <div class="uk-position-top-right uk-position-small uk-hidden-hover"><a class="uk-link-muted" href="#">Reply</a></div>
                                        </header>
                                        <div class="uk-comment-body">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                                                Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </article>
                                    <ul>
                                        <li>
                                            <article class="uk-comment uk-comment-primary uk-visible-toggle">
                                                <header class="uk-comment-header uk-position-relative">
                                                    <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                                        <div class="uk-width-auto">
                                                            <img class="uk-comment-avatar uk-border-circle" src="assets/img/joshua.jpg" width="70" height="70" alt="">
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Joshua Birdman</a></h4>
                                                            <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">12 days ago</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="uk-position-top-right uk-position-small uk-hidden-hover"><a class="uk-link-muted" href="#">Reply</a></div>
                                                </header>
                                                <div class="uk-comment-body">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                                                        et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </article>
                                        </li>
                                        <li>
                                            <article class="uk-comment uk-visible-toggle">
                                                <header class="uk-comment-header uk-position-relative">
                                                    <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                                        <div class="uk-width-auto">
                                                            <img class="uk-comment-avatar uk-border-circle" src="assets/img/ashley.jpg" width="70" height="70" alt="">
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Ashley Winslow</a></h4>
                                                            <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">12 days ago</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="uk-position-top-right uk-position-small uk-hidden-hover"><a class="uk-link-muted" href="#">Reply</a></div>
                                                </header>
                                                <div class="uk-comment-body">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                                                        et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </article>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="reply uk-margin-medium-top border-top padding-top">
                            <h3 class="uk-margin-medium-bottom">Leave a Comment</h3>
                            <form class="uk-grid-small" uk-grid>
                                <div class="uk-width-1-2@s">
                                    <input class="uk-input" type="text" placeholder="Name">
                                </div>
                                <div class="uk-width-1-2@s">
                                    <input class="uk-input" type="email" placeholder="Email">
                                </div>
                                <div class="uk-width-1-1">
                                    <textarea class="uk-textarea" rows="5" placeholder="Comment"></textarea>
                                </div>
                                <div class="uk-width-1-1">
                                    <button class="uk-button uk-button-primary uk-width-1-1 uk-width-auto@s">Submit</button>
                                </div>
                            </form>
                        </div>
                    </article>
                </div>
                <div class="uk-width-1-4@m">
                    <div uk-sticky="offset: 100" class="scrollspy uk-sticky uk-active uk-card uk-card-small uk-card-body uk-padding-remove-top uk-visible@m">
                        <h3 class="uk-card-title">Table of Contents</h3>
                        <ul class="uk-nav uk-nav-default" uk-scrollspy-nav="closest: li; scroll: true; offset: 30">
                            <li><a href="#animation-repeat">Instalation</a></li>
                            <li><a href="#animation-delay">Quick Setup</a></li>
                            <li><a href="#animation-fade">Advanced Options</a></li>
                            <li><a href="#animation-scale-up">Content Import</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</pw-region>



