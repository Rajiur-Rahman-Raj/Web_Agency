<style>

@charset "utf-8";

@import url("https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900");
/**
*** Table Of Contents
**/
/*
** Template colors
*

Accent Colors:
1: #ff497c
2: #a0ce4e
3: #00bea3
4: #f1894c

Light section (.ls) colors:
Text color in light section: #808080
Background color for light section and font color in dark section: #ffffff
Color for headings in light section and for background in dark section (.ds): #323232
Background color for light muted section (grey - .ls.ms): #f2f2f2
Background color for dark muted section (.ds.ms): #252525
Border colors for elements in light section (and .bordered elements): #e1e1e1, rgba(0, 0, 0, 0.1)
Background color for elements in light section (.hero-bg): #f5f5f5

Dark section (.ds) colors:
Text color in dark section: #9a9a9a
Border colors for elements in dark section: #454545
Background color for elements in dark section (.hero-bg): rgba(255, 255, 255, 0.05)

Color section (.cs) colors:
Background color for elements in color section: rgba(255, 255, 255, 0.1)
Border color for elements in color section: rgba(255, 255, 255, 0.15)


1. Common tags styles
2. Styled lists
3. Overrides for default Bootstrap components
4. jQuery plugins styles
  - owl
  - flexslider
  - photoswipe
  - piechart
  - timetable
  - totop
  - countdown
5. Bootstrap Addons helpers styles for sections and elements
  - horizontal
  - vertical
  - sections
  - media_items
  - buttons
6. Light background sections (.ls) styles
7. Dark background sections (.ds) styles
8. Color background sections (.cs) styles
9. Bootstrap Addons utility styles
  - layout
  - colors
  - spacing
10. Shortcodes styles
  - icon-box
  - special-heading
  - number-card
  - price_table
  - quote-item
  - items-masonry
11. Widgets styles
  - search_mailchimp
  - nav_cat_arch_meta_pages
  - calendar
  - rss
  - tag_cloud
  - flickr
  - instagram
  - access_press
  - twitter
  - post_slider
  - post_tabs
  - post_2cols
12. Social icons styles
13. WordPress styles
14. Menu styles
15. Header styles
16. Side header styles
17. Intro section styles
18. Common sub-pages styles
19. Template specific sections styles
*/
/*
** General Styles for HTML tags
*/

/* define custom css variables generate raju */
:root {
	--bg-black-900: #000000;
	--bg-black-100: #dddddd;
	--bg-black-50: #eff0f4;
	--theme-color: {{ colorSettings()->theme_color }} ;
	--theme-header-bg: {{ colorSettings()->theme_header_background }};
	--theme-footer-bg: {{ colorSettings()->theme_footer_background }};
	--theme-menu-text-color: {{ colorSettings()->theme_menu_text_color }};
	--nav-color-1: #101820;
	--bg-opacity: rgba(225,225,225,0.5);
	--text-black-900: #000000;
	--text-black-700: #555555;
	--text-black-600: #666666;
	--text-black-300: #bbbbbb;
	--nav-text: #000000;
	--outer-shadow: 3px 3px 3px #d0d0d0, -3px -3px 3px #f8f8f8;
	--outer-shadow-0: 0 0 0 #d0d0d0, 0 0 0 #f8f8f8;
	--inner-shadow: inset 3px 3px 3px #d0d0d0, inset -3px -3px 3px #f8f8f8;
	--inner-shadow-0: inset 0 0 0 #d0d0d0, inset 0 0 0 #f8f8f8; }



html {
	height: 100%;
	overflow: visible;
	position: relative;
	width: 100%;
}

::-moz-selection {
	background-color: #ff497c;
	color: #fff;
}

::selection {
	background-color: #ff497c;
	color: #fff;
}

::-moz-selection {
	background-color: #ff497c;
	color: #fff;
}

body {
	background-color: #fff;
	font-family: "Poppins", sans-serif;
	font-size: 16px;
	font-weight: 300;
	line-height: 30px;
	overflow: visible;
	overflow-x: hidden;
	overflow-y: scroll;
	position: relative;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	font-weight: 500;
	line-height: 30px;
	margin-bottom: 15px;
	margin-top: 5px;
}

h1 {
	font-size: 56px;
	line-height: 50px;
}

h2 {
	font-size: 48px;
}

h3 {
	font-size: 42px;
}

h4 {
	font-size: 36px;
}

h5 {
	font-size: 30px;
}

h6 {
	font-size: 24px;
	font-weight: 500;
}

@media (max-width: 991px) {
	h6 {
		font-size: 20px;
	}
}

@media (max-width: 767px) {
	h1 {
		font-size: 1.8rem;
	}

	h2 {
		font-size: 1.6rem;
	}

	h3 {
		font-size: 1.4rem;
	}

	h4 {
		font-size: 1.3rem;
	}

	h5 {
		font-size: 1.2rem;
	}

	h6 {
		font-size: 1.1rem;
	}
}

h1:first-child,
h2:first-child,
h3:first-child,
h4:first-child,
h5:first-child,
h6:first-child {
	margin-top: 0;
}

h1:last-child,
h2:last-child,
h3:last-child,
h4:last-child,
h5:last-child,
h6:last-child {
	margin-bottom: 0;
}

p {
	margin-bottom: 10px;
}

ul:last-child,
ol:last-child,
p:last-child {
	margin-bottom: 0;
}

p:last-child:after {
	clear: both;
	content: "";
	display: block;
}

img,
figure {
	height: auto;
	max-width: 100%;
}

figcaption {
	font-size: 0.95em;
	line-height: 1.4;
	padding: 10px 0 7px;
}

figcaption p {
	margin-bottom: 0;
}

b,
strong {
	font-weight: 600;
}

label {
	color: #323232;
}

a {
	color: #323232;
	text-decoration: none;
	-webkit-transition: all 0.2s ease-in-out 0s;
	transition: all 0.2s ease-in-out 0s;
}

a:hover {
	color: #ff497c;
	text-decoration: none;
	-webkit-transition: all 0.15s linear 0s;
	transition: all 0.15s linear 0s;
}

blockquote {
	border-left: 4px solid #ff497c;
	color: #1f2732;
	font-size: 20px;
	font-style: italic;
	margin: 30px 0 53px;
	padding: .4em 0 .4em 1.8em;
}

blockquote .media {
	margin: 15px 0;
}

blockquote .media img {
	border-radius: 50%;
	max-width: 60px;
}

blockquote h3,
blockquote h4,
blockquote .text-small {
	font-style: normal;
}

input:focus,
button:focus,
select:focus,
textarea:focus,
a:focus {
	outline: medium none;
	text-decoration: none;
}

a > img {
	-webkit-transition: all 0.15s ease-in-out 0s;
	transition: all 0.15s ease-in-out 0s;
}

a:hover > img {
	opacity: 0.8;
}

a.btn:active,
a.button:active,
button:active,
input[type="submit"]:active {
	position: relative;
	top: 1px !important;
}

hr {
	border-color: #e1e1e1;
	margin-bottom: 30px;
	margin-left: 0;
	margin-right: 0;
	margin-top: 30px;
}

iframe {
	border: none;
	max-width: 100%;
}

table {
	margin: 10px 0;
	max-width: 100%;
	width: 100%;
}

table td,
table th {
	line-height: 1.6;
	padding: 13px 8px;
	vertical-align: top;
}

table th {
	color: #323232;
	font-weight: normal;
	vertical-align: middle;
}

canvas {
	-moz-user-select: none;
	-webkit-user-select: none;
	-ms-user-select: none;
}

pre {
	background-color: rgba(150, 150, 150, 0.05);
	line-height: 1.5;
	padding: 0.5em 1em;
}

.big {
	font-size: 20px;
	line-height: 30px;
	margin: 1.4em 0 1.3em;
}

.big em {
	display: inline-block;
	margin: 1em 0 0.5em;
}

.media h3 {
	text-transform: uppercase;
}

.media .dropcap {
	margin-right: 0;
}

.small-text {
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	line-height: 1.6em;
	text-transform: uppercase;
}

@media (min-width: 768px) {
	.small-text.extra-letter-spacing {
		letter-spacing: 1em;
	}
}

ul,
ol {
	padding-left: 1.15rem;
}

dt {
	font-weight: 700;
}

dd {
	margin: 0 1.5em 1.5em;
}

.list-bordered {
	list-style: none;
	overflow: hidden;
	padding: 0;
}

.list-bordered li {
	border-bottom: 1px solid #e1e1e1;
	border-top: 1px solid #e1e1e1;
	padding-bottom: 15px;
	padding-top: 14px;
}

.list-bordered li + li {
	border-top: none;
}

.list-bordered.no-top-border > li:first-child {
	border-top: none;
}

.list-bordered.no-bottom-border > li:last-child {
	border-bottom: none;
}

ul.list {
	padding-right: 2rem;
}

ul.list .list-styled ul,
ul.list ul.list-styled {
	color: #323232;
	list-style: none;
	padding: 0;
}

ul.list .list-styled ul li,
ul.list ul.list-styled li {
	padding-left: 20px;
	position: relative;
}

ul.list .list-styled ul li:before,
ul.list ul.list-styled li:before {
	color: #ff497c;
	content: "\f054";
	font-family: "FontAwesome";
	font-size: 10px;
	padding-right: 15px;
	position: relative;
	top: -2px;
}

.list li {
	border-bottom: 1px solid #e1e1e1;
	border-top: 1px solid #e1e1e1;
	list-style: none;
	padding-bottom: 15px;
	padding-top: 14px;
}

.list li :before {
	color: #ff497c;
	content: "\f111";
	font-family: "FontAwesome";
	font-size: 5px;
	padding-right: 15px;
	position: relative;
	top: -2px;
}

.list li + li {
	border-top: none;
}

.list.no-top-border > li:first-child {
	border-top: none;
}

.list.no-bottom-border > li:last-child {
	border-bottom: none;
}

.list1 li {
	color: #1f2732;
	font-weight: 400;
	list-style: none;
	padding: 5px 0 5px 5px;
}

.list1 li:before {
	color: #ff497c;
	content: "\f111";
	font-family: "FontAwesome";
	font-size: 5px;
	padding-right: 15px;
	position: relative;
	top: -2px;
}

ul.list1 {
	padding-left: 0;
}

ol.list3 {
	counter-reset: li;
	list-style: none outside none;
	padding: 0;
}

ol.list3 li {
	color: #1f2732;
	padding: 4px 0 4px 38px;
	position: relative;
}

ol.list3 li:after {
	color: #ff497c;
	content: counter(li, decimal-leading-zero);
	counter-increment: li;
	font-weight: 500;
	left: 2px;
	line-height: 30px;
	margin-top: -15px;
	position: absolute;
	text-align: center;
	top: 50%;
}

.wrap ol {
	-webkit-column-count: 2;
	-moz-column-count: 2;
	column-count: 2;
}

@media (max-width: 767px) {
	.wrap ol {
		-webkit-column-count: 1;
		-moz-column-count: 1;
		column-count: 1;
	}
}

/*
** Bootstrap Overrides
*/
/* bootstrap breadcrumbs*/
.breadcrumb {
	background-color: transparent;
	border-radius: 0;
	color: inherit;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	margin: 0;
	padding: 0;
	text-transform: uppercase;
}

.breadcrumb > li {
	display: inline-block;
	float: none;
	padding: 0;
}

.text-center .breadcrumb {
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
}

@media (min-width: 992px) {
	.text-lg-right .breadcrumb {
		-webkit-box-pack: end;
		-ms-flex-pack: end;
		justify-content: flex-end;
	}
}

.breadcrumb > .active {
	color: inherit;
	opacity: 0.9;
}

.breadcrumb-item + .breadcrumb-item::before {
	color: inherit;
	padding: 0 11px;
}

.layout-2 .breadcrumb {
	-webkit-box-pack: end;
	-ms-flex-pack: end;
	justify-content: end;
}

@media (max-width: 992px) {
	.layout-2 .breadcrumb {
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		justify-content: center;
	}
}

.layout-2 .breadcrumb .breadcrumb-item + .breadcrumb-item::before {
	color: #1f2732;
	content: "\f054";
	font-family: FontAwesome;
	font-size: 7px;
	padding: 0 7px;
	position: relative;
	top: -1px;
}

.layout-2 .widget_search form {
	float: right;
	margin: 0;
}

@media (max-width: 992px) {
	.layout-2 .widget_search form {
		float: none;
		margin: 15px auto 0;
	}
}

.layout-2 .widget_search form .form-control {
	text-align: left;
}

/* forms */
input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
input[type="tel"],
input[type="number"],
textarea,
select,
.form-control {
	background-color: #f4f4f5;
	border: 1px solid transparent;
	border-radius: 0;
	box-shadow: none;
	color: #7f7f7f;
	font-size: 16px;
	font-weight: 600;
	height: 60px;
	letter-spacing: 0.1em;
	line-height: 24px;
	padding-bottom: 11px;
	padding-left: 28px;
	padding-right: 30px;
	padding-top: 10px;
	text-align: center;
	width: 100%;
}

input[disabled] {
	cursor: not-allowed;
	opacity: .4;
}

input[type="submit"],
button {
	cursor: pointer;
}

input[type="submit"],
button {
	background: var(--theme-color);
	border: 4px solid var(--theme-color);;
	border-radius: 50px;
	color: #fff;
	cursor: pointer;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	line-height: 1.6em;
	padding: 26px 40px;
	text-transform: uppercase;
	-webkit-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
}

input[type="submit"]:hover,
button:hover {
	background-color: transparent;
	color: #ff497c;
}

.ds input[type="submit"]:not([class]),
.cs input[type="submit"]:not([class]),
.ds
button:not([class]),
.cs
button:not([class]) {
	border-color: #fff;
	color: #fff;
}

textarea,
textarea.form-control {
	height: auto;
	padding-top: 20px;
}

.form-group {
	position: relative;
}

[class*='col-'] > .form-group {
	margin-bottom: 0;
}

[class*='col-'] > .form-group + .form-group {
	margin-top: 10px;
}

.has-placeholder label {
	display: none;
}

/* select styling */
select[multiple] {
	height: auto;
}

select option,
.form-control option {
	background-color: #fff;
	color: #323232;
}

.form-control-unstyled {
	background-color: transparent;
	border: none;
}

.form-control,
.form-control:focus {
	box-shadow: none;
}

.form-control.invalid {
	box-shadow: 0 0 0 2px #ff497c;
}

.form-control:focus {
	background-color: #f4f4f5;
	border-color: #dedfe1;
	color: #7f7f7f;
}

.form-control:-moz-placeholder {
	color: #808080;
	opacity: 1;
}

.form-control::-moz-placeholder {
	color: #808080;
	font-style: italic;
	opacity: 1;
}

.form-control:-ms-input-placeholder {
	color: #808080;
	font-style: italic;
}

.form-control::-webkit-input-placeholder {
	color: #808080;
	font-size: 12px;
	font-weight: bold;
	letter-spacing: 3px;
	text-align: center;
	text-transform: uppercase;
}

.form-control:focus:-moz-placeholder {
	color: transparent;
}

.form-control:focus::-moz-placeholder {
	color: transparent;
}

.form-control:focus:-ms-input-placeholder {
	color: transparent;
}

.form-control:focus::-webkit-input-placeholder {
	color: transparent;
}

/*icons for forms */
form label + [class*="fa-"] {
	font-size: 16px;
	left: 28px;
	position: absolute;
	text-align: center;
	top: 60px;
	width: 1em;
}

form .has-placeholder label + [class*="fa-"] {
	top: 22px;
}

form label + [class*="fa-"] + .form-control {
	padding-left: 60px;
}

label {
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	line-height: 1.6em;
	text-transform: uppercase;
}

.checkbox label,
.radio label {
	font-weight: inherit;
}

.checkbox label[for],
.radio label[for] {
	font-weight: inherit;
}

.checkbox label[for] + input[type=checkbox],
.checkbox label[for] + input[type=radio],
.radio label[for] + input[type=checkbox],
.radio label[for] + input[type=radio] {
	left: 20px;
}

input[type=checkbox],
input[type=radio] {
	margin-top: 8px;
}

.form-wrapper.hero-bg,
.form-wrapper.muted-bg,
.form-wrapper.cs,
.form-wrapper.ds,
.form-wrapper.ls {
	padding: 35px;
}

.has-error .form-control {
	border-color: #ff497c;
}

.has-error label,
.has-error .help-block {
	color: #ff497c;
}

/*styled checkbox */
.checkbox input[type="checkbox"] {
	display: none;
}

.checkbox label + input[type="checkbox"],
.checkbox label > input[type="checkbox"] {
	display: inline-block;
}

input[type="checkbox"] + label {
	padding-left: 0;
}

input[type="checkbox"] + label > a {
	color: #323232;
}

input[type="checkbox"] + label:before {
	border: 1px solid #e1e1e1;
	content: "";
	display: inline-block;
	font-family: "FontAwesome";
	font-size: 15px;
	height: 16px;
	line-height: 14px;
	margin: 1px 10px 4px 0;
	padding-right: 0.1em;
	text-align: center;
	vertical-align: middle;
	width: 16px;
}

input[type="checkbox"]:checked + label:before {
	color: #323232;
	content: "\f00c";
}

input[type="checkbox"]:disabled + label:before {
	background-color: #e1e1e1;
}

/*styled radio*/
.radio input[type="radio"] {
	display: none;
}

.radio label + input[type="radio"],
.radio label > input[type="radio"] {
	display: inline-block;
}

input[type="radio"] + label {
	padding-left: 0;
}

input[type="radio"] + label > a {
	color: #999;
}

input[type="radio"] + label:before {
	border: 2px solid #e1e1e1;
	border-radius: 50%;
	content: "";
	display: inline-block;
	height: 16px;
	margin-bottom: 2px;
	margin-right: 10px;
	vertical-align: middle;
	width: 16px;
}

input[type="radio"]:checked + label:before {
	background-clip: content-box;
	background-color: #ff497c;
	padding: 3px;
}

input[type="radio"]:disabled + label:before {
	background-color: #e1e1e1;
}

/* carousel */
.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
	display: block;
}

.carousel-indicators li {
	border-radius: 50%;
	height: 10px;
	max-width: 10px;
}

/* bootstrap tabs*/
.nav-tabs {
	border-bottom: none;
}

.nav-tabs .nav-link {
	background-color: #1f2732;
	border-radius: 30px 30px 0 0;
	color: #fff;
	margin-right: 4px;
}

@media (max-width: 767px) {
	.nav-tabs .nav-link {
		border-radius: 15px;
		margin-bottom: 10px;
		padding: 12px 10px 12px;
		text-align: center;
	}
}

@media (min-width: 768px) and (max-width: 1199px) {
	.nav-tabs .nav-link {
		padding: 12px 8px;
	}
}

.nav-tabs .nav-link:hover {
	background: #ff497c;
}

.nav-tabs .nav-item.show .nav-link,
.nav-tabs .nav-link.active {
	background: #ff497c;
	border-color: #ff497c;
	color: #fff;
}

.nav-link {
	color: #323232;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	line-height: 1.6em;
	padding: 15px 28px;
	text-transform: uppercase;
}

.nav-link a {
	display: block;
}

.small-tabs .nav-link {
	padding: 10px 15px;
}

.tab-content {
	padding: 40px 40px;
}

.tab-pane .media img {
	max-width: 40%;
}

.tab-pane .media img:first-child {
	margin-right: 10px;
}

.tab-pane .media h3,
.tab-pane .media h4,
.tab-pane .media h5 {
	font-weight: 900;
}

/* bootstrap collapse*/
[data-toggle="collapse"] {
	display: inline-block;
	margin-bottom: 18px;
	padding-right: 20px;
	position: relative;
}

[data-toggle="collapse"]:after {
	content: "-";
	font-family: "FontAwesome";
	font-size: 16px;
	height: 60px;
	position: absolute;
	right: 100%;
	top: 0;
	width: 20px;
}

[data-toggle="collapse"].collapsed:after {
	content: "+";
}

[role="tablist"] .card {
	background: none;
	border: none;
	border-radius: 0;
}

[role="tablist"] .card-header {
	background: none;
	border: none;
	padding: 0;
}

[role="tablist"] .card-header a {
	background-color: var(--theme-color);
	border-radius: 30px;
	box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
	color: #fff;
	display: block;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	line-height: 1.6em;
	padding: 21px 50px 21px 30px;
	position: relative;
	text-transform: uppercase;
	word-wrap: break-word;
}

[role="tablist"] .card-header a:before,
[role="tablist"] .card-header a:after {
	background-color: transparent;
	bottom: 0;
	color: #fff;
	content: "";
	font-family: inherit;
	font-size: 12px;
	font-weight: 500;
	position: absolute;
	right: 0;
	text-align: center;
	top: 0;
	-webkit-transition: opacity 0.3s ease-in-out;
	transition: opacity 0.3s ease-in-out;
	width: 60px;
}

[role="tablist"] .card-header a:after {
	background: none;
	bottom: auto;
	content: "-";
	height: 30px;
	line-height: 30px;
	margin-top: -18px;
	top: 50%;
	vertical-align: top;
}

[role="tablist"] .card-header a:hover {
	color: #fff;
	opacity: 1;
}

[role="tablist"] .card-header a.collapsed {
	background-color: #1f2732;
	color: #fff;
}

[role="tablist"] .card-header a.collapsed:hover {
	background-color: var(--theme-color);
}

[role="tablist"] .card-header a.collapsed:after {
	content: "+";
	margin-top: -15px;
}

[role="tablist"] .card-body {
	padding: 10px 30px 31px;
}

[role="tablist"] .media img {
	max-width: 80px;
}

/* bootstrap dropdown menu */
.dropdown-menu {
	background-color: #fff;
	border: none;
	border-radius: 0;
	border-top: 3px solid #ff497c;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
	font-size: inherit;
	line-height: 1.5;
	margin-top: 0;
	padding: 40px;
	z-index: 1001;
}

.dropdown-menu > a {
	display: block;
	white-space: nowrap;
}

.dropdown-menu > a > img {
	max-width: none;
}

.dropdown-menu > a + a {
	margin-top: 1.5em;
}

.dropdown .dropdown-menu label,
.dropdown .dropdown-menu h3,
.dropdown .dropdown-menu h4 {
	color: #323232;
}

.dropdown.show .dropdown-menu input {
	border: 1px solid #e1e1e1;
}

.dropdown-menu > li > a:focus,
.dropdown-menu > li > a:hover {
	background-color: transparent;
	color: #323232;
}

.dropdwon-menu-title {
	padding: 10px 30px;
}

@media (min-width: 1300px) {
	.container {
		max-width: 1200px;
	}
}

/* modal */
.modal-open {
	padding-right: 0 !important;
}

.modal-backdrop.show {
	background-color: #4d4d4d;
	opacity: 0.9;
}

.modal-content {
	border-radius: 1px;
}

.modal-content [class*="col-"]:last-child {
	margin-bottom: 0;
}

/* bootstrap buttons */
.btn {
	border: 4px solid;
	border-radius: 50px;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	letter-spacing: 0.2em;
	line-height: 1.6em;
	padding: 26px 61px;
	text-transform: uppercase;
	-webkit-transition: all 0.2s linear 0s;
	transition: all 0.2s linear 0s;
}

.btn.round,
.btn.rounded {
	line-height: 1;
	padding: 23px;
}

/* media elements */
.media > img {
	display: block;
}

.media-body h3,
.media-body h4 {
	line-height: 1;
	margin-bottom: 0.2em;
	margin-top: 0.3em;
}

* + .media-body,
.media-body + * {
	margin-left: 20px;
}

td .media-body {
	width: auto;
}

.embed-responsive-3by2 {
	background-color: #000;
	height: 0;
	padding-bottom: 66.666%;
}

.embed-placeholder:after {
	background: url("../img/video.png");
	color: #fff;
	content: "";
	font-size: 14px;
	height: 42px;
	left: 50%;
	line-height: 56px;
	margin-left: -30px;
	margin-top: -30px;
	position: absolute;
	text-align: center;
	top: 50%;
	-webkit-transition: all 0.2s ease-in-out 0s;
	transition: all 0.2s ease-in-out 0s;
	width: 60px;
}

.embed-placeholder:hover:after {
	opacity: 1;
}

.alert {
	border-radius: 0;
	border-width: 0 0 0 4px;
	margin-bottom: 40px;
	padding: 30px;
}

.mark,
mark {
	background-color: transparent;
}

button.close {
	min-width: 0;
}

/* small in headings */
.h1 .small,
.h1 small,
.h2 .small,
.h2 small,
.h3 .small,
.h3 small,
.h4 .small,
.h4 small,
.h5 .small,
.h5 small,
.h6 .small,
.h6 small,
h1 .small,
h1 small,
h2 .small,
h2 small,
h3 .small,
h3 small,
h4 .small,
h4 small,
h5 .small,
h5 small,
h6 .small,
h6 small {
	color: inherit;
	font-weight: 300;
}

/* labels */
.label-success {
	background-color: #4db19e;
	color: #fff;
}

.label-info {
	background-color: #007ebd;
	color: #fff;
}

.label-warning {
	background-color: #eeb269;
	color: #fff;
}

.label-danger {
	background-color: #dc5753;
	color: #fff;
}

/*
progressbar*/
.progress {
	background-color: #fff;
	border-radius: 1px;
	height: 4px;
}

.progress + .progress {
	margin-top: 10px;
}

.progress [data-transitiongoal] {
	width: 0;
}

.progress .progress-bar {
	-webkit-transition: width 0.5s ease 0.2s;
	transition: width 0.5s ease 0.2s;
}

/*
**plugins
*/
/* Owl carousel v 2.1.6 styles */
/* Owl Carousel - Core */
.owl-carousel {
	display: none;
	position: relative;
	-webkit-tap-color-main-color: transparent;
	-ms-touch-action: manipulation;
	touch-action: manipulation;
	width: 100%;
	z-index: 1;
}

.owl-carousel .owl-stage {
	position: relative;
	-ms-touch-action: pan-Y;
}

.owl-carousel.owl-shadow-items .owl-stage {
	padding-bottom: 11px;
	padding-top: 11px;
}

.owl-carousel .owl-stage:after {
	clear: both;
	content: ".";
	display: block;
	height: 0;
	line-height: 0;
	visibility: hidden;
}

.owl-carousel .owl-stage-outer {
	margin-left: -10px;
	margin-right: -10px;
	overflow: hidden;
	padding-left: 10px;
	padding-right: 10px;
	position: relative;
	/* fix for flashing background */
	-webkit-transform: translate3d(0px, 0px, 0px);
}

.owl-carousel .owl-item {
	-webkit-backface-visibility: hidden;
	float: left;
	min-height: 1px;
	position: relative;
	-webkit-tap-color-main-color: transparent;
	-webkit-touch-callout: none;
}

.owl-carousel .owl-item .box-shadow {
	height: 100%;
}

.owl-carousel .owl-nav.disabled,
.owl-carousel .owl-dots.disabled {
	display: none;
}

.owl-carousel .owl-nav .owl-prev,
.owl-carousel .owl-nav .owl-next,
.owl-carousel .owl-dot {
	cursor: pointer;
	cursor: hand;
	-webkit-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

.owl-carousel.owl-loaded {
	display: block;
}

.owl-carousel.owl-loading {
	display: block;
	opacity: 0;
}

.owl-carousel.owl-hidden {
	opacity: 0;
}

.owl-carousel.owl-refresh .owl-item {
	display: none;
}

.owl-carousel.owl-drag .owl-item {
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

.owl-carousel.owl-grab {
	cursor: move;
	cursor: -webkit-grab;
	cursor: grab;
}

.owl-carousel.owl-rtl {
	direction: rtl;
}

.owl-carousel.owl-rtl .owl-item {
	float: right;
}

.owl-carousel .owl-dots {
	line-height: 1;
	-webkit-tap-color-main-color: transparent;
	text-align: center;
}

.owl-carousel .owl-dots .owl-dot {
	*display: inline;
	display: inline-block;
	zoom: 1;
}

.owl-carousel .owl-dots .owl-dot span {
	-webkit-backface-visibility: visible;
	background-color: #fff;
	border: 1px solid #fff;
	border-radius: 50%;
	display: block;
	height: 8px;
	margin: 5px 12px;
	opacity: 1;
	-webkit-transition: all 200ms ease;
	transition: all 200ms ease;
	width: 8px;
}

.owl-carousel .owl-dots .owl-dot.active span,
.owl-carousel .owl-dots .owl-dot:hover span {
	background-color: var(--theme-color);;
	border-color: var(--theme-color);;
	opacity: 1;
}

/* No Js */
.no-js .owl-carousel {
	display: block;
}

/* Owl Carousel - Animate Plugin */
.owl-carousel .animated {
	-webkit-animation-duration: 1000ms;
	animation-duration: 1000ms;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both;
}

.owl-carousel .owl-animated-in {
	z-index: 0;
}

.owl-carousel .owl-animated-out {
	z-index: 1;
}

.owl-carousel .fadeOut {
	-webkit-animation-name: fadeOut;
	animation-name: fadeOut;
}

@-webkit-keyframes fadeOut {
	0% {
		opacity: 1;
	}

	100% {
		opacity: 0;
	}
}

@keyframes fadeOut {
	0% {
		opacity: 1;
	}

	100% {
		opacity: 0;
	}
}

/* Owl Carousel - Auto Height Plugin */
.owl-height {
	-webkit-transition: height 500ms ease-in-out;
	transition: height 500ms ease-in-out;
}

/* Owl Carousel - Lazy Load Plugin */
.owl-carousel .owl-item .owl-lazy {
	opacity: 0;
	-webkit-transition: opacity 400ms ease;
	transition: opacity 400ms ease;
}

.owl-carousel .owl-item img.owl-lazy {
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

/* Owl Carousel - Video Plugin */
.owl-carousel .owl-video-wrapper {
	background: #000;
	height: 100%;
	position: relative;
}

.owl-carousel .owl-video-play-icon {
	-webkit-backface-visibility: hidden;
	background: url("../img/owl.video.play.png") no-repeat;
	cursor: pointer;
	height: 80px;
	left: 50%;
	margin-left: -40px;
	margin-top: -40px;
	position: absolute;
	top: 50%;
	-webkit-transition: -webkit-transform 100ms ease;
	transition: -webkit-transform 100ms ease;
	transition: transform 100ms ease;
	transition: transform 100ms ease, -webkit-transform 100ms ease;
	width: 80px;
	z-index: 1;
}

.owl-carousel .owl-video-play-icon:hover {
	-webkit-transform: scale(1.3, 1.3);
	-ms-transform: scale(1.3, 1.3);
	transform: scale(1.3, 1.3);
}

.owl-carousel .owl-video-playing .owl-video-tn,
.owl-carousel .owl-video-playing .owl-video-play-icon {
	display: none;
}

.owl-carousel .owl-video-tn {
	background-position: center center;
	background-repeat: no-repeat;
	background-size: contain;
	height: 100%;
	opacity: 0;
	-webkit-transition: opacity 400ms ease;
	transition: opacity 400ms ease;
}

.owl-carousel .owl-video-frame {
	height: 100%;
	position: relative;
	width: 100%;
	z-index: 1;
}

/*
THEMES
Owl Default Theme
*/
.owl-theme:hover .owl-nav {
	opacity: 1;
}

.owl-theme .owl-nav {
	left: 0;
	opacity: 1;
	position: absolute;
	right: 0;
	-webkit-tap-color-main-color: transparent;
	text-align: center;
	top: 45%;
}

.owl-theme .owl-nav > div {
	position: absolute;
	text-align: center;
}

.owl-theme .owl-nav .disabled {
	cursor: default;
	opacity: 1;
}

.owl-theme .owl-dots {
	margin-top: 40px;
}

.item-media .owl-theme .owl-dots {
	bottom: 20px;
	left: 0;
	margin: 0;
	position: absolute;
	right: 0;
}

/* .owl-center theme */
.owl-center .owl-nav {
	bottom: 0;
	margin-top: 0;
	opacity: 1;
	position: static;
	top: 0;
}

.owl-center .owl-nav > div {
	background-color: rgba(50, 50, 50, 0.6);
	bottom: 0;
	height: auto;
	margin: 0;
	right: -15px;
	top: 0;
	width: 50px;
}

.owl-center .owl-nav > div:first-child {
	left: -15px;
	right: auto;
}

.owl-center .owl-nav > div:first-child:after {
	left: 13px;
}

.owl-center .owl-nav > div:after {
	color: #fff;
	font-size: 20px;
	left: 17px;
	margin-top: -10px;
	position: absolute;
	top: 50%;
}

/*theme with nav at the top right corner*/
.top-right-nav .owl-nav {
	position: absolute;
	right: -21px;
	top: -58px;
}

.top-right-nav .owl-nav > div {
	background: transparent;
	min-width: 25px;
}

.top-right-nav .owl-nav > div:first-child {
	left: auto;
	right: 3em;
}

.top-right-nav .owl-nav > div i {
	font-size: 1em;
}

/*theme with text nav*/
.owl-text-nav .owl-nav {
	display: none;
	-webkit-tap-color-main-color: transparent;
	text-align: center;
}

@media (min-width: 1560px) {
	.owl-text-nav .owl-nav {
		display: block;
		left: -13vw;
		position: absolute;
		right: -13vw;
		top: 50%;
	}
}

@media (min-width: 1800px) {
	.owl-text-nav .owl-nav {
		left: -15vw;
		right: -15vw;
	}
}

.owl-text-nav .owl-nav > div {
	margin-top: -30px;
	position: absolute;
	right: 10px;
	text-align: center;
}

.owl-text-nav .owl-nav > div > span {
	display: block;
	font-weight: 900;
	line-height: 1;
}

@media (min-width: 1560px) {
	.owl-text-nav .owl-nav > div > span {
		font-size: 38px;
		line-height: 1;
		max-width: 5em;
	}
}

.small-gallery-carousel a {
	display: block;
	overflow: hidden;
}

.small-gallery-carousel a img {
	opacity: 0.4;
	-webkit-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}

.small-gallery-carousel a:hover img {
	opacity: 0.2;
	-webkit-transform: scale(1.2, 1.2);
	-ms-transform: scale(1.2, 1.2);
	transform: scale(1.2, 1.2);
}

.small-gallery-carousel .owl-nav > div {
	opacity: 1;
}

@media (min-width: 768px) {
	.small-gallery-carousel .owl-nav > div {
		margin-top: -8px;
		right: 100px;
	}

	.small-gallery-carousel .owl-nav > div:first-child {
		left: 100px;
	}
}

.small-gallery-carousel .owl-nav > div i {
	font-size: 20px;
}

/* owl images fix */
.owl-carousel .owl-item {
	opacity: 0;
	-webkit-transition: opacity 0.2s ease 0.1s;
	transition: opacity 0.2s ease 0.1s;
}

.owl-carousel .owl-item.active {
	opacity: 1;
}

.owl-center .owl-item {
	opacity: 1;
}

.testimonials-sliders.ds .owl-dots .owl-dot {
	*display: inline;
	display: inline-block;
	zoom: 1;
}

.testimonials-sliders.ds .owl-dots .owl-dot span {
	background-color: #fff;
}

.testimonials-sliders.ds .owl-dots .owl-dot.active span,
.testimonials-sliders.ds .owl-dots .owl-dot:hover span {
	background-color: var(--theme-color);;
	border: 1px solid var(--theme-color);;
	opacity: 1;
}

.widget_slider .owl-theme .owl-nav {
	color: #000;
	left: 0;
	opacity: 1;
	position: absolute;
	right: 0;
	top: 26%;
}

.gallery-owl-nav .owl-nav > div {
	background-color: var(--theme-color);
	border: 0;
	border-radius: 50% 0 0 50%;
	bottom: 0;
	height: 80px;
	margin: 0;
	right: -40px;
	text-align: center;
	top: 50%;
	width: 80px;
}

@media (max-width: 767px) {
	.gallery-owl-nav .owl-nav > div {
		height: 70px;
		width: 70px;
	}
}

.gallery-owl-nav .owl-nav > div i {
	color: #fff;
	font-size: 20px;
	left: 20%;
	position: absolute;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
	-webkit-transition: all 0.3s ease-in-out 0s;
	transition: all 0.3s ease-in-out 0s;
}

.gallery-owl-nav .owl-nav > div.owl-prev {
	border-radius: 0 50% 50% 0;
	left: -40px;
	right: auto;
}

.gallery-owl-nav .owl-nav > div.owl-prev i {
	left: 70%;
}

.gallery-owl-nav .owl-nav > div:hover {
	background-color: #fff;
	right: 0;
}

.gallery-owl-nav .owl-nav > div:hover i {
	color: #ff497c;
	left: 45%;
}

.gallery-owl-nav .owl-nav > div.owl-prev:hover {
	left: 0;
	right: auto;
}

.gallery-owl-nav .owl-nav > div.owl-prev:hover i {
	color: #ff497c;
	left: 40%;
}

.products .owl-nav {
	-webkit-transition: all 0.3s ease;
	transition: all 0.3s ease;
}

.products .owl-nav > div {
	display: inline-block;
	opacity: 1;
	right: 10px;
	text-transform: uppercase;
}

.products .owl-nav > div.disabled {
	cursor: default;
	opacity: 1;
}

.products .owl-nav > div.disabled:hover {
	cursor: default;
	opacity: 1;
}

.products .owl-nav > div i {
	color: #1f2732;
	font-size: 27px;
	font-weight: 300;
}

.products .owl-nav > div i:hover {
	color: #ff497c;
}

.products .owl-nav > div:first-child {
	left: 10px;
	right: auto;
}

/*
** Flexslider
* http://www.woothemes.com/flexslider/
*
* Copyright 2012 WooThemes
* Free to use under the GPLv2 license.
* http://www.gnu.org/licenses/gpl-2.0.html
*
* Contributing author: Tyler Smith (@mbmufffin)
*/
/* Browser Resets */
.flex-container a:active,
.flexslider a:active,
.flex-container a:focus,
.flexslider a:focus {
	outline: none;
}

.slides,
.flex-control-nav,
.flex-direction-nav {
	color: #000;
	list-style: none;
	margin: 0;
	padding: 0;
}

/* FlexSlider Necessary Styles */
.flexslider {
	margin: 0;
	padding: 0;
}

.flexslider .slides > li {
	-webkit-backface-visibility: hidden;
	display: none;
	height: 760px;
}

/* Hide the slides before the JS is loaded. Avoids image jumping */
.flexslider .slides img {
	display: block;
	width: 100%;
	height: 100%;
	object-fit: cover;
}

.flex-pauseplay span {
	text-transform: capitalize;
}

/* Clearfix for the .slides element */
.slides:after {
	clear: both;
	content: "\0020";
	display: block;
	height: 0;
	line-height: 0;
	visibility: hidden;
}

html[xmlns] .slides {
	display: block;
}

* html .slides {
	height: 1%;
}

/* No JavaScript Fallback */
/* If you are not using another script, such as Modernizr, make sure you
* include js that eliminates this class on page load */
.no-js .slides > li:first-child {
	display: block;
}

/* FlexSlider Default Theme */
.flexslider {
	margin: 0 0;
	position: relative;
	zoom: 1;
}

.flex-viewport {
	max-height: 2000px;
	-webkit-transition: all 1s ease;
	transition: all 1s ease;
}

.loading .flex-viewport {
	max-height: 300px;
}

.flexslider .slides {
	zoom: 1;
}

/* Direction Nav */
.flex-direction-nav {
	*height: 0;
}

.flex-direction-nav a {
	background-color: rgba(255, 255, 255, 0.1);
	border-radius: 50% 0 0 50%;
	color: #fff;
	cursor: pointer;
	display: block;
	font-size: 0;
	height: 80px;
	margin: -40px 0 0;
	opacity: 1;
	overflow: hidden;
	position: absolute;
	text-align: center;
	text-decoration: none;
	top: 50%;
	width: 80px;
	z-index: 10;
}

.flex-direction-nav .flex-prev {
	border-radius: 0 50% 50% 0;
	left: -40px;
}

.flex-direction-nav .flex-prev:hover {
	background-color: var(--theme-color);
	color: #fff;
	left: 0;
}

.flex-direction-nav .flex-next {
	right: -40px;
	text-align: right;
}

.flex-direction-nav .flex-next:hover {
	background-color: var(--theme-color);
	color: #fff;
	right: 0;
}

.flexslider:hover .flex-prev {
	opacity: 0.7;
}

.flexslider:hover .flex-next {
	opacity: 0.7;
}

.flexslider:hover .flex-next:hover,
.flexslider:hover .flex-prev:hover {
	opacity: 1;
}

.flex-direction-nav .flex-disabled {
	cursor: default;
	filter: alpha(opacity=0);
	opacity: 0;
}

.flex-direction-nav a:before {
	content: "\f104";
	font-family: "FontAwesome";
	font-size: 20px;
	left: auto;
	position: absolute;
	right: 20px;
	top: 23px;
}

.flex-direction-nav a.flex-next:before {
	content: "\f105";
	left: 20px;
	right: auto;
}

/* Pause/Play */
.flex-pauseplay a {
	bottom: 5px;
	color: #000;
	cursor: pointer;
	display: block;
	height: 20px;
	left: 10px;
	opacity: 0.8;
	overflow: hidden;
	position: absolute;
	width: 20px;
	z-index: 10;
}

.flex-pauseplay a:before {
	content: "\f01d";
	display: inline-block;
	font-family: "FontAwesome";
	font-size: 20px;
}

.flex-pauseplay a:hover {
	opacity: 1;
}

.flex-pauseplay a.flex-play:before {
	content: "\f01d";
}

/* Control Nav */
.flex-control-nav {
	bottom: 20px;
	color: transparent;
	font-size: 0;
	line-height: 0;
	position: absolute;
	text-align: center;
	width: 100%;
	z-index: 10;
}

.flex-control-nav li {
	*display: inline;
	display: inline-block;
	padding: 0 14px;
	text-align: center;
	zoom: 1;
}

.flex-control-paging li a {
	border: 1px solid #fff;
	border-radius: 50%;
	cursor: pointer;
	display: block;
	height: 8px;
	opacity: 0.5;
	width: 8px;
}

.ds .flex-control-paging li a,
.cs .flex-control-paging li a {
	border-color: #fff;
}

.flex-control-paging li a:hover {
	background-color: #fff;
	border-color: #fff;
	opacity: 1;
}

.flex-control-paging li a.flex-active {
	background-color: #fff;
	border-color: #fff;
	opacity: 1;
}

.flex-control-thumbs {
	margin: 1px -1px;
	overflow: hidden;
	position: static;
}

.flex-control-thumbs li {
	float: left;
	margin: 0 0 1px;
	padding: 0 0 0 1px;
	width: 25%;
}

.flex-control-thumbs img {
	cursor: pointer;
	display: block;
	opacity: .7;
	width: 100%;
}

.flex-control-thumbs img:hover {
	opacity: 1;
}

.flex-control-thumbs .flex-active {
	cursor: default;
	opacity: 1;
}

/* custom nav for flex slider*/
.flex-custom-nav {
	bottom: 38px;
	left: 0;
	line-height: 1;
	position: absolute;
	right: 0;
	text-align: center;
	-webkit-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	z-index: 3;
}

.flex-custom-nav .flex-control-nav {
	display: inline-block;
	position: static;
	width: auto;
}

.flex-custom-nav .flex-custom-link {
	bottom: 7px;
	color: #323232;
	font-size: 12px;
	margin: 0 8px;
	position: relative;
}

.ds .flex-custom-nav .flex-custom-link,
.cs .flex-custom-nav .flex-custom-link {
	color: #fff;
}

.flex-custom-nav .flex-custom-link:hover {
	color: #ff497c;
}

.page_slider:hover .flex-custom-nav {
	opacity: 1;
}

/*
**photoswipe
* http://photoswipe.com/
*
*/
/* pswp = photoswipe */
.pswp {
	/* create separate layer, to avoid paint on window.onscroll in webkit/blink */
	-webkit-backface-visibility: hidden;
	display: none;
	height: 100%;
	left: 0;
	outline: none;
	overflow: hidden;
	position: absolute;
	-webkit-text-size-adjust: 100%;
	top: 0;
	-ms-touch-action: none;
	touch-action: none;
	width: 100%;
	z-index: 1500;
}

.pswp * {
	box-sizing: border-box;
}

.pswp img {
	max-width: none;
}

/* style is added when JS option showHideOpacity is set to true */
.pswp--animate_opacity {
	/* 0.001, because opacity:0 doesn't trigger Paint action, which causes lag at start of transition */
	opacity: 0.001;
	/* for open/close transition */
	-webkit-transition: opacity 333ms cubic-bezier(0.4, 0, 0.22, 1);
	transition: opacity 333ms cubic-bezier(0.4, 0, 0.22, 1);
	will-change: opacity;
}

.pswp--open {
	display: block;
}

.pswp--zoom-allowed .pswp__img {
	/* autoprefixer: off */
	cursor: -webkit-zoom-in;
	cursor: -moz-zoom-in;
	cursor: zoom-in;
}

.pswp--zoomed-in .pswp__img {
	/* autoprefixer: off */
	cursor: -webkit-grab;
	cursor: -moz-grab;
	cursor: grab;
}

.pswp--dragging .pswp__img {
	/* autoprefixer: off */
	cursor: -webkit-grabbing;
	cursor: -moz-grabbing;
	cursor: grabbing;
}

/*
	Background is added as a separate element.
	As animating opacity is much faster than animating rgba() background-color.
*/
.pswp__bg {
	-webkit-backface-visibility: hidden;
	background: #000;
	height: 100%;
	left: 0;
	opacity: 0;
	position: absolute;
	top: 0;
	-webkit-transform: translateZ(0);
	transform: translateZ(0);
	width: 100%;
	will-change: opacity;
}

.pswp__scroll-wrap {
	height: 100%;
	left: 0;
	overflow: hidden;
	position: absolute;
	top: 0;
	width: 100%;
}

.pswp__container,
.pswp__zoom-wrap {
	bottom: 0;
	left: 0;
	position: absolute;
	right: 0;
	top: 0;
	-ms-touch-action: none;
	touch-action: none;
}

/* Prevent selection and tap highlights */
.pswp__container,
.pswp__img {
	-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

.pswp__zoom-wrap {
	position: absolute;
	-webkit-transform-origin: left top;
	-ms-transform-origin: left top;
	transform-origin: left top;
	/* for open/close transition */
	-webkit-transition: -webkit-transform 333ms cubic-bezier(0.4, 0, 0.22, 1);
	transition: -webkit-transform 333ms cubic-bezier(0.4, 0, 0.22, 1);
	transition: transform 333ms cubic-bezier(0.4, 0, 0.22, 1);
	transition: transform 333ms cubic-bezier(0.4, 0, 0.22, 1), -webkit-transform 333ms cubic-bezier(0.4, 0, 0.22, 1);
	width: 100%;
}

.pswp__bg {
	/* for open/close transition */
	-webkit-transition: opacity 333ms cubic-bezier(0.4, 0, 0.22, 1);
	transition: opacity 333ms cubic-bezier(0.4, 0, 0.22, 1);
	will-change: opacity;
}

.pswp--animated-in .pswp__bg,
.pswp--animated-in .pswp__zoom-wrap {
	-webkit-transition: none;
	transition: none;
}

.pswp__container,
.pswp__zoom-wrap {
	-webkit-backface-visibility: hidden;
}

.pswp__item {
	bottom: 0;
	left: 0;
	overflow: hidden;
	position: absolute;
	right: 0;
	top: 0;
}

.pswp__img {
	height: auto;
	left: 0;
	position: absolute;
	top: 0;
	width: auto;
}

/*
	stretched thumbnail or div placeholder element (see below)
	style is added to avoid flickering in webkit/blink when layers overlap
*/
.pswp__img--placeholder {
	-webkit-backface-visibility: hidden;
}

/*
	div element that matches size of large image
	large image loads on top of it
*/
.pswp__img--placeholder--blank {
	background: #222;
}

.pswp--ie .pswp__img {
	height: auto !important;
	left: 0;
	top: 0;
	width: 100% !important;
}

/*
	Error message appears when image is not loaded
	(JS option errorMsg controls markup)
*/
.pswp__error-msg {
	color: #ccc;
	font-size: 14px;
	left: 0;
	line-height: 16px;
	margin-top: -8px;
	position: absolute;
	text-align: center;
	top: 50%;
	width: 100%;
}

.pswp__error-msg a {
	color: #ccc;
	text-decoration: underline;
}

/*! PhotoSwipe Default UI CSS by Dmitry Semenov | photoswipe.com | MIT license */
/*

	Contents:

	1. Buttons
	2. Share modal and links
	3. Index indicator ("1 of X" counter)
	4. Caption
	5. Loading indicator
	6. Additional styles (root element, top bar, idle state, hidden state, etc.)

*/
/*

	1. Buttons

 */
/* <button> css reset */
.pswp__button {
	-webkit-appearance: none;
	background: none;
	border: 0;
	box-shadow: none;
	cursor: pointer;
	display: block;
	float: right;
	height: 44px;
	margin: 0;
	opacity: 0.75;
	overflow: visible;
	padding: 0;
	position: relative;
	-webkit-transition: opacity 0.2s;
	transition: opacity 0.2s;
	width: 44px;
}

.pswp__button:focus,
.pswp__button:hover {
	opacity: 1;
}

.pswp__button:active {
	opacity: 0.9;
	outline: none;
}

.pswp__button::-moz-focus-inner {
	border: 0;
	padding: 0;
}

/* pswp__ui--over-close class it added when mouse is over element that should close gallery */
.pswp__ui--over-close .pswp__button--close {
	opacity: 1;
}

.pswp__button,
.pswp__button--arrow--left:before,
.pswp__button--arrow--right:before {
	background: url(../img/photoswipe/default-skin.png) 0 0 no-repeat;
	background-size: 264px 88px;
	height: 44px;
	width: 44px;
}

@media (-webkit-min-device-pixel-ratio: 1.1), (-webkit-min-device-pixel-ratio: 1.09375), (min-resolution: 105dpi), (min-resolution: 1.1dppx) {
	/* Serve SVG sprite if browser supports SVG and resolution is more than 105dpi */
	.pswp--svg .pswp__button,
	.pswp--svg .pswp__button--arrow--left:before,
	.pswp--svg .pswp__button--arrow--right:before {
		background-image: url(../img/photoswipe/default-skin.svg);
	}

	.pswp--svg .pswp__button--arrow--left,
	.pswp--svg .pswp__button--arrow--right {
		background: none;
	}
}

.pswp__button--close {
	background-position: 0 -44px;
}

.pswp__button--share {
	background-position: -44px -44px;
}

.pswp__button--fs {
	display: none;
}

.pswp--supports-fs .pswp__button--fs {
	display: block;
}

.pswp--fs .pswp__button--fs {
	background-position: -44px 0;
}

.pswp__button--zoom {
	background-position: -88px 0;
	display: none;
}

.pswp--zoom-allowed .pswp__button--zoom {
	display: block;
}

.pswp--zoomed-in .pswp__button--zoom {
	background-position: -132px 0;
}

/* no arrows on touch screens */
.pswp--touch .pswp__button--arrow--left,
.pswp--touch .pswp__button--arrow--right {
	visibility: hidden;
}

/*
	Arrow buttons hit area
	(icon is added to :before pseudo-element)
*/
.pswp__button--arrow--left,
.pswp__button--arrow--right {
	background: none;
	height: 100px;
	margin-top: -50px;
	position: absolute;
	top: 50%;
	width: 70px;
}

.pswp__button--arrow--left {
	left: 0;
}

.pswp__button--arrow--right {
	right: 0;
}

.pswp__button--arrow--left:before,
.pswp__button--arrow--right:before {
	background-color: rgba(0, 0, 0, 0.3);
	content: "";
	height: 30px;
	position: absolute;
	top: 35px;
	width: 32px;
}

.pswp__button--arrow--left:before {
	background-position: -138px -44px;
	left: 6px;
}

.pswp__button--arrow--right:before {
	background-position: -94px -44px;
	right: 6px;
}

/*

	2. Share modal/popup and links

 */
.pswp__counter,
.pswp__share-modal {
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

.pswp__share-modal {
	-webkit-backface-visibility: hidden;
	background: rgba(0, 0, 0, 0.5);
	display: block;
	height: 100%;
	left: 0;
	opacity: 0;
	padding: 10px;
	position: absolute;
	top: 0;
	-webkit-transition: opacity 0.25s ease-out;
	transition: opacity 0.25s ease-out;
	width: 100%;
	will-change: opacity;
	z-index: 1600;
}

.pswp__share-modal--hidden {
	display: none;
}

.pswp__share-tooltip {
	-webkit-backface-visibility: hidden;
	background: #fff;
	border-radius: 2px;
	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25);
	display: block;
	position: absolute;
	right: 44px;
	top: 56px;
	-ms-transform: translateY(6px);
	-webkit-transform: translateY(6px);
	transform: translateY(6px);
	-webkit-transition: -webkit-transform 0.25s;
	transition: -webkit-transform 0.25s;
	transition: transform 0.25s;
	transition: transform 0.25s, -webkit-transform 0.25s;
	width: auto;
	will-change: transform;
	z-index: 1620;
}

.pswp__share-tooltip a {
	color: #000;
	display: block;
	font-size: 14px;
	line-height: 18px;
	padding: 8px 12px;
	text-decoration: none;
}

.pswp__share-tooltip a:hover {
	color: #000;
	text-decoration: none;
}

.pswp__share-tooltip a:first-child {
	/* round corners on the first/last list item */
	border-radius: 2px 2px 0 0;
}

.pswp__share-tooltip a:last-child {
	border-radius: 0 0 2px 2px;
}

.pswp__share-modal--fade-in {
	opacity: 1;
}

.pswp__share-modal--fade-in .pswp__share-tooltip {
	-webkit-transform: translateY(0);
	-ms-transform: translateY(0);
	transform: translateY(0);
}

/* increase size of share links on touch devices */
.pswp--touch .pswp__share-tooltip a {
	padding: 16px 12px;
}

a.pswp__share--facebook:before {
	border: 6px solid rgba(0, 0, 0, 0);
	border-bottom-color: #fff;
	content: "";
	display: block;
	height: 0;
	-moz-pointer-events: none;
	pointer-events: none;
	-webkit-pointer-events: none;
	position: absolute;
	right: 15px;
	top: -12px;
	width: 0;
}

a.pswp__share--facebook:hover {
	background: #3e5c9a;
	color: #fff;
}

a.pswp__share--facebook:hover:before {
	border-bottom-color: #3e5c9a;
}

a.pswp__share--twitter:hover {
	background: #55acee;
	color: #fff;
}

a.pswp__share--pinterest:hover {
	background: #ccc;
	color: #ce272d;
}

a.pswp__share--download:hover {
	background: #ddd;
}

/*

	3. Index indicator ("1 of X" counter)

 */
.pswp__counter {
	color: #fff;
	font-size: 13px;
	height: 44px;
	left: 0;
	line-height: 44px;
	opacity: 0.75;
	padding: 0 10px;
	position: absolute;
	top: 0;
}

/*

	4. Caption

 */
.pswp__caption {
	bottom: 0;
	left: 0;
	min-height: 44px;
	position: absolute;
	width: 100%;
}

.pswp__caption small {
	color: #bbb;
	font-size: 11px;
}

.pswp__caption__center {
	color: #ccc;
	font-size: 13px;
	line-height: 20px;
	margin: 0 auto;
	max-width: 420px;
	padding: 10px;
	text-align: left;
}

.pswp__caption--empty {
	display: none;
}

/* Fake caption element, used to calculate height of next/prev image */
.pswp__caption--fake {
	visibility: hidden;
}

/*

	5. Loading indicator (preloader)

	You can play with it here - http://codepen.io/dimsemenov/pen/yyBWoR

 */
.pswp__preloader {
	direction: ltr;
	height: 44px;
	left: 50%;
	margin-left: -22px;
	opacity: 0;
	position: absolute;
	top: 0;
	-webkit-transition: opacity 0.25s ease-out;
	transition: opacity 0.25s ease-out;
	width: 44px;
	will-change: opacity;
}

.pswp__preloader__icn {
	height: 20px;
	margin: 12px;
	width: 20px;
}

.pswp__preloader--active {
	opacity: 1;
}

.pswp__preloader--active .pswp__preloader__icn {
	/* We use .gif in browsers that don't support CSS animation */
	background: url(../img/photoswipe/preloader.gif) 0 0 no-repeat;
}

.pswp--css_animation .pswp__preloader--active {
	opacity: 1;
}

.pswp--css_animation .pswp__preloader--active .pswp__preloader__icn {
	-webkit-animation: clockwise 500ms linear infinite;
	animation: clockwise 500ms linear infinite;
}

.pswp--css_animation .pswp__preloader--active .pswp__preloader__donut {
	-webkit-animation: donut-rotate 1000ms cubic-bezier(0.4, 0, 0.22, 1) infinite;
	animation: donut-rotate 1000ms cubic-bezier(0.4, 0, 0.22, 1) infinite;
}

.pswp--css_animation .pswp__preloader__icn {
	background: none;
	height: 14px;
	left: 15px;
	margin: 0;
	opacity: 0.75;
	position: absolute;
	top: 15px;
	width: 14px;
}

.pswp--css_animation .pswp__preloader__cut {
	height: 14px;
	overflow: hidden;
	/*
      The idea of animating inner circle is based on Polymer ("material") loading indicator
       by Keanu Lee https://blog.keanulee.com/2014/10/20/the-tale-of-three-spinners.html
    */
	position: relative;
	width: 7px;
}

.pswp--css_animation .pswp__preloader__donut {
	background: none;
	border: 2px solid #fff;
	border-bottom-color: transparent;
	border-left-color: transparent;
	border-radius: 50%;
	box-sizing: border-box;
	height: 14px;
	left: 0;
	margin: 0;
	position: absolute;
	top: 0;
	width: 14px;
}

@media screen and (max-width: 1024px) {
	.pswp__preloader {
		float: right;
		left: auto;
		margin: 0;
		position: relative;
		top: auto;
	}
}

@-webkit-keyframes clockwise {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}

	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}

@keyframes clockwise {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}

	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}

@-webkit-keyframes donut-rotate {
	0% {
		-webkit-transform: rotate(0);
		transform: rotate(0);
	}

	50% {
		-webkit-transform: rotate(-140deg);
		transform: rotate(-140deg);
	}

	100% {
		-webkit-transform: rotate(0);
		transform: rotate(0);
	}
}

@keyframes donut-rotate {
	0% {
		-webkit-transform: rotate(0);
		transform: rotate(0);
	}

	50% {
		-webkit-transform: rotate(-140deg);
		transform: rotate(-140deg);
	}

	100% {
		-webkit-transform: rotate(0);
		transform: rotate(0);
	}
}

/*

	6. Additional styles

 */
/* root element of UI */
.pswp__ui {
	-webkit-font-smoothing: auto;
	opacity: 1;
	visibility: visible;
	z-index: 1550;
}

/* top black bar with buttons and "1 of X" indicator */
.pswp__top-bar {
	height: 44px;
	left: 0;
	position: absolute;
	top: 0;
	width: 100%;
}

.pswp__caption,
.pswp__top-bar,
.pswp--has_mouse .pswp__button--arrow--left,
.pswp--has_mouse .pswp__button--arrow--right {
	-webkit-backface-visibility: hidden;
	-webkit-transition: opacity 333ms cubic-bezier(0.4, 0, 0.22, 1);
	transition: opacity 333ms cubic-bezier(0.4, 0, 0.22, 1);
	will-change: opacity;
}

/* pswp--has_mouse class is added only when two subsequent mousemove events occur */
.pswp--has_mouse .pswp__button--arrow--left,
.pswp--has_mouse .pswp__button--arrow--right {
	visibility: visible;
}

.pswp__top-bar,
.pswp__caption {
	background-color: rgba(0, 0, 0, 0.5);
}

/* pswp__ui--fit class is added when main image "fits" between top bar and bottom bar (caption) */
.pswp__ui--fit .pswp__top-bar,
.pswp__ui--fit .pswp__caption {
	background-color: rgba(0, 0, 0, 0.3);
}

/* pswp__ui--idle class is added when mouse isn't moving for several seconds (JS option timeToIdle) */
.pswp__ui--idle .pswp__top-bar {
	opacity: 0;
}

.pswp__ui--idle .pswp__button--arrow--left,
.pswp__ui--idle .pswp__button--arrow--right {
	opacity: 0;
}

/*
	pswp__ui--hidden class is added when controls are hidden
	e.g. when user taps to toggle visibility of controls
*/
.pswp__ui--hidden .pswp__top-bar,
.pswp__ui--hidden .pswp__caption,
.pswp__ui--hidden .pswp__button--arrow--left,
.pswp__ui--hidden .pswp__button--arrow--right {
	/* Force paint & create composition layer for controls. */
	opacity: 0.001;
}

/* pswp__ui--one-slide class is added when there is just one item in gallery */
.pswp__ui--one-slide .pswp__button--arrow--left,
.pswp__ui--one-slide .pswp__button--arrow--right,
.pswp__ui--one-slide .pswp__counter {
	display: none;
}

.pswp__element--disabled {
	display: none !important;
}

.pswp--minimal--dark .pswp__top-bar {
	background: none;
}

.pswp__zoom-wrap .embed-responsive {
	margin: auto;
	max-width: 90%;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
}

@media (min-width: 1200px) {
	.pswp__zoom-wrap .embed-responsive {
		max-width: 50%;
	}
}

/*
** Easy pieChart
*/
.chart {
	display: inline-block;
	margin-bottom: 10px;
	min-height: 150px;
	min-width: 150px;
	position: relative;
	text-align: center;
}

.chart .chart-meta {
	position: absolute;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
	width: 100%;
}

.chart .chart-meta h4 {
	font-size: 20px;
	letter-spacing: 0.2em;
	margin: 0;
}

.percent {
	display: inline-block;
	font-family: "Poppins", sans-serif;
	font-size: 62px;
	font-weight: 900;
	z-index: 2;
}

.percent:after {
	content: "%";
}

.angular {
	margin-top: 100px;
}

.angular .chart {
	margin-top: 0;
}

/*
** Time Table
*/
#timetable span {
	display: block;
}

#timetable th,
#timetable td {
	font-weight: normal;
	padding: 25px 5px;
	text-align: center;
	vertical-align: middle;
}

#timetable thead {
	color: #fff;
}

#timetable thead th {
	border: 1px solid rgba(255, 255, 255, 0.15);
	border-width: 0 1px;
}

#timetable tbody th,
#timetable tbody td {
	border: 1px solid #e1e1e1;
	-webkit-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}

#timetable tbody .current {
	background-color: #ff497c;
	border-color: #ff497c;
}

#timetable tbody .current a {
	color: #fff;
}

/*
** toTop
*/
#toTop {
	background-color: var(--theme-color);
	border-radius: 50%;
	bottom: 10px;
	color: transparent;
	font-size: 0;
	height: 50px;
	opacity: 0.7;
	overflow: hidden;
	position: fixed;
	right: 10px;
	text-decoration: none;
	width: 50px;
	z-index: 9999;
}

#toTop:after {
	bottom: 0;
	color: #fff;
	content: "\f106";
	display: block;
	font-family: "FontAwesome";
	font-size: 16px;
	left: 0;
	line-height: 47px;
	position: absolute;
	right: 0;
	text-align: center;
	top: 0;
	-webkit-transition: all 0.2s linear;
	transition: all 0.2s linear;
}

#toTopHover,
#toTop:hover {
	bottom: 3px;
	opacity: 1;
}

#toTop:hover:after {
	color: #fff;
}

#toTop:active,
#toTop:focus {
	outline: medium none;
}

.modal-open #toTop {
	visibility: hidden;
}

/* Countdown */
#comingsoon-countdown {
	text-align: center;
}

#comingsoon-countdown:before,
#comingsoon-countdown:after {
	clear: both;
	content: " ";
	display: table;
}

.countdown-rtl {
	direction: rtl;
}

.countdown-row {
	clear: both;
	display: table;
	margin: auto;
	padding: 20px 0;
	text-align: center;
}

@media (min-width: 767px) and (max-width: 991px) {
	.countdown-row {
		margin: auto auto auto -40px;
	}
}

.countdown-section {
	border-left: 1px solid rgba(255, 255, 255, 0.15);
	display: table-cell;
	padding: 10px 30px 20px;
	text-align: center;
}

.countdown-section:first-child {
	border-left-width: 0;
}

.countdown-amount {
	color: #ff497c;
	font-size: 80px;
	font-weight: 700;
	line-height: 1;
}

.countdown-period {
	color: #323232;
	display: block;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	min-width: 11em;
	text-transform: uppercase;
}

.countdown-descr {
	display: block;
}

@media (max-width: 767px) {
	.countdown-section {
		padding: 20px 8px 0;
	}

	.countdown-amount {
		font-size: 40px;
	}

	.countdown-period {
		letter-spacing: 0.1em;
		min-width: 4em;
	}
}

/* sidebar scroll plugin */
.scroll-wrapper {
	height: 100%;
	overflow: hidden;
	padding: 0;
	position: relative;
}

.scroll-wrapper > .scroll-content {
	border: none;
	box-sizing: content-box;
	height: auto;
	left: 0;
	margin: 0;
	max-height: none;
	max-width: none;
	overflow: scroll;
	padding: 0;
	position: relative;
	top: 0;
	width: auto;
}

.scroll-wrapper > .scroll-content::-webkit-scrollbar {
	height: 0;
	width: 0;
}

.scroll-wrapper.scroll--rtl {
	direction: rtl;
}

.scroll-element {
	box-sizing: content-box;
	display: none;
}

.scroll-element div {
	box-sizing: content-box;
}

.scroll-element .scroll-bar,
.scroll-element .scroll-arrow {
	cursor: default;
}

.scroll-element.scroll-x.scroll-scrollx_visible,
.scroll-element.scroll-y.scroll-scrolly_visible {
	display: block;
}

.scrollbar-macosx > .scroll-element,
.scrollbar-macosx > .scroll-element div {
	background: none;
	border: none;
	margin: 0;
	padding: 0;
	position: absolute;
	z-index: 10;
}

.scrollbar-macosx > .scroll-element div {
	display: block;
	height: 100%;
	left: 0;
	top: 0;
	width: 100%;
}

.scrollbar-macosx > .scroll-element .scroll-element_track {
	display: none;
}

.scrollbar-macosx > .scroll-element .scroll-bar {
	background-color: rgba(127, 127, 127, 0.4);
	border-radius: 1px;
	display: block;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	filter: alpha(opacity=0);
	opacity: 0;
	-webkit-transition: opacity 0.2s linear;
	transition: opacity 0.2s linear;
}

.scrollbar-macosx:hover > .scroll-element .scroll-bar,
.scrollbar-macosx > .scroll-element.scroll-draggable .scroll-bar {
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=70)";
	filter: alpha(opacity=70);
	opacity: 0.7;
}

.scrollbar-macosx > .scroll-element.scroll-x {
	bottom: 0;
	height: 0;
	left: 0;
	min-width: 100%;
	overflow: visible;
	width: 100%;
}

.scrollbar-macosx > .scroll-element.scroll-y {
	height: 100%;
	min-height: 100%;
	right: 0;
	top: 0;
	width: 0;
}

.scrollbar-macosx > .scroll-element.scroll-x .scroll-bar {
	height: 7px;
	min-width: 10px;
	top: -9px;
}

.scrollbar-macosx > .scroll-element.scroll-y .scroll-bar {
	left: -9px;
	min-height: 10px;
	width: 7px;
}

.scrollbar-macosx > .scroll-element.scroll-x .scroll-element_outer {
	left: 2px;
}

.scrollbar-macosx > .scroll-element.scroll-x .scroll-element_size {
	left: -4px;
}

.scrollbar-macosx > .scroll-element.scroll-y .scroll-element_outer {
	top: 2px;
}

.scrollbar-macosx > .scroll-element.scroll-y .scroll-element_size {
	top: -4px;
}

.scrollbar-macosx > .scroll-element.scroll-x.scroll-scrolly_visible .scroll-element_size {
	left: -11px;
}

.scrollbar-macosx > .scroll-element.scroll-y.scroll-scrollx_visible .scroll-element_size {
	top: -11px;
}

/*
** Bootstrap Addons
*/
/*
** Horizontal padding (gutters) for columns and rows
*/
/* columns
.c - columns
px-* - horizontal padding value
*/
.c-gutter-100 [class*="col-"],
.row.c-gutter-100 > [class*="col-"] {
	padding-left: 50px;
	padding-right: 50px;
}

.c-gutter-80 [class*="col-"],
.row.c-gutter-80 > [class*="col-"] {
	padding-left: 40px;
	padding-right: 40px;
}

.c-gutter-60 [class*="col-"],
.row.c-gutter-60 > [class*="col-"] {
	padding-left: 30px;
	padding-right: 30px;
}

.c-gutter-50 [class*="col-"],
.row.c-gutter-50 > [class*="col-"] {
	padding-left: 25px;
	padding-right: 25px;
}

.c-gutter-30 [class*="col-"],
.row.c-gutter-30 > [class*="col-"] {
	padding-left: 15px;
	padding-right: 15px;
}

.c-gutter-25 [class*="col-"],
.row.c-gutter-25 > [class*="col-"] {
	padding-left: 13px;
	padding-right: 12px;
}

.c-gutter-20 [class*="col-"],
.row.c-gutter-20 > [class*="col-"] {
	padding-left: 10px;
	padding-right: 10px;
}

.c-gutter-15 [class*="col-"],
.row.c-gutter-15 > [class*="col-"] {
	padding-left: 8px;
	padding-right: 7px;
}

.c-gutter-10 [class*="col-"],
.row.c-gutter-10 > [class*="col-"] {
	padding-left: 5px;
	padding-right: 5px;
}

.c-gutter-5 [class*="col-"],
.row.c-gutter-5 > [class*="col-"] {
	padding-left: 3px;
	padding-right: 2px;
}

.c-gutter-2 [class*="col-"],
.row.c-gutter-2 > [class*="col-"] {
	padding-left: 1px;
	padding-right: 1px;
}

.c-gutter-1 [class*="col-"],
.row.c-gutter-1 > [class*="col-"] {
	padding-left: 1px;
	padding-right: 0;
}

/*same as bootstrap .no-gutters class*/
.c-gutter-0 [class*="col-"],
.row.c-gutter-0 > [class*="col-"] {
	padding-left: 0;
	padding-right: 0;
}

/* rows */
.c-gutter-100 .row,
div.row.c-gutter-100 {
	margin-left: -50px;
	margin-right: -50px;
}

.c-gutter-80 .row,
div.row.c-gutter-80 {
	margin-left: -40px;
	margin-right: -40px;
}

.c-gutter-60 .row,
div.row.c-gutter-60 {
	margin-left: -30px;
	margin-right: -30px;
}

.c-gutter-50 .row,
div.row.c-gutter-50 {
	margin-left: -25px;
	margin-right: -25px;
}

.c-gutter-30 .row,
div.row.c-gutter-30 {
	margin-left: -15px;
	margin-right: -15px;
}

.c-gutter-25 .row,
div.row.c-gutter-25 {
	margin-left: -13px;
	margin-right: -12px;
}

.c-gutter-20 .row,
div.row.c-gutter-20 {
	margin-left: -10px;
	margin-right: -10px;
}

.c-gutter-15 .row,
div.row.c-gutter-15 {
	margin-left: -8px;
	margin-right: -7px;
}

.c-gutter-10 .row,
div.row.c-gutter-10 {
	margin-left: -5px;
	margin-right: -5px;
}

.c-gutter-5 .row,
div.row.c-gutter-5 {
	margin-left: -3px;
	margin-right: -2px;
}

.c-gutter-2 .row,
div.row.c-gutter-2 {
	margin-left: -1px;
	margin-right: -1px;
}

.c-gutter-1 .row,
div.row.c-gutter-1 {
	margin-left: -1px;
	margin-right: 0;
}

.c-gutter-0 .row,
div.row.c-gutter-0 {
	margin-left: 0;
	margin-right: 0;
}

/* containers */
.container-px-0 [class*='container'] {
	padding-left: 0;
	padding-right: 0;
}

.container-px-1 [class*='container'] {
	padding-left: 1px;
	padding-right: 1px;
}

.container-px-2 [class*='container'] {
	padding-left: 2px;
	padding-right: 2px;
}

.container-px-5 [class*='container'] {
	padding-left: 5px;
	padding-right: 5px;
}

.container-px-10 [class*='container'] {
	padding-left: 10px;
	padding-right: 10px;
}

.container-px-20 [class*='container'] {
	padding-left: 20px;
	padding-right: 20px;
}

.container-px-30 [class*='container'] {
	padding-left: 30px;
	padding-right: 30px;
}

.container-px-60 [class*='container'] {
	padding-left: 60px;
	padding-right: 60px;
}

/*
** Vertical margins and padding for sections and columns
*/
/* Vertical padding for sections
.s - section
pt-* - padding top value
pb-* - padding bottom value
py-* - same value for top and for bottom padding
*/
.s-pt-0 > [class*='container'] {
	padding-top: 0;
}

.s-pt-1 > [class*='container'] {
	padding-top: 1px;
}

.s-pt-2 > [class*='container'] {
	padding-top: 2px;
}

.s-pt-3 > [class*='container'] {
	padding-top: 3px;
}

.s-pt-5 > [class*='container'] {
	padding-top: 5px;
}

.s-pt-10 > [class*='container'] {
	padding-top: 10px;
}

.s-pt-15 > [class*='container'] {
	padding-top: 15px;
}

.s-pt-20 > [class*='container'] {
	padding-top: 20px;
}

.s-pt-25 > [class*='container'] {
	padding-top: 25px;
}

.s-pt-30 > [class*='container'] {
	padding-top: 30px;
}

.s-pt-50 > [class*='container'] {
	padding-top: 50px;
}

.s-pt-60 > [class*='container'] {
	padding-top: 60px;
}

.s-pt-75 > [class*='container'] {
	padding-top: 75px;
}

.s-pt-100 > [class*='container'] {
	padding-top: 100px;
}

.s-pt-130 > [class*='container'] {
	padding-top: 130px;
}

.s-pb-0 > [class*='container'] {
	padding-bottom: 0;
}

.s-pb-1 > [class*='container'] {
	padding-bottom: 1px;
}

.s-pb-2 > [class*='container'] {
	padding-bottom: 2px;
}

.s-pb-3 > [class*='container'] {
	padding-bottom: 3px;
}

.s-pb-5 > [class*='container'] {
	padding-bottom: 5px;
}

.s-pb-10 > [class*='container'] {
	padding-bottom: 10px;
}

.s-pb-15 > [class*='container'] {
	padding-bottom: 15px;
}

.s-pb-20 > [class*='container'] {
	padding-bottom: 20px;
}

.s-pb-25 > [class*='container'] {
	padding-bottom: 25px;
}

.s-pb-30 > [class*='container'] {
	padding-bottom: 30px;
}

.s-pb-50 > [class*='container'] {
	padding-bottom: 50px;
}

.s-pb-60 > [class*='container'] {
	padding-bottom: 60px;
}

.s-pb-75 > [class*='container'] {
	padding-bottom: 75px;
}

.s-pb-100 > [class*='container'] {
	padding-bottom: 100px;
}

.s-pb-130 > [class*='container'] {
	padding-bottom: 130px;
}

.s-py-0 > [class*='container'] {
	padding-bottom: 0;
	padding-top: 0;
}

.s-py-1 > [class*='container'] {
	padding-bottom: 1px;
	padding-top: 1px;
}

.s-py-2 > [class*='container'] {
	padding-bottom: 2px;
	padding-top: 2px;
}

.s-py-3 > [class*='container'] {
	padding-bottom: 3px;
	padding-top: 3px;
}

.s-py-5 > [class*='container'] {
	padding-bottom: 5px;
	padding-top: 5px;
}

.s-py-10 > [class*='container'] {
	padding-bottom: 10px;
	padding-top: 10px;
}

.s-py-15 > [class*='container'] {
	padding-bottom: 15px;
	padding-top: 15px;
}

.s-py-20 > [class*='container'] {
	padding-bottom: 20px;
	padding-top: 20px;
}

.s-py-25 > [class*='container'] {
	padding-bottom: 25px;
	padding-top: 25px;
}

.s-py-30 > [class*='container'] {
	padding-bottom: 30px;
	padding-top: 30px;
}

.s-py-50 > [class*='container'] {
	padding-bottom: 50px;
	padding-top: 50px;
}

.s-py-60 > [class*='container'] {
	padding-bottom: 60px;
	padding-top: 60px;
}

.s-py-75 > [class*='container'] {
	padding-bottom: 75px;
	padding-top: 75px;
}

.s-py-100 > [class*='container'] {
	padding-bottom: 100px;
	padding-top: 100px;
}

.s-py-130 > [class*='container'] {
	padding-bottom: 130px;
	padding-top: 130px;
}

@media (min-width: 576px) {
	.s-pt-sm-0 > [class*='container'] {
		padding-top: 0;
	}

	.s-pt-sm-1 > [class*='container'] {
		padding-top: 1px;
	}

	.s-pt-sm-2 > [class*='container'] {
		padding-top: 2px;
	}

	.s-pt-sm-3 > [class*='container'] {
		padding-top: 3px;
	}

	.s-pt-sm-5 > [class*='container'] {
		padding-top: 5px;
	}

	.s-pt-sm-10 > [class*='container'] {
		padding-top: 10px;
	}

	.s-pt-sm-15 > [class*='container'] {
		padding-top: 15px;
	}

	.s-pt-sm-20 > [class*='container'] {
		padding-top: 20px;
	}

	.s-pt-sm-25 > [class*='container'] {
		padding-top: 25px;
	}

	.s-pt-sm-30 > [class*='container'] {
		padding-top: 30px;
	}

	.s-pt-sm-50 > [class*='container'] {
		padding-top: 50px;
	}

	.s-pt-sm-60 > [class*='container'] {
		padding-top: 60px;
	}

	.s-pt-sm-75 > [class*='container'] {
		padding-top: 75px;
	}

	.s-pt-sm-100 > [class*='container'] {
		padding-top: 100px;
	}

	.s-pt-sm-130 > [class*='container'] {
		padding-top: 130px;
	}

	.s-pb-sm-0 > [class*='container'] {
		padding-bottom: 0;
	}

	.s-pb-sm-1 > [class*='container'] {
		padding-bottom: 1px;
	}

	.s-pb-sm-2 > [class*='container'] {
		padding-bottom: 2px;
	}

	.s-pb-sm-3 > [class*='container'] {
		padding-bottom: 3px;
	}

	.s-pb-sm-5 > [class*='container'] {
		padding-bottom: 5px;
	}

	.s-pb-sm-10 > [class*='container'] {
		padding-bottom: 10px;
	}

	.s-pb-sm-15 > [class*='container'] {
		padding-bottom: 15px;
	}

	.s-pb-sm-20 > [class*='container'] {
		padding-bottom: 20px;
	}

	.s-pb-sm-25 > [class*='container'] {
		padding-bottom: 25px;
	}

	.s-pb-sm-30 > [class*='container'] {
		padding-bottom: 30px;
	}

	.s-pb-sm-50 > [class*='container'] {
		padding-bottom: 50px;
	}

	.s-pb-sm-60 > [class*='container'] {
		padding-bottom: 60px;
	}

	.s-pb-sm-75 > [class*='container'] {
		padding-bottom: 75px;
	}

	.s-pb-sm-100 > [class*='container'] {
		padding-bottom: 100px;
	}

	.s-pb-sm-130 > [class*='container'] {
		padding-bottom: 130px;
	}

	.s-py-sm-0 > [class*='container'] {
		padding-bottom: 0;
		padding-top: 0;
	}

	.s-py-sm-1 > [class*='container'] {
		padding-bottom: 1px;
		padding-top: 1px;
	}

	.s-py-sm-2 > [class*='container'] {
		padding-bottom: 2px;
		padding-top: 2px;
	}

	.s-py-sm-3 > [class*='container'] {
		padding-bottom: 3px;
		padding-top: 3px;
	}

	.s-py-sm-5 > [class*='container'] {
		padding-bottom: 5px;
		padding-top: 5px;
	}

	.s-py-sm-10 > [class*='container'] {
		padding-bottom: 10px;
		padding-top: 10px;
	}

	.s-py-sm-15 > [class*='container'] {
		padding-bottom: 15px;
		padding-top: 15px;
	}

	.s-py-sm-20 > [class*='container'] {
		padding-bottom: 20px;
		padding-top: 20px;
	}

	.s-py-sm-25 > [class*='container'] {
		padding-bottom: 25px;
		padding-top: 25px;
	}

	.s-py-sm-30 > [class*='container'] {
		padding-bottom: 30px;
		padding-top: 30px;
	}

	.s-py-sm-50 > [class*='container'] {
		padding-bottom: 50px;
		padding-top: 50px;
	}

	.s-py-sm-60 > [class*='container'] {
		padding-bottom: 60px;
		padding-top: 60px;
	}

	.s-py-sm-75 > [class*='container'] {
		padding-bottom: 75px;
		padding-top: 75px;
	}

	.s-py-sm-100 > [class*='container'] {
		padding-bottom: 100px;
		padding-top: 100px;
	}

	.s-py-sm-130 > [class*='container'] {
		padding-bottom: 130px;
		padding-top: 130px;
	}
}

@media (min-width: 768px) {
	.s-pt-md-0 > [class*='container'] {
		padding-top: 0;
	}

	.s-pt-md-1 > [class*='container'] {
		padding-top: 1px;
	}

	.s-pt-md-2 > [class*='container'] {
		padding-top: 2px;
	}

	.s-pt-md-3 > [class*='container'] {
		padding-top: 3px;
	}

	.s-pt-md-5 > [class*='container'] {
		padding-top: 5px;
	}

	.s-pt-md-10 > [class*='container'] {
		padding-top: 10px;
	}

	.s-pt-md-15 > [class*='container'] {
		padding-top: 15px;
	}

	.s-pt-md-20 > [class*='container'] {
		padding-top: 20px;
	}

	.s-pt-md-25 > [class*='container'] {
		padding-top: 25px;
	}

	.s-pt-md-30 > [class*='container'] {
		padding-top: 30px;
	}

	.s-pt-md-50 > [class*='container'] {
		padding-top: 50px;
	}

	.s-pt-md-60 > [class*='container'] {
		padding-top: 60px;
	}

	.s-pt-md-75 > [class*='container'] {
		padding-top: 75px;
	}

	.s-pt-md-100 > [class*='container'] {
		padding-top: 100px;
	}

	.s-pt-md-130 > [class*='container'] {
		padding-top: 130px;
	}

	.s-pb-md-0 > [class*='container'] {
		padding-bottom: 0;
	}

	.s-pb-md-1 > [class*='container'] {
		padding-bottom: 1px;
	}

	.s-pb-md-2 > [class*='container'] {
		padding-bottom: 2px;
	}

	.s-pb-md-3 > [class*='container'] {
		padding-bottom: 3px;
	}

	.s-pb-md-5 > [class*='container'] {
		padding-bottom: 5px;
	}

	.s-pb-md-10 > [class*='container'] {
		padding-bottom: 10px;
	}

	.s-pb-md-15 > [class*='container'] {
		padding-bottom: 15px;
	}

	.s-pb-md-20 > [class*='container'] {
		padding-bottom: 20px;
	}

	.s-pb-md-25 > [class*='container'] {
		padding-bottom: 25px;
	}

	.s-pb-md-30 > [class*='container'] {
		padding-bottom: 30px;
	}

	.s-pb-md-50 > [class*='container'] {
		padding-bottom: 50px;
	}

	.s-pb-md-60 > [class*='container'] {
		padding-bottom: 60px;
	}

	.s-pb-md-75 > [class*='container'] {
		padding-bottom: 75px;
	}

	.s-pb-md-100 > [class*='container'] {
		padding-bottom: 100px;
	}

	.s-pb-md-130 > [class*='container'] {
		padding-bottom: 130px;
	}

	.s-py-md-0 > [class*='container'] {
		padding-bottom: 0;
		padding-top: 0;
	}

	.s-py-md-1 > [class*='container'] {
		padding-bottom: 1px;
		padding-top: 1px;
	}

	.s-py-md-2 > [class*='container'] {
		padding-bottom: 2px;
		padding-top: 2px;
	}

	.s-py-md-3 > [class*='container'] {
		padding-bottom: 3px;
		padding-top: 3px;
	}

	.s-py-md-5 > [class*='container'] {
		padding-bottom: 5px;
		padding-top: 5px;
	}

	.s-py-md-10 > [class*='container'] {
		padding-bottom: 10px;
		padding-top: 10px;
	}

	.s-py-md-15 > [class*='container'] {
		padding-bottom: 15px;
		padding-top: 15px;
	}

	.s-py-md-20 > [class*='container'] {
		padding-bottom: 20px;
		padding-top: 20px;
	}

	.s-py-md-25 > [class*='container'] {
		padding-bottom: 25px;
		padding-top: 25px;
	}

	.s-py-md-30 > [class*='container'] {
		padding-bottom: 30px;
		padding-top: 30px;
	}

	.s-py-md-50 > [class*='container'] {
		padding-bottom: 50px;
		padding-top: 50px;
	}

	.s-py-md-60 > [class*='container'] {
		padding-bottom: 60px;
		padding-top: 60px;
	}

	.s-py-md-75 > [class*='container'] {
		padding-bottom: 75px;
		padding-top: 75px;
	}

	.s-py-md-100 > [class*='container'] {
		padding-bottom: 100px;
		padding-top: 100px;
	}

	.s-py-md-130 > [class*='container'] {
		padding-bottom: 130px;
		padding-top: 130px;
	}
}

@media (min-width: 992px) {
	.s-pt-lg-0 > [class*='container'] {
		padding-top: 0;
	}

	.s-pt-lg-1 > [class*='container'] {
		padding-top: 1px;
	}

	.s-pt-lg-2 > [class*='container'] {
		padding-top: 2px;
	}

	.s-pt-lg-3 > [class*='container'] {
		padding-top: 3px;
	}

	.s-pt-lg-5 > [class*='container'] {
		padding-top: 5px;
	}

	.s-pt-lg-10 > [class*='container'] {
		padding-top: 10px;
	}

	.s-pt-lg-15 > [class*='container'] {
		padding-top: 15px;
	}

	.s-pt-lg-20 > [class*='container'] {
		padding-top: 20px;
	}

	.s-pt-lg-25 > [class*='container'] {
		padding-top: 25px;
	}

	.s-pt-lg-30 > [class*='container'] {
		padding-top: 30px;
	}

	.s-pt-lg-50 > [class*='container'] {
		padding-top: 50px;
	}

	.s-pt-lg-60 > [class*='container'] {
		padding-top: 60px;
	}

	.s-pt-lg-75 > [class*='container'] {
		padding-top: 75px;
	}

	.s-pt-lg-100 > [class*='container'] {
		padding-top: 100px;
	}

	.s-pt-lg-130 > [class*='container'] {
		padding-top: 130px;
	}

	.s-pb-lg-0 > [class*='container'] {
		padding-bottom: 0;
	}

	.s-pb-lg-1 > [class*='container'] {
		padding-bottom: 1px;
	}

	.s-pb-lg-2 > [class*='container'] {
		padding-bottom: 2px;
	}

	.s-pb-lg-3 > [class*='container'] {
		padding-bottom: 3px;
	}

	.s-pb-lg-5 > [class*='container'] {
		padding-bottom: 5px;
	}

	.s-pb-lg-10 > [class*='container'] {
		padding-bottom: 10px;
	}

	.s-pb-lg-15 > [class*='container'] {
		padding-bottom: 15px;
	}

	.s-pb-lg-20 > [class*='container'] {
		padding-bottom: 20px;
	}

	.s-pb-lg-25 > [class*='container'] {
		padding-bottom: 25px;
	}

	.s-pb-lg-30 > [class*='container'] {
		padding-bottom: 30px;
	}

	.s-pb-lg-50 > [class*='container'] {
		padding-bottom: 50px;
	}

	.s-pb-lg-60 > [class*='container'] {
		padding-bottom: 60px;
	}

	.s-pb-lg-75 > [class*='container'] {
		padding-bottom: 75px;
	}

	.s-pb-lg-100 > [class*='container'] {
		padding-bottom: 100px;
	}

	.s-pb-lg-130 > [class*='container'] {
		padding-bottom: 130px;
	}

	.s-py-lg-0 > [class*='container'] {
		padding-bottom: 0;
		padding-top: 0;
	}

	.s-py-lg-1 > [class*='container'] {
		padding-bottom: 1px;
		padding-top: 1px;
	}

	.s-py-lg-2 > [class*='container'] {
		padding-bottom: 2px;
		padding-top: 2px;
	}

	.s-py-lg-3 > [class*='container'] {
		padding-bottom: 3px;
		padding-top: 3px;
	}

	.s-py-lg-5 > [class*='container'] {
		padding-bottom: 5px;
		padding-top: 5px;
	}

	.s-py-lg-10 > [class*='container'] {
		padding-bottom: 10px;
		padding-top: 10px;
	}

	.s-py-lg-15 > [class*='container'] {
		padding-bottom: 15px;
		padding-top: 15px;
	}

	.s-py-lg-20 > [class*='container'] {
		padding-bottom: 20px;
		padding-top: 20px;
	}

	.s-py-lg-25 > [class*='container'] {
		padding-bottom: 25px;
		padding-top: 25px;
	}

	.s-py-lg-30 > [class*='container'] {
		padding-bottom: 30px;
		padding-top: 30px;
	}

	.s-py-lg-50 > [class*='container'] {
		padding-bottom: 50px;
		padding-top: 50px;
	}

	.s-py-lg-60 > [class*='container'] {
		padding-bottom: 60px;
		padding-top: 60px;
	}

	.s-py-lg-75 > [class*='container'] {
		padding-bottom: 75px;
		padding-top: 75px;
	}

	.s-py-lg-100 > [class*='container'] {
		padding-bottom: 100px;
		padding-top: 100px;
	}

	.s-py-lg-130 > [class*='container'] {
		padding-bottom: 130px;
		padding-top: 130px;
	}
}

@media (min-width: 1200px) {
	.s-pt-xl-0 > [class*='container'] {
		padding-top: 0;
	}

	.s-pt-xl-1 > [class*='container'] {
		padding-top: 1px;
	}

	.s-pt-xl-2 > [class*='container'] {
		padding-top: 2px;
	}

	.s-pt-xl-3 > [class*='container'] {
		padding-top: 3px;
	}

	.s-pt-xl-5 > [class*='container'] {
		padding-top: 5px;
	}

	.s-pt-xl-10 > [class*='container'] {
		padding-top: 10px;
	}

	.s-pt-xl-15 > [class*='container'] {
		padding-top: 15px;
	}

	.s-pt-xl-20 > [class*='container'] {
		padding-top: 20px;
	}

	.s-pt-xl-25 > [class*='container'] {
		padding-top: 25px;
	}

	.s-pt-xl-30 > [class*='container'] {
		padding-top: 30px;
	}

	.s-pt-xl-50 > [class*='container'] {
		padding-top: 50px;
	}

	.s-pt-xl-60 > [class*='container'] {
		padding-top: 60px;
	}

	.s-pt-xl-75 > [class*='container'] {
		padding-top: 75px;
	}

	.s-pt-xl-100 > [class*='container'] {
		padding-top: 100px;
	}

	.s-pt-xl-130 > [class*='container'] {
		padding-top: 130px;
	}

	.s-pb-xl-0 > [class*='container'] {
		padding-bottom: 0;
	}

	.s-pb-xl-1 > [class*='container'] {
		padding-bottom: 1px;
	}

	.s-pb-xl-2 > [class*='container'] {
		padding-bottom: 2px;
	}

	.s-pb-xl-3 > [class*='container'] {
		padding-bottom: 3px;
	}

	.s-pb-xl-5 > [class*='container'] {
		padding-bottom: 5px;
	}

	.s-pb-xl-10 > [class*='container'] {
		padding-bottom: 10px;
	}

	.s-pb-xl-15 > [class*='container'] {
		padding-bottom: 15px;
	}

	.s-pb-xl-20 > [class*='container'] {
		padding-bottom: 20px;
	}

	.s-pb-xl-25 > [class*='container'] {
		padding-bottom: 25px;
	}

	.s-pb-xl-30 > [class*='container'] {
		padding-bottom: 30px;
	}

	.s-pb-xl-50 > [class*='container'] {
		padding-bottom: 50px;
	}

	.s-pb-xl-60 > [class*='container'] {
		padding-bottom: 60px;
	}

	.s-pb-xl-75 > [class*='container'] {
		padding-bottom: 75px;
	}

	.s-pb-xl-100 > [class*='container'] {
		padding-bottom: 100px;
	}

	.s-pb-xl-130 > [class*='container'] {
		padding-bottom: 130px;
	}

	.s-py-xl-0 > [class*='container'] {
		padding-bottom: 0;
		padding-top: 0;
	}

	.s-py-xl-1 > [class*='container'] {
		padding-bottom: 1px;
		padding-top: 1px;
	}

	.s-py-xl-2 > [class*='container'] {
		padding-bottom: 2px;
		padding-top: 2px;
	}

	.s-py-xl-3 > [class*='container'] {
		padding-bottom: 3px;
		padding-top: 3px;
	}

	.s-py-xl-5 > [class*='container'] {
		padding-bottom: 5px;
		padding-top: 5px;
	}

	.s-py-xl-10 > [class*='container'] {
		padding-bottom: 10px;
		padding-top: 10px;
	}

	.s-py-xl-15 > [class*='container'] {
		padding-bottom: 15px;
		padding-top: 15px;
	}

	.s-py-xl-20 > [class*='container'] {
		padding-bottom: 20px;
		padding-top: 20px;
	}

	.s-py-xl-25 > [class*='container'] {
		padding-bottom: 25px;
		padding-top: 25px;
	}

	.s-py-xl-30 > [class*='container'] {
		padding-bottom: 30px;
		padding-top: 30px;
	}

	.s-py-xl-50 > [class*='container'] {
		padding-bottom: 50px;
		padding-top: 50px;
	}

	.s-py-xl-60 > [class*='container'] {
		padding-bottom: 60px;
		padding-top: 60px;
	}

	.s-py-xl-75 > [class*='container'] {
		padding-bottom: 75px;
		padding-top: 75px;
	}

	.s-py-xl-100 > [class*='container'] {
		padding-bottom: 100px;
		padding-top: 100px;
	}

	.s-py-xl-130 > [class*='container'] {
		padding-bottom: 130px;
		padding-top: 130px;
	}
}

/* Vertical margins for columns in sections and rows
.c - columns
mt-* - margin top value
mb-* - margin bottom value
my-* - same value for top and for bottom margin
*/
.c-mt-0 [class*="col-"],
.row.c-mt-0 > [class*="col-"] {
	margin-top: 0;
}

.c-mt-1 [class*="col-"],
.row.c-mt-1 > [class*="col-"] {
	margin-top: 1px;
}

.c-mt-2 [class*="col-"],
.row.c-mt-2 > [class*="col-"] {
	margin-top: 2px;
}

.c-mt-5 [class*="col-"],
.row.c-mt-5 > [class*="col-"] {
	margin-top: 5px;
}

.c-mt-10 [class*="col-"],
.row.c-mt-10 > [class*="col-"] {
	margin-top: 10px;
}

.c-mt-15 [class*="col-"],
.row.c-mt-15 > [class*="col-"] {
	margin-top: 15px;
}

.c-mt-20 [class*="col-"],
.row.c-mt-20 > [class*="col-"] {
	margin-top: 20px;
}

.c-mt-25 [class*="col-"],
.row.c-mt-25 > [class*="col-"] {
	margin-top: 25px;
}

.c-mt-30 [class*="col-"],
.row.c-mt-30 > [class*="col-"] {
	margin-top: 30px;
}

.c-mt-40 [class*="col-"],
.row.c-mt-40 > [class*="col-"] {
	margin-top: 40px;
}

.c-mt-50 [class*="col-"],
.row.c-mt-50 > [class*="col-"] {
	margin-top: 50px;
}

.c-mt-60 [class*="col-"],
.row.c-mt-60 > [class*="col-"] {
	margin-top: 60px;
}

.c-mb-0 [class*="col-"],
.row.c-mb-0 > [class*="col-"] {
	margin-bottom: 0;
}

.c-mb-1 [class*="col-"],
.row.c-mb-1 > [class*="col-"] {
	margin-bottom: 1px;
}

.c-mb-2 [class*="col-"],
.row.c-mb-2 > [class*="col-"] {
	margin-bottom: 2px;
}

.c-mb-5 [class*="col-"],
.row.c-mb-5 > [class*="col-"] {
	margin-bottom: 5px;
}

.c-mb-10 [class*="col-"],
.row.c-mb-10 > [class*="col-"] {
	margin-bottom: 10px;
}

.c-mb-15 [class*="col-"],
.row.c-mb-15 > [class*="col-"] {
	margin-bottom: 15px;
}

.c-mb-20 [class*="col-"],
.row.c-mb-20 > [class*="col-"] {
	margin-bottom: 20px;
}

.c-mb-25 [class*="col-"],
.row.c-mb-25 > [class*="col-"] {
	margin-bottom: 25px;
}

.c-mb-30 [class*="col-"],
.row.c-mb-30 > [class*="col-"] {
	margin-bottom: 30px;
}

.c-mb-40 [class*="col-"],
.row.c-mb-40 > [class*="col-"] {
	margin-bottom: 40px;
}

.c-mb-50 [class*="col-"],
.row.c-mb-50 > [class*="col-"] {
	margin-bottom: 50px;
}

.c-mb-60 [class*="col-"],
.row.c-mb-60 > [class*="col-"] {
	margin-bottom: 60px;
}

.c-my-0 [class*="col-"],
.row.c-my-0 > [class*="col-"] {
	margin-bottom: 0;
	margin-top: 0;
}

.c-my-1 [class*="col-"],
.row.c-my-1 > [class*="col-"] {
	margin-bottom: 1px;
	margin-top: 1px;
}

.c-my-2 [class*="col-"],
.row.c-my-2 > [class*="col-"] {
	margin-bottom: 2px;
	margin-top: 2px;
}

.c-my-5 [class*="col-"],
.row.c-my-5 > [class*="col-"] {
	margin-bottom: 5px;
	margin-top: 5px;
}

.c-my-10 [class*="col-"],
.row.c-my-10 > [class*="col-"] {
	margin-bottom: 10px;
	margin-top: 10px;
}

.c-my-15 [class*="col-"],
.row.c-my-15 > [class*="col-"] {
	margin-bottom: 15px;
	margin-top: 15px;
}

.c-my-20 [class*="col-"],
.row.c-my-20 > [class*="col-"] {
	margin-bottom: 20px;
	margin-top: 20px;
}

.c-my-25 [class*="col-"],
.row.c-my-25 > [class*="col-"] {
	margin-bottom: 25px;
	margin-top: 25px;
}

.c-my-30 [class*="col-"],
.row.c-my-30 > [class*="col-"] {
	margin-bottom: 30px;
	margin-top: 30px;
}

.c-my-40 [class*="col-"],
.row.c-my-40 > [class*="col-"] {
	margin-bottom: 40px;
	margin-top: 40px;
}

.c-my-50 [class*="col-"],
.row.c-my-50 > [class*="col-"] {
	margin-bottom: 50px;
	margin-top: 50px;
}

.c-my-60 [class*="col-"],
.row.c-my-60 > [class*="col-"] {
	margin-bottom: 60px;
	margin-top: 60px;
}

@media (min-width: 576px) {
	.c-mt-sm-0 [class*="col-"],
	.row.c-mt-sm-0 > [class*="col-"] {
		margin-top: 0;
	}

	.c-mt-sm-1 [class*="col-"],
	.row.c-mt-sm-1 > [class*="col-"] {
		margin-top: 1px;
	}

	.c-mt-sm-2 [class*="col-"],
	.row.c-mt-sm-2 > [class*="col-"] {
		margin-top: 2px;
	}

	.c-mt-sm-5 [class*="col-"],
	.row.c-mt-sm-5 > [class*="col-"] {
		margin-top: 5px;
	}

	.c-mt-sm-10 [class*="col-"],
	.row.c-mt-sm-10 > [class*="col-"] {
		margin-top: 10px;
	}

	.c-mt-sm-15 [class*="col-"],
	.row.c-mt-sm-15 > [class*="col-"] {
		margin-top: 15px;
	}

	.c-mt-sm-20 [class*="col-"],
	.row.c-mt-sm-20 > [class*="col-"] {
		margin-top: 20px;
	}

	.c-mt-sm-25 [class*="col-"],
	.row.c-mt-sm-25 > [class*="col-"] {
		margin-top: 25px;
	}

	.c-mt-sm-30 [class*="col-"],
	.row.c-mt-sm-30 > [class*="col-"] {
		margin-top: 30px;
	}

	.c-mt-sm-40 [class*="col-"],
	.row.c-mt-sm-40 > [class*="col-"] {
		margin-top: 40px;
	}

	.c-mt-sm-50 [class*="col-"],
	.row.c-mt-sm-50 > [class*="col-"] {
		margin-top: 50px;
	}

	.c-mt-sm-60 [class*="col-"],
	.row.c-mt-sm-60 > [class*="col-"] {
		margin-top: 60px;
	}

	.c-mb-sm-0 [class*="col-"],
	.row.c-mb-sm-0 > [class*="col-"] {
		margin-bottom: 0;
	}

	.c-mb-sm-1 [class*="col-"],
	.row.c-mb-sm-1 > [class*="col-"] {
		margin-bottom: 1px;
	}

	.c-mb-sm-2 [class*="col-"],
	.row.c-mb-sm-2 > [class*="col-"] {
		margin-bottom: 2px;
	}

	.c-mb-sm-5 [class*="col-"],
	.row.c-mb-sm-5 > [class*="col-"] {
		margin-bottom: 5px;
	}

	.c-mb-sm-10 [class*="col-"],
	.row.c-mb-sm-10 > [class*="col-"] {
		margin-bottom: 10px;
	}

	.c-mb-sm-15 [class*="col-"],
	.row.c-mb-sm-15 > [class*="col-"] {
		margin-bottom: 15px;
	}

	.c-mb-sm-20 [class*="col-"],
	.row.c-mb-sm-20 > [class*="col-"] {
		margin-bottom: 20px;
	}

	.c-mb-sm-25 [class*="col-"],
	.row.c-mb-sm-25 > [class*="col-"] {
		margin-bottom: 25px;
	}

	.c-mb-sm-30 [class*="col-"],
	.row.c-mb-sm-30 > [class*="col-"] {
		margin-bottom: 30px;
	}

	.c-mb-sm-40 [class*="col-"],
	.row.c-mb-sm-40 > [class*="col-"] {
		margin-bottom: 40px;
	}

	.c-mb-sm-50 [class*="col-"],
	.row.c-mb-sm-50 > [class*="col-"] {
		margin-bottom: 50px;
	}

	.c-mb-sm-60 [class*="col-"],
	.row.c-mb-sm-60 > [class*="col-"] {
		margin-bottom: 60px;
	}

	.c-my-sm-0 [class*="col-"],
	.row.c-my-sm-0 > [class*="col-"] {
		margin-bottom: 0;
		margin-top: 0;
	}

	.c-my-sm-1 [class*="col-"],
	.row.c-my-sm-1 > [class*="col-"] {
		margin-bottom: 1px;
		margin-top: 1px;
	}

	.c-my-sm-2 [class*="col-"],
	.row.c-my-sm-2 > [class*="col-"] {
		margin-bottom: 2px;
		margin-top: 2px;
	}

	.c-my-sm-5 [class*="col-"],
	.row.c-my-sm-5 > [class*="col-"] {
		margin-bottom: 5px;
		margin-top: 5px;
	}

	.c-my-sm-10 [class*="col-"],
	.row.c-my-sm-10 > [class*="col-"] {
		margin-bottom: 10px;
		margin-top: 10px;
	}

	.c-my-sm-15 [class*="col-"],
	.row.c-my-sm-15 > [class*="col-"] {
		margin-bottom: 15px;
		margin-top: 15px;
	}

	.c-my-sm-20 [class*="col-"],
	.row.c-my-sm-20 > [class*="col-"] {
		margin-bottom: 20px;
		margin-top: 20px;
	}

	.c-my-sm-25 [class*="col-"],
	.row.c-my-sm-25 > [class*="col-"] {
		margin-bottom: 25px;
		margin-top: 25px;
	}

	.c-my-sm-30 [class*="col-"],
	.row.c-my-sm-30 > [class*="col-"] {
		margin-bottom: 30px;
		margin-top: 30px;
	}

	.c-my-sm-40 [class*="col-"],
	.row.c-my-sm-40 > [class*="col-"] {
		margin-bottom: 40px;
		margin-top: 40px;
	}

	.c-my-sm-50 [class*="col-"],
	.row.c-my-sm-50 > [class*="col-"] {
		margin-bottom: 50px;
		margin-top: 50px;
	}

	.c-my-sm-60 [class*="col-"],
	.row.c-my-sm-60 > [class*="col-"] {
		margin-bottom: 60px;
		margin-top: 60px;
	}
}

@media (min-width: 768px) {
	.c-mt-md-0 [class*="col-"],
	.row.c-mt-md-0 > [class*="col-"] {
		margin-top: 0;
	}

	.c-mt-md-1 [class*="col-"],
	.row.c-mt-md-1 > [class*="col-"] {
		margin-top: 1px;
	}

	.c-mt-md-2 [class*="col-"],
	.row.c-mt-md-2 > [class*="col-"] {
		margin-top: 2px;
	}

	.c-mt-md-5 [class*="col-"],
	.row.c-mt-md-5 > [class*="col-"] {
		margin-top: 5px;
	}

	.c-mt-md-10 [class*="col-"],
	.row.c-mt-md-10 > [class*="col-"] {
		margin-top: 10px;
	}

	.c-mt-md-15 [class*="col-"],
	.row.c-mt-md-15 > [class*="col-"] {
		margin-top: 15px;
	}

	.c-mt-md-20 [class*="col-"],
	.row.c-mt-md-20 > [class*="col-"] {
		margin-top: 20px;
	}

	.c-mt-md-25 [class*="col-"],
	.row.c-mt-md-25 > [class*="col-"] {
		margin-top: 25px;
	}

	.c-mt-md-30 [class*="col-"],
	.row.c-mt-md-30 > [class*="col-"] {
		margin-top: 30px;
	}

	.c-mt-md-40 [class*="col-"],
	.row.c-mt-md-40 > [class*="col-"] {
		margin-top: 40px;
	}

	.c-mt-md-50 [class*="col-"],
	.row.c-mt-md-50 > [class*="col-"] {
		margin-top: 50px;
	}

	.c-mt-md-60 [class*="col-"],
	.row.c-mt-md-60 > [class*="col-"] {
		margin-top: 60px;
	}

	.c-mb-md-0 [class*="col-"],
	.row.c-mb-md-0 > [class*="col-"] {
		margin-bottom: 0;
	}

	.c-mb-md-1 [class*="col-"],
	.row.c-mb-md-1 > [class*="col-"] {
		margin-bottom: 1px;
	}

	.c-mb-md-2 [class*="col-"],
	.row.c-mb-md-2 > [class*="col-"] {
		margin-bottom: 2px;
	}

	.c-mb-md-5 [class*="col-"],
	.row.c-mb-md-5 > [class*="col-"] {
		margin-bottom: 5px;
	}

	.c-mb-md-10 [class*="col-"],
	.row.c-mb-md-10 > [class*="col-"] {
		margin-bottom: 10px;
	}

	.c-mb-md-15 [class*="col-"],
	.row.c-mb-md-15 > [class*="col-"] {
		margin-bottom: 15px;
	}

	.c-mb-md-20 [class*="col-"],
	.row.c-mb-md-20 > [class*="col-"] {
		margin-bottom: 20px;
	}

	.c-mb-md-25 [class*="col-"],
	.row.c-mb-md-25 > [class*="col-"] {
		margin-bottom: 25px;
	}

	.c-mb-md-30 [class*="col-"],
	.row.c-mb-md-30 > [class*="col-"] {
		margin-bottom: 30px;
	}

	.c-mb-md-40 [class*="col-"],
	.row.c-mb-md-40 > [class*="col-"] {
		margin-bottom: 40px;
	}

	.c-mb-md-50 [class*="col-"],
	.row.c-mb-md-50 > [class*="col-"] {
		margin-bottom: 50px;
	}

	.c-mb-md-60 [class*="col-"],
	.row.c-mb-md-60 > [class*="col-"] {
		margin-bottom: 60px;
	}

	.c-my-md-0 [class*="col-"],
	.row.c-my-md-0 > [class*="col-"] {
		margin-bottom: 0;
		margin-top: 0;
	}

	.c-my-md-1 [class*="col-"],
	.row.c-my-md-1 > [class*="col-"] {
		margin-bottom: 1px;
		margin-top: 1px;
	}

	.c-my-md-2 [class*="col-"],
	.row.c-my-md-2 > [class*="col-"] {
		margin-bottom: 2px;
		margin-top: 2px;
	}

	.c-my-md-5 [class*="col-"],
	.row.c-my-md-5 > [class*="col-"] {
		margin-bottom: 5px;
		margin-top: 5px;
	}

	.c-my-md-10 [class*="col-"],
	.row.c-my-md-10 > [class*="col-"] {
		margin-bottom: 10px;
		margin-top: 10px;
	}

	.c-my-md-15 [class*="col-"],
	.row.c-my-md-15 > [class*="col-"] {
		margin-bottom: 15px;
		margin-top: 15px;
	}

	.c-my-md-20 [class*="col-"],
	.row.c-my-md-20 > [class*="col-"] {
		margin-bottom: 20px;
		margin-top: 20px;
	}

	.c-my-md-25 [class*="col-"],
	.row.c-my-md-25 > [class*="col-"] {
		margin-bottom: 25px;
		margin-top: 25px;
	}

	.c-my-md-30 [class*="col-"],
	.row.c-my-md-30 > [class*="col-"] {
		margin-bottom: 30px;
		margin-top: 30px;
	}

	.c-my-md-40 [class*="col-"],
	.row.c-my-md-40 > [class*="col-"] {
		margin-bottom: 40px;
		margin-top: 40px;
	}

	.c-my-md-50 [class*="col-"],
	.row.c-my-md-50 > [class*="col-"] {
		margin-bottom: 50px;
		margin-top: 50px;
	}

	.c-my-md-60 [class*="col-"],
	.row.c-my-md-60 > [class*="col-"] {
		margin-bottom: 60px;
		margin-top: 60px;
	}
}

@media (min-width: 992px) {
	.c-mt-lg-0 [class*="col-"],
	.row.c-mt-lg-0 > [class*="col-"] {
		margin-top: 0;
	}

	.c-mt-lg-1 [class*="col-"],
	.row.c-mt-lg-1 > [class*="col-"] {
		margin-top: 1px;
	}

	.c-mt-lg-2 [class*="col-"],
	.row.c-mt-lg-2 > [class*="col-"] {
		margin-top: 2px;
	}

	.c-mt-lg-5 [class*="col-"],
	.row.c-mt-lg-5 > [class*="col-"] {
		margin-top: 5px;
	}

	.c-mt-lg-10 [class*="col-"],
	.row.c-mt-lg-10 > [class*="col-"] {
		margin-top: 10px;
	}

	.c-mt-lg-15 [class*="col-"],
	.row.c-mt-lg-15 > [class*="col-"] {
		margin-top: 15px;
	}

	.c-mt-lg-20 [class*="col-"],
	.row.c-mt-lg-20 > [class*="col-"] {
		margin-top: 20px;
	}

	.c-mt-lg-25 [class*="col-"],
	.row.c-mt-lg-25 > [class*="col-"] {
		margin-top: 25px;
	}

	.c-mt-lg-30 [class*="col-"],
	.row.c-mt-lg-30 > [class*="col-"] {
		margin-top: 30px;
	}

	.c-mt-lg-40 [class*="col-"],
	.row.c-mt-lg-40 > [class*="col-"] {
		margin-top: 40px;
	}

	.c-mt-lg-50 [class*="col-"],
	.row.c-mt-lg-50 > [class*="col-"] {
		margin-top: 50px;
	}

	.c-mt-lg-60 [class*="col-"],
	.row.c-mt-lg-60 > [class*="col-"] {
		margin-top: 60px;
	}

	.c-mb-lg-0 [class*="col-"],
	.row.c-mb-lg-0 > [class*="col-"] {
		margin-bottom: 0;
	}

	.c-mb-lg-1 [class*="col-"],
	.row.c-mb-lg-1 > [class*="col-"] {
		margin-bottom: 1px;
	}

	.c-mb-lg-2 [class*="col-"],
	.row.c-mb-lg-2 > [class*="col-"] {
		margin-bottom: 2px;
	}

	.c-mb-lg-5 [class*="col-"],
	.row.c-mb-lg-5 > [class*="col-"] {
		margin-bottom: 5px;
	}

	.c-mb-lg-10 [class*="col-"],
	.row.c-mb-lg-10 > [class*="col-"] {
		margin-bottom: 10px;
	}

	.c-mb-lg-15 [class*="col-"],
	.row.c-mb-lg-15 > [class*="col-"] {
		margin-bottom: 15px;
	}

	.c-mb-lg-20 [class*="col-"],
	.row.c-mb-lg-20 > [class*="col-"] {
		margin-bottom: 20px;
	}

	.c-mb-lg-25 [class*="col-"],
	.row.c-mb-lg-25 > [class*="col-"] {
		margin-bottom: 25px;
	}

	.c-mb-lg-30 [class*="col-"],
	.row.c-mb-lg-30 > [class*="col-"] {
		margin-bottom: 30px;
	}

	.c-mb-lg-40 [class*="col-"],
	.row.c-mb-lg-40 > [class*="col-"] {
		margin-bottom: 40px;
	}

	.c-mb-lg-50 [class*="col-"],
	.row.c-mb-lg-50 > [class*="col-"] {
		margin-bottom: 50px;
	}

	.c-mb-lg-60 [class*="col-"],
	.row.c-mb-lg-60 > [class*="col-"] {
		margin-bottom: 60px;
	}

	.c-my-lg-0 [class*="col-"],
	.row.c-my-lg-0 > [class*="col-"] {
		margin-bottom: 0;
		margin-top: 0;
	}

	.c-my-lg-1 [class*="col-"],
	.row.c-my-lg-1 > [class*="col-"] {
		margin-bottom: 1px;
		margin-top: 1px;
	}

	.c-my-lg-2 [class*="col-"],
	.row.c-my-lg-2 > [class*="col-"] {
		margin-bottom: 2px;
		margin-top: 2px;
	}

	.c-my-lg-5 [class*="col-"],
	.row.c-my-lg-5 > [class*="col-"] {
		margin-bottom: 5px;
		margin-top: 5px;
	}

	.c-my-lg-10 [class*="col-"],
	.row.c-my-lg-10 > [class*="col-"] {
		margin-bottom: 10px;
		margin-top: 10px;
	}

	.c-my-lg-15 [class*="col-"],
	.row.c-my-lg-15 > [class*="col-"] {
		margin-bottom: 15px;
		margin-top: 15px;
	}

	.c-my-lg-20 [class*="col-"],
	.row.c-my-lg-20 > [class*="col-"] {
		margin-bottom: 20px;
		margin-top: 20px;
	}

	.c-my-lg-25 [class*="col-"],
	.row.c-my-lg-25 > [class*="col-"] {
		margin-bottom: 25px;
		margin-top: 25px;
	}

	.c-my-lg-30 [class*="col-"],
	.row.c-my-lg-30 > [class*="col-"] {
		margin-bottom: 30px;
		margin-top: 30px;
	}

	.c-my-lg-40 [class*="col-"],
	.row.c-my-lg-40 > [class*="col-"] {
		margin-bottom: 40px;
		margin-top: 40px;
	}

	.c-my-lg-50 [class*="col-"],
	.row.c-my-lg-50 > [class*="col-"] {
		margin-bottom: 50px;
		margin-top: 50px;
	}

	.c-my-lg-60 [class*="col-"],
	.row.c-my-lg-60 > [class*="col-"] {
		margin-bottom: 60px;
		margin-top: 60px;
	}
}

@media (min-width: 1200px) {
	.c-mt-xl-0 [class*="col-"],
	.row.c-mt-xl-0 > [class*="col-"] {
		margin-top: 0;
	}

	.c-mt-xl-1 [class*="col-"],
	.row.c-mt-xl-1 > [class*="col-"] {
		margin-top: 1px;
	}

	.c-mt-xl-2 [class*="col-"],
	.row.c-mt-xl-2 > [class*="col-"] {
		margin-top: 2px;
	}

	.c-mt-xl-5 [class*="col-"],
	.row.c-mt-xl-5 > [class*="col-"] {
		margin-top: 5px;
	}

	.c-mt-xl-10 [class*="col-"],
	.row.c-mt-xl-10 > [class*="col-"] {
		margin-top: 10px;
	}

	.c-mt-xl-15 [class*="col-"],
	.row.c-mt-xl-15 > [class*="col-"] {
		margin-top: 15px;
	}

	.c-mt-xl-20 [class*="col-"],
	.row.c-mt-xl-20 > [class*="col-"] {
		margin-top: 20px;
	}

	.c-mt-xl-25 [class*="col-"],
	.row.c-mt-xl-25 > [class*="col-"] {
		margin-top: 25px;
	}

	.c-mt-xl-30 [class*="col-"],
	.row.c-mt-xl-30 > [class*="col-"] {
		margin-top: 30px;
	}

	.c-mt-xl-40 [class*="col-"],
	.row.c-mt-xl-40 > [class*="col-"] {
		margin-top: 40px;
	}

	.c-mt-xl-50 [class*="col-"],
	.row.c-mt-xl-50 > [class*="col-"] {
		margin-top: 50px;
	}

	.c-mt-xl-60 [class*="col-"],
	.row.c-mt-xl-60 > [class*="col-"] {
		margin-top: 60px;
	}

	.c-mb-xl-0 [class*="col-"],
	.row.c-mb-xl-0 > [class*="col-"] {
		margin-bottom: 0;
	}

	.c-mb-xl-1 [class*="col-"],
	.row.c-mb-xl-1 > [class*="col-"] {
		margin-bottom: 1px;
	}

	.c-mb-xl-2 [class*="col-"],
	.row.c-mb-xl-2 > [class*="col-"] {
		margin-bottom: 2px;
	}

	.c-mb-xl-5 [class*="col-"],
	.row.c-mb-xl-5 > [class*="col-"] {
		margin-bottom: 5px;
	}

	.c-mb-xl-10 [class*="col-"],
	.row.c-mb-xl-10 > [class*="col-"] {
		margin-bottom: 10px;
	}

	.c-mb-xl-15 [class*="col-"],
	.row.c-mb-xl-15 > [class*="col-"] {
		margin-bottom: 15px;
	}

	.c-mb-xl-20 [class*="col-"],
	.row.c-mb-xl-20 > [class*="col-"] {
		margin-bottom: 20px;
	}

	.c-mb-xl-25 [class*="col-"],
	.row.c-mb-xl-25 > [class*="col-"] {
		margin-bottom: 25px;
	}

	.c-mb-xl-30 [class*="col-"],
	.row.c-mb-xl-30 > [class*="col-"] {
		margin-bottom: 30px;
	}

	.c-mb-xl-40 [class*="col-"],
	.row.c-mb-xl-40 > [class*="col-"] {
		margin-bottom: 40px;
	}

	.c-mb-xl-50 [class*="col-"],
	.row.c-mb-xl-50 > [class*="col-"] {
		margin-bottom: 50px;
	}

	.c-mb-xl-60 [class*="col-"],
	.row.c-mb-xl-60 > [class*="col-"] {
		margin-bottom: 60px;
	}

	.c-my-xl-0 [class*="col-"],
	.row.c-my-xl-0 > [class*="col-"] {
		margin-bottom: 0;
		margin-top: 0;
	}

	.c-my-xl-1 [class*="col-"],
	.row.c-my-xl-1 > [class*="col-"] {
		margin-bottom: 1px;
		margin-top: 1px;
	}

	.c-my-xl-2 [class*="col-"],
	.row.c-my-xl-2 > [class*="col-"] {
		margin-bottom: 2px;
		margin-top: 2px;
	}

	.c-my-xl-5 [class*="col-"],
	.row.c-my-xl-5 > [class*="col-"] {
		margin-bottom: 5px;
		margin-top: 5px;
	}

	.c-my-xl-10 [class*="col-"],
	.row.c-my-xl-10 > [class*="col-"] {
		margin-bottom: 10px;
		margin-top: 10px;
	}

	.c-my-xl-15 [class*="col-"],
	.row.c-my-xl-15 > [class*="col-"] {
		margin-bottom: 15px;
		margin-top: 15px;
	}

	.c-my-xl-20 [class*="col-"],
	.row.c-my-xl-20 > [class*="col-"] {
		margin-bottom: 20px;
		margin-top: 20px;
	}

	.c-my-xl-25 [class*="col-"],
	.row.c-my-xl-25 > [class*="col-"] {
		margin-bottom: 25px;
		margin-top: 25px;
	}

	.c-my-xl-30 [class*="col-"],
	.row.c-my-xl-30 > [class*="col-"] {
		margin-bottom: 30px;
		margin-top: 30px;
	}

	.c-my-xl-40 [class*="col-"],
	.row.c-my-xl-40 > [class*="col-"] {
		margin-bottom: 40px;
		margin-top: 40px;
	}

	.c-my-xl-50 [class*="col-"],
	.row.c-my-xl-50 > [class*="col-"] {
		margin-bottom: 50px;
		margin-top: 50px;
	}

	.c-my-xl-60 [class*="col-"],
	.row.c-my-xl-60 > [class*="col-"] {
		margin-bottom: 60px;
		margin-top: 60px;
	}
}

form[class*="c-mb-"] .row:last-child [class^="col-"],
[class*="c-mb-"] form .row:last-child [class^="col-"] {
	margin-bottom: 0 !important;
}

/* overlap featured image on top section (for big screens) */

@media screen and (min-width: 1200px) {
	.s-top-overlap {
		margin-top: -140px;
	}

	.s-top-overlap-big {
		margin-top: -180px;
	}

	.s-top-overlap-small {
		margin-top: -100px;
	}
}

/* full height section */
.s-full-height {
	min-height: 100vh;
}

/* Vertical dividers - use them with Bootstrap responsive utilities - http://getbootstrap.com/docs/4.1/utilities/display/#hiding-elements */
[class*='divider-'] {
	clear: both;
	width: 100%;
}

[class*='divider-']:last-child {
	-webkit-box-ordinal-group: 10001;
	-ms-flex-order: 10000;
	order: 10000;
}

.divider-0 {
	margin-top: 0;
}

.divider-10 {
	margin-top: 10px;
}

.divider-20 {
	margin-top: 20px;
}

.divider-25 {
	margin-top: 25px;
}

.divider-30 {
	margin-top: 30px;
}

.divider-40 {
	margin-top: 40px;
}

.divider-50 {
	margin-top: 50px;
}

.divider-60 {
	margin-top: 60px;
}

.divider-70 {
	margin-top: 70px;
}

.divider-80 {
	margin-top: 80px;
}

.divider-90 {
	margin-top: 90px;
}

.divider-100 {
	margin-top: 100px;
}

.divider-120 {
	margin-top: 120px;
}

@media (min-width: 576px) {
	.divider-sm-0 {
		margin-top: 0;
	}

	.divider-sm-10 {
		margin-top: 10px;
	}

	.divider-sm-20 {
		margin-top: 20px;
	}

	.divider-sm-25 {
		margin-top: 25px;
	}

	.divider-sm-30 {
		margin-top: 30px;
	}

	.divider-sm-40 {
		margin-top: 40px;
	}

	.divider-sm-50 {
		margin-top: 50px;
	}

	.divider-sm-60 {
		margin-top: 60px;
	}

	.divider-sm-70 {
		margin-top: 70px;
	}

	.divider-sm-80 {
		margin-top: 80px;
	}

	.divider-sm-90 {
		margin-top: 90px;
	}

	.divider-sm-100 {
		margin-top: 100px;
	}

	.divider-sm-120 {
		margin-top: 120px;
	}
}

@media (min-width: 768px) {
	.divider-md-0 {
		margin-top: 0;
	}

	.divider-md-10 {
		margin-top: 10px;
	}

	.divider-md-20 {
		margin-top: 20px;
	}

	.divider-md-25 {
		margin-top: 25px;
	}

	.divider-md-30 {
		margin-top: 30px;
	}

	.divider-md-40 {
		margin-top: 40px;
	}

	.divider-md-50 {
		margin-top: 50px;
	}

	.divider-md-60 {
		margin-top: 60px;
	}

	.divider-md-70 {
		margin-top: 70px;
	}

	.divider-md-80 {
		margin-top: 80px;
	}

	.divider-md-90 {
		margin-top: 90px;
	}

	.divider-md-100 {
		margin-top: 100px;
	}

	.divider-md-120 {
		margin-top: 120px;
	}
}

@media (min-width: 992px) {
	.divider-lg-0 {
		margin-top: 0;
	}

	.divider-lg-10 {
		margin-top: 10px;
	}

	.divider-lg-20 {
		margin-top: 20px;
	}

	.divider-lg-25 {
		margin-top: 25px;
	}

	.divider-lg-30 {
		margin-top: 30px;
	}

	.divider-lg-40 {
		margin-top: 40px;
	}

	.divider-lg-50 {
		margin-top: 50px;
	}

	.divider-lg-60 {
		margin-top: 60px;
	}

	.divider-lg-70 {
		margin-top: 70px;
	}

	.divider-lg-80 {
		margin-top: 80px;
	}

	.divider-lg-90 {
		margin-top: 90px;
	}

	.divider-lg-100 {
		margin-top: 100px;
	}

	.divider-lg-120 {
		margin-top: 120px;
	}
}

@media (min-width: 1200px) {
	.divider-xl-0 {
		margin-top: 0;
	}

	.divider-xl-10 {
		margin-top: 10px;
	}

	.divider-xl-20 {
		margin-top: 20px;
	}

	.divider-xl-25 {
		margin-top: 25px;
	}

	.divider-xl-30 {
		margin-top: 30px;
	}

	.divider-xl-40 {
		margin-top: 40px;
	}

	.divider-xl-50 {
		margin-top: 50px;
	}

	.divider-xl-60 {
		margin-top: 60px;
	}

	.divider-xl-70 {
		margin-top: 70px;
	}

	.divider-xl-80 {
		margin-top: 80px;
	}

	.divider-xl-90 {
		margin-top: 90px;
	}

	.divider-xl-100 {
		margin-top: 100px;
	}

	.divider-xl-120 {
		margin-top: 120px;
	}
}

/*
** Common Sections Styles
*/
section {
	position: relative;
}

img {
	max-width: 100%;
}

/*parallax*/
.s-parallax,
.cover-image,
.cover-background,
.texture-background {
	background-position: 50% 50%;
	background-repeat: no-repeat;
	background-size: cover;
	position: relative;
}

.cover-image {
	height: 100%;
	width: 100%;
}

.texture-background {
	background-image: url(../img/background-texture-cover.jpg);
}

.pattern-background:before {
	background-image: url(../img/patterns/pattern8.png);
}

@media (min-width: 768px) {
	.cover-image {
		background-position: 50% 50%;
		bottom: 0;
		display: block;
		left: 0;
		position: absolute;
		right: 0;
		top: 0;
		z-index: 2;
	}

	.cover-image.s-cover-right {
		left: auto;
		width: 50%;
	}

	.cover-image.s-cover-left {
		width: 50%;
	}

	.cover-image > img {
		visibility: hidden;
	}

	.cover-image > a {
		bottom: 0;
		left: 0;
		position: absolute;
		right: 0;
		top: 0;
	}

	.cover-image + [class*='container'] [class*='col-'] > img,
	.cover-image + [class*='container'] [class*='col-'] > a:after,
	.cover-image + [class*='container'] [class*='col-'] > a > img {
		visibility: hidden;
	}
}

.fixed-background,
.s-parallax {
	background-attachment: fixed;
	background-position: 50% 0;
}

@media (max-width: 767px) {
	.s-parallax {
		background-size: auto auto;
	}
}

/*additional overlay for parallax sections*/
.s-overlay:before {
	opacity: 0.8;
}

.s-overlay.ls:before {
	background-color: #fff;
	opacity: 0.93;
}

.s-overlay.ls.ms:before {
	background-color: #f2f2f2;
	opacity: 0.81;
}

.s-overlay.cs:before {
	background-color: #ff497c;
	opacity: 0.82;
}

.s-overlay.cs.cs2:before {
	background-color: #a0ce4e;
}

.s-overlay.cs.cs3:before {
	background-color: #00bea3;
}

.s-overlay.ds:before {
	background-color: #1f2732;
	opacity: 0.87;
}

.s-overlay.ds.ms:before {
	opacity: 0.9;
}

.s-muted:before {
	background-color: rgba(50, 50, 50, 0.1);
	opacity: 1;
}

.gradientradial-background {
	overflow: hidden;
}

.s-parallax > *,
.s-overlay > *,
.s-muted > *,
.s-overlay-diagonal-double > *,
.pattern-background > *,
.gradientradial-background > *,
.gradient-background > *,
.gradientvertical-background > *,
.gradientdarken-background > * {
	position: relative;
	z-index: 4;
}

.s-parallax:before,
.s-overlay:before,
.s-muted:before,
.s-overlay-diagonal-double:before,
.s-overlay-diagonal-double:after,
.pattern-background:before,
.gradient-background:before,
.gradientvertical-background:before,
.gradientdarken-background:before {
	bottom: 0;
	content: "";
	display: block;
	left: 0;
	position: absolute;
	right: 0;
	top: 0;
}

.s-muted:before,
.s-parallax:before {
	opacity: 1;
}

.s-overlay-diagonal {
	background-clip: content-box;
	overflow: hidden;
	padding: 10px 0;
}

.s-overlay-diagonal:before {
	bottom: auto;
	height: 3000px;
	left: 0;
	margin-left: 30%;
	right: auto;
	top: 50%;
	-webkit-transform: translateY(-50%) rotate(-45deg);
	-ms-transform: translateY(-50%) rotate(-45deg);
	transform: translateY(-50%) rotate(-45deg);
	width: 40%;
}

@media (max-width: 1200px) {
	.s-overlay-diagonal:before {
		margin-left: 15%;
		width: 70%;
	}
}

.s-overlay-diagonal-double {
	overflow: hidden;
	padding: 10px 0;
}

.s-overlay-diagonal-double:before {
	background: -webkit-linear-gradient(45deg, #ff497c 30%, transparent 30%);
	background: linear-gradient(45deg, #ff497c 30%, transparent 30%);
	opacity: 0.6;
}

.s-overlay-diagonal-double:after {
	background: -webkit-linear-gradient(45deg, transparent 70%, #ff497c 70%);
	background: linear-gradient(45deg, transparent 70%, #ff497c 70%);
	opacity: 0.6;
}

.gradient-background:before {
	background: #ff497c;
	background: -webkit-gradient(linear, left top, right top, color-stop(0%, #ff497c), color-stop(100%, #a0ce4e));
	background: -webkit-linear-gradient(left, #ff497c 0%, #a0ce4e 100%);
	background: linear-gradient(to right, #ff497c 0%, #a0ce4e 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="$colorMain", endColorstr="$colorMain2", GradientType=1);
}

.gradientvertical-background:before {
	background: #ff497c;
	/* Old browsers */
	background: -webkit-linear-gradient(top, #ff497c 0%, #a0ce4e 100%);
	background: linear-gradient(to bottom, #ff497c 0%, #a0ce4e 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="$colorMain", endColorstr="$colorMain2", GradientType=0);
}

.gradientdarken-background:before {
	background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.4) 100%);
	background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.4) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#00000", endColorstr="#00000000", GradientType=0);
}

.gradientradial-background:before {
	/* FF3.6+ */
	/* Chrome,Safari4+ */
	/* Chrome10+,Safari5.1+ */
	/* Opera 12+ */
	/* IE10+ */
	background: radial-gradient(ellipse at center, rgba(255, 255, 255, 0.24) 0%, rgba(255, 255, 255, 0) 50%);
	background: -webkit-radial-gradient(center, ellipse, rgba(255, 255, 255, 0.24) 0%, rgba(255, 255, 255, 0) 50%);
	background: -webkit-radial-gradient(center, ellipse cover, rgba(255, 255, 255, 0.24) 0%, rgba(255, 255, 255, 0) 50%);
	background: -webkit-gradient(radial, center center, 0, center center, 50%, color-stop(0%, rgba(255, 255, 255, 0.24)), color-stop(50%, rgba(255, 255, 255, 0)));
	content: "";
	display: block;
	/* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#3ffff", endColorstr="#00ffffff", GradientType=1);
	height: 1400px;
	left: 50%;
	margin-left: -700px;
	margin-top: -700px;
	position: absolute;
	top: 50%;
	width: 1400px;
	z-index: 2;
	/* IE6-9 fallback on horizontal gradient */
}

.s-overlay.gradientradial-background:before {
	height: 100vw;
	margin-left: -50vw;
	margin-top: -50vw;
	width: 100vw;
}

.s-bordertop,
.s-borderbottom,
.s-bordertop-container .container,
.s-borderbottom-container .container {
	position: relative;
}

.s-bordertop:before,
.s-borderbottom:after,
.s-bordertop-container .container:before,
.s-borderbottom-container .container:after {
	background-color: #e1e1e1;
	content: "";
	display: block;
	height: 1px;
	left: 0;
	position: absolute;
	right: 0;
	top: 0;
	z-index: 1;
}

.s-borderheight-2:before,
.s-borderheight-2:after,
.s-borderheight-2 .container:before,
.s-borderheight-2 .container:after {
	height: 2px;
}

.s-borderheight-3:before,
.s-borderheight-3:after,
.s-borderheight-3 .container:before,
.s-borderheight-3 .container:after {
	height: 3px;
}

.s-borderheight-5:before,
.s-borderheight-5:after,
.s-borderheight-5 .container:before,
.s-borderheight-5 .container:after {
	height: 5px;
}

.s-bordercolormain:before,
.s-bordercolormain:after,
.s-bordercolormain .container:before,
.s-bordercolormain .container:after {
	background-color: #ff497c;
}

.s-bordertop-container .container:before,
.s-borderbottom-container .container:after {
	left: 15px;
	right: 15px;
}

.s-borderbottom:after,
.s-borderbottom-container .container:after {
	bottom: 0;
	top: auto;
}

.s-bordered-columns [class*='col-'] + [class*='col-']:before {
	background-color: rgba(0, 0, 0, 0.1);
	bottom: 1em;
	content: "";
	left: 0;
	position: absolute;
	top: 1em;
	width: 1px;
}

/*page preloader*/
.preloader {
	background: rgba(255, 255, 255, 0.99);
	bottom: 0;
	height: 100%;
	left: 0;
	position: fixed;
	right: 0;
	top: 0;
	z-index: 13000;
}

.no-js .preloader,
.lt-ie9 .preloader,
.lt-ie10 .preloader {
	display: none;
}

.preloader_image {
	background: url("{{asset('frontend_assets/img')}}/preloader.gif") no-repeat 50% 50% transparent;
	height: 256px;
	left: 50%;
	margin: -128px 0 0 -128px;
	position: absolute;
	top: 50%;
	width: 256px;
}

/* animated elements */
.animate {
	visibility: hidden;
}

.no-js .animate,
.lt-ie10 .animate,
.lt-ie9 .animate {
	visibility: visible;
}

.animated {
	visibility: visible !important;
}

/* boxed layout */
#box_wrapper,
#canvas {
	overflow: hidden;
	position: relative;
}

#box_wrapper > section,
#box_wrapper > div > section {
	clear: both;
	position: relative;
}

#canvas.boxed {
	padding: 1px 0;
}

body.boxed {
	height: auto;
	position: static;
	width: auto;
}

.pattern1 {
	background-image: url(../img/patterns/pattern1.png);
}

.pattern2 {
	background-image: url(../img/patterns/pattern2.png);
}

.pattern3 {
	background-image: url(../img/patterns/pattern3.png);
}

.pattern4 {
	background-image: url(../img/patterns/pattern4.png);
}

.pattern5 {
	background-image: url(../img/patterns/pattern5.png);
}

.pattern6 {
	background-image: url(../img/patterns/pattern6.png);
}

.pattern7 {
	background-image: url(../img/patterns/pattern7.png);
}

.pattern8 {
	background-image: url(../img/patterns/pattern8.png);
}

.pattern9 {
	background-image: url(../img/patterns/pattern9.png);
}

.pattern10 {
	background-image: url(../img/patterns/pattern10.png);
}

.pattern11 {
	background-image: url(../img/patterns/pattern11.png);
}

.boxed .container {
	padding-left: 50px;
	padding-right: 50px;
}

@media (max-width: 500px) {
	.boxed .container {
		padding-left: 10px;
		padding-right: 10px;
	}
}

.boxed #box_wrapper.container {
	box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
	margin-top: 120px;
	padding: 0;
}

@media (min-width: 1600px) {
	.boxed #box_wrapper.container {
		max-width: 1560px;
	}
}

.boxed #box_wrapper.container.top-bottom-margins {
	margin-bottom: 120px;
	margin-top: 150px;
}

/*common background sections*/
.s-map-dark {
	background-image: url("../img/parallax/map-dark.jpg");
}

.s-map-light {
	background-image: url("../img/parallax/map-light.jpg");
}

.s-light-abstract {
	background-image: url("../img/parallax/light-abstract.jpg");
}

.s-light-wood {
	background-image: url("../img/parallax/light-wood.jpg");
}

/*bordered columns*/
.c-bordered [class*='col-'] {
	border: 1px solid #e1e1e1;
	margin-left: -1px;
	margin-top: -1px;
}

@media (min-width: 768px) {
	.c-bordered.c-bordered-center .row [class*='col-']:first-child {
		border-left-color: transparent;
	}

	.c-bordered.c-bordered-center .row [class*='col-']:last-child {
		border-right-color: transparent;
	}

	.c-bordered.c-bordered-center .row:first-child [class*='col-'] {
		border-top-color: transparent;
	}

	.c-bordered.c-bordered-center .row:last-child [class*='col-'] {
		border-bottom-color: transparent;
	}
}

/* Media Items - Common Side and Top Image Items */
.item-content p:last-child {
	margin-bottom: -.7em;
}

.bordered .item-media,
.bordered .entry-thumbnail {
	margin: -1px -1px -1px -1px;
	z-index: 1;
}

.bordered .item-media.cover-image {
	height: calc(100% + 2px);
}

.bordered.full-padding .item-media {
	margin: 0;
}

/* side and vertical items paddings */
.full-padding {
	padding: 40px;
}

.content-padding .item-content {
	padding: 40px;
}

@media (max-width: 992px) {
	.full-padding {
		padding: 30px;
	}

	.content-padding .item-content {
		padding: 30px;
	}
}

/*side item*/
.side-item h2,
.side-item h3,
.side-item h4 {
	line-height: 1;
}

.side-item .row {
	margin: 0;
}

.side-item .row [class*="col-"] {
	margin: 0;
	padding: 0;
}

.side-item .item-title + .item-content {
	padding-top: 30px;
}

.side-item [class*="col-"] > .item-title {
	padding: 15px 30px;
}

.side-item [class*="col-"] > .item-title h2,
.side-item [class*="col-"] > .item-title h3,
.side-item [class*="col-"] > .item-title h4 {
	margin: 0;
}

.side-item.bordered [class*="col-"] > .item-title {
	margin: -1px;
}

/*-xs- -sm- side-item paddings and margins*/

@media (max-width: 767px) {
	.no-content-padding [class*='col-sm-'] .item-content,
	.no-content-padding [class*='col-xs-'] .item-content,
	.full-padding [class*='col-sm-'] .item-content,
	.full-padding [class*='col-xs-'] .item-content {
		padding-left: 30px;
	}

	.no-content-padding [class*='col-sm-'][class*='sm-pull-'] .item-content,
	.no-content-padding [class*='col-sm-'][class*='xs-pull-'] .item-content,
	.no-content-padding [class*='col-sm-'][class*='order-sm-1'] .item-content,
	.no-content-padding [class*='col-sm-'][class*='order-xs-1'] .item-content,
	.no-content-padding [class*='col-xs-'][class*='sm-pull-'] .item-content,
	.no-content-padding [class*='col-xs-'][class*='xs-pull-'] .item-content,
	.no-content-padding [class*='col-xs-'][class*='order-sm-1'] .item-content,
	.no-content-padding [class*='col-xs-'][class*='order-xs-1'] .item-content,
	.full-padding [class*='col-sm-'][class*='sm-pull-'] .item-content,
	.full-padding [class*='col-sm-'][class*='xs-pull-'] .item-content,
	.full-padding [class*='col-sm-'][class*='order-sm-1'] .item-content,
	.full-padding [class*='col-sm-'][class*='order-xs-1'] .item-content,
	.full-padding [class*='col-xs-'][class*='sm-pull-'] .item-content,
	.full-padding [class*='col-xs-'][class*='xs-pull-'] .item-content,
	.full-padding [class*='col-xs-'][class*='order-sm-1'] .item-content,
	.full-padding [class*='col-xs-'][class*='order-xs-1'] .item-content {
		padding-left: 0;
		padding-right: 30px;
	}

	.no-content-padding .col-sm-12 .item-content,
	.no-content-padding .col-xs-12 .item-content,
	.full-padding .col-sm-12 .item-content,
	.full-padding .col-xs-12 .item-content {
		padding-left: 0;
		padding-right: 0;
		padding-top: 30px;
	}
}

/*-md- side-item paddings and margins*/

@media (min-width: 768px) {
	.no-content-padding [class*='col-md-'] .item-content,
	.full-padding [class*='col-md-'] .item-content {
		padding-left: 30px;
	}

	.no-content-padding [class*='col-md-'][class*='md-pull-'] .item-content,
	.no-content-padding [class*='col-md-'][class*='order-md-1'] .item-content,
	.full-padding [class*='col-md-'][class*='md-pull-'] .item-content,
	.full-padding [class*='col-md-'][class*='order-md-1'] .item-content {
		padding-left: 0;
		padding-right: 30px;
	}

	.no-content-padding .col-sm-12 .item-content,
	.full-padding .col-sm-12 .item-content {
		padding-left: 0;
		padding-right: 0;
		padding-top: 30px;
	}
}

/*-lg- side-item paddings and margins*/

@media (min-width: 992px) {
	.no-content-padding [class*='col-lg-'] .item-content,
	.full-padding [class*='col-lg-'] .item-content {
		padding-left: 30px;
	}

	.no-content-padding [class*='col-lg-'][class*='lg-pull-'] .item-content,
	.no-content-padding [class*='col-lg-'][class*='order-lg-1'] .item-content,
	.full-padding [class*='col-lg-'][class*='lg-pull-'] .item-content,
	.full-padding [class*='col-lg-'][class*='order-lg-1'] .item-content {
		padding-left: 0;
		padding-right: 30px;
	}

	.no-content-padding .col-md-12 .item-content,
	.full-padding .col-md-12 .item-content {
		padding-left: 0;
		padding-right: 0;
		padding-top: 30px;
	}
}

/*-xl- side-item paddings and margins*/

@media (min-width: 1200px) {
	.no-content-padding [class*='col-xl-'] .item-content,
	.full-padding [class*='col-xl-'] .item-content {
		padding-left: 30px;
	}

	.no-content-padding [class*='col-xl-'][class*='order-xl-1'] .item-content,
	.full-padding [class*='col-xl-'][class*='order-xl-1'] .item-content {
		padding-left: 0;
		padding-right: 30px;
	}

	.no-content-padding .col-lg-12 .item-content,
	.full-padding .col-lg-12 .item-content {
		padding-left: 0;
		padding-right: 0;
		padding-top: 30px;
	}
}

/* vertical media item */
.vertical-item .item-media + .item-content {
	padding-top: 50px;
}

@media (max-width: 650px) {
	.vertical-item .item-media + .item-content {
		padding-top: 30px;
	}
}

.vertical-item.content-padding .item-content {
	padding: 50px;
}

@media (max-width: 1199px) {
	.vertical-item.content-padding .item-content {
		padding: 30px;
	}
}

.vertical-item.content-padding.padding-small .item-content {
	padding: 54px 40px;
}

.vertical-item.content-absolute {
	position: relative;
}

.vertical-item.content-absolute .item-content {
	bottom: 33%;
	left: 0;
	padding: 20px 60px;
	position: absolute;
	right: 0;
	z-index: 2;
}

@media (max-width: 1600px) {
	.vertical-item.content-absolute .item-content {
		padding: 0 20px;
	}
}

.vertical-item.content-absolute .item-content h6 a {
	color: #1f2732;
}

.vertical-item.content-absolute .item-content h6 a:hover {
	color: var(--theme-color);
	opacity: 1;
}

.vertical-item.content-absolute .item-content h6 a.small-text {
	color: #ff497c;
}

.vertical-item.content-absolute .item-content h6 a.small-text:hover {
	color: #1f2732;
	opacity: 1;
}

.vertical-item.content-absolute .item-content h6 {
	margin-bottom: 8px;
}

@media (max-width: 767px) {
	.vertical-item.content-absolute .item-content h6 {
		line-height: 20px;
	}
}

.vertical-item.content-absolute.vertical-center .item-content {
	top: 0;
}

.vertical-item + .item-title {
	padding: 10px 30px;
}

.vertical-item + .item-title h2,
.vertical-item + .item-title h3,
.vertical-item + .item-title h4 {
	margin: 0;
}

/* item meta */
.item-meta {
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.1em;
	line-height: 1.6;
	text-transform: uppercase;
}

.item-meta i {
	font-size: 1.2em;
	position: relative;
	text-align: center;
	width: 1em;
}

.item-meta span {
	padding: 0 0.5em;
}

/* item media & item links */
.item-media {
	overflow: hidden;
	position: relative;
}

.item-media img {
	width: 100%;
	z-index: 3;
}

.item-media.cover-image {
	height: 100%;
}

.media-links {
	bottom: 0;
	left: 0;
	position: absolute;
	right: 0;
	text-align: center;
	top: 0;
	z-index: 1;
}

.media-links div {
	margin-top: -30px;
	position: absolute;
	top: 50%;
	width: 100%;
	z-index: 4;
}

.content-absolute .media-links div {
	-webkit-box-pack: end;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-pack: end;
	justify-content: flex-end;
	margin-top: 0;
	top: 0;
}

.content-absolute .media-links div a {
	-webkit-transition: all 0.35s ease 0.1s;
	transition: all 0.35s ease 0.1s;
}

.content-absolute .media-links div a:hover {
	-webkit-transform: scaleX(-1);
	-ms-transform: scaleX(-1);
	transform: scaleX(-1);
}

.content-absolute .media-links div a:first-child {
	-webkit-transition-delay: 0s;
	transition-delay: 0s;
}

.media-links:before {
	background-color: rgba(255, 255, 255, 0.9);
	bottom: 0;
	content: "";
	left: 0;
	opacity: 0;
	position: absolute;
	right: 0;
	top: 0;
	-webkit-transition: all 0.2s linear;
	transition: all 0.2s linear;
}

[class*="-item"]:hover .media-links:before {
	opacity: 0.9;
}

.media-links a.abs-link {
	bottom: 0;
	left: 0;
	opacity: 0;
	position: absolute;
	right: 0;
	top: 0;
}

[class*="-item"]:hover .media-links a.abs-link {
	opacity: 1;
}

.media-links a.abs-link:before {
	color: #ff497c;
	content: "+";
	font-size: 60px;
	height: 50px;
	left: 50%;
	line-height: 50px;
	margin-left: -25px;
	margin-top: -25px;
	position: absolute;
	text-align: center;
	top: 50%;
	width: 50px;
}

[class*="-item"] .links-wrap a {
	border: 2px solid transparent;
	display: inline-block;
	font-size: 16px;
	height: 60px;
	line-height: 58px;
	opacity: 0;
	position: relative;
	text-align: center;
	top: -100px;
	-webkit-transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275) 0s;
	transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275) 0s;
	width: 60px;
	z-index: 5;
}

[class*="-item"] .links-wrap a.link-zoom {
	background-color: #323232;
	border-color: #323232;
	color: #fff;
}

[class*="-item"] .links-wrap a.link-zoom:hover {
	background-color: #ff497c;
	border-color: #ff497c;
	color: #fff;
	opacity: 1;
}

[class*="-item"] .links-wrap a.link-anchor {
	background-color: #fff;
	border-color: #fff;
	color: #323232;
	-webkit-transition-delay: 0.1s;
	transition-delay: 0.1s;
}

[class*="-item"] .links-wrap a.link-anchor:hover {
	background-color: #ff497c;
	border-color: #ff497c;
	color: #fff;
	opacity: 1;
}

[class*="-item"] .links-wrap a:before {
	content: "\f002";
	font-family: "FontAwesome";
}

[class*="-item"] .links-wrap a.link-anchor:before {
	content: "\f041";
}

[class*="-item"]:hover .links-wrap a {
	filter: alpha(opacity=100);
	opacity: 1;
	top: 0;
}

[class*="-item"]:hover .media-links div {
	filter: alpha(opacity=100);
	opacity: 1;
}

/* item icons */
.item-icons {
	font-size: 12px;
	margin-top: 35px;
}

.content-padding .item-icons {
	margin-top: 0;
}

.item-icons i {
	padding: 0 4px;
}

.item-icons .col {
	padding-bottom: 20px;
	padding-top: 15px;
	text-align: center;
}

.media-links .blog .media-links:before {
	background-color: rgba(255, 255, 255, 0.9);
	bottom: 0;
	content: "";
	left: 0;
	opacity: 0;
	position: absolute;
	right: 0;
	top: 0;
	-webkit-transition: all 0.2s linear;
	transition: all 0.2s linear;
}

/*
** Buttons
 */
.btn:hover {
	cursor: pointer;
}

.btn.focus,
.btn:focus {
	box-shadow: 0 0 3px 0 rgba(100, 100, 100, 0.75);
}

.btn-secondary {
	border-color: #e1e1e1;
	color: #323232;
}

/*color background buttons*/
.btn-maincolor,
.btn-maincolor2,
.btn-maincolor3,
.btn-darkgrey {
	color: var(--theme-menu-text-color);
}

.btn-maincolor {
	background-color: var(--theme-color);
	border: 4px solid var(--theme-color);
}

.btn-maincolor2 {
	background-color: #a0ce4e;
	border: 4px solid #a0ce4e;
}

.btn-maincolor3 {
	background-color: #00bea3;
	border: 4px solid #00bea3;
}

.btn-darkgrey {
	background-color: #323232;
	border: 4px solid #323232;
}

/*color outline buttons*/
.btn-outline-maincolor,
.btn-outline-maincolor2,
.btn-outline-maincolor3,
.btn-outline-darkgrey {
	background-color: transparent;
}

.btn-outline-maincolor {
	border-color: var(--theme-color);
	color: #000;
}

.btn-outline-maincolor2 {
	border-color: #a0ce4e;
	color: #a0ce4e;
}

.btn-outline-maincolor3 {
	border-color: #00bea3;
	color: #00bea3;
}

.btn-outline-darkgrey {
	border-color: #323232;
	color: #323232;
}

.corner {
	background-color: transparent !important;
	height: 0;
	overflow: visible !important;
	padding-bottom: 50px;
	position: relative;
	z-index: 3;
}

@media (max-width: 767px) {
	.corner {
		display: none;
	}
}

.corner:before,
.corner:after {
	content: "";
	display: block;
	height: 0;
	position: absolute;
	width: 0;
}

.corner:after {
	border-left: 50vw solid transparent;
	border-right: 50vw solid transparent;
	border-top: 50px solid #fff;
}

.corner.corner-outside {
	position: absolute;
}

.corner.corner-outside:first-child {
	top: -50px;
}

.corner.corner-outside:last-child {
	bottom: -50px;
}

.corner.corner-half:after {
	border-left-width: 100vw;
	border-right-width: 0;
	border-top: 100px solid #fff;
}

.corner.corner-half.half-left:after {
	border-left-width: 0;
	border-right-width: 100vw;
}

@media (max-width: 1199px) {
	.corner.corner-half {
		display: none;
	}
}

.corner.corner-half-inverse:after {
	border-left-width: 0;
	border-right-width: 100vw;
}

.corner.corner-half-inverse.half-right:after {
	border-left-width: 100vw;
	border-right-width: 100vw;
}

@media (max-width: 1199px) {
	.corner.corner-half-inverse {
		display: none;
	}
}

.corner.corner-half-inverse {
	padding-bottom: 100px;
}

.corner.corner-half-inverse:after {
	border-bottom: 100px solid #fff;
	border-left-width: 0;
	border-right-width: 100vw;
	border-top: none;
}

.corner.corner-mirror:after {
	border-left-width: 0;
}

.corner.corner-mirror:before {
	border-left: 50vw solid transparent;
	border-top: 50px solid #fff;
	left: 50vw;
}

.corner.corner-inverse:before,
.corner.corner-inverse:after {
	border-bottom: 50px solid transparent;
	border-left: 50vw solid #fff;
	border-right: 50vw solid #fff;
}

.corner.corner-light:before,
.corner.corner-light:after {
	border-bottom: none;
	border-left: 50vw solid #fff;
	border-right: 50vw solid #fff;
	border-top: 50px solid transparent;
}

@media (max-width: 1199px) {
	.corner {
		padding-bottom: 45px;
	}

	.corner:after {
		border-top-width: 45px;
	}

	.corner.corner-outside {
		position: absolute;
	}

	.corner.corner-outside:first-child {
		top: -45px;
	}

	.corner.corner-outside:last-child {
		bottom: -45px;
	}

	.corner.corner-mirror:before {
		border-top-width: 45px;
	}

	.corner.corner-inverse:before,
	.corner.corner-inverse:after {
		border-bottom-width: 45px;
	}
}

.corner.ls.ms.corner-mirror:before,
.corner.ls.ms:after {
	border-bottom-color: #f2f2f2;
	border-top-color: #f2f2f2;
}

.corner.ls.ms.corner-inverse:after {
	border-bottom-color: #f2f2f2;
}

.corner.ds.corner-mirror:before,
.corner.ds:after {
	border-bottom-color: #323232;
	border-top-color: #323232;
}

.corner.ds.corner-inverse:after {
	border-bottom-color: #323232;
}

.corner.ds.ms.corner-mirror:before,
.corner.ds.ms:after {
	border-bottom-color: #252525;
	border-top-color: #252525;
}

.corner.ds.ms.corner-inverse:after {
	border-bottom-color: #252525;
}

.corner.ds.bs.corner-mirror:before,
.corner.ds.bs:after {
	border-bottom-color: #2f3e47;
	border-top-color: #2f3e47;
}

.corner.ds.bs.corner-inverse:after {
	border-bottom-color: #2f3e47;
}

.corner.cs.corner-mirror:before,
.corner.cs:after {
	border-bottom-color: #ff497c;
	border-top-color: #ff497c;
}

.corner.cs.corner-inverse:after {
	border-bottom-color: #ff497c;
}

.corner.cs.cs2.corner-mirror:before,
.corner.cs.cs2:after {
	border-bottom-color: #a0ce4e;
	border-top-color: #a0ce4e;
}

.corner.cs.cs2.corner-inverse:after {
	border-bottom-color: #a0ce4e;
}

.corner.cs.cs3.corner-mirror:before,
.corner.cs.cs3:after {
	border-bottom-color: #00bea3;
	border-top-color: #00bea3;
}

.corner.cs.cs3.corner-inverse:after {
	border-bottom-color: #00bea3;
}

/*
** Light Background Section - .ls
*/
.ls {
	background-color: #fff;
	color: #7f7f7f;
}

.ls h1,
.ls h2,
.ls h3,
.ls h4,
.ls h5,
.ls h6 {
	color: #1f2732;
}

.ls h1 a,
.ls h2 a,
.ls h3 a,
.ls h4 a,
.ls h5 a,
.ls h6 a {
	color: inherit;
}

.ls h1 a:hover,
.ls h2 a:hover,
.ls h3 a:hover,
.ls h4 a:hover,
.ls h5 a:hover,
.ls h6 a:hover {
	color: var(--theme-color);
}

.ls .btn-maincolor:hover,
.ls .btn-maincolor2:hover,
.ls .btn-maincolor3:hover,
.ls .btn-darkgrey:hover,
.ls .btn-outline-maincolor:hover,
.ls .btn-outline-maincolor2:hover,
.ls .btn-outline-maincolor3:hover,
.ls .btn-outline-darkgrey:hover {
	color: var(--theme-menu-text-color);
}

.ls .btn-outline-maincolor:hover {
	background-color: var(--theme-color);
}

.ls .btn-maincolor:hover {
	background-color: #fff;
	color: #000;
}

.ls .btn-outline-maincolor2:hover {
	background-color: #a0ce4e;
}

.ls .btn-maincolor2:hover {
	background-color: #fff;
	color: #a0ce4e;
}

.ls .btn-outline-maincolor3:hover {
	background-color: #00bea3;
}

.ls .btn-maincolor3:hover {
	background-color: #fff;
	color: #00bea3;
}

.ls .btn-outline-darkgrey:hover {
	background-color: #ff497c;
}

.ls .btn-darkgrey:hover {
	background-color: #ff497c;
	border-color: #ff497c;
}

.ls .links-maincolor a:hover {
	opacity: 0.7;
}

/*
** Grey Background Section - light section, muted section - .ls.ms
*/
.ls.ms {
	background-color: #f4f4f5;
	color: #6e6e6e;
}

.ls.ms .links-grey a {
	color: #6e6e6e;
}

.ls.ms .hero-bg {
	background-color: #fff;
}

.ls.ms .hero-bg hr {
	background-color: #e1e1e1;
}

.ls.ms hr {
	background-color: #fff;
}

.ls.ms input[type="text"],
.ls.ms input[type="email"],
.ls.ms input[type="url"],
.ls.ms input[type="password"],
.ls.ms input[type="search"],
.ls.ms input[type="tel"],
.ls.ms input[type="number"],
.ls.ms textarea,
.ls.ms select,
.ls.ms .form-control {
	background-color: #fff;
}

.ls.ms .hero-bg input[type="text"],
.ls.ms .hero-bg input[type="email"],
.ls.ms .hero-bg input[type="url"],
.ls.ms .hero-bg input[type="password"],
.ls.ms .hero-bg input[type="search"],
.ls.ms .hero-bg input[type="tel"],
.ls.ms .hero-bg input[type="number"],
.ls.ms .hero-bg textarea,
.ls.ms .hero-bg select,
.ls.ms .hero-bg .form-control {
	background-color: #f2f2f2;
	border-color: #e1e1e1;
}

.ls.ms td,
.ls.ms th,
.ls.ms .bordered {
	border-color: #d4d4d4;
}

.ls.ms .btn-secondary {
	border-color: #fff;
}

.ls.ms .btn-secondary:hover {
	background-color: #e3e3e3;
	border-color: #e3e3e3;
}

.ls .color-icon.bg-icon {
	background-color: #fff;
}

.ls .pricing-plan [class*='btn-outline-'] {
	background-color: #fff;
}

.ls .pricing-plan [class*='btn-outline-']:hover {
	background-color: #ff497c;
}

.ls.ms .nav-tabs > li.active > a,
.ls.ms .nav-tabs > li.active > a:hover,
.ls.ms .nav-tabs > li.active > a:focus {
	background-color: #fff;
	border-color: #fff;
}

.ls.ms .tab-content {
	background-color: #fff;
}

.ls.ms .tab-content .bordered {
	border-color: #e6e6e6;
}

.ls.ms .tab-content.no-border {
	background-color: transparent;
}

.ls.ms .tab-content .form-control {
	background-color: #f2f2f2;
}

.ls.ms .vertical-tabs .nav > li > a {
	background-color: #fff;
}

.ls.ms .vertical-tabs .nav > li > a:hover,
.ls.ms .vertical-tabs .nav > li.active > a {
	background-color: #323232;
}

.ls.ms .panel-title > a {
	background-color: #323232;
}

.ls.ms .panel-title > a.collapsed {
	background-color: #fff;
}

.ls.ms .hero-bg .panel-title > a {
	border: 1px solid #e1e1e1;
}

.ls.ms .panel-title > a.collapsed:hover,
.ls.ms .panel-title > a:hover {
	background-color: #323232;
}

.ls.ms .pagination a,
.ls.ms .pagination span {
	background-color: #fff;
	border-color: #fff;
}

.ls.ms .breadcrumb {
	color: #808080;
}

.ls.ms .breadcrumb a {
	color: #676767;
}

.ls.ms .breadcrumb a:hover {
	color: #ff497c;
}

.ls.ms [class*='btn-outline-']:not(:hover) {
	background-color: #f2f2f2;
}

/*
** Dark Section background and Dark Muted background sections - .ds and .ds.ms
*/
/* dark grey background section - .ds */
.ds {
	background: var(--theme-header-bg);
	color: #9a9a9a;
}

.custom_process_color{
    
}

.ds * .ds {
	background-color: #252525;
}

/* dark background section - .ds.ms */
.ds.ms {
	background-color: #252525;
}

.ds.ms .ds.ms {
	background-color: #2a2a2a;
}

/* dark section blue - .ds.bs */
.ds.bs {
	background-color: #2f3e47;
}

.ds a:not(.btn) {
	color: #fff;
}

.ds a:not(.btn):hover {
	color: var(--theme-color);
}

.ds h1,
.ds h2,
.ds h3,
.ds h4,
.ds h5,
.ds h6 {
	color: #fff;
}

.ds h1 a,
.ds h2 a,
.ds h3 a,
.ds h4 a,
.ds h5 a,
.ds h6 a {
	color: #fff;
}

.ds h1 a:hover,
.ds h2 a:hover,
.ds h3 a:hover,
.ds h4 a:hover,
.ds h5 a:hover,
.ds h6 a:hover {
	opacity: 0.8;
}

.ds .ls {
	background-color: #fff;
	color: #808080;
}

.ds .ls h1,
.ds .ls h2,
.ds .ls h3,
.ds .ls h4,
.ds .ls h5,
.ds .ls h6 {
	color: #323232;
}

.ds .ls h1 a,
.ds .ls h2 a,
.ds .ls h3 a,
.ds .ls h4 a,
.ds .ls h5 a,
.ds .ls h6 a {
	color: inherit;
}

.ds .ls h1 a:hover,
.ds .ls h2 a:hover,
.ds .ls h3 a:hover,
.ds .ls h4 a:hover,
.ds .ls h5 a:hover,
.ds .ls h6 a:hover {
	color: var(--theme-color);
}

.ds .ls a:not(.btn) {
	color: #323232;
}

.ds .ls a:not(.btn):hover {
	color: #ff497c;
}

.ds label {
	color: #fff;
}

.ds hr {
	background-color: #454545;
	border-color: #454545;
}

.ds blockquote,
.ds .blockquote {
	color: #fff;
}

.ds pre {
	color: #9a9a9a;
}

.ds .muted-bg,
.ds .hero-bg {
	background-color: rgba(255, 255, 255, 0.05);
}

.ds .bordered {
	border-color: #454545;
}

.ds .color-main {
	color: #ff497c;
}

.ds .color-main2 {
	color: #a0ce4e;
}

.ds .color-dark,
.ds .color-darkgrey {
	border-color: #fff;
	color: #fff;
}

.ds .links-maincolor a {
	color: #ff497c;
}

.ds .links-maincolor a:hover {
	color: #fff;
}

.ds .links-maincolor2 a {
	color: #a0ce4e;
}

.ds .links-maincolor2 a:hover {
	color: #fff;
}

.ds .links-maincolor3 a {
	color: #00bea3;
}

.ds .links-maincolor3 a:hover {
	color: #fff;
}

.ds .links-grey a {
	color: #9a9a9a;
}

.ds .links-grey a:hover {
	color: #fff;
}

.ds .links-darkgrey a {
	color: #fff;
}

.ds .links-darkgrey a:hover {
	color: #ff497c;
}

.ds.s-bordertop:before,
.ds.s-borderbottom:after,
.ds.s-bordertop-container .container:before,
.ds.s-borderbottom-container .container:after {
	background-color: #454545;
}

.ds.s-bordered-columns [class*='col-'] + [class*='col-']:before {
	background-color: #454545;
}

.ds .btn-darkgrey {
	background-color: #fff;
	color: #323232;
}

.ds .btn-maincolor:hover,
.ds .btn-maincolor2:hover,
.ds .btn-maincolor3:hover,
.ds .btn-darkgrey:hover,
.ds .btn-outline-maincolor:hover,
.ds .btn-outline-maincolor2:hover,
.ds .btn-outline-maincolor3:hover,
.ds .btn-outline-darkgrey:hover {
	color: #fff;
}

.ds .btn-outline-maincolor:hover,
.ds .btn-maincolor:hover {
	background-color: #fff;
	color: #ff497c;
}

.ds .btn-outline-maincolor2:hover,
.ds .btn-maincolor2:hover {
	background-color: #fff;
	color: #a0ce4e;
}

.ds .btn-outline-maincolor3:hover,
.ds .btn-maincolor3:hover {
	background-color: #fff;
	color: #00bea3;
}

.ds .btn-outline-darkgrey {
	border-color: #fff;
	color: #fff;
}

.ds .btn-outline-darkgrey:hover,
.ds .btn-darkgrey:hover {
	background-color: transparent;
	border-color: #fff;
	color: #fff;
}

.ds a.bg-icon {
	background-color: rgba(255, 255, 255, 0.05);
}

.ds .fa.color-icon:hover {
	color: #fff;
}

.ds .color-icon.bg-icon {
	background-color: rgba(255, 255, 255, 0.05);
}

.ds .color-icon.bg-icon:hover {
	color: #fff;
}

.ds .color-bg-icon:hover {
	background-color: #ff497c;
}

.ds {
	/* shop */
}

.ds .list-bordered li {
	border-color: #454545;
}

.ds input[type="text"],
.ds input[type="email"],
.ds input[type="url"],
.ds input[type="password"],
.ds input[type="search"],
.ds input[type="tel"],
.ds input[type="number"],
.ds textarea,
.ds select,
.ds .form-control {
	background-color: #fff;
	border-color: #454545;
	color: #9a9a9a;
}

.ds .form-group-select:before {
	border-color: #454545;
}

.ds .form-control:focus {
	border-color: #525252;
}

.ds .form-control:-moz-placeholder {
	color: #9a9a9a;
	opacity: 1;
}

.ds .form-control::-moz-placeholder {
	color: #9a9a9a;
	opacity: 1;
}

.ds .form-control:-ms-input-placeholder {
	color: #9a9a9a;
}

.ds .form-control::-webkit-input-placeholder {
	color: #9a9a9a;
}

.ds .form-control:focus:-moz-placeholder {
	color: transparent;
}

.ds .form-control:focus::-moz-placeholder {
	color: transparent;
}

.ds .form-control:focus:-ms-input-placeholder {
	color: transparent;
}

.ds .form-control:focus::-webkit-input-placeholder {
	color: transparent;
}

.ds .contact-form.transparent-background .form-control {
	border-color: #454545;
}

.ds .tab-content {
	border-color: #454545;
}

.ds .nav-tabs .nav-link {
	border-color: #454545;
}

.ds .owl-theme .owl-dots .owl-dot span {
	border-color: #fff;
}

.ds .post-adds .share_button > i,
.ds .post-adds .like_button > i {
	color: #fff;
}

.ds .side-item {
	border-color: #454545;
}

.ds .excerpt {
	color: #fff;
}

.ds .reply a {
	color: #fff;
}

.ds .widget_search .form-inline .btn,
.ds .widget_product_search [type="submit"],
.ds .widget_mailchimp .form-inline .btn {
	background-color: transparent;
	color: #ff497c;
}

.ds .widget_shopping_cart .cart_list,
.ds .widget_recent_entries li,
.ds .widget_recent_comments li,
.ds .widget_archive li,
.ds .widget_categories li,
.ds .widget_meta li,
.ds .widget_nav_menu li,
.ds .widget_pages li,
.ds .widget_popular_entries li {
	border-color: #454545;
}

.ds .widget_nav_menu ul ul {
	border-color: #454545;
}

.ds .widget_popular_entries .media-heading {
	color: #fff;
}

.ds .tweet_list li + li .tweet_right {
	border-color: #454545;
}

.ds .widget_tag_cloud a {
	border-color: #fff;
	color: #fff;
}

.ds .widget_shopping_cart li a + a {
	color: #fff;
}

.ds .widget_shopping_cart li a + a:hover {
	color: #ff497c;
}

.ds .summary .price {
	border-color: #454545;
	color: #fff;
}

.ds .summary .product_meta {
	border-color: #454545;
}

.ds .widget_price_filter .price_label {
	color: #fff;
}

.ds #calendar_wrap {
	border-color: #454545;
}

.ds .widget_calendar table {
	background-color: rgba(255, 255, 255, 0.05);
	border-color: #454545;
}

.ds .widget_calendar tfoot td a {
	border-color: #454545;
}

.ds .widget_calendar caption,
.ds .widget_calendar thead,
.ds .widget_calendar th {
	color: #fff;
}

.ds .widget_calendar tbody td a:hover {
	color: #fff;
}

.ds .grid-view h3:before,
.ds .grid-view h3:after {
	background-color: #454545;
}

.ds .owl-carousel.product-thumbnails .owl-nav > div:after {
	color: #fff;
}

.ds .ui-slider {
	background-color: rgba(255, 255, 255, 0.05);
}

.ds .ui-slider .ui-slider-handle {
	background-color: #fff;
}

.ds #sort_view {
	background-color: transparent;
	color: #fff;
}

.ds #toggle_shop_view.grid-view:after,
.ds #toggle_shop_view:before {
	background-color: rgba(247, 247, 247, 0.05);
}

.ds .widget_layered_nav .color-filters a:before {
	border-color: #454545;
}

.ds .table.cart a {
	color: #fff;
}

.ds .pagination > li > a,
.ds .pagination > li > span {
	background-color: transparent;
	border: 1px solid #454545;
	color: #fff;
}

.ds .pagination > li.active > a,
.ds .pagination > li.active > span,
.ds .pagination > li > a:hover,
.ds .pagination > li > span:hover,
.ds .pagination > li > a:focus,
.ds .pagination > li > span:focus {
	background-color: #ff497c;
	border-color: #ff497c;
	color: #fff;
}

.ds .thumbnail {
	background-color: transparent;
}

.ds .thumbnail h3 a {
	color: #fff;
}

.ds .thumbnail .caption {
	background-color: rgba(252, 252, 252, 0.05);
	border-color: transparent;
}

.ds .progress {
	background-color: #454545;
}

.ds .panel-heading .panel-title > a.collapsed,
.ds .vertical-tabs .nav > li > a {
	background-color: rgba(255, 255, 255, 0.05);
	color: #fff;
}

.ds .panel-heading .panel-title > a,
.ds .panel-heading .panel-title > a:hover,
.ds .vertical-tabs .nav > li.active > a,
.ds .vertical-tabs .nav > li > a:hover {
	background-color: #ff497c;
}

.ds .panel-heading .panel-title > a:hover:after,
.ds .vertical-tabs .nav > li > a:hover:after {
	color: #fff;
}

.ds .entry-meta .comments-link a {
	color: #fff;
}

.ds #timetable tbody th,
.ds #timetable tbody td {
	border-color: #454545;
}

.ds #isotope_filters a,
.ds .filters a {
	color: #fff;
}

.ds div .fw-shortcode-calendar-wrapper .page-header h3,
.ds div .btn-group button[data-calendar-nav],
.ds div .btn-group button[data-calendar-nav*='today'] {
	color: #fff;
}

/*
** Color Background Section - .cs
*/
.cs.cs2 {
	background-color: #a0ce4e;
}

.cs.cs2 .color-main {
	color: #ff497c;
}

.cs.cs3 {
	background-color: #00bea3;
}

.cs.cs3 .color-main {
	color: #ff497c;
}

/* color section grey - .cs.gs */
.cs.gs {
	background-color: #aaa6a7;
}

.cs.cs-success {
	background-color: #4db19e;
}

.cs.cs-info {
	background-color: #007ebd;
}

.cs.cs-warning {
	background-color: #eeb269;
}

.cs.cs-danger {
	background-color: #dc5753;
}

.cs {
	background-color: var(--theme-footer-bg);
	color: #fff;
}

.cs h1,
.cs h2,
.cs h3,
.cs h4,
.cs h5,
.cs h6 {
	color: #fff;
}

.cs h1 a,
.cs h2 a,
.cs h3 a,
.cs h4 a,
.cs h5 a,
.cs h6 a {
	color: #fff;
}

.cs h1 a:hover,
.cs h2 a:hover,
.cs h3 a:hover,
.cs h4 a:hover,
.cs h5 a:hover,
.cs h6 a:hover {
	color: rgba(255, 255, 255, 0.6);
}

.cs a:not(.btn) {
	color: #fff;
}

.cs a:not(.btn):hover {
	opacity: 0.8;
}

.cs blockquote,
.cs .blockquote {
	border-color: #ff7ca1;
}

.cs hr {
	border-color: rgba(255, 255, 255, 0.15);
}

.cs pre {
	color: #fff;
}

.cs .hero-bg {
	background-color: rgba(255, 255, 255, 0.1);
}

.cs .bordered {
	border-color: rgba(255, 255, 255, 0.15);
}

.cs.s-bordertop:before,
.cs.s-borderbottom:after,
.cs.s-bordertop-container .container:before,
.cs.s-borderbottom-container .container:after {
	background-color: rgba(255, 255, 255, 0.15);
}

.cs.s-bordered-columns [class*='col-'] + [class*='col-']:before {
	background-color: rgba(255, 255, 255, 0.15);
}

.cs .links-darkgrey a,
.cs .links-grey a {
	color: #fff;
	opacity: 0.9;
}

.cs .links-darkgrey a:hover,
.cs .links-grey a:hover {
	color: #fff;
	opacity: 1;
}

.cs .color-dark {
	border-color: #fff;
	color: #fff;
}

.cs .color-darkgrey {
	border-color: #323232;
	color: #323232;
}

.cs .response,


.response, .color-main{
	color: var(--theme-color) !important;
}

.cs input[type="text"],
.cs input[type="email"],
.cs input[type="url"],
.cs input[type="password"],
.cs input[type="search"],
.cs input[type="tel"],
.cs input[type="number"],
.cs textarea,
.cs select,
.cs .form-control {
	background-color: #fff;
	border-color: #fff;
	color: #323232;
}

.cs .form-control:focus {
	border-color: rgba(255, 255, 255, 0.5);
}

.cs .form-control:-moz-placeholder {
	color: #323232;
	opacity: 1;
}

.cs .form-control::-moz-placeholder {
	color: #323232;
	opacity: 1;
}

.cs .form-control:-ms-input-placeholder {
	color: #323232;
}

.cs .form-control::-webkit-input-placeholder {
	color: #323232;
}

.cs .form-control:focus:-moz-placeholder {
	color: transparent;
}

.cs .form-control:focus::-moz-placeholder {
	color: transparent;
}

.cs .form-control:focus:-ms-input-placeholder {
	color: transparent;
}

.cs .form-control:focus::-webkit-input-placeholder {
	color: transparent;
}

.cs .btn-maincolor {
	background-color: #fff;
	color: #323232;
}

.cs .btn-outline-maincolor {
	border-color: #fff;
	color: #fff;
}

.cs .btn-maincolor:hover,
.cs .btn-maincolor2:hover,
.cs .btn-maincolor3:hover,
.cs .btn-darkgrey:hover,
.cs .btn-outline-maincolor:hover,
.cs .btn-outline-maincolor2:hover,
.cs .btn-outline-maincolor3:hover,
.cs .btn-outline-darkgrey:hover {
	color: #fff;
}

.cs .btn-outline-maincolor:hover,
.cs .btn-maincolor:hover {
	background-color: #ff1657;
	border-color: #ff1657;
}

.cs .btn-outline-maincolor2:hover,
.cs .btn-maincolor2:hover {
	background-color: #87b633;
}

.cs .btn-outline-maincolor3:hover,
.cs .btn-maincolor3:hover {
	background-color: #008b77;
}

.cs .btn-outline-darkgrey:hover,
.cs .btn-darkgrey:hover {
	background-color: #191919;
	border-color: #191919;
}

.cs a.fa {
	border-color: rgba(255, 255, 255, 0.15);
	color: #fff;
}

.cs a.bg-icon {
	background-color: rgba(255, 255, 255, 0.17);
}

.cs .color-icon.bg-icon {
	background-color: rgba(255, 255, 255, 0.9);
}

.cs a.fa.color-bg-icon:hover {
	background-color: #323232;
}

.cs .btn-action {
	background-color: #fff;
}

.cs .btn-action i {
	color: #323232;
}

.cs .btn-action:hover i {
	opacity: 0.7;
}

/*
** Helper Utilities
*/
/* layout */
.clear,
.clearfix {
	clear: both;
}

.round {
	border-radius: 50%;
}

.text-normal {
	text-transform: none;
}

/* paddings for .*-bg, .bg-* and .bordered */
.p-big {
	padding: 40px 45px;
}

@media (min-width: 1200px) {
	.p-big {
		padding: 55px 60px;
	}
}

.p-normal {
	padding: 40px 45px;
}

.p-small {
	padding: 30px 35px;
}

.cover-before,
.cover-after {
	overflow: hidden;
}

.cover-before,
.cover-after,
.cover-before > *,
.cover-after > * {
	position: relative;
	z-index: 2;
}

.cover-before:before,
.cover-after:after {
	bottom: 0;
	content: "";
	display: block;
	left: 0;
	position: absolute;
	right: 0;
	top: 0;
}

.top-corner {
	left: 0;
	line-height: 1;
	position: absolute;
	top: 0;
}

/* text helpers */
.fs-12 {
	font-size: 12px;
}

.fs-14 {
	font-size: 14px;
}

.fs-16 {
	font-size: 16px;
}

.fs-18 {
	font-size: 18px;
}

.fs-20 {
	font-size: 20px;
}

.fs-24 {
	font-size: 24px;
}

.fs-28 {
	font-size: 28px;
}

.fs-32 {
	font-size: 32px;
}

.fs-36 {
	font-size: 36px;
}

.fs-40 {
	font-size: 40px;
}

.fs-56 {
	font-size: 56px;
}

.fw-100 {
	font-weight: 100;
}

.fw-300,
.thin {
	font-weight: 300;
}

.fw-400 {
	font-weight: 400;
}

.fw-500 {
	font-weight: 500;
}

.fw-700,
.bolder {
	font-weight: 700;
}

.fw-900,
.bold {
	font-weight: 900;
}

.dropcap {
	float: left;
	font-size: 110px;
	font-weight: 900;
	line-height: 0.9;
	margin: 0 15px 0 0;
	text-transform: uppercase;
}

@media (max-width: 1199px) {
	.dropcap {
		font-size: 50px;
		line-height: 1.1;
		margin-right: 15px;
	}
}

/*alignment helpers*/
.d-table {
	border-collapse: collapse;
	display: table;
	height: 100%;
	margin: auto;
	min-width: 100%;
}

.d-table-cell {
	box-sizing: border-box;
	display: table-cell;
	float: none;
	overflow: hidden;
	vertical-align: middle;
	zoom: 1;
}

.overflow-hidden {
	overflow: hidden;
	position: relative;
	z-index: 2;
}

.overflow-visible {
	overflow: visible;
	position: relative;
	z-index: 2;
}

.z-index-2 {
	z-index: 2;
}

/* borders, colors and backgrounds */
.light-bg {
	background-color: #fff;
}

.hero-bg {
	background-color: #f5f5f5;
}

.muted-bg {
	background-color: rgba(50, 50, 50, 0.06);
}

.response,
.color-main {
	border-color: var(--theme-color);
	color: var(--theme-color) !important;
}

.color-main2 {
	border-color: #a0ce4e;
	color: #a0ce4e !important;
}

.color-main3 {
	border-color: #00bea3;
	color: #00bea3 !important;
}

.color-main4 {
	border-color: #f1894c;
	color: #f1894c !important;
}

.color-dark {
	border-color: #252525;
	color: #252525;
}

.color-darkgrey {
	border-color: #323232;
	color: #323232;
}

.color-success {
	color: #4db19e;
}

.color-info {
	color: #007ebd;
}

.color-light {
	color: #fff;
}

.color-warning {
	color: #eeb269;
}

.required,
.color-danger {
	color: #dc5753;
}

.bordered {
	border: 1px solid #e1e1e1;
}

.box-shadow {
	border-color: transparent;
	box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
}

.links-maincolor a {
	color: #ff497c;
}

.links-maincolor2 a {
	color: #a0ce4e;
}

.links-maincolor3 a {
	color: #00bea3;
}

.links-grey a {
	color: #808080;
}

.links-grey a:hover {
	color: #ff497c;
}

.links-darkgrey a {
	color: #323232;
}

.links-darkgrey a:hover {
	color: #ff497c;
}

.bg-maincolor {
	background-color: #ff497c;
}

.bg-maincolor2 {
	background-color: #a0ce4e;
}

.bg-maincolor3 {
	background-color: #00bea3;
}

.bg-maincolor4 {
	background-color: #f1894c;
}

.bg-dark {
	background-color: #252525;
}

.bg-darkblue {
	background-color: #253138;
	color: #fff;
}

.bg-darkgrey {
	background-color: #323232;
	color: #fff;
}

.bg-success {
	background-color: #4db19e !important;
}

.bg-info {
	background-color: #007ebd !important;
}

.bg-warning {
	background-color: #eeb269 !important;
}

.bg-danger {
	background-color: #dc5753 !important;
}

[class*='bg-'] {
	color: #fff;
}

[class*='bg-'] a,
[class*='bg-'] h1,
[class*='bg-'] h2,
[class*='bg-'] h3,
[class*='bg-'] h4,
[class*='bg-'] h5,
[class*='bg-'] h6 {
	color: #fff;
}

/*padding for inline elements with theme backgrounds*/
span[class*='bg-'],
span.bordered,
span.light-bg,
span.hero-bg,
span.muted-bg {
	padding-left: 0.37em;
	padding-right: 0.37em;
}

/*Dividers, margins and padding helpers*/
/* margins */
/*top&bottom equal margins - dividers*/
.my-10 {
	margin-bottom: 10px;
	margin-top: 10px;
}

.my-15 {
	margin-bottom: 15px;
	margin-top: 15px;
}

.my-20 {
	margin-bottom: 20px;
	margin-top: 20px;
}

.my-30 {
	margin-bottom: 30px;
	margin-top: 30px;
}

.my-40 {
	margin-bottom: 40px;
	margin-top: 40px;
}

.my-50 {
	margin-bottom: 50px;
	margin-top: 50px;
}

.my-60 {
	margin-bottom: 60px;
	margin-top: 60px;
}

/*left&right equal margins*/
.mx-10 {
	margin-left: 10px;
	margin-right: 10px;
}

.mx-15 {
	margin-left: 15px;
	margin-right: 15px;
}

.mx-20 {
	margin-left: 20px;
	margin-right: 20px;
}

.mx-30 {
	margin-left: 30px;
	margin-right: 30px;
}

.mx-40 {
	margin-left: 40px;
	margin-right: 40px;
}

.mx-50 {
	margin-left: 50px;
	margin-right: 50px;
}

.mx-60 {
	margin-left: 60px;
	margin-right: 60px;
}

/*top margins*/
.mt-10 {
	margin-top: 10px;
}

.mt-15 {
	margin-top: 15px;
}

.mt-20 {
	margin-top: 20px;
}

.mt-30 {
	margin-top: 30px;
}

.mt-40 {
	margin-top: 40px;
}

.mt-50 {
	margin-top: 50px;
}

.mt-60 {
	margin-top: 60px;
}

/*bottom margins*/
.mb-10 {
	margin-bottom: 10px;
}

.mb-15 {
	margin-bottom: 15px;
}

.mb-20 {
	margin-bottom: 20px;
}

.mb-30 {
	margin-bottom: 30px;
}

.mb-40 {
	margin-bottom: 40px;
}

.mb-50 {
	margin-bottom: 50px;
}

.mb-60 {
	margin-bottom: 60px;
}

/*top right bottom left margins*/
.m-10 {
	margin: 10px;
}

.m-15 {
	margin: 15px;
}

.m-20 {
	margin: 20px;
}

.m-30 {
	margin: 30px;
}

.m-40 {
	margin: 40px;
}

.m-50 {
	margin: 50px;
}

.m-60 {
	margin: 60px;
}

/* paddings */
/*top&bottom equal paddings - dividers*/
.py-10 {
	padding-bottom: 10px;
	padding-top: 10px;
}

.py-15 {
	padding-bottom: 15px;
	padding-top: 15px;
}

.py-20 {
	padding-bottom: 20px;
	padding-top: 20px;
}

.py-30 {
	padding-bottom: 30px;
	padding-top: 30px;
}

.py-40 {
	padding-bottom: 40px;
	padding-top: 40px;
}

.py-50 {
	padding-bottom: 50px;
	padding-top: 50px;
}

.py-60 {
	padding-bottom: 60px;
	padding-top: 60px;
}

/*left&right equal paddings*/
.px-10 {
	padding-left: 10px;
	padding-right: 10px;
}

.px-15 {
	padding-left: 15px;
	padding-right: 15px;
}

.px-20 {
	padding-left: 20px;
	padding-right: 20px;
}

.px-30 {
	padding-left: 30px;
	padding-right: 30px;
}

.px-40 {
	padding-left: 40px;
	padding-right: 40px;
}

.px-50 {
	padding-left: 50px;
	padding-right: 50px;
}

.px-60 {
	padding-left: 60px;
	padding-right: 60px;
}

/*top paddings*/
.pt-10 {
	padding-top: 10px;
}

.pt-15 {
	padding-top: 15px;
}

.pt-20 {
	padding-top: 20px;
}

.pt-30 {
	padding-top: 30px;
}

.pt-40 {
	padding-top: 40px;
}

.pt-50 {
	padding-top: 50px;
}

.pt-60 {
	padding-top: 60px;
}

/*bottom paddings*/
.pb-10 {
	padding-bottom: 10px;
}

.pb-15 {
	padding-bottom: 15px;
}

.pb-20 {
	padding-bottom: 20px;
}

.pb-30 {
	padding-bottom: 30px;
}

.pb-40 {
	padding-bottom: 40px;
}

.pb-50 {
	padding-bottom: 50px;
}

.pb-60 {
	padding-bottom: 60px;
}

/*top right bottom left paddings*/
.p-10 {
	padding: 10px;
}

.p-15 {
	padding: 15px;
}

.p-20 {
	padding: 20px;
}

.p-30 {
	padding: 30px;
}

.p-40 {
	padding: 40px;
}

.p-50 {
	padding: 50px;
}

.p-60 {
	padding: 60px;
}

/*
** Shortcodes
*/
/*
** Icon Box
*/
.icon-styled {
	display: inline-block;
	text-align: center;
}

.icon-styled i {
	width: 1em;
}

.icon-styled[class*='bg-'],
.icon-styled[class*='btn-'],
.icon-styled.bordered,
.icon-styled.icon-bordered {
	border-style: solid;
	border-width: 1px;
	box-sizing: content-box;
	height: 3em;
	width: 3em;
}

.text-center .icon-styled[class*='bg-'],
.text-center .icon-styled[class*='btn-'],
.text-center .icon-styled.bordered,
.text-center .icon-styled.icon-bordered {
	margin-left: auto;
	margin-right: auto;
}

.icon-styled[class*='bg-'] i,
.icon-styled[class*='btn-'] i,
.icon-styled.bordered i,
.icon-styled.icon-bordered i {
	line-height: 3em;
}

.icon-styled[class*='bg-'] + p,
.icon-styled[class*='btn-'] + p,
.icon-styled.bordered + p,
.icon-styled.icon-bordered + p {
	margin-top: 12px;
}

.icon-styled.icon-bordered:not([class*="color-"]) {
	border-color: #e1e1e1;
}

.icon-styled[class*='bg-'] {
	border-color: transparent;
}

.icon-styled.icon-top {
	align-self: flex-start;
	-ms-flex-item-align: start;
	line-height: inherit;
}

.media > .icon-styled:first-child {
	-ms-flex-negative: 0;
	flex-shrink: 0;
}

.media > .icon-styled:last-child {
	-ms-flex-negative: 0;
	flex-shrink: 0;
}

.icon-inline > .icon-styled:first-child {
	-ms-flex-negative: 0;
	flex-shrink: 0;
	margin-right: 20px;
}

.icon-inline > .icon-styled:last-child {
	-ms-flex-negative: 0;
	flex-shrink: 0;
	margin-left: 20px;
}

.icon-inline {
	align-items: center;
	-webkit-box-align: center;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-align: center;
}

.text-center .icon-inline {
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
}

.icon-inline > * {
	margin-bottom: 0;
	margin-right: 4px;
	margin-top: 0;
}

.icon-box.ls,
.icon-box.ds,
.icon-box.cs,
.icon-box.bordered,
.icon-box.hero-bg,
.icon-box.muted-bg,
.icon-box.box-shadow {
	padding: 70px 30px;
}

.c-bordered .icon-box {
	padding: 70px 30px 30px;
}

.c-bordered .icon-box p:last-child {
	margin-bottom: 20px;
}

.icon-box.featured-box {
	height: calc(100% + 12px);
	margin: -6px -10px;
	padding-bottom: 36px;
	padding-top: 76px;
	position: relative;
	z-index: 2;
}

.icon-box .icon-styled[class*='bg-'],
.icon-box .icon-styled.icon-bordered {
	margin-bottom: 0.5em;
}

.icon-box .icon-styled + h2,
.icon-box .icon-styled + h3,
.icon-box .icon-styled + h4 {
	margin-top: 1.6em;
}

.icon-box .icon-styled + p.small-text {
	font-size: 20px;
	font-weight: 300;
	letter-spacing: 0.2em;
	margin: 0.74em 0;
}

.icon-box h2,
.icon-box h3,
.icon-box h4 {
	line-height: 1;
	margin-bottom: 1.6em;
}

.media .heading-accent,
.icon-box .heading-accent {
	font-size: 30px;
	font-weight: 900;
	letter-spacing: inherit;
	line-height: 1;
	margin-bottom: 0.6em;
	text-transform: uppercase;
}

@media (min-width: 1200px) {
	.media .heading-accent,
	.icon-box .heading-accent {
		font-size: 38px;
	}
}

.media .icon-styled + .heading-accent,
.icon-box .icon-styled + .heading-accent {
	margin-top: 0.6em;
}

.media .special-heading,
.icon-box .special-heading {
	font-family: "Poppins", sans-serif;
	margin: 0;
}

.media.ls,
.media.ds,
.media.cs,
.media.bordered,
.media.hero-bg,
.media.muted-bg,
.media.box-shadow {
	padding: 30px;
}

.media.ls [class*='bg-'],
.media.ls .icon-bordered,
.media.ds [class*='bg-'],
.media.ds .icon-bordered,
.media.cs [class*='bg-'],
.media.cs .icon-bordered,
.media.bordered [class*='bg-'],
.media.bordered .icon-bordered,
.media.hero-bg [class*='bg-'],
.media.hero-bg .icon-bordered,
.media.muted-bg [class*='bg-'],
.media.muted-bg .icon-bordered,
.media.box-shadow [class*='bg-'],
.media.box-shadow .icon-bordered {
	margin-right: 10px;
}

.media.ls [class*='bg-']:last-child,
.media.ls .icon-bordered:last-child,
.media.ds [class*='bg-']:last-child,
.media.ds .icon-bordered:last-child,
.media.cs [class*='bg-']:last-child,
.media.cs .icon-bordered:last-child,
.media.bordered [class*='bg-']:last-child,
.media.bordered .icon-bordered:last-child,
.media.hero-bg [class*='bg-']:last-child,
.media.hero-bg .icon-bordered:last-child,
.media.muted-bg [class*='bg-']:last-child,
.media.muted-bg .icon-bordered:last-child,
.media.box-shadow [class*='bg-']:last-child,
.media.box-shadow .icon-bordered:last-child {
	margin-left: 30px;
	margin-right: 0;
}

.media .media-body > p:first-child {
	margin-top: -0.2em;
}

.side-icon-box {
	margin: 15px 0 50px;
}

.side-icon-box h4 {
	letter-spacing: 0.17em;
	margin-bottom: 15px;
	margin-top: 0;
	text-transform: uppercase;
}

@media (min-width: 1200px) {
	.side-icon-box .icon-styled + .media-body {
		margin-left: 50px;
	}
}

.icon-box.hero-bg,
.icon-box.single {
	padding: 55px 57px;
}

@media (max-width: 767px) {
	.icon-box.hero-bg,
	.icon-box.single {
		padding: 30px;
	}
}

.teaser-contact-icon .border-icon {
	border: 4px solid #fff;
	border-radius: 50%;
	display: inline-block;
	font-size: 65px;
	height: 2.5em;
	padding: 4px;
	width: 2.5em;
}

.teaser-contact-icon .border-icon:hover {
	-webkit-animation: scaleDisappear 0.5s;
	animation: scaleDisappear 0.5s;
}

.teaser-contact-icon .border-icon i {
	font-size: 90px;
	line-height: 1.6em;
}

.teaser-contact-icon .border-icon .call-icon {
	border: 4px solid #000;
}

.teaser-contact-icon .teaser-icon {
	background-color: #fff;
	border-radius: 50%;
	color: #1f2732;
	font-weight: 500;
	height: 100%;
	width: 100%;
}

.teaser-contact-icon h6 {
	margin: 23px 0 13px;
}

@media (max-width: 767px) {
	.teaser-contact-icon h6 {
		font-size: 25px;
		margin: 13px 0 3px;
	}
}

.teaser-contact-icon strong {
	color: #1f2732;
	font-weight: 500;
}

.call-icon .border-icon {
	border: 4px solid #a0ce4e;
}

.call-icon .border-icon i {
	color: #fff;
}

.call-icon .teaser-icon {
	background-color: #a0ce4e;
}

.write-icon .border-icon {
	border: 4px solid #00bea3;
}

.write-icon .border-icon i {
	color: #fff;
}

.write-icon .teaser-icon {
	background-color: #00bea3;
}

.visit-icon .border-icon {
	border: 4px solid #f1894c;
}

.visit-icon .border-icon i {
	color: #fff;
}

.visit-icon .teaser-icon {
	background-color: #f1894c;
}

/*
** Special Heading
*/
.special-heading {
	font-size: 36px;
	font-weight: 900;
	line-height: 1;
	word-wrap: break-word;
}

.special-heading.text-lowercase {
	font-size: 62px;
	font-weight: 300;
	line-height: 1.1;
	margin-bottom: 0;
}

.special-heading.big,
.special-heading.text-uppercase {
	font-size: 62px;
	font-weight: 900;
	line-height: 0.8;
}

.special-heading.big {
	margin-bottom: 0.65em;
	margin-top: 0.65em;
}

@media (max-width: 1200px) {
	.special-heading.big,
	.special-heading.text-lowercase,
	.special-heading.text-uppercase {
		font-size: 32px;
		line-height: 1;
	}
}

.special-heading + h3 {
	margin-top: -1em;
}

.special-heading + p {
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	line-height: 1.6em;
	text-transform: uppercase;
}

@media (min-width: 1200px) {
	.special-heading + p.extra-letter-spacing {
		letter-spacing: 2em;
	}
}

.special-heading.text-center + p {
	text-align: center;
}

h3.small .special-heading {
	font-size: 38px;
	line-height: 1;
}

h3.small {
	font-size: 20px;
	margin-bottom: 36px;
}

/*
** Number Card
*/
.number-card {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	margin: 30px 0;
	overflow: hidden;
	position: relative;
}

.number-card .card-number span {
	display: block;
	font-family: "Poppins", sans-serif;
	font-size: 60px;
	font-weight: 700;
	letter-spacing: -0.03em;
	line-height: 1;
	margin-left: -0.32em;
	margin-top: -0.14em;
	position: relative;
}

.number-card .card-number span:after {
	bottom: -0.09em;
	content: "•";
	font-size: 0.62em;
	position: absolute;
	right: -0.4em;
}

@media (min-width: 992px) {
	.number-card .card-number span {
		font-size: 100px;
	}
}

@media (min-width: 1200px) {
	.number-card .card-number span {
		font-size: 238px;
	}
}

.number-card .card-content {
	padding: 36px 36px 46px;
}

@media (min-width: 992px) {
	.number-card .card-content {
		padding: 56px 60px 66px 100px;
	}
}

.number-card .card-content h4 {
	line-height: 1;
	margin: 0;
}

.number-card .card-content h3 {
	font-weight: 900;
	line-height: 1;
	margin: 6px 0 25px;
}

@media (min-width: 500px) {
	.number-card .card-content h3 {
		font-size: 38px;
	}
}

@media (max-width: 499px) {
	.number-card .card-number {
		position: absolute;
	}

	.number-card .card-number span {
		font-size: 36px;
	}

	.number-card h3,
	.number-card h4 {
		display: inline-block;
	}
}

.pricing-plan {
	margin-bottom: 0;
	margin-top: 21px;
	padding: 40px 40px 10px;
	text-align: center;
}

.pricing-plan .price-wrap {
	align-items: flex-end;
	-webkit-box-align: end;
	-webkit-box-pack: center;
	display: -ms-flexbox;
	display: flex;
	display: -webkit-box;
	-ms-flex-align: end;
	-ms-flex-pack: center;
	font-family: "Poppins", sans-serif;
	font-size: 20px;
	justify-content: center;
	line-height: 0.7;
	margin: 60px 0 10px;
}

.pricing-plan .price-wrap[class*='bg-'] {
	margin-bottom: 0;
	margin-top: 50px;
	padding: 30px 30px 10px;
}

.pricing-plan .price-wrap .plan-price {
	font-size: 54px;
	font-weight: 500;
}

.pricing-plan [class*='bg-'] {
	margin-left: -41px;
	margin-right: -41px;
	padding: 10px 30px 30px;
}

.pricing-plan .plan-name[class*='bg-'] {
	margin-top: -40px;
	padding-top: 30px;
}

.pricing-plan .plan-name h3 {
	color: #fff;
	font-size: 24px;
	font-weight: 500;
	margin: 0;
	text-align: center;
	text-transform: none;
}

@media (min-width: 1200px) {
	.pricing-plan {
		padding: 0 60px 10px;
	}

	.pricing-plan [class*='bg-'] {
		margin-left: -61px;
		margin-right: -61px;
	}

	.pricing-plan .plan-name[class*='bg-'] {
		margin-top: -57px;
	}
}

.pricing-plan .plan-features {
	margin: 60px 0 20px;
}

.pricing-plan .plan-features li {
	border-color: rgba(164, 169, 185, 0.3);
	padding-bottom: 10px;
	padding-top: 10px;
}

.pricing-plan .plan-button {
	position: relative;
	top: 38px;
}

.pricing-plan .plan-button .inverse-color1 {
	background-color: #f4f4f5;
	border-color: #a0ce4e;
}

.pricing-plan .plan-button .inverse-color1:hover {
	background-color: #a0ce4e;
	border-color: #a0ce4e;
	color: #fff;
}

.pricing-plan .plan-button .inverse-color2 {
	background-color: #f4f4f5;
	border-color: #00bea3;
}

.pricing-plan .plan-button .inverse-color2:hover {
	background-color: #00bea3;
	border-color: #00bea3;
	color: #f4f4f5;
}

.pricing-plan .plan-button .inverse-color3 {
	background-color: #f4f4f5;
	border-color: #f1894c;
}

.pricing-plan .plan-button .inverse-color3:hover {
	background-color: #f1894c;
	border-color: #f1894c;
	color: #f4f4f5;
}

.pricing-plan.plan-featured {
	background-color: #1f2732;
	margin-top: -5px;
}

.pricing-plan.plan-featured .plan-button {
	top: 38px;
}

.plan-name {
	margin: 0 -60px;
	padding: 25px;
}

@media (max-width: 1199px) {
	.plan-name {
		margin: -40px -40px 0;
	}
}

@media (max-width: 991px) {
	.color1 {
		margin-bottom: 30px;
	}
}

.plan-name {
	background-color: #a0ce4e;
}

.color2 .plan-name {
	background-color: #00bea3;
}

.color3 .plan-name {
	background-color: #f1894c;
}

.plan-description {
	display: block;
	font-size: 12px;
	font-weight: bold;
	letter-spacing: 0.2em;
	line-height: 1;
	margin-top: 20px;
	text-align: center;
	text-transform: uppercase;
	width: 100%;
}

.quote-item {
	border: none;
	padding: 20px 0;
	text-align: center;
}

@media (min-width: 768px) {
	.quote-item {
		margin-left: auto;
		margin-right: auto;
		max-width: 70%;
	}
}

.quote-image {
	display: inline-block;
	position: relative;
}

.quote-image:after {
	background-color: #fff;
	border-radius: 50%;
	bottom: 0;
	color: #ff497c;
	height: 60px;
	line-height: 60px;
	position: absolute;
	right: 10px;
	text-align: center;
	width: 60px;
}

.quote-image.border-none img {
	padding: 0;
}

.quote-image img {
	background: rgba(255, 255, 255, 0.1);
	border-radius: 50%;
	box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
	padding: 9px;
}

.quote-image + p {
	margin: 30px 0 20px;
}

/*
** Items Masonry
*/
.items-tile .item-content {
	padding-bottom: 100px;
}

.items-tile .item-content h3 {
	margin-bottom: 0.3em;
	text-transform: none;
}

@media (min-width: 992px) {
	.items-tile .item-content h3 a {
		display: inline-block;
		max-height: 3.05em;
		overflow: hidden;
		padding-bottom: 0.1em;
	}

	.items-tile .item-content h3 + p {
		max-height: 5.5em;
		overflow: hidden;
	}
}

.items-tile .item-icons {
	border-bottom: 10px solid rgba(0, 0, 0, 0.1);
	border-top: 1px solid rgba(255, 255, 255, 0.2);
	bottom: 0;
	height: 70px;
	left: 0;
	line-height: 60px;
	padding: 0 40px;
	position: absolute;
	right: 0;
}

.items-tile .item-icons span {
	padding: 0 15px;
}

@media (min-width: 992px) and (max-width: 1199px) {
	.items-tile .col-lg-4 [class*='col-']:first-child .item-media {
		margin-bottom: 32px;
	}

	.items-tile .col-lg-4 [class*='col-']:last-child .item-content {
		min-height: 320px;
	}
}

@media (min-width: 1200px) {
	.items-tile .item-content {
		padding: 60px 60px 100px;
	}

	.items-tile .item-content h3 {
		font-size: 38px;
	}

	.items-tile .col-lg-4 [class*='col-']:first-child .item-media {
		margin-bottom: 16px;
	}

	.items-tile .col-lg-4 [class*='col-']:last-child .item-content {
		min-height: 388px;
	}
}

/*
filters
*/
.filters {
	-webkit-box-pack: justify;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-pack: justify;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;
	justify-content: center;
	padding-top: 30px;
}

@media (max-width: 991px) {
	.filters {
		display: block;
		text-align: center;
	}
}

.filters.gallery-filters {
	padding-bottom: 45px;
}

@media (max-width: 991px) {
	.filters.gallery-filters {
		padding-bottom: 20px;
		padding-top: 0;
	}
}

.filters.filters-active-tob-border {
	padding-top: 0;
}

.filters.filters-active-tob-border a {
	padding-bottom: 60px;
	padding-top: 60px;
	position: relative;
}

@media (max-width: 991px) {
	.filters.filters-active-tob-border a {
		padding-bottom: 7px;
		padding-top: 10px;
	}
}

.filters.filters-active-tob-border a.active:after {
	background: #ff497c;
	content: "";
	height: 1px;
	left: 0;
	position: absolute;
	right: 0;
	top: 0;
	z-index: 1;
}

.filters a {
	line-height: 3em;
	padding: 0 15px;
}

.filters .active {
	color: var(--theme-color);
}

@media (min-width: 992px) {
	.isotope-wrapper + .row {
		margin-top: 60px;
	}

	.isotope-wrapper.c-mb-30 + .row {
		margin-top: 30px;
	}

	.isotope-wrapper.c-mb-10 + .row {
		margin-top: 50px;
	}

	.isotope-wrapper.c-mb-1 + .row {
		margin-top: 59px;
	}
}

.contact-form textarea {
	min-height: 180px;
}

.excerpt {
	color: #1f2732;
	font-size: 20px;
	font-weight: 400;
}

/*
** Widgets
*/
aside h2 {
	line-height: 1;
	margin-bottom: 0;
}

aside > * + * {
	margin-top: 57px;
}

@media (max-width: 991px) {
	aside > * + * {
		margin-top: 30px;
	}
}

.widget {
	position: relative;
}

.widget > h6,
.widget .widget-title {
	font-size: 24px;
	font-weight: 500;
	line-height: 1;
	margin-bottom: 27px;
}

.widget > h2:last-child {
	line-height: 1;
}

.widget li.media {
	margin-bottom: 20px;
}

.widget li.media img {
	max-width: 80px;
}

.widget li.media h3,
.widget li.media h4 {
	font-size: inherit;
	font-weight: 700;
	line-height: 1.4;
	margin-bottom: 0.5em;
	text-transform: none;
}

.widget li.media p {
	line-height: 1.4;
	margin-bottom: 0.5em;
}

.page_footer .widget {
	margin-bottom: 50px;
}

@media (max-width: 767px) {
	.page_footer .widget {
		margin-bottom: 35px;
	}
}

.page_footer .widget > h3,
.page_footer .widget .widget-title {
	margin-bottom: 2.2em;
}

@media (max-width: 991px) {
	.page_footer .widget > h3,
	.page_footer .widget .widget-title {
		margin-bottom: 20px;
	}
}

.widget-title.next-image-background {
	position: relative;
	z-index: 2;
}

.widget-title.next-image-background + img {
	left: 0;
	opacity: 0.5;
	position: absolute;
	top: -15px;
}

.text-center .widget-title.next-image-background + img {
	left: 50%;
	-webkit-transform: translateX(-50%);
	-ms-transform: translateX(-50%);
	transform: translateX(-50%);
}

@media (max-width: 991px) {
	aside {
		margin: 60px auto;
		max-width: 370px;
	}
}

/* affix-aside */
.affix-aside {
	position: relative;
}

.affix-aside.affix {
	position: fixed;
	top: 100px;
}

.affix-aside.affix-bottom {
	position: absolute !important;
}

.affix-aside.affix-top {
	left: auto !important;
	width: inherit !important;
}

@media (max-width: 991px) {
	.affix-aside,
	.affix-aside.affix-top,
	.affix-aside.affix,
	.affix-aside.affix-bottom {
		position: static !important;
		width: 100% !important;
	}
}

.stars > span {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
}

.stars a {
	color: transparent;
	position: relative;
	text-indent: -999em;
	width: 1em;
}

.stars a:before {
	font-family: "FontAwesome";
	height: 1em;
	left: 0;
	line-height: 1;
	position: absolute;
	text-indent: 0;
	top: 0;
	width: 1em;
}

.stars a:before,
.stars a:hover ~ a:before {
	color: #ff497c;
	content: "\f006";
	font-size: 14px;
	font-weight: 600;
}

.stars.selected a.active:before,
.stars:hover a:before {
	color: #ff497c;
	content: "\f005";
	opacity: 1;
}

.stars.selected a.active ~ a:before {
	color: #808080;
	content: "\f005";
	opacity: .75;
}

.stars.selected a:not(.active):before {
	color: #ff497c;
	content: "\f005";
	opacity: 1;
}

.star-rating {
	color: #ff497c;
	font-family: "FontAwesome";
	font-size: 1em;
	height: 1em;
	letter-spacing: 0.1em;
	line-height: 1;
	overflow: hidden;
	position: relative;
	width: 5em;
}

.star-rating:before {
	content: "\f006\f006\f006\f006\f006";
	float: left;
	left: 0;
	position: absolute;
	top: 0;
}

.star-rating span {
	float: left;
	left: 0;
	overflow: hidden;
	padding-top: 1.5em;
	position: absolute;
	top: 0;
}

.star-rating span:before {
	content: "\f005\f005\f005\f005\f005";
	left: 0;
	position: absolute;
	top: 0;
}

.categories-dropdown .widget-title {
	margin-top: -4px;
}

/*
widget_search,
widget_mailchimp
widget_product_search
*/
.widget_search form,
.widget_product_search form,
.widget_mailchimp form {
	margin: auto;
	max-width: 370px;
	position: relative;
}

.widget_search label,
.widget_product_search label,
.widget_mailchimp label {
	display: inline;
	margin: 0;
	padding: 0;
}

.widget_search input,
.widget_product_search input,
.widget_mailchimp input {
	max-width: 370px;
	width: 100%;
}

.widget_search .form-control::-webkit-input-placeholder,
.widget_product_search .form-control::-webkit-input-placeholder,
.widget_mailchimp .form-control::-webkit-input-placeholder {
	text-align: center;
}

.widget_search .form-control::-webkit-input-placeholder {
	text-align: left;
}

.widget_search button,
.widget_mailchimp button,
.widget_product_search form input[type="submit"],
.widget_product_search form:before {
	background-color: transparent;
	border: none;
	opacity: 1;
	padding-left: 10px;
	padding-right: 10px;
	position: absolute;
	right: 0;
	text-align: center;
	top: 0;
	width: 60px;
}

.widget_search button,
.widget_mailchimp button,
.widget_product_search form input[type="submit"] {
	padding: 21px 21px 18px 10px;
}

.widget_search button:hover,
.widget_mailchimp button:hover,
.widget_product_search form input[type="submit"]:hover {
	opacity: 0.5;
}

.widget_search button:before,
.widget_mailchimp button:before,
.widget_product_search form:before {
	color: var(--theme-color);
	content: "\f002";
	font-family: "FontAwesome";
	font-size: 14px;
}

.widget_mailchimp form button:before {
	content: "\f040";
}

.widget_product_search form:before {
	line-height: 60px;
}

.widget_product_search input[type="submit"] {
	color: transparent;
	font-size: 0;
}

/*
widget_archive
widget_categories
widget_nav_menu
widget_meta
widget_pages
widget_recent_comments
widget_recent_entries
*/
.widget_archive ul,
.widget_categories ul,
.widget_nav_menu ul,
.widget_meta ul,
.widget_pages ul,
.widget_recent_comments ul,
.widget_recent_entries ul {
	list-style: none;
	margin: 0;
	padding: 0;
	width: 100%;
}

.widget_archive ul ul li,
.widget_categories ul ul li,
.widget_nav_menu ul ul li,
.widget_meta ul ul li,
.widget_pages ul ul li,
.widget_recent_comments ul ul li,
.widget_recent_entries ul ul li {
	padding-left: 20px;
}

.widget_archive ul ul li:last-child,
.widget_categories ul ul li:last-child,
.widget_nav_menu ul ul li:last-child,
.widget_meta ul ul li:last-child,
.widget_pages ul ul li:last-child,
.widget_recent_comments ul ul li:last-child,
.widget_recent_entries ul ul li:last-child {
	border-bottom: none;
	padding-bottom: 0;
}

.widget_archive li,
.widget_categories li,
.widget_nav_menu li,
.widget_meta li,
.widget_pages li,
.widget_recent_comments li,
.widget_recent_entries li {
	border-bottom: 1px solid #e1e1e1;
	border-top: 1px solid #e1e1e1;
}

.widget_archive li + li,
.widget_categories li + li,
.widget_nav_menu li + li,
.widget_meta li + li,
.widget_pages li + li,
.widget_recent_comments li + li,
.widget_recent_entries li + li {
	border-top: none;
}

.widget_archive a:empty,
.widget_archive li > a:not([href]),
.widget_categories a:empty,
.widget_categories li > a:not([href]),
.widget_nav_menu a:empty,
.widget_nav_menu li > a:not([href]),
.widget_meta a:empty,
.widget_meta li > a:not([href]),
.widget_pages a:empty,
.widget_pages li > a:not([href]),
.widget_recent_comments a:empty,
.widget_recent_comments li > a:not([href]),
.widget_recent_entries a:empty,
.widget_recent_entries li > a:not([href]) {
	display: none !important;
}

.widget_archive li,
.widget_categories li,
.widget_nav_menu li,
.widget_meta li,
.widget_pages li {
	align-items: center;
	-webkit-box-align: center;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-align: center;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;
}

.widget_archive li a,
.widget_categories li a,
.widget_nav_menu li a,
.widget_meta li a,
.widget_pages li a {
	-webkit-box-flex: 10;
	display: inline-block;
	flex-grow: 10;
	-ms-flex-positive: 10;
	padding-bottom: 12px;
	padding-top: 12px;
}

.widget_recent_comments li,
.widget_recent_entries li {
	padding-bottom: 12px;
	padding-top: 12px;
}

.widget_recent_comments li:before,
.widget_recent_entries li:before {
	color: #ff497c;
	content: "\f111";
	font-family: "FontAwesome";
	font-size: 5px;
	padding-right: 15px;
	position: relative;
	top: -2px;
}

.page_copyright .widget_nav_menu li,
.page_topline .widget_nav_menu li {
	border: none;
	display: inline-block;
	padding-bottom: 0;
	padding-right: 5px;
	padding-top: 0;
	position: relative;
}

.page_copyright .widget_nav_menu li:before,
.page_topline .widget_nav_menu li:before {
	background-color: rgba(0, 0, 0, 0.1);
	bottom: 5px;
	content: "";
	display: block;
	left: -5px;
	opacity: 0.3;
	padding: 0;
	position: absolute;
	top: 5px;
	width: 1px;
}

.page_copyright .widget_nav_menu li:first-child:before,
.page_topline .widget_nav_menu li:first-child:before {
	display: none;
}

.page_copyright .widget_nav_menu a,
.page_topline .widget_nav_menu a {
	padding: 0 10px;
}

.page_copyright .widget_nav_menu a:before,
.page_topline .widget_nav_menu a:before {
	display: none;
}

.widget_categories select,
.widget_archive select {
	max-width: 370px;
	width: 100%;
}

.cat li:before {
	color: #1f2732;
}

/* widget_calendar */
.calendar_wrap {
	margin-bottom: 0;
	-webkit-overflow-scrolling: touch;
	-ms-overflow-style: -ms-autohiding-scrollbar;
	width: 100%;
}

@media (min-width: 768px) and (max-width: 992px) {
	.calendar_wrap {
		overflow-x: auto;
		overflow-y: hidden;
	}
}

.widget_calendar table {
	-webkit-box-direction: normal;
	-webkit-box-orient: vertical;
	display: -ms-flexbox;
	display: -webkit-box;
	display: flex;
	flex-direction: column;
	-ms-flex-direction: column;
	margin: 0;
	max-width: 370px;
	position: relative;
	text-align: center;
}

.widget_calendar caption {
	background-color: #ff497c;
	color: #fff;
	line-height: 1;
	padding: 22px 0 22px;
	text-align: center;
}

.widget_calendar thead {
	background-color: #323232;
	color: #fff;
}

.widget_calendar thead th {
	text-align: center;
	width: 100px;
}

.widget_calendar thead th:first-child {
	padding-left: 20px;
}

@media (max-width: 991px) {
	.widget_calendar thead th:first-child {
		padding-left: 5px;
	}
}

.widget_calendar thead th:last-child {
	padding-right: 20px;
}

.widget_calendar tbody {
	border: 1px solid #e1e1e1;
	border-top: none;
}

.widget_calendar tbody tr:first-child td {
	padding-top: 30px;
}

.widget_calendar tbody tr:last-child td {
	padding-bottom: 30px;
}

.widget_calendar tbody td {
	padding: 10px 4px;
	position: relative;
	width: 100px;
}

.widget_calendar tbody td:first-child {
	padding-left: 20px;
}

.widget_calendar tbody td:last-child {
	padding-right: 20px;
}

.widget_calendar tbody td a {
	font-weight: 700;
}

.widget_calendar th {
	color: inherit;
}

.widget_calendar tfoot td {
	position: absolute;
	top: 0;
}

.widget_calendar tfoot td a {
	color: transparent;
	display: inline-block;
	font-size: 0;
	height: 60px;
	line-height: 60px;
	padding: 0 25px;
	text-align: center;
}

.widget_calendar tfoot td a:hover {
	background-color: #ff497c;
	border-color: #ff497c;
}

.widget_calendar tfoot td a:before,
.widget_calendar tfoot td a:after {
	color: #fff;
	font-family: "FontAwesome";
	font-size: 14px;
}

.widget_calendar tfoot td.pad {
	display: none;
}

.widget_calendar tfoot td:first-child {
	left: 0;
	padding: 0;
}

.widget_calendar tfoot td:first-child a {
	border-right: 1px solid rgba(255, 255, 255, 0.2);
}

.widget_calendar tfoot td:first-child a:before {
	content: "\f053";
}

.widget_calendar tfoot td:last-child {
	padding: 0;
	right: 0;
}

.widget_calendar tfoot td:last-child a {
	border-left: 1px solid rgba(255, 255, 255, 0.2);
}

.widget_calendar tfoot td:last-child a:after {
	content: "\f054";
}

/* widget_rss */
.widget_rss .widget-title .rsswidget:first-child img {
	display: none;
}

.widget_rss .widget-title .rsswidget:first-child:before {
	content: "\f09e";
	font-family: "FontAwesome";
	font-size: 0.8em;
	padding-right: 0.3em;
	position: relative;
	top: -1px;
}

.widget_rss ul {
	list-style: none;
	padding-left: 0;
}

.widget_rss ul a {
	display: block;
	letter-spacing: 0.1em;
	line-height: 1.5;
	text-transform: uppercase;
}

.widget_rss li cite:last-child {
	display: block;
	margin-top: 0.5em;
}

.widget_rss li + li {
	margin-top: 1.5em;
}

.widget_rss .rss-date {
	color: #323232;
	display: block;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	line-height: 1.6em;
	margin: 0.8em 0;
	text-transform: uppercase;
}

/* widget_tag_cloud */
.widget_tag_cloud a {
	background-color: #f4f4f5;
	border-radius: 50px;
	display: inline-block;
	font-size: 12px !important;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	line-height: 1.6em;
	margin: 0 0 13px 0;
	padding: 6px 18px 4px 22px;
	text-align: center;
	text-transform: uppercase;
}

.widget_tag_cloud a:hover {
	background-color: #ff497c;
	border-color: #ff497c;
	color: #fff;
}

/* widget_flickr */
.widget_flickr ul {
	margin: 0;
	padding: 0;
}

.widget_flickr li {
	display: inline-block;
	margin: 0 10px 10px 0;
}

.widget_flickr img {
	border-radius: 1px;
	max-width: 155px;
}

@media (max-width: 991px) {
	.widget_flickr img {
		max-width: 135px;
	}
}

.widget_flickr a {
	opacity: 1;
}

.widget_flickr a:hover {
	opacity: 0.6;
}

.widget_instagram .photo {
	display: inline-block;
}

.widget_instagram img {
	max-width: 82px;
}

/* access_press */
.apsc-facebook-icon {
	background-color: #3b5998;
}

.apsc-twitter-icon {
	background-color: #1dcaff;
}

.apsc-youtube-icon {
	background-color: #e52d27;
}

.apsc-soundcloud-icon {
	background-color: #f80;
}

.apsc-dribble-icon {
	background-color: #ea4c89;
}

.apsc-comment-icon {
	background-color: #464646;
}

.apsc-dribbble-icon {
	background-color: #ea4c8d;
}

.apsc-edit-icon {
	background-color: #837d7d;
}

.apsc-google-plus-icon {
	background-color: #dd4b39;
}

.apsc-instagram-icon {
	background-color: #3f729b;
}

.apsc-each-profile a {
	color: white !important;
}

.apsc-each-profile a:hover {
	color: white !important;
	text-decoration: none !important;
}

.apsc-theme-4 .apsc-each-profile {
	margin-bottom: 1px;
	margin-right: 1px;
}

.apsc-theme-4 .apsc-inner-block {
	-webkit-box-pack: end;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-pack: end;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;
	justify-content: flex-end;
}

.apsc-theme-4 .social-icon {
	display: inline-block;
	margin-right: auto;
	padding: 4px 0;
	-webkit-transition: all 0.5s ease-in-out;
	transition: all 0.5s ease-in-out;
}

.apsc-theme-4 .apsc-each-profile a {
	color: #fff;
	display: block;
	font-size: 12px;
	line-height: 1;
	padding: 20px 18px 20px 70px;
	position: relative;
	text-transform: uppercase;
}

.apsc-theme-4 .apsc-each-profile a:hover {
	opacity: 0.8;
}

.apsc-theme-4 .apsc-each-profile a .fa {
	align-items: center;
	border-right: 1px solid rgba(255, 255, 255, 0.4);
	bottom: 0;
	-webkit-box-align: center;
	-webkit-box-pack: center;
	display: -webkit-box;
	display: flex;
	display: -ms-flexbox;
	-ms-flex-align: center;
	-ms-flex-pack: center;
	font-size: 16px;
	justify-content: center;
	left: 0;
	position: absolute;
	top: 0;
	-webkit-transform: none;
	-ms-transform: none;
	transform: none;
	-webkit-transition: all 0.5s ease-in-out;
	transition: all 0.5s ease-in-out;
	width: 60px;
}

.apsc-theme-4 .apsc-count {
	border-radius: 0;
	color: #fff;
	display: inline-block;
	font-size: inherit;
	padding: 4px 4px;
	position: relative;
	text-align: center;
	-webkit-transition: all 0.5s ease-in-out;
	transition: all 0.5s ease-in-out;
}

.apsc-theme-4 .apsc-media-type {
	display: inline-block;
	padding: 4px 0;
}

/* widget_twitter */
.tweet_avatar {
	float: left;
	margin-top: 4px;
}

.tweet_avatar img {
	display: none;
	max-width: 25px;
}

.tweet_avatar:before {
	color: #55acee;
	content: "\f099";
	font-family: "FontAwesome";
}

.tweet_right {
	margin-left: 35px;
	overflow: hidden;
	zoom: 1;
}

.tweet_list {
	list-style: none;
	padding: 0;
}

.tweet_list li + li {
	clear: both;
	padding-top: 20px;
}

.tweet_text a:last-child {
	display: block;
}

.tweet_time {
	display: block;
}

/*.widget_slider*/
.widget_slider h4:first-child {
	font-weight: 400;
	line-height: 1;
	margin-bottom: 0.3em;
	margin-top: -1em;
	text-transform: none;
}

.widget_slider .cat-links {
	bottom: 0;
	left: 0;
	margin-bottom: -4px;
	position: absolute;
}

/*.widget_post_tabs*/
.widget_post_tabs h4:first-child {
	font-weight: 400;
	line-height: 1;
	margin-bottom: 0.3em;
	margin-top: -1em;
	text-transform: none;
}

.widget_post_tabs .vertical-item {
	margin-bottom: 2em;
}

.widget_post_tabs .vertical-item:last-child {
	margin-bottom: 0;
}

/*.widget_posts_2cols*/
.widget_posts_2cols ul {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;
}

.widget_posts_2cols li {
	margin-top: 20px;
	width: 50%;
}

.widget_posts_2cols li:nth-child(even) {
	padding-left: 10px;
}

.widget_posts_2cols li:nth-child(odd) {
	padding-right: 10px;
}

.widget_posts_2cols li:nth-child(1),
.widget_posts_2cols li:nth-child(2) {
	margin-top: 0;
}

.widget_posts_2cols h5 {
	font-size: 16px;
	font-weight: 700;
	margin: 10px 0 0;
	text-transform: none;
}

/*
** Social Icons - Font Awesome Brand Icons
*/
/* social icon layout */
a[class*='fa-']:before {
	display: inline-block;
	font-family: "FontAwesome", sans-serif;
	font-size: 14px;
	line-height: 1;
	width: 1em;
}

a.fa {
	font-size: 0;
	line-height: 0;
	margin-left: 8px;
	margin-right: 8px;
	text-align: center;
}

a.fa.bg-icon,
a.fa .tooltip,
a.fa.color-bg-icon,
a.fa .tooltip,
a.fa.border-icon {
	margin-left: 3px;
	margin-right: 3px;
}

a.fa:first-child {
	margin-left: 0;
}

a.fa:last-child {
	margin-right: 0;
}

a.border-icon,
a.bg-icon,
a.color-bg-icon {
	margin-bottom: 4px;
}

a.border-icon:before,
a.bg-icon:before,
a.color-bg-icon:before {
	height: 2.6em;
	line-height: 2.6em;
	width: 2.6em;
}

a[class*='fa-'].rounded-icon {
	border-radius: 50%;
}

/*social icons brand colors*/
a.color-icon.fa-500px,
a[class*="fa-"].fa-500px:hover {
	color: #0099e5;
}

a.color-icon.fa-adn,
a[class*="fa-"].fa-adn:hover {
	color: #4a484c;
}

a.color-icon.fa-amazon,
a[class*="fa-"].fa-amazon:hover {
	color: #f90;
}

a.color-icon.fa-android,
a[class*="fa-"].fa-android:hover {
	color: #a4c639;
}

a.color-icon.fa-angellist,
a[class*="fa-"].fa-angellist:hover {
	color: #000;
}

a.color-icon.fa-apple,
a[class*="fa-"].fa-apple:hover {
	color: #979797;
}

a.color-icon.fa-behance-square,
a[class*="fa-"].fa-behance-square:hover {
	color: #1769ff;
}

a.color-icon.fa-behance,
a[class*="fa-"].fa-behance:hover {
	color: #1769ff;
}

a.color-icon.fa-bitbucket-square,
a[class*="fa-"].fa-bitbucket-square:hover {
	color: #205081;
}

a.color-icon.fa-bitbucket,
a[class*="fa-"].fa-bitbucket:hover {
	color: #205081;
}

a.color-icon.fa-bitcoin,
a[class*="fa-"].fa-bitcoin:hover {
	color: #ee9209;
}

a.color-icon.fa-black-tie,
a[class*="fa-"].fa-black-tie:hover {
	color: #222;
}

a.color-icon.fa-btc,
a[class*="fa-"].fa-btc:hover {
	color: #ee9209;
}

a.color-icon.fa-buysellads,
a[class*="fa-"].fa-buysellads:hover {
	color: #c90100;
}

a.color-icon.fa-cc-amex,
a[class*="fa-"].fa-cc-amex:hover {
	color: #007bc1;
}

a.color-icon.fa-cc-diners-club,
a[class*="fa-"].fa-cc-diners-club:hover {
	color: #004a97;
}

a.color-icon.fa-cc-discover,
a[class*="fa-"].fa-cc-discover:hover {
	color: #f68121;
}

a.color-icon.fa-cc-jcb,
a[class*="fa-"].fa-cc-jcb:hover {
	color: #003a8f;
}

a.color-icon.fa-cc-mastercard,
a[class*="fa-"].fa-cc-mastercard:hover {
	color: #0a3a82;
}

a.color-icon.fa-cc-paypal,
a[class*="fa-"].fa-cc-paypal:hover {
	color: #253b80;
}

a.color-icon.fa-cc-stripe,
a[class*="fa-"].fa-cc-stripe:hover {
	color: #00afe1;
}

a.color-icon.fa-cc-visa,
a[class*="fa-"].fa-cc-visa:hover {
	color: #0157a2;
}

a.color-icon.fa-chrome,
a[class*="fa-"].fa-chrome:hover {
	color: #4587f3;
}

a.color-icon.fa-codepen,
a[class*="fa-"].fa-codepen:hover {
	color: #000;
}

a.color-icon.fa-connectdevelop,
a[class*="fa-"].fa-connectdevelop:hover {
	color: #391448;
}

a.color-icon.fa-contao,
a[class*="fa-"].fa-contao:hover {
	color: #eb8623;
}

a.color-icon.fa-creative-commons,
a[class*="fa-"].fa-creative-commons:hover {
	color: #231f20;
}

a.color-icon.fa-css3,
a[class*="fa-"].fa-css3:hover {
	color: #1680c0;
}

a.color-icon.fa-dashcube,
a[class*="fa-"].fa-dashcube:hover {
	color: #7f7f7f;
}

a.color-icon.fa-delicious,
a[class*="fa-"].fa-delicious:hover {
	color: #39f;
}

a.color-icon.fa-deviantart,
a[class*="fa-"].fa-deviantart:hover {
	color: #4e6252;
}

a.color-icon.fa-digg,
a[class*="fa-"].fa-digg:hover {
	color: #000;
}

a.color-icon.fa-dribbble,
a[class*="fa-"].fa-dribbble:hover {
	color: #444;
}

a.color-icon.fa-dropbox,
a[class*="fa-"].fa-dropbox:hover {
	color: #007ee5;
}

a.color-icon.fa-drupal,
a[class*="fa-"].fa-drupal:hover {
	color: #0077c0;
}

a.color-icon.fa-empire,
a[class*="fa-"].fa-empire:hover {
	color: #000;
}

a.color-icon.fa-expeditedssl,
a[class*="fa-"].fa-expeditedssl:hover {
	color: #343433;
}

a.color-icon.fa-facebook-official,
a[class*="fa-"].fa-facebook-official:hover {
	color: #3b5998;
}

a.color-icon.fa-facebook-square,
a[class*="fa-"].fa-facebook-square:hover {
	color: #3b5998;
}

a.color-icon.fa-facebook,
a[class*="fa-"].fa-facebook:hover {
	color: #3b5998;
}

a.color-icon.fa-firefox,
a[class*="fa-"].fa-firefox:hover {
	color: #e66000;
}

a.color-icon.fa-flickr,
a[class*="fa-"].fa-flickr:hover {
	color: #ff0084;
}

a.color-icon.fa-fonticons,
a[class*="fa-"].fa-fonticons:hover {
	color: #1c1e29;
}

a.color-icon.fa-forumbee,
a[class*="fa-"].fa-forumbee:hover {
	color: #83ad13;
}

a.color-icon.fa-foursquare,
a[class*="fa-"].fa-foursquare:hover {
	color: #0072b1;
}

a.color-icon.fa-ge,
a[class*="fa-"].fa-ge:hover {
	color: #000;
}

a.color-icon.fa-get-pocket,
a[class*="fa-"].fa-get-pocket:hover {
	color: #d3505a;
}

a.color-icon.fa-gg-circle,
a[class*="fa-"].fa-gg-circle:hover {
	color: #000;
}

a.color-icon.fa-gg,
a[class*="fa-"].fa-gg:hover {
	color: #000;
}

a.color-icon.fa-git-square,
a[class*="fa-"].fa-git-square:hover {
	color: #333;
}

a.color-icon.fa-500px,
a[class*="fa-"].fa-500px:hover {
	color: #0099e5;
}

a.color-icon.fa-adn,
a[class*="fa-"].fa-adn:hover {
	color: #4a484c;
}

a.color-icon.fa-amazon,
a[class*="fa-"].fa-amazon:hover {
	color: #f90;
}

a.color-icon.fa-android,
a[class*="fa-"].fa-android:hover {
	color: #a4c639;
}

a.color-icon.fa-angellist,
a[class*="fa-"].fa-angellist:hover {
	color: #000;
}

a.color-icon.fa-apple,
a[class*="fa-"].fa-apple:hover {
	color: #979797;
}

a.color-icon.fa-behance-square,
a[class*="fa-"].fa-behance-square:hover {
	color: #1769ff;
}

a.color-icon.fa-behance,
a[class*="fa-"].fa-behance:hover {
	color: #1769ff;
}

a.color-icon.fa-bitbucket-square,
a[class*="fa-"].fa-bitbucket-square:hover {
	color: #205081;
}

a.color-icon.fa-bitbucket,
a[class*="fa-"].fa-bitbucket:hover {
	color: #205081;
}

a.color-icon.fa-bitcoin,
a[class*="fa-"].fa-bitcoin:hover {
	color: #ee9209;
}

a.color-icon.fa-black-tie,
a[class*="fa-"].fa-black-tie:hover {
	color: #222;
}

a.color-icon.fa-btc,
a[class*="fa-"].fa-btc:hover {
	color: #ee9209;
}

a.color-icon.fa-buysellads,
a[class*="fa-"].fa-buysellads:hover {
	color: #c90100;
}

a.color-icon.fa-cc-amex,
a[class*="fa-"].fa-cc-amex:hover {
	color: #007bc1;
}

a.color-icon.fa-cc-diners-club,
a[class*="fa-"].fa-cc-diners-club:hover {
	color: #004a97;
}

a.color-icon.fa-cc-discover,
a[class*="fa-"].fa-cc-discover:hover {
	color: #f68121;
}

a.color-icon.fa-cc-jcb,
a[class*="fa-"].fa-cc-jcb:hover {
	color: #003a8f;
}

a.color-icon.fa-cc-mastercard,
a[class*="fa-"].fa-cc-mastercard:hover {
	color: #0a3a82;
}

a.color-icon.fa-cc-paypal,
a[class*="fa-"].fa-cc-paypal:hover {
	color: #253b80;
}

a.color-icon.fa-cc-stripe,
a[class*="fa-"].fa-cc-stripe:hover {
	color: #00afe1;
}

a.color-icon.fa-cc-visa,
a[class*="fa-"].fa-cc-visa:hover {
	color: #0157a2;
}

a.color-icon.fa-chrome,
a[class*="fa-"].fa-chrome:hover {
	color: #4587f3;
}

a.color-icon.fa-codepen,
a[class*="fa-"].fa-codepen:hover {
	color: #000;
}

a.color-icon.fa-connectdevelop,
a[class*="fa-"].fa-connectdevelop:hover {
	color: #391448;
}

a.color-icon.fa-contao,
a[class*="fa-"].fa-contao:hover {
	color: #eb8623;
}

a.color-icon.fa-creative-commons,
a[class*="fa-"].fa-creative-commons:hover {
	color: #231f20;
}

a.color-icon.fa-css3,
a[class*="fa-"].fa-css3:hover {
	color: #1680c0;
}

a.color-icon.fa-dashcube,
a[class*="fa-"].fa-dashcube:hover {
	color: #7f7f7f;
}

a.color-icon.fa-delicious,
a[class*="fa-"].fa-delicious:hover {
	color: #39f;
}

a.color-icon.fa-deviantart,
a[class*="fa-"].fa-deviantart:hover {
	color: #4e6252;
}

a.color-icon.fa-digg,
a[class*="fa-"].fa-digg:hover {
	color: #000;
}

a.color-icon.fa-dribbble,
a[class*="fa-"].fa-dribbble:hover {
	color: #444;
}

a.color-icon.fa-dropbox,
a[class*="fa-"].fa-dropbox:hover {
	color: #007ee5;
}

a.color-icon.fa-drupal,
a[class*="fa-"].fa-drupal:hover {
	color: #0077c0;
}

a.color-icon.fa-empire,
a[class*="fa-"].fa-empire:hover {
	color: #000;
}

a.color-icon.fa-expeditedssl,
a[class*="fa-"].fa-expeditedssl:hover {
	color: #343433;
}

a.color-icon.fa-facebook-official,
a[class*="fa-"].fa-facebook-official:hover {
	color: #3b5998;
}

a.color-icon.fa-facebook-square,
a[class*="fa-"].fa-facebook-square:hover {
	color: #3b5998;
}

a.color-icon.fa-facebook,
a[class*="fa-"].fa-facebook:hover {
	color: #3b5998;
}

a.color-icon.fa-firefox,
a[class*="fa-"].fa-firefox:hover {
	color: #e66000;
}

a.color-icon.fa-flickr,
a[class*="fa-"].fa-flickr:hover {
	color: #ff0084;
}

a.color-icon.fa-fonticons,
a[class*="fa-"].fa-fonticons:hover {
	color: #1c1e29;
}

a.color-icon.fa-forumbee,
a[class*="fa-"].fa-forumbee:hover {
	color: #83ad13;
}

a.color-icon.fa-foursquare,
a[class*="fa-"].fa-foursquare:hover {
	color: #0072b1;
}

a.color-icon.fa-ge,
a[class*="fa-"].fa-ge:hover {
	color: #000;
}

a.color-icon.fa-get-pocket,
a[class*="fa-"].fa-get-pocket:hover {
	color: #d3505a;
}

a.color-icon.fa-gg-circle,
a[class*="fa-"].fa-gg-circle:hover {
	color: #000;
}

a.color-icon.fa-gg,
a[class*="fa-"].fa-gg:hover {
	color: #000;
}

a.color-icon.fa-git-square,
a[class*="fa-"].fa-git-square:hover {
	color: #333;
}

a.color-icon.fa-git,
a[class*="fa-"].fa-git:hover {
	color: #333;
}

a.color-icon.fa-github-alt,
a[class*="fa-"].fa-github-alt:hover {
	color: #333;
}

a.color-icon.fa-github-square,
a[class*="fa-"].fa-github-square:hover {
	color: #333;
}

a.color-icon.fa-github,
a[class*="fa-"].fa-github:hover {
	color: #333;
}

a.color-icon.fa-gittip,
a[class*="fa-"].fa-gittip:hover {
	color: #630;
}

a.color-icon.fa-google-plus-square,
a[class*="fa-"].fa-google-plus-square:hover {
	color: #dd4b39;
}

a.color-icon.fa-google-plus,
a[class*="fa-"].fa-google-plus:hover {
	color: #dd4b39;
}

a.color-icon.fa-google-wallet,
a[class*="fa-"].fa-google-wallet:hover {
	color: #4285f4;
}

a.color-icon.fa-google,
a[class*="fa-"].fa-google:hover {
	color: #dd4b39;
}

a.color-icon.fa-hacker-news,
a[class*="fa-"].fa-hacker-news:hover {
	color: #f60;
}

a.color-icon.fa-houzz,
a[class*="fa-"].fa-houzz:hover {
	color: #7ac142;
}

a.color-icon.fa-html5,
a[class*="fa-"].fa-html5:hover {
	color: #e34f26;
}

a.color-icon.fa-instagram,
a[class*="fa-"].fa-instagram:hover {
	color: #3f729b;
}

a.color-icon.fa-internet-explorer,
a[class*="fa-"].fa-internet-explorer:hover {
	color: #1ebbee;
}

a.color-icon.fa-ioxhost,
a[class*="fa-"].fa-ioxhost:hover {
	color: #faa729;
}

a.color-icon.fa-joomla,
a[class*="fa-"].fa-joomla:hover {
	color: #142849;
}

a.color-icon.fa-jsfiddle,
a[class*="fa-"].fa-jsfiddle:hover {
	color: #4679bd;
}

a.color-icon.fa-lastfm-square,
a[class*="fa-"].fa-lastfm-square:hover {
	color: #c3000d;
}

a.color-icon.fa-lastfm,
a[class*="fa-"].fa-lastfm:hover {
	color: #c3000d;
}

a.color-icon.fa-leanpub,
a[class*="fa-"].fa-leanpub:hover {
	color: #0c0c0c;
}

a.color-icon.fa-linkedin-square,
a[class*="fa-"].fa-linkedin-square:hover {
	color: #0976b4;
}

a.color-icon.fa-linkedin,
a[class*="fa-"].fa-linkedin:hover {
	color: #0976b4;
}

a.color-icon.fa-linux,
a[class*="fa-"].fa-linux:hover {
	color: #333;
}

a.color-icon.fa-maxcdn,
a[class*="fa-"].fa-maxcdn:hover {
	color: #f60;
}

a.color-icon.fa-meanpath,
a[class*="fa-"].fa-meanpath:hover {
	color: #538ed7;
}

a.color-icon.fa-medium,
a[class*="fa-"].fa-medium:hover {
	color: #000;
}

a.color-icon.fa-odnoklassniki-square,
a[class*="fa-"].fa-odnoklassniki-square:hover {
	color: #ed812b;
}

a.color-icon.fa-odnoklassniki,
a[class*="fa-"].fa-odnoklassniki:hover {
	color: #ed812b;
}

a.color-icon.fa-opencart,
a[class*="fa-"].fa-opencart:hover {
	color: #2ac2ef;
}

a.color-icon.fa-openid,
a[class*="fa-"].fa-openid:hover {
	color: #f78c40;
}

a.color-icon.fa-opera,
a[class*="fa-"].fa-opera:hover {
	color: #cc0f16;
}

a.color-icon.fa-optin-monster,
a[class*="fa-"].fa-optin-monster:hover {
	color: #83c11f;
}

a.color-icon.fa-pagelines,
a[class*="fa-"].fa-pagelines:hover {
	color: #000;
}

a.color-icon.fa-paypal,
a[class*="fa-"].fa-paypal:hover {
	color: #253b80;
}

a.color-icon.fa-pied-piper-alt,
a[class*="fa-"].fa-pied-piper-alt :hover {
	color: #2f9f46;
}

a.color-icon.fa-pied-piper-square,
a[class*="fa-"].fa-pied-piper-square :hover {
	color: #2f9f46;
}

a.color-icon.fa-pied-piper,
a[class*="fa-"].fa-pied-piper:hover {
	color: #2f9f46;
}

a.color-icon.fa-pinterest-p,
a[class*="fa-"].fa-pinterest-p:hover {
	color: #cc2127;
}

a.color-icon.fa-pinterest-square,
a[class*="fa-"].fa-pinterest-square:hover {
	color: #cc2127;
}

a.color-icon.fa-pinterest,
a[class*="fa-"].fa-pinterest:hover {
	color: #cc2127;
}

a.color-icon.fa-qq,
a[class*="fa-"].fa-qq:hover {
	color: #000;
}

a.color-icon.fa-ra,
a[class*="fa-"].fa-ra:hover {
	color: #000;
}

a.color-icon.fa-rebel,
a[class*="fa-"].fa-rebel:hover {
	color: #000;
}

a.color-icon.fa-reddit-square,
a[class*="fa-"].fa-reddit-square:hover {
	color: #ff4500;
}

a.color-icon.fa-reddit,
a[class*="fa-"].fa-reddit:hover {
	color: #ff4500;
}

a.color-icon.fa-renren,
a[class*="fa-"].fa-renren:hover {
	color: #005eac;
}

a.color-icon.fa-safari,
a[class*="fa-"].fa-safari:hover {
	color: #1b88ca;
}

a.color-icon.fa-sellsy,
a[class*="fa-"].fa-sellsy:hover {
	color: #1f78b9;
}

a.color-icon.fa-share-alt-square,
a[class*="fa-"].fa-share-alt-square:hover {
	color: #01bf01;
}

a.color-icon.fa-share-alt,
a[class*="fa-"].fa-share-alt:hover {
	color: #01bf01;
}

a.color-icon.fa-shirtsinbulk,
a[class*="fa-"].fa-shirtsinbulk:hover {
	color: #dd3a26;
}

a.color-icon.fa-simplybuilt,
a[class*="fa-"].fa-simplybuilt:hover {
	color: #000;
}

a.color-icon.fa-skyatlas,
a[class*="fa-"].fa-skyatlas:hover {
	color: #00adbb;
}

a.color-icon.fa-skype,
a[class*="fa-"].fa-skype:hover {
	color: #00aff0;
}

a.color-icon.fa-slack,
a[class*="fa-"].fa-slack:hover {
	color: #0f7965;
}

a.color-icon.fa-slideshare,
a[class*="fa-"].fa-slideshare:hover {
	color: #e98325;
}

a.color-icon.fa-soundcloud,
a[class*="fa-"].fa-soundcloud:hover {
	color: #f80;
}

a.color-icon.fa-spotify,
a[class*="fa-"].fa-spotify:hover {
	color: #7ab800;
}

a.color-icon.fa-stack-exchange,
a[class*="fa-"].fa-stack-exchange:hover {
	color: #000;
}

a.color-icon.fa-stack-overflow,
a[class*="fa-"].fa-stack-overflow:hover {
	color: #fe7a15;
}

a.color-icon.fa-steam-square,
a[class*="fa-"].fa-steam-square:hover {
	color: #0b0b0b;
}

a.color-icon.fa-steam,
a[class*="fa-"].fa-steam:hover {
	color: #0b0b0b;
}

a.color-icon.fa-stumbleupon-circle,
a[class*="fa-"].fa-stumbleupon-circle:hover {
	color: #eb4924;
}

a.color-icon.fa-stumbleupon,
a[class*="fa-"].fa-stumbleupon:hover {
	color: #eb4924;
}

a.color-icon.fa-tencent-weibo,
a[class*="fa-"].fa-tencent-weibo:hover {
	color: #74af2c;
}

a.color-icon.fa-trello,
a[class*="fa-"].fa-trello:hover {
	color: #256a92;
}

a.color-icon.fa-tripadvisor,
a[class*="fa-"].fa-tripadvisor:hover {
	color: #589442;
}

a.color-icon.fa-tumblr-square,
a[class*="fa-"].fa-tumblr-square:hover {
	color: #35465c;
}

a.color-icon.fa-tumblr,
a[class*="fa-"].fa-tumblr:hover {
	color: #35465c;
}

a.color-icon.fa-twitch,
a[class*="fa-"].fa-twitch:hover {
	color: #6441a5;
}

a.color-icon.fa-twitter-square,
a[class*="fa-"].fa-twitter-square:hover {
	color: #55acee;
}

a.color-icon.fa-twitter,
a[class*="fa-"].fa-twitter:hover {
	color: #55acee;
}

a.color-icon.fa-viacoin,
a[class*="fa-"].fa-viacoin:hover {
	color: #333;
}

a.color-icon.fa-vimeo-square,
a[class*="fa-"].fa-vimeo-square:hover {
	color: #1ab7ea;
}

a.color-icon.fa-vimeo,
a[class*="fa-"].fa-vimeo:hover {
	color: #1ab7ea;
}

a.color-icon.fa-vine,
a[class*="fa-"].fa-vine:hover {
	color: #00b488;
}

a.color-icon.fa-vk,
a[class*="fa-"].fa-vk:hover {
	color: #45668e;
}

a.color-icon.fa-wechat,
a[class*="fa-"].fa-wechat:hover {
	color: #93d034;
}

a.color-icon.fa-weibo,
a[class*="fa-"].fa-weibo:hover {
	color: #e71d34;
}

a.color-icon.fa-weixin,
a[class*="fa-"].fa-weixin:hover {
	color: #93d034;
}

a.color-icon.fa-wikipedia-w,
a[class*="fa-"].fa-wikipedia-w:hover {
	color: #000;
}

a.color-icon.fa-windows,
a[class*="fa-"].fa-windows:hover {
	color: #00bcf2;
}

a.color-icon.fa-wordpress,
a[class*="fa-"].fa-wordpress:hover {
	color: #21759b;
}

a.color-icon.fa-xing-square,
a[class*="fa-"].fa-xing-square:hover {
	color: #026466;
}

a.color-icon.fa-xing,
a[class*="fa-"].fa-xing:hover {
	color: #026466;
}

a.color-icon.fa-y-combinator,
a[class*="fa-"].fa-y-combinator:hover {
	color: #f0652f;
}

a.color-icon.fa-yahoo,
a[class*="fa-"].fa-yahoo:hover {
	color: #400191;
}

a.color-icon.fa-yc,
a[class*="fa-"].fa-yc:hover {
	color: #f0652f;
}

a.color-icon.fa-yelp,
a[class*="fa-"].fa-yelp:hover {
	color: #af0606;
}

a.color-icon.fa-youtube-play,
a[class*="fa-"].fa-youtube-play:hover {
	color: #e52d27;
}

a.color-icon.fa-youtube-square,
a[class*="fa-"].fa-youtube-square:hover {
	color: #e52d27;
}

a.color-icon.fa-youtube,
a[class*="fa-"].fa-youtube:hover {
	color: #e52d27;
}

a.color-icon.fa-rss,
a[class*="fa-"].fa-rss:hover {
	color: #ffa811;
}

.color-bg-icon.fa-500px,
a.fa-500px.bg-icon:hover,
.fa-500px.color-icon.border-icon:hover {
	background-color: #0099e5;
}

.color-bg-icon.fa-adn,
a.fa-adn.bg-icon:hover,
.fa-adn.color-icon.border-icon:hover {
	background-color: #4a484c;
}

.color-bg-icon.fa-amazon,
a.fa-amazon.bg-icon:hover,
.fa-amazon.color-icon.border-icon:hover {
	background-color: #f90;
}

.color-bg-icon.fa-android,
a.fa-android.bg-icon:hover,
.fa-android.color-icon.border-icon:hover {
	background-color: #a4c639;
}

.color-bg-icon.fa-angellist,
a.fa-angellist.bg-icon:hover,
.fa-angellist.color-icon.border-icon:hover {
	background-color: #000;
}

.color-bg-icon.fa-apple,
a.fa-apple.bg-icon:hover,
.fa-apple.color-icon.border-icon:hover {
	background-color: #979797;
}

.color-bg-icon.fa-behance-square,
a.fa-behance-square.bg-icon:hover,
.fa-behance-square.color-icon.border-icon:hover {
	background-color: #1769ff;
}

.color-bg-icon.fa-behance,
a.fa-behance.bg-icon:hover,
.fa-behance.color-icon.border-icon:hover {
	background-color: #1769ff;
}

.color-bg-icon.fa-bitbucket-square,
a.fa-bitbucket-square.bg-icon:hover,
.fa-bitbucket-square.color-icon.border-icon:hover {
	background-color: #205081;
}

.color-bg-icon.fa-bitbucket,
a.fa-bitbucket.bg-icon:hover,
.fa-bitbucket.color-icon.border-icon:hover {
	background-color: #205081;
}

.color-bg-icon.fa-bitcoin,
a.fa-bitcoin.bg-icon:hover,
.fa-bitcoin.color-icon.border-icon:hover {
	background-color: #ee9209;
}

.color-bg-icon.fa-black-tie,
a.fa-black-tie.bg-icon:hover,
.fa-black-tie.color-icon.border-icon:hover {
	background-color: #222;
}

.color-bg-icon.fa-btc,
a.fa-btc.bg-icon:hover,
.fa-btc.color-icon.border-icon:hover {
	background-color: #ee9209;
}

.color-bg-icon.fa-buysellads,
a.fa-buysellads.bg-icon:hover,
.fa-buysellads.color-icon.border-icon:hover {
	background-color: #c90100;
}

.color-bg-icon.fa-cc-amex,
a.fa-cc-amex.bg-icon:hover,
.fa-cc-amex.color-icon.border-icon:hover {
	background-color: #007bc1;
}

.color-bg-icon.fa-cc-diners-club,
a.fa-cc-diners-club.bg-icon:hover,
.fa-cc-diners-club.color-icon.border-icon:hover {
	background-color: #004a97;
}

.color-bg-icon.fa-cc-discover,
a.fa-cc-discover.bg-icon:hover,
.fa-cc-discover.color-icon.border-icon:hover {
	background-color: #f68121;
}

.color-bg-icon.fa-cc-jcb,
a.fa-cc-jcb.bg-icon:hover,
.fa-cc-jcb.color-icon.border-icon:hover {
	background-color: #003a8f;
}

.color-bg-icon.fa-cc-mastercard,
a.fa-cc-mastercard.bg-icon:hover,
.fa-cc-mastercard.color-icon.border-icon:hover {
	background-color: #0a3a82;
}

.color-bg-icon.fa-cc-paypal,
a.fa-cc-paypal.bg-icon:hover,
.fa-cc-paypal.color-icon.border-icon:hover {
	background-color: #253b80;
}

.color-bg-icon.fa-cc-stripe,
a.fa-cc-stripe.bg-icon:hover,
.fa-cc-stripe.color-icon.border-icon:hover {
	background-color: #00afe1;
}

.color-bg-icon.fa-cc-visa,
a.fa-cc-visa.bg-icon:hover,
.fa-cc-visa.color-icon.border-icon:hover {
	background-color: #0157a2;
}

.color-bg-icon.fa-chrome,
a.fa-chrome.bg-icon:hover,
.fa-chrome.color-icon.border-icon:hover {
	background-color: #4587f3;
}

.color-bg-icon.fa-codepen,
a.fa-codepen.bg-icon:hover,
.fa-codepen.color-icon.border-icon:hover {
	background-color: #000;
}

.color-bg-icon.fa-connectdevelop,
a.fa-connectdevelop.bg-icon:hover,
.fa-connectdevelop.color-icon.border-icon:hover {
	background-color: #391448;
}

.color-bg-icon.fa-contao,
a.fa-contao.bg-icon:hover,
.fa-contao.color-icon.border-icon:hover {
	background-color: #eb8623;
}

.color-bg-icon.fa-creative-commons,
a.fa-creative-commons.bg-icon:hover,
.fa-creative-commons.color-icon.border-icon:hover {
	background-color: #231f20;
}

.color-bg-icon.fa-css3,
a.fa-css3.bg-icon:hover,
.fa-css3.color-icon.border-icon:hover {
	background-color: #1680c0;
}

.color-bg-icon.fa-dashcube,
a.fa-dashcube.bg-icon:hover,
.fa-dashcube.color-icon.border-icon:hover {
	background-color: #7f7f7f;
}

.color-bg-icon.fa-delicious,
a.fa-delicious.bg-icon:hover,
.fa-delicious.color-icon.border-icon:hover {
	background-color: #39f;
}

.color-bg-icon.fa-deviantart,
a.fa-deviantart.bg-icon:hover,
.fa-deviantart.color-icon.border-icon:hover {
	background-color: #4e6252;
}

.color-bg-icon.fa-digg,
a.fa-digg.bg-icon:hover,
.fa-digg.color-icon.border-icon:hover {
	background-color: #000;
}

.color-bg-icon.fa-dribbble,
a.fa-dribbble.bg-icon:hover,
.fa-dribbble.color-icon.border-icon:hover {
	background-color: #ea4c8d;
}

.color-bg-icon.fa-dropbox,
a.fa-dropbox.bg-icon:hover,
.fa-dropbox.color-icon.border-icon:hover {
	background-color: #007ee5;
}

.color-bg-icon.fa-drupal,
a.fa-drupal.bg-icon:hover,
.fa-drupal.color-icon.border-icon:hover {
	background-color: #0077c0;
}

.color-bg-icon.fa-empire,
a.fa-empire.bg-icon:hover,
.fa-empire.color-icon.border-icon:hover {
	background-color: #000;
}

.color-bg-icon.fa-expeditedssl,
a.fa-expeditedssl.bg-icon:hover,
.fa-expeditedssl.color-icon.border-icon:hover {
	background-color: #343433;
}

.color-bg-icon.fa-facebook-official,
a.fa-facebook-official.bg-icon:hover,
.fa-facebook-official.color-icon.border-icon:hover {
	background-color: #3b5998;
}

.color-bg-icon.fa-facebook-square,
a.fa-facebook-square.bg-icon:hover,
.fa-facebook-square.color-icon.border-icon:hover {
	background-color: #3b5998;
}

.color-bg-icon.fa-facebook,
a.fa-facebook.bg-icon:hover,
.fa-facebook.color-icon.border-icon:hover {
	background-color: #3b5998;
}

.color-bg-icon.fa-firefox,
a.fa-firefox.bg-icon:hover,
.fa-firefox.color-icon.border-icon:hover {
	background-color: #e66000;
}

.color-bg-icon.fa-flickr,
a.fa-flickr.bg-icon:hover,
.fa-flickr.color-icon.border-icon:hover {
	background-color: #ff0084;
}

.color-bg-icon.fa-fonticons,
a.fa-fonticons.bg-icon:hover,
.fa-fonticons.color-icon.border-icon:hover {
	background-color: #1c1e29;
}

.color-bg-icon.fa-forumbee,
a.fa-forumbee.bg-icon:hover,
.fa-forumbee.color-icon.border-icon:hover {
	background-color: #83ad13;
}

.color-bg-icon.fa-foursquare,
a.fa-foursquare.bg-icon:hover,
.fa-foursquare.color-icon.border-icon:hover {
	background-color: #0072b1;
}

.color-bg-icon.fa-ge,
a.fa-ge.bg-icon:hover,
.fa-ge.color-icon.border-icon:hover {
	background-color: #000;
}

.color-bg-icon.fa-get-pocket,
a.fa-get-pocket.bg-icon:hover,
.fa-get-pocket.color-icon.border-icon:hover {
	background-color: #d3505a;
}

.color-bg-icon.fa-gg-circle,
a.fa-gg-circle.bg-icon:hover,
.fa-gg-circle.color-icon.border-icon:hover {
	background-color: #000;
}

.color-bg-icon.fa-gg,
a.fa-gg.bg-icon:hover,
.fa-gg.color-icon.border-icon:hover {
	background-color: #000;
}

.color-bg-icon.fa-git-square,
a.fa-git-square.bg-icon:hover,
.fa-git-square.color-icon.border-icon:hover {
	background-color: #333;
}

.color-bg-icon.fa-git,
a.fa-git.bg-icon:hover,
.fa-git.color-icon.border-icon:hover {
	background-color: #333;
}

.color-bg-icon.fa-github-alt,
a.fa-github-alt.bg-icon:hover,
.fa-github-alt.color-icon.border-icon:hover {
	background-color: #333;
}

.color-bg-icon.fa-github-square,
a.fa-github-square.bg-icon:hover,
.fa-github-square.color-icon.border-icon:hover {
	background-color: #333;
}

.color-bg-icon.fa-github,
a.fa-github.bg-icon:hover,
.fa-github.color-icon.border-icon:hover {
	background-color: #333;
}

.color-bg-icon.fa-gittip,
a.fa-gittip.bg-icon:hover,
.fa-gittip.color-icon.border-icon:hover {
	background-color: #630;
}

.color-bg-icon.fa-google-plus-square,
a.fa-google-plus-square.bg-icon:hover,
.fa-google-plus-square.color-icon.border-icon:hover {
	background-color: #dd4b39;
}

.color-bg-icon.fa-google-plus,
a.fa-google-plus.bg-icon:hover,
.fa-google-plus.color-icon.border-icon:hover {
	background-color: #dd4b39;
}

.color-bg-icon.fa-google-wallet,
a.fa-google-wallet.bg-icon:hover,
.fa-google-wallet.color-icon.border-icon:hover {
	background-color: #4285f4;
}

.color-bg-icon.fa-google,
a.fa-google.bg-icon:hover,
.fa-google.color-icon.border-icon:hover {
	background-color: #dd4b39;
}

.color-bg-icon.fa-hacker-news,
a.fa-hacker-news.bg-icon:hover,
.fa-hacker-news.color-icon.border-icon:hover {
	background-color: #f60;
}

.color-bg-icon.fa-houzz,
a.fa-houzz.bg-icon:hover,
.fa-houzz.color-icon.border-icon:hover {
	background-color: #7ac142;
}

.color-bg-icon.fa-html5,
a.fa-html5.bg-icon:hover,
.fa-html5.color-icon.border-icon:hover {
	background-color: #e34f26;
}

.color-bg-icon.fa-instagram,
a.fa-instagram.bg-icon:hover,
.fa-instagram.color-icon.border-icon:hover {
	background-color: #e4405f;
}

.color-bg-icon.fa-internet-explorer,
a.fa-internet-explorer.bg-icon:hover,
.fa-internet-explorer.color-icon.border-icon:hover {
	background-color: #1ebbee;
}

.color-bg-icon.fa-ioxhost,
a.fa-ioxhost.bg-icon:hover,
.fa-ioxhost.color-icon.border-icon:hover {
	background-color: #faa729;
}

.color-bg-icon.fa-joomla,
a.fa-joomla.bg-icon:hover,
.fa-joomla.color-icon.border-icon:hover {
	background-color: #142849;
}

.color-bg-icon.fa-jsfiddle,
a.fa-jsfiddle.bg-icon:hover,
.fa-jsfiddle.color-icon.border-icon:hover {
	background-color: #4679bd;
}

.color-bg-icon.fa-lastfm-square,
a.fa-lastfm-square.bg-icon:hover,
.fa-lastfm-square.color-icon.border-icon:hover {
	background-color: #c3000d;
}

.color-bg-icon.fa-lastfm,
a.fa-lastfm.bg-icon:hover,
.fa-lastfm.color-icon.border-icon:hover {
	background-color: #c3000d;
}

.color-bg-icon.fa-leanpub,
a.fa-leanpub.bg-icon:hover,
.fa-leanpub.color-icon.border-icon:hover {
	background-color: #0c0c0c;
}

.color-bg-icon.fa-linkedin-square,
a.fa-linkedin-square.bg-icon:hover,
.fa-linkedin-square.color-icon.border-icon:hover {
	background-color: #0976b4;
}

.color-bg-icon.fa-linkedin,
a.fa-linkedin.bg-icon:hover,
.fa-linkedin.color-icon.border-icon:hover {
	background-color: #0976b4;
}

.color-bg-icon.fa-linux,
a.fa-linux.bg-icon:hover,
.fa-linux.color-icon.border-icon:hover {
	background-color: #333;
}

.color-bg-icon.fa-maxcdn,
a.fa-maxcdn.bg-icon:hover,
.fa-maxcdn.color-icon.border-icon:hover {
	background-color: #f60;
}

.color-bg-icon.fa-meanpath,
a.fa-meanpath.bg-icon:hover,
.fa-meanpath.color-icon.border-icon:hover {
	background-color: #538ed7;
}

.color-bg-icon.fa-medium,
a.fa-medium.bg-icon:hover,
.fa-medium.color-icon.border-icon:hover {
	background-color: #000;
}

.color-bg-icon.fa-odnoklassniki-square,
a.fa-odnoklassniki-square.bg-icon:hover,
.fa-odnoklassniki-square.color-icon.border-icon:hover {
	background-color: #ed812b;
}

.color-bg-icon.fa-odnoklassniki,
a.fa-odnoklassniki.bg-icon:hover,
.fa-odnoklassniki.color-icon.border-icon:hover {
	background-color: #ed812b;
}

.color-bg-icon.fa-opencart,
a.fa-opencart.bg-icon:hover,
.fa-opencart.color-icon.border-icon:hover {
	background-color: #2ac2ef;
}

.color-bg-icon.fa-openid,
a.fa-openid.bg-icon:hover,
.fa-openid.color-icon.border-icon:hover {
	background-color: #f78c40;
}

.color-bg-icon.fa-opera,
a.fa-opera.bg-icon:hover,
.fa-opera.color-icon.border-icon:hover {
	background-color: #cc0f16;
}

.color-bg-icon.fa-optin-monster,
a.fa-optin-monster.bg-icon:hover,
.fa-optin-monster.color-icon.border-icon:hover {
	background-color: #83c11f;
}

.color-bg-icon.fa-pagelines,
a.fa-pagelines.bg-icon:hover,
.fa-pagelines.color-icon.border-icon:hover {
	background-color: #000;
}

.color-bg-icon.fa-paypal,
a.fa-paypal.bg-icon:hover,
.fa-paypal.color-icon.border-icon:hover {
	background-color: #253b80;
}

.color-bg-icon.fa-pied-piper-alt,
a.fa-pied-piper-alt .bg-icon:hover,
.fa-pied-piper-alt .color-icon.border-icon:hover {
	color: #2f9f46;
}

.color-bg-icon.fa-pied-piper-square,
a.fa-pied-piper-square .bg-icon:hover,
.fa-pied-piper-square .color-icon.border-icon:hover {
	color: #2f9f46;
}

.color-bg-icon.fa-pied-piper,
a.fa-pied-piper.bg-icon:hover,
.fa-pied-piper.color-icon.border-icon:hover {
	background-color: #2f9f46;
}

.color-bg-icon.fa-pinterest-p,
a.fa-pinterest-p.bg-icon:hover,
.fa-pinterest-p.color-icon.border-icon:hover {
	background-color: #cc2127;
}

.color-bg-icon.fa-pinterest-square,
a.fa-pinterest-square.bg-icon:hover,
.fa-pinterest-square.color-icon.border-icon:hover {
	background-color: #cc2127;
}

.color-bg-icon.fa-pinterest,
a.fa-pinterest.bg-icon:hover,
.fa-pinterest.color-icon.border-icon:hover {
	background-color: #cc2127;
}

.color-bg-icon.fa-qq,
a.fa-qq.bg-icon:hover,
.fa-qq.color-icon.border-icon:hover {
	background-color: #000;
}

.color-bg-icon.fa-ra,
a.fa-ra.bg-icon:hover,
.fa-ra.color-icon.border-icon:hover {
	background-color: #000;
}

.color-bg-icon.fa-rebel,
a.fa-rebel.bg-icon:hover,
.fa-rebel.color-icon.border-icon:hover {
	background-color: #000;
}

.color-bg-icon.fa-reddit-square,
a.fa-reddit-square.bg-icon:hover,
.fa-reddit-square.color-icon.border-icon:hover {
	background-color: #ff4500;
}

.color-bg-icon.fa-reddit,
a.fa-reddit.bg-icon:hover,
.fa-reddit.color-icon.border-icon:hover {
	background-color: #ff4500;
}

.color-bg-icon.fa-renren,
a.fa-renren.bg-icon:hover,
.fa-renren.color-icon.border-icon:hover {
	background-color: #005eac;
}

.color-bg-icon.fa-safari,
a.fa-safari.bg-icon:hover,
.fa-safari.color-icon.border-icon:hover {
	background-color: #1b88ca;
}

.color-bg-icon.fa-sellsy,
a.fa-sellsy.bg-icon:hover,
.fa-sellsy.color-icon.border-icon:hover {
	background-color: #1f78b9;
}

.color-bg-icon.fa-share-alt-square,
a.fa-share-alt-square.bg-icon:hover,
.fa-share-alt-square.color-icon.border-icon:hover {
	background-color: #01bf01;
}

.color-bg-icon.fa-share-alt,
a.fa-share-alt.bg-icon:hover,
.fa-share-alt.color-icon.border-icon:hover {
	background-color: #01bf01;
}

.color-bg-icon.fa-shirtsinbulk,
a.fa-shirtsinbulk.bg-icon:hover,
.fa-shirtsinbulk.color-icon.border-icon:hover {
	background-color: #dd3a26;
}

.color-bg-icon.fa-simplybuilt,
a.fa-simplybuilt.bg-icon:hover,
.fa-simplybuilt.color-icon.border-icon:hover {
	background-color: #000;
}

.color-bg-icon.fa-skyatlas,
a.fa-skyatlas.bg-icon:hover,
.fa-skyatlas.color-icon.border-icon:hover {
	background-color: #00adbb;
}

.color-bg-icon.fa-skype,
a.fa-skype.bg-icon:hover,
.fa-skype.color-icon.border-icon:hover {
	background-color: #00aff0;
}

.color-bg-icon.fa-slack,
a.fa-slack.bg-icon:hover,
.fa-slack.color-icon.border-icon:hover {
	background-color: #0f7965;
}

.color-bg-icon.fa-slideshare,
a.fa-slideshare.bg-icon:hover,
.fa-slideshare.color-icon.border-icon:hover {
	background-color: #e98325;
}

.color-bg-icon.fa-soundcloud,
a.fa-soundcloud.bg-icon:hover,
.fa-soundcloud.color-icon.border-icon:hover {
	background-color: #f80;
}

.color-bg-icon.fa-spotify,
a.fa-spotify.bg-icon:hover,
.fa-spotify.color-icon.border-icon:hover {
	background-color: #7ab800;
}

.color-bg-icon.fa-stack-exchange,
a.fa-stack-exchange.bg-icon:hover,
.fa-stack-exchange.color-icon.border-icon:hover {
	background-color: #000;
}

.color-bg-icon.fa-stack-overflow,
a.fa-stack-overflow.bg-icon:hover,
.fa-stack-overflow.color-icon.border-icon:hover {
	background-color: #fe7a15;
}

.color-bg-icon.fa-steam-square,
a.fa-steam-square.bg-icon:hover,
.fa-steam-square.color-icon.border-icon:hover {
	background-color: #0b0b0b;
}

.color-bg-icon.fa-steam,
a.fa-steam.bg-icon:hover,
.fa-steam.color-icon.border-icon:hover {
	background-color: #0b0b0b;
}

.color-bg-icon.fa-stumbleupon-circle,
a.fa-stumbleupon-circle.bg-icon:hover,
.fa-stumbleupon-circle.color-icon.border-icon:hover {
	background-color: #eb4924;
}

.color-bg-icon.fa-stumbleupon,
a.fa-stumbleupon.bg-icon:hover,
.fa-stumbleupon.color-icon.border-icon:hover {
	background-color: #eb4924;
}

.color-bg-icon.fa-tencent-weibo,
a.fa-tencent-weibo.bg-icon:hover,
.fa-tencent-weibo.color-icon.border-icon:hover {
	background-color: #74af2c;
}

.color-bg-icon.fa-trello,
a.fa-trello.bg-icon:hover,
.fa-trello.color-icon.border-icon:hover {
	background-color: #256a92;
}

.color-bg-icon.fa-tripadvisor,
a.fa-tripadvisor.bg-icon:hover,
.fa-tripadvisor.color-icon.border-icon:hover {
	background-color: #589442;
}

.color-bg-icon.fa-tumblr-square,
a.fa-tumblr-square.bg-icon:hover,
.fa-tumblr-square.color-icon.border-icon:hover {
	background-color: #35465c;
}

.color-bg-icon.fa-tumblr,
a.fa-tumblr.bg-icon:hover,
.fa-tumblr.color-icon.border-icon:hover {
	background-color: #35465c;
}

.color-bg-icon.fa-twitch,
a.fa-twitch.bg-icon:hover,
.fa-twitch.color-icon.border-icon:hover {
	background-color: #6441a5;
}

.color-bg-icon.fa-twitter-square,
a.fa-twitter-square.bg-icon:hover,
.fa-twitter-square.color-icon.border-icon:hover {
	background-color: #55acee;
}

.color-bg-icon.fa-twitter,
a.fa-twitter.bg-icon:hover,
.fa-twitter.color-icon.border-icon:hover {
	background-color: #00abef;
}

.color-bg-icon.fa-viacoin,
a.fa-viacoin.bg-icon:hover,
.fa-viacoin.color-icon.border-icon:hover {
	background-color: #333;
}

.color-bg-icon.fa-vimeo-square,
a.fa-vimeo-square.bg-icon:hover,
.fa-vimeo-square.color-icon.border-icon:hover {
	background-color: #1ab7ea;
}

.color-bg-icon.fa-vimeo,
a.fa-vimeo.bg-icon:hover,
.fa-vimeo.color-icon.border-icon:hover {
	background-color: #1ab7ea;
}

.color-bg-icon.fa-vine,
a.fa-vine.bg-icon:hover,
.fa-vine.color-icon.border-icon:hover {
	background-color: #00b488;
}

.color-bg-icon.fa-vk,
a.fa-vk.bg-icon:hover,
.fa-vk.color-icon.border-icon:hover {
	background-color: #45668e;
}

.color-bg-icon.fa-wechat,
a.fa-wechat.bg-icon:hover,
.fa-wechat.color-icon.border-icon:hover {
	background-color: #93d034;
}

.color-bg-icon.fa-weibo,
a.fa-weibo.bg-icon:hover,
.fa-weibo.color-icon.border-icon:hover {
	background-color: #e71d34;
}

.color-bg-icon.fa-weixin,
a.fa-weixin.bg-icon:hover,
.fa-weixin.color-icon.border-icon:hover {
	background-color: #93d034;
}

.color-bg-icon.fa-wikipedia-w,
a.fa-wikipedia-w.bg-icon:hover,
.fa-wikipedia-w.color-icon.border-icon:hover {
	background-color: #000;
}

.color-bg-icon.fa-windows,
a.fa-windows.bg-icon:hover,
.fa-windows.color-icon.border-icon:hover {
	background-color: #00bcf2;
}

.color-bg-icon.fa-wordpress,
a.fa-wordpress.bg-icon:hover,
.fa-wordpress.color-icon.border-icon:hover {
	background-color: #21759b;
}

.color-bg-icon.fa-xing-square,
a.fa-xing-square.bg-icon:hover,
.fa-xing-square.color-icon.border-icon:hover {
	background-color: #026466;
}

.color-bg-icon.fa-xing,
a.fa-xing.bg-icon:hover,
.fa-xing.color-icon.border-icon:hover {
	background-color: #026466;
}

.color-bg-icon.fa-y-combinator,
a.fa-y-combinator.bg-icon:hover,
.fa-y-combinator.color-icon.border-icon:hover {
	background-color: #f0652f;
}

.color-bg-icon.fa-yahoo,
a.fa-yahoo.bg-icon:hover,
.fa-yahoo.color-icon.border-icon:hover {
	background-color: #400191;
}

.color-bg-icon.fa-yc,
a.fa-yc.bg-icon:hover,
.fa-yc.color-icon.border-icon:hover {
	background-color: #f0652f;
}

.color-bg-icon.fa-yelp,
a.fa-yelp.bg-icon:hover,
.fa-yelp.color-icon.border-icon:hover {
	background-color: #af0606;
}

.color-bg-icon.fa-youtube-play,
a.fa-youtube-play.bg-icon:hover,
.fa-youtube-play.color-icon.border-icon:hover {
	background-color: #e52d27;
}

.color-bg-icon.fa-youtube-square,
a.fa-youtube-square.bg-icon:hover,
.fa-youtube-square.color-icon.border-icon:hover {
	background-color: #e52d27;
}

.color-bg-icon.fa-youtube,
a.fa-youtube.bg-icon:hover,
.fa-youtube.color-icon.border-icon:hover {
	background-color: #e52d27;
}

.color-bg-icon.fa-rss,
a.fa-rss.bg-icon:hover,
.fa-rss.color-icon.border-icon:hover {
	background-color: #ffa811;
}

/*social icons default colors*/
.color-bg-icon {
	color: #fff;
}

a.fa {
	color: #323232;
}

a.border-icon {
	border: 1px solid #808080;
}

a.border-icon.color-icon:hover {
	border-color: transparent;
}

a.bg-icon {
	background-color: #e8e8e8;
}

a.color-bg-icon {
	background-color: #323232;
	color: #fff;
}

a.fa.color-icon:hover {
	color: #323232;
}

a.fa.bg-icon:hover {
	color: #fff;
}

a.fa.color-bg-icon:hover {
	background-color: #ff497c;
	color: #fff;
}

a.color-icon:hover {
	color: #323232;
}

a.color-icon.border-icon:hover {
	color: #fff;
}

.social-icon a {
	margin: 0;
	padding: 11px 78px;
}

/*
** WordPress Required
*/
.alignnone {
	margin: 10px 0 30px;
}

.aligncenter,
div.aligncenter {
	display: block;
	margin: 10px auto 30px auto;
}

.alignright {
	float: right;
	margin: 10px 0 30px 40px;
	max-width: 50%;
}

.alignleft {
	float: left;
	margin: 10px 40px 30px 0;
	max-width: 50%;
}

a img.alignright {
	float: right;
	margin: 10px 0 30px 40px;
}

a img.alignnone {
	margin: 10px 0 30px;
}

a img.alignleft {
	float: left;
	margin: 10px 40px 30px 0;
}

a img.aligncenter {
	display: block;
	margin-left: auto;
	margin-right: auto;
}

.wp-caption {
	text-align: center;
}

.wp-caption.alignnone {
	margin: 5px 20px 20px 0;
}

.wp-caption.alignleft {
	margin: 5px 20px 20px 0;
}

.wp-caption.alignright {
	margin: 5px 0 20px 20px;
}

.wp-caption img {
	border: 0 none;
	height: auto;
	margin: 0;
	max-width: 98.5%;
	padding: 0;
	width: auto;
}

.wp-caption p.wp-caption-text {
	font-size: 11px;
	line-height: 17px;
	margin: 0;
	padding: 0 4px 5px;
}

/* Text meant only for screen readers. */
.screen-reader-text {
	clip: rect(1px, 1px, 1px, 1px);
	height: 1px;
	margin: 0;
	overflow: hidden;
	padding: 0;
	position: absolute !important;
	white-space: nowrap;
	width: 1px;
}

.screen-reader-text:focus {
	clip: auto !important;
	display: block;
	font-weight: bold;
	height: auto;
	left: 5px;
	line-height: normal;
	padding: 15px 23px 14px;
	text-decoration: none;
	top: 5px;
	width: auto;
	z-index: 100000;
	/* Above WP toolbar. */
}

.sticky,
.bypostauthor {
	position: relative;
}

/*
** WordPress Page Links and Pagination
*/
.page-item,
.nav-links,
.page-links {
	clear: both;
}

.page-item > span,
.page-item > a,
.nav-links > span,
.nav-links > a,
.page-links > span,
.page-links > a {
	background-color: #fff;
	border: 4px solid #f4f4f5;
	border-radius: 50% !important;
	color: #1f2732;
	display: inline-block;
	line-height: inherit;
	margin-left: 0;
	margin-right: 4px;
	min-width: 3em;
	padding: 0.5em 1.2em;
	text-align: center;
}

.page-item > span:hover,
.page-item > a:hover,
.nav-links > span:hover,
.nav-links > a:hover,
.page-links > span:hover,
.page-links > a:hover {
	background-color: #ff497c;
	border: 4px solid #ff497c;
	color: #fff;
}

.page-item.active > a,
.page-item > span,
.nav-links.active > a,
.nav-links > span,
.page-links.active > a,
.page-links > span {
	background-color: #1f2732 !important;
	border: 4px solid #1f2732;
	color: #fff;
	cursor: not-allowed;
}

.page-item.active > a:hover,
.page-item > span:hover,
.nav-links.active > a:hover,
.nav-links > span:hover,
.page-links.active > a:hover,
.page-links > span:hover {
	border: 4px solid #1f2732;
}

.page-item .fa,
.nav-links .fa,
.page-links .fa {
	font-size: 10px;
}

.page-links a:first-child {
	margin-left: 1em;
}

.pagination {
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	margin-top: 60px;
}

@media (max-width: 767px) {
	.pagination {
		margin-top: 20px;
	}
}

.post-nav {
	margin: 30px 0 0;
	position: relative;
}

.post-nav .nav-links {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;
}

.post-nav .nav-links > div {
	height: auto;
	padding: 60px;
	position: relative;
	text-align: right;
	-webkit-transition: 0.2s opacity ease;
	transition: 0.2s opacity ease;
	width: 48.6%;
}

.post-nav .nav-links > div:hover {
	opacity: 0.9;
}

@media (max-width: 575px) {
	.post-nav .nav-links > div {
		width: 100%;
	}
}

.post-nav .nav-links > div .fa {
	font-size: 20px;
	position: absolute;
	right: 0;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
}

.post-nav .nav-links > div:first-child {
	text-align: left;
}

.post-nav .nav-links > div:first-child .fa {
	left: 0;
	right: auto;
}

.post-nav .nav-links .nav-subtitle {
	display: inline-block;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	line-height: 1.6em;
	min-width: 8em;
	padding: 0.25em 1em 0.05em;
	text-align: center;
	text-transform: uppercase;
}

.post-nav .nav-links .nav-title {
	color: #fff;
	display: block;
	font-weight: 500;
	line-height: 20px;
	margin-top: 8px;
}

.post-nav .nav-links a {
	bottom: 0;
	left: 0;
	position: absolute;
	right: 0;
	top: 0;
}

.post-nav .post-nav-image {
	display: none;
}

.post-nav .cover-image .post-nav-text-wrap {
	text-align: center;
}

.prev.page-numbers {
	background-color: #ff497c;
	border: 4px solid #ff497c;
	color: #fff;
}

.prev.page-numbers:hover {
	background-color: #1f2732;
	border: 4px solid #1f2732;
	color: #fff;
}

.next.page-numbers {
	background-color: #ff497c;
	border: 4px solid #ff497c;
	color: #fff;
}

.next.page-numbers:hover {
	background-color: #1f2732;
	border: 4px solid #1f2732;
	color: #fff;
}

.nav-links .active:hover {
	border: 4px solid #ff497c;
}

.next {
	margin-left: 20px;
}

@media (max-width: 767px) {
	.next {
		margin: 20px 0 0;
	}
}

.navigation.post-nav .s-overlay.ds {
	background-color: #000;
}

/*
** Main Menu styles
*/
.nav-wrap {
	align-items: center;
	-webkit-box-align: center;
	-webkit-box-pack: justify;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-align: center;
	-ms-flex-pack: justify;
	justify-content: space-between;
}

@media (min-width: 768px) and (max-width: 991px) {
	.nav-wrap {
		-webkit-box-pack: end;
		-ms-flex-pack: end;
		justify-content: flex-end;
	}
}

.nav-wrap > .top-nav + *:not(.top-includes) {
	-webkit-box-flex: 100;
	flex-grow: 100;
	-ms-flex-positive: 100;
	padding-left: 30px;
	padding-right: 30px;
}

/* Desktop menu - (min 1200px) styles */

@media (min-width: 1200px) {
	.top-nav {
		align-items: center;
		-webkit-box-align: center;
		-webkit-box-flex: 10;
		-ms-flex-align: center;
		flex-grow: 10;
		-ms-flex-positive: 10;
		-ms-flex-wrap: nowrap;
		flex-wrap: nowrap;
		position: relative;
	}

	.justify-nav-end .top-nav {
		-webkit-box-pack: end;
		-ms-flex-pack: end;
		justify-content: flex-end;
	}

	.justify-nav-center .top-nav {
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		justify-content: center;
	}
	/* menu layout */
	.sf-menu {
		display: block;
	}

	.sf-menu,
	.sf-menu ul {
		list-style: none;
		margin: 0;
		padding: 0;
	}

	.sf-menu li {
		position: relative;
	}

	.sf-menu li > ul {
		display: none;
		position: absolute;
		top: 100%;
		z-index: 99;
	}

	.sf-menu > li > a:after {
		color: #fff;
		content: "\f111";
		font-family: FontAwesome;
		font-size: 5px;
		margin-left: 0;
		position: relative;
		right: -25px;
		top: -3px;
	}

	.sf-menu li:hover > ul,
	.sf-menu li.sfHover > ul {
		display: block;
	}

	.sf-menu a {
		display: block;
		position: relative;
	}
	/* menu skin */
	.sf-menu a {
		font-size: 12px;
		font-weight: 700;
		letter-spacing: 0.2em;
		line-height: 1.6em;
		padding: 13px 0 13px;
		text-decoration: none;
		text-transform: uppercase;
		-webkit-transition-property: color, background-color, border-color, padding-top, padding-bottom;
		transition-property: color, background-color, border-color, padding-top, padding-bottom;
		zoom: 1;
	}

	.sf-menu li {
		*white-space: normal;
		white-space: nowrap;
	}

	.sf-menu > li {
		display: inline-block;
		position: relative;
	}

	.sf-menu.nav > li:first-child > a {
		margin-left: 0;
	}

	.sf-menu.nav > li:last-child > a {
		margin-right: 0;
	}

	.sf-menu > li > a {
		line-height: 14px;
		margin: 0 15px;
		padding-bottom: 53px;
		padding-left: 0;
		padding-right: 0;
		padding-top: 53px;
		-webkit-transition-duration: 0.15s;
		transition-duration: 0.15s;
	}

	.affix .sf-menu > li > a {
		padding-bottom: 33px;
		padding-top: 33px;
	}
}

@media (min-width: 1200px) and (min-width: 1500px) {
	.sf-menu > li > a {
		margin: 0 25px;
	}
}

@media (min-width: 1200px) {
	.sf-menu > li > a:hover,
	.sf-menu > li.active > a {
		color: #ff497c;
	}

	.nav-narrow .sf-menu > li {
		padding: 0;
	}

	.nav-narrow .sf-menu > li > a {
		margin-left: 29px;
		margin-right: 29px;
		padding-bottom: 26px;
		padding-top: 26px;
	}

	.nav-narrow .sf-menu > li.active > a:before {
		background-color: #ff497c;
		content: "";
		height: 1px;
		left: -20px;
		position: absolute;
		right: -20px;
		top: 0;
		z-index: 1;
	}

	.nav-bordered .sf-menu > li + li:before {
		background-color: rgba(255, 255, 255, 0.15);
		bottom: 0;
		content: "";
		left: -2px;
		position: absolute;
		top: 0;
		width: 1px;
	}

	.cs .sf-menu > li > a {
		color: #fff;
	}

	.cs .sf-menu > li > a:hover,
	.cs .sf-menu > li.active > a {
		color: #ff497c;
	}

	.ds .sf-menu > li > a {
		color: var(--theme-menu-text-color);
	}

	.ds .sf-menu > li > a:hover,
	.ds .sf-menu > li.active > a {
		color: var(--theme-color);
	}

	.ls .sf-menu > li > a {
		color: #323232;
	}

	.ls .sf-menu > li > a:hover,
	.ls .sf-menu > li.active > a {
		color: #ff497c;
	}

	.ls .sf-menu > li + li:before {
		background-color: #e1e1e1;
	}

	.sf-menu li:hover,
	.sf-menu li.sfHover {
		/* only transition out, not in */
		-webkit-transition: none;
		transition: none;
	}
	/* second and next levels */
	.sf-menu > li .mega-menu,
	.sf-menu li > ul {
		/* allow long menu items to determine submenu width */
		*width: 10em;
		background-color: #fff;
		border-top: 4px solid #ff497c;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		list-style: none;
		margin-top: 5px;
		min-width: 10em;
		padding: 28px 0 28px;
		text-align: center;
		/* no auto sub width for IE7, see white-space comment below */
	}

	.sf-menu > li .mega-menu {
		padding-left: 0;
		padding-right: 0;
	}

	.sf-menu.nav ul a {
		color: #323232;
		padding-left: 100px;
		padding-right: 100px;
	}

	.sf-menu .mega-menu ul {
		background: transparent;
		box-shadow: none;
		padding: 0;
	}

	.sf-menu .mega-menu ul a {
		padding-left: 0;
		padding-right: 0;
	}

	.sf-menu ul a:hover,
	.sf-menu ul li.active > a {
		color: #ff497c;
	}
	/* third level */
	.sf-menu ul ul {
		margin-top: 0;
		top: -32px;
	}

	.sf-arrows ul .sf-with-ul:after {
		content: "\f105";
		font-family: "FontAwesome";
		padding-left: 7px;
	}
}

.sf-menu i[class] {
	font-size: 1.1em;
	margin-right: 7px;
}

/* hidden menu items */

@media (min-width: 1200px) {
	.sf-menu .sf-xl-hidden {
		display: none !important;
	}
}

@media (max-width: 1199px) {
	.sf-more-li {
		display: none;
	}
}

.sf-menu > li:last-child > a:after {
	display: none;
}

.toggle-menu-header .page_header_side {
	bottom: 0;
	left: -310px;
	position: fixed;
	top: 0;
	width: 310px;
	z-index: 1005;
}

/* Mobile menu toggler */

@media (min-width: 1200px) {
	.page_header .toggle_menu,
	.page_toplogo .toggle_menu {
		display: none;
	}
}

.toggle_menu {
	cursor: pointer;
	height: 60px;
	margin-left: -30px;
	margin-top: -30px;
	opacity: 0.95;
	padding: 0 !important;
	position: absolute;
	right: 0;
	top: 50%;
	visibility: visible;
	width: 60px;
	z-index: 1002;
}

.page_header_wrapper .toggle_menu {
	z-index: 1003;
}

.ls .toggle_menu {
	background-color: #fff;
}

.ls .toggle_menu:before,
.ls .toggle_menu span,
.ls .toggle_menu span:before,
.ls .toggle_menu span:after {
	background-color: #323232;
}

.page_toplogo .toggle_menu {
	left: auto;
	margin: 0;
	position: fixed;
	right: 0;
	top: 0;
}

.toggle_menu:hover span:before {
	top: 13px;
	-webkit-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	transform: rotate(45deg);
}

.toggle_menu:hover span:after {
	top: 13px;
	-webkit-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
	transform: rotate(-45deg);
}

.toggle_menu:before,
.toggle_menu span,
.toggle_menu span:before,
.toggle_menu span:after {
	background-color: #fff;
	content: "";
	display: block;
	height: 2px;
	left: 0;
	position: absolute;
	-ms-transform: rotate(0deg);
	-webkit-transform: rotate(0deg);
	transform: rotate(0deg);
	-webkit-transition: .25s ease-in-out;
	transition: .25s ease-in-out;
	width: 31px;
}

.toggle_menu:before,
.toggle_menu span {
	color: #fff;
	content: "menu";
	font-size: 9px;
	font-weight: 800;
	left: 13px;
	letter-spacing: 1px;
	text-transform: uppercase;
	top: 24%;
	width: 0;
}

.toggle_menu span:before {
	opacity: 1;
	top: 0;
}

.toggle_menu span:after {
	opacity: 1;
	top: 28px;
}

.toggle_menu.mobile-active {
	background-color: #ff497c;
	border: none;
	left: auto;
	margin: 0;
	position: fixed;
	right: 0;
	top: 0;
	z-index: 3000;
}

.toggle_menu.mobile-active:before {
	background-color: #fff;
}

.toggle_menu.mobile-active span {
	background-color: #fff;
}

.toggle_menu.mobile-active span:before,
.toggle_menu.mobile-active span:after {
	opacity: 1;
}

.toggle_menu.active span:before,
.toggle_menu.active span:after {
	opacity: 1;
}

.toggle_menu:hover:before {
	top: 32px;
}

.ls .toggle_menu:before,
.toggle_menu span {
	color: #fff;
}

.toggle_menu.toggle_menu_side.ds {
	background-color: transparent;
}

/* Mobile Menu (max 991px) styles */

@media (max-width: 767px) {
	.nav-wrap {
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		justify-content: center;
	}
}

@media (max-width: 1199px) {
	.page_header [class*="col"] {
		min-height: 0;
	}

	.top-nav {
		background-color: transparent;
		bottom: 0;
		left: 0;
		opacity: 0;
		position: fixed;
		right: 0;
		top: 0;
		-webkit-transition: all 0.3s ease-in-out;
		transition: all 0.3s ease-in-out;
		visibility: hidden;
		z-index: 10;
	}

	.mobile-active .top-nav {
		background-color: #111;
		background-color: rgba(0, 0, 0, 0.9);
		opacity: 1;
		visibility: visible;
		z-index: 1002;
	}

	.nav-justified > li > a {
		text-align: left;
	}

	.sf-menu {
		background-color: #fff;
		border-top: 61px solid #ff497c;
		bottom: 0;
		display: block;
		font-size: 12px;
		font-weight: 700;
		left: 0;
		letter-spacing: 0.2em;
		line-height: 1.6em;
		opacity: 0;
		overflow: auto;
		padding: 20px 10px 20px 20px;
		position: fixed;
		right: 100%;
		text-align: left;
		text-transform: uppercase;
		top: 0;
		-webkit-transition: all 0.4s ease-in-out;
		transition: all 0.4s ease-in-out;
	}

	.mobile-active .sf-menu {
		opacity: 1;
		right: 0;
	}

	.sf-menu li {
		position: relative;
	}

	.top-nav .sf-menu a {
		color: #323232;
		display: block;
		padding: 10px 10px;
		z-index: 2;
	}

	.sf-menu ul {
		list-style: none;
		margin-top: 0 !important;
		padding-left: 10px;
	}

	.sf-menu ul li a {
		font-weight: 500;
		letter-spacing: 0.1em;
	}

	.sf-menu ul li a:before {
		background-color: #ff497c;
		border-radius: 50%;
		bottom: 3px;
		content: "";
		display: inline-block;
		height: 3px;
		margin-right: 10px;
		position: relative;
		width: 3px;
	}
	/* arrows (for all except IE7) */
	.sf-arrows .sf-with-ul {
		padding-right: 3.5em;
	}
	/* styling for both css and generated arrows */
	.sf-arrows .sf-with-ul + .sf-menu-item-mobile-toggler {
		border-radius: 50%;
		height: 30px;
		line-height: 30px;
		position: absolute;
		right: 5px;
		text-align: center;
		top: 5px;
		width: 30px;
		z-index: 1;
	}

	.sf-arrows .sf-with-ul + .sf-menu-item-mobile-toggler:after {
		color: #323232;
		content: "\f105";
		font-family: "FontAwesome";
	}

	.sfHover > .sf-with-ul + .sf-menu-item-mobile-toggler:after {
		content: "\f107";
	}
}

/* Mega Menu */

@media screen and (min-width: 992px) {
	.top-nav ul .mega-menu ul {
		border: none;
		min-width: auto;
	}

	.top-nav .menu-item-has-mega-menu {
		position: relative;
	}

	.top-nav .mega-menu {
		display: none;
		position: absolute;
		top: 100%;
		width: 940px;
		z-index: 10;
	}

	.top-nav .menu-item-has-mega-menu:hover .mega-menu {
		display: block;
	}
	/* row */
	.top-nav .mega-menu-row {
		display: table;
		position: static;
		table-layout: fixed;
	}

	.top-nav .mega-menu-row ul {
		display: block;
		position: static;
	}
	/* column */
	.top-nav .mega-menu-col {
		border-left: 1px solid #e1e1e1;
		display: table-cell;
		padding: 0 15px;
		width: 2000px;
		/* overrides from settings / styling / mega-menu */
	}

	.top-nav .mega-menu-col > a {
		font-size: 16px;
		font-weight: 700;
		letter-spacing: 0.05em;
		text-transform: uppercase;
	}

	.top-nav .mega-menu-col:first-child {
		border-left: none;
	}

	.top-nav ul ul .mega-menu {
		display: block;
		margin-left: 1px;
		top: -20px;
		width: auto;
	}

	.top-nav ul ul .mega-menu li {
		border: none;
		display: block;
		width: auto;
	}
}

@media screen and (min-width: 1200px) {
	.top-nav .mega-menu {
		width: 1170px;
	}

	.top-nav ul .mega-menu ul {
		min-width: 10em;
	}

	.top-nav .mega-menu-col {
		padding: 0 40px;
	}
}

@media screen and (max-width: 991px) {
	.top-nav .mega-menu {
		position: static;
	}
}

/* side clickable menu styles */
.menu-click {
	padding: 0;
}

.menu-click i {
	margin-right: 10px;
	text-align: center;
	width: 1em;
}

.menu-click .toggle_submenu {
	border-radius: 50%;
	cursor: pointer;
	font-size: 8px;
	height: 3em;
	line-height: 3em;
	opacity: 0.9;
	position: absolute;
	right: 20px;
	text-align: center;
	top: 8px;
	-ms-transform: rotate(-90deg);
	-webkit-transform: rotate(-90deg);
	transform: rotate(-90deg);
	-webkit-transition: .25s ease-in-out;
	transition: .25s ease-in-out;
	width: 3em;
}

.menu-click .toggle_submenu:before {
	content: "\f078";
	font-family: "FontAwesome";
	height: 3em;
	left: 0;
	line-height: 3em;
	position: absolute;
	top: 0;
	width: 3em;
}

.menu-click ul {
	padding: 0;
}

.menu-click li {
	list-style: none;
	position: relative;
	width: 100%;
}

.menu-click > li {
	-webkit-transition: 0.3s ease-in-out;
	transition: 0.3s ease-in-out;
}

.menu-click a {
	display: block;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	line-height: 1.6em;
	padding: 10px 40px;
	text-transform: uppercase;
}

.menu-click a:hover {
	background-color: rgba(150, 150, 150, 0.05);
}

.menu-click .active-submenu > a {
	background-color: rgba(150, 150, 150, 0.05);
}

.menu-click .active-submenu > .toggle_submenu {
	-webkit-transform: rotate(0deg);
	-ms-transform: rotate(0deg);
	transform: rotate(0deg);
}

.menu-click li.active > a {
	color: #ff497c;
}

.menu-click ul {
	height: 0;
	opacity: 0;
}

.menu-click ul a {
	padding-bottom: 8px;
	padding-left: 50px;
	padding-top: 8px;
}

.menu-click ul ul a {
	padding-left: 60px;
}

.menu-click ul ul ul a {
	padding-left: 70px;
}

.menu-click ul ul ul ul a {
	padding-left: 80px;
}

.menu-click .active-submenu > div.mega-menu {
	height: auto;
}

.menu-click .active-submenu > ul,
.menu-click .active-submenu > div.mega-menu > ul {
	height: auto;
	opacity: 1;
}

.menu-click ul,
.menu-click div.mega-menu {
	height: 0;
	overflow: hidden;
	-webkit-transition: opacity 0.6s, margin-top 0.4s, margin-bottom 0.4s, height 0.3s ease-in-out;
	transition: opacity 0.6s, margin-top 0.4s, margin-bottom 0.4s, height 0.3s ease-in-out;
}

.menu-click ul li.sfHover > .mega-menu ul {
	display: block;
	height: 100%;
}

.menu-click div.mega-menu > ul {
	height: auto;
	margin-right: 0;
}

/*
** Header
*/
.page_header {
	height: auto;
	left: 0;
	margin: 0;
	padding: 0;
	position: relative;
	right: 0;
	top: 0;
	-webkit-transition: 0.5s ease-in-out;
	transition: 0.5s ease-in-out;
	width: 100%;
	z-index: 1000;
}

.boxed .page_header,
.page_header.affix {
	box-shadow: 0 2px 15px 0 rgba(100, 100, 100, 0.05);
	opacity: 0.98;
	position: fixed !important;
	z-index: 1001;
}

.boxed .page_header:after,
.page_header.affix:after {
	background-color: transparent;
}

.page_header.affix.s-bordertop::before {
	display: none;
}

@media (max-width: 991px) {
	.page_header.mobile-active {
		opacity: 1;
		z-index: 1003;
	}
}

.page_header.affix-bottom {
	position: fixed;
	top: 0 !important;
}

.page_header .row {
	min-height: 60px;
}

.page_header a {
	display: inline-block;
}

.page_header .btn {
	margin-bottom: 0;
	padding: 10px 28px;
}

.header_absolute {
	position: relative;
}

.header_absolute .page_header,
.header_absolute .page_header_wrapper {
	left: 0;
	position: absolute;
	right: 0;
	z-index: 10;
}

.header_absolute.header_transparent .page_header_wrapper {
	background-color: transparent;
}

.header_absolute .page_topline,
.header_absolute .page_toplogo,
.header_absolute .page_header_wrapper,
.header_absolute .page_title {
	background-color: rgba(31, 39, 50, 0.5);
}

#canvas:not(.boxed) .header_absolute .page_header.affix-top {
	background-color: transparent;
}

.page_topline {
	line-height: 1.4;
}

.page_topline.small-text i {
	font-size: 14px;
}

.page_topline .icon-inline {
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
}

.page_topline .social-icons {
	display: inline-block;
}

.page_topline .widget_nav_menu {
	display: inline-block;
}

.page_topline ul {
	margin: 0;
	padding: 0;
}

.page_topline ul li {
	display: inline-block;
}

.page_topline .dropdown-menu {
	margin: 23px 0 0 -25px;
	min-width: auto;
}

.page_topline .dropdown-language a > img {
	bottom: 1px;
	margin-right: 6px;
	max-width: 16px;
	position: relative;
}

.page_topline .owl-news-slider-dates {
	font-weight: 700;
}

.page_topline .topline-news-item {
	height: 2em;
	line-height: 2em;
	margin: 0 90px;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
}

.page_topline .topline-news-item .cat-links {
	display: inline;
}

.page_topline .topline-news-nav-arrow {
	border: 1px solid #323232;
	bottom: 20px;
	font-size: 10px;
	line-height: 38px;
	position: relative;
	-webkit-transition: opacity 0.2s ease-in-out;
	transition: opacity 0.2s ease-in-out;
	width: 40px;
}

.page_topline .topline-news-nav-arrow:hover {
	opacity: 0.5;
}

.page_topline .owl-nav > div {
	opacity: 1;
}

@media (min-width: 992px) {
	.page_toplogo .media + .media {
		margin-left: 60px;
	}
}

.page_toplogo .widget_search form,
.page_toplogo .widget_product_search form,
.page_toplogo .widget_search input,
.page_toplogo .widget_product_search input {
	max-width: none;
}

@media (max-width: 991px) {
	.page_toplogo .media {
		margin: 10px;
	}
}

@media (min-width: 1500px) {
	.page_topline .container-fluid,
	.page_toplogo .container-fluid,
	.page_header .container-fluid {
		padding-left: 60px;
		padding-right: 60px;
	}
}

.boxed .main-toggle,
.main-toggle.affix {
	box-shadow: 0 2px 15px 0 rgba(100, 100, 100, 0.05);
	opacity: 0.98;
	padding: 300px;
	position: fixed !important;
	z-index: 1001;
}

/*header includes*/
.top-includes {
	margin: 0;
	padding: 0;
}

@media (min-width: 992px) {
	.top-includes {
		white-space: nowrap;
	}
}

.top-includes > * {
	display: inline-block;
}

.top-includes > li {
	margin-left: 10px;
}

.top-includes > li:first-child {
	margin-left: 0;
}

@media (min-width: 992px) {
	.top-includes.border-divided > li + li {
		border-left: 2px solid rgba(200, 200, 200, 0.35);
		margin-left: 26px;
		padding-left: 30px;
	}
}

@media (min-width: 992px) {
	.top-nav + .top-includes {
		margin-left: 50px;
	}
}

@media (max-width: 991px) {
	.top-includes.md-absolute {
		bottom: 0;
		position: absolute;
		right: 80px;
	}
}

.top-includes a.border-icon,
.top-includes a.bg-icon,
.top-includes a.color-bg-icon {
	margin-bottom: 2px;
	margin-top: 2px;
}

/*logo*/
a.logo {
	align-items: center;
	-webkit-box-align: center;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-align: center;
}

a.logo img {
	display: inline-block;
	max-height: 80px;
}

a.logo .logo-text {
	font-size: 34px;
	padding: 0 10px;
}

a.logo .logo-subtext {
	font-size: 22px;
	padding: 0 10px;
}

a.logo .logo-text-bottom {
	font-size: 26px;
}

a.logo .flex-column,
a.logo.flex-column {
	align-items: flex-start;
	-webkit-box-align: start;
	-ms-flex-align: start;
	padding-bottom: 10px;
	padding-top: 10px;
}

a.logo .flex-column.text-center,
a.logo.flex-column.text-center {
	display: inline-block;
}

.text-center a.logo {
	align-items: center;
	-webkit-box-align: center;
	-webkit-box-pack: center;
	-ms-flex-align: center;
	-ms-flex-pack: center;
	justify-content: center;
}

.header_logo_center a.logo {
	display: inline-block;
	padding: 10px 0;
	position: relative;
	z-index: 2;
}

.header_logo_center.affix a.logo {
	padding: 5px 0;
}

@media (min-width: 992px) {
	.header_logo_center .logo_wrapper {
		align-items: center;
		bottom: 0;
		-webkit-box-align: center;
		-webkit-box-pack: center;
		display: flex;
		display: -webkit-box;
		display: -ms-flexbox;
		-ms-flex-align: center;
		-ms-flex-pack: center;
		justify-content: center;
		left: 0;
		position: absolute;
		right: 0;
		top: 0;
	}
}

/*search modal*/
#search_modal {
	padding: 0 !important;
}

#search_modal .widget {
	background-color: #fff;
	padding: 20px 0;
}

@media (min-width: 1200px) {
	#search_modal .widget:before {
		background: url("../images/logo.png") no-repeat 0 0;
		content: "";
		height: 100px;
		opacity: 0.2;
		position: absolute;
		top: 0;
		width: 100%;
	}
}

#search_modal .search-form {
	margin: 0 auto;
	max-width: 960px;
	padding: 0 100px 0 0;
}

#search_modal a {
	color: #fff;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	line-height: 1.6em;
	text-transform: uppercase;
}

#search_modal a:hover {
	color: #ff497c;
	opacity: 1;
}

#search_modal .searchform-respond {
	color: #fff;
	margin: 20px auto;
	width: 300px;
}

#search_modal .form-group {
	margin-bottom: 0;
}

#search_modal .form-control {
	background-color: transparent;
	border: none;
	color: #323232;
	font-size: 28px;
	font-style: italic;
	height: 60px;
	max-width: none;
	width: 100%;
}

#search_modal .form-control:-moz-placeholder {
	color: #808080;
	opacity: 1;
}

#search_modal .form-control::-moz-placeholder {
	color: #808080;
	opacity: 1;
}

#search_modal .form-control:-ms-input-placeholder {
	color: #808080;
}

#search_modal .form-control::-webkit-input-placeholder {
	color: #808080;
}

#search_modal .btn {
	color: #323232;
	font-size: 0;
	margin: 0 60px 0 0;
	padding: 30px 22px 25px;
	width: auto;
}

#search_modal .btn:before {
	color: #323232;
	font-size: 18px;
}

#search_modal .close {
	color: #323232;
	font-size: 30px;
	line-height: 60px;
	min-width: 60px;
	opacity: 1;
	position: absolute;
	right: 0;
	text-align: center;
	text-shadow: none;
	top: 18px;
	z-index: 2;
}

.active-side-header #search_modal {
	right: 310px;
}

.search_modal_button {
	display: inline-block;
	font-size: 14px;
	line-height: 1;
	padding: 0 0 0 10px;
}

@media (max-width: 1199px) {
	.modal_button .search_modal_button {
		margin-right: 50px;
	}
}

/*
** Side Header
*/
/* side header layout */
body:after {
	background-color: rgba(0, 0, 0, 0.5);
	bottom: 0;
	content: "";
	left: 0;
	opacity: 0;
	position: fixed;
	right: 0;
	top: 0;
	visibility: hidden;
	z-index: 1001;
}

body,
body:after,
#canvas,
.page_header_side {
	-webkit-transition: 0.5s ease-in-out;
	transition: 0.5s ease-in-out;
}

#canvas {
	left: 0;
	-webkit-transition-property: left, margin-left;
	transition-property: left, margin-left;
}

body.active-side-header {
	overflow: hidden;
}

body.active-side-header #canvas {
	left: 310px;
}

body.active-side-header .page_header_side {
	left: 0;
}

body.active-side-header:after {
	opacity: 1;
	visibility: visible;
}

html.html-active-push-header {
	overflow: hidden;
}

.page_header_side {
	bottom: 0;
	left: -310px;
	position: fixed;
	top: 0;
	width: 310px;
	z-index: 1002;
}

.page_header_side.active-slide-side-header {
	box-shadow: 0 0 4px 3px rgba(50, 50, 50, 0.05);
}

.page_header_side ~ .page_toplogo .toggle_menu {
	display: none;
}

.page_header_side a.logo {
	margin-bottom: 20px;
	padding: 10px 20px;
}

.page_header_side a.logo img {
	max-width: 100%;
}

.page_header_side .widget {
	margin-top: 60px;
	padding-left: 30px;
	padding-right: 30px;
}

.page_header_side .widget_icons_list li + li {
	margin-top: 1em;
}

.page_header_side .social-icons {
	display: block;
	margin-top: 43px;
}

.page_header_side .social-icons a.border-icon,
.page_header_side .social-icons a.bg-icon,
.page_header_side .social-icons a.color-bg-icon {
	margin-bottom: 2px;
	margin-top: 2px;
}

@media (min-width: 1200px) {
	.page_header_side ~ .page_topline .container-fluid,
	.page_header_side ~ .page_toplogo .container-fluid,
	.page_header_side ~ div .page_header .container-fluid {
		padding-left: 65px;
		padding-right: 65px;
	}
}

@media (max-width: 1199px) {
	.page_header_side ~ .page_topline [class*="container"],
	.page_header_side ~ .page_toplogo [class*="container"],
	.page_header_side ~ div .page_header [class*="container"] {
		padding-left: 65px;
		padding-right: 65px;
	}
}

.side_header_inner {
	padding: 26px 0 60px;
}

.main-toggle .side_header_inner {
	padding: 8px 0 60px;
}

.toggle_menu_side {
	margin: 0;
	position: absolute;
	right: -60px;
	top: 0;
	-webkit-transition: right 0.3s ease-in-out;
	transition: right 0.3s ease-in-out;
}

@media (max-width: 370px) {
	.toggle_menu_side.active {
		opacity: 0.4;
		right: 0;
	}
}

.toggle_menu_side:before,
.toggle_menu_side span:before,
.toggle_menu_side span:after,
.toggle_menu_side span {
	background-color: #fff !important;
}

.ds .toggle_menu_side {
	background-color: #ff497c;
}

.bs .toggle_menu_side {
	background-color: #ff497c;
}

.ls .toggle_menu_side {
	background-color: transparent;
}

.page_header_side.header_side_sticked .toggle_menu_side {
	right: -60px;
	top: 0;
	-webkit-transition: 0.5s ease-in-out;
	transition: 0.5s ease-in-out;
}

.page_header_side.active-slide-side-header {
	left: 0;
}

.active-side-header .boxed .header_push ~ div .page_header,
.active-side-header .header_push ~ div .page_header.affix {
	margin-left: 310px;
}

.active-side-header.slide-right .boxed .header_push ~ div .page_header,
.active-side-header.slide-right .header_push ~ div .page_header.affix {
	margin-left: -310px;
}

.page_header_side.header_side_right {
	left: auto;
	right: -310px;
}

.page_header_side.header_side_right.active-slide-side-header {
	right: 0;
}

.page_header_side.header_side_right .toggle_menu_side {
	left: -60px;
	right: auto;
	-webkit-transition: left 0.3s ease-in-out;
	transition: left 0.3s ease-in-out;
}

@media (max-width: 370px) {
	.page_header_side.header_side_right .toggle_menu_side.active {
		left: 0;
	}
}

body.active-side-header.slide-right #canvas {
	left: -310px;
}

body.active-side-header.slide-right .page_header_side {
	left: auto;
	right: 0;
}

@media (min-width: 600px) {
	.page_header_side.header_side_sticked.active-slide-side-header {
		left: 0;
	}

	.header_side_sticked ~ * {
		-webkit-transition: margin 0.5s ease-in-out;
		transition: margin 0.5s ease-in-out;
	}

	.header_side_sticked ~ * .container-fluid {
		padding-left: 80px;
	}

	.header_side_sticked ~ div .page_header {
		width: auto;
	}

	.header_side_sticked.active-slide-side-header ~ *,
	.header_side_sticked.active-slide-side-header ~ div .page_header {
		margin-left: 310px;
	}

	.boxed .header_side_sticked.active-slide-side-header ~ *,
	.boxed .header_side_sticked.active-slide-side-header ~ div .page_header {
		margin-left: 0;
	}

	.header_side_sticked ~ .page_header_wrapper {
		margin: 0 !important;
	}

	.page_header_side.header_side_sticked.header_side_right.active-slide-side-header {
		left: auto;
	}

	.header_side_sticked.header_side_right.active-slide-side-header ~ *,
	.header_side_sticked.header_side_right.active-slide-side-header ~ div .page_header {
		margin-left: 0;
		margin-right: 310px;
	}
}

/* /*
** Intro Section Styles
*/
.page_slider {
	clear: both;
	overflow: hidden;
	position: relative;
}

.page_slider > img {
	width: 100%;
}

.page_slider h2 {
	font-size: 95px;
	line-height: 1;
	margin-bottom: 15px;
	margin-top: 15px;
}

.page_slider h3 {
	font-weight: 300;
	line-height: 40px;
}

.page_slider h4 {
	font-size: 1.5em;
	margin: 0;
}

.page_slider p {
	font-size: 1.2em;
	margin: 0;
}

@media (min-width: 992px) {
	.page_slider h2 {
		font-size: 6em;
	}

	.page_slider h3 {
		font-size: 80px;
	}

	.page_slider h4 {
		font-size: 2.5em;
	}

	.page_slider p {
		font-size: 1.7em;
	}
}

.page_slider .flexslider .slides .itro_slider {
	z-index: 10;
}

.page_slider .flexslider:before,
.page_slider .flexslider:after {
	clear: both;
	content: "";
	display: block;
}

.page_slider .flexslider .intro_layer img {
	display: inline-block;
	width: auto;
}

.page_slider .flexslider.slider-shadow {
	padding-bottom: 50px;
}

.page_slider .flexslider.slider-shadow:before,
.page_slider .flexslider.slider-shadow:after {
	background: transparent;
	bottom: 65px;
	box-shadow: 0 25px 20px rgba(0, 0, 0, 0.3);
	content: "";
	height: 20%;
	left: 10px;
	max-width: 400px;
	position: absolute;
	transform: rotate(-3deg);
	-ms-transform: rotate(-3deg);
	-webkit-transform: rotate(-3deg);
	width: 50%;
	z-index: 1;
}

.page_slider .flexslider.slider-shadow:after {
	left: auto;
	right: 10px;
	-webkit-transform: rotate(3deg);
	-ms-transform: rotate(3deg);
	transform: rotate(3deg);
}

.page_slider .intro_layers_wrapper {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
}

.page_slider .intro_after_featured_word {
	color: #fff;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 1.5em;
	margin-top: 15px;
	text-transform: uppercase;
}

.page_slider .intro_layers {
	-webkit-box-direction: normal;
	-webkit-box-orient: vertical;
	-webkit-box-pack: center;
	display: -webkit-box;
	display: flex;
	display: -ms-flexbox;
	-ms-flex-direction: column;
	flex-direction: column;
	-ms-flex-pack: center;
	justify-content: center;
	padding: 20px 0;
	width: 100%;
}

.page_slider .flex-control-nav {
	bottom: 55px;
	-webkit-box-direction: normal;
	-webkit-box-orient: horizontal;
	-webkit-box-pack: center;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-direction: row;
	flex-direction: row;
	-ms-flex-pack: center;
	justify-content: center;
	position: absolute;
	width: 100%;
}

@media (max-width: 991px) {
	.page_slider .flex-control-nav {
		display: none;
	}
}

.page_slider .flex-control-nav li {
	display: block;
	padding-bottom: 6px;
	padding-top: 6px;
}

.page_slider .flex-control-nav li a {
	background: #fff;
	border-color: #fff;
	opacity: 0.5;
}

.page_slider .flex-control-nav li a.flex-active {
	opacity: 1;
}

@media (min-width: 767px) {
	.page_slider.team_slider .container-fluid {
		position: inherit;
	}

	.page_slider .cs,
	.page_slider .ds {
		background-color: transparent;
	}

	.page_slider .container-fluid,
	.page_slider .container,
	.page_slider img + .container {
		bottom: 0;
		left: 0;
		margin-left: auto;
		margin-right: auto;
		position: absolute;
		right: 0;
		top: 0;
	}

	.page_slider [class*="col-"] {
		margin-bottom: 0;
		margin-top: 0;
		min-height: 0;
		position: static;
	}

	.page_slider .intro_layers_wrapper {
		bottom: 0;
		height: 107%;
		left: 15px;
		position: absolute;
		right: 15px;
		top: 0;
		z-index: 5;
	}
}

@media (min-width: 767px) and (min-width: 600px) {
	.boxed .page_slider .intro_layers_wrapper {
		padding-left: 60px;
		padding-right: 60px;
	}
}

@media (min-width: 767px) {
	.page_slider .intro_text_top .intro_layers {
		-webkit-box-pack: start;
		-ms-flex-pack: start;
		justify-content: flex-start;
	}

	.page_slider .intro_text_bottom .intro_layers {
		-webkit-box-pack: end;
		-ms-flex-pack: end;
		justify-content: flex-end;
	}

	.page_slider .intro_before_featured_word {
		font-size: 37px;
		font-weight: 200;
		line-height: 0.8;
		margin: 0;
		padding: 0 0.2em;
		text-align: center;
		text-shadow: 0 0 7px rgba(0, 0, 0, 0.25);
	}

	.page_slider .intro_featured_word {
		font-size: 80px;
		line-height: 0.9;
		margin: 10px 0;
		text-shadow: 0 0 13px rgba(0, 0, 0, 0.1);
		white-space: nowrap;
	}

	.page_slider .intro_after_featured_word {
		font-size: 17px;
		font-weight: 500;
		letter-spacing: 1em;
		margin-top: 60px;
		text-shadow: 0 0 4px rgba(0, 0, 0, 0.4);
		text-transform: uppercase;
	}
}

@media (max-width: 767px) {
	.page_slider .intro_featured_word {
		font-size: 56px;
		margin-top: 6px;
	}

	.page_slider .intro_before_featured_word {
		font-size: 33px;
		font-weight: 200;
		margin-top: 0;
	}

	.page_slider .intro_after_featured_word {
		color: #fff;
		font-size: 15px;
		font-weight: 400;
		letter-spacing: 1em;
		margin-top: 39px;
	}
}

@media (min-width: 992px) {
	.page_slider .intro_layers_wrapper {
		padding: 100px 0;
	}

	.page_slider .intro_before_featured_word {
		font-size: 42px;
	}

	.page_slider .intro_featured_word {
		font-size: 138px;
	}

	.page_slider .intro_after_featured_word {
		color: #fff;
		font-size: 14px;
		letter-spacing: 2.1em;
		margin-bottom: 31px;
	}
}

@media (min-width: 1600px) {
	.page_slider .intro_before_featured_word {
		font-size: 54px;
	}

	.page_slider .intro_featured_word {
		font-size: 200px;
		font-weight: 600;
		margin-bottom: 20px;
		white-space: nowrap;
	}

	.container .page_slider .intro_featured_word {
		font-size: 138px;
	}
}

@media (max-width: 991px) {
	.page_slider {
		text-align: center;
	}
}

.page_slider .flexslider .slides li:before {
	background-image: url("{{ asset('frontend_assets/img/pattern.png') }}");
	background-repeat: no-repeat;
	content: "";
	display: block;
	height: 432px;
	left: 50%;
	margin-left: -230px;
	margin-top: -216px;
	position: absolute;
	top: 46%;
	width: 432px;
	z-index: 4;
}

@media (max-width: 991px) {
	.page_slider .flexslider .slides li:before {
		display: none;
	}
}

.flexslider-overlay {
	background-color: rgba(31, 39, 50, 0.7);
	bottom: 0;
	content: "";
	display: block;
	height: 100%;
	left: 0;
	position: absolute;
	right: 0;
	top: 0;
	width: 100%;
	z-index: 3;
}

.flexslider-bottom:before {
	background-color: #fff;
	bottom: -35px;
	content: "";
	height: 70px;
	left: 0;
	position: absolute;
	-webkit-transform: skewY(3deg);
	-ms-transform: skewY(3deg);
	transform: skewY(3deg);
	width: 50%;
	z-index: 4;
}

.flexslider-bottom:after {
	background-color: #fff;
	bottom: -35px;
	content: "";
	height: 70px;
	position: absolute;
	right: 0;
	-webkit-transform: skewY(-3deg);
	-ms-transform: skewY(-3deg);
	transform: skewY(-3deg);
	width: 50%;
	z-index: 4;
}

.flexslider-bottom .mouse-button {
	background-image: url("{{ asset('frontend_assets/img/mouse_icon.png') }}");
	background-repeat: no-repeat;
	bottom: 30px;
	content: "";
	display: block;
	height: 60px;
	left: 50%;
	margin-left: -20px;
	position: absolute;
	width: 40px;
	z-index: 4;
}

@media (max-width: 992px) {
	.blog-slide {
		display: none;
	}
}

.blog-slide img {
	max-height: 600px;
}

.blog-slide .slide01 .intro_layers_wrapper {
	height: 99%;
}

@media (min-width: 992px) {
	.blog-slide .slide01 h4 {
		font-size: 14px;
		letter-spacing: 1.8em;
	}

	.blog-slide .slide01 h2 {
		font-size: 160px;
		font-weight: 600;
		margin: 23px 0;
	}

	.blog-slide .slide01 p {
		font-size: 46px;
		font-weight: 200;
	}
}

.blog-slide .slide02 p {
	font-size: 60px;
	font-weight: 500;
	margin-bottom: 21px;
}

.blog-slide .slide02 h2 {
	color: #ff497c;
	font-size: 100px;
	font-weight: 200;
}

.blog-slide .slide02 h4 {
	font-size: 14px;
	letter-spacing: 1.9em;
	margin-top: 20px;
}

.blog-slide .slide03 .intro_layers_wrapper {
	height: 84%;
}

.blog-slide .slide03 h3 {
	line-height: 100px;
	margin-top: 70px;
}

@media (min-width: 991px) {
	.blog-slide .intro_layers_wrapper {
		height: 103%;
	}
}

.page_slider.blog-slide .flexslider .slides li:before {
	background-image: none;
}

/* Direction Nav */
.flex-direction-nav {
	height: 0;
}

.flex-direction-nav a {
	background-color: rgba(255, 255, 255, 0.1);
	border-radius: 50% 0 0 50%;
	color: #fff;
	cursor: pointer;
	display: block;
	font-size: 0;
	height: 80px;
	margin: -40px 0 0;
	opacity: 1;
	overflow: hidden;
	position: absolute;
	text-align: center;
	text-decoration: none;
	top: 48%;
	width: 80px;
	z-index: 10;
}

.flex-direction-nav a:before {
	content: "\f104";
	font-family: "FontAwesome";
	font-size: 20px;
	left: auto;
	position: absolute;
	right: 20px;
	top: 23px;
	-webkit-transition: all 0.3s ease-in-out 0s;
	transition: all 0.3s ease-in-out 0s;
}

@media (max-width: 767px) {
	.flex-direction-nav a {
		top: 33.6%;
	}
}

.flex-direction-nav .flex-prev {
	border-radius: 0 50% 50% 0;
	left: -40px;
}

.flex-direction-nav .flex-prev:hover:before {
	right: 40px;
}

.flex-direction-nav .flex-next:hover:before {
	left: 40px;
}

.page_slider .slide2 .intro_before_featured_word {
	font-size: 60px;
}

@media (max-width: 767px) {
	.page_slider .slide2 .intro_before_featured_word {
		font-size: 33px;
		font-weight: 200;
		margin-top: 44px;
	}
}

@media (min-width: 768px) {
	.page_slider .slide2 .intro_before_featured_word {
		font-size: 40px;
		margin-top: 90px;
	}
}

.page_slider .slide2 .intro_featured_word {
	font-weight: 200;
	margin-bottom: 30px;
	margin-top: 19px;
}

@media (max-width: 767px) {
	.page_slider .slide2 .intro_featured_word {
		font-size: 56px;
		margin-bottom: 0;
		margin-top: 7px;
	}
}

@media (min-width: 768px) {
	.page_slider .slide2 .intro_featured_word {
		margin-bottom: 0;
		margin-top: 10px;
	}
}

.page_slider .slide2 .page-bottom {
	margin-top: 41px;
}

@media (max-width: 767px) {
	.page_slider .slide2 .page-bottom {
		margin: 50px 0 60px;
	}
}

.page_slider .slide2 .intro_layers_wrapper {
	height: 100%;
}

.page_slider .slide2 .intro_after_featured_word {
	letter-spacing: 2em;
	margin-left: 27px;
}

@media (max-width: 767px) {
	.page_slider .slide2 .intro_after_featured_word {
		color: #fff;
		font-size: 15px;
		font-weight: 400;
		letter-spacing: 1em;
		margin-top: 20px;
	}
}

@media (min-width: 768px) {
	.page_slider .slide2 .intro_after_featured_word {
		font-size: 15px;
		margin-top: 10px;
	}
}

.page_slider .flexslider .slides li.slide2:before {
	margin-left: -215px;
}

.page_slider .slide3 .intro_featured_word {
	font-size: 100px;
	font-weight: 700;
	margin-bottom: 13px;
}

@media (max-width: 767px) {
	.page_slider .slide3 .intro_featured_word {
		font-size: 40px;
		margin: 0;
	}
}

@media (min-width: 768px) and (max-width: 991px) {
	.page_slider .slide3 .intro_featured_word {
		font-size: 50px;
		line-height: 30px;
	}
}

@media (min-width: 992px) and (max-width: 1600px) {
	.page_slider .slide3 .intro_featured_word {
		font-size: 70px;
		line-height: 40px;
	}
}

.page_slider .slide3 .intro_featured_word.light {
	font-weight: 100;
	letter-spacing: 10px;
}

@media (max-width: 767px) {
	.page_slider .slide3 .intro_featured_word.light {
		letter-spacing: 3px;
		margin-top: 45px;
	}
}

@media (min-width: 768px) {
	.page_slider .slide3 .intro_featured_word.light {
		margin-top: 60px;
	}
}

.page_slider .slide3 .intro_featured_word.bold {
	font-weight: 400;
	letter-spacing: 3px;
}

.page_slider .slide3 .intro_layers_wrapper {
	height: 100%;
	right: 0;
}

.page_slider .slide3 .intro_layer.page-bottom {
	display: inline-block;
	margin-top: 56px;
}

@media (max-width: 767px) {
	.page_slider .slide3 .intro_layer.page-bottom {
		margin-bottom: 60px;
		margin-top: 50px;
	}
}

@media (min-width: 768px) {
	.page_slider .slide3 .intro_layer.page-bottom {
		margin-bottom: 0;
		margin-top: 29px;
	}
}

.page_slider .slide3 .intro_layer.page-bottom.bag {
	position: relative;
	top: 40px;
}

.page_slider .slide3 a.btn.btn-maincolor {
	margin-right: 29px;
}

@media (max-width: 767px) {
	.page_slider .slide3 a.btn.btn-maincolor {
		margin-right: 0;
	}
}

@media (max-width: 767px) {
	.page_slider .slide3 a.btn {
		padding: 26px 30px;
	}

	.page_slider .slide3 a.btn:last-child {
		display: none;
	}
}

.corner-bottom {
	border-radius: 60vw / 5vw;
	border-top-left-radius: 0;
	border-top-right-radius: 0;
	height: 10%;
	margin: 0 -100px;
}

@media (max-width: 991px) {
	.corner-bottom {
		margin: 0 -1px;
	}
}

.page_slider.static .intro_layers {
	z-index: 9;
}

@media (max-width: 767px) {
	.page_slider.static .intro_layers {
		padding: 45px 0 20px;
	}
}

.page_slider.static .intro_layers_wrapper {
	height: 107%;
}

@media (max-width: 767px) {
	.page_slider.static .intro_layers_wrapper {
		height: 100%;
		text-align: center;
	}
}

@media (min-width: 768px) and (max-width: 991px) {
	.page_slider.static .intro_layers_wrapper {
		top: 6%;
	}
}

.page_slider.static .flexslider {
	margin: -90px 0;
}

@media (max-width: 1199px) {
	.page_slider.static .flexslider {
		margin: 0;
	}
}

.page_slider.static .flexslider .flexslider-bottom .mouse-button {
	bottom: 105px;
	z-index: 9;
}

.page_slider.static .intro_featured_word {
	font-size: 80px;
	font-weight: 100;
	line-height: 60px;
	margin-bottom: 0;
}

@media (max-width: 991px) {
	.page_slider.static .intro_featured_word {
		margin-top: 0;
	}
}

.page_slider.static .intro_featured_word.name {
	font-weight: 600;
	letter-spacing: 1px;
}

.page_slider.static .intro_after_featured_word {
	color: #7f7f7f;
	font-size: 14px;
	letter-spacing: 1em;
	margin-bottom: 31px;
}

@media (max-width: 991px) {
	.page_slider.static .intro_after_featured_word {
		margin-bottom: 20px;
		margin-top: 20px;
	}
}

.page_slider.static .ds .page-bottom {
	margin-top: 20px;
}

.page_slider.static .flexslider-bottom:before,
.page_slider.static :after {
	display: none;
}

@media (max-width: 991px) {
	.page_slider.static .ds .page-bottom {
		margin-bottom: 40px;
		margin-top: 20px;
	}
}

.intro_layers {
	z-index: 10;
}

/*
** Subpages
*/
/*
** 404
*/
.error-404 {
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	margin-top: -60px;
}

.error-404 a.btn:hover {
	background-color: transparent;
}

.error-404 .page-header h3 {
	font-family: "Poppins", sans-serif;
	font-size: 100px;
	line-height: 1;
	margin: 0;
}

@media (min-width: 992px) {
	.error-404 .page-header h3 {
		font-size: 238px;
	}
}

.error-404 .page-header p {
	color: #1f2732;
	font-size: 36px;
	font-weight: 500;
	letter-spacing: 0.1em;
}

.error-404 .widget_search {
	margin: 38px 0 31px;
}

.page_404 .page-header {
	align-items: flex-end;
	-webkit-box-align: end;
	-webkit-box-pack: center;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-align: end;
	-ms-flex-pack: center;
	justify-content: center;
	min-height: 490px;
	width: 100%;
}

@media (max-width: 991px) {
	.page_404 .page-header {
		min-height: 400px;
	}
}

/*format-link
** Blog
*/
.blog_slider {
	margin-bottom: 60px;
}

@media (min-width: 992px) {
	.blog_slider .intro_layers_wrapper {
		left: 130px;
		right: 130px;
	}
}

@media (max-width: 767px) {
	.blog_slider {
		display: none;
	}
}

.blog-featured-posts .post {
	height: 100%;
}

.entry-title,
.entry-title:last-child {
	font-size: 36px;
	font-weight: 500;
	line-height: 1.5;
	margin: 0 0 19px;
	text-transform: none;
}

@media (max-width: 767px) {
	.entry-title,
	.entry-title:last-child {
		font-size: 25px;
		line-height: 30px;
	}
}

h4.entry-title {
	font-size: 24px;
	margin-bottom: 0.7em;
}

.item-media + .item-content h1.entry-title {
	margin-top: 5px;
}

.post {
	position: relative;
}

.post > .fa {
	color: #fff;
	position: absolute;
	top: 7px;
	z-index: 2;
}

.post > .fa:before {
	position: relative;
	z-index: 3;
}

.post > .fa:after {
	border-color: transparent transparent #ff497c transparent;
	border-style: solid;
	border-width: 0 40px 40px 40px;
	content: "";
	display: block;
	height: 0;
	left: -35px;
	position: absolute;
	top: -14px;
	width: 0;
	z-index: 2;
}

.post + .post {
	margin-top: 60px;
}

@media (max-width: 1199px) {
	.post + .post {
		margin-top: 30px;
	}
}

.post h3.entry-title + .entry-meta {
	margin-top: -0.65em;
}

.post h1.entry-title + .entry-meta {
	margin: -1em 0 2em;
}

.post.cover-image {
	height: auto;
	padding: 35px 30px 30px;
	text-align: center;
}

@media (min-width: 992px) {
	.post.cover-image {
		padding: 100px 60px;
	}
}

.post.cover-image .post-thumbnail {
	display: none;
}

.post ul,
.post ol {
	margin-bottom: 41px;
	margin-top: 18px;
}

.post .list1 li {
	color: #1f2732;
	font-weight: 400;
	list-style: none;
	padding: 1px 0 4px 5px;
}

.owl-carousel.gallery-blog {
	margin-bottom: 48px;
}

.post-thumbnail {
	text-align: center;
}

.post-thumbnail .owl-dots {
	bottom: 30px;
	left: 0;
	position: absolute;
	right: 0;
}

.post-thumbnail + .entry-content {
	margin-top: 1.5em;
}

.post-password-form input[type="password"] {
	margin-top: 0.5em;
	width: auto;
}

.post-password-form input[type="submit"] {
	position: relative;
	top: -2px;
}

.entry-footer,
.entry-meta {
	clear: both;
	line-height: 1;
	margin-bottom: 8px;
}

.entry-footer a,
.entry-meta a {
	color: #ff497c;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	line-height: 1.6em;
	text-transform: uppercase;
}

.entry-footer a :hover,
.entry-meta a :hover {
	color: #1f2732;
}

.entry-footer {
	margin-bottom: 50px;
	padding: 30px 60px;
}

.entry-footer .fa {
	margin-right: 10px;
}

.entry-footer img {
	border: 3px solid rgba(255, 255, 255, 0.3);
	border-radius: 50%;
	height: 50px;
	width: 50px;
}

.entry-content:before,
.entry-content:after,
.entry-footer:before,
.entry-footer:after,
.entry-header:before,
.entry-header:after {
	clear: both;
	content: "";
	display: block;
}

.cat-links {
	display: block;
	font-size: 0;
	line-height: 1;
	margin-bottom: 12px;
}

.cat-links a {
	background-color: #ff497c;
	border-radius: 1px;
	color: #fff;
	display: inline-block;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.1em;
	line-height: 1;
	margin: 0 4px 4px 0;
	padding: 0.35em 0.5em 0.25em;
	text-transform: uppercase;
}

.cat-links a:nth-child(4n-5) {
	background-color: #a0ce4e;
}

.cat-links a:nth-child(4n-4) {
	background-color: #00bea3;
}

.cat-links a:nth-child(4n-3) {
	background-color: #f1894c;
}

.cat-links a:hover {
	background-color: #323232;
}

.entry-footer .edit-link,
.entry-header .edit-link {
	float: right;
}

.entry-footer .edit-link a:before,
.entry-header .edit-link a:before {
	content: "\f040";
	font-family: "FontAwesome";
	padding-right: 0.4em;
}

.entry-footer .entry-title + .edit-link,
.entry-header .entry-title + .edit-link {
	position: absolute;
	right: 15px;
	top: 0.5em;
}

.post-adds {
	align-items: center;
	background-color: #f5f5f5;
	-webkit-box-align: center;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-align: center;
	line-height: 1;
	margin-bottom: 30px;
}

.post-adds i {
	width: 1em;
}

.post-adds a {
	display: inline-block;
	margin: 0;
}

.post-adds .dropdown-menu {
	border: none;
	padding: 0;
}

.post-adds .share_buttons {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
}

.post-adds .share_button {
	background-color: #ff497c;
	color: #fff;
	line-height: 60px;
	padding: 0 21px;
}

.post-adds .like_button {
	border-right: 1px solid rgba(0, 0, 0, 0.1);
	color: #ff497c;
	line-height: 60px;
	padding: 0 21px;
}

.post-adds .votes_count {
	padding: 0 21px;
}

.post-adds .views-count {
	background-color: #ff497c;
	color: #fff;
	margin-left: auto;
	padding: 22px 30px;
}

@media (max-width: 576px) {
	.post-adds {
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
	}

	.post-adds .share_button {
		line-height: 40px;
		padding: 0 11px;
	}

	.post-adds .like_button {
		line-height: 40px;
		padding: 0 11px;
	}

	.post-adds .views-count {
		padding: 10px 15px;
		width: 100%;
	}
}

/*gallery post*/
.post .gallery {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;
	margin: 0 -7px;
}

.post .gallery .gallery-item {
	padding: 0 7px;
	width: 50%;
}

.post .gallery .gallery-item figcaption {
	padding: 20px 0 5px;
}

@media (min-width: 992px) {
	.post .gallery.gallery-columns-1 .gallery-item {
		width: 100%;
	}

	.post .gallery.gallery-columns-2 .gallery-item {
		width: 50%;
	}

	.post .gallery.gallery-columns-3 .gallery-item {
		width: 33.33%;
	}

	.post .gallery.gallery-columns-4 .gallery-item {
		width: 25%;
	}

	.post .gallery.gallery-columns-5 .gallery-item {
		width: 20%;
	}

	.post .gallery.gallery-columns-6 .gallery-item {
		width: 16.66%;
	}

	.post .gallery.gallery-columns-7 .gallery-item {
		width: 14.28%;
	}

	.post .gallery.gallery-columns-8 .gallery-item {
		width: 12.5%;
	}

	.post .gallery.gallery-columns-9 .gallery-item {
		width: 11.11%;
	}
}

/*post author*/
.author-bio {
	margin-top: 60px;
}

.author-bio .item-content {
	padding: 27px 48px 22px 60px;
}

@media (max-width: 767px) {
	.author-bio .item-content {
		padding: 27px 0 22px;
	}
}

.author-bio a.fa {
	margin-bottom: 0;
}

/*comments*/
h4.comments-title {
	padding: 60px 60px 4px;
}

@media (max-width: 767px) {
	h4.comments-title {
		margin: 0;
		padding-top: 20px;
	}
}

.comments-area {
	margin-top: 90px;
}

.comments-area .comment-list {
	list-style: none;
	padding: 10px 27px 10px 75px;
}

.comments-area .comment-list ol.children {
	list-style: none;
	padding-left: 35px;
}

.comments-area .comment-list ol.children img {
	left: -54px;
	max-width: 70px;
}

@media (max-width: 575px) {
	.comments-area .comment-list ol.children img {
		left: -23px;
		max-width: 50px;
		top: 9px;
	}
}

@media (min-width: 1200px) {
	.comments-area .comment-list ol.children {
		padding-left: 90px;
	}
}

.comments-area .comment-list ol.children ol.children ol.children {
	padding-left: 35px;
}

.comment-body {
	margin-bottom: 10px;
	margin-left: 70px;
	padding: 25px 24px 20px;
	position: relative;
}

.comment-body ol,
.comment-body ol ol {
	padding-left: 20px;
}

.comment-meta {
	margin-bottom: 0;
}

.comment-meta img {
	border: 5px solid #dedfe1;
	border-radius: 50%;
	left: -73px;
	max-width: 90px;
	position: absolute;
	top: -1px;
}

.comment-meta .comment-author {
	font-size: 16px;
	font-weight: 600;
}

@media (max-width: 575px) {
	.comment-meta .comment-author {
		font-size: 14px;
	}
}

.comment-meta .comment-metadata {
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	line-height: 1.6em;
	margin-top: -24px;
	text-transform: uppercase;
}

.comment-meta b {
	font-weight: inherit;
}

@media (max-width: 575px) {
	.comment-body {
		margin-left: 30px;
	}

	.comment-meta img {
		border: 3px solid #dedfe1;
		left: -30px;
		max-width: 60px;
	}
}

.reply {
	margin-top: 0;
}

.reply a {
	color: #ff497c;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	line-height: 1.6em;
	text-transform: uppercase;
}

.reply a:hover {
	color: #323232;
}

.comment-content p {
	margin-bottom: 0.5em;
}

.no-comments,
.comment-awaiting-moderation {
	opacity: 0.7;
}

.comments-pagination {
	margin: 2em 0 3em;
}

/*comment respond form*/
.comments-area > .comment-respond {
	margin-top: -5px;
	padding: 0 60px 47px;
}

.comment-respond .form-submit {
	margin: 8px 20px 0 0;
}

.comment-respond .form-group {
	margin-top: 8px;
}

.comment-form {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;
}

.comment-form p {
	margin-bottom: 23px;
	width: 100%;
}

.comment-form p.form-submit {
	margin-bottom: 0;
	margin-top: 10px;
}

.comment-form label {
	display: block;
}

.comment-form textarea,
.comment-form input {
	width: 100%;
}

.comment-form textarea {
	height: 180px;
}

.comment-form input[type=checkbox] {
	margin: 0;
	visibility: hidden;
}

@media (min-width: 992px) {
	.comment-form .comment-form-author,
	.comment-form .comment-form-email {
		width: 100%;
	}

	.comment-form .comment-form-author {
		padding-right: 0;
	}
}

.comment-form label {
	margin-bottom: 6px;
}

/* post formats */
.format-status .avatar {
	border: 5px solid #dedfe1;
	border-radius: 50%;
	display: block;
	margin: 0 auto 35px;
	max-width: 100px;
}

.format-status .entry-title {
	margin-bottom: 35px;
}

.format-status .cat-links {
	margin-bottom: 5px;
}

.format-status.post .entry-title + .entry-meta {
	margin: 0 0 25px;
}

.format-status .entry-date {
	margin-top: -7px;
}

.format-chat .entry-content p {
	margin-bottom: 0.5em;
}

.format-chat .entry-content p:last-child {
	margin-bottom: 3px;
}

.format-chat .entry-content p strong {
	color: #1f2732;
}

.format-chat .entry-content p:nth-child(2n) strong {
	color: #ff497c;
}

.format-quote {
	text-align: center;
}

.format-quote.cover-image .entry-header > i {
	display: inline-block;
	font-size: 2em;
	margin-bottom: 0.7em;
}

.format-quote blockquote {
	border: none;
	font-style: italic;
	margin-bottom: 0;
	padding-bottom: 0;
	padding-left: 0;
}

.format-quote blockquote cite {
	display: block;
	font-size: 16px;
	font-size: 12px;
	font-style: normal;
	font-weight: 700;
	letter-spacing: 0.2em;
	line-height: 1.5;
	line-height: 1.6em;
	margin: 24px 0 0;
	text-transform: uppercase;
}

.blog-post {
	padding: 50px 60px 60px;
}

@media (max-width: 767px) {
	.blog-post {
		padding: 30px 20px;
	}
}

.blog-post blockquote.post-block {
	margin: 0;
	padding: 35px 0 55px;
}

.blog-post .list1 {
	margin-bottom: 33px;
}

.blog-post.comments-area {
	margin-top: 20px;
	padding: 0;
}

.blog-post.comments-area .comment-list ol.children img {
	left: -66px;
	max-width: 90px;
}

.blog-post.comments-area .comment {
	padding: 30px 0 2px 13px;
}

.blog-post.comments-area .comment-body {
	margin-bottom: 0;
	padding: 20px 0 19px 29px;
}

.blog-post.comments-area .comment-body .comment-meta img {
	left: -80px;
}

@media (max-width: 575px) {
	.blog-post.comments-area .comment-body .comment-meta img {
		left: -45px;
	}
}

.blog-post.comments-area .comment-list ol.children {
	margin-top: -28px;
	padding-left: 90px;
}

@media (max-width: 767px) {
	.blog-post.comments-area .comment-list ol.children {
		padding-left: 0;
	}
}

.blog-post.comments-area .link-a {
	margin-bottom: 10px;
	margin-top: -10px;
}

.blog-post.comments-area .comment-list {
	padding: 10px 0 10px;
}

.blog-post.comments-area .comment-list ol.children img {
	left: -75px;
	max-width: 90px;
	top: 5px;
}

@media (max-width: 767px) {
	.blog-post.comments-area .comment-list ol.children img {
		left: -30px;
		max-width: 50px;
	}
}

.blog-post.comments-area .comment-respond {
	margin-top: 50px;
	padding: 50px 60px 60px;
}

@media (max-width: 767px) {
	.blog-post.comments-area .comment-respond {
		margin-top: 20px;
		padding: 20px 20px 60px;
	}
}

.blog-post.comments-area .comment-respond .form-control::-webkit-input-placeholder {
	text-align: left;
}

.blog-post.comments-area .comment-respond .comment-form textarea {
	height: 120px;
	margin-bottom: 10px;
}

.blog-post.comments-area .comment-respond h5 {
	margin-bottom: 35px;
}

@media (max-width: 767px) {
	.blog-post.comments-area .comment-respond h5 {
		margin-bottom: 15px;
	}
}

.post1 .entry-meta.icons a {
	color: #1f2732;
	margin-right: 30px;
}

.post1 .blog-post1 .post-nav {
	margin: 70px 0 0;
	position: relative;
}

@media (max-width: 767px) {
	.post1 .blog-post1 .post-nav {
		margin: 0;
	}
}

.post1 .blog-post1 .owl-carousel.gallery-blog {
	margin-bottom: 50px;
}

.post1 .blog-post1 .entry-title {
	font-size: 20px;
	margin: 0 0 24px;
}

.post1 .blog-post1 blockquote {
	border: none;
	font-style: normal;
	margin: 50px 0;
	padding: 55px 60px 65px;
}

@media (max-width: 767px) {
	.post1 .blog-post1 blockquote {
		margin: 0;
		padding: 55px 20px 65px;
	}
}

.post1 .blog-post1 blockquote .small-text {
	margin-bottom: 6px;
}

.post1 .blog-post1 blockquote h6 {
	margin-bottom: 18px;
}

.post1 .blog-post1 .tags {
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	padding: 29px 0 49px;
	text-transform: uppercase;
}

.post1 .blog-post1 .tags span {
	color: #1f2732;
}

.post1 .blog-post1 .tags a {
	color: #ff497c;
}

.post1 .blog-post1 .tags a:hover {
	color: #1f2732;
}

.post1 .blog-post1 .like {
	float: right;
}

@media (max-width: 767px) {
	.post1 .blog-post1 .like {
		float: left;
	}
}

.post1 .blog-post1 .like a {
	color: #1f2732;
}

.post1 .blog-post1 .like a:hover {
	color: #ff497c;
}

.post1 .blog-post1 .author-bio {
	margin-bottom: 60px;
}

@media (max-width: 767px) {
	.post1 .blog-post1 .author-bio {
		margin: 60px 0 0;
	}
}

.post1 .blog-post1 .author-bio .covage {
	background: #e8e9ea;
	border: 9px solid #e8e9ea;
	border-radius: 50%;
}

.post1 .blog-post1 .author-bio a.fa {
	margin-right: 13px;
}

.post1 .blog-post1 .nav-links .ds {
	background-color: #1f2732;
}

.post1 .blog-post1 .nav-links .next {
	margin-left: 1px;
}

@media (max-width: 767px) {
	.post1 .blog-post1 .nav-links .next {
		margin-left: 0;
	}
}

.post1 .blog-post1 .nav-links .post-nav-text-wrap {
	padding: 8px 14px 20px;
}

@media (max-width: 767px) {
	.post1 .blog-post1 .nav-links .post-nav-text-wrap {
		padding: 0;
		text-align: center;
	}
}

.post1 .blog-post1 .nav-links p {
	color: #fff;
	font-weight: 600;
	line-height: 21px;
	margin-top: 5px;
}

.post1 .blog-post1 .post-nav .nav-links .nav-subtitle {
	padding: 0;
}

.post1 .blog-post1 .post-nav .nav-links > div {
	padding: 28px 50px 36px;
	width: 49.9%;
}

@media (max-width: 767px) {
	.post1 .blog-post1 .post-nav .nav-links > div {
		width: 100%;
	}
}

@media (min-width: 992px) and (max-width: 1199px) {
	.post1 .blog-post1 .post-nav .nav-links > div {
		padding: 28px 20px;
	}
}

.post1 .blog-post1 .post-nav .nav-links > div .prev-post:before {
	content: "\f053";
	font-family: "FontAwesome";
	font-size: 7px;
	padding-right: 7px;
	position: relative;
	top: -1px;
}

.post1 .blog-post1 .post-nav .nav-links > div .next-post:after {
	content: "\f054";
	font-family: "FontAwesome";
	font-size: 7px;
	padding-left: 7px;
	position: relative;
	top: -1px;
}

.post1 .blog-post1 .owl-theme .owl-nav {
	top: 40%;
}

.post1 .blog-post1 .owl-theme .owl-nav > div {
	background-color: #fff;
	height: 60px;
	width: 70px;
}

.post1 .blog-post1 .owl-theme .owl-nav > div:hover {
	background-color: #ff497c;
}

.post1 .blog-post1 .owl-theme .owl-nav > div:hover i {
	color: #fff;
}

.post1 .blog-post1 .owl-theme .owl-nav > div i {
	color: #ff497c;
}

.post1 .comments-area.comment1 {
	margin-top: 0;
}

.post1 h4.comments-title {
	padding: 62px 3px 4px;
}

@media (max-width: 767px) {
	.post1 h4.comments-title {
		padding: 30px 0 0;
	}
}

.related-posts .item-content p {
	color: #1f2732;
	font-weight: 600;
	line-height: 25px;
	margin: 15px 0 0;
}

.related-posts .vertical-item .item-media + .item-content {
	padding-top: 0;
}

.related-posts .item-meta {
	margin: 8px 0 10px;
}

.related-posts .item-meta a {
	font-weight: 700;
	letter-spacing: 0.2em;
}

.related-posts h4 {
	margin: 78px 0 37px;
}

@media (max-width: 767px) {
	.related-posts h4 {
		margin: 39px 0 21px;
	}
}

.comments-area.comment1 {
	margin-top: 64px;
}

@media (max-width: 767px) {
	.comments-area.comment1 {
		margin-top: 0;
	}
}

.comments-area.comment1 .comment-list {
	padding: 0;
}

.comments-area.comment1 .comment-list li {
	padding: 30px 0 0;
}

.comments-area.comment1 ol.children {
	margin: -30px 0 0 0;
	padding: 0;
}

.comments-area.comment1 .comment-body {
	padding: 19px 0px 11px 38px;
}

.comments-area.comment1 b span.dot {
	color: #1f2732;
	font-size: 20px;
	margin: 0 8px;
	position: absolute;
	top: 8%;
}

@media (max-width: 575px) {
	.comments-area.comment1 b span.dot {
		display: none;
	}
}

.comments-area.comment1 b span.data {
	color: #ff497c;
	font-weight: 300;
	margin-left: 24px;
}

@media (max-width: 575px) {
	.comments-area.comment1 b span.data {
		margin-left: 0;
	}
}

.comments-area.comment1 b span.data:hover {
	color: #1f2732;
}

.comments-area.comment1 .comments-area > .comment-respond {
	margin-top: -5px;
	padding: 0;
}

.comments-area.comment1 .form-control::-webkit-input-placeholder {
	text-align: left;
}

.comments-area.comment1 .comment-form textarea {
	height: 120px;
	margin-bottom: 5px;
}

.comments-area.comment1 h4 {
	margin-bottom: 36px;
}

@media (max-width: 767px) {
	.comments-area.comment1 h4 {
		margin-bottom: 25px;
	}
}

.entry-meta.icons {
	padding: 30px 0 23px;
}

.entry-meta.icons a {
	color: #1f2732;
	margin-right: 21px;
}

.entry-meta.icons a:hover {
	color: #ff497c;
}

.post-icons {
	background-color: #1f2732c4;
	display: block;
	margin-bottom: 0;
	margin-top: -60px;
	padding: 20px 0;
	position: relative;
	z-index: 1;
}

.post-icons a {
	color: #fff;
	text-align: left;
}

.post-icons a:hover {
	color: #ff497c;
}

.post-icons i {
	margin-left: 23px;
}

@media (max-width: 767px) {
	.post-icons i {
		margin: 0;
	}
}

.post-icons .first {
	padding-left: 37px;
}

.post-icons .social {
	margin-right: 60px;
}

@media (max-width: 767px) {
	.post-icons .social {
		margin-right: 25px;
	}
}

@media (max-width: 991px) {
	.post3 .tags-button {
		margin: 30px 0 5px;
	}
}

.post3 .gallery-blog.gallery-owl-nav .owl-nav > div {
	height: 60px;
	width: 70px;
}

.post3 .owl-carousel.gallery-blog {
	margin-bottom: 52px;
	margin-top: 79px;
}

@media (max-width: 767px) {
	.post3 .owl-carousel.gallery-blog {
		margin-bottom: 10px;
		margin-top: 50px;
	}
}

.post3 .comments-area.comment1 {
	margin-top: 0;
}

.post3 .comments-area.comment1 .comment-author {
	font-weight: 500;
}

.post3 h4.comments-title {
	margin: 0 0 37px -17px;
	padding: 24px 60px 4px;
}

@media (max-width: 767px) {
	.post3 h4.comments-title {
		margin: 0 0 15px -17px;
	}
}

.post3 .entry-title {
	font-size: 20px;
	margin: 0 0 13px;
}

.post3 .gallery-blog.owl-theme .owl-nav {
	top: 35%;
}

.post3 .content-title {
	font-size: 20px;
	font-weight: 500;
	margin: 38px 0 13px;
}

@media (max-width: 767px) {
	.post3 .content-title {
		margin: 19px 0 3px;
	}
}

.post3 .tags {
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	margin-bottom: 43px;
	text-transform: uppercase;
}

@media (max-width: 767px) {
	.post3 .tags {
		line-height: 20px;
		margin-bottom: 10px;
	}
}

.post3 .tags span {
	color: #1f2732;
}

.post3 .tags a {
	color: #ff497c;
}

.post3 .tags a:hover {
	color: #1f2732;
}

.post3 blockquote {
	background-color: #fff;
	border: none;
	margin: 50px 0;
	padding: 50px;
}

@media (max-width: 767px) {
	.post3 blockquote {
		margin: 20px 0;
		padding: 50px 20px;
	}
}

.post3 blockquote h6 {
	font-style: normal;
	margin-top: 17px;
}

.post3 .vertical-item.content-absolute .item-content {
	top: 53px;
}

.post-adds.layout-2 {
	background-color: #fff;
	margin-bottom: 0;
}

.post-adds.layout-2 .votes_count {
	padding: 0 41px;
}

@media (min-width: 577px) and (max-width: 1600px) {
	.post-adds.layout-2 .votes_count {
		padding: 0 15px;
	}
}

.post-adds.layout-2 .votes_count .margin {
	margin-left: 30px;
	margin-top: 0;
}

.post-adds.layout-2 .views-count {
	background-color: #1f2732;
	padding: 21px 30px 20px;
}

@media (max-width: 576px) {
	.post-adds.layout-2 .views-count {
		padding: 10px 15px;
	}
}

.post-adds.layout-2 .dropdown-menu .share_buttons {
	height: 280px;
	left: auto;
	margin-top: 0;
	min-width: 40px;
	overflow: visible;
	position: fixed;
	right: 120px;
	top: 50%;
	width: 40px;
}

.post-adds.layout-2 .dropdown-menu .share_buttons a {
	display: block;
	height: 40px;
	margin: 0 !important;
	width: 40px;
}

@media (max-width: 1199px) {
	.post-nav.post-3 {
		margin: 0 0 50px;
	}
}

.post-nav.post-3 .nav-links .nav-title {
	color: #323232;
	display: block;
	font-size: 16px;
	font-weight: 500;
	line-height: 20px;
	margin-top: 8px;
	padding: 0 40px;
}

.post-nav.post-3 .nav-links > div {
	width: 50%;
}

@media (max-width: 575px) {
	.post-nav.post-3 .nav-links > div {
		width: 100%;
	}
}

.post-nav.post-3 .nav-links > div .fa {
	font-size: 30px;
}

.post-nav.post-3 .nav-subtitle {
	padding: 25px 41px 0.05em;
}

.author-bio.post3 {
	margin-top: 30px;
}

.author-bio.post3 .item-media {
	overflow: visible;
}

.author-bio.post3 .item-media img {
	border: 5px solid #dedfe1;
	border-radius: 50%;
	left: 0%;
	margin-bottom: 12px;
	margin-top: -70px;
	max-width: 90px;
	min-width: 90px;
	position: relative;
}

.author-bio.post3 .author-social {
	margin-bottom: 20px;
	margin-top: 5px;
}

.author-bio.post3 .item-content {
	padding: 27px 48px 60px 60px;
}

@media (max-width: 767px) {
	.author-bio.post3 .item-content {
		padding: 27px 24px 40px;
	}
}

.author-bio.post3 .item-content h6 {
	margin-bottom: 3px;
}

.comments-area.comment1.post3 h4.comment-reply-title {
	margin-bottom: 20px;
}

.comments-area.comment1.post3 .comment-body {
	margin-bottom: 27px;
	margin-left: 0;
	padding: 0 23px 30px;
	position: relative;
}

.comments-area.comment1.post3 .link-a {
	margin: -10px 0 0 0;
}

.comments-area.comment1.post3 .reply a {
	color: #1f2732;
}

.comments-area.comment1.post3 .reply a:hover {
	color: #ff497c;
}

.comments-area.comment1.post3 .comment-content p {
	margin-bottom: -3px;
}

.comments-area.comment1.post3 li.comment.ls.white {
	padding: 7px 0 0;
}

.comments-area.comment1.post3 li.comment.ls.white .comment-body {
	margin-bottom: 0;
}

.comment-respond.post3 {
	margin-top: 79px;
}

@media (max-width: 767px) {
	.comment-respond.post3 {
		margin-top: 30px;
	}
}

.comment-respond.post3 .form-control::-webkit-input-placeholder {
	text-align: center;
}

.comment-respond.post3 .comment-form p {
	margin: 0 0 20px;
	width: 100%;
}

.comment-respond.post3 .comment-form p.form-submit input {
	width: 31%;
}

@media (max-width: 767px) {
	.comment-respond.post3 .comment-form p.form-submit input {
		margin-bottom: -20px;
		margin-top: -10px;
		width: 74%;
	}
}

@media (min-width: 991px) and (max-width: 1600px) {
	.comment-respond.post3 .comment-form p.form-submit input {
		width: 50%;
	}
}

.comment-respond.post3 .comment-form p.form-submit input[type="submit"] {
	margin-top: 8px;
	padding: 26px 0px;
}

@media (max-width: 767px) {
	.comment-respond.post3 .comment-form p.form-submit input[type="submit"] {
		margin-top: 0;
	}
}

.comment-respond.post3 p.comment-notes {
	margin: 3px 0 28px;
}

@media (max-width: 767px) {
	.comment-respond.post3 p.comment-notes {
		margin: -12px 0 9px;
	}
}

.comment-respond.post3 .comment-form textarea {
	height: 180px;
	margin-bottom: 10px;
}

.post4 .meta {
	padding: 10px;
}

.post4 .meta .ent-meta {
	margin-right: -15px;
}

.post4 .meta .ent-meta i {
	margin: 0 3px 0 9px;
}

.post4 .meta .autor {
	margin-right: 5px;
}

.post4 .tags-button {
	margin-bottom: 70px;
}

@media (max-width: 991px) {
	.post4 .tags-button {
		margin-bottom: 40px;
	}
}

.post4 .tags-button a {
	background-color: #f5f5f5;
}

.post4 .entry-content {
	padding: 50px 57px;
}

@media (max-width: 767px) {
	.post4 .entry-content {
		padding: 20px 0;
	}
}

.post4 .entry-content blockquote {
	border: none;
	margin: 43px -60px;
	padding: 0;
}

@media (max-width: 991px) {
	.post4 .entry-content blockquote {
		margin: 40px 0px;
	}
}

.post4 .navigation a {
	border: 4px solid #ff497c;
	border-radius: 50px;
	font-size: 12px;
	font-weight: 800;
	letter-spacing: 0.2em;
	padding: 20px;
	text-transform: uppercase;
}

.post4 .navigation a:hover {
	background-color: #ff497c;
	color: #fff;
}

.post4 .post-nav .nav-links > div {
	padding: 40px;
	width: 48.4%;
}

@media (max-width: 767px) {
	.post4 .post-nav .nav-links > div {
		width: 100%;
	}
}

.post4 .next {
	margin-left: 10px;
}

@media (max-width: 767px) {
	.post4 .next {
		margin: 10px 0 0 0;
	}
}

.post4 .post-nav {
	margin: 0;
}

.post4 .related-posts .post-carousel .item-content {
	padding: 30px 30px 27px;
}

.post4 .related-posts .post-carousel .item-content p {
	margin: 0 0 5px;
}

.post4 .related-posts .post-carousel .item-content .item-meta a {
	color: #ff497c;
}

.post4 .related-posts .post-carousel .item-content .item-meta a:hover {
	color: #fff;
}

.post4 .related-posts .owl-theme .owl-dots {
	margin-top: 34px;
}

.post4 .related-posts .owl-theme .owl-dots span {
	height: 5px;
	margin: 9px 12px;
	width: 5px;
}

.post4 .comments-area.comment1.post3.post4 {
	margin-top: 0;
}

.post4 .comments-area.comment1.post3.post4 .comment-body {
	margin-bottom: 0;
	padding: 0 50px 0px;
}

@media (max-width: 767px) {
	.post4 .comments-area.comment1.post3.post4 .comment-body {
		padding: 0;
	}
}

.post4 .comments-area.comment1.post3.post4 .comment-list li {
	padding: 23px 0 0;
}

.post4 .comments-area.comment1.post3.post4 .comment-form p.form-submit {
	margin-top: 9px;
}

.post4 .comments-area.comment1.post3.post4 .comment-form p.form-submit input {
	width: 27%;
}

@media (max-width: 767px) {
	.post4 .comments-area.comment1.post3.post4 .comment-form p.form-submit input {
		width: 74%;
	}
}

@media (min-width: 768px) and (max-width: 991px) {
	.post4 .comments-area.comment1.post3.post4 .comment-form p.form-submit input {
		width: 33%;
	}
}

.post4 .comments-area.comment1.post3.post4 .comment-form p.form-submit input[type="submit"] {
	padding: 26px 0px;
}

.post4 h4.comments-title {
	margin: 46px 0 4px;
}

@media (max-width: 1600px) {
	.post4 h4.comments-title {
		margin: 4px 0 -16px;
	}
}

.post4 .comment-respond.post3 {
	margin-top: 110px;
	padding: 58px 60px 40px;
}

@media (max-width: 1600px) {
	.post4 .comment-respond.post3 {
		margin-top: 30px;
		padding: 30px 10px;
	}
}

.post4 .comment-respond.post3 h4 {
	color: #fff;
	margin-bottom: 17px;
}

.post4 .owl-carousel .owl-dots .owl-dot span {
	background-color: #1f2732;
	border: 1px solid #1f2732;
}

.post4 .owl-carousel .owl-dots .owl-dot.active span,
.post4 .owl-carousel .owl-dots .owl-dot:hover span {
	background-color: var(--theme-color);;
	border-color: var(--theme-color);;
}

.post4 .related-posts h4 {
	margin: 118px 0 37px;
}

@media (max-width: 767px) {
	.post4 .related-posts h4 {
		margin: 40px 0 0 0;
	}
}

@media (min-width: 768px) and (max-width: 991px) {
	.post4 .related-posts h4 {
		margin: 70px 0 30px 0;
	}
}

.post5 {
	/* blog post entry meta */
}

.post5 .images-item {
	margin: 50px 0;
}

@media (max-width: 991px) {
	.post5 .images-item {
		margin: 30px 0;
	}
}

.post5 .comment-form p {
	margin-bottom: 24px;
	width: 100%;
}

@media (max-width: 767px) {
	.post5 .comments-area > .comment-respond {
		margin-top: -30px;
		padding: 0 10px 47px;
	}
}

.post5 .comment-meta img {
	left: -85px;
	top: 7px;
}

@media (max-width: 575px) {
	.post5 .comment-meta img {
		left: -47px;
	}
}

.post5 .comment-content {
	margin-top: 6px;
}

@media (max-width: 767px) {
	.post5 .comments-area .comment-list {
		padding: 10px 0px 10px 20px;
	}
}

.post5 .comments-area .comment-list ol.children img {
	left: -65px;
}

@media (max-width: 767px) {
	.post5 .comments-area .comment-list ol.children img {
		left: -47px;
	}
}

.post5 .comments-area .comment-list .reply.chl {
	margin-top: -9px;
}

.post5 .comment-body {
	margin-bottom: 0;
}

.post5 .media-item img {
	max-height: 185px;
	max-width: 277px;
}

@media (max-width: 1199px) {
	.post5 .media-item img {
		max-width: 100%;
	}
}

.post5 .entry-blog-share {
	float: right;
}

.post5 .entry-blog-share i {
	margin-top: 18px;
}

@media (max-width: 1199px) {
	.post5 .entry-blog-share {
		float: unset;
	}

	.post5 .entry-blog-share i {
		margin: 0;
	}
}

.post5 .entry-meta {
	line-height: 1;
	position: relative;
	text-align: left;
}

.post5 .entry-meta > * {
	color: #fff;
	display: inline-block;
	font-size: 12px;
	font-weight: 600;
	letter-spacing: 0.2em;
	line-height: 1.6;
	margin-right: 28px;
	margin-top: 0;
	text-transform: uppercase;
}

.post5 .entry-meta a :hover {
	color: #ff497c;
}

@media (max-width: 479px) {
	.post5 .entry-meta > * {
		margin-right: 7px;
	}
}

.post5 .entry-meta.with_padding {
	padding: 10px;
}

@media (max-width: 991px) {
	.post5 .entry-meta.with_padding {
		margin-bottom: 50px;
	}
}

@media (min-width: 768px) {
	.post5 .entry-meta.with_padding {
		padding: 15px 25px 15px 44px;
	}
}

.post5 .entry-meta .entry-avatar {
	margin-right: 10px;
}

.post5 .entry-meta .entry-avatar img {
	border: 3px solid rgba(255, 255, 255, 0.3);
	border-radius: 50%;
	height: 50px;
	width: 50px;
}

.post5 .entry-meta .blog-adds > * {
	color: #fff;
	margin-right: 33px;
}

.post5 .entry-meta .blog-adds > *:last-child {
	margin-right: 7px;
}

@media (max-width: 479px) {
	.post5 .entry-meta .blog-adds > * {
		margin-right: 7px;
	}
}

.post5 .entry-meta .tags i {
	margin-right: 9px;
}

.post5 .entry-meta .tags a {
	color: #ff497c;
}

.post5 .entry-meta .tags a:hover {
	color: #fff;
}

.post5 .nav-links {
	font-weight: 700;
	letter-spacing: 0.2em;
	margin-top: 30px;
	text-transform: uppercase;
}

.post5 .nav-links .fa {
	font-size: 10px;
}

.post5 .next-link {
	margin-top: -30px;
}

.post5 .post-blog5 {
	margin-top: 70px;
}

@media (max-width: 991px) {
	.post5 .post-blog5 {
		margin-top: 10px;
	}
}

.post5 .post-blog5 .post-blog img {
	min-height: 308px;
}

.post5 .comments-area {
	margin-top: 47px;
}

@media (max-width: 767px) {
	.post5 .comments-area {
		margin-top: 20px;
	}
}

.post5 .list-block {
	margin-top: 30px;
}

.post5 .post ol {
	margin-bottom: -10px;
}

.vertical-item.blog-padding .item-content {
	padding: 46px 50px 50px 54px;
}

@media (max-width: 767px) {
	.vertical-item.blog-padding .item-content {
		padding: 30px 20px;
	}
}

.blog1 .entry-meta.icons a {
	color: #1f2732;
	margin-right: 3px;
}

.blog1 .entry-meta.icons a:hover {
	color: #ff497c;
}

.blog1 .data-thumbnail {
	background-color: #ff497c;
	left: 20px;
	position: absolute;
	top: 20px;
	z-index: 1;
}

.blog1 .data-thumbnail h4 {
	margin: 12px 0;
	padding: 0 7px;
}

.blog1 .data-thumbnail p {
	background-color: #1f2732;
	color: #fff;
	font-size: 12px;
	font-weight: 700;
	padding: 0 7px;
	text-transform: uppercase;
}

.blog1 .vertical-item .item-media + .item-content {
	padding-bottom: 10px;
	padding-top: 26px;
}

@media (max-width: 991px) {
	.blog1 .vertical-item .item-media + .item-content {
		padding-top: 15px;
	}
}

.blog1 .vertical-item .item-media + .item-content .entry-title {
	margin: 0 0 11px;
}

.blog1 .vertical-item .item-media + .item-content .entry-meta.icons {
	padding: 0 0 16px;
}

.blog1 .vertical-item .item-media + .item-content .tags-button {
	margin-top: 40px;
}

@media (max-width: 1199px) {
	.blog1 .vertical-item .item-media + .item-content .tags-button {
		margin-top: 20px;
	}
}

.blog1 .vertical-item .item-media + .item-content .tags-button a {
	background-color: #f5f5f4;
}

.blog1 .vertical-item .item-media + .item-content .tags-button a:hover {
	background-color: #ff497c;
	color: #fff;
}

.blog1 .vertical-item .item-media + .item-content .tags-button a:first-child {
	margin-left: 0;
}

.blog1 .vertical-item .item-media + .item-content .link a i:hover {
	color: #ff497c;
}

.blog1 .widget_slider .vertical-item .item-media + .item-content {
	padding: 26px 26px;
}

.blog1 .post + .post.format-link {
	margin-top: 44px;
}

@media (max-width: 991px) {
	.blog1 .post + .post.format-link {
		margin-top: 30px;
	}
}

.blog1 .post + .post.format-link .entry-meta.icons {
	padding: 0 0 21px;
}

.blog1 .post + .post.format-link .entry-title,
.blog1 .post + .post.format-link .entry-title:last-child {
	margin: 0 0 9px;
}

.blog1 .post + .post.format-chat {
	margin-top: 48px;
}

@media (max-width: 991px) {
	.blog1 .post + .post.format-chat {
		margin-top: 30px;
	}
}

.blog1 .post + .post.format-aside {
	margin-top: 53px;
}

@media (max-width: 991px) {
	.blog1 .post + .post.format-aside {
		margin-top: 30px;
	}
}

.blog1 .post + .post.format-aside .entry-meta.icons {
	padding: 0 0 20px;
}

.blog1 .post + .post.format-aside .entry-title,
.blog1 .post + .post.format-aside .entry-title:last-child {
	margin: 0 0 9px;
}

@media (max-width: 991px) {
	.blog2 .c-gutter-60 [class*="col-"],
	.blog2 .row.c-gutter-60 > [class*="col-"] {
		padding-left: 10px;
		padding-right: 10px;
	}
}

.blog2 .post-thumb a img {
	max-height: 600px;
	width: 1170px;
}

.blog2 .icons {
	margin-top: 9px;
}

.blog2 .entry-content {
	margin-left: 27px;
}

@media (max-width: 767px) {
	.blog2 .entry-content {
		margin-left: 0;
		margin-top: 30px;
	}
}

.blog2 .entry-content .link {
	margin-top: 10px;
}

.blog2 .embed-responsive-3by2 {
	padding-bottom: 50.666%;
}

.blog2 .entry-title,
.blog2 .entry-title:last-child {
	margin: 0 0 14px;
}

.blog2 .pb {
	padding-bottom: 13px;
}

.blog2 .format-status {
	padding: 207px 60px 220px;
}

@media (max-width: 767px) {
	.blog2 .format-status {
		padding: 70px 20px;
	}
}

.blog2 .format-status .status-icons {
	margin-top: 25px;
}

.blog2 .format-status .status-icons i {
	margin-left: 30px;
}

.blog2 .post.cover-image.format-quote .format-image img {
	background: rgba(255, 255, 255, 0.1);
	border-radius: 50%;
	box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
	max-width: 150px;
	padding: 9px;
}

.blog2 .format-quote {
	padding: 110px 190px;
}

@media (max-width: 767px) {
	.blog2 .format-quote {
		padding: 35px 30px 30px;
	}
}

.blog2 .format-quote .link-a {
	margin-top: 25px;
}

.blog2 .format-quote .link-a a {
	color: #ff497c;
	letter-spacing: 0.1em;
}

.blog2 .format-quote .link-a a:hover {
	color: #fff;
}

.blog2 .format-quote .entry-content {
	font-style: italic;
	margin-bottom: 25px;
}

@media (max-width: 767px) {
	.blog2 .vertical-item.blog-padding .item-content {
		padding: 30px 50px;
	}
}

.blog3 .post-icons {
	margin-top: -58px;
}

.blog3 .post-icons .face-image.half-border {
	border: 5px solid rgba(255, 255, 255, 0.1);
	border-bottom: 0;
	border-top-left-radius: 110px;
	border-top-right-radius: 110px;
	height: 40px;
	left: 82%;
	position: absolute;
	top: 30%;
	width: 80px;
}

@media (max-width: 767px) {
	.blog3 .post-icons .face-image.half-border {
		left: 70%;
	}
}

.blog3 .post-icons .face-image.half-border img {
	border-radius: 50%;
	border-radius: 50px;
}

.blog3 .post-icons.no-margin {
	background-color: #1f2732;
}

.blog3 .format-status .avatar {
	border: 5px solid rgba(255, 255, 255, 0.3);
	margin: 15px auto 20px;
}

.blog3 .format-status .entry-title {
	margin-bottom: 15px;
}

.blog3 .format-status .entry-meta.small-text {
	margin: 24px 0 14px;
}

.blog3 .format-status .entry-meta.small-text i {
	margin-left: 19px;
}

.blog3 .format-link .item-content {
	padding: 45px 60px 50px;
}

.blog3 .format-link .post-icons.no-margin {
	margin: 0;
}

.blog3 .post.cover-image.format-quote {
	padding: 67px 60px 63px;
}

.blog3 .post.cover-image.format-quote .format-image img {
	background: rgba(255, 255, 255, 0.1);
	border-radius: 50%;
	box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
	max-width: 150px;
	padding: 9px;
}

.blog3 .post.cover-image.format-quote .link-a {
	margin: 18px 0 -4px;
}

.blog3 .post.cover-image.format-quote .link-a a {
	color: #ff497c;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	text-transform: uppercase;
}

.blog3 .post.cover-image.format-quote .link-a a:hover {
	color: #fff;
}

.blog3 .post.cover-image.format-quote h3.entry-title a {
	font-size: 30px;
}

.blog3 .post.cover-image.format-quote .entry-content p {
	margin-bottom: 25px;
}

.blog3 .post.cover-image.format-quote .entry-meta.small-text i {
	margin-left: 19px;
}

.blog3 .format-aside .post-icons {
	margin: 0;
}

.blog3 .entry-title,
.blog3 .entry-title:last-child {
	margin: 0 0 16px;
}

.blog-link {
	margin-top: 20px;
}

.blog4 {
	/* blog post entry meta */
}

.blog4 .vertical-item.blog-padding .item-content {
	padding: 65px 50px 61px 60px;
}

@media (max-width: 767px) {
	.blog4 .vertical-item.blog-padding .item-content {
		padding: 30px 20px;
	}
}

.blog4 .entry-meta {
	clear: both;
	line-height: 1;
	margin-bottom: 8px;
}

.blog4 .entry-meta a {
	color: #fff;
}

.blog4 .entry-meta a :hover {
	color: #ff497c;
}

.blog4 .entry-blog-share {
	float: right;
}

.blog4 .entry-blog-share i {
	margin-top: 18px;
}

@media (min-width: 992px) and (max-width: 1199px) {
	.blog4 .entry-blog-share i {
		margin: 0;
	}
}

@media (max-width: 767px) {
	.blog4 .entry-blog-share {
		float: unset;
	}

	.blog4 .entry-blog-share i {
		margin: 0;
	}
}

.blog4 .entry-meta {
	line-height: 1;
	position: relative;
	text-align: left;
}

.blog4 .entry-meta > * {
	color: #fff;
	display: inline-block;
	font-size: 12px;
	font-weight: 600;
	letter-spacing: 0.2em;
	line-height: 1.6;
	margin-right: 28px;
	margin-top: 0;
	text-transform: uppercase;
}

@media (max-width: 479px) {
	.blog4 .entry-meta > * {
		margin-right: 15px;
	}
}

.blog4 .entry-meta.with_padding {
	padding: 10px 20px;
}

@media (min-width: 768px) {
	.blog4 .entry-meta.with_padding {
		padding: 15px 25px 15px 44px;
	}
}

.blog4 .entry-meta .entry-avatar {
	margin-right: 10px;
}

.blog4 .entry-meta .entry-avatar img {
	border: 3px solid rgba(255, 255, 255, 0.3);
	border-radius: 50%;
	height: 50px;
	width: 50px;
}

.blog4 .entry-meta .blog-adds > * {
	color: #fff;
	margin-right: 32px;
}

@media (max-width: 479px) {
	.blog4 .entry-meta .blog-adds > * {
		margin-right: 7px;
	}
}

.blog4 .format-status .avatar {
	border: 5px solid rgba(255, 255, 255, 0.3);
	margin: 15px auto 20px;
}

.blog4 .format-status .entry-title {
	margin-bottom: 15px;
}

.blog4 .format-status .entry-meta.small-text {
	margin: 24px 0 14px;
}

.blog4 .format-status .entry-meta.small-text i {
	margin-left: 19px;
}

.blog4 .tags-button {
	margin: 0 0 12px;
}

.blog4 .tags-button a {
	background-color: #ff497c;
	color: #fff;
	padding: 7px 20px;
}

.blog4 .tags-button a:hover {
	background-color: #fff;
	color: #ff497c;
}

.blog4 .format-link .item-content {
	padding: 68px 60px 54px;
}

.blog4 .vertical-item.blog-padding.format-chat .item-content {
	padding-bottom: 43px;
}

@media (max-width: 767px) {
	.blog4 .vertical-item.blog-padding.format-chat .item-content {
		padding-bottom: 20px;
	}
}

.blog4 .entry-title,
.blog4 .entry-title:last-child {
	margin: 0 0 16px;
}

@media (max-width: 767px) {
	.blog4 .entry-title,
	.blog4 .entry-title:last-child {
		margin: 25px 0 16px;
	}
}

.blog4 .post-icons i {
	margin-left: 27px;
}

.blog-list .post + .post {
	margin-top: 30px;
}

.blog-list .vertical-item.blog-padding .item-content {
	padding: 36px 44px 36px 40px;
}

.blog-list .vertical-item.blog-padding .item-content h6 {
	margin-bottom: 11px;
}

.blog-list .vertical-item.blog-padding .item-content p {
	margin-bottom: 15px;
}

.blog-list .item-meta i {
	margin-left: 18px;
}

@media (max-width: 991px) {
	.blog-list .item-meta i {
		margin-left: 5px;
	}
}

.blog-list .item-meta i.fa.fa-calendar {
	margin: 0;
}

.blog-list .format-video .item-media img {
	background-size: cover;
}

@media (max-width: 991px) {
	.blog-list .item-meta {
		font-size: 10px;
	}
}

.blog-featured-posts .vertical-item.content-padding.padding-small .item-content {
	padding: 54px 60px 61px;
}

.blog-featured-posts .vertical-item.content-padding.padding-small .item-content .entry-title,
.blog-featured-posts .vertical-item.content-padding.padding-small .item-content .entry-title:last-child {
	font-size: 24px;
	font-weight: 500;
	line-height: 1.2;
	margin: 9px 0 17px;
	text-transform: none;
}

.blog-featured-posts .vertical-item.content-padding.padding-small .item-content .post-author {
	margin-top: 30px;
}

.blog-featured-posts .vertical-item.content-padding.padding-small .item-content .post-author p {
	margin-top: 11px;
}

.blog-featured-posts .format-link {
	margin-top: -110px;
}

@media (max-width: 767px) {
	.masonry-blog .gallery-owl-nav .owl-nav > div {
		right: -25px;
	}

	.masonry-blog .gallery-owl-nav .owl-nav > div:hover {
		right: 0;
	}

	.masonry-blog .gallery-owl-nav .owl-nav > div.owl-prev {
		left: -25px;
	}

	.masonry-blog .gallery-owl-nav .owl-nav > div.owl-prev:hover {
		left: 0;
	}
}

.masonry-blog .c-gutter-60 [class*="col-"],
.masonry-blog .row.c-gutter-60 > [class*="col-"] {
	padding-left: 15px;
	padding-right: 15px;
}

.masonry-blog .vertical-item.content-padding.padding-masonry .item-content {
	padding: 54px 45px 60px;
}

.masonry-blog .vertical-item.content-padding.padding-masonry .item-content h6 {
	font-weight: 500;
	margin-bottom: 16px;
}

.masonry-blog .small-post {
	padding: 55px 60px;
}

.masonry-blog .small-post .avatar {
	border: 5px solid #363d47;
	margin: 0 auto 17px;
}

.masonry-blog .small-post .entry-meta {
	margin: 15px 0 0;
}

.masonry-blog .small-post .entry-meta a {
	color: #fff;
}

.masonry-blog .small-post .entry-meta a:hover {
	color: #ff497c;
}

.masonry-blog .small-post.status {
	padding: 54px 45px 50px;
}

.masonry-blog .small-post.status .entry-meta {
	margin: 0;
}

.masonry-blog .small-post.status .entry-meta a {
	color: #ff497c;
}

.masonry-blog .small-post.status .entry-meta a:hover {
	color: #fff;
}

.masonry-blog .small-post.status h6 {
	margin: 10px 0 17px;
}

.masonry-blog .small-post.status .entry-content p {
	margin-bottom: 19px;
}

.masonry-blog .small-post.status .entry-content span.byline a {
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	line-height: 1.6em;
	text-transform: uppercase;
}

.masonry-blog .small-post.status .entry-content span.byline a:hover {
	color: #ff497c;
}

.masonry-blog .post.chat p.name {
	color: #1f2732;
	font-weight: 600;
}

.masonry-blog .post.chat p.name.last {
	color: #ff497c;
}

.masonry-blog nav {
	margin-top: 30px;
}

@media (max-width: 767px) {
	.masonry-blog nav {
		margin-top: -10px;
	}
}

.masonry-blog .owl-theme .owl-nav {
	top: 33%;
}

.video-blog {
	margin-top: -60px;
}

.vertical-item .item-media + .item-content.widget-content {
	padding: 20px 40px 33px;
}

.vertical-item .item-media + .item-content.widget-content .widget-content {
	font-weight: 600;
	line-height: 20px;
}

.comments-area.comment1 .comment-body.comment-form {
	margin-top: 28px;
	padding: 25px 0px 12px 39px;
}

.comments-area.comment1 .comment-body.comment-form .comment-author img {
	border: none;
	border-radius: 50%;
	left: -72px;
	position: absolute;
	top: 10px;
}

@media (max-width: 575px) {
	.comments-area.comment1 .comment-body.comment-form .comment-author img {
		left: -30px;
		max-width: 60px;
	}
}

.comments-area.comment1 .comment-body.comment-form input[type="text"],
.comments-area.comment1 .comment-body.comment-form input[type="email"],
.comments-area.comment1 .comment-body.comment-form textarea,
.comments-area.comment1 .comment-body.comment-form .form-control {
	text-align: left;
}

.margin-bottom {
	margin-bottom: 10px;
}

.post2 h4.comments-title {
	padding: 57px 2px 14px;
}

@media (max-width: 767px) {
	.post2 h4.comments-title {
		padding: 16px 0px 3px;
	}
}

@media (max-width: 767px) {
	.post2 .post-nav .nav-links > div {
		width: 100%;
	}
}

@media (min-width: 768px) and (max-width: 991px) {
	.post2 .post-nav .nav-links > div {
		width: 48%;
	}

	.post2 .next {
		margin-left: 27px;
	}
}

.post2 blockquote {
	border: none;
}

.post2 blockquote p.small-text,
.post2 blockquote h6 {
	font-style: normal;
}

.post2 .comment-form p {
	margin-bottom: 20px;
}

@media (max-width: 991px) {
	.post2 .author-bio .item-content {
		padding: 27px 26px;
	}

	.post2 .blog-post.comments-area .comment-respond {
		margin-bottom: 50px;
		margin-top: 35px;
		padding: 20px 20px 37px;
	}

	.post2 .comment-respond .form-submit {
		margin: -6px 0 0;
	}
}

@media (min-width: 991px) and (max-width: 1199px) {
	.post2 .next {
		margin-left: 14px;
	}
}

@media (max-width: 767px) {
	.video-post .author-bio .item-content {
		padding: 27px 26px 24px;
	}
}

@media (max-width: 991px) {
	.related-post {
		margin-top: 30px;
	}
}

.related-post .vertical-item.content-absolute .item-content {
	background-color: rgba(31, 39, 50, 0.8);
	bottom: 0%;
	left: 0;
	padding: 26px 43px 20px;
	position: absolute;
	right: 0;
	z-index: 2;
}

@media (max-width: 991px) {
	.related-post .vertical-item.content-absolute .item-content {
		padding: 26px 20px 20px;
	}
}

.related-post .vertical-item.content-absolute .item-content p {
	font-weight: 500;
	line-height: 24px;
	margin: 0;
}

.related-post .vertical-item.content-absolute .item-content p.item-meta a {
	color: #ff497c;
	font-weight: 700;
	letter-spacing: 0.2em;
}

.related-post .vertical-item.content-absolute .item-content p.item-meta a:hover {
	color: #fff;
}

/*
** Template Specific Styles
*/
#box_wrapper > section,
#box_wrapper > div > section {
	overflow: hidden;
}

#box_wrapper > section.page_topline,
#box_wrapper > section.page_toplogo,
#box_wrapper > section.overflow-visible,
#box_wrapper > div > section.overflow-visible {
	overflow: visible;
}

.s-pb-170 > [class*='container'] {
	padding-bottom: 170px;
}

a.btn {
	min-width: 230px;
}

.z-index {
	z-index: 5;
}

.z-index-10 {
	z-index: 10;
}

.mb-25 {
	margin-bottom: 25px;
}

.fw-600 {
	font-weight: 600;
}

.divider-5 {
	margin-top: 5px;
}

.divider-15 {
	margin-top: 15px;
}

.divider-35 {
	margin-top: 35px;
}

.divider-45 {
	margin-top: 45px;
}

.divider-55 {
	margin-top: 55px;
}

.divider-65 {
	margin-top: 65px;
}

.divider-75 {
	margin-top: 75px;
}

.divider-85 {
	margin-top: 85px;
}

.divider-95 {
	margin-top: 95px;
}

.divider-105 {
	margin-top: 105px;
}

.divider-110 {
	margin-top: 110px;
}

.divider-125 {
	margin-top: 125px;
}

.small-margin {
	margin-top: 5px;
}

.dropdown-shopping-cart {
	font-weight: 700;
	position: relative;
}

.page_toplogo .dropdown-shopping-cart {
	margin-left: 24px;
}

.dropdown-shopping-cart i {
	font-size: 28px;
	padding-right: 14px;
}

.page_toplogo .dropdown-shopping-cart i {
	position: relative;
	top: 0.18em;
}

.dropdown-shopping-cart .badge {
	border-radius: 1em;
	left: 24px;
	padding: .28em .5em .2em;
	position: absolute;
}

.page_toplogo .dropdown-shopping-cart .badge {
	top: -0.3em;
}

.dropdown-shopping-cart:hover {
	color: inherit;
}

.dropdown-shopping-cart + .dropdown-menu {
	margin-top: 50px;
}

@media (min-width: 576px) {
	.dropdown-shopping-cart + .dropdown-menu {
		min-width: 430px;
	}
}

.page_title h1,
.page_title h2 {
	line-height: 1;
}

@media (min-width: 992px) {
	.page_title h1,
	.page_title h2 {
		font-size: 54px;
	}

	.page_title h1:last-child,
	.page_title h2:last-child {
		margin-bottom: 0;
	}
}

.page_title .small-title {
	margin-bottom: 0;
}

.page_title .small-title + .breadcrumb {
	font-size: 16px;
	font-weight: 300;
	letter-spacing: 0;
	text-transform: none;
}

@media (min-width: 992px) {
	.page_title .title-inline {
		margin: 0;
	}

	.page_title .title-inline + .breadcrumb {
		border-left: 1px solid rgba(200, 200, 200, 0.35);
		margin-left: 30px;
		padding-left: 30px;
	}
}

.page_title .breadcrumb {
	line-height: 1.6;
}

.page_title [class*="container"] > .breadcrumb {
	background-color: rgba(0, 0, 0, 0.1);
	bottom: 0;
	padding: 0 15px;
	position: absolute;
	right: 15px;
}

.teaser-contact-icon.s-parallax {
	background-image: url("../img/texture_2.png");
}

.page_404 {
	background-image: url("../img/404.jpg");
}

.page_map {
	height: 0px;
	text-align: center;
}

.page_map .marker {
	display: none;
}

.page_map .gmnoprint.gm-bundled-control.gm-bundled-control-on-bottom {
	bottom: 165px !important;
}

.map_marker_description {
	max-width: 270px;
}

.map_marker_description h3 {
	line-height: 1;
	margin-bottom: 10px;
}

.map_marker_description img {
	max-width: 90% !important;
}

.gm-style .gm-style-iw {
	line-height: 1.6em;
	overflow: visible !important;
	text-align: center;
}

.gm-style .gm-style-iw > *:first-child {
	position: relative;
}

.gm-style .gm-style-iw:before {
	background: #fff;
	border-top: 2px solid #ff497c;
	bottom: -25px;
	box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
	content: "";
	display: block;
	left: -16px;
	position: absolute;
	right: -16px;
	top: -25px;
}

.gm-style .gm-style-iw .icon-inline {
	display: inline-block;
	margin: 0.3em 0;
}

.gm-style .gm-style-iw .icon-inline .icon-styled {
	margin-right: 5px;
}

.texture-ds {
	background-image: url("../img/texture_dark.jpg");
}

/*footer social buttons that hidden on half of their height*/
.page_footer {
	/*overriding Bootstrap Addons buttons*/
}

/* .page_footer.s-parallax {
	background-image: url("{{ asset('frontend_assets') }}/img/parallax/footer_bg.png");
} */

@media (min-width: 576px) {
	.page_footer a.border-icon:before,
	.page_footer a.bg-icon:before,
	.page_footer a.color-bg-icon:before {
		height: 4.2em;
		line-height: 4.2em;
		width: 4.2em;
	}
}

.page_footer .side-icon-box {
	margin: 0 0 20px;
}

.page_footer .side-icon-box > .icon-styled:first-child {
	margin-right: 0;
	position: relative;
	top: 0.5em;
}

.page_footer .side-icon-box .icon-styled + .media-body {
	margin-left: 20px;
}

.page_footer .col-md-12 .widget_social_buttons {
	margin-bottom: 30px;
}

@media (max-width: 1199px) {
	.page_footer .col-md-12 .widget_social_buttons {
		margin-bottom: 0;
	}
}

.page_footer .col-md-12 .widget_social_buttons a {
	margin: 0 10px 70px;
}

@media (min-width: 1200px) {
	.page_footer .col-md-12 .widget_social_buttons a {
		margin-bottom: 0;
		-webkit-transform: translateY(50%);
		-ms-transform: translateY(50%);
		transform: translateY(50%);
	}

	.page_footer .col-md-12 .widget_social_buttons a:hover {
		-webkit-transform: translateY(0);
		-ms-transform: translateY(0);
		transform: translateY(0);
	}
}

.page_footer .corner:after {
	border-top: 50px solid #fff;
}

.margin {
	margin-left: 12px;
	margin-top: -120px;
}

.page_copyright {
	font-size: 12px;
	font-weight: 500;
	letter-spacing: 0.2em;
	text-transform: uppercase;
}

/* .page_copyright.cover-background,
.page_copyright.s-parallax {
	background-image: url("{{ asset('frontend_assets') }}/img/parallax/copyright_bg.jpg");
} */

.item-hover-content {
	overflow: hidden;
	position: relative;
}

.item-hover-content .item-media {
	z-index: 2;
}

.item-hover-content .item-content {
	box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
	left: 0;
	position: absolute;
	right: 0;
}

.item-hover-content .item-content h4 {
	letter-spacing: 0.15em;
	line-height: 1;
	margin-bottom: 1.4em;
}

.item-hover-content .item-content h4 span {
	font-weight: 900;
}

@media (min-width: 1200px) {
	.item-hover-content.content-padding .item-content {
		padding: 54px 40px;
	}
}

.item-hover-content:hover {
	box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
	overflow: visible;
	z-index: 3;
}

.item-gallery {
	background: transparent;
	overflow: hidden;
	position: relative;
}

.item-gallery .item-content h6 {
	opacity: 0;
	-webkit-transform: scale(0);
	-ms-transform: scale(0);
	transform: scale(0);
	-webkit-transition: all 0.15s ease-in-out;
	transition: all 0.15s ease-in-out;
	z-index: 5;
}

.item-gallery:hover .item-content h6 {
	opacity: 1;
	-webkit-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
}

.service-item .item-content {
	padding: 47px 58px;
}

.service-item .item-content p {
	margin-bottom: 8px;
}

.service-item1 h6 {
	font-weight: 500;
}

.service-item1 p {
	margin-bottom: 8px;
}

.service-item1 .icon-box {
	padding: 57px 55px 55px;
}

@media (max-width: 427px) {
	.service-item1 .icon-box {
		padding: 57px 30px 55px;
	}
}

.service-item1 .service-icon {
	margin-bottom: 21px;
}

.service-item1 .service-icon.last {
	margin-bottom: 31px;
}

@media (max-width: 991px) {
	.service-item2 h6 {
		font-size: 25px;
		margin-bottom: 5px;
	}
}

.service-item2 img {
	max-width: 120px;
	height: 120px;
}

.service-item2 .vertical-item .item-content {
	padding-top: 23px;
}

@media (max-width: 767px) {
	.service-item2 .vertical-item .item-content {
		padding-top: 10px;
	}
}

.btn-link {
	color: #ff497c;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	text-transform: uppercase;
}

.btn-link:hover {
	color: #1f2732;
	text-decoration: none;
}

.form-group .btn-maincolor {
	margin-top: 6px;
	padding: 26px 80px;
}

.service-item3 .vertical-item .item-content {
	padding: 59px 58px 55px;
}

@media (max-width: 768px) {
	.service-item3 .vertical-item .item-content {
		padding: 40px 36px;
	}
}

.service-item3 .vertical-item .item-content p {
	margin-bottom: 18px;
	margin-top: 25px;
}

.icon-service img {
	padding-right: 10px;
}

.icon-service h6 {
	margin-bottom: 14px;
	margin-top: 20px;
}

.icon-service p {
	margin: 0 0 8px;
}

.icon-service ul {
	color: #1f2732;
	font-size: 20px;
	line-height: 30px;
	list-style: none;
	margin-top: 65px;
	padding-left: 7px;
}

@media (max-width: 767px) {
	.icon-service ul {
		margin: 20px 0 50px 97px;
	}
}

.icon-service ul li {
	font-weight: 300;
	margin-bottom: 10px;
}

@media (max-width: 767px) {
	.icon-service .media {
		padding: 0 15px;
	}
}

.service-item4 .service-widget h6 {
	line-height: 17px;
	margin-bottom: 30px;
}

.service-item4 .service-widget ul {
	padding: 0 30px 0 0;
}

.service-item4 .service-widget ul.list li {
	padding-bottom: 7px;
	padding-top: 8px;
}

@media (max-width: 767px) {
	.service-item4 .service-widget {
		text-align: center;
	}
}

.service-item4 .excerpt {
	font-weight: 300;
	margin-bottom: 13px;
}

.service-item4 .progress-service {
	margin-top: 35px;
}

@media (max-width: 991px) {
	.service-item4 .progress-service {
		margin-top: 10px;
	}
}

.service-item4 .progress-service .progress-title {
	margin: 18px 0 10px;
}

.service-item4 .progress-service h6 {
	margin-bottom: -5px;
}

.service-item4 .list-comtent {
	margin-top: 35px;
}

@media (max-width: 991px) {
	.service-item4 .list-comtent {
		margin: 0;
	}
}

.service-item4 .list-comtent .list1 li {
	padding: 0 0 6px 0px;
}

.progress-title {
	color: #1f2732;
	font-size: 12px;
	font-weight: 800;
	letter-spacing: 0.2em;
	margin: 30px 0 9px;
	text-transform: uppercase;
}

.progress-bar span {
	color: #1f2732;
	font-size: 14px;
	font-weight: 800;
	letter-spacing: 0.2em;
	margin-left: 270px;
	margin-top: -27px;
	position: absolute;
	text-transform: uppercase;
}

.left-part {
	padding-right: 23px;
}

.testimonials-item {
	padding-top: 80px;
}

@media (max-width: 991px) {
	.testimonials-item {
		padding-top: 0;
	}
}

.testimonials-item img {
	border: 5px solid #dedfe1;
	border-radius: 50%;
	margin-right: 15px;
	max-width: 90px;
	min-width: 90px;
}

.testimonials-item p {
	color: #7f7f7f;
	font-style: italic;
}

.testimonials-item h6 {
	font-size: 16px;
	font-weight: 600;
	margin: -4px 0 -10px;
	text-align: left;
}

.testimonials-item span {
	color: #ff497c;
	font-size: 12px;
	font-weight: 800;
	letter-spacing: 0.2em;
	text-transform: uppercase;
}

.testimonials-item.padding {
	padding: 0;
}

.breadcrumb-item + .breadcrumb-item::before {
	color: #1f2732;
	content: "\f111";
	font-family: FontAwesome;
	font-size: 5px;
	padding: 0 30px;
	position: relative;
	top: -2px;
}

@media (max-width: 767px) {
	.breadcrumb-item + .breadcrumb-item::before {
		padding: 0 3px;
		top: -3px;
	}
}

.breadcrumb-item a {
	color: var(--theme-color);
	letter-spacing: 2px;
}

.breadcrumb-item a:hover {
	color: #1f2732;
}

.breadcrumb-item.active {
	color: #1f2732;
}

.corner.corner-outside.ds.ms {
	background-image: url("../img/breadcrumbs.jpg");
}

.breadcrumbs {
	background-image: url("../img/breadcrumbs.jpg");
}

.quote-items h6 {
	margin-top: 10px;
	text-align: center;
}

.quote-items p {
	margin-top: 8px;
}

.stage-outer.testimonials-item {
	padding-top: 50px;
}

.shortcodes .list1 li {
	padding: 3px 0;
}

.testimonials-slider .quote-item {
	max-width: 100%;
}

.testimonials-slider p {
	font-style: italic;
}

.testimonials-slider h6 {
	margin: 15px 0 12px;
}

.testimonials-slider .owl-dots {
	margin-top: 4px;
}

.testimonials-slider .testimonials-item {
	padding-top: 17px;
}

.single-page {
	margin-top: 41px;
}

.single-page .item-content {
	padding-right: 10px;
}

.single-page .item-content .progress {
	background-color: #f4f4f5;
}

.single-page .item-content p.text {
	padding: 51px 0 75px;
}

@media screen and (max-width: 767px) {
	.single-page .item-content p.text {
		padding: 51px 0 15px;
	}
}

.single-page .progress-service {
	margin-top: 43px;
}

.single-page .progress-service .progress-bar span {
	margin-left: 0;
	right: 38px;
}

@media screen and (max-width: 991px) {
	.pricing-plan-service .pricing-plan {
		margin-bottom: 50px;
		margin-top: 7px;
	}
}

.owl-carousel.testimonials-owl em {
	color: #7f7f7f;
	padding: 0 23px;
}

.owl-carousel.testimonials-owl img {
	max-width: 271px;
}

.owl-carousel.testimonials-owl .owl-dots .owl-dot span {
	height: 6px;
	width: 6px;
}

.widget-service {
	padding: 115px 28px 0 40px;
}

@media screen and (max-width: 991px) {
	.widget-service {
		padding: 48px 0 55px;
	}
}

.widget-service ul {
	padding-left: 30px;
	padding-right: 30px;
}

@media (max-width: 991px) {
	.widget-service ul {
		padding-left: 0;
		padding-right: 0;
	}
}

.widget-service li {
	padding-bottom: 7px;
	padding-top: 8px;
}

.widget-service h6 {
	margin: 0 0 23px 28px;
}

@media (max-width: 991px) {
	.widget-service h6 {
		margin: 0 0 15px;
	}
}

.testimonials-sliders {
	/* background-color: var(--theme-header-bg) !important; */
	background-image: url("{{ asset('frontend_assets') }}/img/parallax/texture-process.png");
}

.testimonials-sliders .small-text.author-job {
	color: var(--theme-color);
	font-weight: 700;
	letter-spacing: 0.2em;
	margin: 35px 0 12px;
}

.testimonials-sliders h5 {
	padding-bottom: 11px;
}

.testimonials-sliders .owl-theme .owl-dots {
	margin-top: 3px;
}

@media (max-width: 767px) {
	.testimonials-sliders .owl-theme .owl-dots {
		margin-bottom: 5px;
		margin-top: 5px;
	}
}

.testimonials-sliders li {
	color: #fff;
}

.header_phone {
	margin-left: 10px;
}

.header_phone h6 {
	font-size: 24px;
	font-weight: 200;
	color: var(--theme-menu-text-color);
}

.header_phone span {
	color: var(--theme-color);
}

@media (min-width: 1600px) {
	.main-testimonials {
		margin-top: 10px;
	}
}

.main-testimonials .quote-image img {
	height: 270px;
	width: 270px;
}

.main-testimonials .owl-carousel .owl-dots .owl-dot span {
	height: 6px;
	margin: 1px 12px 3px;
	width: 6px;
}

@media (max-width: 1199px) {
	.main-testimonials .corner {
		padding-bottom: 50px;
	}
}

@media (max-width: 1199px) {
	.main-testimonials .quote-item {
		padding: 10px 0 20px;
	}
}

.testimonials-btn {
	margin-bottom: -80px;
}

@media (max-width: 767px) {
	.testimonials-btn {
		margin-bottom: -85px;
	}
}

.testimonials-btn a {
	background-color: var(--theme-color);
	border: 3px solid var(--theme-color);
	border-radius: 50%;
	padding: 25px;
	position: relative;
	text-align: center;
	z-index: 100;
}

@media (max-width: 767px) {
	.testimonials-btn a {
		top: 25px;
	}
}

.testimonials-btn a:hover {
	border: 3px solid var(--theme-color);
}

.testimonials-btn a i {
	font-size: 30px;
	line-height: 70px;
}

.blog-post-carousel {
	margin-bottom: -150px;
	padding-top: 14px;
}

.blog-post-carousel .container-fluid {
	bottom: 10px;
	padding: 0 80px;
	position: relative;
	z-index: 3;
}

@media (max-width: 767px) {
	.blog-post-carousel .container-fluid {
		padding: 0 15px;
	}
}

.blog-post-carousel .box {
	background-color: #fff;
	padding: 55px 60px 40px;
}

@media (max-width: 1600px) {
	.blog-post-carousel .box {
		padding: 30px 20px;
	}
}

.blog-post-carousel .small-text a {
	color: var(--theme-color);
	letter-spacing: 0.2em;
}

.blog-post-carousel .small-text a:hover {
	color: #323232;
}

.blog-post-carousel .post-author p {
	margin-bottom: -6px;
}

.blog-post-carousel .post-author a {
	color: #1f2732;
	font-size: 12px;
	font-weight: 800;
	letter-spacing: 0.2em;
	text-transform: uppercase;
}

.blog-post-carousel .post-author img {
	margin-top: 17px;
}

.blog-post-carousel .item-content p {
	margin-bottom: 8px;
}

.owl-item.active {
	margin: 0;
}

.team .social-icons {
	margin-top: 25px;
}

.team .vertical-item.content-padding .item-content {
	padding: 52px 50px 70px;
}

@media (max-width: 1199px) {
	.team .vertical-item.content-padding .item-content {
		padding: 52px 30px 70px;
	}
}

.team h6 {
	margin-bottom: 10px;
}

.team1 .item-title {
	margin-bottom: 8px;
}

.team1 .item-content {
	padding: 65px 55px;
}

@media (max-width: 1199px) {
	.team1 .item-content {
		padding: 30px 20px;
	}
}

.team1 .item-content .desc {
	margin: 1px 0 20px;
}

.single-member-carousel h4 {
	margin-bottom: 36px;
}

@media (max-width: 767px) {
	.single-member-carousel h4 {
		margin-bottom: 15px;
	}
}

.single-member-carousel .color-icon.bg-icon {
	background-color: #f4f4f5;
}

.single-member-carousel .vertical-item.content-padding .item-content {
	padding: 55px 50px 55px;
}

.single-member-carousel .vertical-item.content-padding .item-content h6 {
	margin-bottom: 6px;
}

.single-member-carousel .vertical-item.content-padding .item-content .social-icons {
	margin: 30px 0 0;
}

@media (max-width: 767px) {
	.single-member-carousel .top-right-nav .owl-nav {
		position: absolute;
		right: -3px;
		top: -46px;
	}
}

.single-member-carousel .top-right-nav .owl-nav .owl-prev {
	margin-right: 65px;
}

.single-member-carousel .top-right-nav .owl-nav .owl-prev:before {
	content: "\f104";
	font-family: FontAwesome;
	font-size: 12px;
	line-height: 1;
	margin-right: 8px;
}

.single-member-carousel .top-right-nav .owl-nav .owl-next {
	left: auto;
	right: 1.5%;
}

.single-member-carousel .top-right-nav .owl-nav .owl-next:after {
	content: "\f105";
	font-family: FontAwesome;
	font-size: 12px;
	font-weight: bold;
	line-height: 1;
	margin-left: 8px;
}

.single-member-carousel .top-right-nav .owl-nav > div {
	color: var(--theme-color);
	font-size: 12px;
	font-weight: 800;
	letter-spacing: 3px;
	text-transform: uppercase;
}

.single-member-carousel .top-right-nav .owl-nav > div:hover {
	color: #1f2732;
}

.team-single .form-group .btn-maincolor {
	padding: 26px 52px;
}

.team-single .progress {
	background-color: #f4f4f5;
}

.team-single .progress .progress-bar span {
	right: 5%;
}

.team-single .contact-icon {
	margin-bottom: 19px;
}

.team-single .contact-icon .media:last-child {
	margin-left: 20px;
}

@media (max-width: 767px) {
	.team-single .contact-icon .media:last-child {
		margin-left: 0;
	}
}

.team-single .contact-icon p {
	color: #1f2732;
	font-weight: 400;
}

.team-single .contact-icon .media-body {
	margin-left: 9px;
}

.team-single .color-icon.bg-icon {
	background-color: #f4f4f5;
}

.team-single .d-flex.justify-content-between {
	margin-bottom: -13px;
	margin-right: 33px;
}

.team-single .d-flex.justify-content-between .social-icons {
	margin-top: 10px;
}

@media (max-width: 767px) {
	.team-single .d-flex.justify-content-between .social-icons {
		margin-top: 0;
	}
}

.team-single .small-text {
	margin-bottom: 16px;
}

.team-single img {
	margin-bottom: 20px;
}

@media (max-width: 767px) {
	.team-single .team-content {
		margin-top: 30px;
	}
}

.team-carousel .color-icon.bg-icon {
	background-color: #f4f4f5;
}

.team-carousel h6 {
	margin: 6px 0;
}

.team-carousel .small-text {
	margin-bottom: 25px;
}

.team-carousel .item-content p:last-child {
	margin-bottom: 0.3em;
}

@media (max-width: 991px) {
	.team-single2 .team-content {
		margin-top: 50px;
	}
}

.team-single2 h4 {
	margin-bottom: 30px;
}

@media (max-width: 767px) {
	.team-single2 h4 {
		margin-bottom: 10px;
		margin-top: -30px;
	}
}

.team-single2 table th {
	padding: 11px 12px 10px 0px;
}

.team-single2 a.fa.bg-icon {
	margin-right: 7px;
}

.team-single2 .color-icon.bg-icon {
	background-color: #f4f4f5;
}

.team-single2 .progress-bar span {
	font-size: 12px;
	margin-top: -30px;
	right: 3%;
}

@media (max-width: 767px) {
	.team-single2 .progress-bar span {
		right: 6%;
	}
}

.team-single2 .progress-item {
	margin-top: -27px;
	padding-left: 0;
}

@media (max-width: 991px) {
	.team-single2 .progress-item {
		margin-bottom: 20px;
	}
}

.team-single2 .item-content {
	padding: 53px 0 35px;
}

@media (max-width: 991px) {
	.team-single2 .item-content {
		padding: 10px 0;
	}
}

.team-single2 .progress-title {
	margin: 27px 0 12px;
}

.team-single2 .team-table {
	margin-top: 39px;
}

@media (max-width: 767px) {
	.team-single2 .team-table {
		margin-top: 20px;
	}
}

.team-single2 h6.prev {
	margin-top: 24px;
}

.single-form1 h6 {
	margin-bottom: 24px;
}

@media (max-width: 991px) {
	.single-form1 h6 {
		margin-top: 20px;
	}
}

.single-form1 button.btn {
	padding: 26px 51px;
}

.team-single3 .title {
	margin-top: -9px;
}

.team-single3 .item-bio img {
	max-width: 540px;
}

@media (max-width: 1300px) {
	.team-single3 .item-bio img {
		max-width: 100%;
	}
}

.team-single3 .item-bio .member-bio {
	margin-right: 30px;
	padding: 53px 0 56px;
}

@media (max-width: 1300px) {
	.team-single3 .item-bio .member-bio {
		margin-right: 0;
	}
}

.team-single3 .item-bio .member-bio h6 {
	margin-bottom: 8px;
}

.team-single3 .item-bio .member-bio p.small-text.color-main {
	margin-bottom: 26px;
}

.team-single3 .list1 {
	margin-top: 18px;
}

.team-single3 .list1 li {
	padding: 3px 0 3px 0;
}

.team-single3 .nav-tabs .nav-link {
	padding: 19px 39px;
}

@media (max-width: 500px) {
	.team-single3 .nav-tabs .nav-link {
		border-radius: 15px 15px 0 0;
		margin-bottom: 0;
		padding: 12px 10px 12px;
	}
}

@media (min-width: 768px) {
	.team-single3 .nav-tabs .nav-link {
		padding: 15px;
	}
}

@media (min-width: 1400px) {
	.team-single3 .nav-tabs .nav-link {
		min-width: 170px;
		padding: 22px 35px 21px;
	}
}

.team-single3 .nav-tabs .nav-link.active {
	background: #f4f4f5;
	border-color: #f4f4f5;
	color: #1f2732;
}

.team-single3 .tab-content {
	margin-bottom: 48px;
	padding: 30px 40px;
}

.team-single3 .tab-content p.name {
	color: #1f2732;
	font-weight: 600;
}

.team-single3 .tab-content .progress-bar span {
	color: #1f2732;
	font-size: 14px;
	font-weight: 800;
	letter-spacing: 0.2em;
	margin-top: -27px;
	position: absolute;
	right: 9%;
	text-align: right;
	text-transform: uppercase;
}

.team-single3 .tab-content .tab-pane.progress-item {
	margin-bottom: 10px;
}

.team-single3 .tab-content .tab-pane.progress-item .progress-title.first {
	margin-top: 0;
}

.team-single3 .tab-content .contact-form {
	margin: 10px 0;
}

.team-single3 .tab-content .contact-form button {
	margin-top: 30px;
}

.team-single3 .tab-content .contact-form button.btn {
	padding: 16px 51px;
}

.team-single3 .tab-content .contact-form .form-control::-webkit-input-placeholder {
	text-align: left;
}

.team-single3 .tab-content .contact-form textarea {
	max-height: 120px;
}

.team-single3 .quote {
	margin: 15px 60px 7px 0;
}

.team-single3 .quote a {
	font-style: normal;
}

.team-single3 blockquote {
	margin: 40px 0;
	padding: 0 0 5px 1.5em;
}

.process-part.process-page {
	background: none;
}

.process-part.process-page .step-center-part img {
	border: 10px solid #e8e9ea;
	border-radius: 50%;
	max-width: 270px;
}

.process-part.process-page .step-center-part:after {
	background-image: url("../img/right_arrow_ls.png");
	width: 37px;
}

.process-part.process-page .right .step-center-part:after {
	background-image: url("../img/left_arrow_ls.png");
	left: 55px;
	right: auto;
}

.testimonials-page h6 {
	margin-top: 12px;
}

.testimonials-page p {
	font-style: italic;
}

.testimonials-page .testimonials-item::after {
	color: var(--theme-color);
	content: "”";
	display: block;
	font-family: Vidaloka, sans-serif;
	font-size: 100px;
	font-style: normal;
	left: 52%;
	margin-top: 0;
	position: absolute;
	top: 109px;
}

.testimonials-page .testimonials-item {
	padding-top: 20px;
}

.data-evets {
	background-color: #ff497c;
	margin-bottom: 40px;
	margin-top: 60px;
	padding: 24px;
}

.data-evets:first-child {
	margin-top: 0;
}

@media (max-width: 767px) {
	.data-evets {
		margin-top: 40px;
	}
}

.post-events + .post-events {
	margin-top: 40px;
}

.post-events h6 {
	margin-bottom: 6px;
}

@media (max-width: 992px) {
	.post-events h6 {
		line-height: 20px;
	}
}

.post-events .item-meta {
	margin-bottom: 15px;
}

.post-events .item-content {
	padding: 40px 40px 50px;
}

@media (max-width: 992px) {
	.post-events .item-content {
		padding: 30px 0 30px 20px;
	}
}

@media (max-width: 767px) {
	.post-events .item-meta span {
		padding: 0;
	}
}

.widget_search.ds {
	padding: 35px 40px 35px 40px;
	position: relative;
}

.widget_search.ds:before {
	content: url("../img/search_icon_bg.png");
	display: block;
	position: absolute;
	right: -20px;
	top: -20px;
}

.widget_search.ds input[type="search"],
.widget_search.ds .form-control {
	background-color: #fff;
	border-color: #fff;
	color: #7f7f7f;
}

.contact1 {
	margin-top: -60px;
}

.contact-form1 .btn {
	padding: 26px 51px;
}

.contact2 [class*='col-'] > .form-group + .form-group {
	margin-top: 20px;
}

.contact2 .teaser-icon img {
	margin-bottom: 23px;
	margin-top: 0;
}

@media (max-width: 767px) {
	.contact2 .teaser-icon img {
		margin-bottom: 10px;
	}
}

.contact2 .contact-form textarea {
	min-height: 220px;
}

@media (max-width: 767px) {
	.contact2 .contact-form textarea {
		margin-top: 20px;
	}
}

.contact2 i {
	font-size: 65px;
}

.contact2 .form-control::-webkit-input-placeholder {
	text-align: left;
}

.contact2 .form-group .btn-maincolor {
	margin-top: 40px;
	padding: 26px 51px;
}

@media (max-width: 767px) {
	.contact2 .form-group .btn-maincolor {
		margin-top: 20px;
	}
}

.support-section {
	background-image: url("../img/bg_3.jpg");
}

.support-section h1 {
	margin: 25px 0 25px 0;
}

.support-section h6 {
	font-weight: 500;
	margin: 21px 0 33px 0;
}

.support-section span {
	font-weight: 200;
}

.support-section span.small {
	font-size: 24px;
	font-weight: 200;
}

.support-section .btn {
	margin-bottom: 28px;
	margin-top: 4px;
	padding: 26px 38px;
}

@media (max-width: 767px) {
	.contact3 .border-icon {
		margin-top: 20px;
	}

	.contact3 .border-icon .teaser-icon img {
		margin-top: 40px;
	}
}

.contact-form4 .form-group .btn-maincolor {
	margin-top: 3px;
	padding: 26px 52px;
}

@media (max-width: 991px) {
	p.teaser-content {
		font-size: 13px;
	}
}

.contact4 .form-control::-webkit-input-placeholder {
	text-align: left;
}

.contact4 input[type="text"],
.contact4 .form-control {
	text-align: left;
}

.contact4 .btn.btn-outline-maincolor {
	margin-left: 20px;
}

@media (max-width: 494px) {
	.contact4 .btn.btn-outline-maincolor {
		margin-bottom: 15px;
		margin-left: 0;
		margin-top: 20px;
	}
}

.contact4 h4 {
	margin-bottom: 20px;
}

@media (max-width: 767px) {
	.contact4 h4 {
		margin-bottom: 0;
	}
}

.contact4 .color-dark {
	color: #1f2732;
	font-weight: 400;
}

.contact4 .header {
	margin-bottom: 30px;
}

@media (max-width: 767px) {
	.contact4 .header {
		margin-bottom: 10px;
	}
}

@media (min-width: 768px) and (max-width: 991px) {
	.contact4 .header {
		margin-top: 30px;
	}
}

.contact4 table td {
	padding: 10px 0px;
}

.contact4 table td i {
	margin-right: 9px;
}

.contact4 .media i {
	margin-right: -4px;
}

.contact4 button {
	margin-top: 20px;
}

.contact4 .form-group .btn-maincolor {
	margin-top: 20px;
	padding: 26px 52px;
}

@media (max-width: 991px) {
	.contact4 .form-group .btn-maincolor {
		margin-bottom: 20px;
		margin-top: 0;
	}
}

.teaser-icon img {
	margin-top: 41px;
}

@media (max-width: 767px) {
	.teaser-icon img {
		margin-top: 35px;
	}
}

.link-a a {
	color: var(--theme-color);
}

.link-a a:hover {
	color: #1f2732;
}

.reply-button {
	background-color: #f4f4f5;
	border-radius: 50px;
	padding: 5px 27px;
}

.reply-button span {
	font-size: 12px;
	font-weight: 800;
	letter-spacing: 0.2em;
	text-transform: uppercase;
}

.reply-button i {
	font-size: 12px;
}

.tags-button a {
	background-color: #fff;
	border-radius: 50px;
	letter-spacing: 0.2em;
	margin: 0 5px;
	padding: 11px 19px;
	text-transform: uppercase;
}

@media (max-width: 991px) {
	.tags-button a {
		padding: 6px;
	}
}

.tags-button a:hover {
	background-color: #ff497c;
	color: #fff;
}

.white-button {
	bottom: -40px;
	display: block;
	margin-bottom: 20px;
	position: relative;
}

@media (max-width: 991px) {
	.white-button {
		margin-bottom: 3px;
	}
}

.white-button .white-btn {
	background-color: #fff;
	border: none;
	box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
	color: #1f2732;
	padding: 30px 61px;
}

.white-button .white-btn:hover {
	background-color: var(--theme-color);
	color: var(--theme-menu-text-color);
}

.gallery-carousel .filters {
	padding-top: 45px;
}

.gallery-carousel .filters a {
	margin: 0 14px;
	padding: 0;

}

.gallery-carousel .filters a:hover {
	color: var(--theme-color);

}

@media (max-width: 991px) {
	.gallery-carousel .owl-theme .owl-nav {
		top: 30%;
	}
}

.gallery-carousel.main-gallery .owl-theme .owl-nav {
	top: 40%;
}

@media (max-width: 991px) {
	.gallery-carousel.main-gallery .owl-theme .owl-nav {
		top: 36%;
	}
}

.gallery-carousel.main-gallery .pink-line {
	margin-bottom: 4px;
}

@media (min-width: 768px) and (max-width: 991px) {
	.gallery-carousel.main-gallery .pink-line {
		margin: 0 0 5px -9px;
	}
}

@media (max-width: 767px) {
	.gallery-carousel.main-gallery .filters {
		display: none;
	}
}

@media (max-width: 991px) {
	.gallery-carousel.main-gallery .filters {
		padding-top: 30px;
	}
}

@media (min-width: 768px) and (max-width: 991px) {
	.gallery-carousel.main-gallery .filters a {
		margin: 0 6px;
		padding: 0;
	}
}

.vertical-item.gallery-padding .item-content {
	padding: 53px 57px 57px;
}

@media (max-width: 767px) {
	.vertical-item.gallery-padding .item-content {
		padding: 30px 20px;
	}
}

.vertical-item.gallery-padding .item-content h6 {
	margin-bottom: 23px;
}

.vertical-item.gallery-padding .item-content .social-icons {
	margin-top: 30px;
}

.faq1 {
	margin-top: 3px;
}

.faq1 .card .card-body ul.list1 {
	margin: 17px 0 21px;
}

.faq1 .card .card-body ul.list1 li {
	padding: 5px 0 0px 5px;
}

/* .faq1-icon {
	background-image: url("../img/bg_2.jpg");
} */

.faq1-icon.s-overlay.ls:before {
	opacity: 0.7;
}

@media (min-width: 1600px) {
	.faq1-icon.s-overlay.ls:before {
		display: none;
	}
}

.faq2 p.text-normal {
	font-weight: 600;
}

.faq2 .tab-content {
	padding: 30px 61px 29px;
}

@media (max-width: 767px) {
	.faq2 .tab-content {
		padding: 10px 27px;
	}
}

.faq2 .tab-content [role="tablist"] .card-body {
	padding: 0;
}

.faq2 .tab-content [data-toggle="collapse"] {
	margin-bottom: 0;
}

.faq2 .tab-content .tab-block {
	margin-bottom: 20px;
}

@media (max-width: 767px) {
	.faq2 .nav {
		display: block;
	}
}

.faq3 .form-control::-webkit-input-placeholder {
	text-align: left;
}

.faq3 .panel-title > a {
	border-top: 1px solid #dedfe1;
	color: #1f2732;
	display: block;
	font-weight: 500;
	line-height: 1;
	margin: -2px;
	padding: 22px 25px 22px 0px;
	word-wrap: break-word;
}

.faq3 [role="tablist"] .card-body {
	margin-bottom: 23px;
	margin-top: 0;
	padding: 0;
}

.faq3 [data-toggle="collapse"]:after {
	font-weight: 900;
	line-height: 60px;
	right: 0;
	text-align: right;
}

.faq3 form button.btn {
	padding: 26px 53px;
}

.faq3 .header-title h4 {
	margin-bottom: 40px;
}

@media (max-width: 767px) {
	.faq3 .header-title h4 {
		margin-bottom: 15px;
	}
}

.faq3 .header-title h4.next {
	margin-left: 0;
	margin-top: 57px;
}

@media (max-width: 767px) {
	.faq3 .header-title h4.next {
		margin-top: 35px;
	}
}

.faq3 .form-group {
	margin-bottom: 19px;
}

.faq3 .form-control {
	text-align: left;
}

h4.margin {
	margin-bottom: 35px;
}

@media (max-width: 991px) {
	h4.margin {
		margin: 35px 0 7px;
	}
}

.gallery-pagination .pagination {
	margin-top: 30px;
}

@media (max-width: 991px) {
	.gallery-pagination .pagination {
		margin-bottom: 30px;
		margin-top: 20px;
	}
}

.gallery-cols .pagination {
	margin-top: 50px;
}

@media (max-width: 991px) {
	.gallery-cols .pagination {
		margin-bottom: 30px;
		margin-top: 20px;
	}
}

.gallery-fullwidth .pagination {
	margin-top: 50px;
}

@media (max-width: 991px) {
	.gallery-fullwidth .pagination {
		margin-bottom: 30px;
		margin-top: 20px;
	}
}

.gallery-fullwidth .filters {
	display: block;
	padding-top: 30px;
}

.gallery-fullwidth .filters a {
	padding: 20px;
}

.vertical-item.gallery-excerpt-padding .item-content {
	padding: 50px 61px 60px;
}

.vertical-item.gallery-excerpt-padding .item-content h6 {
	margin-bottom: 7px;
}

.vertical-item.gallery-excerpt-padding .item-content .small-text.link-a {
	margin-bottom: 13px;
}

.gallery-excerpt .gallery-filters a {
	background-color: #f4f4f5;
	border-radius: 50px;
}

.gallery-excerpt .gallery-filters a:hover {
	background-color: #ff497c;
	color: #fff;
}

.gallery-excerpt .filters .active {
	background-color: var(--theme-color);
	color: var(--theme-menu-text-color);
}

.gallery-excerpt .filters a {
	line-height: 3em;
	padding: 0 20px;
}

.gallery-excerpt .filters.gallery-filters {
	padding-bottom: 60px;
}

.gallery-excerpt.gallery-fullwidth-excerpt .filters {
	-webkit-box-pack: justify;
	display: block;
	-ms-flex-pack: justify;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;
	justify-content: space-between;
	padding-top: 30px;
}

.gallery-excerpt.gallery-fullwidth-excerpt .filters a {
	margin-left: 10px;
	padding: 11px 23px;
}

.gallery-btn a.btn.btn-maincolor {
	padding: 26px 66px;
}

.gallery-btn a.btn.btn-maincolor:hover {
	background-color: #fff;
	color: #ff497c;
}

.gallery-title .vertical-item .item-media + .item-content {
	padding-bottom: 36px;
	padding-top: 31px;
}

.gallery-title .vertical-item .item-media + .item-content h6 {
	margin-bottom: 7px;
}

.gallery-title.gallery-fullwidth-title .filters {
	display: block;
}

.gallery-title.gallery-fullwidth-title .filters a {
	padding: 26px;
}

.gallery-tiled .vertical-item.content-absolute .item-content {
	top: 50%;
}

.gallery-tiled .vertical-item.content-absolute .item-content h6 a {
	color: #1f2732;
}

.gallery-tiled .vertical-item.content-absolute .item-content h6 a:hover {
	color: var(--theme-color);
}

.gallery-tiled .vertical-item.content-absolute .item-content h6 a.tags {
	color: #ff497c;
}

.gallery-tiled .vertical-item.content-absolute .item-content h6 a.tags:hover {
	color: #1f2732;
}

.gallery-tiled .vertical-item.content-absolute .item-content.small {
	top: 10%;
}

.gallery-tiled .vertical-item.content-absolute .item-content.big {
	margin: 0;
}

.gallery-tiled .filters {
	display: block;
}

.gallery-tiled .filters a {
	margin-left: 30px;
	padding: 5px;
}

.gallery-list img {
	max-height: 515px;
}

.gallery-list .item-content {
	padding-top: 53px;
}

@media (max-width: 767px) {
	.gallery-list .item-content {
		padding: 0 30px;
	}
}

@media (min-width: 768px) and (max-width: 1199px) {
	.gallery-list .item-content {
		padding: 0;
	}
}

.gallery-list .item-content h6 {
	margin-bottom: 13px;
}

.gallery-list .item-content .link-a {
	margin-bottom: 17px;
}

.gallery-list .item-content .btn {
	margin-top: 27px;
}

.gallery-list nav {
	margin-left: 30px;
}

.gallery-list .pagination {
	margin-top: 30px;
}

@media (max-width: 1199px) {
	.gallery-list .pagination {
		margin-bottom: 60px;
		margin-top: 0;
	}
}

.gallery-item .post-nav .nav-links > div {
	padding: 80px;
	width: 49.1%;
}

@media (max-width: 1199px) {
	.gallery-item .post-nav .nav-links > div {
		margin: 10px 0 0 0;
		width: 100%;
	}
}

.gallery-item3 {
	background-color: transparent;
	margin-top: -60px;
}

.gallery-item3 .item-content h4 {
	margin-bottom: 27px;
}

@media (max-width: 767px) {
	.gallery-item3 .item-content h4 {
		margin-bottom: 5px;
	}
}

@media (max-width: 767px) {
	.gallery-item3 .item-content h4.last {
		margin-top: 30px;
	}
}

.gallery-item3 a.btn.btn-maincolor {
	padding-right: 48px;
}

.gallery-item3 a.btn.btn-maincolor:hover {
	background-color: #fff;
	color: #ff497c;
}

@media (max-width: 1199px) {
	.gallery-item3 .owl-theme .owl-nav {
		top: 30%;
	}
}

.gallery-item2 .vertical-item .item-media + .item-content {
	padding-top: 30px;
}

.gallery-item2 .vertical-item .item-media + .item-content p.excerpt {
	font-weight: 300;
	margin-bottom: 14px;
}

.gallery-item2 .social-icon {
	margin-top: 40px;
}

.gallery-item2 .social-icon a {
	margin: 0;
	padding: 11px 46px;
}

.gallery-item2 .table td:first-child {
	color: #1f2732;
	font-weight: 500;
}

.gallery-item2 td.tags a {
	color: #ff497c;
}

.gallery-item2 td.tags a:hover {
	color: #1f2732;
}

.gallery-item2 aside > * + * {
	margin-top: 55px;
}

.gallery-item2 .widget_service h6 {
	margin-bottom: 15px;
}

.gallery-item2 .list1 li {
	font-weight: 300;
	padding: 3px 0 3px 0px;
}

.gallery-item2 .list1 li:before {
	padding-right: 7px;
}

.gallery-item2 .widget_tags {
	margin-top: 37px;
}

.gallery-item2 .widget_tags h6 {
	margin-bottom: 34px;
}

.gallery-item2 .widget_tags a {
	color: #1f2732;
}

.gallery-item2 .widget_tags a:hover {
	color: #fff;
}

.gallery-item2 .widget_tags .tags-button a:first-child {
	margin: 0;
}

.gallery-item2 .item-media .owl-theme .owl-dots {
	bottom: 53px;
}

.gallery-item2 .owl-carousel .owl-dots .owl-dot span {
	height: 6px;
	width: 6px;
}

.shortcode-team-slider ul li:before {
	display: none;
}

.shortcode-team-slider .menu_item {
	color: #1f2732 !important;
	cursor: pointer;
	display: block;
	font-size: 54px;
	font-weight: 500;
	line-height: 1;
	margin-bottom: 15px;
	opacity: 0.3;
	outline: none;
	text-decoration: none;
	-webkit-transition: all 0.2s ease-in-out 0s;
	transition: all 0.2s ease-in-out 0s;
}

@media (min-width: 1200px) and (max-width: 1600px) {
	.shortcode-team-slider .menu_item {
		font-size: 40px;
	}
}

.shortcode-team-slider .menu_item:hover,
.shortcode-team-slider .menu_item:focus {
	opacity: 1;
}

.shortcode-team-slider .menu_item span {
	color: var(--theme-color);
}

.shortcode-team-slider .menu_item span.position:after {
	color: var(--theme-color);
	content: " / ";
	opacity: 0.1 !important;
}

.shortcode-team-slider .menu_item.flex-active,
.shortcode-team-slider .menu_item :hover,
.shortcode-team-slider .menu_item :focus {
	opacity: 1;
}

.shortcode-team-slider .slider-title {
	color: var(--theme-color);
	display: block;
	font-size: 300px;
	font-weight: 600;
	left: -272px;
	margin-bottom: 0;
	margin-top: 0;
	opacity: 0.1;
	position: absolute;
	text-transform: lowercase;
	top: 52%;
	-ms-transform: translateY(-58%) rotate(-90deg);
	-webkit-transform: translateY(-58%) rotate(-90deg);
	transform: translateY(-58%) rotate(-90deg);
	word-break: unset;
	z-index: 4;
}

@media (max-width: 1199px) {
	.shortcode-team-slider .slider-title {
		display: none !important;
	}
}

@media (max-width: 1600px) {
	.shortcode-team-slider .slider-title {
		font-size: 200px;
		left: -150px;
	}
}

.shortcode-team-slider .flexslider-controls {
	left: 10%;
	position: absolute;
	right: 0;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
	width: auto;
	z-index: 4;
}

@media (min-width: 1200px) {
	.shortcode-team-slider .flexslider-controls {
		left: 17%;
	}
}

.shortcode-team-slider.main-team .slider-title {
	top: 47%;
}

.shortcode-team-slider.main-team .flexslider-controls {
	left: 17%;
	top: 48%;
}

@media (max-width: 767px) {
	.shortcode-team-slider.main-team .flexslider-controls {
		left: 0;
		top: 0;
	}
}

@media (min-width: 768px) and (max-width: 1199px) {
	.shortcode-team-slider.main-team .flexslider-controls {
		left: 6%;
	}
}

.shortcode-team-slider .team-social-icons {
	position: absolute;
	right: 80px;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
	-webkit-transition: all 0.2s ease-in-out 0s;
	transition: all 0.2s ease-in-out 0s;
	width: 60px;
}

@media (max-width: 767px) {
	.shortcode-team-slider .team-social-icons {
		display: none;
	}
}

@media (max-width: 1199px) {
	.shortcode-team-slider .team-social-icons {
		right: 10px;
	}
}

.shortcode-team-slider .team-social-icons a.color-icon.border-icon.rounded-icon {
	border: 4px solid rgba(31, 39, 50, 0.1);
}

@media (max-width: 1600px) {
	.shortcode-team-slider .team-social-icons a.color-icon.border-icon.rounded-icon {
		border: 3px solid rgba(31, 39, 50, 0.1);
		margin-bottom: 5px;
	}
}

.shortcode-team-slider .team-social-icons a {
	display: inline-block;
	margin-bottom: 0;
	margin-left: 0;
}

.shortcode-team-slider .team-social-icons a.border-icon:before,
.shortcode-team-slider .team-social-icons a.bg-icon:before,
.shortcode-team-slider .team-social-icons a.color-bg-icon:before {
	height: 50px;
	line-height: 50px;
	width: 50px;
}

@media (max-width: 1199px) {
	.shortcode-team-slider .team-social-icons a.border-icon:before,
	.shortcode-team-slider .team-social-icons a.bg-icon:before,
	.shortcode-team-slider .team-social-icons a.color-bg-icon:before {
		height: 40px;
		line-height: 40px;
		width: 40px;
	}
}

@media (max-width: 767px) {
	.shortcode-team-slider .flexslider .slides img {
		position: relative;
		right: 87px;
	}
}

@media (max-width: 767px) {
	.shortcode-team-slider .flexslider-controls {
		left: 0;
		padding: 25px 15px;
		position: relative;
		right: 0;
		top: auto;
		-webkit-transform: none;
		-ms-transform: none;
		transform: none;
		width: 100%;
	}
}

@media (max-width: 767px) {
	.shortcode-team-slider .menu_item {
		font-size: 19px;
		text-align: center;
	}
}

@media (min-width: 768px) and (max-width: 1199px) {
	.shortcode-team-slider .menu_item {
		font-size: 30px;
		text-align: left;
	}
}

@media (max-width: 992px) {
	.shortcode-team-slider ul {
		padding-left: 10px;
	}
}

@media (max-width: 992px) {
	.shortcode-team-slider ul {
		padding-left: 10px;
	}
}

@media (min-width: 768px) {
	.about-main .offset-md-3 {
		margin-left: 20.9%;
	}
}

.about-main .main-content h1 {
	font-size: 54px;
	margin-bottom: 25px;
}

@media (max-width: 1199px) {
	.about-main .main-content h1 {
		font-size: 37px;
		margin-bottom: 15px;
		margin-top: -5px;
	}
}

.about-main p {
	font-size: 20px;
}

@media (max-width: 767px) {
	.about-main p {
		font-size: 16px;
		margin-bottom: 20px;
	}
}

.serices-main .icon-box h6 {
	font-weight: 500;
	margin: 25px 0 32px;
}

.serices-main .icon-box p {
	border-top: 1px solid #dee2e6;
	margin: 0;
	padding: 15px 0;
}

.serices-main .icon-box.box-shadow {
	padding: 60px 30px 34px;
}

@media (max-width: 991px) {
	.gallery-carousel.main-gallery.layout-2 {
		margin-top: 13px;
	}
}

.gallery-carousel.main-gallery.layout-2 .filters {
	padding-bottom: 10px;
	padding-top: 0;
}

@media (max-width: 1199px) {
	.gallery-carousel.main-gallery.layout-2 .filters {
		padding-bottom: 25px;
	}
}

.process-part.layout-2 {
	background: none;
}

.process-part.layout-2 .step-center-part img {
	border: 10px solid rgba(31, 39, 50, 0.05);
	border-radius: 50%;
	max-width: 190px;
}

.process-part.layout-2 h2.step-title {
	font-size: 24px;
	margin-right: -7px;
	margin-top: 24px;
}

.process-part.layout-2 h1.step-title {
	font-size: 120px;
	font-weight: 600;
	letter-spacing: -12px;
	width: 100%;
}

.process-part.layout-2 .step-right-part {
	left: -19%;
	position: relative;
}

@media (max-width: 991px) {
	.process-part.layout-2 .step-right-part {
		left: 0%;
	}
}

.process-part.layout-2 .step-right-part .step-text {
	margin: 0;
}

.process-part.layout-2 .step-left-part {
	left: 16%;
	position: relative;
	top: 13px;
}

@media (max-width: 991px) {
	.process-part.layout-2 .step-left-part {
		left: 0%;
	}
}

.process-part.layout-2 .right .step-left-part {
	left: -11%;
	margin: 0;
}

@media (max-width: 991px) {
	.process-part.layout-2 .right .step-left-part {
		left: 0%;
	}
}

.process-part.layout-2 .right .step-left-part h1.step-title {
	letter-spacing: -8px;
}

.process-part.layout-2 .right .step-left-part h2.step-title {
	margin-left: -23px;
}

.process-part.layout-2 .right .step-right-part {
	left: 21%;
	position: relative;
}

@media (max-width: 991px) {
	.process-part.layout-2 .right .step-right-part {
		left: 0%;
	}
}

.process-part.layout-2 .right .step-right-part .step-text {
	margin: 0;
}

.process-part.layout-2 .part3 h1.step-title {
	letter-spacing: -9px;
}

@media (max-width: 991px) {
	.process-part.layout-2 .part3 h1.step-title {
		margin-top: 40px;
	}
}

@media (max-width: 991px) {
	.process-part.layout-2 .step-title {
		margin-top: 65px;
	}
}

.about-home h5 {
	font-size: 31px;
	line-height: 34px;
	margin-bottom: 25px;
	margin-top: 0;
	padding: 0 80px;
}

@media (max-width: 1199px) {
	.about-home h5 {
		font-size: 26px;
		line-height: 25px;
		margin-bottom: 23px;
		padding: 0;
	}
}

.about-home p strong {
	color: #1f2732;
}

.testimonials-sliders.layout-2 {
	background-transform: rotate(3deg);
}

.testimonials-sliders.layout-2 .quote-item {
	max-width: 96%;
}

.testimonials-sliders.layout-2 .quote-item .small-text.author-job {
	font-weight: 700;
}

.testimonials-sliders.layout-2 .quote-item h6 {
	line-height: 25px;
	margin-bottom: 28px;
}

.testimonials-sliders.layout-2 .quote-item h6 span {
	font-weight: 200;
}

.testimonials-sliders.layout-2 .quote-item i {
	color: #353b44;
	font-size: 30px;
	position: absolute;
}

.testimonials-sliders.layout-2 .quote-item i:first-child {
	left: 30px;
	opacity: 0, 5;
}

.testimonials-sliders.layout-2 .quote-item i:last-child {
	right: 36px;
	top: 86px;
}

.testimonials-sliders.layout-2 .owl-theme .owl-dots {
	margin-top: 48px;
}

@media (max-width: 1600px) {
	.testimonials-sliders.layout-2 .owl-theme .owl-dots {
		margin-bottom: 20px;
		margin-top: 5px;
	}
}

.testimonials-sliders.layout-2 .owl-theme .owl-dots .owl-dot span {
	height: 6px;
	width: 6px;
}

.testimonials-sliders.layout-2 .big {
	line-height: 26px;
}

.testimonials-sliders.layout-2 .testimonials.owl-theme .owl-dots {
	line-height: 1;
	margin-top: 5px;
}

.testimonials-sliders.layout-2 .author-name:after,
.testimonials-sliders.layout-2 .author-name:before {
	color: #fff;
	content: "”";
	display: block;
	font-family: "Vidaloka", sans-serif;
	font-size: 100px;
	font-style: normal;
	height: 28px;
	line-height: 0.8;
	margin-top: 0;
	opacity: 0.1;
	position: absolute;
	right: 15%;
	top: 27%;
}

.testimonials-sliders.layout-2 .author-name:before {
	left: 9%;
	right: auto;
	top: 25%;
	-webkit-transform: rotate(180deg);
	-ms-transform: rotate(180deg);
	transform: rotate(180deg);
}

.btn-book-section {
	position: relative;
	top: -40px;
	z-index: 9;
}

@media (max-width: 767px) {
	.btn-book-section {
		top: -40px;
	}
}

.text-section {
	margin-bottom: -39px;
	overflow: visible !important;
}

@media (max-width: 767px) {
	.text-section {
		margin-bottom: 15px;
	}
}

@media (min-width: 768px) and (max-width: 1199px) {
	.text-section {
		margin-bottom: -30px;
	}
}

.text-section .content h1 {
	line-height: 50px;
	margin-bottom: 24px;
}

@media (max-width: 767px) {
	.text-section .content h1 {
		font-size: 25px;
		line-height: 30px;
		margin-bottom: 15px;
	}
}

.text-section .img-wrap {
	position: relative;
	top: 10px;
	z-index: 9;
}

.faq-form button.btn {
	padding: 26px 40px;
}

.faq-form .form-header {
	margin: 27px 0 34px;
}

@media (max-width: 767px) {
	.faq-form .form-header {
		margin: 14px 0 6px;
	}
}

.faq-contact-icon {
	background-image: url("../images/map_light.jpg");
}

.faq-contact-icon .box-icon {
	background-color: #fff;
	padding: 60px 70px 57px;
}

.faq-contact-icon .box-icon .teaser-icon img {
	margin: 0 0 20px;
}

.faq-contact-icon .box-icon h6 {
	margin-bottom: 10px;
}

.faq-contact-icon .box-icon strong {
	color: #1f2732;
}

.page_footer.corner-footer:before {
	background-attachment: fixed;
	background-color: #1f2732;
	background-image: url("../img/texture_dark.jpg");
	background-repeat: no-repeat;
	background-size: cover;
	content: "";
	height: 290px;
	left: 0;
	position: absolute;
	top: -30px;
	-webkit-transform: skewY(3deg);
	-ms-transform: skewY(3deg);
	transform: skewY(3deg);
	width: 50%;
}

.page_footer.corner-footer:after {
	background-attachment: fixed;
	background-color: #1f2732;
	background-image: url("../img/texture_dark.jpg");
	background-repeat: no-repeat;
	background-size: cover;
	content: "";
	height: 290px;
	opacity: 1;
	position: absolute;
	right: 0;
	top: -30px;
	-webkit-transform: skewY(-3deg);
	-ms-transform: skewY(-3deg);
	transform: skewY(-3deg);
	width: 50%;
}

.page_title.corner-title:before {
	background-image: url("{{ asset('frontend_assets/img/breadcrumbs.jpg') }}");
	bottom: 30px;
	content: "";
	height: 250px;
	left: 0;
	position: absolute;
	-webkit-transform: skewY(3deg);
	-ms-transform: skewY(3deg);
	transform: skewY(3deg);
	width: 50%;
	z-index: 0;
}

.page_title.corner-title:after {
	background-image: url("{{ asset('frontend_assets/img/breadcrumbs.jpg') }}");
	bottom: 30px;
	content: "";
	height: 250px;
	position: absolute;
	right: 0;
	-webkit-transform: skewY(-3deg);
	-ms-transform: skewY(-3deg);
	transform: skewY(-3deg);
	width: 50%;
	z-index: -1;
}

.ls.invise {
	background-color: transparent;
}

.service-singe2 .apsc-theme-4 .apsc-each-profile a {
	padding: 18px 97px;
}

.service-singe2 .apsc-theme-4 .apsc-each-profile a .fa {
	align-items: center;
	border-right: 0;
	bottom: 0;
	-webkit-box-align: center;
	-webkit-box-pack: center;
	display: block;
	-ms-flex-align: center;
	-ms-flex-pack: center;
	font-size: 16px;
	justify-content: center;
	left: 0;
	position: relative;
	top: 0;
	-webkit-transform: none;
	-ms-transform: none;
	transform: none;
	-webkit-transition: all 0.5s ease-in-out;
	transition: all 0.5s ease-in-out;
	width: 0;
}

.service-singe2 .icon-box.single {
	padding: 55px 57px 51px;
}

@media (max-width: 767px) {
	.service-singe2 .icon-box.single {
		padding: 30px;
	}
}

.service-singe2 .testimonials-item {
	padding: 0;
}

.service-singe2 .testimonials-item img {
	margin-right: 0;
}

@media (max-width: 767px) {
	.service-singe2 .owl-theme .owl-nav {
		top: 37%;
	}
}

.service-single-testimonials .owl-carousel .owl-dots .owl-dot span {
	background-color:var(--theme-color);
	border: 1px solid var(--theme-color);
}

.service-single-testimonials .owl-carousel .owl-dots .owl-dot.active span,
.service-single-testimonials .owl-carousel .owl-dots .owl-carousel .owl-dots .owl-dot:hover span {
	background-color: var(--theme-color);
	border-color: var(--theme-color);
	opacity: 1;
}

.service-full {
	margin-top: -60px;
}

@media (max-width: 991px) {
	.service-full {
		margin-top: -35px;
	}
}

.comingsoon {
	background-image: url("../img/comingsoon.jpg");
	margin-top: -60px;
}

.comingsoon .content-soon {
	margin-top: 100px;
	max-height: 500px;
}

@media (min-width: 1600px) {
	.comingsoon.s-overlay.ls:before {
		display: none;
	}
}

.about h5 {
	font-weight: 300;
	line-height: 36px;
}

.about-icon.teaser-contact-icon h6 {
	margin: 20px 0 16px;
}

@media (max-width: 767px) {
	.about-icon.teaser-contact-icon h6 {
		margin: 10px 0 0;
	}
}

.about-icon .icon-content {
	padding: 0 15px 0;
}

.video-post-section {
	position: relative;
}

@media (max-width: 991px) {
	.video-post-section .small-line {
		margin-bottom: 60px;
		margin-top: 10px;
	}
}

.video-post-section .left-part {
	padding-right: 0;
}

.video-post-section .video-media {
	position: relative;
}

.video-post-section .video-media:before {
	border: 11px solid #f4f4f5;
	bottom: -28px;
	content: "";
	height: 100%;
	left: -28px;
	position: absolute;
	width: calc(100% - 40px);
}

@media (max-width: 991px) {
	.video-post-section .video-media:before {
		display: none;
	}
}

.video-post-section .video-media img {
	position: relative;
	z-index: 2;
}

.video-post-section .video-content {
	padding: 76px 0 0 0;
}

@media (max-width: 1199px) {
	.video-post-section .video-content {
		padding: 0;
		text-align: center;
	}
}

.video-post-section .video-content h1 {
	left: -99px;
	line-height: 50px;
	margin-bottom: 44px;
	position: relative;
	z-index: 3;
}

@media (max-width: 1199px) {
	.video-post-section .video-content h1 {
		font-size: 27px;
		left: 0;
		margin: 5px 0 0;
		text-align: center;
	}
}

.video-post-section .video-content a {
	left: -99px;
	margin-top: 40px;
	position: relative;
	z-index: 3;
}

@media (max-width: 1199px) {
	.video-post-section .video-content a {
		left: 0;
		margin: 20px 0 60px;
		text-align: center;
	}
}

.video-post-section iframe:hover {
	z-index: 4;
}

.video-post-section .embed-responsive-3by2 {
	padding-bottom: 63.666%;
}

.video-post-section .embed-responsive {
	width: 96%;
}

@media (max-width: 1199px) {
	.video-post-section .embed-responsive {
		width: 100%;
	}
}

.video-post-section .left-part .video-media:before {
	left: 35px;
}

.video-post-section .left-part .video-content {
	padding: 74px 0 0 0;
}

@media (max-width: 1199px) {
	.video-post-section .left-part .video-content {
		padding: 0;
	}
}

.video-post-section .left-part .video-content h1 {
	left: -3px;
}

.video-post-section .left-part .video-content a {
	left: 0;
}

.video-post-section .left-part .video-media {
	right: -49px;
}

@media (max-width: 1199px) {
	.video-post-section .left-part .video-media {
		right: 0;
	}
}

.big-margin {
	margin-bottom: 60px;
}

@media (max-width: 1199px) {
	.big-margin {
		margin-bottom: 20px;
	}
}

.blog-entep {
	background-image: url("../img/texture_2.png");
	margin-top: -50px;
}

@media (max-width: 1199px) {
	.page_slider.layout-2 {
		margin-top: -20px;
	}
}

.page_slider.layout-2 .shortcode-team-slider .slider-title {
	color: #ff497c;
	display: block;
	font-size: 240px;
	font-weight: 600;
	left: -197px;
	letter-spacing: -4px;
	margin-bottom: 0;
	margin-top: 0;
	opacity: 0.1;
	position: absolute;
	text-transform: lowercase;
	top: 55%;
	-ms-transform: translateY(-58%) rotate(-90deg);
	-webkit-transform: translateY(-58%) rotate(-90deg);
	transform: translateY(-58%) rotate(-90deg);
	word-break: unset;
	z-index: 4;
}

@media (max-width: 1600px) {
	.page_slider.layout-2 .shortcode-team-slider .slider-title {
		font-size: 200px;
		left: -167px;
	}
}

.contact-form-light input[type="text"],
.contact-form-light input[type="email"],
.contact-form-light input[type="url"],
.contact-form-light input[type="password"],
.contact-form-light input[type="search"],
.contact-form-light input[type="tel"],
.contact-form-light input[type="number"],
.contact-form-light textarea,
.contact-form-light select,
.contact-form-light .form-control {
	background-color: transparent;
	border-color: transparent;
	border-radius: 0;
	box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
	color: #7f7f7f;
	font-weight: bold;
	font-weight: 600;
	height: 60px;
	letter-spacing: 0.1em;
	text-align: center;
}

.contact-form-light textarea {
	min-height: 120px;
}

.contact-form-light h1 {
	margin-bottom: 25px;
	margin-top: 0;
}

@media (max-width: 1199px) {
	.contact-form-light h1 {
		font-size: 37px;
		line-height: 35px;
	}
}

.contact-form-light p {
	font-size: 20px;
	margin-bottom: 53px;
}

@media (max-width: 1199px) {
	.contact-form-light p {
		margin-bottom: 40px;
	}
}

.contact-form-light .btn {
	padding: 26px 52px;
}

.page_footer.bordered-footer {
	border-radius: 60vw / 5vw;
	margin: 0 -100px;
}

@media (max-width: 767px) {
	.page_footer.bordered-footer {
		margin: 0;
	}
}

.page_footer.bordered-footer.bottom-none {
	border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
}

.page_footer.bordered-footer .widget .widget-title {
	font-size: 30px;
	font-weight: 500;
	line-height: 1;
	margin-bottom: 27px;
}

.page_footer.bordered-footer .blog-footer p {
	line-height: 25px;
	margin-bottom: 3px;
}

.page_footer.bordered-footer .blog-footer a {
	color: #ff497c;
}

.page_footer.bordered-footer .blog-footer a:hover {
	color: #fff;
}

.page_footer.bordered-footer .footer_logo img {
	left: 40%;
	margin-top: -90px;
	position: absolute;
}

@media (max-width: 767px) {
	.page_footer.bordered-footer .footer_logo img {
		left: 45%;
		margin-bottom: 10px;
		margin-top: 0;
		position: static;
	}
}

@media (min-width: 768px) and (max-width: 991px) {
	.page_footer.bordered-footer .footer_logo img {
		left: 34%;
	}
}

.page_footer.bordered-footer h3.name {
	margin-top: 0;
}

.page_footer.bordered-footer h3.name span {
	font-weight: 200;
}

.page_footer.bordered-footer li p {
	color: #fff;
}

.page_footer.bordered-footer .mailchimp p {
	line-height: 25px;
	margin-bottom: 34px;
	margin-left: -13px;
}

.page_footer.bordered-footer .widget_social_buttons {
	margin-top: 30px;
}

@media (max-width: 767px) {
	.page_footer.bordered-footer .widget_social_buttons {
		margin-top: 15px;
	}
}

.page_footer.bordered-footer .widget_social_buttons a.color-bg-icon:before {
	height: 3em;
	line-height: 3.2em;
	width: 3em;
}

.page_footer.bordered-footer .icon-inline > * {
	margin-right: 6px;
	margin-top: -6px;
}

@media (min-width: 768px) and (max-width: 991px) {
	.page_footer.bordered-footer .icon-inline > * {
		font-size: 12px;
	}
}

.page_footer.bordered-footer .footer-contact p.next {
	line-height: 25px;
	margin: 0 0 16px 0;
}

.page_footer.bordered-footer.layout-2 {
	border-radius: 0;
}

.light-copy p {
	color: #fff;
	font-weight: 700;
}

.page_topline {
	z-index: 3;
}

.load-bottom {
	-webkit-box-pack: center;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-pack: center;
	justify-content: center;
	margin-top: 60px;
}

@media (max-width: 991px) {
	.load-bottom {
		margin-top: 30px;
	}
}

.ds .page-bottom {
	margin-top: 77px;
}

@media (max-width: 991px) {
	.ds .page-bottom {
		margin-bottom: 50px;
		margin-top: 40px;
	}
}

.ds .page-bottom a.btn-maincolor:hover {
	background-color: transparent;
	color: var(--theme-menu-text-color);
}

.ds .page-bottom a.btn-outline-maincolor {
	color: var(--theme-menu-text-color);
}

.ds .page-bottom a.btn-outline-maincolor:hover {
	background-color: var(--theme-color);
}

.video-post {
	margin-top: -60px;
}

@media (max-width: 767px) {
	.video-post {
		margin-top: -25px;
	}
}

.page-item.active .page-link {
	border-color: #1f2732;
}

.event-single .media-item img {
	max-width: 105%;
}

@media (max-width: 767px) {
	.event-single .media-item img {
		max-width: 100%;
	}
}

.event-single .entry-meta {
	margin-bottom: 19px;
	margin-top: -2px;
}

.event-single .excerpt {
	font-weight: 500;
	margin-bottom: 25px;
}

.event-single .list1 {
	margin-bottom: 12px;
	margin-top: 16px;
}

.event-single .list1 li {
	padding: 4px 0 3px 0px;
}

.event-single .item-meta span {
	padding: 0 5px;
}

.event-single .item-meta i {
	margin-left: 25px;
}

@media (max-width: 767px) {
	.event-single .item-meta i {
		margin-left: 10px;
	}
}

.event-single .item-meta i:first-child {
	margin: 0;
}

.sidebar-event .owl-carousel {
	margin-top: 50px;
}

.sidebar-event .owl-theme .owl-nav {
	position: absolute;
	top: 38%;
}

@media (max-width: 991px) {
	.sidebar-event aside {
		margin: 10px auto 60px;
		max-width: 370px;
	}
}

@media (max-width: 767px) {
	.teaser-contact-icon.main-icon .teaser-icon img {
		margin-top: 40px;
	}
}

.blog-owl {
	background-image: url("../img/texture_2.png");
	margin-bottom: 30px;
	margin-left: -45px;
	margin-right: -135px;
	margin-top: -45px;
	-webkit-transform: rotate(-3deg);
	-ms-transform: rotate(-3deg);
	transform: rotate(-3deg);
}

@media (max-width: 1199px) {
	.blog-owl {
		margin: 0;
		-webkit-transform: none;
		-ms-transform: none;
		transform: none;
	}
}

.blog-owl .container-fluid {
	-webkit-transform: rotate(3deg);
	-ms-transform: rotate(3deg);
	transform: rotate(3deg);
}

@media (max-width: 1199px) {
	.blog-owl .container-fluid {
		-webkit-transform: none;
		-ms-transform: none;
		transform: none;
	}
}

.blog-owl .offset-lg-2 {
	margin-left: 19%;
}

@media (max-width: 991px) {
	.blog-owl .offset-lg-2 {
		margin: 0;
	}
}

.blog-owl .owl-nav.disabled {
	display: block;
}

.blog-owl .top-right-nav .owl-nav {
	top: 46%;
}

@media (max-width: 991px) {
	.blog-owl .top-right-nav .owl-nav {
		top: -12%;
	}
}

.blog-owl .top-right-nav .owl-nav .owl-prev {
	left: -20%;
	right: auto;
}

@media (max-width: 991px) {
	.blog-owl .top-right-nav .owl-nav .owl-prev {
		left: 0;
	}
}

.blog-owl .top-right-nav .owl-nav .owl-next {
	left: auto;
	right: -18%;
}

@media (max-width: 767px) {
	.blog-owl .top-right-nav .owl-nav .owl-next {
		right: 5%;
	}
}

@media (min-width: 768px) and (max-width: 991px) {
	.blog-owl .top-right-nav .owl-nav .owl-next {
		right: 3%;
	}
}

.blog-owl .top-right-nav .owl-nav > div {
	color: #1f2732;
	font-size: 40px;
	font-weight: 800;
	letter-spacing: 0;
	line-height: 30px;
	opacity: 0.1;
	text-transform: uppercase;
}

.blog-owl .top-right-nav .owl-nav > div:hover {
	color: #ff497c;
	opacity: 1;
}

.blog-owl .vertical-item.content-padding.padding-small .item-content .post-author {
	margin-top: 44px;
}

.blog-owl .item-media img {
	height: 350px;
}

@media (max-width: 991px) {
	.blog-owl .item-media img {
		height: 100%;
	}
}

.slide-social-icons {
	position: absolute;
	right: 0%;
	top: 43.1%;
}

@media (max-width: 767px) {
	.slide-social-icons {
		display: none;
	}
}

@media (min-width: 768px) and (max-width: 991px) {
	.slide-social-icons {
		top: 23%;
	}
}

.slide-social-icons a[class*='fa-']:before {
	font-size: 18px;
	padding: 20px 5px;
	width: 31px;
}

.slide-social-icons a {
	border-bottom: 2px solid rgba(255, 255, 255, 0.1);
}

.slide-social-icons a.last {
	border-bottom: 0;
}

.header_text {
	color: #fff;
}

@media (min-width: 1200px) {
	.page_header .main-toggle .toggle_menu {
		display: block;
	}
}

.page_header_side.main-toggler .ds .toggle_menu_side {
	background-color: transparent;
	right: 15px;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
	-webkit-transition: .25s ease-in-out;
	transition: .25s ease-in-out;
	z-index: 3;
}

.main-toggle .toggle_menu.mobile-active {
	position: absolute;
	right: -60px;
}

.page_header_side.main-toggle {
	bottom: auto;
	left: 78.7%;
	margin-top: 30px;
	-webkit-transition: all 0.2s linear 0s;
	transition: all 0.2s linear 0s;
	width: auto;
	z-index: 11;
}

@media (max-width: 991px) {
	.page_header_side.main-toggle {
		margin-top: 10px;
	}
}

.page_header_side.main-toggle .header-side-menu {
	text-align: center;
}

.page_header_side.main-toggle .header-side-menu span.toggle_submenu {
	display: none;
}

.page_header_side.main-toggle .menu-click a {
	color: #fff;
	display: inline-block;
	font-size: 16px;
	font-weight: 700;
	letter-spacing: 0.2em;
	line-height: 1.6em;
	padding: 10px 40px;
	text-transform: uppercase;
}

@media (max-width: 991px) {
	.page_header_side.main-toggle .menu-click a {
		font-size: 12px;
		padding: 10px;
	}
}

.page_header_side.main-toggle .active-submenu {
	padding: 5px 0 20px;
}

.page_header_side.main-toggle .widget {
	margin-top: 23px;
}

.page_header_side.main-toggle .widget_icons_list {
	margin-top: 30px;
}

.page_header_side.main-toggle .list-unstyled {
	text-align: center;
}

.page_header_side.main-toggle .social-icons {
	display: block;
	margin-top: 26px;
}

.page_header_side.main-toggle a.logo {
	left: -1.7%;
	margin-bottom: 50px;
	position: relative;
	top: 1px;
}

.page_header_side.main-toggle .scroll-wrapper {
	bottom: 0;
	left: 0;
	opacity: 0;
	position: fixed !important;
	right: 0;
	top: 0;
	-webkit-transform: scaleX(0);
	-ms-transform: scaleX(0);
	transform: scaleX(0);
	-webkit-transition: all 0.3s ease 0s;
	transition: all 0.3s ease 0s;
	z-index: 2;
}

.main-toggle.menu-click a {
	color: #fff1;
	display: -webkit-inline-box;
	display: -ms-inline-flexbox;
	display: inline-flex;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	line-height: 1.6em;
	padding: 10px 40px;
	text-transform: uppercase;
}

.page_header_side.main-toggle.active-slide-side-header .scroll-wrapper {
	background-color: #1f2732;
	opacity: 1;
	-webkit-transform: scaleX(1);
	-ms-transform: scaleX(1);
	transform: scaleX(1);
}

.page_header_side.main-toggle.ds .scroll-wrapper {
	background-color: rgba(31, 39, 50, 0.9);
}

.widget.widget_categories a {
	color: #7f7f7f;
}

.widget.widget_categories a:hover {
	color: #ff497c;
}

.widget.widget_text strong {
	color: #1f2732;
}

.widget.widget_text a {
	color: #ff497c;
}

.widget.widget_text a:hover {
	color: #1f2732;
}

.widget.widget_text .list1 li {
	font-weight: 300;
	padding: 0;
}

.shop-wd .widget_price_filter .price_slider_amount .button {
	display: none;
}

.shop-wd .widget-top-products {
	margin-top: 51px;
}

.apsc-inner-block {
	color: #fff;
}

.copyright-ls p {
	color: #000;
}

.header_absolute.header_transparent .page_header.ds.affix-top {
	border-bottom: 2px solid rgba(255, 255, 255, 0.1);
}

.title-2 ol.breadcrumb li.breadcrumb-item a {
	background-color: #fff;
	border-radius: 50px;
	color: #ff497c;
	padding: 12px 30px;
}

@media (max-width: 767px) {
	.title-2 ol.breadcrumb li.breadcrumb-item a {
		padding: 12px 20px;
	}
}

.title-2 ol.breadcrumb li.breadcrumb-item a:hover {
	color: #1f2732;
}

.title-2 ol.breadcrumb .breadcrumb-item.active {
	background-color: #fff;
	border-radius: 50px;
	margin-left: 5px;
	padding: 12px 30px;
}

@media (max-width: 767px) {
	.title-2 ol.breadcrumb .breadcrumb-item.active {
		padding: 12px 20px;
	}
}

.title-2 .breadcrumb-item + .breadcrumb-item::before {
	display: none;
}

.title-2 h1 {
	font-weight: 600;
}

@media (max-width: 991px) {
	.title-2 h1 {
		margin-bottom: 20px;
	}
}

.title-2 .breadcrumb > li {
	display: inline-block;
	float: none;
	padding: 12px 6px;
}

.title-3 h1 {
	font-weight: 600;
	left: 44%;
	opacity: 0.1;
	position: absolute;
	top: -50%;
}

@media (max-width: 767px) {
	.title-3 h1 {
		font-size: 50px;
		left: 31%;
		top: -86%;
	}
}

@media (min-width: 768px) and (max-width: 991px) {
	.title-3 h1 {
		font-size: 50px;
		left: 40%;
		top: -86%;
	}
}

@media (min-width: 992px) and (max-width: 1199px) {
	.title-3 h1 {
		font-size: 50px;
		left: 42%;
		top: -86%;
	}
}

.title-3 .breadcrumb-item + .breadcrumb-item::before {
	color: #1f2732;
	content: "\f054";
	font-family: FontAwesome;
	font-size: 9px;
	padding: 0 10px;
	position: relative;
	top: 0;
}

.breadcrumb-cs {
	background-color: #ff497c;
	padding: 20px 0;
	text-align: center;
}

.breadcrumb-cs li a {
	color: #fff;
}

.breadcrumb-cs [class*="container"] > .breadcrumb {
	background-color: transparent;
	bottom: 0;
	padding: 0 15px;
	position: static;
	right: 50%;
	text-align: center;
}

.breadcrumb-cs .breadcrumb-item + .breadcrumb-item::before {
	color: #1f2732;
	content: "\f054";
	font-family: FontAwesome;
	font-size: 9px;
	padding: 0 10px;
	position: relative;
	top: 0;
}

.s-parallax.copyright {
	background-repeat: repeat;
}

.dropdown select {
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 0.2em;
	text-transform: uppercase;
}

.bio .author-social {
	margin-bottom: 1px;
}

.process-part {
	background: var(--theme-header-bg) !important;
	background-image: url("{{asset('frontend_assets/images')}}/texture_dark.jpg") !important;
}

.process-part.skew_right {
	margin-left: -100px;
	margin-right: -100px;
	-webkit-transform: rotate(3deg);
	-ms-transform: rotate(3deg);
	transform: rotate(3deg);
	z-index: 5;
}

@media (max-width: 767px) {
	.process-part.skew_right {
		margin: 0;
		-webkit-transform: rotate(0deg);
		-ms-transform: rotate(0deg);
		transform: rotate(0deg);
	}
}

.process-part.skew_right .container {
	-webkit-transform: rotate(-3deg);
	-ms-transform: rotate(-3deg);
	transform: rotate(-3deg);
}

@media (max-width: 767px) {
	.process-part.skew_right .container {
		-webkit-transform: rotate(0deg);
		-ms-transform: rotate(0deg);
		transform: rotate(0deg);
	}
}

.process-part .step-center-part img {
	border: 10px solid rgba(255, 255, 255, 0.1);
	border-radius: 50%;
	max-width: 270px;
}

.process-part .step-title {
	font-size: 54px;
	margin-right: -30px;
}

@media (max-width: 991px) {
	.process-part .step-title {
		font-size: 40px;
		margin-bottom: 10px;
		margin-right: 0;
		margin-top: 20px;
		text-align: center;
	}
}

.process-part .step-title span {
	font-size: 200px;
	font-weight: 600;
	left: -48%;
	letter-spacing: 1px;
	position: absolute;
	top: 1px;
	width: 100%;
	z-index: -1;
}

@media (max-width: 991px) {
	.process-part .step-title span {
		font-size: 80px;
		font-weight: 600;
		left: 0;
		letter-spacing: 5px;
		position: relative;
		top: 1px;
		top: 10px;
		width: 100%;
		z-index: -1;
	}
}

@media (min-width: 992px) and (max-width: 1600px) {
	.process-part .step-title span {
		font-size: 180px;
	}
}

.process-part .step-text {
	margin-left: -30px;
}

@media (max-width: 991px) {
	.process-part .step-text {
		margin: 0;
		text-align: center;
	}
}

.process-part .right .step-title {
	margin-left: -30px;
	margin-right: 0;
}

@media (max-width: 991px) {
	.process-part .right .step-title {
		margin-left: 0;
		margin-top: 40px;
	}
}

.process-part .right .step-title span {
	left: 36%;
	position: absolute;
	top: 1px;
}

@media (max-width: 991px) {
	.process-part .right .step-title span {
		left: 0;
		position: relative;
		top: 1px;
		top: 10px;
	}
}

.process-part .right .step-text {
	margin-left: 0;
	margin-right: -30px;
}

@media (max-width: 991px) {
	.process-part .right .step-text {
		margin: 0;
	}
}

.process-part .right .part4 span {
	left: 32%;
}

@media (max-width: 991px) {
	.process-part .right .part4 span {
		left: 0;
		position: relative;
		top: 1px;
		top: 10px;
	}
}

.process-part .right .step-center-part:after {
	background-image: url("../img/left_arrow.png");
	left: 55px;
	right: auto;
}

@media (max-width: 991px) {
	.process-part .right .step-center-part:after {
		display: none;
	}
}

@media (min-width: 992px) and (max-width: 1199px) {
	.process-part .right .step-center-part:after {
		left: 19px;
	}
}

@media (max-width: 991px) {
	.process-part .part3 {
		margin-top: 40px;
	}
}

.process-part .part3 span {
	left: -34%;
}

@media (max-width: 991px) {
	.process-part .part3 span {
		left: 0;
		position: relative;
		top: 10px;
	}
}

.process-part .step-center-part:after {
	background-image: url("../img/right_arrow.png");
	background-repeat: no-repeat;
	bottom: -97px;
	content: "";
	display: block;
	height: 136px;
	position: absolute;
	right: 55px;
	width: 34px;
	z-index: 4;
}

@media (max-width: 991px) {
	.process-part .step-center-part:after {
		display: none;
	}
}

@media (min-width: 992px) and (max-width: 1199px) {
	.process-part .step-center-part:after {
		right: 19px;
	}
}

/* section.top_white_line_big .container:before {
	background-image: url("{{ asset('frontend_assets') }}/img/white_line_big.png");
	background-repeat: no-repeat;
	content: "";
	display: block;
	height: 134px;
	left: 50%;
	margin-left: -2px;
	position: absolute;
	top: 0;
	width: 4px;
	z-index: 4;
} */

.step-center-part.last:after {
	display: none;
}

.pricing-page .pricing-plan .plan-button a {
	background-color: #fff;
}

.sf-menu > li.sf-logo-li > a:after {
	display: none;
}

.maintenance {
	margin-top: -60px;
}

.tog-ls.ls .toggle_menu:before,
.tog-ls.ls .toggle_menu span {
	color: #1f2732;
}

.tog-ls.ls .toggle_menu {
	background-color: transparent;
}

.toggle-menu-ls .toggle_menu:before,
.toggle-menu-ls .toggle_menu span,
.toggle-menu-ls .toggle_menu span:before,
.toggle-menu-ls .toggle_menu span:after {
	background-color: #fff;
}

.toggle-menu-ls .toggle_menu {
	background-color: transparent;
}

.search-box {
	background: #fff;
	border-radius: 40px;
	height: 60px;
	left: 50%;
	padding: 0 10px;
	position: absolute;
	top: 100%;
	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
}

.search-box i {
	color: #1f2732;
}

.search-box i:hover {
	color: #ff497c;
}

@media (max-width: 991px) {
	.search-box {
		display: none;
	}
}

.search-btn {
	align-items: center;
	background: #fff;
	border-radius: 50%;
	-webkit-box-align: center;
	-webkit-box-pack: center;
	color: #e74c3c;
	display: -webkit-box !important;
	display: flex !important;
	display: -ms-flexbox !important;
	-ms-flex-align: center;
	-ms-flex-pack: center;
	float: right;
	height: 60px;
	justify-content: center;
	width: 40px;
}

.search-box:hover > .search-text {
	-webkit-transition: 0.8s;
	transition: 0.8s;
	width: 240px;
}

.search-box:hover > .search-btn {
	background: white;
}

input[type="text"].search-text {
	background: none;
	border: none;
	color: #7f7f7f;
	font-size: 12px;
	letter-spacing: 0.2em;
	line-height: 40px;
	outline: none;
	padding: 0;
	text-align: center;
	text-transform: uppercase;
	-webkit-transition: 0.4s;
	transition: 0.4s;
	width: 0;
}

@media (min-width: 1600px) {
	.gallery-image .vertical-item.content-absolute .item-content {
		bottom: 27%;
		left: 0;
		padding: 20px 40px;
		position: absolute;
		right: 0;
		z-index: 2;
	}
}

.page_header.ds.affix .search-box {
	display: none;
}

.footer-form .form-group .btn-maincolor {
	padding: 26px 51px;
}

.footer-form .form-group:hover {
	background-color: transparent;
	color: #fff;
}

.footer-form .form-group .form-control {
	text-align: left;
}

.footer-form .form-group .form-control::-webkit-input-placeholder {
	text-align: left;
}

@media (max-width: 1199px) {
	.header-layuot3 span {
		text-align: center;
	}
}

.form-left .form-control {
	text-align: left;
}

.form-left .form-control::-webkit-input-placeholder {
	text-align: left;
}

@media (max-width: 991px) {
	.widget-block {
		margin-top: -20px;
	}
}

.header-padding {
	padding: 30px 0;
}

.header-padding.affix {
	padding: 10px 0;
}

.header-padding.affix .main-toggle {
	margin-top: 10px;
}

@media (max-width: 991px) {
	.header-padding {
		padding: 5px 0;
	}
}

.social_part {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
}

.social_part a {
	display: block;
	width: 100%;
}

.social_part a.fa.color-bg-icon {
	margin-left: 0;
	margin-right: 1px;
}

.social_part a.fa:last-child {
	margin-right: 0;
}

.social_part a.color-bg-icon:before {
	height: 4.3em;
	line-height: 4.3em;
}

.book-item {
	margin-top: -45px;
}

@media (max-width: 761px) {
	.book-item {
		margin-top: 30px;
		overflow: visible !important;
	}
}

.book-item .corner.corner-light:before,
.book-item .corner.corner-light:after {
	border-color: transparent #f2f2f2;
}

.book-item .text-block .btn-book-section {
	margin-bottom: -1px;
}

.book-item .text-block h5 {
	line-height: 35px;
	margin: 0 0 24px;
}

@media (max-width: 767px) {
	.book-item .text-block h5 {
		font-size: 21px;
		line-height: 30px;
		margin: 0 0 23px;
	}
}

.book-item .text-block h1 {
	line-height: 50px;
	margin: 1px 0 23px;
}

.book-item .book {
	padding-left: 15px;
}

@media (max-width: 767px) {
	.book-item .book {
		padding: 0 30px;
	}
}

.book-item .book .stage {
	display: inline-block;
	margin: 0;
	max-width: 100%;
	overflow: hidden;
	position: relative;
	-webkit-transform: translateZ(0);
	transform: translateZ(0);
}

@media (max-width: 991px) {
	.book-item .book .stage.book-3 {
		margin-bottom: -35px;
	}
}

.book-item .book .stage header {
	padding: 70px 0 23px;
}

@media (max-width: 767px) {
	.book-item .book .stage header {
		padding: 25px 0;
	}

	.book-item .book .stage header h6 {
		font-size: 25px;
	}
}

@media (min-width: 768px) and (max-width: 1199px) {
	.book-item .book .stage header {
		padding: 40px 0 20px 0;
	}
}

.book-item .book .stage div {
	bottom: 0;
	left: 0;
	padding: 50px;
	position: absolute;
	right: 0;
	top: 0;
}

@media (max-width: 767px) {
	.book-item .book .stage div {
		padding: 50px 40px;
	}
}

@media (min-width: 991px) and (max-width: 1199px) {
	.book-item .book .stage div {
		padding: 30px;
	}
}

.book-item .book .stage.book-1 div {
	background-image: url("{{ asset('frontend_assets/images') }}/book-hov-3.png");
}

.book-item .book .stage.book-2 div {
	background-image: url("{{ asset('frontend_assets/images') }}/book-hov-2.png");
	
}

.book-item .book .stage.book-2 a {
	color:#fff !important;
}

.book-item .book .stage.book-3 div {
	background-image: url("{{ asset('frontend_assets/images') }}/book-hov-1.png");
}

.book-item .book .stage * {
	box-sizing: border-box;
	-webkit-transition: all 0.35s ease;
	transition: all 0.35s ease;
}

.book-item .book .stage * p {
	margin-bottom: 26px;
}

.book-item .book .stage:hover div {
	-webkit-transform: translate(0, 0);
	-ms-transform: translate(0, 0);
	transform: translate(0, 0);
}

.book-item .book .stage div {
	-webkit-transform: translateY(100%);
	-ms-transform: translateY(100%);
	transform: translateY(100%);
}

.margin-negative {
	margin-left: 12px;
	margin-top: -120px;
}

@media (max-width: 767px) {
	.margin-negative {
		margin-left: 10px;
	}
}

@media (max-width: 991px) {
	.bottom-wrap {
		margin-top: 40px;
	}
}

.page_header.header5 {
	z-index: 3;
}

.doc h1,
h2,
h3,
h4,
h5 {
	line-height: 60px;
}

.custom-pagination nav{
    width: 100%;
    display: flex;
    justify-content: space-between;
}

.custom-pagination nav a,
.custom-pagination nav span
{
    display: inline-block;
    color: #1f2732;
    border: 3px solid var(--theme-color) !important;
	background: var(--theme-color) !important;
	opacity: 0.8;
}

.custom-pagination nav a:hover{
    color: #ffffff;
    background-color: var(--theme-color) !important;
    border-color: var(--theme-color) !important;
	opacity: 1;
}

.footer_logo_class{
	max-height: 180px;
}

/* vaertical line css */
	.dotted__list{
		margin: 0;
		padding: 0;
		list-style-type: none;
		color:var(--theme-color);
	}
	.dotted_list_item{
		width: 4px;
		height: 14px;
		border-radius: 10px;
		background-color: currentColor;
		margin-left: auto;
		margin-right: auto;
	}
	.dotted_list_item:not(:first-child){
		margin-top: 7px;
	}

	.foot_bg{
		background-color: var(--theme-footer-bg) !important;
	}
	.process-dot{
		margin-top:-123px !important;
	}

	.service_details_img{
		max-height: 370px !important;
	}

</style>
