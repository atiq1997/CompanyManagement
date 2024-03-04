<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Company</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Company Details</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('companies.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Company Name:</strong>
                    {{ $company->name }}
                </div>
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $company->email }}
                </div>
                <div class="form-group">
                    <strong>Address:</strong>
                    {{ $company->address }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>
