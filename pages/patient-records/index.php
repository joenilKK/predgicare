<?php
// $f= 'Lorem ipsum dolor sit amet consectetur adipiscing elit Praesent sapien ex semper ut congue quis consequat sit amet nibh Aenean a ullamcorper ipsum congue vulputate nisi Suspendisse blandit ac nulla nec porta Nunc cursus tincidunt nunc vitae aliquet arcu ultrices ve Suspendisse hendrerit mollis dui at lacinia mauris faucibus ut Vivamus sollicitudin diam quis aliquam convallis nisl libero sagittis metus rutrum ullamcorper dui mi eget metus Donec a tempor risus Mauris auctor eget mauris non lacinia Cras at volutpat arcu Ut nisl est placerat a elementum et volutpat sed leo';
// $m = 'Curabitur fringilla ipsum velit ut facilisis ipsum luctus se Ut pharetra tellus ac augue fringilla semper Nam ultrices suscipit magna eget feugiat lorem vehicula in Pellentesque non erat eget lacus ultricies ultricies quis quis nulla Nullam molestie nulla non diam molestie nec maximus orci commodo Sed lacinia purus sit amet bibendum posuere ligula risus porttitor tortor quis malesuada neque est sed ante Nunc dapibus sem in porttitor iaculis sed leo';
// $l = 'Duis quis malesuada diam at elementum felis Suspendisse in turpis ut massa ultrices tempus Nunc ornare dolor eros nec egestas nulla dapibus sed Cras lacus tortor tempus non velit vitae sollicitudin pulvinar tortor Ut a dui id eros tempor condimentum ac eu elit Morbi augue velit maximus at facilisis quis pellentesque eu dui Nam aliquet ipsum lacus id molestie diam scelerisque non Suspendisse cursus mattis augue a tincidunt massa eleifend sed. Quisque blandit mattis turpis ac maximus';
// for($i = 0;$i<=10;$i++){
//     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $randomString = '';

//     for ($i = 0; $i < 6; $i++) {
//         $index = rand(0, strlen($characters) - 1);
//         $randomString .= $characters[$index];
//     }
//     $fran = rand(1,60);
//     $mran = rand(1,60);
//     $lran = rand(1,60);
//     $fn = explode(' ', trim($f));
//     $mn = explode(' ', trim($m));
//     $ln = explode(' ', trim($l));

//     DB::query("INSERT INTO user
//     VALUES('/',:uFirstName,:uMname,:uLstName,:uDOB,
//             :uAge,:uFSN,:uHusband,:uContact,
//             :uPassword,:uArea,:uRole,:uStatus,:uAdded)", 
//     array(
//         ':uFirstName'=>$fn[$fran],':uMname'=>$mn[$mran],':uLstName'=>$ln[$lran],':uDOB'=>date('Y-m-d'),
//         ':uAge'=>$fran,':uFSN'=>$fran.$mran.$lran,':uHusband'=>$fn[$fran+3],':uContact'=>$mran.$fran.$lran,
//         ':uPassword'=>$randomString,':uArea'=>$mn[$mran].$ln[$lran],':uRole'=>'User',
//         ':uStatus'=>'active',':uAdded'=>date('Y-m-d')
//    ));
// }

?>

<div id="<?= $url?>" class="container-fluid g-0 has-pink">
    <div class="container-fluid g-0 dark-pink"></div>
    <div class="container pt-4 pb-4">
        
        <div class="row">
            <div class="col">
                <table id="patient-record-table" class="table hover table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Patient Number</th>
                            <th>Name</th>
                            <th>Area</th>
                            <th>Contact Number</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>