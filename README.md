<div id="answer-39913449" class="answer js-answer" data-answerid="39913449" data-parentid="38602321" data-score="161" data-position-on-page="1" data-highest-scored="1" data-question-has-accepted-highest-score="0" itemprop="acceptedAnswer" itemscope="" itemtype="https://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            <div class="js-voting-container d-flex jc-center fd-column ai-stretch gs4 fc-black-200" data-post-id="39913449">
        <button class="js-vote-up-btn flex--item s-btn s-btn__unset c-pointer " data-controller="s-tooltip" data-s-tooltip-placement="right" aria-pressed="false" aria-label="Up vote" data-selected-classes="fc-theme-primary" data-unselected-classes="" aria-describedby="--stacks-s-tooltip-04zrog9d">
            <svg aria-hidden="true" class="svg-icon iconArrowUpLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 25h32L18 9 2 25Z"></path></svg>
        </button><div id="--stacks-s-tooltip-04zrog9d" class="s-popover s-popover__tooltip pe-none" aria-hidden="true" role="tooltip">This answer is useful<div class="s-popover--arrow"></div></div>
        <div class="js-vote-count flex--item d-flex fd-column ai-center fc-black-500 fs-title" itemprop="upvoteCount" data-value="161">
            161
        </div>
        <button class="js-vote-down-btn flex--item s-btn s-btn__unset c-pointer " data-controller="s-tooltip" data-s-tooltip-placement="right" aria-pressed="false" aria-label="Down vote" data-selected-classes="fc-theme-primary" data-unselected-classes="" aria-describedby="--stacks-s-tooltip-1v8h0tw9">
            <svg aria-hidden="true" class="svg-icon iconArrowDownLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 11h32L18 27 2 11Z"></path></svg>
        </button><div id="--stacks-s-tooltip-1v8h0tw9" class="s-popover s-popover__tooltip pe-none" aria-hidden="true" role="tooltip">This answer is not useful<div class="s-popover--arrow"></div></div>



            <div class="js-accepted-answer-indicator flex--item fc-green-500 py6 mtn8 d-none" data-s-tooltip-placement="right" title="Loading when this answer was accepted…" tabindex="0" role="note" aria-label="Accepted">
                <div class="ta-center">
                    <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36" viewBox="0 0 36 36"><path d="m6 14 8 8L30 6v8L14 30l-8-8v-8Z"></path></svg>
                </div>
            </div>

    
        <a class="js-post-issue flex--item s-btn s-btn__unset c-pointer py6 mx-auto" href="/posts/39913449/timeline" data-shortcut="T" data-ks-title="timeline" data-controller="s-tooltip" data-s-tooltip-placement="right" aria-label="Timeline" aria-describedby="--stacks-s-tooltip-fl23sjfv"><svg aria-hidden="true" class="mln2 mr0 svg-icon iconHistory" width="19" height="18" viewBox="0 0 19 18"><path d="M3 9a8 8 0 1 1 3.73 6.77L8.2 14.3A6 6 0 1 0 5 9l3.01-.01-4 4-4-4h3L3 9Zm7-4h1.01L11 9.36l3.22 2.1-.6.93L10 10V5Z"></path></svg></a><div id="--stacks-s-tooltip-fl23sjfv" class="s-popover s-popover__tooltip pe-none" aria-hidden="true" role="tooltip">Show activity on this post.<div class="s-popover--arrow"></div></div>

</div>

        </div>

        

<div class="answercell post-layout--right">
    
    <div class="s-prose js-post-body" itemprop="text">
<ul>
<li>Clone your project</li>
<li>Go to the folder application using <code>cd</code> command on your cmd or terminal</li>
<li>Run <code>composer install</code> on your cmd or terminal</li>
<li>Copy <code>.env.example</code> file to <code>.env</code> on the root folder. You can type <code>copy .env.example .env</code> if using command prompt Windows or <code>cp .env.example .env</code> if using terminal, Ubuntu</li>
<li>Open your <code>.env</code> file and change the database name (<code>DB_DATABASE</code>) to whatever you have, username (<code>DB_USERNAME</code>) and password (<code>DB_PASSWORD</code>) field correspond to your configuration.</li>
<li>Run <code>php artisan key:generate</code></li>
<li>Run <code>php artisan migrate</code></li>
<li>Run <code>php artisan serve</code></li>
<li>Go to http://localhost:8000/</li>
</ul>
    </div>
    <div class="mt24">
        <div class="d-flex fw-wrap ai-start jc-end gs8 gsy">
            <time itemprop="dateCreated" datetime="2016-10-07T09:03:46"></time>
            <div class="flex--item mr16" style="flex: 1 1 100px;">
                


