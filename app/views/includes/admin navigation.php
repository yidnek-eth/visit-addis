

    <!-- header
================================================== -->
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Visit Addis</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li data-toggle="modal" data-target="#addPage"><a href="#">Add Page</a></li>
                <li><a href="<?php echo URLROOT;?>/admins/addTourismSite">Add Tourism Site</a></li>
                <li><a href="<?php echo URLROOT;?>/admins/addUser">Add Employee</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

<!-- breadcrumb
================================================== -->
    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>