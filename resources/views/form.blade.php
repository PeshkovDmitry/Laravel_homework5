<html>
    <head>
    </head>
    <body>
        <form name="employee-form" id="emlpoyee-form" method="post" action="{{ url('store-form') }}">
            @csrf
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" name="name" id="name" class="form-control" required="true">
            </div>
            <div class="form-group">
                <label for="lastname">Фамилия</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required="true">
            </div>
            <div class="form-group">
                <label for="position">Должность</label>
                <input type="text" name="position" id="position" class="form-control" required="true">
            </div>
            <div class="form-group">
                <label for="email">Почта</label>
                <input type="email" name="email" id="email" class="form-control" required="true">
            </div>
            <div class="form-group">
                <label for="workData">Информация</label>
                <textarea name="workData" class="form-control" cols="30" rows="30" required="true"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <form method="post" action="{{ url('/user/1') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Submit for update</button>
        </form>

    </body>
</html>