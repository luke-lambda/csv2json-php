<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>CSV To JSON Converter - PHP</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <div class="input-group mt-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">CSV</span>
                </div>
                <textarea class="form-control" aria-label="CSV"></textarea>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mt-3 w-25">Convert</button>
                <button type="submit" class="btn btn-secondary mt-3 w-25 ml-2">Download</button>
            </div>

            <div class="input-group mt-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">JSON</span>
                </div>
                <textarea class="form-control bg-dark" aria-label="JSON" disabled></textarea>
            </div>
        </form>
    </div>
</body>
</html>