# \_S Underscores container map

## Basic structure

```html
<body>
  <div id="page" class="site">
    <header id="masthead" class="site-header">
      Header
    </header><!-- #masthead -->

    <main id="primary" class="site-main">
      Main
    </main><!-- #main -->

    <aside id="secondary" class="widget-area">
      Sidebar
    </aside><!-- #secondary -->

    <footer id="colophon" class="site-footer">
      Footer
    </footer><!-- #colophon --> 
  </div>
</body>
```

## Page container map

```html
<article class="hentry">
  <header class="entry-header">
    <h1 class="entry-title">
      Page Title
    </h1>
  </header><!-- .entry-header -->

  <div class="entry-content">
    Content
  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <span class="cat-links">Posted in <a>Categories</a></span>
    <span class="tags-link">Tagged <a>Tags</a></span>
    <span class="comments-link"><a>Post a comment</a></span>
    <span class="edit-link"><a>Edit</a></span>
  </footer><!-- .entry-footer -->
</article><!-- .hentry -->
```

## Post container map

```html
<article class="hentry">
  <header class="entry-header">
    <h2 class="entry-title">
      <a>Post Title</a>
    </h2>

    <div class="entry-meta">
      Posted On
    </div><!-- .entry-meta -->
  </header><!-- .entry-header -->

  <div class="entry-content">
    Content
  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <span class="cat-links">Posted in <a>Categories</a></span>
    <span class="tags-link">Tagged <a>Tags</a></span>
    <span class="comments-link"></span>
    <span class="edit-link"></span>
  </footer><!-- .entry-footer -->
</article><!-- .hentry -->
```
