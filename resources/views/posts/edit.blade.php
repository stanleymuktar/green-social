<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous defer"></script>
</head>
<body>
    <div class="container mt-3">
        <h1 class="mb-3">Edit a Post</h1>
        @isset($post)
            @foreach ($errors->all() as $error)
                <p class="text-danger">{{ $error }}</p>
            @endforeach
            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="message" class="form-label">Enter Updated Message</label>
                    <textarea class="form-control" name="message" id="message" rows="3" required>{{ $post->message }}</textarea>
                </div>
                <label for="image" class="form-label">Upload image</label>
                <div class="row mb-3">
                    <div class="col-4">
                        <input class="form-control" type="file" id="image" name="image" accept="image/*">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @else
            <p> Post cannot be found.</p>
        @endisset
        
    </div>
</body>
</html>