<div class="js-post-menu pt2" data-post-id="39913449">
    <div class="d-flex gs8 s-anchors s-anchors__muted fw-wrap">

            <div class="flex--item">
                <a href="/a/39913449" rel="nofollow" itemprop="url" class="js-share-link js-gps-track" title="Short permalink to this answer" data-gps-track="post.click({ item: 2, priv: 0, post_type: 2 })" data-controller="se-share-sheet s-popover" data-se-share-sheet-title="Share a link to this answer" data-se-share-sheet-subtitle="" data-se-share-sheet-post-type="answer" data-se-share-sheet-social="facebook twitter devto" data-se-share-sheet-location="2" data-se-share-sheet-license-url="https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f4.0%2f" data-se-share-sheet-license-name="CC BY-SA 4.0" data-s-popover-placement="bottom-start" aria-controls="se-share-sheet-1" data-action=" s-popover#toggle se-share-sheet#preventNavigation s-popover:show->se-share-sheet#willShow s-popover:shown->se-share-sheet#didShow" aria-expanded="false">Share</a><div class="s-popover z-dropdown s-anchors s-anchors__default" style="width: unset; max-width: 28em;" id="se-share-sheet-1"><div class="s-popover--arrow"></div><div><label class="js-title fw-bold" for="share-sheet-input-se-share-sheet-1">Share a link to this answer</label> <span class="js-subtitle"></span></div><div class="my8"><input type="text" id="share-sheet-input-se-share-sheet-1" class="js-input s-input wmn3 sm:wmn-initial" readonly=""></div><div class="d-flex jc-space-between ai-center mbn4"><button class="js-copy-link-btn s-btn s-btn__link js-gps-track" data-gps-track="">Copy link</button><a href="https://creativecommons.org/licenses/by-sa/4.0/" rel="license" class="js-license s-block-link w-auto" target="_blank" title="The current license for this post: CC BY-SA 4.0">CC BY-SA 4.0</a><div class="js-social-container d-none"></div></div></div>
            </div>



            <div class="flex--item">
                <button type="button" id="btnFollowPost-39913449" class="s-btn s-btn__link js-follow-post js-follow-answer js-gps-track" data-gps-track="post.click({ item: 14, priv: 0, post_type: 2 })" data-controller="s-tooltip " data-s-tooltip-placement="bottom" data-s-popover-placement="bottom" aria-controls="" aria-describedby="--stacks-s-tooltip-ow1v5dtd">
                    Follow
                </button><div id="--stacks-s-tooltip-ow1v5dtd" class="s-popover s-popover__tooltip pe-none" aria-hidden="true" role="tooltip">Follow this answer to receive notifications<div class="s-popover--arrow"></div></div>
            </div>






    </div>
    <div class="js-menu-popup-container"></div>
</div>
            </div>
            <div class="post-signature flex--item fl0">
<div class="user-info user-hover">
    <div class="user-action-time">
        <a href="/posts/39913449/revisions" title="show all edits to this post" class="js-gps-track" data-gps-track="post.click({ item: 4, priv: 0, post_type: 2 })">edited <span title="2021-12-22 17:52:47Z" class="relativetime">Dec 22, 2021 at 17:52</span></a>
    </div>
    <div class="user-gravatar32">
        <a href="/users/1255289/miken32"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/5ed02658b2440179f00eeff8beb7aa4c?s=64&amp;d=identicon&amp;r=PG" alt="user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details">
        <a href="/users/1255289/miken32">miken32</a>
        <div class="-flair">
            <span class="reputation-score" title="reputation score 40,300" dir="ltr">40.3k</span><span title="15 gold badges" aria-hidden="true"><span class="badge1"></span><span class="badgecount">15</span></span><span class="v-visible-sr">15 gold badges</span><span title="98 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">98</span></span><span class="v-visible-sr">98 silver badges</span><span title="138 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">138</span></span><span class="v-visible-sr">138 bronze badges</span>
        </div>
    </div>
</div>
            </div>


            <div class="post-signature flex--item fl0">
                <div class="user-info user-hover">
    <div class="user-action-time">
        answered <span title="2016-10-07 09:03:46Z" class="relativetime">Oct 7, 2016 at 9:03</span>
    </div>
    <div class="user-gravatar32">
        <a href="/users/6426405/conor"><div class="gravatar-wrapper-32"><img src="https://i.stack.imgur.com/QNNTV.png?s=64&amp;g=1" alt="user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
        <a href="/users/6426405/conor">Conor</a><span class="d-none" itemprop="name">Conor</span>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">2,253</span><span title="1 gold badge" aria-hidden="true"><span class="badge1"></span><span class="badgecount">1</span></span><span class="v-visible-sr">1 gold badge</span><span title="12 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">12</span></span><span class="v-visible-sr">12 silver badges</span><span title="22 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">22</span></span><span class="v-visible-sr">22 bronze badges</span>
        </div>
    </div>
