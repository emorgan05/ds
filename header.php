<?php
ini_set("memory_limit","50M");
?>
<!doctype html public "-//w3c//dtd xhtml 1.0 strict//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-strict.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<script type='text/javascript'>var _sf_startpt=(new Date()).getTime()</script>
	<title><?php wp_title('', true); if(is_home()) { bloginfo('name'); } ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta name="verify-v1" content="ShWLymOvJFCYrHSSkKX63VgpedjeDFniLZ/GZMgjSOo=" />
	<?php
		global $the_meta_keywords;
		global $the_meta_description;
		
		if($the_meta_keywords != ""){
			$meta_keywords = $the_meta_keywords;
		} else {
			$meta_keywords = "punk, punk rock, punk music, punk scene, shows, punk shows, punk news, news, reviews, punk reviews, punk interview, ska, hardcore, folk punk, emo, screamo, new album, new albums, against me, tom gabel, gaslight anthem, chaser, rise against, rancid, bad religion, nofx, my chemical romance, fat wreck chords";
		}
		
		if($the_meta_description != ""){
			$meta_description = $the_meta_description;
		} else {
			$meta_description = "Punk music blog with the latest news, reviews, shows, interviews, and album release dates for punk, ska, hardcore, emo, screamo, celtic, and punk-folk bands.";
		}
	?>
	<?php $img = catch_that_image($post->post_content); if ($img): ?>
		<meta property="og:image" content="<?=$img ?>"/>
	<? endif; ?>

	
	<meta name="keywords" content="<?php echo $meta_keywords; ?>" />
	<meta name="description" content="<?php echo $meta_description; ?>" />

	<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>?ver=666" />

	<!--[if IE 8]>
	<style type="text/css">
		body.page-template-template-dying-profile-php .box .genreIMG img {top:19px;}	
	</style>
	<![endif]-->
	<!--[if lte IE 7]> 
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/styleIElt8.css" />
	<![endif]-->

	<script src="<?php bloginfo('template_directory') ?>/js/jquery-1.2.6.pack.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.selectbox-0.6.1.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.filestyle.js" type="text/javascript" charset="utf-8"></script>	
	
	<?php if (is_page('2619') || is_page('2621') || is_page('3024')) : ?>
	<script type="text/javascript">
		/* FILE UPLOADER REPLACEMENT SCRIPT */

		var W3CDOM = (document.createElement && document.getElementsByTagName);

		function init() {
			if (!W3CDOM) return;
			var fakeFileUpload = document.createElement('div');
			fakeFileUpload.className = 'fakefile';
			fakeFileUpload.appendChild(document.createElement('input'));
			var image = document.createElement('img');
			image.src='http://www.quirksmode.org/dom/pix/button_select.gif';
			fakeFileUpload.appendChild(image);
			var x = document.getElementsByTagName('input');
			for (var i=0;i<x.length;i++) {
				if (x[i].type != 'file') continue;
				if (x[i].getAttribute('noscript')) continue;
				if (x[i].parentNode.className != 'fileinputs') continue;
				x[i].className = 'file hidden';
				var clone = fakeFileUpload.cloneNode(true);
				x[i].parentNode.appendChild(clone);
				x[i].relatedElement = clone.getElementsByTagName('input')[0];
				if (x[i].value)
					x[i].onchange();
				x[i].onchange = x[i].onmouseout = function () {
					this.relatedElement.value = this.value;
				}
			}
		}
		/* END FILE UPLOADER REPLACEMENT */
	</script>
	<?php endif; ?>

	<?php if (is_page('2605')) : ?>
	<script type="text/javascript">
		/* SELECT DATE POPUP SCRIPT */

		function OpenCalendar(FieldName)
		{
			var curdate = new Date();
			var YearToUse = curdate.getFullYear();
			var MonthToUse = curdate.getMonth() + 1;
			var DateToUse = curdate.getDay();
			$.post("/wp-content/themes/dying/calendar.php", { year: YearToUse, month: MonthToUse, date: DateToUse, field: FieldName },
			function(data)
			{
				$('#' + FieldName + 'Calendar').html(data);
			});
		}

		function OpenCalendar2(FieldName)
		{
			var curdate = new Date();
			var YearToUse = curdate.getFullYear();
			var MonthToUse = curdate.getMonth() + 1;
			var DateToUse = curdate.getDay();
			$.post("/wp-content/themes/dying/calendar2.php", { year: YearToUse, month: MonthToUse, date: DateToUse, field: FieldName },
			function(data)
			{
				$('#' + FieldName + 'Calendar').html(data);
			});
		}

		function ProcessCalendar(YearToUse, MonthToUse, FieldName)
		{
			$.post("/wp-content/themes/dying/calendar.php", { year: YearToUse, month: MonthToUse, field: FieldName },
			function(data)
			{
				$('#' + FieldName + 'Calendar').fadeOut("fast");
				$('#' + FieldName + 'Calendar').html(data);
				$('#' + FieldName + 'Calendar').fadeIn("slow");
			});
		}

		function ProcessCalendar2(YearToUse, MonthToUse, FieldName)
		{
			$.post("/wp-content/themes/dying/calendar2.php", { year: YearToUse, month: MonthToUse, field: FieldName },
			function(data)
			{
				$('#' + FieldName + 'Calendar').fadeOut("fast");
				$('#' + FieldName + 'Calendar').html(data);
				$('#' + FieldName + 'Calendar').fadeIn("slow");
			});
		}

		function UpdateTextField1(FieldName, DayDate)
		{
			$('#' + FieldName).val(DayDate);
			hideCal1();
		}

		function UpdateTextField2(FieldName, DayDate)
		{
			$('#' + FieldName).val(DayDate);
			hideCal2();
		}

		/* END SELECT DATE POPUP */
	</script>
	<?php endif; ?>
	
	<script type="text/javascript">
	
		function setCloseCookie(name,value,days) {
			if (days) {
				var date = new Date();
				date.setTime(date.getTime()+(days*24*60*60*1000));
				var expires = "; expires="+date.toGMTString();
			}
			else var expires = "";
			document.cookie = name+"="+value+expires+"; path=/";
			
			$("#warning").fadeOut("slow");
		}

		function takeoverClick(event) {	
			event = event || window.event;
			source = event.SrcElement || event.target;	
			if(source.id == "takeover" || source.id == "wrapperFade"){
				window.open("http://bitly.com/SGRstore");	
			}
		}
	</script>
	<script type='text/javascript'>
		var googletag = googletag || {};
		googletag.cmd = googletag.cmd || [];
		(function() {
		var gads = document.createElement('script');
		gads.async = true;
		gads.type = 'text/javascript';
		var useSSL = 'https:' == document.location.protocol;
		gads.src = (useSSL ? 'https:' : 'http:') + 
		'//www.googletagservices.com/tag/js/gpt.js';
		var node = document.getElementsByTagName('script')[0];
		node.parentNode.insertBefore(gads, node);
		})();
		</script>
		
		<script type='text/javascript'>
		googletag.cmd.push(function() {
		googletag.defineSlot('/86310217/468x60_End_of_Post', [468, 60], 'div-gpt-ad-1370317714023-0').addService(googletag.pubads());
		googletag.defineSlot('/86310217/468x60_Main_Bottom', [468, 60], 'div-gpt-ad-1370317714023-1').addService(googletag.pubads());
		googletag.defineSlot('/86310217/468x60_Main_Mid', [468, 60], 'div-gpt-ad-1370317714023-2').addService(googletag.pubads());
		googletag.defineSlot('/86310217/468x60_Main_Top', [468, 60], 'div-gpt-ad-1370317714023-3').addService(googletag.pubads());
		googletag.defineSlot('/86310217/Leaderboard', [728, 90], 'div-gpt-ad-1370317714023-4').addService(googletag.pubads());
		googletag.defineSlot('/86310217/Med_Rec_Above_Fold', [300, 250], 'div-gpt-ad-1370317714023-5').addService(googletag.pubads());
		googletag.defineSlot('/86310217/Med_Rec_Below_Fold', [300, 250], 'div-gpt-ad-1370317714023-6').addService(googletag.pubads());
		googletag.defineSlot('/86310217/Skyscraper', [160, 600], 'div-gpt-ad-1370317714023-7').addService(googletag.pubads());
		googletag.pubads().enableSingleRequest();
		googletag.enableServices();
		});
	</script>
	
	<!-- Floating Nav Fuction -->

