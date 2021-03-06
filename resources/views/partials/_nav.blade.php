<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Laravel Blog</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="/blog">Blog</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                  <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                       <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search for a blog">
                          <span class="input-group-btn">
                             <button class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                             </button>
                          </span>
                      </div>
                    </div>
                  </form>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My account <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                       <li><a href="#">Dashboard</a></li>
                       <li><a href="#">My Profile</a></li>
                       <li><a href="#">My Blog</a></li>
                       <li><a href="#">Create New Post</a></li>
                       <li><a href="#">Log Out</a></li>
                     </ul>
                  </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
   </div>
   <!-- /.container -->
</nav>
