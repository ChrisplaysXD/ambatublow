<?php
$data = [
    ["id" => 12345, "username" => "ary",],
    ["id" => 123456, "username" => "rbrt",],
    ["id" => 1234567, "username" => "antok",],
];

// echo $data["email"];
echo "<div>";
echo "<p>";
print_r($data);

echo "<div>";
echo "<p>";
echo $data[1]["username"];

for($i = 0; $i < count($data); $i++)
{
    print_r($data[$i]);
    echo "<div>";
    echo "<p>";
    echo "<div>" . $data[$i]["username"] . "</div>";
    echo "<div>";
    echo "<p>";
    echo "id: ".$data[$i]["id"].", username: ".$data[$i]["username"];
}

foreach($data as $row)
{
    echo "<div>" . $row["username"] . "</div>";
}
?>

<?php
if($i < 5){
  echo "true";
}else if(5 <= $i and $i < 10) {
  echo "false";
}else{
  echo "unknown";
}
?>

<?php
function makecoffee($type = "cappuccino")
{
  return "Making a cup of $type.\n";
}
echo makecoffee();
echo makecoffee(null);
echo makecoffee("espresso");
?>
