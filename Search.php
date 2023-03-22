
<?php
$search_query = $_GET['search_query'];

// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "database_name");

// Run the SQL query
$sql = "SELECT * FROM recipes WHERE name LIKE '%$search_query%' OR ingredients LIKE '%$search_query%' OR keywords LIKE '%$search_query%'";
$result = mysqli_query($conn, $sql);

// Process the search results
while ($row = mysqli_fetch_assoc($result)) {
  // Display the recipe information to the user
  echo $row['name'] . "<br>";
  echo $row['ingredients'] . "<br>";
  echo $row['cooking_time'] . "<br>";
  echo $row['dietary_restrictions'] . "<br>";
  echo $row['keywords'] . "<br>";
}
// Process the search results
while ($row = mysqli_fetch_assoc($result)) {
    // Display the recipe information to the user
    echo "<h2>" . $row['name'] . "</h2>";
    echo "<p>" . $row['ingredients'] . "</p>";
    echo "<p>Cooking time: " . $row['cooking_time'] . " minutes</p>";
    echo "<p>Dietary restrictions: " . $row['dietary_restrictions'] . "</p>";
    echo "<p>Keywords: " . $row['keywords'] . "</p>";
  }
  