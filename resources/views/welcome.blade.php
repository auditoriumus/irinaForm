<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-3">
    @if(isset($messages))
        @foreach($messages as $message)
            <div class="alert alert-success" role="alert">
                {{$message}}
            </div>
        @endforeach
    @endif
    @if(isset($errors))
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
    @endif
    <form action="{{route('create')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="fio" class="form-label">ФИО</label>
            <input type="text" class="form-control" id="fio" placeholder="" name="fio" value="{{old('fio')}}" required>
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Страна</label>
            <input type="text" class="form-control" id="country" placeholder="" name="country" value="{{old('country')}}" required>
        </div>
        <div class="mb-3">
            <label for="town" class="form-label">Город</label>
            <input type="text" class="form-control" id="town" placeholder="" name="town" value="{{old('town')}}" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Телефон</label>
            <input type="text" class="form-control" id="phone" placeholder="" name="phone" value="{{old('phone')}}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="" name="email" value="{{old('email')}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>