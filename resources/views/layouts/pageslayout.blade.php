<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>Musyoka Photography</title>

        <!-- Fonts -->
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css">
        
        <link href="{{ asset('fa/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/icomoon.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
        {{-- <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css"> --}}
        {{-- <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css"> --}}
        <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/simpleLightbox.css') }}" rel="stylesheet" type="text/css">
		
       
       {{-- modernizer script --}}
       <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
        <!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{ asset('js/respond.min.js') }}"></script>
	<![endif]-->


        <!-- Styles -->
        <style>
          .media {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
      align-items: flex-start;
}
          .xwxyz{
            width: 100%;
          }

          .justify-content-between {
  -ms-flex-pack: justify !important;
      justify-content: space-between !important;
}
.d-flex {
  display: -ms-flexbox !important;
  display: flex !important;
}
			@media (min-width: 1620px) {
  .container.box_1620 {
    max-width: 1650px;
  }
}
.carousel-inner >.item >img{
    height: 304px;
    width: 100%

  } 

  .event-desc{
    height: 350px;
    overflow: hidden;
  }

============================================================================================ */
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Home Galllery Area css
============================================================================================ */
.home_gallery_area {
  background: #f9f9ff;
}

.home_gallery_area .button_more {
  text-align: center;
  margin-top: 80px;
}

.isotope_fillter {
  background: #ffffff;
  border: 1px solid #eeeeee;
  margin-bottom: 80px;
}

.isotope_fillter .gallery_filter {
  text-align: center;
}

.isotope_fillter .gallery_filter li {
  display: inline-block;
  border-left: 1px solid #eeeeee;
  margin-right: -4px;
}

.isotope_fillter .gallery_filter li a {
  font-size: 12px;
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  text-transform: uppercase;
  color: #222222;
  line-height: 48px;
  display: inline-block;
  padding: 0px 30px;
  margin: 0px;
}

.isotope_fillter .gallery_filter li:last-child {
  border-right: 1px solid #eeeeee;
  margin-right: 0px;
}

.isotope_fillter .gallery_filter li:hover a, .isotope_fillter .gallery_filter li.active a {
  background: #fcdc00;
  -webkit-box-shadow: 0px 10px 20px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 10px 20px 0px rgba(0, 0, 0, 0.1);
}

.gallery_f_inner {
  margin-bottom: -30px;
}

.h_gallery_item {
  position: relative;
  overflow: hidden;
  margin-bottom: 30px;
}

.h_gallery_item:before {
  content: "";
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0px;
  top: 0px;
  background: rgba(0, 0, 0, 0.5);
  opacity: 0;
  -webkit-transition: all 300ms ease;
  -o-transition: all 300ms ease;
  transition: all 300ms ease;
}

.h_gallery_item img {
  width: 100%;
}

.h_gallery_item .hover {
  position: absolute;
  bottom: 30px;
  left: 0px;
  width: 100%;
  text-align: center;
  -webkit-transition: all 300ms ease;
  -o-transition: all 300ms ease;
  transition: all 300ms ease;
}

.h_gallery_item .hover h4 {
  color: #fff;
  font-size: 18px;
  font-weight: 600;
  font-family: "Poppins", sans-serif;
}

.h_gallery_item .hover .light {
  color: #fff;
  font-size: 30px;
  opacity: 0;
  -webkit-transition: all 300ms ease;
  -o-transition: all 300ms ease;
  transition: all 300ms ease;
}

.h_gallery_item:hover:before {
  opacity: 1;
}

.h_gallery_item:hover .hover {
  bottom: 50%;
  -webkit-transform: translateY(50%);
  -ms-transform: translateY(50%);
  transform: translateY(50%);
}

.h_gallery_item:hover .hover .light {
  opacity: 1;
}
.h_gallery_item >img{
height:400px;
width: 100%;
}
.article-entry >.desc{
	height:400px;
	overflow: hidden;
}
       
	   /*================= latest_blog_area css =============*/
.latest_blog_area {
  background: #f9f9ff;
}

.single-recent-blog-post {
  margin-bottom: 30px;
}

.single-recent-blog-post .thumb {
  overflow: hidden;
}

.single-recent-blog-post .thumb img {
  -webkit-transition: all 0.7s linear;
  -o-transition: all 0.7s linear;
  transition: all 0.7s linear;
}

.single-recent-blog-post .details {
  padding-top: 30px;
}

.single-recent-blog-post .details .sec_h4 {
  line-height: 24px;
  padding: 10px 0px 13px;
  -webkit-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  transition: all 0.3s linear;
}

.single-recent-blog-post .details .sec_h4:hover {
  color: #777777;
}

.single-recent-blog-post .date {
  font-size: 14px;
  line-height: 24px;
  font-weight: 400;
}

.single-recent-blog-post:hover img {
  -webkit-transform: scale(1.23) rotate(10deg);
  -ms-transform: scale(1.23) rotate(10deg);
  transform: scale(1.23) rotate(10deg);
}

.tags .tag_btn {
  font-size: 12px;
  font-weight: 500;
  line-height: 20px;
  border: 1px solid #eeeeee;
  display: inline-block;
  padding: 1px 18px;
  text-align: center;
  color: #222222;
}

.tags .tag_btn:before {
  background: #fcdc00;
}

.tags .tag_btn + .tag_btn {
  margin-left: 2px;
}

/*========= blog_categorie_area css ===========*/
.blog_categorie_area {
  background: #f9f9ff;
  padding-top: 80px;
}

.categories_post {
  position: relative;
  text-align: center;
  cursor: pointer;
}

.categories_post img {
  max-width: 100%;
}

.categories_post .categories_details {
  position: absolute;
  top: 20px;
  left: 20px;
  right: 20px;
  bottom: 20px;
  background: rgba(34, 34, 34, 0.8);
  color: #fff;
  -webkit-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  transition: all 0.3s linear;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
}

.categories_post .categories_details h5 {
  margin-bottom: 0px;
  font-size: 18px;
  line-height: 26px;
  text-transform: uppercase;
  color: #fff;
  position: relative;
}

.categories_post .categories_details p {
  font-weight: 300;
  font-size: 14px;
  line-height: 26px;
  margin-bottom: 0px;
}

.categories_post .categories_details .border_line {
  margin: 10px 0px;
  background: #fff;
  width: 100%;
  height: 1px;
}

.categories_post:hover .categories_details {
  background: rgba(248, 182, 0, 0.85);
}

/*============ blog_left_sidebar css ==============*/
.blog_area {
  background: #f9f9ff;
  padding-top: 80px;
}

.blog_item {
  margin-bottom: 40px;
}

.blog_info {
  padding-top: 30px;
}

.blog_info .post_tag {
  padding-bottom: 20px;
}

.blog_info .post_tag a {
  font: 300 14px/21px "Poppins", sans-serif;
  color: #222222;
}

.blog_info .post_tag a:hover {
  color: #777777;
}

.blog_info .post_tag a.active {
  color: #fcdc00;
}

.blog_info .blog_meta li a {
  font: 300 14px/20px "Poppins", sans-serif;
  color: #777777;
  vertical-align: middle;
  padding-bottom: 12px;
  display: inline-block;
}

.blog_info .blog_meta li a i {
  color: #222222;
  font-size: 16px;
  font-weight: 600;
  padding-left: 15px;
  line-height: 20px;
  vertical-align: middle;
}

.blog_info .blog_meta li a:hover {
  color: #fcdc00;
}
.blog_info .blog_meta li {
  list-style-type: none;
}

.blog_post img {
  max-width: 100%;
}

.blog_details {
  padding-top: 20px;
}

.blog_details h2 {
  font-size: 24px;
  line-height: 36px;
  color: #222222;
  font-weight: 600;
  -webkit-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  transition: all 0.3s linear;
}

.blog_details h2:hover {
  color: #fcdc00;
}

.blog_details p {
  margin-bottom: 26px;
}

.view_btn {
  font-size: 14px;
  line-height: 36px;
  display: inline-block;
  color: #222222;
  font-weight: 500;
  padding: 0px 30px;
  background: #fff;
}

.blog_right_sidebar {
  border: 1px solid #eeeeee;
  padding: 30px;
}

.blog_right_sidebar .widget_title {
  font-size: 18px;
  line-height: 25px;
  background: #fcdc00;
  text-align: center;
  color: #fff;
  padding: 8px 0px;
  margin-bottom: 30px;
}

.blog_right_sidebar .search_widget .input-group .form-control {
  font-size: 14px;
  line-height: 29px;
  border: 0px;
  width: 100%;
  font-weight: 300;
  color: #fff;
  padding-left: 20px;
  border-radius: 45px;
  z-index: 0;
  background: #fcdc00;
}

.blog_right_sidebar .search_widget .input-group .form-control.placeholder {
  color: #fff;
}

.blog_right_sidebar .search_widget .input-group .form-control:-moz-placeholder {
  color: #fff;
}

.blog_right_sidebar .search_widget .input-group .form-control::-moz-placeholder {
  color: #fff;
}

.blog_right_sidebar .search_widget .input-group .form-control::-webkit-input-placeholder {
  color: #fff;
}

.blog_right_sidebar .search_widget .input-group .form-control:focus {
  -webkit-box-shadow: none;
  box-shadow: none;
}

.blog_right_sidebar .search_widget .input-group .btn-default {
  position: absolute;
  right: 20px;
  background: transparent;
  border: 0px;
  -webkit-box-shadow: none;
  box-shadow: none;
  font-size: 14px;
  color: #fff;
  padding: 0px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  z-index: 1;
}

.blog_right_sidebar .author_widget {
  text-align: center;
}

.blog_right_sidebar .author_widget h4 {
  font-size: 18px;
  line-height: 20px;
  color: #222222;
  margin-bottom: 5px;
  margin-top: 30px;
}

.blog_right_sidebar .author_widget p {
  margin-bottom: 0px;
}

.blog_right_sidebar .author_widget .social_icon {
  padding: 7px 0px 15px;
}

.blog_right_sidebar .author_widget .social_icon a {
  font-size: 14px;
  color: #222222;
  -webkit-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.blog_right_sidebar .author_widget .social_icon a + a {
  margin-left: 20px;
}

.blog_right_sidebar .author_widget .social_icon a:hover {
  color: #fcdc00;
}

.blog_right_sidebar .popular_post_widget .post_item .media-body {
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -ms-flex-item-align: center;
  align-self: center;
  padding-left: 20px;
}

.blog_right_sidebar .popular_post_widget .post_item .media-body h3 {
  font-size: 14px;
  line-height: 20px;
  color: #222222;
  margin-bottom: 4px;
  -webkit-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  transition: all 0.3s linear;
}

.blog_right_sidebar .popular_post_widget .post_item .media-body h3:hover {
  color: #fcdc00;
}

.blog_right_sidebar .popular_post_widget .post_item .media-body p {
  font-size: 12px;
  line-height: 21px;
  margin-bottom: 0px;
}

.blog_right_sidebar .popular_post_widget .post_item + .post_item {
  margin-top: 20px;
}

.blog_right_sidebar .post_category_widget .cat-list li {
  border-bottom: 2px dotted #eee;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  padding-bottom: 12px;
}

.blog_right_sidebar .post_category_widget .cat-list li a {
  font-size: 14px;
  line-height: 20px;
  color: #777;
}

.blog_right_sidebar .post_category_widget .cat-list li a p {
  margin-bottom: 0px;
}

.blog_right_sidebar .post_category_widget .cat-list li + li {
  padding-top: 15px;
}

.blog_right_sidebar .post_category_widget .cat-list li:hover {
  border-color: #fcdc00;
}

.blog_right_sidebar .post_category_widget .cat-list li:hover a {
  color: #fcdc00;
}

.blog_right_sidebar .newsletter_widget {
  text-align: center;
}

.blog_right_sidebar .newsletter_widget .form-group {
  margin-bottom: 8px;
}

.blog_right_sidebar .newsletter_widget .input-group-prepend {
  margin-right: -1px;
}

.blog_right_sidebar .newsletter_widget .input-group-text {
  background: #fff;
  border-radius: 0px;
  vertical-align: top;
  font-size: 12px;
  line-height: 36px;
  padding: 0px 0px 0px 15px;
  border: 1px solid #eeeeee;
  border-right: 0px;
}

.blog_right_sidebar .newsletter_widget .form-control {
  font-size: 12px;
  line-height: 24px;
  color: #cccccc;
  border: 1px solid #eeeeee;
  border-left: 0px;
  border-radius: 0px;
}

.blog_right_sidebar .newsletter_widget .form-control.placeholder {
  color: #cccccc;
}

.blog_right_sidebar .newsletter_widget .form-control:-moz-placeholder {
  color: #cccccc;
}

.blog_right_sidebar .newsletter_widget .form-control::-moz-placeholder {
  color: #cccccc;
}

.blog_right_sidebar .newsletter_widget .form-control::-webkit-input-placeholder {
  color: #cccccc;
}

.blog_right_sidebar .newsletter_widget .form-control:focus {
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.blog_right_sidebar .newsletter_widget .bbtns {
  background: #fcdc00;
  color: #fff;
  font-size: 12px;
  line-height: 38px;
  display: inline-block;
  font-weight: 500;
  padding: 0px 24px 0px 24px;
  border-radius: 0;
}

.blog_right_sidebar .newsletter_widget .text-bottom {
  font-size: 12px;
}

.blog_right_sidebar .tag_cloud_widget ul li {
  display: inline-block;
}

.blog_right_sidebar .tag_cloud_widget ul li a {
  display: inline-block;
  border: 1px solid #eee;
  background: #fff;
  padding: 0px 13px;
  margin-bottom: 8px;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  color: #222222;
  font-size: 12px;
}

.blog_right_sidebar .tag_cloud_widget ul li a:hover {
  background: #fcdc00;
  color: #fff;
}

.blog_right_sidebar .br {
  width: 100%;
  height: 1px;
  background: #eeeeee;
  margin: 30px 0px;
}

.blog-pagination {
  padding-top: 25px;
  padding-bottom: 95px;
}

.blog-pagination .page-link {
  border-radius: 0;
}

.blog-pagination .page-item {
  border: none;
}

.page-link {
  background: transparent;
  font-weight: 400;
}

.blog-pagination .page-item.active .page-link {
  background-color: #fcdc00;
  border-color: transparent;
  color: #fff;
}

.blog-pagination .page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #8a8a8a;
  border: none;
}

.blog-pagination .page-link .lnr {
  font-weight: 600;
}

.blog-pagination .page-item:last-child .page-link,
.blog-pagination .page-item:first-child .page-link {
  border-radius: 0;
}

.blog-pagination .page-link:hover {
  color: #fff;
  text-decoration: none;
  background-color: #fcdc00;
  border-color: #eee;
}

/*============ Start Blog Single Styles  =============*/
.single-post-area {
  padding-top: 80px;
  padding-bottom: 80px;
}

.single-post-area .social-links {
  padding-top: 10px;
}

.single-post-area .social-links li {
  display: inline-block;
  margin-bottom: 10px;
}

.single-post-area .social-links li a {
  color: #cccccc;
  padding: 7px;
  font-size: 14px;
  -webkit-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.single-post-area .social-links li a:hover {
  color: #222222;
}

.single-post-area .blog_details {
  padding-top: 26px;
}

.single-post-area .blog_details p {
  margin-bottom: 10px;
}

.single-post-area .quotes {
  margin-top: 20px;
  margin-bottom: 30px;
  padding: 24px 35px 24px 30px;
  background-color: white;
  -webkit-box-shadow: -20.84px 21.58px 30px 0px rgba(176, 176, 176, 0.1);
  box-shadow: -20.84px 21.58px 30px 0px rgba(176, 176, 176, 0.1);
  font-size: 14px;
  line-height: 24px;
  color: #777;
  font-style: italic;
}

.single-post-area .arrow {
  position: absolute;
}

.single-post-area .arrow .lnr {
  font-size: 20px;
  font-weight: 600;
}

.single-post-area .thumb .overlay-bg {
  background: rgba(0, 0, 0, 0.8);
}

.single-post-area .navigation-area {
  border-top: 1px solid #eee;
  padding-top: 30px;
  margin-top: 60px;
}

.single-post-area .navigation-area p {
  margin-bottom: 0px;
}

.single-post-area .navigation-area h4 {
  font-size: 18px;
  line-height: 25px;
  color: #222222;
  font-weight: 600;
}

.single-post-area .navigation-area .nav-left {
  text-align: left;
}

.single-post-area .navigation-area .nav-left .thumb {
  margin-right: 20px;
  background: #000;
}

.single-post-area .navigation-area .nav-left .thumb img {
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.single-post-area .navigation-area .nav-left .lnr {
  margin-left: 20px;
  opacity: 0;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.single-post-area .navigation-area .nav-left:hover .lnr {
  opacity: 1;
}

.single-post-area .navigation-area .nav-left:hover .thumb img {
  opacity: .5;
}

@media (max-width: 767px) {
  .single-post-area .navigation-area .nav-left {
    margin-bottom: 30px;
  }
}

.single-post-area .navigation-area .nav-right {
  text-align: right;
}

.single-post-area .navigation-area .nav-right .thumb {
  margin-left: 20px;
  background: #000;
}

.single-post-area .navigation-area .nav-right .thumb img {
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.single-post-area .navigation-area .nav-right .lnr {
  margin-right: 20px;
  opacity: 0;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.single-post-area .navigation-area .nav-right:hover .lnr {
  opacity: 1;
}

.single-post-area .navigation-area .nav-right:hover .thumb img {
  opacity: .5;
}

@media (max-width: 991px) {
  .single-post-area .sidebar-widgets {
    padding-bottom: 0px;
  }
}

.comments-area {
  background: #fafaff;
  border: 1px solid #eee;
  padding: 50px 30px;
  margin-top: 50px;
}

@media (max-width: 414px) {
  .comments-area {
    padding: 50px 8px;
  }
}

.comments-area h4 {
  text-align: center;
  margin-bottom: 50px;
  color: #222222;
  font-size: 18px;
}

.comments-area h5 {
  font-size: 16px;
  font-weight: 400;
  margin-bottom: 0px;
}

.comments-area a {
  color: #222222;
}

.comments-area .comment-list {
  padding-bottom: 48px;
}

.comments-area .comment-list:last-child {
  padding-bottom: 0px;
}

.comments-area .comment-list.left-padding {
  padding-left: 25px;
}

@media (max-width: 413px) {
  .comments-area .comment-list .single-comment h5 {
    font-size: 12px;
  }
  .comments-area .comment-list .single-comment .date {
    font-size: 11px;
  }
  .comments-area .comment-list .single-comment .comment {
    font-size: 10px;
  }
}

.comments-area .thumb {
  margin-right: 20px;
}

.comments-area .date {
  font-size: 13px;
  color: #cccccc;
  margin-bottom: 13px;
}

.comments-area .comment {
  color: #777777;
  margin-bottom: 0px;
}

.comments-area .btn-reply {
  background-color: #fff;
  color: #222222;
  border: 1px solid #eee;
  padding: 2px 18px;
  font-size: 12px;
  display: block;
  font-weight: 600;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.comments-area .btn-reply:hover {
  background-color: #fcdc00;
  color: #fff;
}

.comment-form {
  background: #fafaff;
  text-align: center;
  border: 1px solid #eee;
  padding: 47px 30px 43px;
  margin-top: 50px;
  margin-bottom: 40px;
}

.comment-form h4 {
  text-align: center;
  margin-bottom: 50px;
  font-size: 18px;
  line-height: 22px;
  color: #222222;
}

.comment-form .name {
  padding-left: 0px;
}

@media (max-width: 767px) {
  .comment-form .name {
    padding-right: 0px;
    margin-bottom: 1rem;
  }
}

.comment-form .email {
  padding-right: 0px;
}

@media (max-width: 991px) {
  .comment-form .email {
    padding-left: 0px;
  }
}

.comment-form .form-control {
  padding: 8px 20px;
  background: #fff;
  border: none;
  border-radius: 0px;
  width: 100%;
  font-size: 14px;
  color: #777777;
  border: 1px solid transparent;
}

.comment-form .form-control:focus {
  -webkit-box-shadow: none;
  box-shadow: none;
  border: 1px solid #eee;
}

.comment-form textarea.form-control {
  height: 140px;
  resize: none;
}

.comment-form ::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  font-size: 13px;
  color: #777;
}

.comment-form ::-moz-placeholder {
  /* Firefox 19+ */
  font-size: 13px;
  color: #777;
}

.comment-form :-ms-input-placeholder {
  /* IE 10+ */
  font-size: 13px;
  color: #777;
}

.comment-form :-moz-placeholder {
  /* Firefox 18- */
  font-size: 13px;
  color: #777;
}

.comment-form .primary-btn {
  border-radius: 0px !important;
  border: 1px solid transparent;
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  background: #f8b600;
  display: inline-block;
  padding: 7px 44px;
  -webkit-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.comment-form .primary-btn:before {
  background: #fcdc00;
}

.comment-form .primary-btn:hover {
  border-color: #fcdc00 !important;
  color: #fff  !important;
}

/*============ End Blog Single Styles  =============*/
/* Service Area css
============================================================================================ */
.service_inner {
  margin-bottom: -30px;
}

.service_item {
  text-align: center;
  border: 1px solid #eeeeee;
  padding: 40px;
  margin-bottom: 30px;
  -webkit-transition: all 300ms ease;
  -o-transition: all 300ms ease;
  transition: all 300ms ease;
}

.service_item i {
  color: #222222;
  font-size: 42px;
  margin-bottom: 30px;
  display: block;
}

.service_item h4 {
  color: #222222;
  font-size: 18px;
  font-family: "Poppins", sans-serif;
  margin-bottom: 20px;
}

.service_item p {
  margin-bottom: 0px;
  color: #777777;
  font-size: 14px;
  line-height: 24px;
}

.service_item:hover {
  background: #fcdc00;
}

.service_item:hover p {
  color: #222222;
}

/* End Service Area css
============================================================================================ */
/* testimonial styling */

#testimonial {
 width: 100%;
 background: url("{{asset('storage/app_images/testimonial-bg.jpg')}}");
 background-size: cover;
 position: relative;
}
#testimonial:before {
 position: absolute;
 content: " ";
 top: 0;
 bottom: 0;
 width: 100%;
 height: 100%;
}
#testimonial .img-member {
 height: 90px;
 border-radius: 100%;
 margin-top: 22px;
 overflow: hidden;
 width: 90px;
}
#testimonial .client-info {
 color: #fff;
 line-height: 20px;
 margin: 20px auto;
}
#testimonial .client-info .client-name {
 font-size: 20px;
 line-height: 44px;
 text-transform: uppercase;
}
#testimonial .client-info .client-name span {
 font-size: 13px;
 font-weight: 400;
 color: #fff;
 text-transform: none;
 font-style: italic;
}
#testimonial p {
 margin: 20px;
 text-align: center;
 font-size: 14px;
 letter-spacing: 0.9px;
 color: #fff;
 font-style: italic;
 position: relative;
}
#testimonial p .quote-left {
 font-size: 32px;
 margin-right: 36px;
}
#testimonial p .quote-right {
 font-size: 32px;
 margin-left: 36px;
}
#testimonial .owl-theme .owl-controls .owl-buttons div {
 border-radius: 50%;
 font-size: 30px;
 margin: 20px 10px 0;
 padding: 0 12px;
}
.touch-slider .owl-controls .owl-buttons {
 position: relative;
 top: -190px;
 left: 0;
}
.touch-slider .owl-controls .owl-buttons div.owl-prev {
 float: left;
 margin-left: -45px;
}
.touch-slider .owl-controls .owl-buttons div.owl-next {
 float: right !important;
 margin-right: -45px;
}
.owl-theme .owl-controls .owl-buttons div {
 width: 40px;
 height: 40px;
 line-height: 30px;
 display: block !important;
 background: #3c8dbc !important;
 text-align: center;
 display: inline-block;
 opacity: 1!important;
 border-radius: 50px!important;
 box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.18), 0 2px 5px 0 rgba(0, 0, 0, 0.15);
 transition: all 0.4s ease-in-out;
 -moz-transition: all 0.4s ease-in-out;
 -webkit-transition: all 0.4s ease-in-out;
 -o-transition: all 0.4s ease-in-out;
}
.owl-theme .owl-controls .owl-buttons div:hover {
 box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
 opacity: 0.8!important;
}
.owl-theme .owl-controls .owl-buttons div i {
 color: #fff;
 font-size: 14px;
 line-height: 40px;
}
/* end testimonial styling */
        </style>
    </head>
    <body>
      
        @include('pages.flashmessage')
        	
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-md-push-5 text-center">
							<div id="colorlib-logo"><a href="/"><i class="icon-camera4"></i>Musyoka</a></div>
						</div>
						<div class="col-md-5 col-md-pull-2 text-right menu-1">
							<ul>
								<li class=""><a href="/">Home</a></li>
								<li><a href="/gallery">Gallery</a></li>
                                <li><a href="/services">Services</a></li>
                                <li><a href="javascript:void(0)" data-toggle="modal" data-target="#modal-danger">Reservation</a></li>
							</ul>
						</div>
						<div class="col-md-5 text-left menu-1">
							<ul>
								<li><a href="/blog">Blog</a></li>
								<li><a href="/about">About</a></li>
                                <li><a href="/contact">Contact</a></li>
                                <li class="has-dropdown"><a href="#"><i class="fa fa-user"></i>&nbsp; 
                                    @if(Auth::guest())
                                    Account
                                    @else
                                    {{auth()->user()->name}}
                                    @endif
                                </a>
                                    <ul class="dropdown">
                                            @if (Auth::guest())
                                            <li><a href="{{ route('register') }}"><i class="fa fa-sign-in"></i>&nbsp; Register</a></li>
                                            <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i>&nbsp; Login</a></li>
                                            @elseif(auth()->user()->role == 'admin')
                                            <li><a href="/home"><i class="fa fa-dashboard"></i>&nbsp; dashboard</a></li>
                                            <li><a href="/home"><i class="fa fa-heart"></i>&nbsp; Favourites</a></li>
                                            <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i>&nbsp; logout
                                                </a>
                                               
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                </form>
                                                 
											</li>
										@else
										<li><a href="/home"><i class="fa fa-heart"></i>&nbsp; Favourites</a></li>
                                            <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i>&nbsp; logout
                                                </a>
                                               
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                </form>
                                                 
											</li>

                                            @endif
                                            
                                        </ul>
                                
                                </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
    </nav>
    {{-- modal starts here --}}
    <div class="modal modal-success fade in" id="modal-danger" style="display: none; padding-right: 15px;">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Book a session </h4>
            </div>
            <div class="modal-body">
              <form id="reserve" name="reserve" action="/reserve" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label">Full Names</label>
                    <input class="form-control" name="name" type="text" required>
                </div>
                <div class="form-group">
                    <label class="control-label">email </label>
                    <input class="form-control" type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label class="control-label">Phone </label>
                    <input class="form-control" type="tel" name="phone" placeholder="07123..." required>
                </div>
                <div class="form-group">
                    <label class="control-label">Event </label>
                    <input class="form-control" type="text" name="event" placeholder="e.g wedding" required>
                </div>
                <div class="form-group">
                    <label class="control-label">Date </label>
                    <input class="form-control" type="date" name="date" required>
                </div>
                <div class="form-group">
                    <label class="control-label">Details </label>
                    <textarea class="form-control" rows="5" name="details" required></textarea>
                </div>
            </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
              <button type="button" onclick="document.reserve.submit()" class="btn btn-outline">Submit</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    {{-- modal ends here --}}

		<section id="home" class="video-hero" style="height: 800px; background-image: url(/storage/app_images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>
			<a class="player" data-property="{videoURL:'storage/app_videos/sample.mp4',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a> 
			<div class="display-t text-center">
				<div class="display-tc">
					<div class="container">
						<div class="col-md-10 col-md-offset-1">
							@yield('top-content')
						</div>
					</div>
				</div>
			</div>
        </section>





        
     {{-- content yield starts here --}}

