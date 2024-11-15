<html>
    <head>
    </head>
    <body>
        <form name="employee-form" id="emlpoyee-form" method="post" action="{{ url('store-form') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required="true">
            </div>
            <div class="form-group">
                <label for="email">Description</label>
                <input type="email" name="email" id="email" class="form-control" required="true">
            </div>
            <div class="form-group">
                <label for="workData">workData</label>
                <textarea name="workData" class="form-control" required="true"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>