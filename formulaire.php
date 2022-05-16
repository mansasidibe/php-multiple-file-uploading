<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Chargement de fichier</title>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data" class="mb-3">
        // AFFICHAGE DES FICHIER ICI
        <div class="imgGallery">
            <!-- image preview -->
        </div>

        <div class="custom-file">
            <input type="file" name="fileUpload[]" class="custom-file-input" id="chooseFile" multiple>
            <label class="custom-file-label" for="chooseFile">Selectionner vos fichiers</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Charger les fichiers
        </button>
    </form>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
  $(function () {
    // Multiple images preview with JavaScript
    var multiImgPreview = function (input, imgPreviewPlaceholder) {
      if (input.files) {
        var filesAmount = input.files.length;
        for (i = 0; i < filesAmount; i++) {
          var reader = new FileReader();
          reader.onload = function (event) {
            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
          }
          reader.readAsDataURL(input.files[i]);
        }
      }
    };
    $('#chooseFile').on('change', function () {
      multiImgPreview(this, 'div.imgGallery');
    });
  });
</script>


    
</body>
</html>