<div class="container-fluid">
    
        @yield('content')
</div>



		
{{-- content yield ends here --}}
		

{{-- footer notes start here --}}
		<div id="colorlib-instagram">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 colorlib-heading text-center animate-box">
					<h1><i class="icon-instagram"></i> Instagram</h1>
				</div>
			</div>
			<div class="row" id="pic">
      <instagram></instagram>
				
			</div>
		</div>
		<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About Musyoka</h4>
						<p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> Home</a></li>
								<li><a href="#"><i class="icon-check"></i> Gallery</a></li>
								<li><a href="#"><i class="icon-check"></i> About</a></li>
								<li><a href="#"><i class="icon-check"></i> Blog</a></li>
								<li><a href="#"><i class="icon-check"></i> Contact</a></li>
								<li><a href="#"><i class="icon-check"></i> Privacy</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 colorlib-widget" id="bilog">
						<h4>Recent Blog</h4>
						<sblog></sblog>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920"><i class="icon-phone"></i> + 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@yoursite.com</a></li>
							<li><a href="#"><i class="icon-location4"></i> yourwebsite.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								<small class="block">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="/"> Musyoka Photography</a>

							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
    
    {{-- java script components --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>

    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/magnific-popup-options.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('js/simpleLightbox.min.js') }}"></script>
	
	<script>
  
	$('.imageGallery1 .light').simpleLightbox();

  /* ==========================================================================
   Touch Owl Carousel
   ========================================================================== */
