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
    
</body>
</html>