<script>
    $(window).load(function(){
      $("#NavWrap2").sticky({ topSpacing: 0 });
    });
  </script>
  
  <script>
  (function($) {
  var defaults = {
      topSpacing: 0,
      bottomSpacing: 0,
      className: 'is-sticky',
      wrapperClassName: 'sticky-wrapper',
      center: false,
      getWidthFrom: ''
    },
    $window = $(window),
    $document = $(document),
    sticked = [],
    windowHeight = $window.height(),
    scroller = function() {
      var scrollTop = $window.scrollTop(),
        documentHeight = $document.height(),
        dwh = documentHeight - windowHeight,
        extra = (scrollTop > dwh) ? dwh - scrollTop : 0;

      for (var i = 0; i < sticked.length; i++) {
        var s = sticked[i],
          elementTop = s.stickyWrapper.offset().top,
          etse = elementTop - s.topSpacing - extra;

        if (scrollTop <= etse) {
          if (s.currentTop !== null) {
            s.stickyElement
              .css('position', '')
              .css('top', '');
            s.stickyElement.parent().removeClass(s.className);
            s.currentTop = null;
          }
        }
        else {
          var newTop = documentHeight - s.stickyElement.outerHeight()
            - s.topSpacing - s.bottomSpacing - scrollTop - extra;
          if (newTop < 0) {
            newTop = newTop + s.topSpacing;
          } else {
            newTop = s.topSpacing;
          }
          if (s.currentTop != newTop) {
            s.stickyElement
              .css('position', 'fixed')
              .css('top', newTop);

            if (typeof s.getWidthFrom !== 'undefined') {
              s.stickyElement.css('width', $(s.getWidthFrom).width());
            }

            s.stickyElement.parent().addClass(s.className);
            s.currentTop = newTop;
          }
        }
      }
    },
    resizer = function() {
      windowHeight = $window.height();
    },
    methods = {
      init: function(options) {
        var o = $.extend(defaults, options);
        return this.each(function() {
          var stickyElement = $(this);

          var stickyId = stickyElement.attr('id');
          var wrapper = $('<div></div>')
            .attr('id', stickyId + '-sticky-wrapper')
            .addClass(o.wrapperClassName);
          stickyElement.wrapAll(wrapper);

          if (o.center) {
            stickyElement.parent().css({width:stickyElement.outerWidth(),marginLeft:"auto",marginRight:"auto"});
          }

          if (stickyElement.css("float") == "right") {
            stickyElement.css({"float":"none"}).parent().css({"float":"right"});
          }

          var stickyWrapper = stickyElement.parent();
          stickyWrapper.css('height', stickyElement.outerHeight());
          sticked.push({
            topSpacing: o.topSpacing,
            bottomSpacing: o.bottomSpacing,
            stickyElement: stickyElement,
            currentTop: null,
            stickyWrapper: stickyWrapper,
            className: o.className,
            getWidthFrom: o.getWidthFrom
          });
        });
      },
      update: scroller
    };

  // should be more efficient than using $window.scroll(scroller) and $window.resize(resizer):
  if (window.addEventListener) {
    window.addEventListener('scroll', scroller, false);
    window.addEventListener('resize', resizer, false);
  } else if (window.attachEvent) {
    window.attachEvent('onscroll', scroller);
    window.attachEvent('onresize', resizer);
  }

  $.fn.sticky = function(method) {
    if (methods[method]) {
      return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
    } else if (typeof method === 'object' || !method ) {
      return methods.init.apply( this, arguments );
    } else {
      $.error('Method ' + method + ' does not exist on jQuery.sticky');
    }
  };
  $(function() {
    setTimeout(scroller, 0);
  });
})(jQuery);

	</script>

	
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head() // For plugins ?>
	<!--<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />-->
