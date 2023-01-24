$upload_files = $_FILES['upload_files'];
    echo '<pre>';
    print_r($_FILES['upload_files']);
    echo '</pre>';

    $img_loc = $_FILES['upload_files']['tmp_name'];
    $img_name = $_FILES['upload_files']['name'];
    $upload_files = 'upload_files/' . $img_name;
    move_uploaded_file($img_loc, 'upload_files/' . $img_name);