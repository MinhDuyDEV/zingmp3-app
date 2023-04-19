<?php
// Establish a connection to the MySQL database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the API endpoints
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['users'])) {
    // Retrieve all users
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $users = array();
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        header('Content-Type: application/json');
        echo json_encode($users);
    } else {
        header('HTTP/1.1 404 Not Found');
        echo "No users found.";
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    // Create a new user
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$username', '$password')");
    if ($conn->query($sql) === TRUE) {
        echo "User created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['users']) && isset($_GET['id'])) {
    // Retrieve a single user by ID
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        header('Content-Type: application/json');
        echo json_encode($user);
    } else {
        header('HTTP/1.1 404 Not Found');
        echo "User not found.";
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'PUT' && isset($_GET['users']) && isset($_GET['id']) && isset($_POST['username']) && isset($_POST['password'])) {
    // Update a user by ID
    $id = $_GET['id'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "UPDATE users SET username='$username', password='$password
    WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    echo "User updated successfully";
} else {
    echo "Error updating user: " . $conn->error;
}
} elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE' && isset($_GET['users']) && isset($_GET['id'])) {
// Delete a user by ID
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    echo "User deleted successfully";
} else {
    echo "Error deleting user: " . $conn->error;
}

} else {
header('HTTP/1.1 400 Bad Request');
echo "Invalid request.";
}

// Close the connection to the MySQL database
$conn->close();
?>
<?php
// Retrieve the request body as JSON
$requestBody = json_decode(file_get_contents('php://input'));

// Retrieve the username and password from the request body
$username = $requestBody->username;
$password = password_hash($requestBody->password, PASSWORD_DEFAULT);

// Insert the new user into the database
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "User created successfully";
} else {
    echo "Error creating user: " . $conn->error;
}
?>