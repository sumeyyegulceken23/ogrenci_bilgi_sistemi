<?php include 'baglan.php';
$alinan_dersler="SELECT * FROM alinan_dersler";
$alinan_derslersorgu=mysqli_query($baglan,$alinan_dersler);
$alinan_derslercek=mysqli_fetch_assoc($alinan_derslersorgu);

$tcek="SELECT * FROM alinan_dersler";
$tsorgu=mysqli_query($baglan,$tcek);
?>  
<?php include 'inc/navbar.php'; ?>
 <main>
    <div class="container-fluid my-3">
    <table class="table">
      <thead>
        <tr class="btn-dark" >
          <th scope="col">Ders_kodu</th>
          <th scope="col">Ders_adi</th>
          <th scope="col">Kredi</th>
          <th scope="col">T+U</th>
          <th scope="col">AKTS</th>
          <th scope="col">Sinif</th>
          <th scope="col">Z/S</th>
          <th scope="col">Program</th>
          <th scope="col">Dil</th>
          <th scope="col">ogretim_elemani</th>
        </tr>
      </thead>
    <tbody>
    <?php  while($tcek = mysqli_fetch_assoc($tsorgu)) { ?>
    	<tr>
    <td><?php echo $tcek['Ders_kodu'];?></td>
    <td><?php echo $tcek['Ders_adi'];?></td>
    <td><?php echo $tcek['Kredi'];?></td>
    <td><?php echo $tcek['T+U'];?></td>
    <td><?php echo $tcek['AKTS'];?></td>
    <td><?php echo $tcek['Sinif'];?></td>
    <td><?php echo $tcek['Z/S'];?></td>
    <td><?php echo $tcek['Program'];?></td>
    <td><?php echo $tcek['Dil'];?></td>
    <td><?php echo $tcek['ogretim_elemani'];?></td		
</tr>
     <?php } ?>