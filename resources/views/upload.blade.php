<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload Files</title>
    </head>
    <body>
        <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="images[]" multiple>
            <input type="submit" value="Upload Files">
        </form>
    </body>
</html>