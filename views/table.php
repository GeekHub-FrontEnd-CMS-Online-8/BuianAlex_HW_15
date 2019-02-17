<?php
require('views/template/header.php');
?>
<div class="table-wraper">
  <table>   
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Surname</th>
          <th>E-mail</th>
          <th>Gender</th>
          <th>B-day</th>
          <th>Family status</th>
          <th>Address</th>
          <th>hobby</th>
          <th>Books</th>
          <th>Val books</th>
          <th>Comment</th>
          <th>Mult select </th>
          <th>complexity </th>
        </tr>
      </thead>
      <tbody>
        <?php
          User::getAllUser();
        ?>
      </tbody> 
    </table>
</div> 

<?php
    require('views/template/footer.php');
?>