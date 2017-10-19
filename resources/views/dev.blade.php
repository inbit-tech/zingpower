@extends ('master')

@section ('custom-css')
<style type="text/css" media="screen">
	/*
 * Globals
 */

@media (min-width: 48em) {
  html {
    font-size: 18px;
  }
}

body {
  font-family: Georgia, "Times New Roman", Times, serif;
  color: #555;
}

h1, .h1,
h2, .h2,
h3, .h3,
h4, .h4,
h5, .h5,
h6, .h6 {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: normal;
  color: #333;
}


/*
 * Override Bootstrap's default container.
 */

.container {
  max-width: 60rem;
}


/*
 * Masthead for nav
 */

.blog-masthead {
  margin-bottom: 3rem;
  background-color: #428bca;
  -webkit-box-shadow: inset 0 -.1rem .25rem rgba(0,0,0,.1);
          box-shadow: inset 0 -.1rem .25rem rgba(0,0,0,.1);
}

/* Nav links */
.nav-link {
  position: relative;
  padding: 1rem;
  font-weight: 500;
  color: #cdddeb;
}
.nav-link:hover,
.nav-link:focus {
  color: #fff;
  background-color: transparent;
}

/* Active state gets a caret at the bottom */
.nav-link.active {
  color: #fff;
}
.nav-link.active:after {
  position: absolute;
  bottom: 0;
  left: 50%;
  width: 0;
  height: 0;
  margin-left: -.3rem;
  vertical-align: middle;
  content: "";
  border-right: .3rem solid transparent;
  border-bottom: .3rem solid;
  border-left: .3rem solid transparent;
}


/*
 * Blog name and description
 */

.blog-header {
  padding-bottom: 1.25rem;
  margin-bottom: 2rem;
  border-bottom: .05rem solid #eee;
}
.blog-title {
  margin-bottom: 0;
  font-size: 2rem;
  font-weight: normal;
}
.blog-description {
  font-size: 1.1rem;
  color: #999;
}

@media (min-width: 40em) {
  .blog-title {
    font-size: 3.5rem;
  }
}


/*
 * Main column and sidebar layout
 */

/* Sidebar modules for boxing content */
.sidebar-module {
  padding: 1rem;
  /*margin: 0 -1rem 1rem;*/
}
.sidebar-module-inset {
  padding: 1rem;
  background-color: #f5f5f5;
  border-radius: .25rem;
}
.sidebar-module-inset p:last-child,
.sidebar-module-inset ul:last-child,
.sidebar-module-inset ol:last-child {
  margin-bottom: 0;
}


/* Pagination */
.blog-pagination {
  margin-bottom: 4rem;
}
.blog-pagination > .btn {
  border-radius: 2rem;
}


/*
 * Blog posts
 */

.blog-post {
  margin-bottom: 4rem;
}
.blog-post-title {
  margin-bottom: .25rem;
  font-size: 2.5rem;
}
.blog-post-meta {
  margin-bottom: 1.25rem;
  color: #999;
}


/*
 * Footer
 */

.blog-footer {
  padding: 2.5rem 0;
  color: #999;
  text-align: center;
  background-color: #f9f9f9;
  border-top: .05rem solid #e5e5e5;
}
.blog-footer p:last-child {
  margin-bottom: 0;
}
</style>
@endsection

@section ('content')
<div class="container" style="margin-top:50px; height: 80%">
      <div class="row">
        <div class="col-sm-8 blog-main">
        	<div class="blog-post">
        		<ul>
              <li>News data with migrate files in /database/migrations</li>
              <li>Merged with master branch</li>
              <li>[COMPLETE] Solutions Sample Pages</li>
              <li>[COMPLETE] Products Sample Pages - Completed</li>
              <li>[COMPLETE] News Page - Completed</li>
        			<li>[COMPLETE] About Page - Completed</li>
        			<li>Restore master branch</li>
        		</ul>
        	</div>
        </div>

        <div class="col-sm-3 offset-sm-1 blog-sidebar">
        	<div class="sidebar-module sidebar-module-inset">
	            <h4>zingpower.co</h4>
	            <p>Everything about notes and bugs of project.</p>
        	</div>
        </div>
      </div>
    </div>
@endsection