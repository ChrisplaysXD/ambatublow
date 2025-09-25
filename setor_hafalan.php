<?php $fullname = "Daniel Wijaya"; ?>
<?php 
$data = [
    ["nama" => "Lumpur Lapindo Blukutuk-Blukutuk", "id" => 873305541],
    ["nama" => "Anggrek Mekar Pontianak", "id" => 235656742],
    ["nama" => "Farhan Kebab", "id" => 873323987],
    ["nama" => "Pemandangan Sejuk Sulawesi Timur", "id" => 838686801],
    ["nama" => "Yes King", "id" => 873377843],
];
?>
<html>
  <head></head>
  <body>
    <h1>Welcome <?php echo $fullname; ?></h1>
    <ul>
        <?php foreach($data as $d) : ?>
          <li><?= $d["id"]; ?> - <?= $d["nama"]; ?></li>
        <?php endforeach; ?>
    </ul>
  </body>
</html>
