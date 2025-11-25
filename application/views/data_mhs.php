<?php

//defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <!-- <script></script> -->
<link rel="stylesheet" href="<?php echo base_url('assets/tailexport.css'); ?>">
</head>
<body>
     <table class="border-collapse border-2 border-slate-500">
          <tr>
               <th>no</th>
               <th>nim</th>
               <th>nama</th>
               <th>agama</th>
               <th>alamat</th>
               <th>asal sekolah</th>
          </tr>

     <?php
     $no = 1;
     foreach ($dt as $d) {

          
     
     
     ?>

          <tr>
               <td><?php echo $no; ?></td>
               <td><?php echo $d['nim'] ?></td>
               <td><?php echo $d['nama'] ?></td>
               <td><?php echo $d['agama'] ?></td>
               <td><?php echo $d['alamat'] ?></td>
               <td><?php echo $d['asal_sekolah'] ?></td>
               <td>
                    <a href="#"><button>edit</button></a>
                    <a href="#"><button>delete</button></a>
               </td>
          </tr>

<?php
$no++;

     }
?>
     </table>
</body>
</html>