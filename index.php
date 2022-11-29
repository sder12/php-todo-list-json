<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDo List JSON</title>

    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- MY STYLE -->
    <link rel="stylesheet" href="css/style.css">
    <!-- VUE -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- API -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>

<body>
    <div class="ms_container">
        <!-- Vue Container -->
        <main id="app" class="container mt-5">
            <!-- TITLE -->
            <h1 class="text-center"> {{title}} </h1>

            <!-- LIST -->
            <section class="row my-5 justify-content-center">
                <ul class="list-group col-7">
                    <li class="list-group-item" v-for="item in toDo">{{item.text}}</li>
                </ul>
            </section>

            <!-- INPUT -->
            <section class="ms_input">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Add new task" aria-label="Add new to do" v-model="newTask">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" @click="createNewTask">Add</button>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script src="js/script.js"></script>
</body>

</html>