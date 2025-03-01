<?php 
    session_start();
    include_once('includes/checklogin.php');
    include_once('../includes/config.php');

    if(isset($_POST['Update'])){
        $district = $_POST['district'];
        $tractor = $_POST['tractor'];
        $lawnmower = $_POST['lawnmower'];
        $pesticide = $_POST['pesticide'];
        $getPlant = $_POST['getPlant'];
        $getBean = $_POST['getBean'];
        $general = $_POST['general'];

        $sql = "update beancost set tractor=:tractor,lawnmower=:lawnmower,pesticide=:pesticide, getPlant=:getPlant, general=:general, getBean=:getBean where district_id=:id";
        
        $data = [
            'tractor' => $tractor,
            'lawnmower' => $lawnmower,
            'pesticide' => $pesticide,
            'getPlant' => $getPlant,
            'general' => $general,
            'getBean' => $getBean,
            'id' => $district
        ];     
        $stmt=$conn->prepare($sql);
        $stmt->execute($data);
        if(($stmt->rowCount()) > 0){
            echo "<script>alert('Update successful');</script>";
            echo "<script type='text/javascript'> document.location = 'beanInput.php'; </script>";
        }
    }
?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Ayeyar Farmer Hub || Admin</title>
            
            <!-- Favicon -->
            <link rel="icon" type="image/x-icon" href="../img/title_logo.png">

            <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
            <link href="css/styles.css" rel="stylesheet" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

        </head>
        <body class="sb-nav-fixed">
        <?php include_once('includes/navbar.php');?>
            <div id="layoutSidenav">
            <?php include_once('includes/sidebar.php');?>
                
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Bean Cost</h1>
                        <ol class="breadcrumb mb-5">
                            <li class="breadcrumb-item active">Bean Cost</li>
                        </ol>
                        <form method="post">
                            <div class="row">
                                <label class="col-sm-4 control-label fw-bold fs-5 text-sm-end"> အမျိုးအစား : </label>
                                <div class="col-sm-6 mb-4">
                                    <select class="form-select" name="district" id="district" aria-label="Large select example" required>
                                        <option selected disabled>ခရိုင်</option>
                                        <?php
                                            $sql ="select * from districts";
                                            $statement = $conn->prepare($sql);
                                            $statement->execute();
                                            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($result as $row){
                                        ?>
                                            <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row" id="datainput">
                                <div class="col-sm-3 mx-4 my-2">
                                    <label class="control-label fw-bold text-sm-end my-2">ထွန်စက်မောင်းခ : </label>
                                    <input type="number" class="form-control" name="tractor" id="tractor">
                                </div>
                                <div class="col-sm-3 mx-4 my-2">
                                    <label class="control-label fw-bold text-sm-end my-2">မြေညှိစက်ခုတ် : </label>
                                    <input type="number" class="form-control" name="lawnmower" id="lawnmower">
                                </div>
                                <div class="col-sm-3 mx-4 my-2">
                                    <label class="control-label fw-bold text-sm-end my-2">အားဆေး၊ ပိုးသတ်ဆေးဖိုး : </label>
                                    <input type="number" class="form-control" name="pesticide" id="pesticide">
                                </div>
                                <div class="col-sm-3 mx-4 my-2">
                                    <label class="control-label fw-bold text-sm-end my-2">ပဲနှုတ်ခ : </label>
                                    <input type="number" class="form-control" name="getPlant" id="getPlant">
                                </div>
                                <div class="col-sm-3 mx-4 my-2">
                                    <label class="control-label fw-bold text-sm-end my-2">ပဲခြွေခ : </label>
                                    <input type="number" class="form-control" name="getBean" id="getBean">
                                </div>
                                <div class="col-sm-3 mx-4 my-2">
                                    <label class="control-label fw-bold text-sm-end my-2">အထွေထွေကုန်ကျစရိတ် : </label>
                                    <input type="number" class="form-control" name="general" id="general">
                                </div>
                                <br>
                                <div class="col-sm-2 mx-4 my-2">
                                    <input type="submit" class="btn btn-success" name="Update" value="Update">
                                </div>
                            </div> 
                        </form>                  
                    </div>
                </main>
            </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="js/datatables-simple-demo.js"></script>

            <script>
                $(document).ready(function (){
                    $("#datainput").hide();          
                    $("#district").on('change', function (e){
                        e.preventDefault();
                        var districtId = $('#district').val();
                        console.log(districtId);
                        request = $.ajax({
                            type: "POST",
                            url: 'getBeanCost.php',
                            data: {
                                districtId:districtId
                            }
                        });

                        request.done(function (response, textStatus, jqXHR){
                            var jsonData = JSON.parse(response);
                            var htmlText;
                            $.each(jsonData, function (i,v){
                                console.log(v.tractor);
                                $("#tractor").val(v.tractor);
                                $("#lawnmower").val(v.lawnmower);
                                $("#pesticide").val(v.pesticide);
                                $("#getPlant").val(v.getPlant);
                                $("#general").val(v.general);
                                $("#getBean").val(v.getBean);

                                $("#datainput").show();         
                            });
                        });

                        request.fail(function (jqXHR, textStatus, errorThrown){
                            console.error(
                                "The following error occurred: "+
                                textStatus, errorThrown
                            );
                        });
                        
                    });
                });
            </script>
        </body>
    </html>
