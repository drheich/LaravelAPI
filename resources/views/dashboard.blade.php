<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
<<<<<<< HEAD
<<<<<<< HEAD
            {{ __('Profile') }}
=======
            {{ __('Dashboard') }}
>>>>>>> 9e520cd5d3846cdf738477017850353657e5b3b8
=======
            {{ __('Dashboard') }}
>>>>>>> 9e520cd5d3846cdf738477017850353657e5b3b8
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
<<<<<<< HEAD
<<<<<<< HEAD
               
            </div>
        </div>
    </div>
    <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Laravel Image Upload</title>
    <style>
        .container {
            max-width: 500px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .imgPreview img {
            padding: 8px;
            max-width: 100px;
        } 
    </style>
</head>

<body>

    <div class="container mt-5">
        <h3 class="text-center mb-5">Upload Images </h3>
        <form action="{{route('imageUpload')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="user-image mb-3 text-center">
                <div class="imgPreview"> </div>
            </div>            

            <div class="custom-file">
                <input type="file" name="imageFile[]" class="custom-file-input" id="images" multiple="multiple">
                <label class="custom-file-label" for="images">Choose image</label>
            </div>

            <button type="submit" name="submit" class="btn btn-dark btn-sm mt-4">


                Upload
            </button>
        </form>
    </div>
  
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(function() {
        
        var multiImgPreview = function(input, imgPreviewPlaceholder) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#images').on('change', function() {
            multiImgPreview(this, 'div.imgPreview');
        });
        });    
    </script>

    
</body>
</html>
</x-app-layout>


=======
=======
>>>>>>> 9e520cd5d3846cdf738477017850353657e5b3b8
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
<<<<<<< HEAD
>>>>>>> 9e520cd5d3846cdf738477017850353657e5b3b8
=======
>>>>>>> 9e520cd5d3846cdf738477017850353657e5b3b8
