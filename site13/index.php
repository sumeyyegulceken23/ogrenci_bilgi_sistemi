<?php include 'baglan.php';
$notlar="SELECT * FROM notlar";
$notlarsorgu=mysqli_query($baglan,$notlar);
$notlarcek=mysqli_fetch_assoc($notlarsorgu);

$tcek="SELECT * FROM notlar";
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
          <th scope="col">Durum</th>
          <th scope="col">Sinav_notu</th>
          <th scope="col">Ders_durum</th>
        </tr>
      </thead>
    <tbody>

    <?php  while($tcek = mysqli_fetch_assoc($tsorgu)) { ?>   
        <tr>
          
          <td><?php echo $tcek['Ders_kodu'];?></td>
          <td><?php echo $tcek['Ders_adi'];?></td>
          <td> <?php 
            if ($tcek['Durum']==1) {
              echo "Sonuçlandırıldı";}
            else{
              echo "Sonuçlanmadı";}
            ?>
          </td>
          <td><?php echo $tcek['Sinav_notu'];?></td>
          <td>
            <?php 
            if ($tcek['Ders_durum']=='G'){
              echo "Geçti";
            }
            else{
              echo "kaldı";
            }
            ?>
          </td>

        </tr>
     <?php } ?>
    </tbody>
  </table>
</div>
</main>

<?php include 'inc/footer.php'; 


