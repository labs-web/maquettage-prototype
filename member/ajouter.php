<!DOCTYPE html>
<html lang="en">

<!-- get heade -->
<?php include_once "../layouts/heade.php" ?>

<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <!-- nav -->
        <?php include_once "../layouts/nav.php" ?>
        <!-- aside -->
        <?php include_once "../layouts/aside.php" ?>



        <div class="content-wrapper" style="min-height: 1302.4px;">

<div class="content-header">
    <!-- <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>List des Members</h1>
            </div>
            <div class="col-sm-6">
                <div class="float-sm-right">
                    <a href="./ajouter.html" class="btn btn-sm btn-primary">Ajouter Member</a>
                </div>
            </div>
        </div>
    </div> -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Ajouet Member</h3>
                    </div>
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nom </label>
                                <input name="nom" type="text" class="form-control"
                                    id="exampleInputEmail1" placeholder="Enter Nom">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Prenom</label>
                                <input name="Prenom" type="text" class="form-control"
                                    id="exampleInputPassword1" placeholder="Enter Prenom">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input name="startDate" type="email" class="form-control"
                                    id="exampleInputPassword1" placeholder="Enter Email">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input name="Password" type="password" class="form-control"
                                    id="exampleInputPassword1" placeholder="Enter Password">
                            </div>

                        </div>

                        <div class="card-footer">
                            <a href="./index.html" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</section>

</div>


       <!-- get footer -->
       <?php include_once "../layouts/footer.php" ?>

    </div>

    <!-- get script -->
    <?php include_once "../layouts/footer.php" ?>
</body>

</html>