<link rel="alternate" type="application/rss+xml" href="http://feeds.feedburner.com/DyingScene" title="Dying Scene's RSS Feed" />	
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
</head>

<body class="<?php sandbox_body_class() ?>" <?php if(is_page('2605')) { echo 'onload="toggleWhere();"';} ?> >

<?php if($_COOKIE['close'] != 'yes') {?>
	<div id="warning">
		<noscript>
		<div id="warningInner">
			<p>WARNING: You do not have JavaScript enabled!<br />This site makes use of new web technologies that require JavaScript to function correctly.<br />
			Please enable JavaScript before proceeding.</p>
		</div>
		</noscript>
	</div>
<?php } ?>
<div id="takeover" onclick="">
<div id="wrapperFade">
<div id="wrapper" class="hfeed">
	<div class="boxInner-noSides postAd">
		<?php  doubleclickAdTag('Leaderboard'); ?>
	</div>
	<div id="header">
		<a href="http://dyingscene.com" title="Dying Scene" id="dying-scene-logo"><span>Dying Scene</span></a>
		<div id="socialNetworking">
			
			<?php if ( is_user_logged_in() ) : ?>
				<a class="small-links" style="font-size:75%; width:50px;height:10px;background:transparent;padding-top:3px;padding-left:5px;color:#fff;" href="<?php bloginfo('url'); ?>/scenester-profile/">My&nbsp;Profile&nbsp;&nbsp;</a>
				<a href="<?php echo wp_logout_url('/'); ?>" title="Sign Out" style="font-size:75%; width:50px;height:10px;background:transparent;padding:8px;padding-top:3px;color:#fff;font-weight:normal;border-right:none;">Sign&nbsp;Out</a>
			<?php else : ?>
				<a href="<?php bloginfo('url'); ?>/wp-login.php" title="Sign In" style="width:40px;height:15px;background:transparent;padding:8px;padding-top:3px;padding-left:30px;color:#fff;text-decoration:none;">Sign&nbsp;In&nbsp;&nbsp;</a>
				<a href="<?php bloginfo('url'); ?>/wp-login.php?action=register" title="Sign Up" style="background:transparent;padding:8px;padding-top:3px;color:#fff;text-decoration:none; border-right:none;">Sign&nbsp;Up&nbsp;&nbsp;|</a>
			<?php endif; ?>
			<br />
			<div class="clear"></div>
			<a href="submit-news/" style="font-weight:bold; font-size:125%; width:165px; padding-top:5px;">SUBMIT A STORY</a>
			<?php if (current_user_can('edit_posts')){ ?>
				<br />
				<div class="clear"></div>
				<a id="adminlink" href="<?php bloginfo('url'); ?>/wp-admin/" title="My Profile">Admin Dashboard</a>
			<?php } ?>
		</div>
		
		
		<h2><?php bloginfo('description') ?></h2>
		<?php if(function_exists('mba_display_zone')) : ?>
			<?php mba_display_zone(6); ?>
		<?php endif; ?>		
	</div><!--  #header -->

	<!--  List Based Nav Bar -->
	<div id="NavWrap2">
		<ul id="list-nav">
			<li id="news_tab"><a href="<?php bloginfo('url'); ?>">News</a>
	        	<div class="sub_nav">
	        	<ul class="news_list list_1">
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?radar=true">My Radar</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=1">Celtic</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=24">Crust</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=22">Easycore</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=5">Emo</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=13">Female Fronted</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=9">Folk</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=26">Garagepunk</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=25">Gravelcore</a></li>
	            </ul>
	        	<ul class="news_list list_2">
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=4">Hardcore</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=27">Horror Punk</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=20">Melodic Hardcore</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=10">Metal</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=19">Metalcore</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=7">Oi!</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=8">Pop-Punk</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=18">Post-Hardcore</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=14">Progressive</a></li>
	            </ul>
	        	<ul class="news_list list_3">
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=11">Psychobilly</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=2">Punk</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=16">Rapcore</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=12">Rock</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=6">Screamo</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=3">Ska</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=21">Skate Punk</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=17">Solo Project</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=genre_search&genre=23">Street Punk</a></li>
	            </ul>
	            </div>
	        </li>
	    	<li><a href="<?php bloginfo('url'); ?>/dying-scene-album-reviews/">Reviews</a></li>
	    	<li><a href="<?php bloginfo('url'); ?>/album-release-schedule/">Releases</a></li>
	    	<li><a href="<?php bloginfo('url'); ?>/search-dying-scene/?type=news_search&news_type=26">Free Music</a></li>
	    	<li><a href="<?php bloginfo('url'); ?>/dying-scene-band-index/">Profiles</a>
	        	<ul>
	            	<li><a href="<?php bloginfo('url'); ?>/dying-scene-band-index/">Bands</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/dying-scene-label-index/">Labels</a></li>
	                <li><a href="<?php bloginfo('url'); ?>/dying-scenesters-chart/">Scenesters</a></li>
	            </ul>
	        </li>
	    	<li><a href="<?php bloginfo('url'); ?>/forums/">Forum</a></li>
	    	<li><a href="http://dyingscenerecords.bandcamp.com/">DS Records</a></li>
	    	<li><a href="http://dyingsceneradio.com/">DS Radio</a></li>
	    	
			<li id="search" class="widget widget_search" style="margin-left:120px;">				
				<form id="searchform" class="blog-search" method="get" action="<?php bloginfo('url'); ?>/search-dying-scene/">
					<div>
						<input id="s" name="search_term" type="text" class="text" value="" size="10" tabindex="1" />
						<input type="hidden" name="type" value="free_search" />
						<input type="submit" class="button" value=" " tabindex="2" />
					</div>
				</form>
			</li>
		</ul>
	</div>
	
	<div class="sideBar">
		<ul class="sidebar_list">
		  <li class="join"></li>
		  <li class="facebook"><a href="https://www.facebook.com/DyingSceneNews" target="_blank"></a></li>
		  <li class="twitter"><a href="https://twitter.com/DyingScene" target="_blank"></a></li>
		  <li class="instagram"><a href="https://instagram.com/dyingscene/" target="_blank"></a></li>
		  <li class="youtube"><a href="https://www.youtube.com/channel/UCb0-t6pfGv-etl3VGcpa94w" target="_blank"></a></li>
		  <li class="tumblr"><a href="http://dyingscene.tumblr.com/" target="_blank"></a></li>
		  <li class="rss"><a href="http://feeds.feedburner.com/DyingScene" target="_blank"></a></li>
		</ul>
	</div>
	

	<div id="mainContainer">
        