$(".touch-slider").owlCarousel({
    navigation: true,
    pagination: false,
    slideSpeed: 1000,
    stopOnHover: true,
    autoPlay: true,
    items: 1,
    itemsDesktopSmall: [1024, 1],
    itemsTablet: [600, 1],
    itemsMobile: [479, 1]
});

$('.touch-slider').find('.owl-prev').html('<i class="fa fa-chevron-left"></i>');
$('.touch-slider').find('.owl-next').html('<i class="fa fa-chevron-right"></i>');

$('#new-products').find('.owl-prev').html('<i class="fa fa-angle-left"></i>');
$('#new-products').find('.owl-next').html('<i class="fa fa-angle-right"></i>');

var owl;

$(document).ready(function () {

    owl = $("#owl-demo");

    owl.owlCarousel({

        navigation: false, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        afterInit: afterOWLinit, // do some work after OWL init
        afterUpdate : afterOWLinit
    });

    function afterOWLinit() {
        // adding A to div.owl-page
        $('.owl-controls .owl-page').append('<a class="item-link" />');
        var pafinatorsLink = $('.owl-controls .item-link');
        /**
         * this.owl.userItems - it's your HTML <div class="item"><img src="http://www.ow...t of us"></div>
         */
        $.each(this.owl.userItems, function (i) {

            $(pafinatorsLink[i])
                // i - counter
                // Give some styles and set background image for pagination item
                .css({
                    'background': 'url(' + $(this).find('img').attr('src') + ') center center no-repeat',
                    '-webkit-background-size': 'cover',
                    '-moz-background-size': 'cover',
                    '-o-background-size': 'cover',
                    'background-size': 'cover'
                })
                // set Custom Event for pagination item
                .click(function () {
                    owl.trigger('owl.goTo', i);
                });

        });
         // add Custom PREV NEXT controls
        $('.owl-pagination').prepend('<a href="#prev" class="prev-owl"/>');
        $('.owl-pagination').append('<a href="#next" class="next-owl"/>');
        // set Custom event for NEXT custom control
        $(".next-owl").click(function () {
            owl.trigger('owl.next');
        });
        // set Custom event for PREV custom control
        $(".prev-owl").click(function () {
            owl.trigger('owl.prev');
        });
    }
});

//testimonial Slider
  $('#testimonial-carousel').owlCarousel({
      navigation: false,
      pagination: true,
      slideSpeed: 1000,
      autoPlay: false,
      singleItem: true,
      pagination : false,
      items : 1,
      itemsDesktop : [1199,4],
      itemsDesktopSmall : [980,3],
      itemsTablet: [768,2],
      itemsTabletSmall: false,
      itemsMobile : [479,1],
  });


/* Owl Carousel
========================================================*/
$('#clients-scroller').owlCarousel({
    navigation: false,
    pagination: false,
    items:6,
    itemsTablet:3,
    stagePadding:90,
    smartSpeed:450,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,3],
    itemsTablet: [767,2],
    itemsTabletSmall: [480,2],
    itemsMobile : [479,1],
});
	</script>

    
    
        </body>
    </html>
