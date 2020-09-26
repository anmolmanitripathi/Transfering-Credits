<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo">TASK-6</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page landing-page">
        <section class="clean-block clean-hero" style="background-image:url(&quot;assets/img/tech/image4.jpg&quot;);color:rgba(9, 162, 255, 0.85);">
            <div class="text">
                <h2>CREDIT MANAGEMENT</h2>
                <p>Transfer Credit from one user to other.<br>(All the data in this website is dummy data)</p><a class="btn btn-outline-light btn-lg" href="#tables">TRANSFER DATA</a></div>
        </section>
        <section class="clean-block features" id="tables">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">All User Data</h2>
                </div>
            </div>
            <div class="col-md-12 search-table-col">
                <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing here.."></div><span class="counter pull-right"></span>
                <div class="table-responsive table-bordered table table-hover table-bordered results">
                    <table class="table table-bordered table-hover">
                        <thead class="bill-header cs">
                                <th id="trs-hd" class="col-lg-1">ID</th>
                                <th id="trs-hd" class="col-lg-2">Customer Name</th>
                                <th id="trs-hd" class="col-lg-3">Customer Email</th>
                                <th id="trs-hd" class="col-lg-2">Credit Remaining</th>
                                <th id="trs-hd" class="col-lg-2">Action</th>
                        </thead>
                        <tbody id="display_table">
                            <tr class="warning no-result">
                                <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="https://github.com/anmolmanitripathi/Project-Task-6-Credit-Management">Github project</a></li>
                        <li><a href="https://www.linkedin.com/in/anmol-mani-tripathi-5978981a3/">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2020 (An Internship Project)</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
    <script>
    	$.ajax({
	    	url: "view_ajax.php",
		    type: "POST",
    		cache: false,
	    	success: function(data){
		    	$('#display_table').html(data); 
		    }
	    });
    </script>
</body>

</html>