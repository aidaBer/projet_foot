<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
</head>
<body>
    <?php include_once("database.php"); ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Liste des sites
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th><i class="fa fa-user fa-fw"></i>Nom</th>
                                            <th><i class="fa fa-user fa-fw"></i>URL</th>
                                            <th><i class="fa fa-user fa-fw"></i>Description</th>
                                    

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                             $sites = getSites();

                                            foreach( $sites as $site)
                                            {
                                                echo '<tr>';
                                                echo '<td>'.$site['nom'].'</td> <td>'.$site['URL'].'</td>   <td>'.$site['description'].'</td>';
                                                echo '</tr>';
                                            }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>




            </div>
            <!-- /.row -->

            
</body>
</html>