</div>


            </div>
        </div>
        
    
    </div>
    
</div>




            <span class="d-none" itemprop="commentCount">5</span> 
    <div class="post-layout--right js-post-comments-component">
        <div id="comments-39913449" class="comments js-comments-container bt bc-black-075 mt12 " data-post-id="39913449" data-min-length="15">
            <ul class="comments-list js-comments-list" data-remaining-comments-count="0" data-canpost="false" data-cansee="true" data-comments-unavailable="false" data-addlink-disabled="true">

                        <li id="comment-98640922" class="comment js-comment " data-comment-id="98640922" data-comment-owner-id="5835121" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">@MarianoMontañezUreta it may be, but this is not the expected answer for this post.</span>
                
              <div class="d-inline-flex ai-center">
–&nbsp;<a href="/users/5835121/smplyjr" title="744 reputation" class="comment-user owner">SMPLYJR</a>
                </div>
                <span class="comment-date" dir="ltr"><a class="comment-link" href="#comment98640922_39913449"><span title="2019-05-05 22:35:00Z, License: CC BY-SA 4.0" class="relativetime-clean">May 5, 2019 at 22:35</span></a></span>
            </div>
        </div>
    </li>
    <li id="comment-99789973" class="comment js-comment " data-comment-id="99789973" data-comment-owner-id="1883256" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">@MarianoMontañezUreta It's 2019 and this still the best workaround!</span>
                
              <div class="d-inline-flex ai-center">
–&nbsp;<a href="/users/1883256/pathros" title="8,968 reputation" class="comment-user">Pathros</a>
                </div>
                <span class="comment-date" dir="ltr"><a class="comment-link" href="#comment99789973_39913449"><span title="2019-06-15 03:26:53Z, License: CC BY-SA 4.0" class="relativetime-clean">Jun 15, 2019 at 3:26</span></a></span>
            </div>
        </div>
    </li>
    <li id="comment-117756580" class="comment js-comment " data-comment-id="117756580" data-comment-owner-id="1370510" data-comment-score="1">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
                    <span title="number of 'useful comment' votes received" class="cool">1</span>
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">your a Life Saver</span>
                
              <div class="d-inline-flex ai-center">
–&nbsp;<a href="/users/1370510/user1370510" title="120 reputation" class="comment-user">user1370510</a>
                </div>
                <span class="comment-date" dir="ltr"><a class="comment-link" href="#comment117756580_39913449"><span title="2021-03-13 12:45:20Z, License: CC BY-SA 4.0" class="relativetime-clean">Mar 13, 2021 at 12:45</span></a></span>
            </div>
        </div>
    </li>
    <li id="comment-124629345" class="comment js-comment " data-comment-id="124629345" data-comment-owner-id="15143982" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">also you should run npm install after composer install.</span>
                
              <div class="d-inline-flex ai-center">
–&nbsp;<a href="/users/15143982/sepehr-pourjozi" title="119 reputation" class="comment-user">Sepehr Pourjozi</a>
                </div>
                <span class="comment-date" dir="ltr"><a class="comment-link" href="#comment124629345_39913449"><span title="2021-12-28 07:16:15Z, License: CC BY-SA 4.0" class="relativetime-clean">Dec 28, 2021 at 7:16</span></a></span>
            </div>
        </div>
    </li>
    <li id="comment-126139936" class="comment js-comment " data-comment-id="126139936" data-comment-owner-id="1573893" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">This still works in March 2022 with Laravel 9. It's one of those solutions that work exactly as advertised. No errors whatsoever. Follow the steps - and presto! Thanks mate!</span>
                
              <div class="d-inline-flex ai-center">
–&nbsp;<a href="/users/1573893/raymond" title="91 reputation" class="comment-user">Raymond</a>
                </div>
                <span class="comment-date" dir="ltr"><a class="comment-link" href="#comment126139936_39913449"><span title="2022-03-05 15:55:45Z, License: CC BY-SA 4.0" class="relativetime-clean">Mar 5 at 15:55</span></a></span>
            </div>
        </div>
    </li>

            </ul>
	    </div>

        <div id="comments-link-39913449" data-rep="50" data-anon="true">
                    <a class="js-add-link comments-link disabled-link" title="Use comments to ask for more information or suggest improvements. Avoid comments like “+1” or “thanks”." href="#" role="button">Add a comment</a>
                <span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="Expand to show all comments on this post" href="#" onclick="" role="button"></a>
        </div>         
    </div>
    </div>
</div>
