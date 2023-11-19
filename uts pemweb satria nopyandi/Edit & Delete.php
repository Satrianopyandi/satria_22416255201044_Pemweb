function edit($id) {
        $product = mysqli_query($db_connect,"SELECT * FROM products WHERE id = '$id'");
        $product = $product->fetch_assoc();

        return $product;
    }

function delete($id) {
        $query = "DELETE FROM products WHERE id = '$id'";
        $result = mysqli_query($db_connect,$query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }